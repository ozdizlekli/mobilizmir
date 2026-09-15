<?php
$header = file_get_contents('./wordpress/wp-content/themes/astra-child/header.php');

$top_bar = '<div class="top-bar">
    <div class="tb-left">
        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
        <span>İzmir / Türkiye - Yerinde Mobil Hizmet</span>
    </div>
    <div class="tb-right">
        <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        <span>+90 553 345 90 73</span>
    </div>
</div>';

// Inject top bar before site-header
$header = preg_replace('/<header id="site-header"[^>]*>/', $top_bar . "\n$0", $header);

file_put_contents('./wordpress/wp-content/themes/astra-child/header.php', $header);
echo "Header Updated.\n";
