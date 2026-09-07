#!/bin/bash
set -e
WA='https://wa.me/905401872003'

cat << HTML > ./wordpress/temp_gallery.html
<p class="service-lede">Mobilİzmir olarak, İzmir'in dört bir yanında gerçekleştirdiğimiz premium araç bakım ve onarım işlemlerinden kareler. Kusursuz sonuçlar ve şeffaf süreçler.</p>

<div class="folio"><span class="num">01</span><div class="rule"></div><h2 class="serif">Seramik Kaplama & Pasta Cila</h2></div>
<div class="gallery-grid">
  <div class="g-item wide tall"><div class="ph" data-label="KUSURSUZ PARLAKLIK (Buraya görsel ekleyin)"></div></div>
  <div class="g-item"><div class="ph" data-label="UYGULAMA ANI"></div></div>
  <div class="g-item"><div class="ph" data-label="DETAY BAKIŞI"></div></div>
  <div class="g-item wide"><div class="ph" data-label="ÖNCESİ / SONRASI"></div><span class="after-tag">Sonrası</span></div>
</div>

<div class="folio"><span class="num">02</span><div class="rule"></div><h2 class="serif">Koltuk Yıkama & İç Temizlik</h2></div>
<div class="mini-gallery" style="grid-template-columns: repeat(4, 1fr);">
  <div class="ph" data-label="ÖN KOLTUKLAR"></div>
  <div class="ph" data-label="ARKA KOLTUKLAR"></div>
  <div class="ph" data-label="TAVAN DÖŞEMESİ"></div>
  <div class="ph" data-label="DERİ BAKIMI"></div>
</div>

<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Boyasız Göçük Düzeltme (PDR)</h2></div>
<div class="gallery-grid">
  <div class="g-item wide"><div class="ph" data-label="KAPI HASARI"></div><span class="after-tag">Öncesi</span></div>
  <div class="g-item wide"><div class="ph" data-label="DÜZELTİLMİŞ KAPI"></div><span class="after-tag">Sonrası</span></div>
  <div class="g-item wide"><div class="ph" data-label="DOLU HASARI"></div><span class="after-tag">Öncesi</span></div>
  <div class="g-item wide"><div class="ph" data-label="DÜZELTİLMİŞ TAVAN"></div><span class="after-tag">Sonrası</span></div>
</div>

<blockquote class="wp-block-quote">
<p>Kendi ekleyeceğiniz fotoğraflar için WordPress'in standart "Galeri" (Gallery) bloğunu da kullanabilirsiniz. Tüm görselleriniz tasarımımıza otomatik olarak uyum sağlayacaktır.</p>
</blockquote>

<div class="page-cta">
  <h3 class="serif" style="margin-bottom:20px;">Aracınızın da bu kusursuz görünüme kavuşmasını ister misiniz?</h3>
  <a href="$WA" class="btn solid">Hemen Randevu Alın</a>
</div>
HTML

docker compose exec -T wordpress wp post update 6 ./temp_gallery.html --allow-root

rm -f ./wordpress/temp_gallery.html
echo "Galeri sayfası güncellendi."
