#!/bin/bash
set -e
CHECK='<svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>'

cat << HTML > ./wordpress/temp_hakkimizda.html
<p class="service-lede">2018 yılında kurulan <strong>Mobilİzmir</strong>, klasik oto yıkama ve servis kuyruklarında harcanan zamanı sıfıra indirmek vizyonuyla yola çıktı. Tam donanımlı mobil istasyonlarımız ve profesyonel ekibimizle, premium araç bakımını doğrudan bulunduğunuz adrese getiriyoruz.</p>

<div class="trust-line">$CHECK 500'den fazla %100 memnun müşteri ve 5 yıllık kesintisiz sektör tecrübesi</div>

<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Hikayemiz</h2></div>
<div class="about-split">
  <div class="ph" data-label="EKİP & ARAÇLARIMIZ"></div>
  <div>
    <h2 class="serif" style="margin-top:0;">Zamanınız en değerli hazineniz.</h2>
    <p>Araç bakımı, çoğu zaman gününüzün büyük bir bölümünü çalan, planlarınızı ertelemenize neden olan yorucu bir süreçtir. Biz Mobilİzmir olarak bu süreci tamamen tersine çevirdik. Su, elektrik veya herhangi bir altyapıya ihtiyaç duymadan, kendi enerjisini üreten mobil istasyonlarımızla size geliyoruz.</p>
    <p>Amacımız sadece arabanızı temizlemek veya onarmak değil; size ailenizle, işinizle veya hobilerinizle geçirebileceğiniz "zamanı" geri vermektir.</p>
  </div>
</div>

<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">İlkelerimiz</h2></div>
<div class="why-list">
  <div><h4>Kaliteden Ödün Vermemek</h4><p>Kullandığımız tüm ürünler global ölçekte kendini kanıtlamış, orijinal ve çevre dostu oto bakım kimyasallarıdır.</p></div>
  <div><h4>Şeffaflık</h4><p>Sürpriz fiyatlara, gereksiz işlem tekliflerine yer yoktur. İşlem öncesi ne konuşulduysa, tam olarak o uygulanır.</p></div>
  <div><h4>Sıfır Atık Hedefi</h4><p>Uygulamalarımız sırasında çevreyi kirletmeyen, az su tüketen formüller tercih ediyoruz.</p></div>
  <div><h4>Zamanında Teslimat</h4><p>Belirtilen saatte adresinizde olur, vaat edilen sürede aracınızı mükemmel kondisyonda teslim ederiz.</p></div>
</div>

<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Çalışma Sürecimiz</h2><p>Size özel, hızlı ve zahmetsiz bir deneyim.</p></div>
<div class="process">
  <div><div class="step-num serif">1</div><h4>Talep & Planlama</h4><p>İhtiyacınıza uygun hizmeti seçip WhatsApp üzerinden konum ve uygun saat belirleriz.</p></div>
  <div><div class="step-num serif">2</div><h4>Yerinde Uygulama</h4><p>Mobil ekibimiz tam donanımlı aracıyla adresinize gelir, işlemi profesyonelce gerçekleştirir.</p></div>
  <div><div class="step-num serif">3</div><h4>Teslim & Kontrol</h4><p>İşlem bitiminde detaylı kontrol raporu sunulur, onayınız alınarak anahtar teslimi yapılır.</p></div>
</div>

<div class="folio"><span class="num">04</span><div class="rule"></div><h2 class="serif">Bizden Kareler</h2></div>
<div class="mini-gallery">
  <div class="ph" data-label="MOBİL ARAÇ FİLOMUZ"></div>
  <div class="ph" data-label="UYGULAMA ANI"></div>
  <div class="ph" data-label="MUTLU MÜŞTERİ TESLİMATI"></div>
</div>
HTML

docker compose exec -T wordpress wp post update 49 ./temp_hakkimizda.html --allow-root

rm -f ./wordpress/temp_hakkimizda.html
echo "Hakkımızda sayfası güncellendi."
