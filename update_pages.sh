#!/bin/bash
docker compose exec -T wordpress wp post update 18 ./page_18.html --allow-root
docker compose exec -T wordpress wp post update 19 ./page_19.html --allow-root
docker compose exec -T wordpress wp post update 20 ./page_20.html --allow-root
docker compose exec -T wordpress wp post update 21 ./page_21.html --allow-root
docker compose exec -T wordpress wp post update 22 ./page_22.html --allow-root
docker compose exec -T wordpress wp post update 23 ./page_23.html --allow-root
