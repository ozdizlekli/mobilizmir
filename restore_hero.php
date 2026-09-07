<?php
$good = file_get_contents('/tmp/good_front.php');
$start = strpos($good, '<!-- ============ HERO ============ -->');
$end = strpos($good, '<!-- ============ HİZMETLER ============ -->');
$hero_section = substr($good, $start, $end - $start);

$current = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

if (strpos($current, '<!-- ============ HERO ============ -->') === false) {
    $target = "get_header(); ?>";
    $replacement = "get_header(); ?>\n\n" . $hero_section;
    $new_content = str_replace($target, $replacement, $current);
    file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $new_content);
    echo "Hero restored.\n";
} else {
    echo "Hero already exists.\n";
}
