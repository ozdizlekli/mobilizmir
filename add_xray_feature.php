<?php
// 1. STYLE.CSS UPDATE
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$new_css = <<<CSS

/* ============ X-RAY ARAÇ İNCELEMESİ ============ */
.xray-section {
  padding: 80px 20px;
  background: var(--ink-2);
  text-align: center;
}
.xray-section h2 {
  color: var(--gold-bright);
  font-size: clamp(2rem, 4vw, 3rem);
  margin-bottom: 15px;
}
.xray-section > p {
  color: var(--stone);
  font-size: 1.1rem;
  margin-bottom: 50px;
}
.xray-container {
  position: relative;
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;
  border-radius: var(--radius);
  overflow: hidden;
  box-shadow: 0 30px 60px rgba(0,0,0,0.6);
  border: 1px solid rgba(212,175,55,0.2);
}
.xray-img {
  display: block;
  width: 100%;
  height: auto;
}
.hotspot {
  position: absolute;
  width: 30px;
  height: 30px;
  transform: translate(-50%, -50%);
  cursor: pointer;
  z-index: 5;
}
.hotspot .core {
  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  width: 12px; height: 12px;
  background: var(--gold-bright);
  border-radius: 50%;
  box-shadow: 0 0 10px var(--gold-bright);
  transition: transform 0.3s;
}
.hotspot:hover .core, .hotspot.active .core {
  transform: translate(-50%, -50%) scale(1.5);
  background: #fff;
}
.hotspot .pulse {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  border-radius: 50%;
  border: 2px solid var(--gold);
  animation: hotspot-pulse 2s infinite cubic-bezier(0.45, 0, 0.55, 1);
}
@keyframes hotspot-pulse {
  0% { transform: scale(0.5); opacity: 1; }
  100% { transform: scale(2.5); opacity: 0; }
}

.xray-info {
  position: absolute;
  bottom: 30px;
  right: 30px;
  background: rgba(11, 11, 10, 0.7);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(212,175,55,0.4);
  padding: 25px;
  border-radius: var(--radius);
  width: 320px;
  text-align: left;
  box-shadow: 0 15px 40px rgba(0,0,0,0.8);
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.4s ease;
  pointer-events: none;
  z-index: 10;
}
.xray-info.active {
  opacity: 1;
  transform: translateY(0);
}
.xray-info h3 {
  color: var(--gold-bright);
  font-size: 1.3rem;
  margin-bottom: 12px;
  font-family: 'Montserrat', sans-serif;
}
.xray-info p {
  color: var(--cream);
  font-size: 0.95rem;
  line-height: 1.6;
}

@media(max-width: 768px) {
  .xray-info {
    position: relative;
    bottom: auto; right: auto;
    width: 100%;
    border-radius: 0;
    border-left: none; border-right: none;
    background: var(--ink);
    opacity: 1; transform: translateY(0);
    padding: 20px;
    border-top: 1px solid var(--line);
    min-height: 120px;
  }
}
CSS;
file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);


// 2. FRONT-PAGE.PHP UPDATE
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

$xray_html = <<<HTML
<!-- ============ X-RAY ARAÇ İNCELEMESİ ============ -->
<section class="xray-section">
  <div class="wrap">
    <h2 class="serif">Aracınızı Santim Santim Tanıyoruz</h2>
    <p>Hangi bölgede hangi teknolojik uygulamayı yaptığımızı keşfetmek için parlayan noktalara dokunun.</p>
    
    <div class="xray-container">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/xray-car.jpg" alt="X-Ray Car" class="xray-img">
      
      <!-- Hotspots based on wireframe visual coordinates -->
      <div class="hotspot" style="top: 48%; left: 18%;" data-title="Far Temizliği" data-desc="Zamanla sararan far yüzeylerini mikron düzeyinde temizliyor, gece sürüş güvenliğinizi fabrikasyon seviyesine çıkarıyoruz.">
        <div class="core"></div><div class="pulse"></div>
      </div>

      <div class="hotspot" style="top: 35%; left: 32%;" data-title="Pasta Cila & Seramik" data-desc="Kaportadaki kılcal çizikleri yok ediyor, boyanızı dış etkenlere karşı kalkan gibi koruyan seramik kaplama uyguluyoruz.">
        <div class="core"></div><div class="pulse"></div>
      </div>

      <div class="hotspot" style="top: 50%; left: 55%;" data-title="Boyasız Göçük Düzeltme" data-desc="Kapı ve çamurluklardaki göçükleri, aracın orijinal boyasına milimetre bile zarar vermeden vakum ve özel çubuklarla düzeltiyoruz.">
        <div class="core"></div><div class="pulse"></div>
      </div>

      <div class="hotspot" style="top: 38%; left: 62%;" data-title="Detaylı İç Kuaför" data-desc="Koltuk, tavan ve taban döşemelerindeki en inatçı lekeleri buharlı yıkama ve anti-bakteriyel solüsyonlarla arındırıyoruz.">
        <div class="core"></div><div class="pulse"></div>
      </div>

      <div class="hotspot" style="top: 55%; left: 82%;" data-title="Periyodik Bakım" data-desc="Motor ömrünü uzatan profesyonel mekanik bakım hizmeti. Kapınıza kadar gelip tüm ağır kontrolleri yerinde sağlıyoruz.">
        <div class="core"></div><div class="pulse"></div>
      </div>
      
      <!-- Info Panel -->
      <div class="xray-info">
        <h3 id="xray-title">Bölge Seçin</h3>
        <p id="xray-desc">Detayları görmek için araç üzerindeki altın noktalara tıklayabilir veya farenizi üzerlerinde gezdirebilirsiniz.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALERİ ============ -->
HTML;

// Insert X-Ray section right after the Sihirli Lazer section (which is right before GALERİ)
$front = str_replace('<!-- ============ GALERİ ============ -->', $xray_html, $front);
file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);


// 3. FOOTER.PHP UPDATE
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');
$js_code = <<<JS
  // X-RAY HOTSPOTS JS
  const hotspots = document.querySelectorAll('.hotspot');
  const xrayInfo = document.querySelector('.xray-info');
  const xrayTitle = document.getElementById('xray-title');
  const xrayDesc = document.getElementById('xray-desc');

  if (hotspots.length > 0) {
    // Show first one by default on mobile, or just let them click
    hotspots.forEach(spot => {
      const showInfo = () => {
        hotspots.forEach(s => s.classList.remove('active'));
        spot.classList.add('active');
        xrayTitle.textContent = spot.getAttribute('data-title');
        xrayDesc.textContent = spot.getAttribute('data-desc');
        xrayInfo.classList.add('active');
      };
      
      spot.addEventListener('click', showInfo);
      spot.addEventListener('mouseenter', showInfo);
    });
  }
JS;

$footer = preg_replace('/(\}\);\s*<\/script>\s*<\/body>)/s', $js_code . "\n$1", $footer);
file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);

echo "X-Ray Feature Injected!\n";
