<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
$css = preg_replace('/\.magic-wrap:hover\s*\{.*?\}/s', '', $css);
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);
