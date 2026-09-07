#!/bin/bash
docker compose exec -T wordpress bash -c "wp post get 20 --field=post_content --allow-root > /tmp/20.html && sed -i 's/750 ₺/1.800 ₺/g' /tmp/20.html && wp post update 20 /tmp/20.html --allow-root"
docker compose exec -T wordpress bash -c "wp post get 21 --field=post_content --allow-root > /tmp/21.html && sed -i 's/750 ₺/450 ₺/g' /tmp/21.html && wp post update 21 /tmp/21.html --allow-root"
docker compose exec -T wordpress bash -c "wp post get 22 --field=post_content --allow-root > /tmp/22.html && sed -i 's/750 ₺/1.200 ₺/g' /tmp/22.html && wp post update 22 /tmp/22.html --allow-root"
docker compose exec -T wordpress bash -c "wp post get 23 --field=post_content --allow-root > /tmp/23.html && sed -i 's/750 ₺/900 ₺/g' /tmp/23.html && wp post update 23 /tmp/23.html --allow-root"
