<?php
// 1. STYLE.CSS UPDATE
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
$css_pattern = '/\/\* ============ APPLE TARZI SCROLL STORY ============ \*\/.*?(?=\z|\/\* ============)/s';

$new_css = <<<CSS
/* ============ APPLE TARZI SCROLL STORY ============ */
.scroll-story-wrap {
  height: 600vh;
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
  background-color: var(--ink-2);
  will-change: transform, opacity;
  transform-origin: center center;
}
.layer-1 {
  background-image: url('assets/images/scroll-story/step1-far.jpg');
  z-index: 1;
}
.layer-2 {
  background-image: url('assets/images/scroll-story/step2-pasta.jpg');
  z-index: 2; opacity: 0;
}
.layer-3 {
  background-image: url('assets/images/scroll-story/step3-pdr.jpg');
  z-index: 3; opacity: 0;
}
.layer-4 {
  background-image: url('assets/images/scroll-story/step4-koltuk.jpg');
  z-index: 4; opacity: 0;
}
.layer-5 {
  background-image: url('assets/images/scroll-story/step5-motor.jpg');
  z-index: 5; opacity: 0;
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
$html_pattern = '/<div class="story-layer layer-ext-dirty"><\/div>.*?<div class="story-layer layer-eng"><\/div>/s';
$new_html = <<<HTML
<div class="story-layer layer-1"></div>
    <div class="story-layer layer-2"></div>
    <div class="story-layer layer-3"></div>
    <div class="story-layer layer-4"></div>
    <div class="story-layer layer-5"></div>
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

  const l1 = document.querySelector('.layer-1');
  const l2 = document.querySelector('.layer-2');
  const l3 = document.querySelector('.layer-3');
  const l4 = document.querySelector('.layer-4');
  const l5 = document.querySelector('.layer-5');
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

    // Sabit hafif zoom (parallax)
    const baseScale = 1 + (progress * 0.1);
    const transformStr = `scale(\${baseScale})`;
    
    l1.style.transform = transformStr;
    l2.style.transform = transformStr;
    l3.style.transform = transformStr;
    l4.style.transform = transformStr;
    l5.style.transform = transformStr;

    if (progress < 0.2) {
      l1.style.opacity = 1;
      l2.style.opacity = mapRange(progress, 0.15, 0.2, 0, 1);
      l3.style.opacity = 0; l4.style.opacity = 0; l5.style.opacity = 0;
      steps.forEach((s,i) => s.classList.toggle('active', i===0));
    } 
    else if (progress < 0.4) {
      l1.style.opacity = mapRange(progress, 0.2, 0.25, 1, 0);
      l2.style.opacity = 1;
      l3.style.opacity = mapRange(progress, 0.35, 0.4, 0, 1);
      l4.style.opacity = 0; l5.style.opacity = 0;
      steps.forEach((s,i) => s.classList.toggle('active', i===1));
    } 
    else if (progress < 0.6) {
      l1.style.opacity = 0;
      l2.style.opacity = mapRange(progress, 0.4, 0.45, 1, 0);
      l3.style.opacity = 1;
      l4.style.opacity = mapRange(progress, 0.55, 0.6, 0, 1);
      l5.style.opacity = 0;
      steps.forEach((s,i) => s.classList.toggle('active', i===2));
    } 
    else if (progress < 0.8) {
      l1.style.opacity = 0; l2.style.opacity = 0;
      l3.style.opacity = mapRange(progress, 0.6, 0.65, 1, 0);
      l4.style.opacity = 1;
      l5.style.opacity = mapRange(progress, 0.75, 0.8, 0, 1);
      steps.forEach((s,i) => s.classList.toggle('active', i===3));
    } 
    else {
      l1.style.opacity = 0; l2.style.opacity = 0; l3.style.opacity = 0;
      l4.style.opacity = mapRange(progress, 0.8, 0.85, 1, 0);
      l5.style.opacity = 1;
      steps.forEach((s,i) => s.classList.toggle('active', i===4));
    }
  });
});
</script>
JS;

$footer = preg_replace($js_pattern, $new_js, $footer);
file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);

echo "Local images and crossfade logic integrated!\n";
