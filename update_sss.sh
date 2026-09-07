#!/bin/bash
set -e
WA='https://wa.me/905401872003'

cat << HTML > ./wordpress/temp_sss.html
<p class="service-lede">Mobilİzmir hizmetleri, uygulamalarımız ve yerinde randevu süreçlerimiz hakkında en sık karşılaştığımız soruları ve sektör standartlarındaki yanıtları sizin için derledik.</p>

<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Mobil Hizmet ve Operasyon</h2></div>
<div class="faq">
  <div class="faq-item open">
    <button class="faq-q">Adresime geldiğinizde elektrik veya su talep ediyor musunuz?<span class="mark">+</span></button>
    <div class="faq-a"><p>Hayır, hiçbir altyapı gereksinimimiz yoktur. Mobil istasyon araçlarımız, işlemler için gereken kendi temiz su tanklarına ve enerji kaynaklarına (jeneratör/akü sistemi) sahiptir. Her işlemi tamamen kendi donanımımızla, çevreyi rahatsız etmeden gerçekleştiririz.</p></div>
  </div>
  <div class="faq-item">
    <button class="faq-q">İşlemler kapalı otoparkta yapılabiliyor mu?<span class="mark">+</span></button>
    <div class="faq-a"><p>Evet. Koltuk yıkama, boyasız göçük düzeltme (PDR) ve periyodik bakım gibi birçok işlem kapalı veya açık otopark alanlarında rahatlıkla yapılabilmektedir. Yalnızca detaylı pasta cila uygulamaları için aşırı tozlu olmayan ve iyi aydınlatılmış (veya kendi ışıklarımızı kurabileceğimiz) alanları tercih ediyoruz.</p></div>
  </div>
  <div class="faq-item">
    <button class="faq-q">Randevu almak için ne kadar önceden haber vermeliyim?<span class="mark">+</span></button>
    <div class="faq-a"><p>Operasyon yoğunluğumuza göre genellikle aynı gün veya ertesi gün için hızlıca randevu oluşturabiliyoruz. Ancak özellikle bahar ve yaz aylarında (veya hafta sonu taleplerinde) planlamanın sağlıklı olması adına 2-3 gün önceden WhatsApp hattımız üzerinden iletişime geçmenizi öneririz.</p></div>
  </div>
  <div class="faq-item">
    <button class="faq-q">Ödemeyi nasıl yapabilirim, kredi kartı geçerli mi?<span class="mark">+</span></button>
    <div class="faq-a"><p>Evet, işlemler tamamlandıktan ve siz aracı kontrol edip onay verdikten sonra ödeme alınır. Mobil pos cihazımız veya güvenli online ödeme linki aracılığıyla tüm kredi kartları ile ödeme yapabilirsiniz. Ayrıca nakit veya havale/EFT seçeneklerimiz de mevcuttur.</p></div>
  </div>
</div>

<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Hizmet Detayları</h2></div>
<div class="faq">
  <div class="faq-item">
    <button class="faq-q">Koltuk yıkama sonrasında aracımı ne zaman kullanabilirim?<span class="mark">+</span></button>
    <div class="faq-a"><p>Kullandığımız yüksek vakum güçlü ekstraksiyon cihazları suyu ve kiri neredeyse tamamen geri çeker. Koltuklarınız işlem sonrasında yalnızca hafif nemli kalır. Hava koşullarına bağlı olarak ortalama 2 ila 4 saat içinde aracınız tamamen kurur ve kullanıma hazır hale gelir.</p></div>
  </div>
  <div class="faq-item">
    <button class="faq-q">Boyasız göçük düzeltme (PDR) aracımın orijinalliğini etkiler mi?<span class="mark">+</span></button>
    <div class="faq-a"><p>Kesinlikle etkilemez. PDR tekniğinin en büyük avantajı, orijinal fabrika boyasına zarar vermeden veya boya işlemi uygulamadan sacı eski formuna kavuşturmasıdır. Bu sayede aracınızın Tramer'ine veya ekspertiz raporundaki boya/değişen kaydına işlenmez; ikinci el değeri korunur.</p></div>
  </div>
  <div class="faq-item">
    <button class="faq-q">Pasta cila ve Seramik kaplama arasındaki fark nedir, hangisini yaptırmalıyım?<span class="mark">+</span></button>
    <div class="faq-a"><p>Pasta cila bir <strong>onarım ve düzeltme</strong> işlemidir; boyadaki kılcal çizikleri, matlıkları ve oksidasyonu giderir. Seramik kaplama ise mikron kalınlığında çok güçlü bir <strong>koruma kalkanıdır</strong>. En kusursuz sonuç için; önce pasta cila ile boya pürüzsüzleştirilir, ardından seramik kaplama ile bu parlaklık yıllarca korunması için mühürlenir.</p></div>
  </div>
  <div class="faq-item">
    <button class="faq-q">Sararmış far temizliği ne kadar kalıcıdır?<span class="mark">+</span></button>
    <div class="faq-a"><p>Farlar zımpara ve polisajla tamamen saydamlaştırıldıktan sonra, özel bir UV koruma katmanı uyguluyoruz. Bu katman sayesinde fabrika çıkışı korumasına yakın bir direnç sağlanır ve sararma süreci uzun yıllar boyunca geciktirilir.</p></div>
  </div>
</div>

<div class="page-cta">
  <h3 class="serif" style="margin-bottom:20px;">Başka bir sorunuz mu var?</h3>
  <a href="$WA" class="btn solid">WhatsApp'tan Hemen Sorun</a>
</div>
HTML

docker compose exec -T wordpress wp post update 52 ./temp_sss.html --allow-root

rm -f ./wordpress/temp_sss.html
echo "SSS sayfası güncellendi."
