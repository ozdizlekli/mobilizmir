<?php
$front = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');
$target = '<div class="folio"><span class="num">03</span><div class="rule"></div><h2 class="serif">Galeri</h2></div>';
$replacement = '<div class="folio" style="margin-bottom:8px;"><span class="num">03</span><div class="rule"></div><h2 class="serif">Galeri</h2></div><a href="/uygulamalarimiz-galeri/" style="color:var(--gold-bright);font-size:13px;display:block;margin-bottom:32px;text-decoration:underline;">Tüm galeriyi gör &rarr;</a>';
$front = str_replace($target, $replacement, $front);
file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $front);
