<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

// 1. Fix Pasta Cila (Remove blur from dirty layer)
// Old: filter: grayscale(40%) sepia(30%) contrast(0.6) brightness(0.65) blur(1px);
$css = preg_replace(
    '/(\.liquid-dirty\s*\{[^\}]*?filter:\s*.*?)blur\([^\)]+\)(.*?;)/',
    '$1$2',
    $css
);
// Also reduce the harshness of the dirty filter so it looks like dull paint, not a bad photo
$css = preg_replace(
    '/(\.liquid-dirty\s*\{[^\}]*?filter:\s*)grayscale\([^\)]+\)\s*sepia\([^\)]+\)\s*contrast\([^\)]+\)\s*brightness\([^\)]+\)/',
    '$1grayscale(15%) sepia(15%) contrast(0.7) brightness(0.7)',
    $css
);

// 2. Fix Periyodik Bakım (Remove scale from animation which causes browser rendering blur)
// Remove the animation from .asmr-bg
$css = preg_replace(
    '/(\.asmr-bg\s*\{[^\}]*?)animation:\s*asmr-pan[^;]+;/',
    '$1',
    $css
);

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);
echo "Sharpness fixed!\n";
