<?php
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');

// We need to replace the entire window.addEventListener('scroll', () => { ... }); block
$start_str = "window.addEventListener('scroll', () => {";
$end_str = "});\n});\n</script>";

$start_pos = strpos($footer, $start_str);
$end_pos = strpos($footer, $end_str, $start_pos);

if ($start_pos !== false && $end_pos !== false) {
    $new_js = <<<JS
window.addEventListener('scroll', () => {
    const rect = wrap.getBoundingClientRect();
    const maxScroll = rect.height - window.innerHeight;
    let progress = -rect.top / maxScroll;
    
    if (progress < 0) progress = 0;
    if (progress > 1) progress = 1;

    fill.style.width = (progress * 100) + '%';

    // TEXT LOGIC: Text switches precisely when the visual transition completes.
    steps.forEach(s => s.classList.remove('active'));
    if (progress < 0.35) {
      if(progress > 0.02) steps[0].classList.add('active');
    } else if (progress >= 0.35 && progress < 0.75) {
      steps[1].classList.add('active');
    } else if (progress >= 0.75) {
      steps[2].classList.add('active');
    }

    // VISUAL LOGIC:
    // 1. Wipe Effect (Dirty -> Clean): Happens between 0.15 and 0.35
    if (progress < 0.15) {
       clean.style.clipPath = `circle(0% at 50% 50%)`;
       clean.style.opacity = 0;
    } else if (progress >= 0.15 && progress < 0.35) {
       let cleanProg = (progress - 0.15) / 0.20;
       clean.style.opacity = 1;
       clean.style.clipPath = `circle(\${cleanProg * 150}% at 50% 50%)`;
    } else {
       clean.style.opacity = 1;
       clean.style.clipPath = `circle(150% at 50% 50%)`;
    }

    // 2. Zoom Effect (Clean -> Interior): Happens between 0.55 and 0.75
    if (progress < 0.55) {
       let baseZoom = 1 + (progress * 0.3);
       clean.style.transform = `scale(\${baseZoom})`;
       dirty.style.transform = `scale(\${baseZoom})`;
       
       interior.style.opacity = 0;
    } else if (progress >= 0.55 && progress < 0.75) {
       let intProg = (progress - 0.55) / 0.20; 
       
       let zoom = 1 + (0.55 * 0.3) + (intProg * 3);
       clean.style.transform = `scale(\${zoom})`;
       dirty.style.transform = `scale(\${zoom})`;
       
       clean.style.opacity = 1 - intProg;
       dirty.style.opacity = 1 - intProg;
       
       interior.style.opacity = intProg;
       interior.style.transform = `scale(\${1.2 - (intProg * 0.2)})`;
    } else {
       // progress >= 0.75 : Transition completely finished. Only interior is visible.
       clean.style.opacity = 0;
       dirty.style.opacity = 0;
       interior.style.opacity = 1;
       interior.style.transform = `scale(1.0)`;
    }
JS;

    $footer = substr($footer, 0, $start_pos) . $new_js . "\n  " . substr($footer, $end_pos);
    file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);
    echo "JS completely replaced.\n";
} else {
    echo "Could not find JS block.\n";
}
