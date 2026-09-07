<?php
/**
 * Blog Arşiv Şablonu
 */
get_header(); ?>

<section class="page-hero">
  <div class="wrap">
    <div class="folio" style="margin-bottom:12px;"><div class="rule"></div><span class="kicker">İÇERİKLERİMİZ</span></div>
    <h1 class="serif">Blog</h1>
  </div>
</section>

<section class="page-body">
  <div class="wrap" style="max-width:820px;">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <div class="blog-row">
          <?php if (has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
          <?php else: ?>
            <div class="ph" data-label="GÖRSEL BEKLENİYOR"></div>
          <?php endif; ?>
          <div><span class="meta"><?php echo get_the_date(); ?></span><h4><?php the_title(); ?></h4></div>
          <a href="<?php the_permalink(); ?>" class="go">Oku</a>
        </div>
      <?php endwhile; ?>
      <div style="margin-top: 40px;">
        <?php the_posts_pagination(['prev_text' => 'Önceki', 'next_text' => 'Sonraki']); ?>
      </div>
    <?php else: ?>
      <p style="color:var(--stone);">Henüz blog yazısı eklenmemiş.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
