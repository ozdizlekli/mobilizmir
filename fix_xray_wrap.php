<?php
$file = './wordpress/wp-content/themes/astra-child/front-page.php';
$content = file_get_contents($file);

// Replace the HTML structure so that xray-container is outside of wrap.
// Current:
// <div class="wrap">
//   <h2>...</h2>
//   <p>...</p>
//   <div class="xray-container"> ... </div>
// </div>

$pattern = '/(<div class="wrap">\s*<h2 class="serif">Aracınızı Santim Santim Tanıyoruz<\/h2>\s*<p>Hangi bölgede hangi teknolojik uygulamayı yaptığımızı keşfetmek için parlayan noktalara dokunun\.<\/p>)\s*(<div class="xray-container">)/s';

$replacement = "$1\n  </div>\n  $2";

// And we must remove the extra closing </div> after xray-container
$pattern_end = '/(<\/div>\s*<\/div>\s*<\/section>\s*<!-- ============ GALERİ ============ -->)/s';
$replacement_end = "  </div>\n</section>\n\n<!-- ============ GALERİ ============ -->";

$content = preg_replace($pattern, $replacement, $content);
$content = preg_replace($pattern_end, $replacement_end, $content);

file_put_contents($file, $content);
echo "Wrap fixed.\n";
