<?php
/**
 * Tekil Blog Yazısı Şablonu
 */
get_header(); ?>

<section class="page-hero">
  <div class="wrap">
    <div class="folio" style="margin-bottom:12px;"><div class="rule"></div><span class="kicker">BLOG · <?php echo get_the_date(); ?></span></div>
    <h1 class="serif"><?php the_title(); ?></h1>
  </div>
</section>

<section class="page-body">
  <div class="wrap" style="max-width:820px;">
    <?php while (have_posts()): the_post(); ?>
      <?php if (has_post_thumbnail()): ?>
        <div style="margin-bottom: 40px; aspect-ratio:16/9; overflow:hidden; border-radius:var(--radius);">
          <?php the_post_thumbnail('large', ['style' => 'width:100%;height:100%;object-fit:cover;']); ?>
        </div>
      <?php endif; ?>
      <div class="entry-content styled-content light-card">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>

    <div class="page-cta">
      <a href="/blog/" class="btn">Tüm Yazılara Dön</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
