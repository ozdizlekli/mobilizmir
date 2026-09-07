<?php
$script = file_get_contents('./scripts/update_services.sh');

// 1. Fix prices
$script = str_replace(
    "[Hizmet Başlangıç Fiyatı veya Fiyat Aralığı Buraya Gelecek]", 
    "<strong>750 ₺</strong>'den başlayan fiyatlarla", 
    $script
); // default, but wait, I need to do it per service!

// Let's replace manually for each:
// It's better to use regex or string replace per section.
