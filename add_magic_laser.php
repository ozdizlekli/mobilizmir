<?php
// 1. STYLE.CSS UPDATE
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
$new_css = <<<CSS

/* ============ SİHİRLİ LAZER (MAGIC MASK) ============ */
.magic-section {
  padding: 80px 20px;
  background: var(--ink);
  text-align: center;
}
.magic-section h2 {
  color: var(--gold-bright);
  font-size: clamp(2rem, 4vw, 3rem);
  margin-bottom: 15px;
}
.magic-section p {
  color: var(--cream);
  font-size: 1.1rem;
  margin-bottom: 40px;
}
.magic-wrap {
  position: relative;
  width: 100%;
  max-width: 1000px;
  aspect-ratio: 16/9;
  margin: 0 auto;
  border-radius: var(--radius);
  overflow: hidden;
  cursor: crosshair;
  box-shadow: 0 20px 50px rgba(0,0,0,0.5);
  border: 1px solid var(--line);
  /* Default center position before mousemove */
  --x: 50%;
  --y: 50%;
}
.magic-dirty, .magic-clean {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background-image: url('assets/images/magic-car.jpg');
  background-size: cover;
  background-position: center;
}
.magic-dirty {
  /* Araci kodla daha da kirli ve soluk yapiyoruz */
  filter: grayscale(30%) sepia(40%) blur(1px) contrast(0.8) brightness(0.7);
  z-index: 1;
}
.magic-clean {
  /* Ayni gorseli kodla cilalanmis ve parliyor yapiyoruz */
  filter: contrast(1.2) saturate(1.4) brightness(1.2);
  z-index: 2;
  /* Fare imlecinin oldugu yeri (yaricap 150px) gosteren maske */
  -webkit-mask-image: radial-gradient(circle 180px at var(--x) var(--y), black 0%, rgba(0,0,0,0.8) 40%, transparent 100%);
  mask-image: radial-gradient(circle 180px at var(--x) var(--y), black 0%, rgba(0,0,0,0.8) 40%, transparent 100%);
}
.magic-ring {
  position: absolute;
  top: var(--y);
  left: var(--x);
  width: 360px; height: 360px;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  border: 2px solid rgba(212,175,55,0.3);
  box-shadow: 0 0 30px rgba(212,175,55,0.4), inset 0 0 30px rgba(212,175,55,0.2);
  pointer-events: none;
  z-index: 3;
  opacity: 0;
  transition: opacity 0.3s;
}
.magic-wrap:hover .magic-ring {
  opacity: 1;
}

@media(max-width: 768px) {
  .magic-wrap { aspect-ratio: 4/3; }
  .magic-clean {
    -webkit-mask-image: radial-gradient(circle 100px at var(--x) var(--y), black 0%, transparent 100%);
    mask-image: radial-gradient(circle 100px at var(--x) var(--y), black 0%, transparent 100%);
  }
  .magic-ring { width: 200px; height: 200px; }
}
CSS;
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);


// 2. FRONT-PAGE.PHP UPDATE
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

$magic_html = <<<HTML
<!-- ============ SİHİRLİ LAZER ============ -->
<section class="magic-section">
  <div class="wrap">
    <h2 class="serif">Farkı Kendi Ellerinizle Hissedin</h2>
    <p>Fare imlecini veya parmağınızı aracın üzerinde gezdirerek kusursuz değişimi keşfedin.</p>
    
    <div class="magic-wrap">
      <div class="magic-dirty"></div>
      <div class="magic-clean"></div>
      <div class="magic-ring"></div>
    </div>
  </div>
</section>

<!-- ============ GALERİ ============ -->
HTML;

$front = str_replace('<!-- ============ GALERİ ============ -->', $magic_html, $front);
file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);


// 3. FOOTER.PHP UPDATE
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');
$js_code = <<<JS
  // MAGIC LASER JS
  const magicWrap = document.querySelector('.magic-wrap');
  if (magicWrap) {
    const updateMask = (clientX, clientY) => {
      const rect = magicWrap.getBoundingClientRect();
      const x = clientX - rect.left;
      const y = clientY - rect.top;
      magicWrap.style.setProperty('--x', `\${x}px`);
      magicWrap.style.setProperty('--y', `\${y}px`);
    };

    magicWrap.addEventListener('mousemove', (e) => updateMask(e.clientX, e.clientY));
    magicWrap.addEventListener('touchmove', (e) => {
      updateMask(e.touches[0].clientX, e.touches[0].clientY);
    }, {passive: true});
  }
JS;

// Insert right before the last closing }); in DOMContentLoaded
$footer = preg_replace('/(\}\);\s*<\/script>\s*<\/body>)/s', $js_code . "\n$1", $footer);
file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);

echo "Sihirli Lazer Eklendi!\n";
