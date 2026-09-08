<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$css = preg_replace(
    '/\.layer-ext-dirty\s*\{\s*background-image:\s*url\(\'.*?\'\);/s',
    ".layer-ext-dirty {\n  background-image: url('https://www.carscoops.com/wp-content/uploads/2022/05/LaFerrari-Aperta-2a.jpg');",
    $css
);

$css = preg_replace(
    '/\.layer-ext-clean\s*\{\s*background-image:\s*url\(\'.*?\'\);/s',
    ".layer-ext-clean {\n  background-image: url('https://www.carscoops.com/wp-content/uploads/2022/05/LaFerrari-Aperta-2a.jpg');",
    $css
);

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);
echo "Regex fixed!";
