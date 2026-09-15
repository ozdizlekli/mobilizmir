<?php
// Fix Header
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
if (strpos($header, 'class="top-bar"') === false) {
    $header = str_replace('<header class="site">', $top_bar . "\n" . '<header class="site" id="site-header">', $header);
    file_put_contents('./wordpress/wp-content/themes/astra-child/header.php', $header);
    echo "Header fixed.\n";
}

// Fix Footer
$footer = file_get_contents('./wordpress/wp-content/themes/astra-child/footer.php');
$new_footer = '<div class="site-footer-wrapper">
    <div class="floating-footer">
        <div class="ff-top">
            <div class="ff-col">
                <a href="/" style="display:inline-block; margin-bottom:15px;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Mobilİzmir Logo" style="height:40px; width:auto;">
                </a>
                <p>Mobilİzmir olarak İzmir\'de PDR, pasta cila, seramik kaplama ve detaylı temizlik alanında profesyonel yerinde hizmet çözümleri sunuyoruz.</p>
                <div class="ff-socials">
                    <a href="#"><svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
                </div>
            </div>
            <div class="ff-col">
                <h4>Firma</h4>
                <ul>
                    <li><a href="/hakkimizda/">Hakkımızda</a></li>
                    <li><a href="/uygulamalarimiz/">Uygulamalarımız</a></li>
                    <li><a href="/iletisim/">İletişim</a></li>
                </ul>
            </div>
            <div class="ff-col">
                <h4>Hizmetler</h4>
                <ul>
                    <li><a href="/hizmetlerimiz/koltuk-yikama/">Koltuk Yıkama</a></li>
                    <li><a href="/hizmetlerimiz/pasta-cila/">Pasta Cila</a></li>
                    <li><a href="/hizmetlerimiz/far-temizligi/">Far Temizliği</a></li>
                    <li><a href="/hizmetlerimiz/gocuk-duzeltme/">Göçük Düzeltme</a></li>
                    <li><a href="/hizmetlerimiz/periyodik-bakim/">Periyodik Bakım</a></li>
                </ul>
            </div>
            <div class="ff-col">
                <h4>İletişim</h4>
                <p>İzmir / Türkiye<br><br>info@mobilizmir.com<br><br>+90 553 345 90 73</p>
            </div>
        </div>
        <div class="ff-bottom">
            <div class="copyright">© 2026 Mobilİzmir. All rights reserved.</div>
            <div class="agency">Designed with premium aesthetics.</div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, { threshold: 0.1 });
    
    document.querySelectorAll(".reveal").forEach(el => observer.observe(el));
});
</script>';

if (strpos($footer, 'class="floating-footer"') === false) {
    $footer = preg_replace('/<footer>.*?<\/footer>/is', $new_footer, $footer);
    file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);
    echo "Footer fixed.\n";
}
