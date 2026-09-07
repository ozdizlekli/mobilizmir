<?php
$file = './scripts/update_services.sh';
$content = file_get_contents($file);

// 1. Koltuk Yikama
$content = str_replace(
    '<p style="text-align:center;color:#ccc;">[Hizmet Başlangıç Fiyatı veya Fiyat Aralığı Buraya Gelecek]', 
    '<p style="text-align:center;color:#ccc;"><strong>750 ₺</strong>\'den başlayan fiyatlarla', 
    $content
);

// 2. Pasta Cila
// Wait, Pasta Cila has its own HTML block in the script. The first str_replace will replace ALL occurrences of the placeholder!
// But then the sed commands for 21, 22, 23 will inherit "750 ₺" from temp_koltuk.html.
// So we need to add sed commands for the prices!

$sed_far = "sed 's/KOLTUK YIKAMA/FAR TEMİZLİĞİ/;";
$sed_far_new = "sed 's/750 ₺/450 ₺/; s/KOLTUK YIKAMA/FAR TEMİZLİĞİ/;";
$content = str_replace($sed_far, $sed_far_new, $content);

$sed_pdr = "sed 's/KOLTUK YIKAMA/BOYASIZ GÖÇÜK DÜZELTME/;";
$sed_pdr_new = "sed 's/750 ₺/1.200 ₺/; s/KOLTUK YIKAMA/BOYASIZ GÖÇÜK DÜZELTME/;";
$content = str_replace($sed_pdr, $sed_pdr_new, $content);

$sed_periyodik = "sed 's/KOLTUK YIKAMA/PERİYODİK BAKIM/;";
$sed_periyodik_new = "sed 's/750 ₺/900 ₺/; s/KOLTUK YIKAMA/PERİYODİK BAKIM/;";
$content = str_replace($sed_periyodik, $sed_periyodik_new, $content);

file_put_contents($file, $content);

// We must also update the LIVE pages just in case the user meant the actual DB!
// User said: "Bu fiyatları birebir aynı şekilde ilgili hizmet sayfasının fiyat kutusuna işle... Ana sayfa ile alt sayfa fiyatları arasında tutarsızlık kalmasın."
// But wait, my NEW script `update_services.sh` generated the DB posts. Did it have the correct prices?
// Koltuk: 750, 1450, 1950. (750 matches starting price!)
// Pasta Cila: wait, my previous script copied Koltuk's prices to all of them! I didn't change the prices for Pasta Cila in `update_services.sh`!
