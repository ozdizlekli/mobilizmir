<?php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

$pasta_pattern = '/(<\?php elseif \( is_page\(\'pasta-cila\'\) \) : \?>).*?(<\?php else : \?>\s*<!-- NORMAL PAGE HERO -->)/s';

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
echo "Pasta Cila fixed!\n";
