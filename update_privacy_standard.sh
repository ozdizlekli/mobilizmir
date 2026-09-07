#!/bin/bash
set -e

cat << HTML > ./wordpress/temp_privacy.html
<p><strong>Son Güncelleme:</strong> 7 Eylül 2026</p>

<p>Mobilİzmir olarak, kişisel verilerinizin güvenliğine ve gizliliğine en üst düzeyde önem veriyoruz. İşbu Gizlilik ve Çerez Politikası, 6698 sayılı Kişisel Verilerin Korunması Kanunu (KVKK) uyarınca veri sorumlusu sıfatıyla sizi bilgilendirmek amacıyla hazırlanmıştır.</p>

<h2>1. Toplanan Kişisel Veriler</h2>
<p>Web sitemizi ziyaretiniz sırasında veya destek hatlarımız üzerinden bizimle iletişime geçtiğinizde aşağıdaki verileriniz toplanabilmektedir:</p>
<ul>
  <li><strong>Kimlik ve İletişim Bilgileri:</strong> Ad, soyad, telefon numarası ve e-posta adresi.</li>
  <li><strong>Lokasyon Bilgileri:</strong> Mobil hizmetin sunulabilmesi için tarafınızca paylaşılan açık adres veya konum bilgisi.</li>
  <li><strong>Araç Bilgileri:</strong> Doğru hizmetin belirlenebilmesi için araç marka, model ve plaka bilgileri.</li>
</ul>

<h2>2. Kişisel Verilerin İşlenme Amacı</h2>
<p>Topladığımız kişisel veriler, yalnızca aşağıda belirtilen hukuki sebeplere ve amaçlara dayanarak işlenmektedir:</p>
<ul>
  <li>Talep ettiğiniz araç bakım, onarım ve temizlik hizmetlerinin planlanması ve adresinizde yerine getirilmesi,</li>
  <li>Mobil ekiplerimizin size ulaşabilmesi için navigasyon ve operasyon süreçlerinin yönetilmesi,</li>
  <li>Hizmet sonrası faturalandırma, destek ve müşteri memnuniyeti araştırmalarının yapılması,</li>
  <li>Yasal yükümlülüklerimizin yerine getirilmesi.</li>
</ul>

<h2>3. Kişisel Verilerin Aktarılması</h2>
<p>Kişisel verileriniz, kural olarak üçüncü kişilerle paylaşılmamaktadır. Ancak yasal bir zorunluluk olması halinde yetkili kamu kurum ve kuruluşları ile veya hizmetin ifası için zorunlu olan durumlarda (örneğin yasal defterlerin tutulması için mali müşavirlik) gizlilik sözleşmeleri çerçevesinde aktarılabilir.</p>

<h2>4. Çerez (Cookie) Politikası</h2>
<p>Web sitemiz, ziyaretçilerimize daha iyi bir kullanıcı deneyimi sunmak, site performansını ölçmek ve anonim trafik analizleri yapmak amacıyla çerezler (cookies) kullanmaktadır.</p>
<ul>
  <li><strong>Zorunlu Çerezler:</strong> Sitenin temel fonksiyonlarının çalışması ve güvenlik için teknik olarak zorunlu çerezlerdir.</li>
  <li><strong>Analitik Çerezler:</strong> Sitenin hangi sayfalarının ziyaret edildiği, sitede ne kadar süre kalındığı gibi istatistiksel verileri anonim olarak toplar.</li>
</ul>
<p>Tarayıcı ayarlarınızı değiştirerek çerez kullanımını kısıtlayabilir veya tamamen reddedebilirsiniz. Ancak zorunlu çerezlerin kapatılması durumunda web sitemizin bazı özellikleri düzgün çalışmayabilir.</p>

<h2>5. KVKK Kapsamındaki Haklarınız</h2>
<p>6698 sayılı KVKK’nın 11. maddesi gereğince, veri sahibi olarak aşağıdaki haklara sahipsiniz:</p>
<ul>
  <li>Kişisel verilerinizin işlenip işlenmediğini öğrenme, işlenmişse buna ilişkin bilgi talep etme,</li>
  <li>Verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</li>
  <li>Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,</li>
  <li>Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini, silinmesini veya yok edilmesini isteme.</li>
</ul>
<p>Bu haklarınızı kullanmak ve kişisel verilerinizle ilgili detaylı bilgi almak için <strong>iletisim@mobilizmir.com</strong> adresine e-posta gönderebilir veya <strong>0540 187 20 03</strong> numaralı iletişim hattımızdan bize yazılı olarak başvurabilirsiniz.</p>
HTML

docker compose exec -T wordpress wp post update 3 ./temp_privacy.html --allow-root

rm -f ./wordpress/temp_privacy.html
echo "Gizlilik Politikası standart resmi metne dönüştürüldü."
