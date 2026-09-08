<?php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/front-page.php');

$pattern = '/\s*<h2 class="serif">Farkı Kendi Ellerinizle Hissedin<\/h2>\s*<p>Fare imlecini veya parmağınızı aracın üzerinde gezdirerek kusursuz değişimi keşfedin\.<\/p>/s';

$page = preg_replace($pattern, '', $page);

file_put_contents('./wordpress/wp-content/themes/astra-child/front-page.php', $page);
echo "Text removed!\n";
