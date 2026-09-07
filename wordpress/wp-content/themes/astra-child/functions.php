<?php
/**
 * MOBİLİZMİR - Astra Child Tema Fonksiyonları
 * v2.0 — Tasarım yenilemesiyle birlikte güncellendi.
 */

// --------------------------------------------------------------------------
// 1) Stil ve font dosyalarını yükle
// --------------------------------------------------------------------------
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/style.css', array('astra-parent-style'), filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style(
        'mobilizmir-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap',
        [], null
    );
});

// --------------------------------------------------------------------------
// 2) WhatsApp Yapışkan Buton
// Telefon numarasını tek yerden yönetmek için sabit tanımlıyoruz.
// --------------------------------------------------------------------------
if (!defined('MI_WHATSAPP_NUMBER')) {
    define('MI_WHATSAPP_NUMBER', '905401872003'); // Gerekirse güncelleyin
}

add_action('wp_footer', function() {
    ?>
    <a href="https://wa.me/<?php echo esc_attr(MI_WHATSAPP_NUMBER); ?>" class="wa-sticky" target="_blank" rel="noopener" aria-label="WhatsApp">
        <svg viewBox="0 0 32 32"><path d="M16.004 0h-.008C7.174 0 0 7.176 0 16.004c0 3.5 1.132 6.744 3.054 9.378L1.054 31.28l6.156-1.97C9.776 30.962 12.766 32 16.004 32 24.826 32 32 24.826 32 16.004 32 7.176 24.826 0 16.004 0zm9.084 22.618c-.378 1.064-2.202 1.98-3.038 2.1-.836.12-1.91.17-3.08-.194-.708-.222-1.616-.516-2.78-1.014-4.882-2.088-8.066-7.024-8.31-7.352-.244-.328-1.996-2.654-1.996-5.062 0-2.408 1.264-3.594 1.712-4.084.45-.49 .978-.612 1.302-.612.328 0 .652.004.938.016.302.014.706-.114 1.104.842.408.978 1.386 3.386 1.508 3.63.12.244.202.53.04.856-.162.328-.244.53-.49.816-.244.286-.514.64-.734.858-.244.244-.498.508-.214.998.284.49 1.264 2.084 2.714 3.376 1.866 1.662 3.436 2.176 3.926 2.42.49.244.776.204 1.062-.122.284-.328 1.224-1.428 1.55-1.918.326-.49.652-.408 1.1-.244.45.162 2.854 1.346 3.344 1.59.49.244.816.368.936.57.122.204.122 1.164-.256 2.228z"/></svg>
    </a>
    <?php
});

// --------------------------------------------------------------------------
// 3) Footer telif hakkı metni
// --------------------------------------------------------------------------
add_filter('astra_footer_copyright', function() {
    return '&copy; ' . date('Y') . ' MOBİLİZMİR &mdash; Tüm hakları saklıdır.';
});

// --------------------------------------------------------------------------
// 4) LocalBusiness Schema (SEO)
// Artık sabit "localhost:8000" yerine gerçek site URL'sini ve varsa site
// ikonunu otomatik çekiyor. Adres/telefon bilgilerini gerçek verilerle
// güncellemeyi unutmayın.
// --------------------------------------------------------------------------
add_action('wp_footer', function() {
    $site_icon = get_site_icon_url();
    $schema = [
        "@context"     => "https://schema.org",
        "@type"        => "AutoRepair",
        "name"         => "Mobilİzmir - Mobil Oto Bakım Hizmetleri",
        "image"        => $site_icon ? $site_icon : (get_stylesheet_directory_uri() . '/assets/mobilizmir-logo.png'),
        "url"          => home_url('/'),
        "telephone"    => "+" . MI_WHATSAPP_NUMBER,
        "address"      => [
            "@type"           => "PostalAddress",
            // TODO: Gerçek adres bilgisi eklenmeli.
            "addressLocality" => "İzmir",
            "addressCountry" => "TR"
        ],
        "geo"          => [
            "@type"     => "GeoCoordinates",
            "latitude"  => 38.4192,
            "longitude" => 27.1287
        ],
        "areaServed"   => ["İzmir", "Bornova", "Karşıyaka", "Alsancak", "Bayraklı", "Çeşme"],
        "openingHours" => "Mo,Tu,We,Th,Fr,Sa 09:00-19:00",
        "priceRange"   => "$$"
    ];
    echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
});

// --------------------------------------------------------------------------
// 5) Ön yüz JS: scroll reveal, sayaç animasyonu,
//    Öncesi/Sonrası kaydırıcı (.mi-compare) ve SSS akordeonu (.mi-accordion)
// --------------------------------------------------------------------------
add_action('wp_footer', function() {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded", function () {

        /* ---- Scroll Reveal ---- */
        var reveals = document.querySelectorAll(".reveal");
        var revealObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        reveals.forEach(function (el) { revealObserver.observe(el); });

        /* ---- Sayaç Animasyonu ---- */
        var counters = document.querySelectorAll(".counter-value");
        var counterObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var target = parseInt(entry.target.getAttribute("data-target"), 10) || 0;
                    var current = 0;
                    var increment = Math.max(target / 50, 1);
                    var updateCounter = setInterval(function () {
                        current += increment;
                        if (current >= target) {
                            entry.target.innerText = target;
                            clearInterval(updateCounter);
                        } else {
                            entry.target.innerText = Math.ceil(current);
                        }
                    }, 30);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(function (el) { counterObserver.observe(el); });

        /* ---- Öncesi / Sonrası Kaydırıcı (.mi-compare) ---- */
        document.querySelectorAll("[data-mi-compare]").forEach(function (box) {
            var after = box.querySelector(".mi-compare-after");
            var handle = box.querySelector(".mi-compare-handle");
            if (!after || !handle) return;
            var dragging = false;

            function setPosition(clientX) {
                var rect = box.getBoundingClientRect();
                var x = Math.min(Math.max(clientX - rect.left, 0), rect.width);
                var percent = (x / rect.width) * 100;
                after.style.clipPath = "inset(0 0 0 " + percent + "%)";
                handle.style.left = percent + "%";
            }

            box.addEventListener("mousedown", function (e) { dragging = true; setPosition(e.clientX); });
            window.addEventListener("mouseup", function () { dragging = false; });
            window.addEventListener("mousemove", function (e) { if (dragging) setPosition(e.clientX); });

            box.addEventListener("touchstart", function (e) { dragging = true; setPosition(e.touches[0].clientX); }, { passive: true });
            window.addEventListener("touchend", function () { dragging = false; });
            window.addEventListener("touchmove", function (e) { if (dragging) setPosition(e.touches[0].clientX); }, { passive: true });
        });

        /* ---- SSS Akordeonu (.mi-accordion) ---- */
        document.querySelectorAll(".mi-accordion-item").forEach(function (item) {
            var trigger = item.querySelector(".mi-accordion-trigger");
            var panel = item.querySelector(".mi-accordion-panel");
            if (!trigger || !panel) return;
            trigger.addEventListener("click", function () {
                var isOpen = item.classList.contains("is-open");
                // Aynı akordeon grubundaki diğerlerini kapat (tekli açık mod)
                var group = item.closest(".mi-accordion");
                if (group) {
                    group.querySelectorAll(".mi-accordion-item.is-open").forEach(function (openItem) {
                        if (openItem !== item) {
                            openItem.classList.remove("is-open");
                            openItem.querySelector(".mi-accordion-panel").style.maxHeight = null;
                        }
                    });
                }
                if (isOpen) {
                    item.classList.remove("is-open");
                    panel.style.maxHeight = null;
                } else {
                    item.classList.add("is-open");
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        });
    });
    </script>
    <?php
});
