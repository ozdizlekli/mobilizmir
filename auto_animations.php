<?php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

// ==========================================
// 1. UPDATE FAR TEMİZLİĞİ (Remove JS, Auto CSS)
// ==========================================
// Replace the Far Temizliği block up to its closing section and script
$far_pattern = '/(<\?php if \( is_page\(\'far-temizligi\'\) \) : \?>).*?(<\?php elseif \( is_page\(\'boyasiz-gocuk-duzeltme\'\) \) : \?>)/s';

$far_new = <<<PHP
$1
  <!-- FAR TEMİZLİĞİ ÖZEL AÇILIŞ (OTOMATİK GEÇİŞ) -->
  <section class="split-hero" id="splitHero">
    <div class="split-layer split-dirty"></div>
    <div class="split-layer split-clean"></div>
    <div class="split-divider"></div>
    <div class="split-content">
      <h1 class="serif"><?php the_title(); ?></h1>
      <p>Lazer berraklığına tanık olun. Geceyi gündüze çeviren teknolojik temizlik işlemi.</p>
    </div>
  </section>
$2
PHP;

$page = preg_replace($far_pattern, $far_new, $page);

// ==========================================
// 2. UPDATE PASTA CİLA (Remove Button, Auto JS)
// ==========================================
$pasta_pattern = '/(<\?php elseif \( is_page\(\'pasta-cila\'\) \) : \?>).*?(<\?php elseif \( is_page\(\'periyodik-bakim\'\) \) : \?>)/s';

$pasta_new = <<<PHP
$1
  <!-- PASTA CİLA SIVI CAM (OTOMATİK) HERO -->
  <section class="liquid-hero" id="liquidHero">
    <div class="liquid-bg liquid-dirty"></div>
    <div class="liquid-bg liquid-clean" id="liquidClean"></div>
    <div class="liquid-wave" id="liquidWave"></div>
    
    <div class="liquid-content">
        <h1 class="serif"><?php the_title(); ?></h1>
        <p>Boyadaki matlığı ve kılcal çizikleri tamamen siliyoruz. "Sıvı Cam" efekti yaratan 9H seramik kalkanı sayesinde aracınız aylarca ilk günkü ıslak parlaklığında kalır.</p>
    </div>
  </section>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const clean = document.getElementById('liquidClean');
        const wave = document.getElementById('liquidWave');
        
        if(!clean) return;
        
        // Otomatik başla
        setTimeout(() => {
            clean.style.transition = 'clip-path 3s cubic-bezier(0.4, 0, 0.2, 1)';
            clean.style.clipPath = 'inset(0 0 0% 0)';
            
            wave.style.transition = 'top 3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s';
            wave.style.opacity = '1';
            wave.style.top = '100%';
            
            setTimeout(() => {
                wave.style.opacity = '0';
            }, 3000);
        }, 800); // Sayfa açıldıktan kısa bir süre sonra
    });
  </script>
$2
PHP;

$page = preg_replace($pasta_pattern, $pasta_new, $page);
file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);


// ==========================================
// 3. UPDATE STYLE.CSS FOR FAR TEMİZLİĞİ
// ==========================================
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

// Remove .split-handle block
$css = preg_replace('/\.split-handle\s*\{.*?\}/s', '', $css);
$css = preg_replace('/\.split-handle::before\s*\{.*?\}/s', '', $css);
$css = preg_replace('/\.split-handle::after\s*\{.*?\}/s', '', $css);

// Update .split-clean
$clean_pattern = '/(\.split-clean\s*\{[^\}]*?\} )/s';
// Actually, it's safer to just replace the whole split-clean and split-divider definitions.
$css = preg_replace('/\.split-clean\s*\{[^\}]*\}/s', <<<CSS
.split-clean {
  z-index: 2;
  filter: contrast(1.1) brightness(1.2) saturate(1.1);
  clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%);
  -webkit-clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%);
  animation: far-reveal 3s cubic-bezier(0.4, 0, 0.2, 1) forwards;
  animation-delay: 0.8s;
}
@keyframes far-reveal {
  0% { clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%); -webkit-clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%); }
  100% { clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); }
}
CSS
, $css);

$css = preg_replace('/\.split-divider\s*\{[^\}]*\}/s', <<<CSS
.split-divider {
  position: absolute;
  top: 0; bottom: 0;
  width: 2px;
  background: var(--gold-bright);
  z-index: 3;
  transform: translateX(-50%);
  box-shadow: 0 0 20px var(--gold-bright), 0 0 40px var(--gold-bright);
  pointer-events: none;
  left: 100%;
  opacity: 0;
  animation: far-line 3s cubic-bezier(0.4, 0, 0.2, 1) forwards;
  animation-delay: 0.8s;
}
@keyframes far-line {
  0% { left: 100%; opacity: 0; }
  5% { opacity: 1; }
  95% { opacity: 1; }
  100% { left: 0%; opacity: 0; }
}
CSS
, $css);

// Optional: remove liquid-btn from CSS
$css = preg_replace('/\.liquid-btn\s*\{.*?\}/s', '', $css);
$css = preg_replace('/\.liquid-btn:hover\s*\{.*?\}/s', '', $css);

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);

echo "Automated animations applied!\n";
