<?php
// 1. STYLE.CSS: Add fallback color to layer-interior and ensure transform-origin is better
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');
$css = str_replace(
    ".layer-interior {",
    ".layer-interior {\n  background-color: #0b0b0a;\n  transform-origin: center center;",
    $css
);
$css = str_replace(
    ".layer-exterior-clean {",
    ".layer-exterior-clean {\n  transform-origin: 50% 40%;", // Zoom slightly upwards towards the windshield
    $css
);
$css = str_replace(
    ".layer-exterior-dirty {",
    ".layer-exterior-dirty {\n  transform-origin: 50% 40%;",
    $css
);
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css);


// 2. FOOTER.PHP: Fix JS timing so the interior transition is fast and obvious
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');

$old_js = <<<JS
    } else if (progress >= 0.65) {
      // 65 - 100%: Massive zoom into window and crossfade to interior
      let intProg = (progress - 0.65) / 0.35; 
      clean.style.clipPath = `circle(150% at 50% 50%)`;
      
      // Dramatic zoom into the car window
      clean.style.transform = `scale(\${baseZoom + (intProg * 4)})`;
      
      interior.style.opacity = intProg;
      // Slight zoom out on interior to counter-balance the intense zoom-in
      interior.style.transform = `scale(\${1.3 - (intProg * 0.3)})`;

      steps.forEach(s => s.classList.remove('active'));
      steps[2].classList.add('active');
    }
JS;

$new_js = <<<JS
    } else if (progress >= 0.60) {
      // Start the interior transition a bit earlier and make it snappier
      let intProg = (progress - 0.60) / 0.40; 
      
      // Accelerate the visual transition so it matches the text immediately
      let quickProg = Math.min(intProg * 2.5, 1); 
      
      clean.style.clipPath = 'none';
      
      // Dramatic zoom into the windshield area
      clean.style.transform = `scale(\${baseZoom + (quickProg * 4)})`;
      dirty.style.transform = `scale(\${baseZoom + (quickProg * 4)})`;
      
      // Fade out the exterior completely to reveal interior
      clean.style.opacity = 1 - quickProg;
      dirty.style.opacity = 1 - quickProg;
      
      interior.style.opacity = quickProg;
      interior.style.transform = `scale(\${1.15 - (quickProg * 0.15)})`;

      steps.forEach(s => s.classList.remove('active'));
      steps[2].classList.add('active');
    }
JS;

$footer = str_replace($old_js, $new_js, $footer);

// Also need to adjust the middle block boundary from 0.65 to 0.60
$footer = str_replace("} else if (progress >= 0.3 && progress < 0.65) {", "} else if (progress >= 0.3 && progress < 0.60) {", $footer);
$footer = str_replace("let cleanProg = (progress - 0.3) / 0.35;", "let cleanProg = (progress - 0.3) / 0.30;", $footer);

file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);

echo "Scroll Story updated successfully.\n";
