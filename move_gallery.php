<?php
// 1. Remove from page.php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');
$page = preg_replace('/<!-- GALERİ: ÖNCESİ VE SONRASI -->.*?<\/section>/s', '', $page);
file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);

// 2. Inject into front-page.php
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

$new_gallery = <<<HTML
    <div class="gallery-header" style="display:flex; align-items:center; margin-bottom:40px;">
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
HTML;

// Replace the old 02 block and gallery-grid
$front = preg_replace('/<div class="folio"><span class="num">02<\/span>.*?<\/div>\s*<\/div>/s', $new_gallery . "\n  </div>", $front);

file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);

// 3. Move the JS to footer.php since it's now on the homepage
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');
$js = <<<JS
  // GALLERY SLIDER
  const gallerySlider = document.getElementById('gallerySlider');
  if (gallerySlider) {
      let isDragging = false;
      const updateSlider = (e) => {
          const rect = gallerySlider.getBoundingClientRect();
          let clientX = e.clientX;
          if (e.touches && e.touches.length > 0) clientX = e.touches[0].clientX;
          if (clientX === undefined) return;
          
          let x = clientX - rect.left;
          let percent = Math.max(0, Math.min(100, (x / rect.width) * 100));
          gallerySlider.style.setProperty('--pos', percent + '%');
      };
      
      gallerySlider.addEventListener('mousedown', (e) => { isDragging = true; updateSlider(e); });
      window.addEventListener('mouseup', () => isDragging = false);
      window.addEventListener('mousemove', (e) => { if(isDragging) updateSlider(e); });
      
      gallerySlider.addEventListener('touchstart', (e) => { isDragging = true; updateSlider(e); }, {passive: true});
      window.addEventListener('touchend', () => isDragging = false);
      window.addEventListener('touchmove', (e) => { if(isDragging) updateSlider(e); }, {passive: true});
      
      // Thumbnails
      const thumbs = document.querySelectorAll('.g-thumb');
      const gDirty = document.getElementById('gDirty');
      const gClean = document.getElementById('gClean');
      
      thumbs.forEach(t => {
          t.addEventListener('click', () => {
              thumbs.forEach(th => th.classList.remove('active'));
              t.classList.add('active');
              const imgUrl = t.getAttribute('data-img');
              gDirty.style.backgroundImage = `url('\${imgUrl}')`;
              gClean.style.backgroundImage = `url('\${imgUrl}')`;
          });
      });
  }
JS;

$footer = str_replace('// X-RAY HOTSPOTS JS', $js . "\n\n  // X-RAY HOTSPOTS JS", $footer);
file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);

echo "Gallery moved to homepage!\n";
