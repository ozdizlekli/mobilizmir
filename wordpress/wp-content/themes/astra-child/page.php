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
