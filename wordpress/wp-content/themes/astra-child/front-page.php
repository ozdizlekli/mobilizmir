<?php
/**
 * Custom Front Page to bypass Astra's wrappers and display exactly like the raw HTML.
 */
get_header(); ?>

<!-- ============ HERO ============ -->
<section class="hero" style="position: relative; background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-main.jpg') center/cover; padding: 60px 0 80px 0; display: flex; align-items: center;">
  
  <!-- Koyu katman (Yazıların okunması için) -->
  <div style="position: absolute; inset: 0; background: rgba(11,11,10,0.75); z-index: 1;"></div>

  <div class="wrap" style="position: relative; z-index: 2; display: flex; justify-content: space-between; align-items: flex-start; width: 100%; gap: 40px; margin-top: 10px; padding-top: 0;">
    
    <!-- SOL TARAF: Mevcut Karşılama Ekranı (Yazılar) -->
    <div class="hero-copy" style="flex: 1 1 50%; max-width: 600px; padding-top: 0; margin-top: 0;">
      <div class="kicker" style="color: var(--gold-bright); font-size: 11.5px; margin-bottom: 12px; letter-spacing: 1px;">İzmir'in yerinde araç bakım servisi</div>
      <h1 class="serif" style="color: #fff; margin-bottom: 10px; font-size: clamp(1.8rem, 3vw, 2.8rem);">Aracınız neredeyse, ekibimiz oraya gelir.</h1>
      <p class="lede" style="color: #ccc; margin-bottom: 20px; font-size: 13.5px; max-width: 50ch; line-height: 1.5;">Evinizde ya da iş yerinizde; koltuk yıkamadan boyasız göçük düzeltmeye kadar, tam donanımlı mobil ekibimizle showroom kalitesinde bakım.</p>
      <div class="hero-actions" style="margin-bottom: 20px;">
        <a href="https://wa.me/905533459073?text=Merhaba%2C%20anasayfan%C4%B1z%20%C3%BCzerinden%20ula%C5%9F%C4%B1yorum.%20Arac%C4%B1m%20i%C3%A7in%20genel%20bir%20randevu%20talep%20etmek%20istiyorum." class="btn solid">Randevu Talep Et</a>
        <a href="#hizmetler" class="btn">Hizmetleri Gör</a>
      </div>
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
<style>.hero-stats b { font-size: 1.6rem !important; } .hero-stats span.lbl { font-size: 9px !important; letter-spacing: 0.5px !important; margin-top: 5px !important; } .hero-actions .btn { font-size: 12.5px !important; padding: 10px 20px !important; }</style>
      <div class="hero-stats">
        <div><b><span class="counter-val" data-target="500">0</span>+</b><span class="lbl">Memnun Müşteri</span></div>
        <div><b><span class="counter-val" data-target="5">0</span></b><span class="lbl">Yıllık Tecrübe</span></div>
        <div><b><span class="counter-val" data-target="12">0</span></b><span class="lbl">İlçede Hizmet</span></div>
        <div><b>%<span class="counter-val" data-target="98">0</span></b><span class="lbl">Memnuniyet</span></div>
      </div>
    
<div class="area-strip" style="margin-top: 25px; position: absolute; left: calc(50% - 50vw); width: 100vw; z-index: 0; background: rgba(11,11,10,0.5); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border-top: 1px solid rgba(212,175,55,0.2); border-bottom: 1px solid rgba(212,175,55,0.2); padding: 6px 0; overflow: hidden;">
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
<style>.area-track span { font-size: 10px !important; padding: 0 18px !important; text-transform: uppercase; letter-spacing: 1px; }</style>
  <div class="area-track">
    <span><b>Bornova</b></span><span><b>Karşıyaka</b></span><span><b>Alsancak</b></span><span><b>Bayraklı</b></span><span><b>Buca</b></span><span><b>Çeşme</b></span><span><b>Karabağlar</b></span><span><b>Gaziemir</b></span>
    <span><b>Bornova</b></span><span><b>Karşıyaka</b></span><span><b>Alsancak</b></span><span><b>Bayraklı</b></span><span><b>Buca</b></span><span><b>Çeşme</b></span><span><b>Karabağlar</b></span><span><b>Gaziemir</b></span>
  </div>
</div>
</div>

    <!-- SAĞ TARAF: Konfigüratör -->
    <div class="hero-configurator-container" style="flex: 1 1 50%; display: flex; justify-content: flex-end;">
      <div class="hero-configurator" style="background: rgba(18,18,18,0.6); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); padding: 20px; border-radius: 12px; border: 1px solid rgba(212,175,55,0.3); box-shadow: 0 20px 50px rgba(0,0,0,0.7); width: 100%; max-width: 400px; display: flex; flex-direction: column; gap: 12px;">
        
        <div>
          <h2 class="serif" style="color: var(--gold-bright); font-size: 1.6rem; margin-bottom: 5px;">Paketinizi Oluşturun</h2>
          <p style="color: var(--stone); font-size: 0.9rem; line-height: 1.4; margin: 0;">Araç tipini ve ihtiyacınız olan hizmetleri seçerek hızlıca fiyat teklifi alın.</p>
        </div>

        <div>
          <h3 style="color: var(--cream); font-family: 'Montserrat', sans-serif; font-size: 0.95rem; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 1px;">1. Araç Tipi</h3>
          <div class="conf-group car-type-group" style="display: flex; overflow-x: auto; gap: 10px; padding-bottom: 10px; scrollbar-width: none;">
            
            <div class="conf-btn car-type-btn" data-name="Motosiklet" style="flex: 0 0 90px; padding: 10px; height: 65px;">
              <svg width="40" height="20" viewBox="0 0 100 50" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 5px;"><circle cx="25" cy="35" r="9"></circle><circle cx="75" cy="35" r="9"></circle><path d="M 25,35 L 40,15 L 60,15 L 75,35 M 40,15 L 35,5 L 45,5 M 60,15 L 70,10"></path></svg>
              <span style="font-size: 0.75rem;">Motosiklet</span>
            </div>

            <div class="conf-btn car-type-btn" data-name="Hatchback" style="flex: 0 0 90px; padding: 10px; height: 65px;">
              <svg width="40" height="20" viewBox="0 0 100 50" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 5px;"><path d="M 10,40 L 10,25 L 30,15 L 70,15 L 90,25 L 90,40 Z"></path><circle cx="25" cy="40" r="8"></circle><circle cx="75" cy="40" r="8"></circle></svg>
              <span style="font-size: 0.75rem;">Hatchback</span>
            </div>

            <div class="conf-btn car-type-btn" data-name="Spor / Coupe" style="flex: 0 0 90px; padding: 10px; height: 65px;">
              <svg width="40" height="20" viewBox="0 0 100 50" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 5px;"><path d="M 5,40 L 15,25 L 45,15 L 75,15 L 95,30 L 95,40 Z"></path><circle cx="25" cy="40" r="8"></circle><circle cx="75" cy="40" r="8"></circle></svg>
              <span style="font-size: 0.75rem;">Coupe</span>
            </div>

            <div class="conf-btn car-type-btn" data-name="Sedan" style="flex: 0 0 90px; padding: 10px; height: 65px;">
              <svg width="40" height="20" viewBox="0 0 100 50" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 5px;"><path d="M 5,40 L 5,25 L 25,25 L 45,10 L 75,10 L 95,25 L 95,40 Z"></path><circle cx="20" cy="40" r="8"></circle><circle cx="80" cy="40" r="8"></circle></svg>
              <span style="font-size: 0.75rem;">Sedan</span>
            </div>

            <div class="conf-btn car-type-btn" data-name="SUV / Arazi" style="flex: 0 0 90px; padding: 10px; height: 65px;">
              <svg width="40" height="20" viewBox="0 0 100 50" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 5px;"><path d="M 5,40 L 5,20 L 25,20 L 40,5 L 85,5 L 95,20 L 95,40 Z"></path><circle cx="20" cy="40" r="8"></circle><circle cx="80" cy="40" r="8"></circle></svg>
              <span style="font-size: 0.75rem;">SUV</span>
            </div>

            <div class="conf-btn car-type-btn" data-name="Pick-up" style="flex: 0 0 90px; padding: 10px; height: 65px;">
              <svg width="40" height="20" viewBox="0 0 100 50" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 5px;"><path d="M 5,40 L 5,25 L 25,25 L 35,10 L 60,10 L 60,25 L 95,25 L 95,40 Z"></path><circle cx="20" cy="40" r="8"></circle><circle cx="80" cy="40" r="8"></circle></svg>
              <span style="font-size: 0.75rem;">Pick-up</span>
            </div>

            <div class="conf-btn car-type-btn" data-name="VIP Minibüs" style="flex: 0 0 90px; padding: 10px; height: 65px;">
              <svg width="40" height="20" viewBox="0 0 100 50" fill="none" stroke="currentColor" stroke-width="2" style="margin-bottom: 5px;"><path d="M 5,40 L 5,15 L 25,5 L 95,5 L 95,40 Z"></path><circle cx="25" cy="40" r="8"></circle><circle cx="75" cy="40" r="8"></circle></svg>
              <span style="font-size: 0.75rem;">Minibüs</span>
            </div>
          </div>
        </div>

        <div>
          <h3 style="color: var(--cream); font-family: 'Montserrat', sans-serif; font-size: 0.95rem; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 1px;">2. Hizmetler</h3>
          <div class="conf-group issues-group" style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
            <div class="conf-btn issue-btn" data-name="Koltuk Yıkama & İç Detay" style="padding: 12px 10px; font-size: 0.8rem; height: auto;">Koltuk & İç Detay</div>
            <div class="conf-btn issue-btn" data-name="Pasta Cila & Boya Koruma" style="padding: 12px 10px; font-size: 0.8rem; height: auto;">Pasta Cila & Boya</div>
            <div class="conf-btn issue-btn" data-name="Far Temizliği" style="padding: 12px 10px; font-size: 0.8rem; height: auto;">Far Temizliği</div>
            <div class="conf-btn issue-btn" data-name="Boyasız Göçük Düzeltme" style="padding: 12px 10px; font-size: 0.8rem; height: auto;">Göçük Düzeltme</div>
            <div class="conf-btn issue-btn" data-name="Periyodik Bakım" style="padding: 12px 10px; font-size: 0.8rem; height: auto; grid-column: span 2;">Periyodik Bakım</div>
          </div>
        </div>

        <div style="margin-top: 5px;">
          <a href="#" id="hero-whatsapp-btn" class="btn" style="width: 100%; display: flex; align-items: center; justify-content: center; text-align: center; background: #25D366; color: #fff; border-color: #25D366; font-weight: bold; pointer-events: none; opacity: 0.5; padding: 15px 0;">WhatsApp'tan Teklif Al</a>
        </div>

      </div>
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
        <p>Zamanla sararan ve görüşü düşüren farlar... <strong>Far Temizliği</strong> ile gece sürüşünde ilk günkü netlik ve güvenliğe dönün.</p>
      </div>
      <div class="story-step" data-step="2">
        <h3 class="serif">Kusursuz parlaklık.</h3>
        <p>Güneş yanıkları, matlaşma ve kılcal çizikler tarihe karışıyor. <strong>Pasta Cila</strong> ile showroom parlaklığına kavuşun.</p>
      </div>
      <div class="story-step" data-step="3">
        <h3 class="serif">Orijinalliğe dokunmadan.</h3>
        <p>Dolu hasarı veya park ezikleri canınızı sıkmasın. <strong>Boyasız Göçük Düzeltme (PDR)</strong> ile aracınızın değeri korunur.</p>
      </div>
      <div class="story-step" data-step="4">
        <h3 class="serif">Şimdi içeri giriyoruz.</h3>
        <p>Vakumlu ekstraksiyon teknolojisi ile <strong>Koltuk Yıkama</strong>. Aracınızın içindeki tüm kir, bakteri ve kokular kapınızda yok edilir.</p>
      </div>
      <div class="story-step" data-step="5">
        <h3 class="serif">Motorunuz bize emanet.</h3>
        <p>Sadece görünüm değil, performans da önemli. Filtre, yağ ve sıvı değişimlerini içeren <strong>Periyodik Bakım</strong> yerinde yapılır.</p>
      </div>
    </div>
    
    <div class="story-progress-bar"><div class="story-progress-fill"></div></div>
  </div>
</section>

<!-- ============ HİZMETLER ============ -->
<section id="hizmetler">
  <div class="wrap">
    <div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Hizmetlerimiz</h2></div>

    <div class="service-row">
      <span class="idx">01</span>
      <div class="service-main"><h3 class="serif">Koltuk Yıkama</h3><p>Vakumlu ekipmanla derinlemesine leke ve koku giderme; kumaş, deri ve alcantara döşemeye uygun.</p></div>
      <div class="service-price"><div class="from">başlangıç</div><div class="amt serif">750 ₺</div><a href="/koltuk-yikama/">Detaylı bilgi</a></div>
    </div>
    <div class="service-row">
      <span class="idx">02</span>
      <div class="service-main"><h3 class="serif">Pasta Cila</h3><p>Kılcal çizik giderme, boya koruma ve showroom parlaklığı — tek/çift/üç aşamalı seçenekler.</p></div>
      <div class="service-price"><div class="from">başlangıç</div><div class="amt serif">1.800 ₺</div><a href="/pasta-cila/">Detaylı bilgi</a></div>
    </div>
    <div class="service-row">
      <span class="idx">03</span>
      <div class="service-main"><h3 class="serif">Far Temizliği</h3><p>Sararmış farları saydamlaştırma, UV koruma kaplaması ve gece görüşünü artırma.</p></div>
      <div class="service-price"><div class="from">başlangıç</div><div class="amt serif">450 ₺</div><a href="/far-temizligi/">Detaylı bilgi</a></div>
    </div>
    <div class="service-row">
      <span class="idx">04</span>
      <div class="service-main"><h3 class="serif">Boyasız Göçük Düzeltme (PDR)</h3><p>Orijinal boyaya dokunmadan göçük onarımı; aracın değerini ve garantisini korur.</p></div>
      <div class="service-price"><div class="from">başlangıç</div><div class="amt serif">1.200 ₺</div><a href="/boyasiz-gocuk-duzeltme/">Detaylı bilgi</a></div>
    </div>
    <div class="service-row">
      <span class="idx">05</span>
      <div class="service-main"><h3 class="serif">Periyodik Bakım</h3><p>Sıvı, filtre ve rutin kontrol paketleri — servise gitmeden yerinizde.</p></div>
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
    <div class="folio" style="margin-bottom: 0 !important; gap: 10px !important;"><span class="num">02</span><h2 class="serif">Aracınızı Santim Santim Tanıyoruz</h2><p>Hangi bölgede hangi teknolojik uygulamayı yaptığımızı keşfetmek için parlayan noktalara dokunun.</p></div>
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
    <div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Uygulama Galerisi</h2><p>Hizmet kalitemizi, hiçbir filtre olmadan saf ve şeffaf karelerle keşfedin.</p></div>
    
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
    <div class="folio"><span class="num">04</span><div class="rule"></div><h2 class="serif">Nasıl çalışıyoruz</h2></div>
    <div class="process">
      <div><div class="step-num serif">1</div><h4>WhatsApp'tan yazın</h4><p>Aracınızın modelini ve talebiniz olan hizmeti iletin, size uygun paketi ve fiyatı anında öğrenin.</p></div>
      <div><div class="step-num serif">2</div><h4>Adres ve saat belirleyin</h4><p>Ev, iş yeri veya dilediğiniz nokta — size en uygun gün ve saati birlikte planlayalım.</p></div>
      <div><div class="step-num serif">3</div><h4>Ekibimiz gelsin</h4><p>Tam donanımlı aracımızla adresinize gelir, işlemi tamamlar ve öncesi/sonrası fotoğraflayıp size göndeririz.</p></div>
    </div>
  </div>
</section>

<!-- ============ NEDEN BİZ ============ -->
<section>
  <div class="wrap">
    <div class="folio"><span class="num">05</span><div class="rule"></div><h2 class="serif">Neden Mobilİzmir</h2></div>
    <div class="why-list">
      <div><h4>Sigortalı hizmet</h4><p>Uygulama sırasında oluşabilecek olası hasarlara karşı sorumluluk sigortamız bulunur.</p></div>
      <div><h4>Orijinal ürünler</h4><p>Menzerna, Koch Chemie, Gyeon ve 3M gibi sektörün önde gelen markalarını kullanıyoruz.</p></div>
      <div><h4>Sertifikalı ekip</h4><p>Detailing ve PDR alanında eğitim almış, deneyimli teknisyenlerle çalışıyoruz.</p></div>
      <div><h4>Şeffaf fiyatlandırma</h4><p>Randevudan önce net fiyat veriyoruz; sürpriz ek ücret uygulamıyoruz.</p></div>
      <div><h4>Aynı gün randevu</h4><p>Uygunluk durumuna göre aynı gün veya ertesi gün hizmet verebiliyoruz.</p></div>
      <div><h4>Memnuniyet garantisi</h4><p>Sonuçtan memnun kalmazsanız, ücretsiz olarak tekrar uygularız.</p></div>
    </div>
  </div>
</section>

<!-- ============ YORUMLAR ============ -->
<section class="alt">
  <div class="wrap">
    <div class="folio"><span class="num">06</span><div class="rule"></div><h2 class="serif">Müşterilerimiz anlatıyor</h2></div>
    <div class="reviews">
      <div class="review-feat">
        <q class="serif">Aracımı evime kadar gelip yıkadılar, gerçekten çok memnun kaldım — zamanımı boşa harcamadım.</q>
        <cite>Ahmet Y. — Bornova, Google Yorumu</cite>
      </div>
      <div class="review-list">
        <div><div><p>PDR işlemi kusursuzdu, boyaya dokunulmadı bile.</p><cite>Elif K. — Karşıyaka</cite></div><span class="stars">★★★★★</span></div>
        <div><div><p>Pasta cila sonrası araç showroom gibi oldu.</p><cite>Mert D. — Alsancak</cite></div><span class="stars">★★★★★</span></div>
        <div><div><p>Randevu saatine tam uydular, çok profesyoneller.</p><cite>Selin A. — Bayraklı</cite></div><span class="stars">★★★★★</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ HAKKIMIZDA ============ -->
<section id="hakkimizda">
  <div class="wrap" style="max-width: 1000px; margin: 0 auto;">
    <div class="folio">
      <span class="num">07</span>
      <h2 class="serif">İzmir'de araç sahiplerinin zamanına değer veriyoruz</h2>
      <p>2018'den bu yana sanayi ve serviste bekleme derdine son veriyoruz. Tam donanımlı mobil ekibimiz, evinize veya iş yerinize gelerek premium kalitede bakım sunuyor. Bugüne kadar 500'den fazla araca hizmet verdik.</p>
    </div>
    <div style="text-align: center; margin-top: 20px;">
      <a href="/hakkimizda/" class="btn solid">Hikayemizi okuyun</a>
    </div>
  </div>
</section>

<!-- ============ SSS ============ -->
<section>
  <div class="wrap" style="max-width:760px;">
    <div class="folio"><span class="num">08</span><div class="rule"></div><h2 class="serif">Sıkça sorulanlar</h2></div>
    <div class="faq">
      <div class="faq-item open">
        <button class="faq-q">Mobil hizmet nasıl çalışıyor?<span class="mark">+</span></button>
        <div class="faq-a"><p>WhatsApp üzerinden randevu oluşturduğunuzda, belirlediğiniz gün ve saatte donanımlı aracımızla adresinize geliyoruz.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">PDR aracımın orijinalliğini bozar mı?<span class="mark">+</span></button>
        <div class="faq-a"><p>Hayır, PDR işlemi orijinal boyaya dokunmadan yapıldığı için aracınızın değerini korur.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Randevumu nasıl değiştirebilirim?<span class="mark">+</span></button>
        <div class="faq-a"><p>Randevunuzdan en az 24 saat önce WhatsApp hattımızdan bize ulaşarak değişiklik yapabilirsiniz.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Ödemeyi nasıl yapabilirim?<span class="mark">+</span></button>
        <div class="faq-a"><p>Nakit, kredi kartı (mobil POS) veya havale ile işlem sonunda ödeme alabilirsiniz.</p></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
