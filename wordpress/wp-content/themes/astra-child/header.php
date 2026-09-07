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
    <div class="logo"><a href="<?php echo home_url(); ?>">Mobil<em>İzmir</em></a></div>
    <nav class="primary">
      <a href="/#hizmetler">Hizmetler</a>
      <a href="/#galeri">Galeri</a>
      <a href="/#fiyat">Fiyatlandırma</a>
      <a href="/#hakkimizda">Hakkımızda</a>
      <a href="/blog/">Blog</a>
      <a href="/iletisim/">İletişim</a>
    </nav>
    <div style="display:flex; gap:10px; align-items:center;">
      <a href="/randevu-al/" class="btn form-btn">Formla Randevu</a>
      <a href="https://wa.me/905401872003" class="btn solid">WhatsApp'tan Randevu</a>
      <button class="nav-toggle" aria-label="Menüyü aç" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<div id="content" class="site-content">
