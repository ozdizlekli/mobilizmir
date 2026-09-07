<?php
$style = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

// Find and replace the display:none rules inside media query
$style = str_replace('header.site .wrap .btn.solid{display:none;}', 'header.site .wrap .btn.solid{padding: 8px 16px; font-size: 11px;}', $style);
$style = str_replace('header.site .wrap .btn.form-btn{display:none;}', '/* header.site .wrap .btn.form-btn{display:none;} */', $style);

// If there's a space issue in match:
$style = preg_replace('/header\.site \.wrap \.btn\.solid\s*\{\s*display:\s*none;\s*\}/', 'header.site .wrap .btn.solid { padding: 8px 12px; font-size: 11px; }', $style);
$style = preg_replace('/header\.site \.wrap \.btn\.form-btn\s*\{\s*display:\s*none;\s*\}/', '/* btn.form-btn removed */', $style);

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $style);
