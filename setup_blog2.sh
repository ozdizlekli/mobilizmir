#!/bin/bash
set -e

# CREATE POST 1
cat << HTML > ./wordpress/post1.html
<p>Araç sahiplerinin en sık sorduğu ve kafa karışıklığı yaşadığı konulardan biri: <strong>"Aracıma pasta cila mı yaptırmalıyım, yoksa seramik kaplama mı?"</strong>. Aslında bu iki işlem birbirinin alternatifi değil, kusursuz bir görünüm için birbirini tamamlayan iki ayrı adımdır.</p>
<h2 class="serif">Pasta Cila Nedir, Ne İşe Yarar?</h2>
<p>Pasta cila (Polisaj), aracınızın boya yüzeyinde zamanla oluşan <em>kılcal çizikleri, güneş yanığı başlangıçlarını, reçine ve kuş pisliği yanıklarını</em> aşındırarak yüzeyi pürüzsüzleştirme işlemidir.</p>
<ul>
  <li>Boya yüzeyindeki matlığı alır.</li>
  <li>Kılcal çizikleri ve hareleri yok eder.</li>
  <li>Boyayı orijinal parlaklığına ve derinliğine kavuşturur.</li>
</ul>
<blockquote class="wp-block-quote"><p>Unutmayın: Pasta cila bir koruma yöntemi değil, bir <strong>düzeltme ve onarım</strong> yöntemidir.</p></blockquote>
<h2 class="serif">Seramik Kaplama Nedir?</h2>
<p>Seramik kaplama, içeriğindeki silisyum dioksit (SiO2) sayesinde boya yüzeyiyle moleküler düzeyde bağ kuran, şeffaf ve son derece sert bir koruma kalkanıdır. Pasta cila ile pürüzsüzleştirilmiş ve parlatılmış yüzeyin üzerine uygulanır.</p>
<ul>
  <li>Kuş pisliği, reçine ve asit yağmurlarına karşı direnç sağlar.</li>
  <li>UV ışınlarını bloke ederek boyanın solmasını engeller.</li>
  <li>Yüksek su kaydırıcılık (hidrofobik) özelliği sayesinde aracın geç kirlenmesini ve kolay temizlenmesini sağlar.</li>
</ul>
<h2 class="serif">Sonuç Olarak Hangisi?</h2>
<p>Eğer aracınızın boyası matlaşmış ve çiziklerle doluysa, doğrudan seramik kaplama yaptırmak çizikleri boyanın altına hapsetmek anlamına gelir. Doğru olan yöntem; önce <strong>Mobilİzmir profesyonelleri</strong> tarafından aşamalı pasta cila işlemiyle yüzeyin sıfırlanması, hemen ardından bu kusursuz görünümün seramik kaplama ile uzun yıllar mühürlenmesidir.</p>
HTML
docker compose exec -T wordpress wp post create ./post1.html --post_title="Seramik Kaplama mı, Pasta Cila mı? Hangisini Seçmelisiniz?" --post_status=publish --allow-root

# CREATE POST 2
cat << HTML > ./wordpress/post2.html
<p>İzmir gibi yılın büyük bir bölümünü güneşli ve sıcak geçiren bir şehirde araç sahibiyseniz, boya koruması lüks değil bir zorunluluktur. Güneşin yoğun UV ışınları, nem ve denizden gelen tuzlu hava, aracınızın boyasını hızla yaşlandırabilir.</p>
<h2 class="serif">1. UV Işınlarının Boyaya Etkisi</h2>
<p>Tıpkı insan cildi gibi, araç boyası da güneşin zararlı ultraviyole (UV) ışınlarından etkilenir. Uzun süre doğrudan güneşe maruz kalan araçlarda "vernik yanığı" (güneş yanığı) dediğimiz, geriye dönüşü sadece boyamak olan hasarlar meydana gelir.</p>
<h2 class="serif">2. Reçine ve Kuş Pisliğine Anında Müdahale</h2>
<p>Özellikle yaz aylarında ağaç altlarına park edilen araçlarda sıkça karşılaşılan çam reçineleri ve kuş pislikleri, içerdikleri yüksek asit oranı nedeniyle vernik tabakasını birkaç gün içinde yakabilir. Bu tür lekeler görüldüğü an, kurumasını beklemeden bol su ve uygun bir temizleyici ile yüzeyden uzaklaştırılmalıdır.</p>
<h2 class="serif">3. Seramik Kaplamanın Yaz Aylarındaki Önemi</h2>
<p>Sıcak iklimlerde boyayı korumanın en etkili yolu seramik kaplamadır. Geleneksel wax ve cilalar sıcak havalarda eriyip buharlaşabilirken, <strong>seramik kaplama</strong> yüksek ısılara dayanıklıdır ve boya yüzeyinde kalıcı bir zırh oluşturur.</p>
<blockquote class="wp-block-quote"><p>Mobilİzmir'in uyguladığı UV dirençli seramik kaplamalar sayesinde, aracınız İzmir'in kavurucu yaz güneşine karşı yıllarca korunur.</p></blockquote>
<h2 class="serif">4. Doğru Yıkama Teknikleri</h2>
<p>Güneş altında, kaporta sıcakken kesinlikle araç yıkanmamalıdır. Sıcak yüzeye temas eden şampuanlı su, anında kuruyarak boyada kireç ve su lekeleri bırakır. Araç daima gölgede veya yüzey soğuduktan sonra, pH dengeli şampuanlar ile yıkanmalıdır.</p>
HTML
docker compose exec -T wordpress wp post create ./post2.html --post_title="İzmir Gibi Sıcak İklimlerde Araç Boyası Nasıl Korunur?" --post_status=publish --allow-root

# CREATE POST 3
cat << HTML > ./wordpress/post3.html
<p>Kapı çarpmaları, dolu hasarları veya ufak sürtmeler sonucu oluşan göçükler can sıkıcıdır. Eskiden bu tür hasarlarda kaportacıya gidilir, bölge macunlanıp boyanır ve aracın orijinalliği bozulurdu. Günümüzde ise <strong>Boyasız Göçük Düzeltme (PDR - Paintless Dent Repair)</strong> teknolojisi hayat kurtarıyor. Ancak PDR hakkında hala birçok yanlış bilinen efsane var.</p>
<h2 class="serif">Yanlış 1: "PDR sadece çok küçük göçüklerde işe yarar"</h2>
<p><strong>Doğrusu:</strong> Göçüğün boyutu tek başına belirleyici değildir. Boyası çatlamamış ve sacın çok fazla esnememiş/uzamamış olduğu durumlarda, avuç içi veya daha büyük boyutlardaki göçükler bile özel PDR çubukları ve masaj yöntemleriyle tamamen düzeltilebilir.</p>
<h2 class="serif">Yanlış 2: "Çekme işlemi sırasında orijinal boya zarar görebilir"</h2>
<p><strong>Doğrusu:</strong> PDR işlemi, uzman teknisyenler tarafından, özel silikon yapıştırıcılar ve boyaya dost çekme aparatları (veya içeriden itme çubukları) kullanılarak yapılır. Mobilİzmir uzmanlarının yaptığı hiçbir PDR işleminde orijinal fabrika boyasına zarar gelmez.</p>
<blockquote class="wp-block-quote"><p>Aracınızın sacı eski formuna kavuşurken, Tramer'de boya/değişen kaydı oluşmaz; değer kaybı yaşanmaz.</p></blockquote>
<h2 class="serif">Yanlış 3: "Dolu hasarlarında PDR yetersiz kalır, mecburen boyanmalı"</h2>
<p><strong>Doğrusu:</strong> Dolu hasarları PDR teknolojisinin en çok tercih edildiği alandır. 300'den fazla göçüğü olan bir araç bile, tavan döşemesi sökülerek veya dışarıdan çekme tekniğiyle, tek damla boya kullanılmadan fabrikasyon haline döndürülebilir.</p>
<h2 class="serif">Yanlış 4: "Mobil olarak PDR yapılamaz, dükkan şarttır"</h2>
<p><strong>Doğrusu:</strong> Mobilİzmir'in tam donanımlı araçları, PDR için gerekli olan özel yansıma lambaları, çekme kuleleri ve aparat setlerini içerir. Kapalı veya yarı kapalı garajınızda, aracınız yerinden oynamadan profesyonel PDR onarımı gerçekleştirebiliyoruz.</p>
HTML
docker compose exec -T wordpress wp post create ./post3.html --post_title="Boyasız Göçük Düzeltme (PDR) Hakkında Doğru Bilinen Yanlışlar" --post_status=publish --allow-root

rm -f ./wordpress/post1.html ./wordpress/post2.html ./wordpress/post3.html
echo "SUCCESS"
