<?php
// 1. Update header.php
$header = file_get_contents('./wordpress/wp-content/themes/astra-child/header.php');
$header = preg_replace(
    '/<link href="https:\/\/fonts\.googleapis\.com\/css2\?family=Fraunces[^"]+" rel="stylesheet">/',
    '<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">',
    $header
);
file_put_contents('./wordpress/wp-content/themes/astra-child/header.php', $header);

// 2. Update style.css
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

// Replace Fraunces with Montserrat
$css = str_replace("'Fraunces', serif", "'Montserrat', sans-serif", $css);
$css = str_replace("'Fraunces',serif", "'Montserrat', sans-serif", $css);

// Remove italics from Montserrat where it was used for elegant serifs
$css = str_replace("font-style:italic;", "font-style:normal; letter-spacing:-0.02em;", $css);
$css = str_replace("font-style: italic;", "font-style: normal; letter-spacing:-0.02em;", $css);

// Adjust some weights for Montserrat since it's thicker than Fraunces
$css = str_replace("font-weight:500;", "font-weight:600;", $css);
$css = str_replace("font-weight: 500;", "font-weight: 600;", $css);

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);

echo "Fonts updated to Montserrat and Inter.\n";
