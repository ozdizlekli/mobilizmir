<?php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');
$target1 = '<?php $extra_class = is_page(3) ? "light-card" : ""; ?>';
$page = str_replace($target1, '', $page);
$target2 = '<div class="entry-content styled-content <?php echo $extra_class; ?>">';
$replacement2 = '<div class="entry-content styled-content">';
$page = str_replace($target2, $replacement2, $page);
file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);
