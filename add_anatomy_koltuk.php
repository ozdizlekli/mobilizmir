<?php
// 1. STYLE.CSS UPDATE
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$new_css = <<<CSS

/* ============ İÇ KUAFÖR ANATOMİ HERO ============ */
.anatomy-hero {
  position: relative;
  width: 100%;
  height: 300vh; /* Scroll uzunlugu: 3 asama */
  background: #000;
}
.anatomy-sticky {
  position: sticky;
  top: 0;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}
.anat-layer {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background-image: url('assets/images/service-koltuk.jpg');
  background-size: cover;
  background-position: center;
  will-change: opacity, transform;
  transform-origin: center center;
}
.anat-clean {
  z-index: 1;
  /* Mukemmel end state */
  filter: contrast(1.1) brightness(1.1); 
}
.anat-steam {
  z-index: 2;
  opacity: 0; 
  /* Sicak ve buharli etki */
  filter: contrast(0.9) brightness(1.4) sepia(0.3) blur(2px);
}
.anat-steam::after {
  content: ''; position: absolute; inset: 0;
  background: radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.5) 0%, rgba(212, 175, 55, 0.2) 50%, transparent 100%);
  filter: blur(20px);
  mix-blend-mode: screen;
}
.anat-dirt {
  z-index: 3;
  /* Yagli, mat, kirli ve grilemis etki */
  filter: grayscale(60%) sepia(40%) contrast(0.6) brightness(0.5);
}

.anat-step {
  position: absolute;
  top: 50%; left: 10%;
  transform: translateY(-50%);
  z-index: 10;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.5s ease, transform 0.5s ease;
  background: rgba(11, 11, 10, 0.85);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  padding: 35px;
  border-radius: var(--radius);
  border-left: 3px solid var(--gold-bright);
  max-width: 450px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.8);
}
.anat-step.active {
  opacity: 1;
  visibility: visible;
  transform: translateY(-50%) translateX(30px);
}
.anat-step h2 {
  color: var(--gold-bright);
  font-size: 2rem;
  margin-bottom: 15px;
  line-height: 1.2;
}
.anat-step p {
  color: #fff;
  font-size: 1.1rem;
  line-height: 1.6;
}

.anat-scroll-hint {
  position: absolute;
  bottom: 40px; left: 50%;
  transform: translateX(-50%);
  z-index: 15;
  text-align: center;
  color: rgba(255,255,255,0.7);
  font-size: 0.85rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  animation: hint-bounce 2s infinite;
}
.anat-scroll-hint .icon {
  font-size: 20px; color: var(--gold-bright); margin-bottom: 5px;
}
@keyframes hint-bounce {
  0%, 100% { transform: translate(-50%, 0); }
  50% { transform: translate(-50%, 15px); }
}

@media(max-width: 768px) {
  .anatomy-hero { height: 250vh; }
  .anat-step { 
    left: 20px; right: 20px; max-width: none; 
    padding: 25px; top: auto; bottom: 120px; 
    transform: translateY(20px); 
  }
  .anat-step.active { transform: translateY(0); }
  .anat-step h2 { font-size: 1.5rem; }
}
CSS;

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);


// 2. PAGE.PHP UPDATE
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

$anatomy_php = <<<PHP
<?php elseif ( is_page('koltuk-yikama') || is_page('detayli-ic-kuafor') ) : ?>
  <!-- İÇ KUAFÖR ANATOMİ HERO -->
  <section class="anatomy-hero" id="anatomyHero">
    <div class="anatomy-sticky">
        <div class="anat-layer anat-clean"></div>
        <div class="anat-layer anat-steam" id="anatSteam"></div>
        <div class="anat-layer anat-dirt" id="anatDirt"></div>

        <div class="anat-step step-1 active" id="step1">
            <h2 class="serif">1. Yüzeydeki Gizli Tehditler</h2>
            <p>Zamanla perfore (delikli) deriye işleyen ter, toz ve bakteriler yüzeyi matlaştırır ve dokuyu sertleştirir.</p>
        </div>
        <div class="anat-step step-2" id="step2">
            <h2 class="serif">2. Anti-Bakteriyel Buhar Şoku</h2>
            <p>150 derece kuru buhar ve özel solüsyonlarla gözeneklerdeki kirler sıvılaştırılarak yüzeye kusulur.</p>
        </div>
        <div class="anat-step step-3" id="step3">
            <h2 class="serif">3. Fabrika Çıkışı Matlık</h2>
            <p>Vakumla çekilen kirlerin ardından, derinin nefes almasını sağlayan o ilk günkü kusursuz mat ve temiz doku ortaya çıkar.</p>
        </div>
        
        <div class="anat-scroll-hint">
            <div class="icon">▼</div>
            Katmanları Keşfetmek İçin Kaydırın
        </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const hero = document.getElementById('anatomyHero');
        if(!hero) return;

        const lDirt = document.getElementById('anatDirt');
        const lSteam = document.getElementById('anatSteam');
        const s1 = document.getElementById('step1');
        const s2 = document.getElementById('step2');
        const s3 = document.getElementById('step3');

        window.addEventListener('scroll', () => {
            const rect = hero.getBoundingClientRect();
            const totalScroll = rect.height - window.innerHeight;
            let progress = -rect.top / totalScroll;
            
            if (progress < 0) progress = 0;
            if (progress > 1) progress = 1;

            const scale = 1 + (progress * 0.15); // Hafif zoom efekti
            document.querySelectorAll('.anat-layer').forEach(l => {
                l.style.transform = `scale(\${scale})`;
            });

            // Asama 1: Kirli -> Buhar
            if (progress < 0.33) {
                let local = progress / 0.33;
                lDirt.style.opacity = 1 - local;
                lSteam.style.opacity = local;
                
                s1.classList.add('active');
                s2.classList.remove('active');
                s3.classList.remove('active');
            }
            // Asama 2: Buhar (Zirve)
            else if (progress < 0.66) {
                let local = (progress - 0.33) / 0.33;
                lDirt.style.opacity = 0;
                lSteam.style.opacity = 1; 
                
                s1.classList.remove('active');
                s2.classList.add('active');
                s3.classList.remove('active');
            }
            // Asama 3: Buhar -> Tertemiz
            else {
                let local = (progress - 0.66) / 0.34;
                lDirt.style.opacity = 0;
                lSteam.style.opacity = 1 - local; 
                
                s1.classList.remove('active');
                s2.classList.remove('active');
                s3.classList.add('active');
            }
        });
    });
  </script>
PHP;

// Insert this `elseif` before the `else` block for the normal page hero.
$pattern = '/(<\?php else : \?>\s*<!-- NORMAL PAGE HERO -->)/s';
$page = preg_replace($pattern, $anatomy_php . "\n" . '$1', $page);

file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);

echo "Anatomy feature injected into Koltuk Yıkama!\n";
