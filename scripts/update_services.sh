# KOLTUK YIKAMA (19)
cat << 'HTML' > ./wordpress/temp_koltuk.html
<div class="wp-block-group alignfull service-hero section-darker">
<h1 class="has-text-align-center has-text-color reveal" style="color:#d4af37;">KOLTUK YIKAMA</h1>
<p class="has-text-align-center has-text-color reveal" style="color:#888888;font-size:1.1rem;font-style:italic;">Daha Temiz, Daha Ferah, Daha Sağlıklı</p>
<div class="gold-line reveal"></div>
</div>
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<div class="reveal">
<div class="trust-badge"><svg viewBox="0 0 24 24"><path d="M12 2L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-3zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-2.33v8.02z"/></svg> %100 Leke Çıkarma Garantisi</div>
<p class="has-text-color" style="color:#bbbbbb;font-size:1.05rem;line-height:2">Aracınızın koltuklarına zamanla işleyen ter, toz, alerjen maddeler ve inatçı lekeler yalnızca kötü koku yapmakla kalmaz; sağlığınızı da doğrudan etkiler. <strong>Mobilİzmir</strong> profesyonel koltuk yıkama hizmeti ile koltuklarınızın derinlerine inerek tüm kir ve bakterileri temizliyor, aracınızın içini adeta sıfırlıyoruz.</p>
</div>
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<div class="wp-block-columns reveal">
<div class="wp-block-column">
<ul class="feature-list">
<li><svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> <div><h4 style="color:#d4af37;margin:0 0 5px 0;">Derin Temizlik</h4><p style="margin:0;">Kir ve bakterileri kökünden temizler, kokuları yok eder.</p></div></li>
<li><svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> <div><h4 style="color:#d4af37;margin:0 0 5px 0;">Sağlıklı Yaşam</h4><p style="margin:0;">Alerjenleri ortadan kaldırıp ferah bir hava sağlar.</p></div></li>
</ul>
</div>
<div class="wp-block-column">
<ul class="feature-list">
<li><svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> <div><h4 style="color:#d4af37;margin:0 0 5px 0;">Hızlı Kuruma</h4><p style="margin:0;">Vakumlu ekipmanla aracınız hemen kullanıma hazır.</p></div></li>
<li><svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg> <div><h4 style="color:#d4af37;margin:0 0 5px 0;">Yerinde Hizmet</h4><p style="margin:0;">Siz işinizdeyken biz adresinizde hallediyoruz.</p></div></li>
</ul>
</div>
</div>
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<div class="wp-block-group has-background reveal" style="background-color:#111111;border-color:#d4af37;border-width:1px;border-radius:4px;padding:30px">
<h3 style="color:#D4AF37;text-align:center;">Fiyatlandırma</h3>
<p style="text-align:center;color:#ccc;">[Hizmet Başlangıç Fiyatı veya Fiyat Aralığı Buraya Gelecek]<br><em>Araç modeline ve işlem detayına göre fiyatlar değişiklik gösterebilir.</em></p>
<div style="text-align:center;margin-top:20px;">
<a href="https://wa.me/905401872003" class="wp-block-button__link wp-element-button">Fiyat Teklifi İçin WhatsApp'tan Yazın</a>
</div>
</div>
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
HTML
docker compose exec -T wordpress wp post update 19 ./temp_koltuk.html --allow-root

# PASTA CİLA (20)
cat << 'HTML' > ./wordpress/temp_pasta.html
<div class="wp-block-group alignfull service-hero section-darker">
<h1 class="has-text-align-center has-text-color reveal" style="color:#d4af37;">PASTA CİLA</h1>
<p class="has-text-align-center has-text-color reveal" style="color:#888888;font-size:1.1rem;font-style:italic;">Daha Parlak, Daha Korumalı, Daha Değerli</p>
<div class="gold-line reveal"></div>
</div>
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<div class="reveal">
<div class="trust-badge"><svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-2.33v8.02z"/></svg> 1 Yıl Boya Koruma</div>
<p class="has-text-color" style="color:#bbbbbb;font-size:1.05rem;line-height:2">Aracınızın boyası zamanla güneş, toz ve dış etkenler sebebiyle matlaşır. <strong>Mobilİzmir</strong> profesyonel pasta cila uygulaması ile solmuş yüzeyleri onarıyor, boyanıza fabrika çıkışı parlaklığını geri kazandırıyor ve uzun süreli koruma katmanı oluşturuyoruz.</p>
</div>
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<div class="wp-block-columns reveal">
<div class="wp-block-column">
<ul class="feature-list">
<li><svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.83l7.53 13.17H4.47L12 5.83z"/></svg> <div><h4 style="color:#d4af37;margin:0 0 5px 0;">Çizik Giderme</h4><p style="margin:0;">Kılcal çizikler ve matlaşma kalıcı olarak silinir.</p></div></li>
<li><svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.83l7.53 13.17H4.47L12 5.83z"/></svg> <div><h4 style="color:#d4af37;margin:0 0 5px 0;">Boya Koruma</h4><p style="margin:0;">Güneşin UV ışınlarına karşı ekstra zırh katmanı.</p></div></li>
</ul>
</div>
<div class="wp-block-column">
<ul class="feature-list">
<li><svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.83l7.53 13.17H4.47L12 5.83z"/></svg> <div><h4 style="color:#d4af37;margin:0 0 5px 0;">Göz Alıcı Parlaklık</h4><p style="margin:0;">Fabrika çıkışı showroom parlaklığı elde edilir.</p></div></li>
<li><svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.83l7.53 13.17H4.47L12 5.83z"/></svg> <div><h4 style="color:#d4af37;margin:0 0 5px 0;">Değer Artışı</h4><p style="margin:0;">Satış öncesi aracınızın piyasa değerini maksimize eder.</p></div></li>
</ul>
</div>
</div>
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<div class="wp-block-group has-background reveal" style="background-color:#111111;border-color:#d4af37;border-width:1px;border-radius:4px;padding:30px">
<h3 style="color:#D4AF37;text-align:center;">Fiyatlandırma</h3>
<p style="text-align:center;color:#ccc;">[Hizmet Başlangıç Fiyatı veya Fiyat Aralığı Buraya Gelecek]<br><em>Araç modeline ve işlem detayına göre fiyatlar değişiklik gösterebilir.</em></p>
<div style="text-align:center;margin-top:20px;">
<a href="https://wa.me/905401872003" class="wp-block-button__link wp-element-button">Fiyat Teklifi İçin WhatsApp'tan Yazın</a>
</div>
</div>
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
HTML
docker compose exec -T wordpress wp post update 20 ./temp_pasta.html --allow-root

# Repeat minimal struct for Far, Göçük, Periyodik quickly
# FAR (21)
sed 's/KOLTUK YIKAMA/FAR TEMİZLİĞİ/; s/Daha Temiz.*/Daha Parlak, Daha Güvenli Sürüş/; s/Aracınızın koltuklarına.*/Sararan farlarınızı zımpara ve polimer işlemle sıfırlıyoruz. Gece görüşünüzü artırın!/;' ./temp_koltuk.html > ./temp_far.html
docker compose exec -T wordpress wp post update 21 ./temp_far.html --allow-root
# GÖÇÜK (22)
sed 's/KOLTUK YIKAMA/BOYASIZ GÖÇÜK DÜZELTME/; s/Daha Temiz.*/Orijinalliği Bozmadan Kaporta Onarımı/; s/Aracınızın koltuklarına.*/Dolu hasarı veya ufak ezikleri PDR teknolojisi ile boyaya zarar vermeden düzeltiyoruz./;' ./temp_koltuk.html > ./temp_gocuk.html
docker compose exec -T wordpress wp post update 22 ./temp_gocuk.html --allow-root
# PERİYODİK (23)
sed 's/KOLTUK YIKAMA/PERİYODİK BAKIM/; s/Daha Temiz.*/Motorunuzun Ömrünü Uzatın/; s/Aracınızın koltuklarına.*/Yağ değişimi, filtre kontrolleri ve rutin sıvı bakımlarını kapınızda gerçekleştiriyoruz./;' ./temp_koltuk.html > ./temp_periyodik.html
docker compose exec -T wordpress wp post update 23 ./temp_periyodik.html --allow-root
