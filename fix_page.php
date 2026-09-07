<?php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');
$page = str_replace('<div class="entry-content styled-content">', '<?php $is_light = is_page("sss") || is_page("gizlilik-politikasi") ? "light-panel" : ""; ?>
      <div class="entry-content styled-content <?php echo $is_light; ?>">', $page);
file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);
