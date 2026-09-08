<?php
// 1. UPDATE CSS WITH RED CAR AND MATCHING INTERIOR
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

// Replace Exterior Dirty
$css = preg_replace(
    '/\.layer-ext-dirty\s*\{.*?background-image:\s*url\([^)]+\);/s',
    ".layer-ext-dirty {\n  background-image: url('https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&q=80&w=1920');",
    $css
);

// Replace Exterior Clean
$css = preg_replace(
    '/\.layer-ext-clean\s*\{.*?background-image:\s*url\([^)]+\);/s',
    ".layer-ext-clean {\n  background-image: url('https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&q=80&w=1920');",
    $css
);

// Replace Interior (Premium Leather Sports Seat)
$css = preg_replace(
    '/\.layer-int\s*\{.*?background-image:\s*url\([^)]+\);/s',
    ".layer-int {\n  background-image: url('https://images.unsplash.com/photo-1583121274602-3e2820c69888?auto=format&fit=crop&q=80&w=1920');",
    $css
);

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);


// 2. FIX JS LOGIC IN FOOTER
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');

$js_pattern = '/\}\s*else if \(progress < 0\.8\) \{.*?\}\s*else \{/s';
$new_js_block = <<<JS
} else if (progress < 0.8) {
      // 4. Koltuk Yikama (Iceri giriyoruz)
      let local = mapRange(progress, 0.6, 0.8, 0, 1);
      
      // HIZLI ZOOM: 0 ile 0.3 arasinda zoom ve fade bitsin ki yaziyla ayni anda gorunsun.
      let fastLocal = mapRange(local, 0, 0.25, 0, 1);
      
      tfDirty = `scale(\${1.3 + fastLocal*5}) translate(-10%, 0%)`; 
      tfClean = tfDirty;
      cpClean = `circle(150% at 50% 50%)`;
      
      opInt = fastLocal;
      tfInt = `scale(\${1.3 - fastLocal*0.3})`;
      
      steps.forEach((s,i) => s.classList.toggle('active', i===3));

    } else {
JS;

$footer = preg_replace($js_pattern, $new_js_block, $footer);
file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);

echo "Red car restored and JS fixed.";
