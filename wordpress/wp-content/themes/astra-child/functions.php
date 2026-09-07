<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

// --------------------------------------------------------------------------
// 1) Ebeveyn ve Çocuk tema stil dosyalarını yükle
// --------------------------------------------------------------------------
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child-style', get_stylesheet_directory_uri() . '/style.css', array('astra-parent-style'), filemtime(get_stylesheet_directory() . '/style.css'));
});

// --------------------------------------------------------------------------
// 2) LocalBusiness Schema (SEO)
// --------------------------------------------------------------------------
add_action('wp_footer', function() {
    $site_icon = get_site_icon_url();
    $schema = [
        "@context"     => "https://schema.org",
        "@type"        => "AutoRepair",
        "name"         => "Mobilİzmir - Mobil Oto Bakım Hizmetleri",
        "image"        => $site_icon ? $site_icon : (get_stylesheet_directory_uri() . '/assets/mobilizmir-logo-new.jpg'),
        "url"          => home_url('/'),
        "telephone"    => "+905401872003",
        "address"      => [
            "@type"           => "PostalAddress",
            "addressLocality" => "İzmir",
            "addressCountry"  => "TR"
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
