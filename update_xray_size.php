<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

// Update .xray-section padding
$css = preg_replace(
    '/\.xray-section\s*\{\s*padding:\s*80px\s*20px;/',
    ".xray-section {\n  padding: 100px 0;",
    $css
);

// Update .xray-container max-width and add a media query for border-radius removal on smaller screens
$css = preg_replace(
    '/\.xray-container\s*\{\s*position:\s*relative;\s*width:\s*100%;\s*max-width:\s*1000px;/',
    ".xray-container {\n  position: relative;\n  width: 100%;\n  max-width: 1400px;",
    $css
);

// Add the media query at the end of the file
$media_query = <<<CSS

@media(max-width: 1400px) {
  .xray-container {
    border-radius: 0;
    border-left: none;
    border-right: none;
  }
}
CSS;

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . $media_query);
echo "X-Ray size updated.\n";
