<?php
// 1. Revert page.php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');
$target = '<?php $is_light = is_page("sss") || is_page("gizlilik-politikasi") ? "light-panel" : ""; ?>
      <div class="entry-content styled-content <?php echo $is_light; ?>">';
$replacement = '<div class="entry-content styled-content">';
$page = str_replace($target, $replacement, $page);
file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);

// 2. Remove CSS from style.css
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
// Find the block from /* ==========================================
// AÇIK KART VARYANTI (OKUNABİLİRLİK İÇİN)
// ========================================== */
// to the end of the media query for light-panel
$pattern = '/\/\* ==========================================\s*AÇIK KART VARYANTI \(OKUNABİLİRLİK İÇİN\)\s*========================================== \*\/(.*?)\}\s*\}/s';
$css = preg_replace($pattern, '', $css);
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);
