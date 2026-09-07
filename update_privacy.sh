#!/bin/bash
set -e

cat << HTML > ./wordpress/temp_privacy.html
<p class="service-lede">Mobilİzmir olarak, kişisel verilerinizin güvenliğine ve gizliliğine en üst düzeyde önem veriyoruz. 6698 sayılı Kişisel Verilerin Korunması Kanunu (KVKK) uyarınca veri sorumlusu sıfatıyla sizi bilgilendirmek isteriz.</p>

<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Hangi Verileri Topluyoruz?</h2></div>
<p>Web sitemizi ziyaretiniz sırasında veya WhatsApp/Telefon destek hattımız üzerinden bizimle iletişime geçtiğinizde aşağıdaki verileriniz toplanabilmektedir:</p>
<ul>
  <li><strong>Kimlik ve İletişim Bilgileri:</strong> Ad, soyad, telefon numarası.</li>
  <li><strong>Lokasyon Bilgileri:</strong> Mobil hizmetin sunulabilmesi için paylaştığınız konum veya açık adres bilgisi.</li>
  <li><strong>Araç Bilgileri:</strong> Size doğru hizmeti ve fiyatı sunabilmek için paylaştığınız araç marka, model ve araç kondisyon bilgileri.</li>
</ul>

<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Verilerin İşlenme Amacı</h2></div>
<p>Topladığımız kişisel veriler, yalnızca aşağıdaki amaçlarla kullanılmaktadır:</p>
<ul>
  <li>Talep ettiğiniz araç bakım ve onarım hizmetinin planlanması ve adresinizde yerine getirilmesi.</li>
  <li>Mobil ekiplerimizin size ulaşabilmesi için konum ve navigasyon süreçlerinin yönetilmesi.</li>
  <li>Hizmet sonrası süreçlendirme, destek ve müşteri memnuniyeti araştırması yapılması.</li>
</ul>

<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Çerez (Cookie) Politikası</h2></div>
<p>Web sitemiz, ziyaretçilerimize daha iyi bir kullanıcı deneyimi sunmak ve site içi gezinme istatistiklerini analiz etmek amacıyla çerezler (cookies) kullanmaktadır.</p>
<ul>
  <li><strong>Zorunlu Çerezler:</strong> Sitenin temel fonksiyonlarının çalışması ve güvenlik için gereklidir.</li>
  <li><strong>Analitik Çerezler:</strong> Sitenin hangi sayfalarının ziyaret edildiği gibi tamamen anonim istatistiksel veriler toplar. Bize hizmetlerimizi geliştirme imkanı sunar.</li>
</ul>
<p>Tarayıcı ayarlarınızı değiştirerek çerez kullanımını kısıtlayabilir veya reddedebilirsiniz.</p>

<div class="folio"><span class="num">04</span><div class="rule"></div><h2 class="serif">KVKK Kapsamındaki Haklarınız</h2></div>
<p>6698 sayılı KVKK’nın 11. maddesi gereğince, veri sahibi olarak aşağıdaki haklara sahipsiniz:</p>
<ul>
  <li>Kişisel verilerinizin işlenip işlenmediğini öğrenme, işlenmişse buna ilişkin bilgi talep etme,</li>
  <li>Verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</li>
  <li>Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini, silinmesini veya yok edilmesini isteme.</li>
</ul>
<p>Bu haklarınızı kullanmak ve detaylı bilgi almak için <strong style="color:var(--gold-bright);">iletisim@mobilizmir.com</strong> adresine e-posta gönderebilir veya <strong style="color:var(--gold-bright);">0540 187 20 03</strong> numaralı iletişim hattımızdan bize ulaşabilirsiniz.</p>
HTML

docker compose exec -T wordpress wp post update 3 ./temp_privacy.html --post_title="Gizlilik Politikası ve KVKK" --post_name="gizlilik-politikasi" --post_status=publish --allow-root

rm -f ./wordpress/temp_privacy.html
echo "Gizlilik Politikası sayfası yayına alındı."
