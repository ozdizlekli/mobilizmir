<?php
/*
Plugin Name: MobilIzmir Premium Design
Version: 3.0
*/

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('mobilizmir-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=Inter:wght@300;400;500;600;700&display=swap', [], null);
});

add_action('wp_head', function() {
?>
<style>
*, *::before, *::after { box-sizing: border-box; }

body, html {
    margin: 0; padding: 0;
    background: #0a0a0a !important;
    color: #c8c8c8 !important;
    font-family: 'Inter', -apple-system, sans-serif !important;
    line-height: 1.8; overflow-x: hidden;
}

/* ===== HEADER: Single row, flex, clean ===== */
.site-header, .ast-primary-header-bar, header.site-header {
    background: rgba(10,10,10,0.92) !important;
    backdrop-filter: blur(15px) !important;
    -webkit-backdrop-filter: blur(15px) !important;
    border-bottom: 1px solid rgba(212,175,55,0.15) !important;
    position: sticky !important; top: 0 !important;
    z-index: 1000 !important;
}
.ast-primary-header-bar .site-primary-header-wrap,
.ast-primary-header-bar .ast-builder-grid-row {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    flex-direction: row !important;
    max-width: 1200px; margin: 0 auto;
    padding: 0 30px !important;
    min-height: 70px;
}
.ast-builder-grid-row .ast-grid-common-col {
    display: flex !important; align-items: center !important;
}
.site-title, .site-title a, .ast-site-identity .site-title a {
    font-family: 'Playfair Display', serif !important;
    font-size: 1.5rem !important; font-weight: 900 !important;
    color: #D4AF37 !important; text-transform: uppercase !important;
    letter-spacing: 3px !important; text-decoration: none !important;
    white-space: nowrap !important;
}
.main-header-menu, .ast-builder-menu-1 .main-header-menu,
.ast-builder-menu-1 {
    display: flex !important; align-items: center !important;
    gap: 0 !important;
}
.main-header-menu .menu-item, .ast-builder-menu-1 .menu-item {
    display: inline-flex !important;
}
.main-header-menu a, .ast-builder-menu-1 a {
    color: #b0b0b0 !important; font-weight: 400 !important;
    font-size: 0.85rem !important; letter-spacing: 1.5px !important;
    text-transform: uppercase !important; text-decoration: none !important;
    padding: 8px 14px !important; transition: color 0.3s ease !important;
    white-space: nowrap !important;
}
.main-header-menu a:hover, .ast-builder-menu-1 a:hover {
    color: #D4AF37 !important;
}
.ast-builder-header-row, .ast-header-break-point .ast-builder-header-row {
    flex-direction: row !important;
}

/* ===== HIDE PAGE TITLES ===== */
.page .entry-header, .page-header { display: none !important; }

/* ===== GENERAL TYPOGRAPHY ===== */
h1, h2, h3, h4, h5, h6 {
    font-family: 'Playfair Display', serif !important;
    color: #D4AF37 !important; font-weight: 700 !important;
}
p, li, span, div { color: #c0c0c0; }
strong { color: #D4AF37 !important; }

/* ===== GOLD DIVIDER ===== */
.gold-line {
    width: 60px; height: 2px;
    background: #D4AF37; margin: 25px auto; border: none;
}
.gold-line-left {
    width: 60px; height: 2px;
    background: #D4AF37; margin: 20px 0; border: none;
}

/* ===== HERO SECTION ===== */
.hero-section {
    min-height: 80vh;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    text-align: center; padding: 100px 30px;
    background: linear-gradient(170deg, #0d0d0d 0%, #111118 40%, #0d0d0d 100%);
    position: relative;
}
.hero-section::after {
    content: '';
    position: absolute; bottom: 0; left: 0; right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(212,175,55,0.3), transparent);
}

/* ===== CTA BUTTONS ===== */
.wp-block-button__link, a.wp-block-button__link {
    background: #D4AF37 !important;
    color: #0a0a0a !important;
    font-family: 'Inter', sans-serif !important;
    font-weight: 600 !important; font-size: 0.9rem !important;
    text-transform: uppercase !important; letter-spacing: 2px !important;
    border: none !important; border-radius: 0 !important;
    padding: 18px 50px !important;
    transition: all 0.3s ease !important;
    text-decoration: none !important; display: inline-block;
}
.wp-block-button__link:hover, a.wp-block-button__link:hover {
    background: #fff !important; color: #0a0a0a !important;
}

/* ===== SERVICE CARDS ===== */
.wp-block-columns {
    gap: 30px !important; margin-bottom: 30px !important;
}
.wp-block-column {
    background: #141414 !important;
    border: 1px solid #1e1e1e !important;
    border-radius: 4px !important;
    padding: 45px 35px !important;
    transition: all 0.4s ease !important;
    position: relative; overflow: hidden;
}
.wp-block-column::after {
    content: '';
    position: absolute; bottom: 0; left: 0;
    width: 0; height: 2px;
    background: #D4AF37;
    transition: width 0.4s ease;
}
.wp-block-column:hover::after { width: 100%; }
.wp-block-column:hover {
    border-color: #2a2a2a !important;
    transform: translateY(-5px) !important;
    box-shadow: 0 15px 40px rgba(0,0,0,0.3) !important;
}
.wp-block-column h3, .wp-block-column h4 {
    font-size: 1.15rem !important; margin-bottom: 12px !important;
    letter-spacing: 1px !important;
}
.wp-block-column p {
    color: #888 !important; font-size: 0.92rem !important;
    line-height: 1.7 !important;
}

/* ===== STATS ROW ===== */
.stats-row {
    display: flex; justify-content: center;
    gap: 60px; flex-wrap: wrap;
    margin: 60px 0; padding: 50px 30px;
    border-top: 1px solid #1a1a1a;
    border-bottom: 1px solid #1a1a1a;
}
.stat-item { text-align: center; }
.stat-number {
    font-family: 'Playfair Display', serif;
    font-size: 2.8rem; font-weight: 900;
    color: #D4AF37; display: block; line-height: 1;
}
.stat-label {
    font-size: 0.75rem; color: #666;
    text-transform: uppercase; letter-spacing: 3px;
    margin-top: 10px; display: block;
}

/* ===== SERVICE PAGE HERO ===== */
.service-hero {
    text-align: center; padding: 80px 30px 60px;
    border-bottom: 1px solid #1a1a1a;
}

/* ===== LISTS ===== */
.wp-block-list, ul { list-style: none !important; padding: 0 !important; }
.wp-block-list li, ul li {
    padding: 15px 0 15px 20px !important;
    border-bottom: 1px solid #1a1a1a;
    color: #aaa !important; position: relative;
}
.wp-block-list li::before, ul li::before {
    content: ''; position: absolute; left: 0; top: 22px;
    width: 6px; height: 6px;
    background: #D4AF37; border-radius: 50%;
}
.wp-block-list li strong { color: #D4AF37 !important; }

/* ===== SCROLL ANIMATION ===== */
.fade-up {
    opacity: 0; transform: translateY(30px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
.fade-up.visible { opacity: 1; transform: translateY(0); }

/* ===== WHATSAPP STICKY ===== */
.wa-sticky {
    position: fixed !important; bottom: 30px !important; right: 30px !important;
    background: #25D366 !important;
    width: 60px !important; height: 60px !important;
    border-radius: 50% !important;
    display: flex !important; align-items: center !important; justify-content: center !important;
    box-shadow: 0 4px 15px rgba(37,211,102,0.3) !important;
    z-index: 9999 !important; transition: all 0.3s ease !important;
    text-decoration: none !important;
}
.wa-sticky:hover {
    transform: scale(1.08) !important;
    box-shadow: 0 6px 25px rgba(37,211,102,0.5) !important;
}
.wa-sticky svg { width: 30px !important; height: 30px !important; fill: white !important; }

/* ===== FOOTER ===== */
.site-footer, .ast-builder-footer-wrap, .site-info,
.ast-footer-copyright, footer, .ast-small-footer {
    background: #050505 !important;
    border-top: 1px solid #1a1a1a !important;
    padding: 25px 0 !important; text-align: center !important;
}
.ast-footer-copyright, .ast-footer-copyright p,
.site-footer p, .site-info p {
    color: #555 !important; font-size: 0.8rem !important;
    letter-spacing: 1px !important;
}

/* ===== LAYOUT ===== */
.ast-container, .site-content .ast-container { max-width: 1100px !important; }
.entry-content { padding: 0 20px !important; }

/* ===== RESPONSIVE ===== */
@media (max-width: 921px) {
    .ast-primary-header-bar .site-primary-header-wrap,
    .ast-primary-header-bar .ast-builder-grid-row {
        flex-direction: column !important; gap: 10px;
        padding: 15px !important;
    }
}
@media (max-width: 768px) {
    .hero-section { min-height: 65vh; padding: 60px 20px; }
    .stats-row { gap: 30px; padding: 30px 15px; }
    .stat-number { font-size: 2rem; }
    .wp-block-column { padding: 30px 25px !important; }
}
</style>
<?php
});

add_action('wp_footer', function() {
?>
<a href="https://wa.me/905401872003" class="wa-sticky" target="_blank" rel="noopener" aria-label="WhatsApp">
    <svg viewBox="0 0 32 32"><path d="M16.004 0h-.008C7.174 0 0 7.176 0 16.004c0 3.5 1.132 6.744 3.054 9.378L1.054 31.28l6.156-1.97C9.776 30.962 12.766 32 16.004 32 24.826 32 32 24.826 32 16.004 32 7.176 24.826 0 16.004 0zm9.084 22.618c-.378 1.064-2.202 1.98-3.038 2.1-.836.12-1.91.17-3.08-.194-.708-.222-1.616-.516-2.78-1.014-4.882-2.088-8.066-7.024-8.31-7.352-.244-.328-1.996-2.654-1.996-5.062 0-2.408 1.264-3.594 1.712-4.084.45-.49.978-.612 1.302-.612.328 0 .652.004.938.016.302.014.706-.114 1.104.842.408.978 1.386 3.386 1.508 3.63.12.244.202.53.04.856-.162.328-.244.53-.49.816-.244.286-.514.64-.734.858-.244.244-.498.508-.214.998.284.49 1.264 2.084 2.714 3.376 1.866 1.662 3.436 2.176 3.926 2.42.49.244.776.204 1.062-.122.284-.328 1.224-1.428 1.55-1.918.326-.49.652-.408 1.1-.244.45.162 2.854 1.346 3.344 1.59.49.244.816.368.936.57.122.204.122 1.164-.256 2.228z"/></svg>
</a>
<script>
(function(){
    var h=document.querySelector('.site-header');
    if(h) window.addEventListener('scroll',function(){
        h.style.boxShadow = window.scrollY > 50 ? '0 2px 20px rgba(0,0,0,0.5)' : 'none';
    });
    var els=document.querySelectorAll('.wp-block-column,.stats-row,.wp-block-buttons');
    els.forEach(function(e){e.classList.add('fade-up')});
    var obs=new IntersectionObserver(function(entries){
        entries.forEach(function(en,i){
            if(en.isIntersecting){
                setTimeout(function(){en.target.classList.add('visible')},i*80);
                obs.unobserve(en.target);
            }
        });
    },{threshold:0.1});
    document.querySelectorAll('.fade-up').forEach(function(e){obs.observe(e)});
})();
</script>
<?php
});

add_filter('astra_footer_copyright', function() { return '&copy; 2026 MOBiLiZMiR &mdash; Tum haklari saklidir.'; });
add_filter('astra_page_layout', function() { return 'no-sidebar'; });
add_action('widgets_init', function() {
    unregister_sidebar('footer-widget-1'); unregister_sidebar('footer-widget-2');
    unregister_sidebar('footer-widget-3'); unregister_sidebar('footer-widget-4');
}, 11);

/* Extra: hide Astra credit via CSS */
add_action('wp_head', function() {
    echo '<style>
    .ast-footer-copyright a[href*="developer.wordpress.org"],
    .ast-footer-copyright a[href*="developer.wordpress.org"] + span,
    .ast-footer-copyright a[href*="developer.wordpress.org"] ~ *,
    .ast-footer-copyright a[href*="developer.wordpress.org"] ~ br,
    .ast-footer-copyright a[href*="developer.wordpress.org"] + *,
    a[href*="developer.wordpress.org"], a[href*="developer.wordpress.org"] ~ *,
    a[href*="developer.wordpress.org"] + *,
    .ast-footer-html a[href*="developer.wordpress.org"],
    .ast-footer-html a[href*="developer.wordpress.org"] ~ *,
    .ast-footer-html a[href*="wpastra.com"],
    .ast-footer-html a[href*="wpastra.com"] ~ *,
    a[href*="wpastra.com"], a[href*="wpastra.com"] ~ *,
    .ast-row .ast-builder-footer-grid-columns .site-below-footer-wrap,
    .ast-builder-footer-grid-columns .site-footer-section-2 {
        display: none !important;
    }
    </style>';
}, 999);
