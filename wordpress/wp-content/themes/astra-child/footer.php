<?php
/**
 * The template for displaying the footer.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>
            </div> <!-- ast-container -->
        </div><!-- #content -->

        <footer class="site-footer">
          <div class="mi-footer-grid">
            <div>
              <span class="site-title" style="font-size:1.2rem;">MOBİLİZMİR</span>
              <p style="margin-top:14px;font-size:.9rem;color:#8d8d94;">İzmir genelinde adrese teslim premium mobil araç bakım hizmeti.</p>
              <div class="mi-social-row">
                <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm5 5.5a4.5 4.5 0 1 0 0 9 4.5 4.5 0 0 0 0-9zm5.75-.75a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg></a>
                <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M13 22v-9h3l1-4h-4V6c0-1.1.3-2 2-2h2V0h-3c-3 0-5 1.8-5 5v4H6v4h3v9h4z"/></svg></a>
              </div>
            </div>
            <div>
              <h4>Hizmetler</h4>
              <ul>
                <li><a href="/koltuk-yikama/">Koltuk Yıkama</a></li>
                <li><a href="/pasta-cila/">Pasta Cila</a></li>
                <li><a href="/far-temizligi/">Far Temizliği</a></li>
                <li><a href="/boyasiz-gocuk-duzeltme/">PDR (Göçük Düzeltme)</a></li>
                <li><a href="/periyodik-bakim/">Periyodik Bakım</a></li>
              </ul>
            </div>
            <div>
              <h4>Kurumsal</h4>
              <ul>
                <li><a href="/hakkimizda/">Hakkımızda</a></li>
                <li><a href="/blog/">Blog</a></li>
                <li><a href="/sss/">SSS</a></li>
                <li><a href="/uygulamalarimiz-galeri/">Galeri</a></li>
              </ul>
            </div>
            <div>
              <h4>İletişim</h4>
              <ul>
                <li><a href="https://wa.me/<?php echo esc_attr(MI_WHATSAPP_NUMBER); ?>">0540 187 20 03</a></li>
                <li><a href="mailto:iletisim@mobilizmir.com">iletisim@mobilizmir.com</a></li>
                <li><a href="/iletisim/">İzmir, Türkiye</a></li>
              </ul>
            </div>
          </div>
          <div class="mi-footer-bottom">&copy; <?php echo date('Y'); ?> MOBİLİZMİR — Tüm hakları saklıdır.</div>
        </footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
    </body>
</html>
