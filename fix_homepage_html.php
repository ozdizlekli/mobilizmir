<?php
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

// Clean up any remaining junk from the old slider
$pattern = '/\s*<input type="range".*?<\/div>\s*<\/div>/s';
$front = preg_replace($pattern, '', $front);

file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);
echo "HTML fixed!\n";
