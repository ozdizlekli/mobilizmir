<?php
// 1. UPDATE PAGE.PHP
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

// Remove old gloss-hero
$old_pattern = '/<\?php elseif \( is_page\(\'pasta-cila\'\) \) : \?>\s*<!-- PASTA CİLA İNTERAKTİF PARLAKLIK TESTİ -->.*?<\/section>.*?<\/script>/s';
$page = preg_replace($old_pattern, '', $page);

// Inject new liquid-hero
$liquid_php = <<<PHP
<?php elseif ( is_page('pasta-cila') ) : ?>
  <!-- PASTA CİLA SIVI CAM (LIQUID GLASS) HERO -->
  <section class="liquid-hero" id="liquidHero">
    <div class="liquid-bg liquid-dirty"></div>
    <div class="liquid-bg liquid-clean" id="liquidClean"></div>
    <div class="liquid-wave" id="liquidWave"></div>
    
    <div class="liquid-content">
        <h1 class="serif"><?php the_title(); ?></h1>
        <p>Boyadaki matlığı ve kılcal çizikleri tamamen siliyoruz. "Sıvı Cam" efekti yaratan 9H seramik kalkanı sayesinde aracınız aylarca ilk günkü ıslak parlaklığında kalır.</p>
        <button class="btn solid liquid-btn" id="btnPour">Seramik Uygula</button>
    </div>
  </section>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('btnPour');
        const clean = document.getElementById('liquidClean');
        const wave = document.getElementById('liquidWave');
        
        if(!btn) return;
        
        btn.addEventListener('click', () => {
            btn.style.opacity = '0';
            setTimeout(() => { btn.style.display = 'none'; }, 300);
            
            // Start animation (flowing down from top to bottom)
            clean.style.transition = 'clip-path 3s cubic-bezier(0.4, 0, 0.2, 1)';
            clean.style.clipPath = 'inset(0 0 0% 0)';
            
            wave.style.transition = 'top 3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s';
            wave.style.opacity = '1';
            wave.style.top = '100%';
            
            setTimeout(() => {
                wave.style.opacity = '0'; // Hide the wave line when done
            }, 3000);
        });
    });
  </script>
PHP;

// Find the normal hero and replace with the conditional one
$pattern = '/(<\?php else : \?>\s*<!-- NORMAL PAGE HERO -->)/s';
$page = preg_replace($pattern, $liquid_php . "\n" . '$1', $page);

file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);

// 2. UPDATE STYLE.CSS
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$new_css = <<<CSS

/* ============ PASTA CİLA SIVI CAM HERO ============ */
.liquid-hero {
  position: relative; width: 100%; height: 75vh; min-height: 500px;
  overflow: hidden; background: #000;
}
.liquid-bg {
  position: absolute; top: 0; left: 0; width: 100%; height: 100%;
  background: url('assets/images/service-liquid.jpg') no-repeat center center;
  background-size: cover;
}
.liquid-dirty {
  z-index: 1;
  /* Make the beautiful red look dull, oxidized, scratched and pinkish/matte */
  filter: grayscale(40%) sepia(30%) contrast(0.6) brightness(0.65) blur(1px);
}
.liquid-clean {
  z-index: 2;
  /* Crystal clear, deep red, highly saturated wet gloss */
  filter: contrast(1.2) brightness(1.1) saturate(1.2);
  clip-path: inset(0 0 100% 0); /* Hidden at bottom, reveals downwards */
  -webkit-clip-path: inset(0 0 100% 0);
}
.liquid-wave {
  position: absolute; top: 0; left: 0; width: 100%; height: 20px;
  background: linear-gradient(to bottom, rgba(255,255,255,0.9), transparent);
  box-shadow: 0 0 30px rgba(255,255,255,0.6), 0 0 60px rgba(212,175,55,0.4);
  z-index: 3;
  opacity: 0;
  pointer-events: none;
}
.liquid-content {
  position: absolute; bottom: 50px; left: 50px; z-index: 10;
}
.liquid-content h1 {
  color: var(--gold-bright); font-size: clamp(2.5rem, 5vw, 4.5rem);
  margin:0 0 10px; font-family: 'Montserrat', sans-serif;
  text-shadow: 0 5px 30px rgba(0,0,0,1);
}
.liquid-content p {
  color: #fff; font-size: 1.15rem; max-width: 600px; margin-bottom: 25px;
  font-family: 'Inter', sans-serif;
  text-shadow: 0 2px 15px rgba(0,0,0,1);
  line-height: 1.6;
}
.liquid-btn {
  background: var(--gold-bright); color: var(--ink);
  padding: 15px 30px; font-size: 1.1rem; font-weight: bold;
  border-radius: var(--radius); cursor: pointer; border: none;
  box-shadow: 0 10px 20px rgba(212,175,55,0.4);
  transition: transform 0.3s, box-shadow 0.3s, opacity 0.3s;
}
.liquid-btn:hover {
  transform: translateY(-3px); box-shadow: 0 15px 30px rgba(212,175,55,0.6);
}

@media(max-width: 768px) {
  .liquid-hero { height: 60vh; }
  .liquid-content { bottom: 20px; left: 20px; }
  .liquid-content p { font-size: 1rem; }
}
CSS;

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);

echo "Liquid Glass feature successfully applied!\n";
?>
