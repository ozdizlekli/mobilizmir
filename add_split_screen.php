<?php
// 1. STYLE.CSS UPDATE
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$new_css = <<<CSS

/* ============ FAR TEMİZLİĞİ SPLIT HERO ============ */
.split-hero {
  position: relative;
  width: 100%;
  height: 60vh;
  min-height: 450px;
  overflow: hidden;
  --pos: 50%;
  cursor: ew-resize;
  background: #000;
}
.split-layer {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background-image: url('assets/images/service-far.jpg');
  background-size: cover;
  background-position: center;
}
.split-dirty {
  /* Oksitlenmis, sararmis, soluk ve isik gecirmeyen bir far simülasyonu */
  filter: sepia(0.8) hue-rotate(-10deg) contrast(0.5) brightness(0.3) blur(6px);
  z-index: 1;
}
.split-clean {
  /* Kusursuz, kristal parlakliginda yeni nesil isik */
  z-index: 2;
  clip-path: polygon(var(--pos) 0, 100% 0, 100% 100%, var(--pos) 100%);
  -webkit-clip-path: polygon(var(--pos) 0, 100% 0, 100% 100%, var(--pos) 100%);
  filter: contrast(1.1) brightness(1.2) saturate(1.1);
}
.split-divider {
  position: absolute;
  top: 0; bottom: 0;
  left: var(--pos);
  width: 2px;
  background: var(--gold-bright);
  z-index: 3;
  transform: translateX(-50%);
  box-shadow: 0 0 20px var(--gold-bright), 0 0 40px var(--gold-bright);
  pointer-events: none;
}
.split-handle {
  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  width: 48px; height: 48px;
  background: var(--gold-bright);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  color: var(--ink);
  font-weight: bold;
  box-shadow: 0 0 20px rgba(0,0,0,0.8);
  font-size: 14px;
}
.split-handle::before { content: '◀'; margin-right: 3px; }
.split-handle::after { content: '▶'; margin-left: 3px; }

.split-content {
  position: absolute;
  bottom: 40px; left: 40px;
  z-index: 4;
  pointer-events: none;
}
.split-content h1 {
  color: var(--gold-bright);
  font-size: clamp(2.5rem, 5vw, 4.5rem);
  margin: 0 0 10px 0;
  text-shadow: 0 5px 30px rgba(0,0,0,1);
  font-family: 'Montserrat', sans-serif;
}
.split-content p {
  color: #fff;
  font-size: 1.2rem;
  max-width: 600px;
  text-shadow: 0 2px 15px rgba(0,0,0,1);
}
@media(max-width:768px) {
  .split-content { bottom: 20px; left: 20px; }
  .split-content p { font-size: 1rem; }
  .split-hero { height: 50vh; }
}
CSS;
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);


// 2. PAGE.PHP UPDATE
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

$split_php = <<<PHP
<?php if ( is_page('far-temizligi') ) : ?>
  <!-- FAR TEMİZLİĞİ ÖZEL AÇILIŞ (SPLIT SCREEN) -->
  <section class="split-hero" id="splitHero">
    <div class="split-layer split-dirty"></div>
    <div class="split-layer split-clean"></div>
    <div class="split-divider">
      <div class="split-handle"></div>
    </div>
    <div class="split-content">
      <h1 class="serif"><?php the_title(); ?></h1>
      <p>Lazer berraklığına kendi ellerinizle tanık olun. Aydınlığı sağa sola kaydırarak geceyi nasıl gündüze çevirdiğimizi keşfedin.</p>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const hero = document.getElementById('splitHero');
      if(!hero) return;
      
      const updateSplit = (clientX) => {
        const rect = hero.getBoundingClientRect();
        let x = clientX - rect.left;
        let percent = (x / rect.width) * 100;
        if(percent < 0) percent = 0;
        if(percent > 100) percent = 100;
        hero.style.setProperty('--pos', percent + '%');
      };

      hero.addEventListener('mousemove', (e) => updateSplit(e.clientX));
      hero.addEventListener('touchmove', (e) => updateSplit(e.touches[0].clientX), {passive: true});
    });
  </script>
<?php else : ?>
  <!-- NORMAL PAGE HERO -->
  <section class="page-hero">
    <div class="wrap">
      <div class="folio" style="margin-bottom:12px;"><div class="rule"></div><span class="kicker">MOBİLİZMİR</span></div>
      <h1 class="serif"><?php the_title(); ?></h1>
    </div>
  </section>
<?php endif; ?>
PHP;

// Find the normal hero and replace with the conditional one
$pattern = '/<section class="page-hero">.*?<\/section>/s';
$page = preg_replace($pattern, $split_php, $page);

file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);

echo "Split-Screen added to Far Temizliği!\n";
