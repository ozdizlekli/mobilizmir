<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

// Old: https://images.unsplash.com/photo-1550344004-9a0081dff90e?q=80&w=1920&auto=format&fit=crop
// New: A highly specific car seat photo (Premium leather/stitching focus)
// Unsplash ID: 1583121274602-3e2820c69888 or 1580273916550-e323be2ae537
$old_url = "https://images.unsplash.com/photo-1550344004-9a0081dff90e?q=80&w=1920&auto=format&fit=crop";
$new_url = "https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=80&w=1920&auto=format&fit=crop";

$css = str_replace($old_url, $new_url, $css);
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);
echo "Seat image updated.";
