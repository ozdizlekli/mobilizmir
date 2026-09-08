<?php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

$page = str_replace('/wp-content/themes/astra-child/', '<?php echo get_stylesheet_directory_uri(); ?>/', $page);

file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);
echo "Paths fixed!\n";
