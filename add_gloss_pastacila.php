<?php
// 1. STYLE.CSS UPDATE
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$new_css = <<<CSS

/* ============ PASTA CİLA PARLAKLIK TESTİ ============ */
.gloss-hero {
  position: relative; width: 100%; height: 70vh; min-height: 500px;
  overflow: hidden; background: #000;
  cursor: crosshair;
  --x: 50%; --y: 50%;
}
.gloss-bg {
  position: absolute; top:0; left:0; width:100%; height:100%;
  background: url('assets/images/service-pastacila.jpg') no-repeat center center/cover;
  /* Darken slightly to make the dynamic highlight pop */
  filter: brightness(0.65) contrast(1.3);
  z-index: 1;
}
.gloss-light {
  position: absolute; top:0; left:0; width:100%; height:100%;
  background: radial-gradient(circle 350px at var(--x) var(--y), rgba(255, 255, 255, 0.4) 0%, rgba(212, 175, 55, 0.15) 40%, transparent 80%);
  mix-blend-mode: color-dodge;
  z-index: 2;
  pointer-events: none;
}
.gloss-light::after {
  content: ''; position: absolute; top:0; left:0; width:100%; height:100%;
  background: radial-gradient(circle 120px at var(--x) var(--y), rgba(255, 255, 255, 0.9) 0%, transparent 60%);
  mix-blend-mode: overlay;
}
.gloss-hud {
  position: absolute; top: var(--y); left: calc(var(--x) + 40px);
  transform: translateY(-50%);
  color: var(--gold-bright); font-family: 'Courier New', Courier, monospace; font-size: 11px;
  letter-spacing: 1px; border: 1px solid rgba(212,175,55,0.5); padding: 6px 10px;
  background: rgba(11,11,10,0.7); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px);
  z-index: 3; pointer-events: none;
  opacity: 0;
  transition: opacity 0.3s;
  white-space: nowrap;
}
.gloss-hero:hover .gloss-hud { opacity: 1; }

.gloss-content {
  position: absolute; bottom: 40px; left: 40px; z-index: 10; pointer-events: none;
}
.gloss-content h1 {
  color: var(--gold-bright); font-size: clamp(2.5rem, 5vw, 4.5rem);
  margin:0 0 10px; font-family: 'Montserrat', sans-serif;
  text-shadow: 0 5px 30px rgba(0,0,0,1);
}
.gloss-content p {
  color: #fff; font-size: 1.15rem; max-width: 600px;
  font-family: 'Inter', sans-serif;
  text-shadow: 0 2px 15px rgba(0,0,0,1);
  line-height: 1.6;
}
@media(max-width: 768px) {
  .gloss-hero { height: 50vh; }
  .gloss-content { bottom: 20px; left: 20px; }
  .gloss-hud { display: none; /* Hide cursor HUD on mobile */ }
}
CSS;

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);


// 2. PAGE.PHP UPDATE
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

$gloss_php = <<<PHP
<?php elseif ( is_page('pasta-cila') ) : ?>
  <!-- PASTA CİLA İNTERAKTİF PARLAKLIK TESTİ -->
  <section class="gloss-hero" id="glossHero">
    <div class="gloss-bg"></div>
    <div class="gloss-light" id="glossLight"></div>
    <div class="gloss-hud" id="glossHud">HARE/ÇİZİK TESPİTİ: %0<br>KUSURSUZ YANSIMA</div>
    
    <div class="gloss-content">
        <h1 class="serif"><?php the_title(); ?></h1>
        <p>Boyadaki kılcal çizikleri ve hareleri yok ediyor, seramik kaplamayla "sıvı cam" görünümü kazandırıyoruz. Kusursuz yansımayı test etmek için inceleme ışığını kaportada gezdirin.</p>
    </div>
  </section>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const hero = document.getElementById('glossHero');
        if(!hero) return;

        const updateLight = (clientX, clientY) => {
            const rect = hero.getBoundingClientRect();
            let x = clientX - rect.left;
            let y = clientY - rect.top;
            hero.style.setProperty('--x', x + 'px');
            hero.style.setProperty('--y', y + 'px');
        };

        // Center default
        const rect = hero.getBoundingClientRect();
        hero.style.setProperty('--x', (rect.width/2) + 'px');
        hero.style.setProperty('--y', (rect.height/2) + 'px');

        hero.addEventListener('mousemove', (e) => updateLight(e.clientX, e.clientY));
        hero.addEventListener('touchmove', (e) => {
            updateLight(e.touches[0].clientX, e.touches[0].clientY);
        }, {passive: true});
    });
  </script>
PHP;

// Insert this `elseif` before the `else` block for the normal page hero.
$pattern = '/(<\?php else : \?>\s*<!-- NORMAL PAGE HERO -->)/s';
$page = preg_replace($pattern, $gloss_php . "\n" . '$1', $page);

file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);

echo "Gloss test feature injected into Pasta Cila!\n";
