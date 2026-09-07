#!/bin/bash
# Re-do Google Rating via WP CLI or sed (since sed worked locally on files)
sed -i '' 's/Google&#039;da 4.9 ★ — 500+ değerlendirme/Google Yorumlarımızı İnceleyin/g' ./wordpress/wp-content/themes/astra-child/header.php

docker compose exec -T wordpress wp post list --post_type=page --name=hakkimizda --field=ID --allow-root > about_id.txt
ID=$(cat about_id.txt)
if [ ! -z "$ID" ]; then
    docker compose exec -T wordpress wp post get $ID --field=post_content --allow-root > temp_content.html
    sed -i '' 's/2018 yılında kurulan/2021 yılında kurulan/g' temp_content.html
    sed -i '' 's/5 yıllık kesintisiz/yılların getirdiği/g' temp_content.html
    docker compose exec -T wordpress wp post update $ID ./temp_content.html --allow-root
    rm temp_content.html
fi
rm about_id.txt
echo "About year fixed via WP-CLI"
