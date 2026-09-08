<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
$css = preg_replace('/\/\* ============ SİHİRLİ LAZER.*?\.magic-ring\s*\{.*?\}/s', '', $css);
// Just to be sure, brute force remove any remaining magic- classes
$css = preg_replace('/\.magic-[a-z]+\s*\{.*?\}/s', '', $css);
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);
echo "CSS cleaned!\n";
