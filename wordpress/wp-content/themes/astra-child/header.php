<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="topbar">
  <div class="wrap">
    <div class="topbar-left">
      <a href="tel:+905533459073" class="tel">0553 345 90 73</a>
      <span>Pzt–Cmt 09:00–19:00</span>
      <span>İzmir geneli adrese teslim</span>
    </div>
    <div>%100 Müşteri Memnuniyeti — 500+ Mutlu Müşteri</div>
  </div>
</div>

<div class="top-bar">
    <div class="tb-left">
        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
        <span>İzmir / Türkiye - Yerinde Mobil Hizmet</span>
    </div>
    <div class="tb-right">
        <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        <span>+90 553 345 90 73</span>
    </div>
</div>
<header class="site" id="site-header">
  <div class="wrap">
    <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/mobilizmir-logo-new.jpg" alt="Mobilİzmir" style="height: 95px; width: auto; mix-blend-mode: lighten; margin-top: -12px; margin-bottom: -12px;"></a></div>
    <nav class="primary">
      <div class="has-dropdown">
        <a href="/#hizmetler">Hizmetler <svg viewBox="0 0 12 12" width="10" height="10" style="margin-left:4px;fill:none;stroke:currentColor;stroke-width:1.5;stroke-linecap:round;transform:translateY(1px);"><path d="M3 4.5L6 7.5L9 4.5"></path></svg></a>
        <div class="dropdown">
          <a href="/koltuk-yikama/">Koltuk Yıkama</a>
          <a href="/pasta-cila/">Pasta Cila</a>
          <a href="/far-temizligi/">Far Temizliği</a>
          <a href="/boyasiz-gocuk-duzeltme/">Boyasız Göçük Düzeltme (PDR)</a>
          <a href="/periyodik-bakim/">Periyodik Bakım</a>
        </div>
      </div>
      <a href="/uygulamalarimiz-galeri/">Galeri</a>
      
      <a href="/#hakkimizda">Hakkımızda</a>
      <a href="/sss/">Sık Sorulanlar</a>
      <a href="/blog/">Blog</a>
      <a href="/iletisim/">İletişim</a>
    </nav>
    <div style="display:flex; gap:10px; align-items:center;">
      <a href="https://wa.me/905533459073?text=Merhaba%2C%20Mobil%C4%B0zmir%20web%20sitenizden%20ula%C5%9F%C4%B1yorum.%20Hizmetleriniz%20hakk%C4%B1nda%20bilgi%20veya%20randevu%20almak%20istiyorum." class="btn solid">Randevu Al</a>
      <button class="nav-toggle" aria-label="Menüyü aç" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<div id="content" class="site-content">
