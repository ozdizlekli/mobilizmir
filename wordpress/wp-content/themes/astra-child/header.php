<?php
/**
 * The header for Astra Child theme.
 */

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
    <div class="logo">Mobil<em>İzmir</em></div>
    <nav class="primary">
      <a href="/#hizmetler">Hizmetler</a>
      <a href="/#galeri">Galeri</a>
      <a href="/#fiyat">Fiyatlandırma</a>
      <a href="/#hakkimizda">Hakkımızda</a>
      <a href="/#blog">Blog</a>
      <a href="/iletisim/">İletişim</a>
    </nav>
    <a href="https://wa.me/905401872003" class="btn solid">WhatsApp'tan Randevu</a>
  </div>
</header>

<div id="content" class="site-content">
