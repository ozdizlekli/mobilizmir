<?php
// 1. STYLE.CSS UPDATE
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$new_css = <<<CSS

/* ============ PERİYODİK BAKIM ASMR HERO ============ */
.asmr-hero {
  position: relative; width: 100%; height: 75vh; min-height: 500px;
  overflow: hidden; background: #000;
}
.asmr-bg {
  position: absolute; top: -5%; left: -5%; width: 110%; height: 110%;
  background: url('assets/images/service-motor.jpg') no-repeat center center;
  background-size: cover;
  filter: contrast(1.15) brightness(0.7);
  animation: asmr-pan 30s infinite alternate ease-in-out;
  z-index: 1;
}
@keyframes asmr-pan {
  0% { transform: scale(1) translate(0, 0); }
  100% { transform: scale(1.08) translate(-1%, 2%); }
}
.asmr-glow {
  position: absolute; top:0; left:0; width:100%; height:100%;
  background: radial-gradient(circle at 40% 50%, rgba(212,175,55,0.2) 0%, transparent 60%);
  mix-blend-mode: color-dodge;
  animation: asmr-breathe 4s infinite alternate ease-in-out;
  z-index: 2;
  pointer-events: none;
}
@keyframes asmr-breathe {
  0% { opacity: 0.3; transform: scale(0.9); }
  100% { opacity: 1; transform: scale(1.1); }
}
.asmr-particles {
  position: absolute; top:0; left:0; width:100%; height:100%;
  z-index: 3; pointer-events: none;
}
.asmr-particle {
  position: absolute; bottom: -20px;
  background: var(--gold-bright);
  border-radius: 50%;
  box-shadow: 0 0 12px var(--gold-bright);
  animation: float-up linear infinite;
  will-change: transform, opacity;
}
@keyframes float-up {
  0% { transform: translateY(0) scale(0.5); opacity: 0; }
  20% { opacity: var(--po, 0.8); }
  80% { opacity: var(--po, 0.8); }
  100% { transform: translateY(-85vh) scale(1.5); opacity: 0; }
}
.asmr-content {
  position: absolute; bottom: 50px; left: 50px; z-index: 10; pointer-events: none;
}
.asmr-content h1 {
  color: var(--gold-bright); font-size: clamp(2.5rem, 5vw, 4.5rem);
  margin:0 0 10px; font-family: 'Montserrat', sans-serif;
  text-shadow: 0 5px 30px rgba(0,0,0,1);
}
.asmr-content p {
  color: #fff; font-size: 1.15rem; max-width: 600px;
  font-family: 'Inter', sans-serif;
  text-shadow: 0 2px 15px rgba(0,0,0,1);
  line-height: 1.6;
}
@media(max-width: 768px) {
  .asmr-hero { height: 50vh; }
  .asmr-content { bottom: 20px; left: 20px; }
  .asmr-content p { font-size: 1rem; }
}
CSS;

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);


// 2. PAGE.PHP UPDATE
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

$asmr_php = <<<PHP
<?php elseif ( is_page('periyodik-bakim') ) : ?>
  <!-- PERİYODİK BAKIM ASMR CİNEMAGRAPH HERO -->
  <section class="asmr-hero" id="asmrHero">
    <div class="asmr-bg"></div>
    <div class="asmr-glow"></div>
    <div class="asmr-particles" id="asmrParticles"></div>
    
    <div class="asmr-content">
        <h1 class="serif"><?php the_title(); ?></h1>
        <p>Motor ömrünüzü uzatan mühendislik dokunuşları. İsviçre saati hassasiyetinde, en kaliteli bileşenlerle yapılan kusursuz bakım ritüeli.</p>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.getElementById('asmrParticles');
        if(!container) return;
        
        // Create 30 golden floating particles
        for(let i=0; i<30; i++) {
            let p = document.createElement('div');
            p.className = 'asmr-particle';
            p.style.left = Math.random() * 100 + '%';
            p.style.animationDuration = (Math.random() * 15 + 10) + 's'; // 10s to 25s very slow
            p.style.animationDelay = (Math.random() * -30) + 's'; // Start at random times
            
            let opacity = Math.random() * 0.6 + 0.2;
            p.style.setProperty('--po', opacity); // Particle opacity
            
            let size = Math.random() * 4 + 1; // 1px to 5px
            p.style.width = size + 'px';
            p.style.height = size + 'px';
            
            container.appendChild(p);
        }
    });
  </script>
PHP;

// Insert this `elseif` before the `else` block for the normal page hero.
$pattern = '/(<\?php else : \?>\s*<!-- NORMAL PAGE HERO -->)/s';
$page = preg_replace($pattern, $asmr_php . "\n" . '$1', $page);

file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);

echo "ASMR feature injected into Periyodik Bakım!\n";
