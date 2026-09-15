<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$hero_css = "
/* Hero Video Background */
.home-hero-wrap {
    position: relative;
    min-height: 85vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    margin-top: -150px; /* Pull up under transparent navbar */
}
.home-hero-bg {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    z-index: 0;
}
.home-hero-bg video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.hero-overlay {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    z-index: 1;
}
.top-bar svg { width: 16px; height: 16px; fill: var(--gold); }
.hero-buttons svg { width: 22px; height: 22px; fill: var(--ink); }
";

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $hero_css);
echo "Hero Video CSS Updated.\n";
