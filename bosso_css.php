<?php
$css = file_get_contents('./wordpress/wp-content/themes/astra-child/style.css');

$new_css = "
/* ======== BOSSO GARAGE VIBE UPDATES ======== */

/* Top Bar */
.top-bar {
    background: rgba(11, 11, 10, 0.8);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255,255,255,0.05);
    padding: 8px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.8rem;
    color: var(--stone);
    z-index: 1000;
    position: relative;
}
.top-bar .tb-left, .top-bar .tb-right {
    display: flex;
    align-items: center;
    gap: 8px;
}
.top-bar svg { width: 14px; height: 14px; fill: var(--gold); }

/* Update Navbar */
#site-header {
    background: linear-gradient(to bottom, rgba(11,11,10,0.9) 0%, rgba(11,11,10,0) 100%);
    border-bottom: none;
    padding: 15px 40px;
}
.nav-links { gap: 40px; }

/* Cursive Font for Hero */
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
.cursive-subtitle {
    font-family: 'Great Vibes', cursive;
    color: var(--gold-bright);
    font-size: 2.5rem;
    margin-top: -10px;
    margin-bottom: 30px;
    transform: rotate(-2deg);
}

/* Hero Buttons */
.hero-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 20px;
}
.hero-buttons .btn {
    padding: 15px 35px;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
}
.hero-buttons .btn.primary {
    background: var(--gold);
    color: var(--ink);
}
.hero-buttons .btn.secondary {
    background: #fff;
    color: var(--ink);
}

/* Scroll Reveal Animations */
.reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}
.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

/* Infinite Marquee Gallery */
.marquee-wrapper {
    overflow: hidden;
    width: 100%;
    padding: 20px 0;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.marquee-track {
    display: flex;
    width: max-content;
    gap: 20px;
}
.marquee-track.left {
    animation: scrollLeft 30s linear infinite;
}
.marquee-track.right {
    animation: scrollRight 30s linear infinite;
}
.marquee-item {
    width: 400px;
    height: 250px;
    border-radius: 12px;
    overflow: hidden;
    flex-shrink: 0;
}
.marquee-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
@keyframes scrollLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
@keyframes scrollRight {
    0% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
}

/* Floating Footer */
.site-footer-wrapper {
    padding: 40px 20px;
    background: var(--ink);
}
.floating-footer {
    background: #111111;
    border-radius: 24px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 40px 30px 40px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.5);
}
.ff-top {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
    gap: 40px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    padding-bottom: 40px;
    margin-bottom: 30px;
}
.ff-col h4 {
    color: #fff;
    font-size: 1.1rem;
    margin-bottom: 20px;
    font-weight: 500;
}
.ff-col ul { list-style: none; padding: 0; margin: 0; }
.ff-col ul li { margin-bottom: 12px; }
.ff-col ul li a { color: var(--stone); text-decoration: none; transition: 0.3s; }
.ff-col ul li a:hover { color: var(--gold); }
.ff-col p { color: var(--stone); font-size: 0.9rem; line-height: 1.6; }
.ff-socials { display: flex; gap: 15px; margin-top: 20px; }
.ff-socials a { 
    width: 40px; height: 40px; border-radius: 50%; 
    border: 1px solid rgba(255,255,255,0.1); 
    display: flex; align-items: center; justify-content: center;
    transition: 0.3s;
}
.ff-socials a:hover { border-color: var(--gold); }
.ff-socials svg { width: 18px; height: 18px; fill: #fff; }
.ff-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--stone-dim);
    font-size: 0.85rem;
}
@media (max-width: 768px) {
    .ff-top { grid-template-columns: 1fr; gap: 30px; }
    .ff-bottom { flex-direction: column; gap: 15px; text-align: center; }
    .top-bar { display: none; }
}
";

file_put_contents('./wordpress/wp-content/themes/astra-child/style.css', $css . "\n" . $new_css);
echo "CSS Updated.\n";
