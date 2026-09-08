<?php
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

$pattern = '/<div class="gallery-header".*?(<!-- ============ SÜREÇ ============ -->)/s';

$replacement = <<<HTML
    <div class="gallery-header" style="display:flex; align-items:center; margin-bottom:40px; max-width:1000px; margin-left:auto; margin-right:auto;">
        <span class="gallery-num" style="font-family:'Courier New', monospace; color:var(--gold-dark); font-size:1.2rem; margin-right:20px;">02</span>
        <h2 class="serif" style="color:#fff; font-size:clamp(1.8rem, 4vw, 2.5rem); flex-grow:1; border-left:1px solid rgba(255,255,255,0.1); padding-left:20px; margin:0;">Öncesi & sonrası</h2>
    </div>

    <div class="gallery-main" id="gallerySlider">
      <div class="g-layer g-dirty" id="gDirty" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-kumas.jpg')"></div>
      <div class="g-layer g-clean" id="gClean" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-kumas.jpg')"></div>
      <div class="g-handle" id="gHandle"><span>&lt;&gt;</span></div>
      <div class="g-label">ÖNCESİ (Lekeli)</div>
    </div>

    <div class="gallery-thumbs">
      <div class="g-thumb active" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-kumas.jpg"><span>KUMAŞ DÖŞEME</span></div>
      <div class="g-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-deri.jpg"><span>DERİ DÖŞEME</span></div>
      <div class="g-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-tavan.jpg"><span>TAVAN DÖŞEMESİ</span></div>
    </div>
  </div>
</section>

$1
HTML;

$front = preg_replace($pattern, $replacement, $front);
file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);
echo "HTML really fixed!\n";
