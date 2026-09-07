#!/bin/bash
set -e

# CREATE POST 1
docker compose exec -T wordpress wp post create ./wordpress/post1.html --post_title="Seramik Kaplama mı, Pasta Cila mı? Hangisini Seçmelisiniz?" --post_status=publish --allow-root

# CREATE POST 2
docker compose exec -T wordpress wp post create ./wordpress/post2.html --post_title="İzmir Gibi Sıcak İklimlerde Araç Boyası Nasıl Korunur?" --post_status=publish --allow-root

# CREATE POST 3
docker compose exec -T wordpress wp post create ./wordpress/post3.html --post_title="Boyasız Göçük Düzeltme (PDR) Hakkında Doğru Bilinen Yanlışlar" --post_status=publish --allow-root

rm -f ./wordpress/post1.html ./wordpress/post2.html ./wordpress/post3.html
echo "Blog yapısı kuruldu ve 3 adet içerik eklendi."
