<?php
/**
 * Alt Sayfa Şablonu
 */
get_header(); ?>

<section class="page-hero">
  <div class="wrap">
    <div class="folio" style="margin-bottom:12px;"><div class="rule"></div><span class="kicker">MOBİLİZMİR</span></div>
    <h1 class="serif"><?php the_title(); ?></h1>
  </div>
</section>

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
