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
