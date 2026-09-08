<?php
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

$pattern = '/<div class="gallery-header".*?(<!-- ============ SÜREÇ ============ -->)/s';
$replacement = <<<HTML
    <div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Öncesi &amp; sonrası</h2><p>Son uygulamalarımızdan gerçek örnekler — tüm galeri için ayrı sayfamıza bakın.</p></div>
    <div class="gallery-grid">
      <div class="g-item wide tall">
        <div class="ba-slider" style="--pos:50%">
          <div class="ph" data-label="SONRASI (Temiz)"></div>
          <div class="ba-before-wrap"><div class="ph" data-label="ÖNCESİ (Kirli/Çizik)" style="background:linear-gradient(160deg,#141310 0%,#0b0b0a 60%);"></div></div>
          <input type="range" min="0" max="100" value="50" class="ba-range" aria-label="Öncesi ve Sonrası Karşılaştırma">
          <div class="ba-slider-handle"></div>
        </div>
      </div>
      <div class="g-item"><div class="ph" data-label="KOLTUK YIKAMA"></div></div>
      <div class="g-item"><div class="ph" data-label="FAR TEMİZLİĞİ"></div></div>
      <div class="g-item wide"><div class="ph" data-label="PDR ÖNCESİ / SONRASI"></div><span class="after-tag">Sonrası</span></div>
      <div class="g-item"><div class="ph" data-label="İÇ DETAYLI TEMİZLİK"></div></div>
      <div class="g-item"><div class="ph" data-label="SERAMİK KAPLAMA"></div></div>
      <div class="g-item wide"><div class="ph" data-label="MOTOR TEMİZLİĞİ"></div></div>
    </div>
  </div>
</section>

$1
HTML;

$front = preg_replace($pattern, $replacement, $front);
file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);
echo "Homepage restored!\n";
