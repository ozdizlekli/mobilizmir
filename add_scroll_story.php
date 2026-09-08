<?php
// 1. STYLE.CSS GÜNCELLEMESİ
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
$new_css = <<<CSS

/* ============ APPLE TARZI SCROLL STORY ============ */
.scroll-story-wrap {
  height: 400vh;
  background: var(--ink);
  position: relative;
}
.scroll-story-sticky {
  position: sticky;
  top: 0;
  height: 100vh;
  width: 100%;
  overflow: hidden;
  display: flex;
  align-items: center;
}
.story-layer {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background-size: cover;
  background-position: center;
  will-change: transform, opacity, clip-path;
}
.layer-exterior-dirty {
  background-image: url('https://images.unsplash.com/photo-1614200187524-dc4b892acf16?q=80&w=1920&auto=format&fit=crop');
  filter: grayscale(80%) brightness(0.3) contrast(0.9);
  z-index: 1;
}
.layer-exterior-clean {
  background-image: url('https://images.unsplash.com/photo-1614200187524-dc4b892acf16?q=80&w=1920&auto=format&fit=crop');
  filter: brightness(1.1) contrast(1.2) saturate(1.3);
  z-index: 2;
  opacity: 0; 
  clip-path: circle(0% at 50% 50%);
}
.layer-interior {
  background-image: url('https://images.unsplash.com/photo-1601362840469-51e4d8d58785?q=80&w=1920&auto=format&fit=crop');
  z-index: 3;
  opacity: 0;
  transform: scale(1.5);
}
.story-ui {
  position: relative;
  z-index: 10;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}
.story-step {
  position: absolute;
  top: 50%;
  transform: translateY(-50%) translateY(40px);
  opacity: 0;
  transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
  width: 100%;
  max-width: 500px;
  pointer-events: none;
}
.story-step.active {
  opacity: 1;
  transform: translateY(-50%) translateY(0);
}
.story-step h3 {
  color: var(--gold-bright);
  font-size: 3rem;
  margin-bottom: 15px;
  text-shadow: 0 10px 30px rgba(0,0,0,1);
  line-height: 1.1;
}
.story-step p {
  color: var(--cream);
  font-size: 1.2rem;
  line-height: 1.6;
  text-shadow: 0 4px 15px rgba(0,0,0,1);
}
.story-progress-bar {
  position: absolute;
  bottom: 40px; left: 50%; transform: translateX(-50%);
  width: 240px; height: 2px;
  background: rgba(255,255,255,0.2);
  z-index: 10;
}
.story-progress-fill {
  height: 100%;
  width: 0%;
  background: var(--gold-bright);
  transition: width 0.1s linear;
}
@media(max-width: 768px) {
  .story-step h3 { font-size: 2rem; }
  .story-step p { font-size: 1rem; }
}
CSS;
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);

// 2. FRONT-PAGE.PHP GÜNCELLEMESİ
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');
$story_html = <<<HTML
<!-- ============ SCROLL STORY (APPLE STYLE) ============ -->
<section class="scroll-story-wrap" id="scroll-story">
  <div class="scroll-story-sticky">
    
    <div class="story-layer layer-exterior-dirty"></div>
    <div class="story-layer layer-exterior-clean"></div>
    <div class="story-layer layer-interior"></div>

    <div class="story-ui">
      <div class="story-step" data-step="1">
        <h3 class="serif">Aracınız zamanla yorulur.</h3>
        <p>Güneş yanıkları, matlaşmış farlar, kaportaya işleyen reçineler ve kılcal çizikler...</p>
      </div>
      <div class="story-step" data-step="2">
        <h3 class="serif">Fabrika ayarlarına dönüş.</h3>
        <p>Mobilİzmir'in profesyonel pasta cila ve boya koruma teknolojisiyle ilk günkü kusursuz parlaklık.</p>
      </div>
      <div class="story-step" data-step="3">
        <h3 class="serif">Şimdi içeri giriyoruz.</h3>
        <p>Vakumlu ekstraksiyon teknolojisi ile koltuklarınızdaki tüm kir, bakteri ve kokular kapınızda yok edilir.</p>
      </div>
    </div>
    
    <div class="story-progress-bar"><div class="story-progress-fill"></div></div>
  </div>
</section>

HTML;
$front = str_replace('<!-- ============ HİZMETLER ============ -->', $story_html . '<!-- ============ HİZMETLER ============ -->', $front);
file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);

// 3. FOOTER.PHP JS GÜNCELLEMESİ
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');
$story_js = <<<JS
<script>
document.addEventListener('DOMContentLoaded', () => {
  const wrap = document.querySelector('.scroll-story-wrap');
  if(!wrap) return;

  const dirty = document.querySelector('.layer-exterior-dirty');
  const clean = document.querySelector('.layer-exterior-clean');
  const interior = document.querySelector('.layer-interior');
  const steps = document.querySelectorAll('.story-step');
  const fill = document.querySelector('.story-progress-fill');

  window.addEventListener('scroll', () => {
    const rect = wrap.getBoundingClientRect();
    const maxScroll = rect.height - window.innerHeight;
    let progress = -rect.top / maxScroll;
    
    if (progress < 0) progress = 0;
    if (progress > 1) progress = 1;

    fill.style.width = (progress * 100) + '%';

    // Base zoom for parallax feel
    const baseZoom = 1 + (progress * 0.4);
    dirty.style.transform = `scale(\${baseZoom})`;

    if (progress < 0.3) {
      // 0 - 30%: Only dirty is visible
      clean.style.clipPath = `circle(0% at 50% 50%)`;
      clean.style.opacity = 0;
      interior.style.opacity = 0;
      
      steps.forEach(s => s.classList.remove('active'));
      if(progress > 0.02) steps[0].classList.add('active');

    } else if (progress >= 0.3 && progress < 0.65) {
      // 30 - 65%: Wipe transition to clean exterior
      let cleanProg = (progress - 0.3) / 0.35; 
      clean.style.opacity = 1;
      clean.style.clipPath = `circle(\${cleanProg * 150}% at 50% 50%)`;
      clean.style.transform = `scale(\${baseZoom})`;
      interior.style.opacity = 0;

      steps.forEach(s => s.classList.remove('active'));
      steps[1].classList.add('active');

    } else if (progress >= 0.65) {
      // 65 - 100%: Massive zoom into window and crossfade to interior
      let intProg = (progress - 0.65) / 0.35; 
      clean.style.clipPath = `circle(150% at 50% 50%)`;
      
      // Dramatic zoom into the car window
      clean.style.transform = `scale(\${baseZoom + (intProg * 4)})`;
      
      interior.style.opacity = intProg;
      // Slight zoom out on interior to counter-balance the intense zoom-in
      interior.style.transform = `scale(\${1.3 - (intProg * 0.3)})`;

      steps.forEach(s => s.classList.remove('active'));
      steps[2].classList.add('active');
    }
  });
});
</script>
JS;
$footer = str_replace('</body>', $story_js . "\n</body>", $footer);
file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);

echo "Scroll Story animasyonu basariyla eklendi.\n";
