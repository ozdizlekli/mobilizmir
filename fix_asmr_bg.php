<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$css = preg_replace(
    '/(\.asmr-bg\s*\{\s*position:\s*absolute;\s*)top:\s*-5%;\s*left:\s*-5%;\s*width:\s*110%;\s*height:\s*110%;/',
    '${1}top: 0; left: 0; width: 100%; height: 100%;',
    $css
);

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);
echo "ASMR bg dimensions reset!\n";
