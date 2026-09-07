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
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,500;0,9..144,600;1,9..144,500&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="topbar">
  <div class="wrap">
    <div class="topbar-left">
      <a href="tel:+905401872003" class="tel">0540 187 20 03</a>
      <span>Pzt–Cmt 09:00–19:00</span>
      <span>İzmir geneli adrese teslim</span>
    </div>
    <div>Google'da 4.9 ★ — 500+ değerlendirme</div>
  </div>
</div>

<header class="site">
  <div class="wrap">
    <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/mobilizmir-logo-new.jpg" alt="Mobilİzmir" style="height: 95px; width: auto; mix-blend-mode: lighten;"></a></div>
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
      <a href="/#galeri">Galeri</a>
      <a href="/#fiyat">Fiyatlandırma</a>
      <a href="/#hakkimizda">Hakkımızda</a>
      <a href="/sss/">SSS</a>
      <a href="/blog/">Blog</a>
      <a href="/iletisim/">İletişim</a>
    </nav>
    <div style="display:flex; gap:10px; align-items:center;">
      <a href="https://wa.me/905401872003" class="btn solid">WhatsApp'tan Randevu</a>
      <button class="nav-toggle" aria-label="Menüyü aç" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<div id="content" class="site-content">
