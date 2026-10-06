<?php
/**
 * Custom template for all pages to match the Gold/Black/White Bossogarage vibe.
 */
get_header(); ?>

<style>
/* Force full width on Astra wrapper */
#content.site-content { padding: 0 !important; margin: 0 !important; display: block !important; }
#primary.content-area { width: 100% !important; float: none !important; margin: 0 !important; padding: 0 !important; }
.site-main { width: 100% !important; }
.page-hero {
    position: relative;
    padding: 240px 0 100px;
    text-align: center;
    border-bottom: 1px solid var(--gold);
    color: #fff;
}
.page-hero-overlay {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: rgba(11, 11, 10, 0.75);
    z-index: 1;
}
.page-hero .wrap {
    position: relative;
    z-index: 2;
}
</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); 
            $bg = "";
            if(has_post_thumbnail()) {
                $bg = get_the_post_thumbnail_url(null, "full");
            } else {
                $slug = get_post_field("post_name", get_post());
                $assets = get_stylesheet_directory_uri() . "/assets/images/";
                
                $img_map = [
                    "boyasiz-gocuk-duzeltme" => "service-pdr.jpg",
                    "far-temizligi" => "service-far.jpg",
                    "pasta-cila" => "service-pastacila.jpg",
                    "koltuk-yikama" => "service-koltuk.jpg",
                    "periyodik-bakim" => "service-motor.jpg",
                    "arac-yikama" => "new-arac-yikama.jpg",
                    "kaporta-tamir" => "new-kaporta-tamir.png",
                    "celik-rotus" => "new-celik-rotus.png",
                    "kaporta-boya" => "new-kaporta-boya.jpg",
                    "cam-filmi" => "new-cam-filmi.jpg",
                    "ppf-kaplama" => "new-ppf-kaplama.jpg"
                ];

                if(isset($img_map[$slug])) {
                    $bg = $assets . $img_map[$slug];
                }
            }
        ?>
            
            <!-- PAGE HERO (DARK) -->
            <section class="page-hero" style="background-color: var(--ink); <?php if($bg) echo "background-image: url('$bg'); background-size: cover; background-position: center;"; ?>">
                <?php if($bg): ?><div class="page-hero-overlay"></div><?php endif; ?>
                <div class="wrap">
                    <h1 class="serif" style="color: #fff; font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 800; margin: 0; text-transform: uppercase; letter-spacing: -1px;"><?php the_title(); ?></h1>
                    <div style="width: 60px; height: 4px; background: var(--gold); margin: 20px auto 0;"></div>
                </div>
            </section>

            <!-- PAGE CONTENT (LIGHT) -->
            <section class="page-content light" style="padding: 80px 0; background: #ffffff;">
                <div class="wrap styled-content" style="max-width: 900px; margin: 0 auto; color: var(--ink);">
                    <?php 
                    $content = get_the_content();
                    if(empty(trim($content))) {
                        // Placeholder content if page is empty
                        echo '<h2>' . get_the_title() . ' Hizmetimiz</h2>';
                        echo '<p>Bu hizmetimiz hakkında detaylı bilgi çok yakında eklenecektir. Fiyat almak ve randevu oluşturmak için lütfen WhatsApp hattımızdan bize ulaşın.</p>';
                        echo '<ul style="margin-top:20px; line-height:1.8;">
                                <li>%100 Müşteri Memnuniyeti</li>
                                <li>Garantili ve Orijinal Ürünler</li>
                                <li>Profesyonel Ekip ve Ekipman</li>
                              </ul>';
                    } else {
                        the_content(); 
                    }
                    ?>
                </div>
            </section>
            
        <?php endwhile; ?>

    </main>
</div>

<?php get_footer(); ?>
