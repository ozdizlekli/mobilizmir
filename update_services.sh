#!/bin/bash
set -e
CHECK='<svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>'
WA='https://wa.me/905401872003'

# 01 — KOLTUK YIKAMA (post ID: 19)
cat << HTML > ./wordpress/temp_koltuk.html
<p class="service-lede">Aracınızın koltuklarına zamanla işleyen ter, toz, alerjen maddeler ve inatçı lekeler yalnızca kötü koku yapmakla kalmaz; iç mekan hijyenini de doğrudan etkiler. <strong>Mobilİzmir</strong>, vakumlu ekstraksiyon teknolojisiyle kumaş, deri ve alcantara döşemenin derinlerine inerek aracınızın içini adeta sıfırlar — hepsi bulunduğunuz adreste.</p>
<div class="trust-line">$CHECK Vakumlu ekstraksiyon ile derinlemesine leke ve koku giderme hedefi</div>
<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Süreç nasıl işliyor?</h2><p>Randevudan teslimata kadar üç net adım.</p></div>
<div class="process">
<div><div class="step-num serif">1</div><h4>Ön inceleme &amp; leke tespiti</h4><p>Döşeme tipini (kumaş, deri, alcantara) ve leke türünü tespit ederek uygun kimyasal ve yöntemi belirleriz.</p></div>
<div><div class="step-num serif">2</div><h4>Vakumlu ekstraksiyon yıkama</h4><p>Yüksek basınçlı ekstraksiyon cihazıyla kir, bakteri ve alerjenleri dokunun içinden çekip alırız.</p></div>
<div><div class="step-num serif">3</div><h4>Kurutma &amp; koku bariyeri</h4><p>Hızlı kurutma ve antibakteriyel koku bariyeri uygulamasıyla aracınız aynı gün kullanıma hazır olur.</p></div>
</div>
<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Neden koltuk yıkama?</h2></div>
<div class="why-list">
<div><h4>Derin Temizlik</h4><p>Kir ve bakterileri kökünden temizler, kalıcı kokuları yok eder.</p></div>
<div><h4>Sağlıklı Kabin Havası</h4><p>Alerjenleri ortadan kaldırarak özellikle çocuklu ailelerde daha ferah bir hava sağlar.</p></div>
<div><h4>Her Döşemeye Uygun</h4><p>Kumaş, deri ve alcantara yüzeyler için ayrı ayrı formüle edilmiş yöntemler.</p></div>
<div><h4>Hızlı Kuruma</h4><p>Vakumlu ekipman sayesinde araç birkaç saat içinde tekrar kullanıma hazır.</p></div>
</div>
<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Paketler</h2><p>Araç tipine ve döşeme durumuna göre fiyatlar değişebilir; kesin fiyatı WhatsApp'tan anında öğrenebilirsiniz.</p></div>
<div class="mini-price-grid">
<div class="mini-price-card"><div class="tag">Başlangıç</div><h4>Tekli Koltuk</h4><div class="amt">750 ₺</div><p>Tek sıra koltuk yıkama, leke çıkarma ve kurutma.</p><a href="$WA" class="btn">Randevu Al</a></div>
<div class="mini-price-card featured"><div class="tag">En çok tercih edilen</div><h4>Tam Kabin</h4><div class="amt">1.450 ₺</div><p>Tüm koltuklar, tavan döşemesi ve kapı panelleri dahil.</p><a href="$WA" class="btn solid">Randevu Al</a></div>
<div class="mini-price-card"><div class="tag">Premium</div><h4>Deri Bakım + Yıkama</h4><div class="amt">1.950 ₺</div><p>Deri döşemelerde yıkama sonrası besleyici deri kremi uygulaması dahil.</p><a href="$WA" class="btn">Randevu Al</a></div>
</div>
<div class="folio"><span class="num">04</span><div class="rule"></div><h2 class="serif">Öncesi &amp; sonrası</h2></div>
<div class="mini-gallery">
<div class="ba-slider" style="--pos:50%"><div class="ph" data-label="SONRASI (Temiz Koltuk)"></div><div class="ba-before-wrap"><div class="ph" data-label="ÖNCESİ (Lekeli Koltuk)" style="background:linear-gradient(160deg,#141310 0%,#0b0b0a 60%);"></div></div><input type="range" min="0" max="100" value="50" class="ba-range" aria-label="Öncesi ve Sonrası Karşılaştırma"><div class="ba-slider-handle"></div></div>
<div class="ph" data-label="KUMAŞ DÖŞEME"></div>
<div class="ph" data-label="DERİ DÖŞEME"></div>
<div class="ph" data-label="TAVAN DÖŞEMESİ"></div>
</div>
<div class="folio"><span class="num">05</span><div class="rule"></div><h2 class="serif">Sıkça sorulanlar</h2></div>
<div class="faq">
<div class="faq-item open"><button class="faq-q">Koltuk yıkama sonrası araç ne kadar sürede kuruyor?<span class="mark">+</span></button><div class="faq-a"><p>Vakumlu ekstraksiyon sayesinde nem oranı düşük kalır; hava koşullarına bağlı olarak ortalama 2-4 saat içinde koltuklar kullanıma hazır hale gelir.</p></div></div>
<div class="faq-item"><button class="faq-q">Deri koltuklarda hangi yöntem uygulanıyor?<span class="mark">+</span></button><div class="faq-a"><p>Deriye özel pH dengeli temizleyiciler kullanılır, ardından deriyi çatlamaya karşı besleyen koruyucu krem uygulanır.</p></div></div>
<div class="faq-item"><button class="faq-q">Kalıcı lekeler tamamen çıkar mı?<span class="mark">+</span></button><div class="faq-a"><p>Çoğu organik leke ve koku tamamen giderilir; eski ve derin nüfuz etmiş lekelerde iyileşme oranı yüzeye ve lekenin yaşına göre değişebilir.</p></div></div>
<div class="faq-item"><button class="faq-q">Randevu için ne kadar önceden yazmalıyım?<span class="mark">+</span></button><div class="faq-a"><p>Uygunluk durumuna göre aynı gün veya ertesi gün hizmet verebiliyoruz; WhatsApp'tan yazmanız yeterli.</p></div></div>
</div>
HTML
docker compose exec -T wordpress wp post update 19 ./temp_koltuk.html --allow-root

# 02 — PASTA CİLA (post ID: 20)
cat << HTML > ./wordpress/temp_pasta.html
<p class="service-lede">Aracınızın boyası zamanla güneş, toz ve dış etkenler yüzünden matlaşır, kılcal çizikler birikir. <strong>Mobilİzmir</strong> profesyonel pasta cila uygulamasıyla solmuş yüzeyleri onarır, boyanıza fabrika çıkışı parlaklığını geri kazandırır ve uzun süreli bir koruma katmanı bırakır.</p>
<div class="trust-line">$CHECK Uygulama sonrası 12 aya kadar boya koruma katmanı</div>
<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Süreç nasıl işliyor?</h2><p>Boya yüzeyine zarar vermeyen, aşamalı bir uygulama.</p></div>
<div class="process">
<div><div class="step-num serif">1</div><h4>Yüzey dekontaminasyonu</h4><p>Kil bar ve özel şampuanla boyaya yapışmış kir, katran ve demir tozu kalıntıları temizlenir.</p></div>
<div><div class="step-num serif">2</div><h4>Aşamalı pasta cila</h4><p>Boya kalınlığına göre kaba, orta ve ince aşamalı polisaj uygulanarak çizikler ve matlık giderilir.</p></div>
<div><div class="step-num serif">3</div><h4>Koruma katmanı</h4><p>Seçilen pakete göre wax veya sealant uygulanarak parlaklık uzun süre korunur.</p></div>
</div>
<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Neden pasta cila?</h2></div>
<div class="why-list">
<div><h4>Kılcal Çizik Giderme</h4><p>İnce çizikler ve matlaşma büyük ölçüde ortadan kalkar.</p></div>
<div><h4>Showroom Parlaklığı</h4><p>Boyanız fabrika çıkışı görünümüne yeniden kavuşur.</p></div>
<div><h4>Boya Değerini Koruma</h4><p>Düzenli bakım, aracın ikinci el değerini korumaya yardımcı olur.</p></div>
<div><h4>UV Koruma</h4><p>Koruma katmanı, güneşin zararlı UV ışınlarına karşı ekstra bir kalkan oluşturur.</p></div>
</div>
<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Paketler</h2><p>Boya durumuna ve araç boyutuna göre süre ve fiyat değişebilir.</p></div>
<div class="mini-price-grid">
<div class="mini-price-card"><div class="tag">Başlangıç</div><h4>Tek Kat Pasta Cila</h4><div class="amt">1.800 ₺</div><p>Tek aşamalı polisaj ile genel parlaklık ve hafif çizik giderme.</p><a href="$WA" class="btn">Randevu Al</a></div>
<div class="mini-price-card featured"><div class="tag">En çok tercih edilen</div><h4>Çift Kat + Koruma</h4><div class="amt">2.600 ₺</div><p>İki aşamalı polisaj ve sealant koruma katmanı dahil.</p><a href="$WA" class="btn solid">Randevu Al</a></div>
<div class="mini-price-card"><div class="tag">Premium</div><h4>3 Aşama + Seramik</h4><div class="amt">4.200 ₺</div><p>Üç aşamalı detaylı polisaj ve uzun ömürlü seramik kaplama dahil.</p><a href="$WA" class="btn">Randevu Al</a></div>
</div>
<div class="folio"><span class="num">04</span><div class="rule"></div><h2 class="serif">Öncesi &amp; sonrası</h2></div>
<div class="mini-gallery">
<div class="ba-slider" style="--pos:50%"><div class="ph" data-label="SONRASI (Parlak Boya)"></div><div class="ba-before-wrap"><div class="ph" data-label="ÖNCESİ (Mat/Çizikli)" style="background:linear-gradient(160deg,#141310 0%,#0b0b0a 60%);"></div></div><input type="range" min="0" max="100" value="50" class="ba-range" aria-label="Öncesi ve Sonrası Karşılaştırma"><div class="ba-slider-handle"></div></div>
<div class="ph" data-label="KAPUT DETAYI"></div>
<div class="ph" data-label="KAPI PANELİ"></div>
<div class="ph" data-label="TAVAN PARLAKLIĞI"></div>
</div>
<div class="folio"><span class="num">05</span><div class="rule"></div><h2 class="serif">Sıkça sorulanlar</h2></div>
<div class="faq">
<div class="faq-item open"><button class="faq-q">Pasta cila boyaya zarar verir mi?<span class="mark">+</span></button><div class="faq-a"><p>Doğru uygulandığında hayır; polisaj kademeleri boya kalınlığı ölçülerek ve uygun pedlerle yapılır, boyaya zarar vermez.</p></div></div>
<div class="faq-item"><button class="faq-q">Pasta cila kaç ayda bir yapılmalı?<span class="mark">+</span></button><div class="faq-a"><p>Kullanım ve park koşullarına bağlı olarak genellikle 6-12 ayda bir tazeleme önerilir; açık havada park edenlerde bu süre kısalabilir.</p></div></div>
<div class="faq-item"><button class="faq-q">Derin çizikler tamamen kaybolur mu?<span class="mark">+</span></button><div class="faq-a"><p>Kılcal ve orta seviye çizikler büyük ölçüde giderilir; boyaya kadar inen derin çiziklerde tam giderim mümkün olmayabilir, en yakın sonuç hedeflenir.</p></div></div>
<div class="faq-item"><button class="faq-q">Seramik kaplama pasta cilanın yerini tutar mı?<span class="mark">+</span></button><div class="faq-a"><p>Hayır, seramik kaplama bir koruma katmanıdır; en iyi sonuç için önce pasta cila ile yüzey hazırlığı yapılması önerilir.</p></div></div>
</div>
HTML
docker compose exec -T wordpress wp post update 20 ./temp_pasta.html --allow-root

# 03 — FAR TEMİZLİĞİ (post ID: 21)
cat << HTML > ./wordpress/temp_far.html
<p class="service-lede">Zamanla UV ışınları ve dış etkenler nedeniyle farların polikarbonat yüzeyi sararır, matlaşır ve gece görüşünüzü ciddi biçimde azaltır. <strong>Mobilİzmir</strong> far temizliği hizmetiyle sararmış farları saydamlaştırır, UV koruma kaplaması uygular ve gece sürüşünüzü güvenli hale getirir.</p>
<div class="trust-line">$CHECK Ortalama olarak belirgin şekilde daha net gece görüşü</div>
<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Süreç nasıl işliyor?</h2><p>Kademeli aşındırma ve koruma odaklı bir uygulama.</p></div>
<div class="process">
<div><div class="step-num serif">1</div><h4>Kademeli zımparalama</h4><p>İnceden kalına doğru özel gritlerle sararmış yüzeydeki oksitlenmiş tabaka kaldırılır.</p></div>
<div><div class="step-num serif">2</div><h4>Polisaj ile netleştirme</h4><p>Polisaj makinesiyle yüzey berraklaştırılır, ince çizikler giderilir.</p></div>
<div><div class="step-num serif">3</div><h4>UV koruma kaplaması</h4><p>Şeffaf UV koruma kaplaması uygulanarak yeniden sararma süreci geciktirilir.</p></div>
</div>
<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Neden far temizliği?</h2></div>
<div class="why-list">
<div><h4>Gece Görüşünü Artırır</h4><p>Saydamlaşan far yüzeyi ışığın daha net iletilmesini sağlar.</p></div>
<div><h4>UV Sararmayı Giderir</h4><p>Yıllar içinde biriken sarı/kahverengi tabaka tamamen kaldırılır.</p></div>
<div><h4>Muayeneye Uygun Netlik</h4><p>Araç muayenesinde far netliği kriterlerini karşılamaya yardımcı olur.</p></div>
<div><h4>Far Değiştirmeden Çözüm</h4><p>Pahalı far değişimi yerine kesirli bir maliyetle yenilenmiş görünüm.</p></div>
</div>
<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Paketler</h2><p>Sararma seviyesine göre işlem süresi ve fiyat değişebilir.</p></div>
<div class="mini-price-grid">
<div class="mini-price-card"><div class="tag">Başlangıç</div><h4>Tekli Far Temizliği</h4><div class="amt">450 ₺</div><p>İki far için standart zımparalama ve polisaj işlemi.</p><a href="$WA" class="btn">Randevu Al</a></div>
<div class="mini-price-card featured"><div class="tag">En çok tercih edilen</div><h4>Temizlik + UV Koruma</h4><div class="amt">650 ₺</div><p>Standart işleme ek olarak UV koruma kaplaması uygulanır.</p><a href="$WA" class="btn solid">Randevu Al</a></div>
<div class="mini-price-card"><div class="tag">Premium</div><h4>Ağır Sararma Restorasyonu</h4><div class="amt">850 ₺</div><p>Çok ileri seviyede sararmış farlar için ek kademeli işlem.</p><a href="$WA" class="btn">Randevu Al</a></div>
</div>
<div class="folio"><span class="num">04</span><div class="rule"></div><h2 class="serif">Öncesi &amp; sonrası</h2></div>
<div class="mini-gallery">
<div class="ba-slider" style="--pos:50%"><div class="ph" data-label="SONRASI (Saydam Far)"></div><div class="ba-before-wrap"><div class="ph" data-label="ÖNCESİ (Sararmış Far)" style="background:linear-gradient(160deg,#141310 0%,#0b0b0a 60%);"></div></div><input type="range" min="0" max="100" value="50" class="ba-range" aria-label="Öncesi ve Sonrası Karşılaştırma"><div class="ba-slider-handle"></div></div>
<div class="ph" data-label="SOL FAR DETAYI"></div>
<div class="ph" data-label="GECE GÖRÜNÜMÜ"></div>
<div class="ph" data-label="UV KAPLAMA SONRASI"></div>
</div>
<div class="folio"><span class="num">05</span><div class="rule"></div><h2 class="serif">Sıkça sorulanlar</h2></div>
<div class="faq">
<div class="faq-item open"><button class="faq-q">Far temizliği kalıcı mı?<span class="mark">+</span></button><div class="faq-a"><p>UV koruma kaplaması sayesinde sararma süreci belirgin şekilde yavaşlar; ancak farlar zamanla yeniden UV'ye maruz kaldığından periyodik bakım önerilir.</p></div></div>
<div class="faq-item"><button class="faq-q">İşlem ne kadar sürer?<span class="mark">+</span></button><div class="faq-a"><p>Sararma seviyesine bağlı olarak işlem ortalama 45-90 dakika sürer.</p></div></div>
<div class="faq-item"><button class="faq-q">Far değiştirmek yerine bu işlem yeterli mi?<span class="mark">+</span></button><div class="faq-a"><p>Çoğu durumda evet; far gövdesinde çatlak veya kırık yoksa temizlik ve koruma kaplaması far değişimine göre çok daha ekonomik bir çözümdür.</p></div></div>
</div>
HTML
docker compose exec -T wordpress wp post update 21 ./temp_far.html --allow-root

# 04 — BOYASIZ GÖÇÜK DÜZELTME / PDR (post ID: 22)
cat << HTML > ./wordpress/temp_gocuk.html
<p class="service-lede">Kapı vuruğu, dolu hasarı veya ufak çarpma göçükleri, boyaya dokunmadan onarılabilir. <strong>Mobilİzmir</strong> ekibi, PDR (Paintless Dent Repair) teknolojisiyle orijinal fabrika boyasına dokunmadan göçükleri düzeltir; aracınızın değerini ve garantisini korur.</p>
<div class="trust-line">$CHECK Orijinal boyaya dokunulmadan yerinde onarım</div>
<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Süreç nasıl işliyor?</h2><p>Hassas ve boyaya zarar vermeyen bir teknik.</p></div>
<div class="process">
<div><div class="step-num serif">1</div><h4>Hasar analizi</h4><p>Göçüğün boyutu, derinliği ve erişim açısı özel ışıklandırma ile detaylı incelenir.</p></div>
<div><div class="step-num serif">2</div><h4>Kademeli baskı tekniği</h4><p>Özel aparatlarla saç teline dokunulmadan, sac yavaşça ve kademeli olarak eski formuna döndürülür.</p></div>
<div><div class="step-num serif">3</div><h4>Yüzey kontrolü &amp; son rötuş</h4><p>Farklı açılardan yüzey kontrolü yapılır, gerekirse mikro rötuşlarla son hâli verilir.</p></div>
</div>
<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Neden PDR?</h2></div>
<div class="why-list">
<div><h4>Orijinal Boya Korunur</h4><p>Boya sökülmediği için aracın orijinallik durumu bozulmaz.</p></div>
<div><h4>Aracın Değerini Korur</h4><p>Boyalı/değişen kaporta kaydı oluşmadığı için ikinci el değeri etkilenmez.</p></div>
<div><h4>Hızlı Sonuç</h4><p>Boya kurutma süreci olmadığı için çoğu göçük aynı gün tamamlanır.</p></div>
<div><h4>Ekonomik Çözüm</h4><p>Boyalı onarıma göre çok daha uygun maliyetli bir alternatiftir.</p></div>
</div>
<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Paketler</h2><p>Nihai fiyat göçüğün konumu, boyutu ve erişim zorluğuna göre belirlenir; fotoğraf üzerinden ön fiyat verebiliriz.</p></div>
<div class="mini-price-grid">
<div class="mini-price-card"><div class="tag">Başlangıç</div><h4>Küçük Göçük</h4><div class="amt">1.200 ₺</div><p>Kartvizit boyutuna kadar tekli göçükler.</p><a href="$WA" class="btn">Randevu Al</a></div>
<div class="mini-price-card featured"><div class="tag">En çok tercih edilen</div><h4>Orta Göçük</h4><div class="amt">1.800 ₺</div><p>Avuç içi boyutuna kadar, orta zorlukta erişim gerektiren göçükler.</p><a href="$WA" class="btn solid">Randevu Al</a></div>
<div class="mini-price-card"><div class="tag">Özel Teklif</div><h4>Dolu Hasarı Paketi</h4><div class="amt">Fiyat Teklifi</div><p>Çoklu göçük noktası içeren dolu hasarları için fotoğraf üzerinden özel fiyatlandırma.</p><a href="$WA" class="btn">Teklif Al</a></div>
</div>
<div class="folio"><span class="num">04</span><div class="rule"></div><h2 class="serif">Öncesi &amp; sonrası</h2></div>
<div class="mini-gallery">
<div class="ba-slider" style="--pos:50%"><div class="ph" data-label="SONRASI (Düz Yüzey)"></div><div class="ba-before-wrap"><div class="ph" data-label="ÖNCESİ (Göçük)" style="background:linear-gradient(160deg,#141310 0%,#0b0b0a 60%);"></div></div><input type="range" min="0" max="100" value="50" class="ba-range" aria-label="Öncesi ve Sonrası Karşılaştırma"><div class="ba-slider-handle"></div></div>
<div class="ph" data-label="KAPI GÖÇÜĞÜ"></div>
<div class="ph" data-label="DOLU HASARI"></div>
<div class="ph" data-label="UYGULAMA ANI"></div>
</div>
<div class="folio"><span class="num">05</span><div class="rule"></div><h2 class="serif">Sıkça sorulanlar</h2></div>
<div class="faq">
<div class="faq-item open"><button class="faq-q">PDR aracımın orijinalliğini bozar mı?<span class="mark">+</span></button><div class="faq-a"><p>Hayır, PDR işlemi orijinal boyaya dokunmadan yapıldığı için aracınızın orijinal boya kaydı ve değeri korunur.</p></div></div>
<div class="faq-item"><button class="faq-q">Her göçük PDR ile düzeltilebilir mi?<span class="mark">+</span></button><div class="faq-a"><p>Boya çatlağı olmayan, keskin kenarlı olmayan çoğu göçük PDR'a uygundur; erişim ve göçük yapısı incelendikten sonra kesin bilgi verilir.</p></div></div>
<div class="faq-item"><button class="faq-q">İşlem sırasında sigorta/kasko kaydı oluşur mu?<span class="mark">+</span></button><div class="faq-a"><p>Bu, sigorta şirketinizin poliçe koşullarına bağlıdır; PDR öncesinde talep ederseniz kasko dosyası açma sürecinde de size yol gösterebiliriz.</p></div></div>
</div>
HTML
docker compose exec -T wordpress wp post update 22 ./temp_gocuk.html --allow-root

# 05 — PERİYODİK BAKIM (post ID: 23)
cat << HTML > ./wordpress/temp_periyodik.html
<p class="service-lede">Yağ, filtre ve rutin kontrol bakımlarınızı yapmak için servis kuyruğunda beklemenize gerek yok. <strong>Mobilİzmir</strong> ekibi, gerekli tüm ekipman ve orijinal ürünlerle adresinize gelir; aracınızın periyodik bakımını yerinizde, şeffaf bir raporla tamamlar.</p>
<div class="trust-line">$CHECK Randevudan itibaren ortalama 45 dakikada tamamlanan uygulama</div>
<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Süreç nasıl işliyor?</h2><p>Servise gitmeden, adresinizde tam bakım.</p></div>
<div class="process">
<div><div class="step-num serif">1</div><h4>Sıvı &amp; filtre kontrolü</h4><p>Motor yağı, hava/polen filtresi ve diğer sıvı seviyeleri detaylı olarak kontrol edilir.</p></div>
<div><div class="step-num serif">2</div><h4>Değişim &amp; yenileme</h4><p>Gerekli parçalar orijinal veya OEM eşdeğeri ürünlerle adresinizde değiştirilir.</p></div>
<div><div class="step-num serif">3</div><h4>Kontrol raporu teslimi</h4><p>Yapılan işlemler ve kullanılan ürünler fotoğraflı bir bakım raporuyla size iletilir.</p></div>
</div>
<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Neden periyodik bakım?</h2></div>
<div class="why-list">
<div><h4>Servise Gitmeden Bakım</h4><p>Kuyrukta beklemeden, zamanınızı kaybetmeden bakımınızı yaptırın.</p></div>
<div><h4>Motor Ömrünü Uzatır</h4><p>Düzenli yağ ve filtre değişimi motorun performansını ve ömrünü korur.</p></div>
<div><h4>Şeffaf Fiyatlandırma</h4><p>Kullanılan parça ve işçilik randevu öncesinde netleştirilir, sürpriz ücret yoktur.</p></div>
<div><h4>Garantili Orijinal Ürünler</h4><p>Yalnızca güvenilir marka yağ ve filtreler kullanılır.</p></div>
</div>
<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Paketler</h2><p>Araç motor hacmine ve yağ tipine göre fiyat değişebilir.</p></div>
<div class="mini-price-grid">
<div class="mini-price-card"><div class="tag">Başlangıç</div><h4>Standart Bakım</h4><div class="amt">900 ₺</div><p>Motor yağı ve yağ filtresi değişimi.</p><a href="$WA" class="btn">Randevu Al</a></div>
<div class="mini-price-card featured"><div class="tag">En çok tercih edilen</div><h4>Kapsamlı Bakım</h4><div class="amt">1.350 ₺</div><p>Standart bakıma ek olarak hava ve polen filtresi değişimi dahil.</p><a href="$WA" class="btn solid">Randevu Al</a></div>
<div class="mini-price-card"><div class="tag">Premium</div><h4>Tam Kontrol Paketi</h4><div class="amt">1.750 ₺</div><p>Kapsamlı bakıma ek olarak fren ve lastik kontrol raporu dahil.</p><a href="$WA" class="btn">Randevu Al</a></div>
</div>
<div class="folio"><span class="num">04</span><div class="rule"></div><h2 class="serif">Uygulamadan kareler</h2></div>
<div class="mini-gallery">
<div class="ph" data-label="YAĞ DEĞİŞİMİ"></div>
<div class="ph" data-label="FİLTRE KONTROLÜ"></div>
<div class="ph" data-label="MOTOR KONTROLÜ"></div>
</div>
<div class="folio"><span class="num">05</span><div class="rule"></div><h2 class="serif">Sıkça sorulanlar</h2></div>
<div class="faq">
<div class="faq-item open"><button class="faq-q">Hangi yağ markalarını kullanıyorsunuz?<span class="mark">+</span></button><div class="faq-a"><p>Aracınızın üretici önerisine uygun, güvenilir ve orijinal ya da OEM eşdeğeri yağ ve filtre markalarını kullanıyoruz.</p></div></div>
<div class="faq-item"><button class="faq-q">Bakım süresi ne kadar sürer?<span class="mark">+</span></button><div class="faq-a"><p>Standart bakım işlemi ortalama 30-45 dakika içinde tamamlanır.</p></div></div>
<div class="faq-item"><button class="faq-q">Yerinde bakım aracımın garantisini etkiler mi?<span class="mark">+</span></button><div class="faq-a"><p>Kullandığımız ürünler ve işlem raporları, çoğu üretici garanti koşuluyla uyumludur; marka bazlı garanti şartlarınızı önceden birlikte teyit ederiz.</p></div></div>
</div>
HTML
docker compose exec -T wordpress wp post update 23 ./temp_periyodik.html --allow-root

rm -f ./wordpress/temp_koltuk.html ./wordpress/temp_pasta.html ./wordpress/temp_far.html ./wordpress/temp_gocuk.html ./wordpress/temp_periyodik.html

echo "Success!"
