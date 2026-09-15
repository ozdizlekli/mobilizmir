<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const header = document.getElementById("mobil-nav-master");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
});
</script>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="bosso-header"  id="mobil-nav-master">
    <div class="bosso-topbar">
        <div class="b-left">
            <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            <span>İzmir / Türkiye - Yerinde Mobil Hizmet</span>
        </div>
        <div class="b-right">
            <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            <span>+90 553 345 90 73</span>
        </div>
    </div>
    <div class="bosso-navbar">
        <nav class="b-nav-left">
            <a href="/">Anasayfa</a>
            <a href="/#hakkimizda">Hakkımızda</a>
            <div class="has-dropdown">
                <a href="/#hizmetler">Hizmetlerimiz <svg viewBox="0 0 12 12" width="10" height="10" ><path d="M3 4.5L6 7.5L9 4.5"></path></svg></a>
                <div class="dropdown">
                    <a href="/koltuk-yikama/">Koltuk Yıkama</a>
                    <a href="/pasta-cila/">Pasta Cila</a>
                    <a href="/far-temizligi/">Far Temizliği</a>
                    <a href="/boyasiz-gocuk-duzeltme/">Boyasız Göçük Düzeltme</a>
                    <a href="/periyodik-bakim/">Periyodik Bakım</a>
                </div>
            </div>
        </nav>
        
        <a href="/" class="b-logo-center">
            <div class="b-logo-top">MOBİL</div>
            <div class="b-logo-bot">İZMİR</div>
        </a>

        <nav class="b-nav-right">
            <a href="/uygulamalarimiz-galeri/">Uygulamalarımız</a>
            <a href="/sss/">Sık Sorulanlar</a>
            <a href="/iletisim/">İletişim</a>
        </nav>
        
        <button class="nav-toggle" aria-label="Menüyü aç">
            <span></span><span></span><span></span>
        </button>
    </div>
</div><!-- end bosso-header -->

<div id="content" class="site-content">
