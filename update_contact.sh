#!/bin/bash
set -e
WA='https://wa.me/905401872003'

cat << HTML > ./wordpress/temp_contact.html
<p class="service-lede">Mobilİzmir olarak aracınıza hak ettiği premium bakımı sunmak için bir mesaj uzağınızdayız. Randevu talepleriniz, fiyat bilgisi veya hizmet detayları hakkında her türlü sorunuz için bizimle anında iletişime geçebilirsiniz.</p>

<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Bize Ulaşın</h2></div>
<div class="why-list">
  <div>
    <h4>WhatsApp / Telefon</h4>
    <p>Hızlı randevu ve anında fiyat teklifi için bize yazın veya arayın.<br>
    <strong><a href="tel:+905401872003" style="color:var(--gold-bright); border-bottom:1px solid var(--gold);">0540 187 20 03</a></strong></p>
  </div>
  <div>
    <h4>E-Posta</h4>
    <p>Kurumsal talepler, filo anlaşmaları ve bilgi için.<br>
    <strong><a href="mailto:iletisim@mobilizmir.com" style="color:var(--gold-bright); border-bottom:1px solid var(--gold);">iletisim@mobilizmir.com</a></strong></p>
  </div>
  <div>
    <h4>Çalışma Saatleri</h4>
    <p>Pazartesi - Cumartesi: <strong>09:00 - 19:00</strong><br>Pazar: Kapalı</p>
  </div>
  <div>
    <h4>Hizmet Bölgemiz</h4>
    <p><strong>İzmir Geneli</strong><br>Araçlarımız tam donanımlı olarak belirttiğiniz adrese gelmektedir.</p>
  </div>
</div>

<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Süreç Çok Basit</h2></div>
<div class="process">
  <div><div class="step-num serif">1</div><h4>İletişime Geçin</h4><p>Aracınızın modeli ve almak istediğiniz hizmeti (fotoğraflarla birlikte) WhatsApp'tan bize iletin.</p></div>
  <div><div class="step-num serif">2</div><h4>Planlama Yapalım</h4><p>Size en uygun tarih ve saati, bulunduğunuz konumu belirleyerek net fiyatla randevunuzu oluşturalım.</p></div>
  <div><div class="step-num serif">3</div><h4>Adresinizde Hizmet</h4><p>Tam donanımlı mobil istasyonumuzla kapınıza kadar gelip işlemi yerinde kusursuzca uygulayalım.</p></div>
</div>

<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Hizmet Ağımız</h2></div>
<div class="ph" data-label="İZMİR HİZMET HARİTASI (Buraya Google Haritalar veya görsel ekleyebilirsiniz)" style="aspect-ratio:21/9; border-radius:var(--radius); margin-bottom: 20px;"></div>

<div class="page-cta">
  <h3 class="serif" style="margin-bottom:20px;">Beklemeye son. Premium araç bakımı kapınızda.</h3>
  <a href="$WA" class="btn solid">WhatsApp'tan Hemen Yazın</a>
</div>
HTML

docker compose exec -T wordpress wp post update 7 ./temp_contact.html --allow-root

rm -f ./wordpress/temp_contact.html
echo "İletişim sayfası güncellendi."
