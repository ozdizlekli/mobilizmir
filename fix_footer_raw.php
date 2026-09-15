<?php
// Just read footer.php, find <footer>, replace everything up to </footer>
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

// Replace string between <footer> and </footer>
$start = strpos($footer, '<footer>');
$end = strpos($footer, '</footer>') + 9;

if ($start !== false && $end !== false) {
    $before = substr($footer, 0, $start);
    $after = substr($footer, $end);
    $footer = $before . $new_footer . $after;
    file_put_contents('./wordpress/wp-content/themes/astra-child/footer.php', $footer);
    echo "Footer replaced explicitly.\n";
} else {
    echo "Could not find <footer> tags!\n";
}
