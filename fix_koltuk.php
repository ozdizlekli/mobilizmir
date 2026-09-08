<?php
$page = file_get_contents('./wordpress/wp-content/themes/astra-child/page.php');

$gallery_html = <<<HTML
  <!-- KOLTUK YIKAMA DETAY GALERİSİ -->
  <section class="detail-gallery" style="padding: 100px 20px; background: var(--ink);">
    <div class="wrap" style="max-width: 1000px; margin: 0 auto;">
      <h2 class="serif" style="color: var(--gold-bright); text-align: center; margin-bottom: 40px; font-size: 2.5rem;">Kusursuz Detaylar</h2>
      
      <div class="detail-main" id="detailMain" style="width: 100%; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-kumas.jpg'); background-size: cover; background-position: center; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); transition: background-image 0.4s ease;"></div>
      
      <div class="detail-thumbs" style="display: flex; gap: 15px;">
        <div class="d-thumb active" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-kumas.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-kumas.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid var(--gold-bright); opacity: 1; transition: all 0.3s;"></div>
        <div class="d-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-deri.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-deri.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s;"></div>
        <div class="d-thumb" data-img="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-tavan.jpg" style="flex: 1; aspect-ratio: 16/9; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery-tavan.jpg'); background-size: cover; background-position: center; border-radius: 6px; cursor: pointer; border: 2px solid transparent; opacity: 0.5; transition: all 0.3s;"></div>
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
                main.style.backgroundImage = `url('\${t.getAttribute('data-img')}')`;
            });
        });
    });
  </script>
HTML;

// Insert after the scroll event script in koltuk-yikama
$pattern = '/(window\.addEventListener\(\'scroll\',.*?\n\s*\}\);\s*\}\);\s*<\/script>)/s';

// Limit scope to only replace within koltuk-yikama. Best way is to split by periyodik-bakim and replace in the first half.
$parts = explode('<?php elseif ( is_page(\'periyodik-bakim\') ) : ?>', $page);
if (count($parts) == 2) {
    $parts[0] = preg_replace($pattern, "$1\n\n$gallery_html", $parts[0]);
    $page = implode('<?php elseif ( is_page(\'periyodik-bakim\') ) : ?>', $parts);
    file_put_contents('./wordpress/wp-content/themes/astra-child/page.php', $page);
    echo "Koltuk fixed!\n";
} else {
    echo "Could not split page.php correctly!\n";
}
