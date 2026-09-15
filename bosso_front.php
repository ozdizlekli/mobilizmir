<?php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

// 1. Add `.reveal` class to folios and main elements
$page = str_replace('class="folio"', 'class="folio reveal"', $page);
$page = str_replace('<p>', '<p class="reveal">', $page);
$page = str_replace('<div class="mini-price-card">', '<div class="mini-price-card reveal">', $page);

// 2. Add Marquee Galleries above X-Ray
$marquee = '
<!-- ============ INFINITE MARQUEE GALLERY ============ -->
<section style="padding: 60px 0; background: var(--ink);">
    <div class="folio reveal"><span class="num">02</span><h2 class="serif">Premium Uygulamalarımız</h2><p class="reveal">Her detayı mükemmeliyetle işliyoruz.</p></div>
    <div class="marquee-wrapper reveal">
        <div class="marquee-track left">
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-metalik.jpg" alt="Pasta Cila"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-keskin.jpg" alt="PDR"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-kristal.jpg" alt="Far"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-dijital.jpg" alt="Bakım"></div>
            <!-- Duplicate for infinite scroll -->
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-metalik.jpg" alt="Pasta Cila"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-keskin.jpg" alt="PDR"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-kristal.jpg" alt="Far"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-dijital.jpg" alt="Bakım"></div>
        </div>
        <div class="marquee-track right">
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-su.jpg" alt="Pasta Su"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-yansima.jpg" alt="PDR"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-isik.jpg" alt="Far Işık"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-yag.jpg" alt="Bakım Yağ"></div>
            <!-- Duplicate for infinite scroll -->
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-su.jpg" alt="Pasta Su"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-yansima.jpg" alt="PDR"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-isik.jpg" alt="Far Işık"></div>
            <div class="marquee-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-yag.jpg" alt="Bakım Yağ"></div>
        </div>
    </div>
</section>
';

// Increment section numbers correctly after adding the new marquee (which is 02). 
// Currently X-Ray is 02. So we need to shift X-ray to 03, gallery to 04, vs.
$page = str_replace('<span class="num">02</span><h2 class="serif">Aracınızı Santim Santim Tanıyoruz', '<span class="num">03</span><h2 class="serif">Aracınızı Santim Santim Tanıyoruz', $page);
$page = str_replace('<span class="num">03</span><h2 class="serif">Uygulama Galerisi', '<span class="num">04</span><h2 class="serif">Uygulama Galerisi', $page);
$page = str_replace('<span class="num">04</span><h2 class="serif">Nasıl çalışıyoruz', '<span class="num">05</span><h2 class="serif">Nasıl çalışıyoruz', $page);
$page = str_replace('<span class="num">05</span><h2 class="serif">Neden Mobilİzmir', '<span class="num">06</span><h2 class="serif">Neden Mobilİzmir', $page);
$page = str_replace('<span class="num">06</span><h2 class="serif">Müşterilerimiz anlatıyor', '<span class="num">07</span><h2 class="serif">Müşterilerimiz anlatıyor', $page);
$page = str_replace('<span class="num">07</span><h2 class="serif">İzmir\'de araç sahiplerinin', '<span class="num">08</span><h2 class="serif">İzmir\'de araç sahiplerinin', $page);
$page = str_replace('<span class="num">08</span><h2 class="serif">Sıkça sorulanlar', '<span class="num">09</span><h2 class="serif">Sıkça sorulanlar', $page);

// Inject Marquee before X-Ray
$page = preg_replace('/<!-- ============ X-RAY SECTION ============ -->/', $marquee . "\n<!-- ============ X-RAY SECTION ============ -->", $page);

// 3. Update Hero Section to look like Bossogarage
$new_hero = '<!-- ============ HERO ============ -->
<section class="home-hero-wrap">
  <div class="home-hero-bg">
    <video autoplay loop muted playsinline poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-main.jpg">
      <source src="https://videos.pexels.com/video-files/5208643/5208643-uhd_2560_1440_30fps.mp4" type="video/mp4">
    </video>
  </div>
  <div class="hero-overlay" style="background: linear-gradient(to bottom, rgba(11,11,10,0.5) 0%, rgba(11,11,10,0.9) 100%);"></div>
  <div class="wrap" style="position:relative; z-index:2; text-align:center; padding-top: 15vh;">
    <h1 style="color:#fff; font-size: clamp(3rem, 6vw, 5rem); text-shadow: 0 5px 20px rgba(0,0,0,0.8); margin-bottom:0;">Mobilİzmir</h1>
    <div class="cursive-subtitle reveal">Premium Mobil Bakım</div>
    <div class="hero-buttons reveal">
        <a href="https://wa.me/905533459073?text=Merhaba,%20randevu%20almak%20istiyorum." class="btn primary" target="_blank">
            <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Bizi Arayın
        </a>
        <a href="#hizmetler" class="btn secondary">Hizmetleri Görün</a>
    </div>
  </div>
</section>';

// Replace existing hero
$page = preg_replace('/<!-- ============ HERO ============ -->.*?<\/section>/is', $new_hero, $page);

file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $page);
echo "Front Page Updated with Marquee, Reveal Classes, and Bosso Hero.\n";
