<?php
$current = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

$start = strpos($current, '<!-- ============ HERO ============ -->');
if ($start !== false) {
    $hero_part = substr($current, $start);
    $current = substr($current, 0, $start);
} else {
    die("Hero not found in file!");
}

$target = 'get_header(); ?' . '>';
$current = str_replace($target, $target . "\n\n" . $hero_part, $current);

$current = rtrim($current) . "\n";
file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $current);
echo "Hero moved to top successfully.\n";
