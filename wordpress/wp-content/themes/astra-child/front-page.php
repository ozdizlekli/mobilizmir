<?php
/**
 * Custom Front Page to bypass Astra's wrappers and display exactly like the raw HTML.
 */
get_header(); ?>

<!-- ============ HERO ============ -->
<section class="home-hero-wrap">
  <div class="home-hero-bg">
    <video autoplay loop muted playsinline poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-main.jpg">
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/https_wwwbossogaragecom_b.mp4" type="video/mp4">
    </video>
  </div>
  <div class="hero-overlay"></div>
  
  <div class="hero-content-box reveal">
    <div class="hero-badge">
        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 20h20M5 20V9l4 4 3-7 3 7 4-4v11"/></svg>
        <span>PREMIUM MOBİL ARAÇ BAKIM & KORUMA</span>
    </div>
    
    <h2 class="hero-main-title">Mobilİzmir</h2>
    
    <div class="hero-cursive">Premium Mobil Bakım</div>
    
    <div class="hero-buttons">
        <a href="https://wa.me/905533459073?text=Merhaba,%20randevu%20almak%20istiyorum." class="btn primary btn-icon" target="_blank">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Bizi Arayın
        </a>
        <a href="#hizmetler" class="btn secondary btn-icon">
            Hizmetleri Görün 
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v3.153a2 2 0 01-1.105 1.789l-5.711 2.855A2 2 0 0113 16H8a2 2 0 01-2-2v-4a2 2 0 012-2h7z"/><path d="M7 10V6a3 3 0 016 0v4"/></svg>
        </a>
    </div>
  </div>
</section>

<style>
/* Proportional scale down for the Hero Configurator */
.hero-configurator { margin-top: -35px !important; }
.hero-configurator h2.serif { font-size: 1.3rem !important; }
.hero-configurator p { font-size: 0.75rem !important; }
.hero-configurator h3 { font-size: 0.8rem !important; margin-bottom: 8px !important; }
.hero-configurator .car-type-btn { flex: 0 0 70px !important; height: 55px !important; padding: 6px !important; }
.hero-configurator .car-type-btn svg { transform: scale(0.8); margin-bottom: 2px !important; }
.hero-configurator .car-type-btn span { font-size: 0.65rem !important; }
.hero-configurator .issue-btn { padding: 8px 6px !important; font-size: 0.7rem !important; }
#hero-whatsapp-btn { padding: 10px 0 !important; font-size: 13px !important; }
</style>
<style>
/* Configurator Button Styles for Hero */
.hero-configurator .conf-btn {
  background: var(--ink); border: 1px solid var(--line); border-radius: 6px;
  color: var(--stone); cursor: pointer; transition: all 0.3s ease;
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  font-family: 'Montserrat', sans-serif; font-weight: 500; user-select: none; text-align: center;
}
.hero-configurator .conf-btn:hover { border-color: var(--gold); color: var(--cream); }
.hero-configurator .conf-btn.selected {
  background: rgba(212, 175, 55, 0.15); border-color: var(--gold-bright); color: var(--gold-bright);
  box-shadow: 0 0 10px rgba(212, 175, 55, 0.2);
}
.hero-configurator .car-type-group::-webkit-scrollbar { display: none; }
.hero-configurator .car-type-btn svg { stroke: var(--stone); transition: stroke 0.3s ease; }
.hero-configurator .car-type-btn:hover svg { stroke: var(--gold-bright); }
.hero-configurator .car-type-btn.selected svg { stroke: var(--gold-bright); }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    let heroCarName = '';
    const heroIssues = new Set();
    
    const hCarBtns = document.querySelectorAll('.hero-configurator .car-type-btn');
    const hIssueBtns = document.querySelectorAll('.hero-configurator .issue-btn');
    const hWaBtn = document.getElementById('hero-whatsapp-btn');
    
    function updateHeroSummary() {
        if(heroCarName !== '' && heroIssues.size > 0) {
            hWaBtn.style.pointerEvents = 'auto';
            hWaBtn.style.opacity = '1';
        } else {
            hWaBtn.style.pointerEvents = 'none';
            hWaBtn.style.opacity = '0.5';
        }
        
        if(heroCarName !== '' && heroIssues.size > 0) {
            let issuesList = Array.from(heroIssues).join(', ');
            let msg = `Merhaba, aracım için size özel bir paket oluşturdum.\n\nAraç Tipi: ${heroCarName}\nİhtiyacım Olan Hizmetler: ${issuesList}\n\nBu işlemler için fiyat teklifi ve randevu müsaitliği öğrenebilir miyim?`;
            hWaBtn.href = `https://wa.me/905533459073?text=${encodeURIComponent(msg)}`;
        }
    }
    
    hCarBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            hCarBtns.forEach(b => b.classList.remove('selected'));
            btn.classList.add('selected');
            heroCarName = btn.getAttribute('data-name');
            updateHeroSummary();
        });
    });
    
    hIssueBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const name = btn.getAttribute('data-name');
            if(btn.classList.contains('selected')) {
                btn.classList.remove('selected');
                heroIssues.delete(name);
            } else {
                btn.classList.add('selected');
                heroIssues.add(name);
            }
            updateHeroSummary();
        });
    });
});
</script>





<!-- ============ SCROLL STORY (APPLE STYLE) ============ -->
<section class="scroll-story-wrap" id="scroll-story">
  <div class="scroll-story-sticky">
    
    <div class="story-layer layer-1"></div>
    <div class="story-layer layer-2"></div>
    <div class="story-layer layer-3"></div>
    <div class="story-layer layer-4"></div>
    <div class="story-layer layer-5"></div>

    <div class="story-ui">
      <div class="story-step" data-step="1">
        <h3 class="serif">Gözleriniz yollarda.</h3>
        <p class="reveal">Zamanla sararan ve görüşü düşüren farlar... <strong>Far Temizliği</strong> ile gece sürüşünde ilk günkü netlik ve güvenliğe dönün.</p>
      </div>
      <div class="story-step" data-step="2">
        <h3 class="serif">Kusursuz parlaklık.</h3>
        <p class="reveal">Güneş yanıkları, matlaşma ve kılcal çizikler tarihe karışıyor. <strong>Pasta Cila</strong> ile showroom parlaklığına kavuşun.</p>
      </div>
      <div class="story-step" data-step="3">
        <h3 class="serif">Orijinalliğe dokunmadan.</h3>
        <p class="reveal">Dolu hasarı veya park ezikleri canınızı sıkmasın. <strong>Boyasız Göçük Düzeltme (PDR)</strong> ile aracınızın değeri korunur.</p>
      </div>
      <div class="story-step" data-step="4">
        <h3 class="serif">Şimdi içeri giriyoruz.</h3>
        <p class="reveal">Vakumlu ekstraksiyon teknolojisi ile <strong>Koltuk Yıkama</strong>. Aracınızın içindeki tüm kir, bakteri ve kokular kapınızda yok edilir.</p>
      </div>
      <div class="story-step" data-step="5">
        <h3 class="serif">Motorunuz bize emanet.</h3>
        <p class="reveal">Sadece görünüm değil, performans da önemli. Filtre, yağ ve sıvı değişimlerini içeren <strong>Periyodik Bakım</strong> yerinde yapılır.</p>
      </div>
    </div>
    
    <div class="story-progress-bar"><div class="story-progress-fill"></div></div>
  </div>
</section>

<!-- ============ HİZMETLER ============ -->
<section id="hizmetler">
  <div class="wrap">
    <div class="folio reveal"><span class="num">01</span><div class="rule"></div><h2 class="serif">Hizmetlerimiz</h2></div>

    <div class="service-row">
      <span class="idx">01</span>
      <div class="service-main"><h3 class="serif">Koltuk Yıkama</h3><p class="reveal">Vakumlu ekipmanla derinlemesine leke ve koku giderme; kumaş, deri ve alcantara döşemeye uygun.</p></div>
      <div class="service-price"><div class="from">başlangıç</div><div class="amt serif">750 ₺</div><a href="/koltuk-yikama/">Detaylı bilgi</a></div>
    </div>
    <div class="service-row">
      <span class="idx">02</span>
      <div class="service-main"><h3 class="serif">Pasta Cila</h3><p class="reveal">Kılcal çizik giderme, boya koruma ve showroom parlaklığı — tek/çift/üç aşamalı seçenekler.</p></div>
      <div class="service-price"><div class="from">başlangıç</div><div class="amt serif">1.800 ₺</div><a href="/pasta-cila/">Detaylı bilgi</a></div>
    </div>
    <div class="service-row">
      <span class="idx">03</span>
      <div class="service-main"><h3 class="serif">Far Temizliği</h3><p class="reveal">Sararmış farları saydamlaştırma, UV koruma kaplaması ve gece görüşünü artırma.</p></div>
      <div class="service-price"><div class="from">başlangıç</div><div class="amt serif">450 ₺</div><a href="/far-temizligi/">Detaylı bilgi</a></div>
    </div>
    <div class="service-row">
      <span class="idx">04</span>
      <div class="service-main"><h3 class="serif">Boyasız Göçük Düzeltme (PDR)</h3><p class="reveal">Orijinal boyaya dokunmadan göçük onarımı; aracın değerini ve garantisini korur.</p></div>
      <div class="service-price"><div class="from">başlangıç</div><div class="amt serif">1.200 ₺</div><a href="/boyasiz-gocuk-duzeltme/">Detaylı bilgi</a></div>
    </div>
    <div class="service-row">
      <span class="idx">05</span>
      <div class="service-main"><h3 class="serif">Periyodik Bakım</h3><p class="reveal">Sıvı, filtre ve rutin kontrol paketleri — servise gitmeden yerinizde.</p></div>
      <div class="service-price"><div class="from">başlangıç</div><div class="amt serif">900 ₺</div><a href="/periyodik-bakim/">Detaylı bilgi</a></div>
    </div>
  </div>
</section>



<!-- ============ X-RAY ARAÇ İNCELEMESİ ============ -->
<style>
/* Proportional scale down for the Hero Configurator */
.hero-configurator { margin-top: -35px !important; }
.hero-configurator h2.serif { font-size: 1.3rem !important; }
.hero-configurator p { font-size: 0.75rem !important; }
.hero-configurator h3 { font-size: 0.8rem !important; margin-bottom: 8px !important; }
.hero-configurator .car-type-btn { flex: 0 0 70px !important; height: 55px !important; padding: 6px !important; }
.hero-configurator .car-type-btn svg { transform: scale(0.8); margin-bottom: 2px !important; }
.hero-configurator .car-type-btn span { font-size: 0.65rem !important; }
.hero-configurator .issue-btn { padding: 8px 6px !important; font-size: 0.7rem !important; }
#hero-whatsapp-btn { padding: 10px 0 !important; font-size: 13px !important; }
</style>
<style>
.xray-crop-wrapper {
    width: 100%;
    aspect-ratio: 2.2 / 1;
    overflow: hidden;
    position: relative;
}
@media(max-width: 768px) {
    .xray-crop-wrapper {
        aspect-ratio: 16 / 9;
    }
}
</style>
<section class="xray-section" style="padding: 0; background: var(--ink); overflow: hidden; position: relative;">
  
  <div style="position: relative; width: 100%; text-align: center; padding-top: 60px; padding-bottom: 20px; z-index: 10; background: var(--ink);">
    <div class="folio reveal" style="margin-bottom: 0 !important; gap: 10px !important;"><span class="num">03</span><h2 class="serif">Aracınızı Santim Santim Tanıyoruz</h2><p class="reveal">Hangi bölgede hangi teknolojik uygulamayı yaptığımızı keşfetmek için parlayan noktalara dokunun.</p></div>
  </div>

  <div class="xray-crop-wrapper">
    <div class="xray-container" style="width: 100%; max-width: 100%; margin: 0; border: none; border-radius: 0; box-shadow: none; position: relative;">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/xray-car.jpg" alt="X-Ray Car" class="xray-img" style="width: 100%; height: auto; display: block;">
      
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
      
    </div>
    
    <!-- Info Panel placed outside container so it sticks to the visible cropped bottom -->
    <div class="xray-info">
      <h3 id="xray-title">Bölge Seçin</h3>
      <p id="xray-desc">Detayları görmek için araç üzerindeki altın noktalara tıklayabilir veya farenizi üzerlerinde gezdirebilirsiniz.</p>
    </div>
  </div>
</section>

<!-- ============ GALERİ ============ -->
<section id="galeri" style="padding-top: 100px;">
  <div class="wrap" style="max-width: 1000px; margin: 0 auto;">
    <div class="folio reveal"><span class="num">03</span><div class="rule"></div><h2 class="serif">Uygulama Galerisi</h2><p class="reveal">Hizmet kalitemizi, hiçbir filtre olmadan saf ve şeffaf karelerle keşfedin.</p></div>
    
    <?php 
    $images = [
        ['src' => 'gallery-kumas.jpg', 'label' => 'Kumaş Detayı'],
        ['src' => 'gallery-deri.jpg', 'label' => 'Deri Temizliği'],
        ['src' => 'gallery-tavan.jpg', 'label' => 'Tavan Ferahlığı'],
        ['src' => 'pasta-ayna.jpg', 'label' => 'Ayna Parlaklığı'],
        ['src' => 'pasta-su.jpg', 'label' => 'Su İtici Etki'],
        ['src' => 'pasta-metalik.jpg', 'label' => 'Kusursuz Boya'],
        ['src' => 'far-kristal.jpg', 'label' => 'Kristal Far'],
        ['src' => 'far-isik.jpg', 'label' => 'Güçlü Işık'],
        ['src' => 'far-yuzey.jpg', 'label' => 'Pürüzsüz Yüzey'],
        ['src' => 'pdr-orijinal.jpg', 'label' => 'Orijinal Koruma'],
        ['src' => 'pdr-yansima.jpg', 'label' => 'PDR Işık Testi'],
        ['src' => 'pdr-keskin.jpg', 'label' => 'Sıfır Hata'],
        ['src' => 'bakim-yag.jpg', 'label' => 'Premium Yağ'],
        ['src' => 'bakim-parca.jpg', 'label' => 'Orijinal Parça'],
        ['src' => 'bakim-dijital.jpg', 'label' => 'Arıza Tespiti']
    ];
    shuffle($images);
    ?>

    <div class="detail-main" id="homeMain" style="width: 100%; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/<?php echo $images[0]['src']; ?>'); background-size: cover; background-position: center; border-radius: 8px; margin-top: 40px; margin-bottom: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); transition: background-image 0.4s ease;"></div>
    
    <div class="detail-thumbs" style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px;">
      <?php foreach($images as $index => $img): ?>
        <div class="h-thumb <?php echo $index === 0 ? 'active' : ''; ?>" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/<?php echo $img['src']; ?>" style="aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/<?php echo $img['src']; ?>'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid <?php echo $index === 0 ? 'var(--gold-bright)' : 'transparent'; ?>; opacity: <?php echo $index === 0 ? '1' : '0.5'; ?>; transition: all 0.3s; position: relative; overflow: hidden;">
            <span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 3px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 0.5px; text-transform: uppercase; pointer-events: none; max-width: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $img['label']; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const hThumbs = document.querySelectorAll('.h-thumb');
    const hMain = document.getElementById('homeMain');
    if(!hMain || hThumbs.length === 0) return;
    
    hThumbs.forEach(t => {
        t.addEventListener('click', () => {
            hThumbs.forEach(th => {
                th.style.borderColor = 'transparent';
                th.style.opacity = '0.5';
            });
            t.style.borderColor = 'var(--gold-bright)';
            t.style.opacity = '1';
            hMain.style.backgroundImage = `url('${t.getAttribute('data-img')}')`;
        });
    });
});
</script>

<!-- ============ SÜREÇ ============ -->
<section class="alt">
  <div class="wrap">
    <div class="folio reveal"><span class="num">04</span><div class="rule"></div><h2 class="serif">Nasıl çalışıyoruz</h2></div>
    <div class="process">
      <div><div class="step-num serif">1</div><h4>WhatsApp'tan yazın</h4><p class="reveal">Aracınızın modelini ve talebiniz olan hizmeti iletin, size uygun paketi ve fiyatı anında öğrenin.</p></div>
      <div><div class="step-num serif">2</div><h4>Adres ve saat belirleyin</h4><p class="reveal">Ev, iş yeri veya dilediğiniz nokta — size en uygun gün ve saati birlikte planlayalım.</p></div>
      <div><div class="step-num serif">3</div><h4>Ekibimiz gelsin</h4><p class="reveal">Tam donanımlı aracımızla adresinize gelir, işlemi tamamlar ve öncesi/sonrası fotoğraflayıp size göndeririz.</p></div>
    </div>
  </div>
</section>

<!-- ============ NEDEN BİZ ============ -->
<section class="light">
  <div class="wrap">
    <div class="folio reveal"><span class="num">05</span><div class="rule"></div><h2 class="serif">Neden Mobilİzmir</h2></div>
    <div class="why-list">
      <div><h4>Sigortalı hizmet</h4><p class="reveal">Uygulama sırasında oluşabilecek olası hasarlara karşı sorumluluk sigortamız bulunur.</p></div>
      <div><h4>Orijinal ürünler</h4><p class="reveal">Menzerna, Koch Chemie, Gyeon ve 3M gibi sektörün önde gelen markalarını kullanıyoruz.</p></div>
      <div><h4>Sertifikalı ekip</h4><p class="reveal">Detailing ve PDR alanında eğitim almış, deneyimli teknisyenlerle çalışıyoruz.</p></div>
      <div><h4>Şeffaf fiyatlandırma</h4><p class="reveal">Randevudan önce net fiyat veriyoruz; sürpriz ek ücret uygulamıyoruz.</p></div>
      <div><h4>Aynı gün randevu</h4><p class="reveal">Uygunluk durumuna göre aynı gün veya ertesi gün hizmet verebiliyoruz.</p></div>
      <div><h4>Memnuniyet garantisi</h4><p class="reveal">Sonuçtan memnun kalmazsanız, ücretsiz olarak tekrar uygularız.</p></div>
    </div>
  </div>
</section>

<!-- ============ YORUMLAR ============ -->
<section class="alt">
  <div class="wrap">
    <div class="folio reveal"><span class="num">06</span><div class="rule"></div><h2 class="serif">Müşterilerimiz anlatıyor</h2></div>
    <div class="reviews">
      <div class="review-feat">
        <q class="serif">Aracımı evime kadar gelip yıkadılar, gerçekten çok memnun kaldım — zamanımı boşa harcamadım.</q>
        <cite>Ahmet Y. — Bornova, Google Yorumu</cite>
      </div>
      <div class="review-list">
        <div><div><p class="reveal">PDR işlemi kusursuzdu, boyaya dokunulmadı bile.</p><cite>Elif K. — Karşıyaka</cite></div><span class="stars">★★★★★</span></div>
        <div><div><p class="reveal">Pasta cila sonrası araç showroom gibi oldu.</p><cite>Mert D. — Alsancak</cite></div><span class="stars">★★★★★</span></div>
        <div><div><p class="reveal">Randevu saatine tam uydular, çok profesyoneller.</p><cite>Selin A. — Bayraklı</cite></div><span class="stars">★★★★★</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ HAKKIMIZDA ============ -->
<section id="hakkimizda" class="light">
  <div class="wrap" style="max-width: 1000px; margin: 0 auto;">
    <div class="folio reveal">
      <span class="num">07</span>
      <h2 class="serif">İzmir'de araç sahiplerinin zamanına değer veriyoruz</h2>
      <p class="reveal">2018'den bu yana sanayi ve serviste bekleme derdine son veriyoruz. Tam donanımlı mobil ekibimiz, evinize veya iş yerinize gelerek premium kalitede bakım sunuyor. Bugüne kadar 500'den fazla araca hizmet verdik.</p>
    </div>
    <div style="text-align: center; margin-top: 20px;">
      <a href="/hakkimizda/" class="btn solid">Hikayemizi okuyun</a>
    </div>
  </div>
</section>

<!-- ============ SSS ============ -->
<section class="dark">
  <div class="wrap" style="max-width:760px;">
    <div class="folio reveal"><span class="num">08</span><div class="rule"></div><h2 class="serif">Sıkça sorulanlar</h2></div>
    <div class="faq">
      <div class="faq-item open">
        <button class="faq-q">Mobil hizmet nasıl çalışıyor?<span class="mark">+</span></button>
        <div class="faq-a"><p class="reveal">WhatsApp üzerinden randevu oluşturduğunuzda, belirlediğiniz gün ve saatte donanımlı aracımızla adresinize geliyoruz.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">PDR aracımın orijinalliğini bozar mı?<span class="mark">+</span></button>
        <div class="faq-a"><p class="reveal">Hayır, PDR işlemi orijinal boyaya dokunmadan yapıldığı için aracınızın değerini korur.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Randevumu nasıl değiştirebilirim?<span class="mark">+</span></button>
        <div class="faq-a"><p class="reveal">Randevunuzdan en az 24 saat önce WhatsApp hattımızdan bize ulaşarak değişiklik yapabilirsiniz.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Ödemeyi nasıl yapabilirim?<span class="mark">+</span></button>
        <div class="faq-a"><p class="reveal">Nakit, kredi kartı (mobil POS) veya havale ile işlem sonunda ödeme alabilirsiniz.</p></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
