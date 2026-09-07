<?php
// Enqueue Parent and Child Styles
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/style.css', array('astra-parent-style'), '1.0.0');
    wp_enqueue_style('mobilizmir-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=Inter:wght@300;400;500;600;700&display=swap', [], null);
});

// WhatsApp Sticky Button & JS Effects
add_action('wp_footer', function() {
?>
<a href="https://wa.me/905401872003" class="wa-sticky" target="_blank" rel="noopener" aria-label="WhatsApp">
    <svg viewBox="0 0 32 32"><path d="M16.004 0h-.008C7.174 0 0 7.176 0 16.004c0 3.5 1.132 6.744 3.054 9.378L1.054 31.28l6.156-1.97C9.776 30.962 12.766 32 16.004 32 24.826 32 32 24.826 32 16.004 32 7.176 24.826 0 16.004 0zm9.084 22.618c-.378 1.064-2.202 1.98-3.038 2.1-.836.12-1.91.17-3.08-.194-.708-.222-1.616-.516-2.78-1.014-4.882-2.088-8.066-7.024-8.31-7.352-.244-.328-1.996-2.654-1.996-5.062 0-2.408 1.264-3.594 1.712-4.084.45-.49 .978-.612 1.302-.612.328 0 .652.004.938.016.302.014.706-.114 1.104.842.408.978 1.386 3.386 1.508 3.63.12.244.202.53.04.856-.162.328-.244.53-.49.816-.244.286-.514.64-.734.858-.244.244-.498.508-.214.998.284.49 1.264 2.084 2.714 3.376 1.866 1.662 3.436 2.176 3.926 2.42.49.244.776.204 1.062-.122.284-.328 1.224-1.428 1.55-1.918.326-.49.652-.408 1.1-.244.45.162 2.854 1.346 3.344 1.59.49.244.816.368.936.57.122.204.122 1.164-.256 2.228z"/></svg>
</a>
<?php
});

// Clean up Astra Footer
add_filter('astra_footer_copyright', function() { return '&copy; 2026 MOBİLİZMİR &mdash; Tüm hakları saklıdır.'; });

// Inject LocalBusiness Schema
add_action('wp_footer', function() {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "AutoRepair",
        "name" => "Mobilİzmir - Mobil Oto Bakım Hizmetleri",
        "image" => "",
        "url" => "http://localhost:8000",
        "telephone" => "+905401872003",
        "address" => [
            "@type" => "PostalAddress",
            "addressLocality" => "İzmir",
            "addressCountry" => "TR"
        ],
        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => 38.4192,
            "longitude" => 27.1287
        ],
        "openingHours" => "Mo,Tu,We,Th,Fr,Sa 09:00-19:00",
        "priceRange" => "$$"
    ];
    echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
});
