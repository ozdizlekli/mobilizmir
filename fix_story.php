<?php
// 1. STYLE.CSS UPDATE
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
// We need to replace the entire APPLE TARZI SCROLL STORY block.
$css_pattern = '/\/\* ============ APPLE TARZI SCROLL STORY ============ \*\/.*?(?=\z|\/\* ============)/s';
$new_css = <<<CSS
/* ============ APPLE TARZI SCROLL STORY ============ */
.scroll-story-wrap {
  height: 600vh; /* 5 hizmet icin ekstra alan */
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
  background-color: var(--ink-2); /* Fallback */
  will-change: transform, opacity, clip-path;
  transform-origin: center center;
}
.layer-ext-dirty {
  background-image: url('https://images.unsplash.com/photo-1614200187524-dc4b892acf16?q=80&w=1920&auto=format&fit=crop');
  filter: grayscale(60%) brightness(0.4) contrast(0.9);
  z-index: 1;
}
.layer-ext-clean {
  background-image: url('https://images.unsplash.com/photo-1614200187524-dc4b892acf16?q=80&w=1920&auto=format&fit=crop');
  filter: brightness(1.1) contrast(1.2) saturate(1.3);
  z-index: 2;
  opacity: 1; /* Maske (clip-path) ile gorunecek */
  clip-path: circle(0% at 50% 50%);
}
.layer-int {
  background-image: url('https://images.unsplash.com/photo-1550344004-9a0081dff90e?q=80&w=1920&auto=format&fit=crop');
  z-index: 3;
  opacity: 0;
}
.layer-eng {
  background-image: url('https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?q=80&w=1920&auto=format&fit=crop');
  z-index: 4;
  opacity: 0;
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
  width: 300px; height: 3px;
  background: rgba(255,255,255,0.2);
  z-index: 10;
  border-radius: 3px;
}
.story-progress-fill {
  height: 100%;
  width: 0%;
  background: var(--gold-bright);
  transition: width 0.1s linear;
  border-radius: 3px;
}
@media(max-width: 768px) {
  .story-step h3 { font-size: 2rem; }
  .story-step p { font-size: 1rem; }
}
CSS;

$css = preg_replace($css_pattern, $new_css, $css);
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);

// 2. FRONT-PAGE.PHP UPDATE
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');
$html_pattern = '/<!-- ============ SCROLL STORY \(APPLE STYLE\) ============ -->.*?<!-- ============ HİZMETLER ============ -->/s';

$new_html = <<<HTML
<!-- ============ SCROLL STORY (APPLE STYLE) ============ -->
<section class="scroll-story-wrap" id="scroll-story">
  <div class="scroll-story-sticky">
    
    <div class="story-layer layer-ext-dirty"></div>
    <div class="story-layer layer-ext-clean"></div>
    <div class="story-layer layer-int"></div>
    <div class="story-layer layer-eng"></div>

    <div class="story-ui">
      <div class="story-step" data-step="1">
        <h3 class="serif">Gözleriniz yollarda.</h3>
        <p>Zamanla sararan ve görüşü düşüren farlar... <strong>Far Temizliği</strong> ile gece sürüşünde ilk günkü netlik ve güvenliğe dönün.</p>
      </div>
      <div class="story-step" data-step="2">
        <h3 class="serif">Kusursuz parlaklık.</h3>
        <p>Güneş yanıkları, matlaşma ve kılcal çizikler tarihe karışıyor. <strong>Pasta Cila</strong> ile showroom parlaklığına kavuşun.</p>
      </div>
      <div class="story-step" data-step="3">
        <h3 class="serif">Orijinalliğe dokunmadan.</h3>
        <p>Dolu hasarı veya park ezikleri canınızı sıkmasın. <strong>Boyasız Göçük Düzeltme (PDR)</strong> ile aracınızın değeri korunur.</p>
      </div>
      <div class="story-step" data-step="4">
        <h3 class="serif">Şimdi içeri giriyoruz.</h3>
        <p>Vakumlu ekstraksiyon teknolojisi ile <strong>Koltuk Yıkama</strong>. Aracınızın içindeki tüm kir, bakteri ve kokular kapınızda yok edilir.</p>
      </div>
      <div class="story-step" data-step="5">
        <h3 class="serif">Motorunuz bize emanet.</h3>
        <p>Sadece görünüm değil, performans da önemli. Filtre, yağ ve sıvı değişimlerini içeren <strong>Periyodik Bakım</strong> yerinde yapılır.</p>
      </div>
    </div>
    
    <div class="story-progress-bar"><div class="story-progress-fill"></div></div>
  </div>
</section>

<!-- ============ HİZMETLER ============ -->
HTML;

$front = preg_replace($html_pattern, $new_html, $front);
file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);

// 3. FOOTER.PHP UPDATE
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');
$js_pattern = '/<script>\s*document\.addEventListener\(\'DOMContentLoaded\', \(\) => \{\s*const wrap = document\.querySelector\(\'\.scroll-story-wrap\'\);.*?<\/script>/s';

$new_js = <<<JS
<script>
document.addEventListener('DOMContentLoaded', () => {
  const wrap = document.querySelector('.scroll-story-wrap');
  if(!wrap) return;

  const dirty = document.querySelector('.layer-ext-dirty');
  const clean = document.querySelector('.layer-ext-clean');
  const interior = document.querySelector('.layer-int');
  const engine = document.querySelector('.layer-eng');
  const steps = document.querySelectorAll('.story-step');
  const fill = document.querySelector('.story-progress-fill');

  function mapRange(val, inMin, inMax, outMin, outMax) {
    let res = (val - inMin) * (outMax - outMin) / (inMax - inMin) + outMin;
    if (outMin < outMax) return Math.max(outMin, Math.min(res, outMax));
    return Math.max(outMax, Math.min(res, outMin));
  }

  window.addEventListener('scroll', () => {
    const rect = wrap.getBoundingClientRect();
    const maxScroll = rect.height - window.innerHeight;
    let progress = -rect.top / maxScroll;
    
    if (progress < 0) progress = 0;
    if (progress > 1) progress = 1;

    fill.style.width = (progress * 100) + '%';

    let tfDirty = "";
    let tfClean = "";
    let cpClean = "circle(0% at 50% 50%)";
    let opInt = 0;
    let tfInt = "scale(1)";
    let opEng = 0;
    let tfEng = "scale(1)";

    if (progress < 0.2) {
      // 1. Far Temizligi
      let local = mapRange(progress, 0, 0.2, 0, 1);
      tfDirty = `scale(\${1.2 + local*0.1}) translate(8%, 5%)`; // Farlara dogru zoom
      tfClean = tfDirty;
      cpClean = `circle(\${local * 25}% at 30% 65%)`; // Far kisminda parlatma aciliyor
      
      steps.forEach((s,i) => s.classList.toggle('active', i===0));

    } else if (progress < 0.4) {
      // 2. Pasta Cila
      let local = mapRange(progress, 0.2, 0.4, 0, 1);
      tfDirty = `scale(\${1.3 - local*0.3}) translate(\${8 - local*8}%, \${5 - local*5}%)`; // Arabanin geneline inme
      tfClean = tfDirty;
      cpClean = `circle(\${25 + local * 130}% at 30% 65%)`; // Butun arabaya cila yayiliyor
      
      steps.forEach((s,i) => s.classList.toggle('active', i===1));

    } else if (progress < 0.6) {
      // 3. Boyasiz Gocuk (PDR)
      let local = mapRange(progress, 0.4, 0.6, 0, 1);
      tfDirty = `scale(\${1.0 + local*0.3}) translate(\${-local*10}%, 0%)`; // Kaporta yanina dogru pan
      tfClean = tfDirty;
      cpClean = `circle(150% at 50% 50%)`; // Full parlak
      
      steps.forEach((s,i) => s.classList.toggle('active', i===2));

    } else if (progress < 0.8) {
      // 4. Koltuk Yikama (Iceri giriyoruz)
      let local = mapRange(progress, 0.6, 0.8, 0, 1);
      tfDirty = `scale(\${1.3 + local*4}) translate(-10%, 0%)`; // Cama devasa zoom
      tfClean = tfDirty;
      cpClean = `circle(150% at 50% 50%)`;
      
      opInt = local;
      tfInt = `scale(\${1.3 - local*0.3})`;
      
      steps.forEach((s,i) => s.classList.toggle('active', i===3));

    } else {
      // 5. Periyodik Bakim
      let local = mapRange(progress, 0.8, 1.0, 0, 1);
      // Koltuk fotosu sabit kalip kaybolur
      tfDirty = `scale(5.3) translate(-10%, 0%)`;
      tfClean = tfDirty;
      cpClean = `circle(150% at 50% 50%)`;
      
      opInt = 1 - local; 
      tfInt = `scale(1)`;
      
      opEng = local;
      tfEng = `scale(\${1.2 - local*0.2})`;
      
      steps.forEach((s,i) => s.classList.toggle('active', i===4));
    }

    dirty.style.transform = tfDirty;
    clean.style.transform = tfClean;
    clean.style.clipPath = cpClean;
    
    interior.style.opacity = opInt;
    interior.style.transform = tfInt;
    
    engine.style.opacity = opEng;
    engine.style.transform = tfEng;
  });
});
</script>
JS;

$footer = preg_replace($js_pattern, $new_js, $footer);
file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);
echo "Tamamlandı!\n";
