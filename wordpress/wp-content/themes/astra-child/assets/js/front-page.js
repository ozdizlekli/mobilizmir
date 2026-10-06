
document.addEventListener("DOMContentLoaded", () => {
    const introSection = document.getElementById("site-intro");
    const introVideo = document.getElementById("intro-video");
    if (introVideo) {
        introVideo.playbackRate = 2.0; // Play 2x faster (4s -> 2s)
    }
    const skipBtn = document.getElementById("skip-intro");

    let isFading = false;
    function removeIntro() {
        if (isFading) return;
        isFading = true;
        introSection.style.opacity = "0";
        setTimeout(() => {
            introSection.style.display = "none";
            // Ensure main video is playing
            const mainVideo = document.querySelector(".home-hero-bg video");
            if (mainVideo) {
                mainVideo.play().catch(e => console.log(e));
            }
        }, 1500); // 1.5 second smooth crossfade
    }

    if (introVideo) {
        // As video is playing, trigger the fade exactly 0.5 real-time seconds (1.0 media seconds at 2x speed) before it ends
        introVideo.addEventListener("timeupdate", () => {
            if (introVideo.duration && (introVideo.duration - introVideo.currentTime <= 1.0)) {
                removeIntro();
            }
        });
        
        // Fallback just in case
        introVideo.addEventListener("ended", removeIntro);
    }
    
    if (skipBtn) {
        // If user clicks skip
        skipBtn.addEventListener("click", removeIntro);
    }
    
    // Fallback: If video takes too long or errors
    setTimeout(() => {
        if (introSection.style.display !== "none" && (!introVideo || introVideo.paused || introVideo.ended)) {
            removeIntro();
        }
    }, 15000); // Max 15 sec fallback
});


document.addEventListener('DOMContentLoaded', () => {
    let heroCarName = '';
    const heroIssues = new Set();
    
    const hCarBtns = document.querySelectorAll('.hero-configurator .car-type-btn');
    const hIssueBtns = document.querySelectorAll('.hero-configurator .issue-btn');
    const hWaBtn = document.getElementById('hero-whatsapp-btn');
    
    function updateHeroSummary() {
        if(heroCarName !== '' && heroIssues.size > 0) {
            hWaBtn.style.pointerEvents = 'auto';
            hWaBtn.style.opacity = '1';
        } else {
            hWaBtn.style.pointerEvents = 'none';
            hWaBtn.style.opacity = '0.5';
        }
        
        if(heroCarName !== '' && heroIssues.size > 0) {
            let issuesList = Array.from(heroIssues).join(', ');
            let msg = `Merhaba, aracım için size özel bir paket oluşturdum.\n\nAraç Tipi: ${heroCarName}\nİhtiyacım Olan Hizmetler: ${issuesList}\n\nBu işlemler için fiyat teklifi ve randevu müsaitliği öğrenebilir miyim?`;
            hWaBtn.href = `https://wa.me/905533459073?text=${encodeURIComponent(msg)}`;
        }
    }
    
    hCarBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            hCarBtns.forEach(b => b.classList.remove('selected'));
            btn.classList.add('selected');
            heroCarName = btn.getAttribute('data-name');
            updateHeroSummary();
        });
    });
    
    hIssueBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const name = btn.getAttribute('data-name');
            if(btn.classList.contains('selected')) {
                btn.classList.remove('selected');
                heroIssues.delete(name);
            } else {
                btn.classList.add('selected');
                heroIssues.add(name);
            }
            updateHeroSummary();
        });
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const serviceFilterButtons = document.querySelectorAll('[data-service-filter]');
    const serviceCards = document.querySelectorAll('.service-card[data-service-type]');

    serviceFilterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const selectedFilter = button.dataset.serviceFilter;

            serviceFilterButtons.forEach((item) => {
                const isActive = item === button;
                item.classList.toggle('active', isActive);
                item.setAttribute('aria-selected', String(isActive));
            });

            serviceCards.forEach((card) => {
                const shouldShow = selectedFilter === 'all' || card.dataset.serviceType === selectedFilter;
                card.classList.toggle('is-hidden', !shouldShow);
            });
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const hThumbs = document.querySelectorAll('.h-thumb');
    const hMain = document.getElementById('homeMain');
    if(!hMain || hThumbs.length === 0) return;
    
    hThumbs.forEach(t => {
        t.addEventListener('click', () => {
            hThumbs.forEach(th => {
                th.style.borderColor = 'transparent';
                th.style.opacity = '0.5';
            });
            t.style.borderColor = 'var(--gold-bright)';
            t.style.opacity = '1';
            hMain.style.backgroundImage = `url('${t.getAttribute('data-img')}')`;
        });
    });
});
