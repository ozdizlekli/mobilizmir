<?php
/**
 * Alt Sayfa Şablonu
 */
get_header(); ?>

<?php if ( is_page('far-temizligi') ) : ?>
  <!-- FAR TEMİZLİĞİ ÖZEL AÇILIŞ (OTOMATİK GEÇİŞ) -->
  <section class="page-hero" style="padding: 15px 0 15px; border-bottom: none;">
    <div class="wrap">
      <h1 class="serif" style="font-size: 1.1rem; margin: 0; color: var(--gold-bright); letter-spacing: 0.5px; text-transform: uppercase;"><?php the_title(); ?></h1>
    </div>
  </section>

  <section class="split-hero" id="splitHero">
    <div class="split-layer split-dirty"></div>
    <div class="split-layer split-clean"></div>
    <div class="split-divider"></div>
    
  </section>
  <!-- FAR TEMİZLİĞİ DETAY GALERİSİ -->
  <section class="detail-gallery" style="padding: 100px 20px; background: var(--ink);">
    <div class="wrap" style="max-width: 1000px; margin: 0 auto;">
      <h2 class="serif" style="color: var(--gold-bright); text-align: center; margin-bottom: 40px; font-size: 2.5rem;">Kesintisiz Aydınlatma Detayları</h2>
      
      <div class="detail-main" id="farMain" style="width: 100%; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-kristal.jpg'); background-size: cover; background-position: center; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); transition: background-image 0.4s ease;"></div>
      
      <div class="detail-thumbs" style="display: flex; gap: 15px;">
        <div class="f-thumb active" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-kristal.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-kristal.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid var(--gold-bright); opacity: 1; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Kristal Netlik</span></div>
        
        <div class="f-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-isik.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-isik.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Güçlü Aydınlatma</span></div>
        
        <div class="f-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-yuzey.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/far-yuzey.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Kusursuz Yüzey</span></div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const fThumbs = document.querySelectorAll('.f-thumb');
        const fMain = document.getElementById('farMain');
        if(!fMain || fThumbs.length === 0) return;
        
        fThumbs.forEach(t => {
            t.addEventListener('click', () => {
                fThumbs.forEach(th => {
                    th.style.borderColor = 'transparent';
                    th.style.opacity = '0.5';
                });
                t.style.borderColor = 'var(--gold-bright)';
                t.style.opacity = '1';
                fMain.style.backgroundImage = `url('${t.getAttribute('data-img')}')`;
            });
        });
    });
  </script>
<?php elseif ( is_page('boyasiz-gocuk-duzeltme') ) : ?>
  <!-- PDR HOLOGRAFİK HUD HERO -->
  <section class="page-hero" style="padding: 15px 0 15px; border-bottom: none;">
    <div class="wrap">
      <h1 class="serif" style="font-size: 1.1rem; margin: 0; color: var(--gold-bright); letter-spacing: 0.5px; text-transform: uppercase;"><?php the_title(); ?></h1>
    </div>
  </section>

  <section class="hud-hero" id="hudHero">
    <div class="hud-bg"></div>
    <div class="hud-overlay"></div>
    <div class="hud-scanline"></div>
    
    <div class="hud-point dir-ul" style="top: 25%; left: 35%;">
        <div class="hud-dot"></div>
        <div class="hud-line"></div>
        <div class="hud-box">
            <span class="hud-label">Boya Kalınlığı</span>
            <span class="hud-value">%<span class="hud-counter" data-target="100">0</span></span>
            <span class="hud-sub">Orijinal Koruma</span>
        </div>
    </div>

    <div class="hud-point dir-ur" style="top: 40%; left: 45%;">
        <div class="hud-dot"></div>
        <div class="hud-line"></div>
        <div class="hud-box">
            <span class="hud-label">Tramer Kaydı</span>
            <span class="hud-value">YOK</span>
            <span class="hud-sub">Sıfır Değer Kaybı</span>
        </div>
    </div>

    <div class="hud-point dir-dr" style="top: 65%; left: 60%;">
        <div class="hud-dot"></div>
        <div class="hud-line"></div>
        <div class="hud-box">
            <span class="hud-label">Kimyasal / Macun</span>
            <span class="hud-value">%<span class="hud-counter" data-target="0">100</span></span>
            <span class="hud-sub">Kusursuz İşlem</span>
        </div>
    </div>

    
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const hudHero = document.getElementById('hudHero');
      if(!hudHero) return;

      setTimeout(() => {
        // Çizgileri çiz
        const lines = document.querySelectorAll('.hud-line');
        lines.forEach(l => l.classList.add('drawn'));
        
        // Rakamları say (Kutu görünür olduktan sonra)
        setTimeout(() => {
          const counters = document.querySelectorAll('.hud-counter');
          counters.forEach(c => {
              let target = parseInt(c.getAttribute('data-target'));
              let current = parseInt(c.innerText);
              if (current === target) return;
              
              let inc = target > current ? 2 : -2;
              let timer = setInterval(() => {
                  current += inc;
                  if((inc > 0 && current >= target) || (inc < 0 && current <= target)) {
                      current = target;
                      clearInterval(timer);
                  }
                  c.innerText = current;
              }, 30);
          });
        }, 500); // Kutu animasyon süresini bekle

      }, 300); // Sayfa açıldıktan kısa süre sonra başla
    });
  </script>
  <!-- PDR DETAY GALERİSİ -->
  <section class="detail-gallery" style="padding: 100px 20px; background: var(--ink);">
    <div class="wrap" style="max-width: 1000px; margin: 0 auto;">
      <h2 class="serif" style="color: var(--gold-bright); text-align: center; margin-bottom: 40px; font-size: 2.5rem;">Cerrahi Müdahale Detayları</h2>
      
      <div class="detail-main" id="pdrMain" style="width: 100%; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-orijinal.jpg'); background-size: cover; background-position: center; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); transition: background-image 0.4s ease;"></div>
      
      <div class="detail-thumbs" style="display: flex; gap: 15px;">
        <div class="pdr-thumb active" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-orijinal.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-orijinal.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid var(--gold-bright); opacity: 1; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Orijinal Boya</span></div>
        
        <div class="pdr-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-yansima.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-yansima.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Kusursuz Yansıma</span></div>
        
        <div class="pdr-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-keskin.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pdr-keskin.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Keskin Hatlar</span></div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const pdrThumbs = document.querySelectorAll('.pdr-thumb');
        const pdrMain = document.getElementById('pdrMain');
        if(!pdrMain || pdrThumbs.length === 0) return;
        
        pdrThumbs.forEach(t => {
            t.addEventListener('click', () => {
                pdrThumbs.forEach(th => {
                    th.style.borderColor = 'transparent';
                    th.style.opacity = '0.5';
                });
                t.style.borderColor = 'var(--gold-bright)';
                t.style.opacity = '1';
                pdrMain.style.backgroundImage = `url('${t.getAttribute('data-img')}')`;
            });
        });
    });
  </script>
<?php elseif ( is_page('koltuk-yikama') || is_page('detayli-ic-kuafor') ) : ?>
    <section class="page-hero" style="padding: 15px 0 15px; border-bottom: none;">
    <div class="wrap">
      <h1 class="serif" style="font-size: 1.1rem; margin: 0; color: var(--gold-bright); letter-spacing: 0.5px; text-transform: uppercase;"><?php the_title(); ?></h1>
    </div>
  </section>
  <!-- İÇ KUAFÖR ANATOMİ HERO -->
  <section class="anatomy-hero" id="anatomyHero">
    <div class="anatomy-sticky">
        <div class="anat-layer anat-clean"></div>
        <div class="anat-layer anat-steam" id="anatSteam"></div>
        <div class="anat-layer anat-dirt" id="anatDirt"></div>

        <div class="anat-step step-1 active" id="step1">
            <h2 class="serif">1. Yüzeydeki Gizli Tehditler</h2>
            <p>Zamanla perfore (delikli) deriye işleyen ter, toz ve bakteriler yüzeyi matlaştırır ve dokuyu sertleştirir.</p>
        </div>
        <div class="anat-step step-2" id="step2">
            <h2 class="serif">2. Anti-Bakteriyel Buhar Şoku</h2>
            <p>150 derece kuru buhar ve özel solüsyonlarla gözeneklerdeki kirler sıvılaştırılarak yüzeye kusulur.</p>
        </div>
        <div class="anat-step step-3" id="step3">
            <h2 class="serif">3. Fabrika Çıkışı Matlık</h2>
            <p>Vakumla çekilen kirlerin ardından, derinin nefes almasını sağlayan o ilk günkü kusursuz mat ve temiz doku ortaya çıkar.</p>
        </div>
        
        <div class="anat-scroll-hint">
            <div class="icon">▼</div>
            Katmanları Keşfetmek İçin Kaydırın
        </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const hero = document.getElementById('anatomyHero');
        if(!hero) return;

        const lDirt = document.getElementById('anatDirt');
        const lSteam = document.getElementById('anatSteam');
        const s1 = document.getElementById('step1');
        const s2 = document.getElementById('step2');
        const s3 = document.getElementById('step3');

        window.addEventListener('scroll', () => {
            const rect = hero.getBoundingClientRect();
            const totalScroll = rect.height - window.innerHeight;
            let progress = -rect.top / totalScroll;
            
            if (progress < 0) progress = 0;
            if (progress > 1) progress = 1;

            const scale = 1 + (progress * 0.15); // Hafif zoom efekti
            document.querySelectorAll('.anat-layer').forEach(l => {
                l.style.transform = `scale(${scale})`;
            });

            // Asama 1: Kirli -> Buhar
            if (progress < 0.33) {
                let local = progress / 0.33;
                lDirt.style.opacity = 1 - local;
                lSteam.style.opacity = local;
                
                s1.classList.add('active');
                s2.classList.remove('active');
                s3.classList.remove('active');
            }
            // Asama 2: Buhar (Zirve)
            else if (progress < 0.66) {
                let local = (progress - 0.33) / 0.33;
                lDirt.style.opacity = 0;
                lSteam.style.opacity = 1; 
                
                s1.classList.remove('active');
                s2.classList.add('active');
                s3.classList.remove('active');
            }
            // Asama 3: Buhar -> Tertemiz
            else {
                let local = (progress - 0.66) / 0.34;
                lDirt.style.opacity = 0;
                lSteam.style.opacity = 1 - local; 
                
                s1.classList.remove('active');
                s2.classList.remove('active');
                s3.classList.add('active');
            }
        });
    });
  </script>

  <!-- KOLTUK YIKAMA DETAY GALERİSİ -->
  <section class="detail-gallery" style="padding: 100px 20px; background: var(--ink);">
    <div class="wrap" style="max-width: 1000px; margin: 0 auto;">
      <h2 class="serif" style="color: var(--gold-bright); text-align: center; margin-bottom: 40px; font-size: 2.5rem;">Kusursuz Detaylar</h2>
      
      <div class="detail-main" id="detailMain" style="width: 100%; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-kumas.jpg'); background-size: cover; background-position: center; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); transition: background-image 0.4s ease;"></div>
      
      <div class="detail-thumbs" style="display: flex; gap: 15px;">
        <div class="d-thumb active" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-kumas.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-kumas.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid var(--gold-bright); opacity: 1; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Kumaş Detayı</span></div>
        <div class="d-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-deri.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-deri.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Deri Temizliği</span></div>
        <div class="d-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-tavan.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-tavan.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Tavan Ferahlığı</span></div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const thumbs = document.querySelectorAll('.d-thumb');
        const main = document.getElementById('detailMain');
        if(!main || thumbs.length === 0) return;
        
        thumbs.forEach(t => {
            t.addEventListener('click', () => {
                thumbs.forEach(th => {
                    th.style.borderColor = 'transparent';
                    th.style.opacity = '0.5';
                });
                t.style.borderColor = 'var(--gold-bright)';
                t.style.opacity = '1';
                main.style.backgroundImage = `url('${t.getAttribute('data-img')}')`;
            });
        });
    });
  </script>

  

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('gallerySlider');
        if (slider) {
            let isDragging = false;
            const updateSlider = (e) => {
                const rect = slider.getBoundingClientRect();
                let clientX = e.clientX;
                if (e.touches && e.touches.length > 0) clientX = e.touches[0].clientX;
                if (clientX === undefined) return;
                
                let x = clientX - rect.left;
                let percent = Math.max(0, Math.min(100, (x / rect.width) * 100));
                slider.style.setProperty('--pos', percent + '%');
            };
            
            slider.addEventListener('mousedown', (e) => { isDragging = true; updateSlider(e); });
            window.addEventListener('mouseup', () => isDragging = false);
            window.addEventListener('mousemove', (e) => { if(isDragging) updateSlider(e); });
            
            slider.addEventListener('touchstart', (e) => { isDragging = true; updateSlider(e); }, {passive: true});
            window.addEventListener('touchend', () => isDragging = false);
            window.addEventListener('touchmove', (e) => { if(isDragging) updateSlider(e); }, {passive: true});
            
            // Thumbnails
            const thumbs = document.querySelectorAll('.g-thumb');
            const gDirty = document.getElementById('gDirty');
            const gClean = document.getElementById('gClean');
            
            thumbs.forEach(t => {
                t.addEventListener('click', () => {
                    thumbs.forEach(th => th.classList.remove('active'));
                    t.classList.add('active');
                    const imgUrl = t.getAttribute('data-img');
                    gDirty.style.backgroundImage = `url('${imgUrl}')`;
                    gClean.style.backgroundImage = `url('${imgUrl}')`;
                });
            });
        }
    });
  </script>
<?php elseif ( is_page('periyodik-bakim') ) : ?>
  <!-- PERİYODİK BAKIM ASMR CİNEMAGRAPH HERO -->
  <section class="page-hero" style="padding: 15px 0 15px; border-bottom: none;">
    <div class="wrap">
      <h1 class="serif" style="font-size: 1.1rem; margin: 0; color: var(--gold-bright); letter-spacing: 0.5px; text-transform: uppercase;"><?php the_title(); ?></h1>
    </div>
  </section>

  <section class="asmr-hero" id="asmrHero">
    <div class="asmr-bg"></div>
    <div class="asmr-glow"></div>
    <div class="asmr-particles" id="asmrParticles"></div>
    
    
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.getElementById('asmrParticles');
        if(!container) return;
        
        // Create 30 golden floating particles
        for(let i=0; i<30; i++) {
            let p = document.createElement('div');
            p.className = 'asmr-particle';
            p.style.left = Math.random() * 100 + '%';
            p.style.animationDuration = (Math.random() * 15 + 10) + 's'; // 10s to 25s very slow
            p.style.animationDelay = (Math.random() * -30) + 's'; // Start at random times
            
            let opacity = Math.random() * 0.6 + 0.2;
            p.style.setProperty('--po', opacity); // Particle opacity
            
            let size = Math.random() * 4 + 1; // 1px to 5px
            p.style.width = size + 'px';
            p.style.height = size + 'px';
            
            container.appendChild(p);
        }
    });
  </script>
  <!-- PERİYODİK BAKIM DETAY GALERİSİ -->
  <section class="detail-gallery" style="padding: 100px 20px; background: var(--ink);">
    <div class="wrap" style="max-width: 1000px; margin: 0 auto;">
      <h2 class="serif" style="color: var(--gold-bright); text-align: center; margin-bottom: 40px; font-size: 2.5rem;">Uzmanlık ve Güven Detayları</h2>
      
      <div class="detail-main" id="bakimMain" style="width: 100%; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-yag.jpg'); background-size: cover; background-position: center; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); transition: background-image 0.4s ease;"></div>
      
      <div class="detail-thumbs" style="display: flex; gap: 15px;">
        <div class="b-thumb active" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-yag.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-yag.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid var(--gold-bright); opacity: 1; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Premium Sentetik Yağ</span></div>
        
        <div class="b-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-parca.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-parca.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Orijinal Parça Kullanımı</span></div>
        
        <div class="b-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-dijital.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bakim-dijital.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Bilgisayarlı Arıza Tespiti</span></div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const bThumbs = document.querySelectorAll('.b-thumb');
        const bMain = document.getElementById('bakimMain');
        if(!bMain || bThumbs.length === 0) return;
        
        bThumbs.forEach(t => {
            t.addEventListener('click', () => {
                bThumbs.forEach(th => {
                    th.style.borderColor = 'transparent';
                    th.style.opacity = '0.5';
                });
                t.style.borderColor = 'var(--gold-bright)';
                t.style.opacity = '1';
                bMain.style.backgroundImage = `url('${t.getAttribute('data-img')}')`;
            });
        });
    });
  </script>
<?php elseif ( is_page('pasta-cila') ) : ?>
  <!-- PASTA CİLA SIVI CAM (OTOMATİK) HERO -->
  <section class="page-hero" style="padding: 15px 0 15px; border-bottom: none;">
    <div class="wrap">
      <h1 class="serif" style="font-size: 1.1rem; margin: 0; color: var(--gold-bright); letter-spacing: 0.5px; text-transform: uppercase;"><?php the_title(); ?></h1>
    </div>
  </section>

  <section class="liquid-hero" id="liquidHero">
    <div class="liquid-bg liquid-dirty"></div>
    <div class="liquid-bg liquid-clean" id="liquidClean"></div>
    <div class="liquid-wave" id="liquidWave"></div>
    
    
  </section>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const clean = document.getElementById('liquidClean');
        const wave = document.getElementById('liquidWave');
        
        if(!clean) return;
        
        // Otomatik başla
        setTimeout(() => {
            clean.style.transition = 'clip-path 3s cubic-bezier(0.4, 0, 0.2, 1)';
            clean.style.clipPath = 'inset(0 0 0% 0)';
            
            wave.style.transition = 'top 3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s';
            wave.style.opacity = '1';
            wave.style.top = '100%';
            
            setTimeout(() => {
                wave.style.opacity = '0';
            }, 3000);
        }, 800); // Sayfa açıldıktan kısa bir süre sonra
    });
  </script>
  <!-- PASTA CİLA DETAY GALERİSİ -->
  <section class="detail-gallery" style="padding: 100px 20px; background: var(--ink);">
    <div class="wrap" style="max-width: 1000px; margin: 0 auto;">
      <h2 class="serif" style="color: var(--gold-bright); text-align: center; margin-bottom: 40px; font-size: 2.5rem;">Göz Alıcı Yansımalar</h2>
      
      <div class="detail-main" id="pastaMain" style="width: 100%; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-ayna.jpg'); background-size: cover; background-position: center; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); transition: background-image 0.4s ease;"></div>
      
      <div class="detail-thumbs" style="display: flex; gap: 15px;">
        <div class="p-thumb active" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-ayna.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-ayna.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid var(--gold-bright); opacity: 1; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Ayna Parlaklığı</span></div>
        
        <div class="p-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-su.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-su.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Su İtici Etki</span></div>
        
        <div class="p-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-metalik.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pasta-metalik.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s; position: relative; overflow: hidden;"><span style="position: absolute; bottom: 5px; left: 5px; background: rgba(0,0,0,0.7); color: #fff; padding: 2px 5px; border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.65rem; letter-spacing: 1px; text-transform: uppercase; pointer-events: none;">Kusursuz Yansıma</span></div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const pThumbs = document.querySelectorAll('.p-thumb');
        const pMain = document.getElementById('pastaMain');
        if(!pMain || pThumbs.length === 0) return;
        
        pThumbs.forEach(t => {
            t.addEventListener('click', () => {
                pThumbs.forEach(th => {
                    th.style.borderColor = 'transparent';
                    th.style.opacity = '0.5';
                });
                t.style.borderColor = 'var(--gold-bright)';
                t.style.opacity = '1';
                pMain.style.backgroundImage = `url('${t.getAttribute('data-img')}')`;
            });
        });
    });
  </script>
<?php else : ?>
  <!-- NORMAL PAGE HERO -->
  <section class="page-hero">
    <div class="wrap">
      
      <h1 class="serif"><?php the_title(); ?></h1>
    </div>
  </section>
<?php endif; ?>

<section class="page-body">
  <div class="wrap" style="max-width:820px;">
    <?php while (have_posts()): the_post(); ?>
      
      <div class="entry-content styled-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>

    <div class="page-cta">
      <h3 class="serif" style="margin-bottom:20px;">Aracınız için randevu almaya hazır mısınız?</h3>
      <a href="https://wa.me/905533459073?text=Merhaba,%20<?php echo rawurlencode(get_the_title()); ?>%20sayfanızı%20inceledim.%20Bu%20hizmetinizle%20ilgili%20randevu%20almak%20istiyorum." class="btn solid">Randevu Al</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
