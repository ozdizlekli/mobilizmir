<?php
// 1. STYLE.CSS UPDATE
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$new_css = <<<CSS

/* ============ PDR HOLOGRAFİK HUD HERO ============ */
.hud-hero {
  position: relative; width: 100%; height: 70vh; min-height: 500px;
  overflow: hidden; background: #000;
  font-family: 'Courier New', Courier, monospace;
}
.hud-bg {
  position: absolute; top:0; left:0; width:100%; height:100%;
  background: url('assets/images/service-pdr.jpg') no-repeat center center;
  background-size: cover;
  filter: contrast(1.2) brightness(0.9);
  z-index: 1;
}
.hud-overlay {
  position: absolute; top:0; left:0; width:100%; height:100%;
  background: radial-gradient(circle at 60% 50%, transparent 0%, rgba(0,0,0,0.8) 100%);
  z-index: 2;
}
.hud-content {
  position: absolute; bottom: 40px; left: 40px; z-index: 10;
}
.hud-content h1 {
  color: var(--gold-bright); font-size: clamp(2rem, 4vw, 4rem);
  margin:0 0 10px; font-family: 'Montserrat', sans-serif;
  text-shadow: 0 5px 20px rgba(0,0,0,1);
}
.hud-content p {
  color: #fff; font-size: 1.1rem; max-width: 500px;
  font-family: 'Inter', sans-serif;
  text-shadow: 0 2px 10px rgba(0,0,0,1);
}
.hud-point { position: absolute; z-index: 5; }
.hud-dot {
  width: 12px; height: 12px; background: var(--gold-bright);
  border-radius: 50%; box-shadow: 0 0 15px var(--gold-bright);
  position: absolute; top: -6px; left: -6px;
  animation: hud-pulse 2s infinite;
}
.hud-line {
  position: absolute;
  background: rgba(212,175,55,0.7);
  width: 2px; height: 0;
  top: 0; left: 0;
  transform-origin: bottom left;
  transition: height 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}
.hud-line.drawn { height: 110px; }

/* Dir-ul : Up Left */
.dir-ul .hud-line { transform: rotate(-45deg); }
.dir-ul .hud-box { top: -110px; left: -160px; }

/* Dir-ur : Up Right */
.dir-ur .hud-line { transform: rotate(45deg); transform-origin: bottom left; top: -110px; height:0; transition: height 0.6s, top 0.6s; }
.dir-ur .hud-line.drawn { height: 110px; top: 0; }
.dir-ur .hud-box { top: -110px; left: 78px; }

/* Dir-dr : Down Right */
.dir-dr .hud-line { transform: rotate(135deg); transform-origin: top left; }
.dir-dr .hud-box { top: 78px; left: 78px; }

.hud-box {
  position: absolute;
  border: 1px solid var(--gold);
  background: rgba(11,11,10,0.85);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  padding: 12px 18px;
  color: var(--gold-bright);
  text-transform: uppercase;
  letter-spacing: 1px;
  opacity: 0;
  transition: opacity 0.4s ease 0.5s; /* Delay to let line draw */
  min-width: 160px;
}
.hud-line.drawn ~ .hud-box { opacity: 1; }

.hud-label { display: block; font-size: 10px; color: var(--stone); margin-bottom: 5px; }
.hud-value { display: block; font-size: 26px; font-weight: bold; margin-bottom: 2px; text-shadow: 0 0 10px var(--gold); }
.hud-sub { display: block; font-size: 9px; color: #fff; }

.hud-scanline {
  position: absolute; top:0; left:0; width:100%; height: 2px;
  background: rgba(212,175,55,0.4);
  box-shadow: 0 0 30px var(--gold-bright);
  z-index: 6;
  animation: scan 5s linear infinite;
}
@keyframes scan {
  0% { top: 0; opacity: 0; }
  10% { opacity: 1; }
  90% { opacity: 1; }
  100% { top: 100%; opacity: 0; }
}
@keyframes hud-pulse {
  0% { box-shadow: 0 0 0 0 rgba(212,175,55,0.7); }
  70% { box-shadow: 0 0 0 15px rgba(212,175,55,0); }
  100% { box-shadow: 0 0 0 0 rgba(212,175,55,0); }
}

@media(max-width: 768px) {
  .hud-hero { height: 50vh; }
  .hud-content { bottom: 20px; left: 20px; }
  .hud-box { padding: 8px 12px; min-width: 130px; }
  .hud-value { font-size: 20px; }
  
  .dir-ul .hud-box { left: -130px; }
  .dir-ur .hud-box { left: 40px; }
  .dir-dr .hud-box { left: 40px; }
}
CSS;

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);

// 2. PAGE.PHP UPDATE
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

$hud_php = <<<PHP
<?php elseif ( is_page('boyasiz-gocuk-duzeltme') ) : ?>
  <!-- PDR HOLOGRAFİK HUD HERO -->
  <section class="hud-hero" id="hudHero">
    <div class="hud-bg"></div>
    <div class="hud-overlay"></div>
    <div class="hud-scanline"></div>
    
    <div class="hud-point dir-ul" style="top: 25%; left: 35%;">
        <div class="hud-dot"></div>
        <div class="hud-line"></div>
        <div class="hud-box">
            <span class="hud-label">Boya Kalınlığı</span>
            <span class="hud-value">%<span class="hud-counter" data-target="100">0</span></span>
            <span class="hud-sub">Orijinal Koruma</span>
        </div>
    </div>

    <div class="hud-point dir-ur" style="top: 40%; left: 45%;">
        <div class="hud-dot"></div>
        <div class="hud-line"></div>
        <div class="hud-box">
            <span class="hud-label">Tramer Kaydı</span>
            <span class="hud-value">YOK</span>
            <span class="hud-sub">Sıfır Değer Kaybı</span>
        </div>
    </div>

    <div class="hud-point dir-dr" style="top: 65%; left: 60%;">
        <div class="hud-dot"></div>
        <div class="hud-line"></div>
        <div class="hud-box">
            <span class="hud-label">Kimyasal / Macun</span>
            <span class="hud-value">%<span class="hud-counter" data-target="0">100</span></span>
            <span class="hud-sub">Kusursuz İşlem</span>
        </div>
    </div>

    <div class="hud-content">
      <h1 class="serif"><?php the_title(); ?></h1>
      <p>Orijinal boyaya milimetre bile zarar vermeden, mikron hassasiyetinde cerrahi müdahale.</p>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const hudHero = document.getElementById('hudHero');
      if(!hudHero) return;

      setTimeout(() => {
        // Çizgileri çiz
        const lines = document.querySelectorAll('.hud-line');
        lines.forEach(l => l.classList.add('drawn'));
        
        // Rakamları say (Kutu görünür olduktan sonra)
        setTimeout(() => {
          const counters = document.querySelectorAll('.hud-counter');
          counters.forEach(c => {
              let target = parseInt(c.getAttribute('data-target'));
              let current = parseInt(c.innerText);
              if (current === target) return;
              
              let inc = target > current ? 2 : -2;
              let timer = setInterval(() => {
                  current += inc;
                  if((inc > 0 && current >= target) || (inc < 0 && current <= target)) {
                      current = target;
                      clearInterval(timer);
                  }
                  c.innerText = current;
              }, 30);
          });
        }, 500); // Kutu animasyon süresini bekle

      }, 300); // Sayfa açıldıktan kısa süre sonra başla
    });
  </script>
PHP;

// Insert this `elseif` before the `else` block for the normal page hero.
$pattern = '/(<\?php else : \?>\s*<!-- NORMAL PAGE HERO -->)/s';
$page = preg_replace($pattern, $hud_php . "\n" . '$1', $page);

file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);

echo "HUD Feature injected into PDR!\n";
