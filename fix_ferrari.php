<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$old_url = "https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&q=80&w=1920";
$new_url = "https://www.carscoops.com/wp-content/uploads/2022/05/LaFerrari-Aperta-2a.jpg";

// Notice that the CSS actually contains the exact string 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&q=80&w=1920'
$css = str_replace($old_url, $new_url, $css);

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);
echo "Ferrari replaced!";
