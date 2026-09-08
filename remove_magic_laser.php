<?php
// 1. Remove from front-page.php
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');
$front = preg_replace('/<!-- ============ SİHİRLİ LAZER ============ -->\s*<section class="magic-section">.*?<\/section>/s', '', $front);
file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);

// 2. Remove from footer.php
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');
$footer = preg_replace('/\s*\/\/\s*MAGIC LASER JS.*?\}\);?\s*\}/s', '', $footer);
file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);

// 3. Remove from style.css
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
$css = preg_replace('/\/\* ============ SİHİRLİ LAZER \(MAGIC MASK\) ============ \*\/.*?pointer-events:\s*none;\s*\n\s*z-index:\s*3;\s*\n\}/s', '', $css);
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);

echo "Magic laser removed completely!\n";
