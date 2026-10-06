<?php
/**
 * Custom Front Page to bypass Astra's wrappers and display exactly like the raw HTML.
 */
get_header(); ?>

<!-- ============ INTRO SPLASH ============ -->
<div id="site-intro" style="position: fixed; inset: 0; z-index: 9999; background: #050505; display: flex; align-items: center; justify-content: center; transition: opacity 1.5s ease-in-out;">
    <video id="intro-video" autoplay muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/parcaaraba.mp4" type="video/mp4">
    </video>
    <button id="skip-intro" style="position: absolute; bottom: 40px; right: 40px; background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.3); padding: 8px 16px; border-radius: 20px; font-size: 0.8rem; cursor: pointer; backdrop-filter: blur(5px); transition: all 0.3s; z-index: 10000; letter-spacing: 1px;">Geç &rarr;</button>
</div>



<!-- ============ HERO ============ -->
<section class="home-hero-wrap prime-hero">
  <div class="home-hero-bg">
    <video autoplay loop muted playsinline poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-main.jpg">
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/https_wwwbossogaragecom_b.mp4" type="video/mp4">
    </video>
  </div>
  <div class="hero-overlay-dark"></div>

  <!-- SOCIALS LEFT -->
  <div class="hero-social-left">
     <div class="hs-icons">
         <a href="#"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
         <a href="#"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
     </div>
     <div class="hs-line"></div>
     <div class="hs-text">BİZİ TAKİP EDİN</div>
  </div>

  <!-- STATS RIGHT -->
  <div class="hero-stats-right">
     <div class="h-stat">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="1.5"><path d="M6 3h12l4 6-10 12L2 9l4-6z"/></svg>
        <div class="h-num">5+</div>
        <div class="h-label">YILLIK DENEYİM</div>
     </div>
     <div class="h-stat">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        <div class="h-num">1000+</div>
        <div class="h-label">ARAÇ TESLİMATI</div>
     </div>
     <div class="h-stat">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <div class="h-num">5.0</div>
        <div class="h-label">MÜŞTERİ PUANI</div>
     </div>
  </div>

  <!-- CENTER CONTENT -->
  <div class="hero-center-content">
     <div class="hc-subtitle">PREMİUM ARAÇ BAKIMI. KUSURSUZ SONUÇLAR.</div>
     <h1 class="hc-title-white">DETAYLI</h1>
     <h1 class="hc-title-gold">TEMİZLİK.</h1>
     <p class="hc-desc">Aracınızın en iyi halini ortaya çıkaran profesyonel detaylı temizlik ve koruma hizmetleri.</p>
     <div class="hc-buttons">
        <a href="#hizmetler" class="hc-btn-gold">PAKETLERİ İNCELE &rarr;</a>
        <a href="https://wa.me/905533459073" class="hc-btn-outline">RANDEVU AL 
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 8px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        </a>
     </div>
  </div>

  <!-- BOTTOM PANEL -->
  <div class="hero-bottom-panel">
     <div class="hbp-col">
        <div class="hbp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="1.5"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"></path></svg></div>
        <div class="hbp-text">
           <h4>DIŞ DETAY</h4>
           <p>Derinlemesine temizlik, demir tozu arındırma ve boya koruma.</p>
        </div>
     </div>
     <div class="hbp-col">
        <div class="hbp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="1.5"><path d="M5 18h14v-4a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v4z"/><path d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4"/></svg></div>
        <div class="hbp-text">
           <h4>İÇ DETAY</h4>
           <p>İlk günkü ferahlık için detaylı iç temizlik.</p>
        </div>
     </div>
     <div class="hbp-col">
        <div class="hbp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
        <div class="hbp-text">
           <h4>SERAMİK KAPLAMA</h4>
           <p>Eşsiz parlaklık ile uzun ömürlü koruma.</p>
        </div>
     </div>
     <div class="hbp-col">
        <div class="hbp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle><line x1="12" y1="2" x2="12" y2="9"></line><line x1="12" y1="15" x2="12" y2="22"></line><line x1="22" y1="12" x2="15" y2="12"></line><line x1="9" y1="12" x2="2" y2="12"></line></svg></div>
        <div class="hbp-text">
           <h4>JANT & LASTİK BAKIMI</h4>
           <p>Yenileme, koruma ve göz alıcı görünüm.</p>
        </div>
     </div>
  </div>
</section>


</section>










<!-- ============ HİZMETLER ============ -->
<section id="hizmetler" class="services-showcase">
  <div class="wrap services-wrap">
    <div class="services-heading">
      <div>
        <span class="section-kicker">02 — UYGULAMALARIMIZ</span>
        <h2>Aracınız için doğru uzmanlık.</h2>
      </div>
      <p>Kapınızda sunduğumuz pratik çözümlerden, kapsamlı atölye uygulamalarına kadar aracınızın ihtiyacına uygun profesyonel hizmetler.</p>
    </div>

    <div class="service-filter" role="tablist" aria-label="Hizmet türleri">
      <button class="service-filter-btn active" type="button" data-service-filter="all" role="tab" aria-selected="true">Tüm Hizmetler <span>11</span></button>
      <button class="service-filter-btn" type="button" data-service-filter="mobile" role="tab" aria-selected="false">Mobil Hizmetler <span>6</span></button>
      <button class="service-filter-btn" type="button" data-service-filter="workshop" role="tab" aria-selected="false">Atölye Hizmetleri <span>5</span></button>
    </div>

    <?php
    $services = [
      ['title'=>'Boyasız Göçük Düzeltme', 'desc'=>'Orijinal boyaya dokunmadan göçük onarımı; aracın değerini ve garantisini korur.', 'image'=>'service-pdr.jpg', 'url'=>'/boyasiz-gocuk-duzeltme/', 'type'=>'mobile', 'label'=>'MOBİL HİZMET'],
      ['title'=>'Pasta Cila', 'desc'=>'Kılcal çizik giderme, boya koruma ve showroom parlaklığı için aşamalı uygulama.', 'image'=>'service-pastacila.jpg', 'url'=>'/pasta-cila/', 'type'=>'mobile', 'label'=>'MOBİL HİZMET'],
      ['title'=>'Araç İç & Dış Yıkama', 'desc'=>'Mobil aracımızla kapınızda profesyonel iç ve dış detaylı yıkama.', 'image'=>'new-arac-yikama.jpg', 'url'=>'/arac-yikama/', 'type'=>'mobile', 'label'=>'MOBİL HİZMET'],
      ['title'=>'Koltuk Yıkama', 'desc'=>'Kumaş, deri ve alcantara döşemeler için derinlemesine leke ve koku giderme.', 'image'=>'service-koltuk.jpg', 'url'=>'/koltuk-yikama/', 'type'=>'mobile', 'label'=>'MOBİL HİZMET'],
      ['title'=>'Periyodik Bakım', 'desc'=>'Sıvı, filtre ve rutin kontroller; servise gitmeden, yerinizde.', 'image'=>'service-motor.jpg', 'url'=>'/periyodik-bakim/', 'type'=>'mobile', 'label'=>'MOBİL HİZMET'],
      ['title'=>'Kaporta Boya', 'desc'=>'Orijinal renk koduna uygun bilgisayarlı karışım ile fırınlı boya uygulaması.', 'image'=>'new-kaporta-boya.jpg', 'url'=>'/kaporta-boya/', 'type'=>'workshop', 'label'=>'ATÖLYE HİZMETİ'],
      ['title'=>'Kaporta Tamir', 'desc'=>'Büyük hasarlar için donanımlı garajımızda profesyonel kaporta düzeltme ve onarım.', 'image'=>'new-kaporta-tamir.png', 'url'=>'/kaporta-tamir/', 'type'=>'workshop', 'label'=>'ATÖLYE HİZMETİ'],
      ['title'=>'Far Temizliği', 'desc'=>'Sararmış farlarda saydamlık, UV koruma ve daha güçlü gece görüşü.', 'image'=>'service-far.jpg', 'url'=>'/far-temizligi/', 'type'=>'mobile', 'label'=>'MOBİL HİZMET'],
      ['title'=>'Çelik Rötuş', 'desc'=>'Taş izleri ve derin çizikler için hassas, mikron düzeyinde rötuş işlemi.', 'image'=>'new-celik-rotus.png', 'url'=>'/celik-rotus/', 'type'=>'workshop', 'label'=>'ATÖLYE HİZMETİ'],
      ['title'=>'Cam Filmi', 'desc'=>'Isı ve UV korumalı, çizilmeye dirençli cam filmi; farklı ton seçenekleriyle.', 'image'=>'new-cam-filmi.jpg', 'url'=>'/cam-filmi/', 'type'=>'workshop', 'label'=>'ATÖLYE HİZMETİ'],
      ['title'=>'PPF Kaplama', 'desc'=>'Boyayı çizik, taş izi ve dış etkenlere karşı koruyan şeffaf koruma filmi.', 'image'=>'new-ppf-kaplama.jpg', 'url'=>'/ppf-kaplama/', 'type'=>'workshop', 'label'=>'ATÖLYE HİZMETİ'],
    ];
    ?>
    <div class="service-grid">
      <?php foreach ($services as $index => $service): ?>
        <article class="service-card" data-service-type="<?php echo esc_attr($service['type']); ?>">
          <a class="service-card-image" href="<?php echo esc_url($service['url']); ?>" aria-label="<?php echo esc_attr($service['title']); ?> hakkında detaylı bilgi">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/' . $service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>">
            <span class="service-card-shade"></span>
            <span class="service-card-number"><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></span>
            <span class="service-card-label"><?php echo esc_html($service['label']); ?></span>
          </a>
          <div class="service-card-body">
            <h3><a href="<?php echo esc_url($service['url']); ?>"><?php echo esc_html($service['title']); ?></a></h3>
            <p><?php echo esc_html($service['desc']); ?></p>
            <a href="<?php echo esc_url($service['url']); ?>" class="service-card-link">Detaylı bilgi <span aria-hidden="true">↗</span></a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <p class="services-note"><span></span> Mobil hizmetler adresinizde planlanır. Atölye uygulamaları için uygunluk ve randevu bilgisi alabilirsiniz.</p>
  </div>
</section>


<!-- ============ X-RAY ARAÇ İNCELEMESİ ============ -->


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
