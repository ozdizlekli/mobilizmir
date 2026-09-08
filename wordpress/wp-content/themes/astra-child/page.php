<?php
/**
 * Alt Sayfa Şablonu
 */
get_header(); ?>

<?php if ( is_page('far-temizligi') ) : ?>
  <!-- FAR TEMİZLİĞİ ÖZEL AÇILIŞ (SPLIT SCREEN) -->
  <section class="split-hero" id="splitHero">
    <div class="split-layer split-dirty"></div>
    <div class="split-layer split-clean"></div>
    <div class="split-divider">
      <div class="split-handle"></div>
    </div>
    <div class="split-content">
      <h1 class="serif"><?php the_title(); ?></h1>
      <p>Lazer berraklığına kendi ellerinizle tanık olun. Aydınlığı sağa sola kaydırarak geceyi nasıl gündüze çevirdiğimizi keşfedin.</p>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const hero = document.getElementById('splitHero');
      if(!hero) return;
      
      const updateSplit = (clientX) => {
        const rect = hero.getBoundingClientRect();
        let x = clientX - rect.left;
        let percent = (x / rect.width) * 100;
        if(percent < 0) percent = 0;
        if(percent > 100) percent = 100;
        hero.style.setProperty('--pos', percent + '%');
      };

      hero.addEventListener('mousemove', (e) => updateSplit(e.clientX));
      hero.addEventListener('touchmove', (e) => updateSplit(e.touches[0].clientX), {passive: true});
    });
  </script>
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
                l.style.transform = `scale(${scale})`;
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
<?php else : ?>
  <!-- NORMAL PAGE HERO -->
  <section class="page-hero">
    <div class="wrap">
      <div class="folio" style="margin-bottom:12px;"><div class="rule"></div><span class="kicker">MOBİLİZMİR</span></div>
      <h1 class="serif"><?php the_title(); ?></h1>
    </div>
  </section>
<?php endif; ?>

<section class="page-body">
  <div class="wrap" style="max-width:820px;">
    <?php while (have_posts()): the_post(); ?>
      
      <div class="entry-content styled-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>

    <div class="page-cta">
      <h3 class="serif" style="margin-bottom:20px;">Aracınız için randevu almaya hazır mısınız?</h3>
      <a href="https://wa.me/905401872003" class="btn solid">WhatsApp'tan Randevu Al</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
