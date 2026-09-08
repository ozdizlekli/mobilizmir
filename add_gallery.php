<?php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

$gallery_html = <<<HTML
  <!-- GALERİ: ÖNCESİ VE SONRASI -->
  <section class="gallery-section">
    <div class="wrap">
      <div class="gallery-header">
        <span class="gallery-num">04</span>
        <h2 class="serif">Öncesi & sonrası</h2>
      </div>

      <div class="gallery-main" id="gallerySlider">
        <div class="g-layer g-dirty" id="gDirty" style="background-image: url('/wp-content/themes/astra-child/assets/images/gallery-kumas.jpg')"></div>
        <div class="g-layer g-clean" id="gClean" style="background-image: url('/wp-content/themes/astra-child/assets/images/gallery-kumas.jpg')"></div>
        <div class="g-handle" id="gHandle"><span>&lt;&gt;</span></div>
        <div class="g-label">ÖNCESİ (Lekeli)</div>
      </div>

      <div class="gallery-thumbs">
        <div class="g-thumb active" data-img="/wp-content/themes/astra-child/assets/images/gallery-kumas.jpg"><span>KUMAŞ DÖŞEME</span></div>
        <div class="g-thumb" data-img="/wp-content/themes/astra-child/assets/images/gallery-deri.jpg"><span>DERİ DÖŞEME</span></div>
        <div class="g-thumb" data-img="/wp-content/themes/astra-child/assets/images/gallery-tavan.jpg"><span>TAVAN DÖŞEMESİ</span></div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('gallerySlider');
        if (slider) {
            let isDragging = false;
            const updateSlider = (e) => {
                const rect = slider.getBoundingClientRect();
                let clientX = e.clientX;
                if (e.touches && e.touches.length > 0) clientX = e.touches[0].clientX;
                if (clientX === undefined) return;
                
                let x = clientX - rect.left;
                let percent = Math.max(0, Math.min(100, (x / rect.width) * 100));
                slider.style.setProperty('--pos', percent + '%');
            };
            
            slider.addEventListener('mousedown', (e) => { isDragging = true; updateSlider(e); });
            window.addEventListener('mouseup', () => isDragging = false);
            window.addEventListener('mousemove', (e) => { if(isDragging) updateSlider(e); });
            
            slider.addEventListener('touchstart', (e) => { isDragging = true; updateSlider(e); }, {passive: true});
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
    });
  </script>
HTML;

// Insert after the anatomyHero block inside the koltuk-yikama condition
$pattern = '/(<\/section>\s*<script>.*?window\.addEventListener\(\'scroll\',.*?\n\s*\}\);\s*\}\);\s*<\/script>)/s';
// Wait, the scroll script regex might be tricky. Let's just append before the next elseif.
// The next elseif is periyodik-bakim.
$pattern2 = '/(<\?php elseif \( is_page\(\'periyodik-bakim\'\) \) : \?>)/s';

$page = preg_replace($pattern2, $gallery_html . "\n$1", $page);
file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);

// CSS
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
$new_css = <<<CSS

/* ============ GALERİ: ÖNCESİ & SONRASI ============ */
.gallery-section {
  padding: 80px 20px; background: var(--ink); color: #fff;
}
.gallery-header {
  display: flex; align-items: center; max-width: 1000px; margin: 0 auto 30px;
}
.gallery-num {
  font-family: 'Courier New', monospace; color: var(--gold-dark); font-size: 1.2rem; margin-right: 20px;
}
.gallery-header h2 {
  color: #fff; font-size: clamp(1.8rem, 4vw, 2.5rem); flex-grow: 1; border-left: 1px solid rgba(255,255,255,0.1); padding-left: 20px; margin: 0;
}

.gallery-main {
  position: relative; width: 100%; max-width: 1000px; aspect-ratio: 16/9; margin: 0 auto 20px;
  background: #000; overflow: hidden; border-radius: 4px; border: 1px solid rgba(255,255,255,0.05);
  cursor: ew-resize; --pos: 50%;
}
.g-layer {
  position: absolute; top:0; left:0; width:100%; height:100%;
  background-size: cover; background-position: center;
  transition: background-image 0.4s ease;
}
.g-dirty {
  z-index: 1;
  filter: grayscale(30%) sepia(40%) contrast(0.8) brightness(0.65) blur(0.5px);
}
.g-clean {
  z-index: 2;
  filter: contrast(1.1) saturate(1.1);
  clip-path: polygon(var(--pos) 0, 100% 0, 100% 100%, var(--pos) 100%);
  -webkit-clip-path: polygon(var(--pos) 0, 100% 0, 100% 100%, var(--pos) 100%);
}
.g-handle {
  position: absolute; top:0; bottom:0; left: var(--pos); width: 2px;
  background: var(--gold-bright); z-index: 3; transform: translateX(-50%);
  display: flex; align-items: center; justify-content: center; pointer-events: none;
}
.g-handle span {
  width: 40px; height: 40px; background: var(--gold-bright); color: var(--ink);
  border-radius: 50%; display: flex; align-items: center; justify-content: center;
  font-weight: bold; font-family: monospace; font-size: 14px;
}
.g-label {
  position: absolute; bottom: 20px; left: 20px; z-index: 4;
  color: rgba(255,255,255,0.5); font-family: 'Inter', sans-serif; font-size: 0.8rem; letter-spacing: 1px;
  pointer-events: none; text-transform: uppercase;
}

.gallery-thumbs {
  display: flex; gap: 10px; max-width: 1000px; margin: 0 auto;
}
.g-thumb {
  flex: 1; aspect-ratio: 16/9; background: #1a1a1a;
  border: 1px solid rgba(255,255,255,0.05); border-radius: 4px;
  display: flex; align-items: flex-end; padding: 15px;
  color: rgba(255,255,255,0.5); font-family: 'Inter', sans-serif; font-size: 0.8rem; letter-spacing: 1px;
  cursor: pointer; transition: all 0.3s ease;
  position: relative; overflow: hidden;
}
.g-thumb::before {
  content: ''; position: absolute; top:0; left:0; width:100%; height:100%;
  background-size: cover; background-position: center; opacity: 0.2; transition: opacity 0.3s;
}
.g-thumb:nth-child(1)::before { background-image: url('/wp-content/themes/astra-child/assets/images/gallery-kumas.jpg'); }
.g-thumb:nth-child(2)::before { background-image: url('/wp-content/themes/astra-child/assets/images/gallery-deri.jpg'); }
.g-thumb:nth-child(3)::before { background-image: url('/wp-content/themes/astra-child/assets/images/gallery-tavan.jpg'); }

.g-thumb:hover::before, .g-thumb.active::before { opacity: 0.6; }
.g-thumb.active { border-color: var(--gold-bright); color: var(--gold-bright); }
.g-thumb span { position: relative; z-index: 1; text-transform: uppercase; }

@media(max-width: 768px) {
  .gallery-thumbs { flex-direction: column; }
  .g-thumb { aspect-ratio: auto; padding: 20px; }
}
CSS;

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);
echo "Gallery injected!\n";
