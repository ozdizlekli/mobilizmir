<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
// Remove light-card rules
$css = preg_replace('/\.styled-content\.light-card.*?\{.*?\}/s', '', $css);
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);
