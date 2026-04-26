<?php
/**
 * The footer for our theme
 *
 * @package Contenly_Theme
 * @since 1.0.0
 */
?>
<?php $contact = function_exists('contenly_get_contact_details') ? contenly_get_contact_details() : []; ?>
<?php $office_address = isset($contact['office_1']) ? $contact['office_1'] : 'Jakarta, Indonesia'; ?>
<?php $business_hours = function_exists('contenly_localize_business_hours') ? contenly_localize_business_hours($contact['hours'] ?? '') : ($contact['hours'] ?? 'Senin–Sabtu: 09:00–18:00'); ?>
<?php $contact_page_url = function_exists('contenly_localized_url') ? contenly_localized_url('/contact/#contact-form-start') : home_url('/contact/#contact-form-start'); ?>
<?php $about_page_url = function_exists('contenly_localized_url') ? contenly_localized_url('/about/') : home_url('/about/'); ?>
<?php $blog_page_url = function_exists('contenly_localized_url') ? contenly_localized_url('/blog/') : home_url('/blog/'); ?>
<?php $tour_page_url = function_exists('contenly_localized_url') ? contenly_localized_url('/tour-packages/') : home_url('/tour-packages/'); ?>

    <footer id="colophon" class="site-footer" style="background:linear-gradient(180deg,#355F72 0%, #539294 48%, #355F72 100%) !important; border-top:1px solid rgba(255,255,255,.12) !important; padding:64px 0 24px !important; margin-top:0 !important; clear:both !important; color:#e2e8f0;">
        <div class="site-container" style="display:block !important; height:auto !important;">

            <div style="display:grid; grid-template-columns:1.15fr .85fr 1fr 1fr; gap:28px; margin-bottom:30px; align-items:start;">

                <div>
                    <div style="display:inline-flex; align-items:center; min-height:32px; padding:0 14px; border-radius:999px; background:rgba(255,255,255,.08); color:#D8E8E8; font-size:12px; font-weight:800; letter-spacing:.08em; text-transform:uppercase; margin-bottom:16px;">Ganesha Travel</div>
                    <div style="font-size:2rem; font-weight:800; color:#ffffff; line-height:1; margin-bottom:12px;"><?php bloginfo('name'); ?></div>
                    <p style="margin:0 0 16px; color:rgba(226,232,240,.72); line-height:1.8; font-size:14px; max-width:360px;">
                        <?php echo esc_html(contenly_tr('Partner perjalanan untuk itinerary yang rapi, harga transparan, dan pendampingan yang jelas dari awal sampai trip selesai.', 'A travel partner for well-structured itineraries, transparent pricing, and dependable support from planning to arrival.')); ?>
                    </p>
                </div>

                <div>
                    <h4 style="margin:0 0 14px; font-size:18px; color:#ffffff;"><?php echo esc_html(contenly_tr('Informasi', 'Information')); ?></h4>
                    <ul class="footer-links" style="list-style:none; padding:0; margin:0; display:grid; gap:10px;">
                        <li><a href="<?php echo esc_url($about_page_url); ?>" style="text-decoration:none; color:rgba(226,232,240,.76);"><?php echo esc_html(contenly_tr('Tentang Kami', 'About Us')); ?></a></li>
                        <li><a href="<?php echo esc_url($blog_page_url); ?>" style="text-decoration:none; color:rgba(226,232,240,.76);"><?php echo esc_html(contenly_tr('Blog', 'Blog')); ?></a></li>
                        <li><a href="<?php echo esc_url($tour_page_url); ?>" style="text-decoration:none; color:rgba(226,232,240,.76);"><?php echo esc_html(contenly_tr('Paket Tour', 'Tour Packages')); ?></a></li>
                        <li><a href="<?php echo esc_url($contact_page_url); ?>" style="text-decoration:none; color:rgba(226,232,240,.76);"><?php echo esc_html(contenly_tr('Form Kontak', 'Contact Form')); ?></a></li>
                    </ul>
                </div>

                <div>
                    <h4 style="margin:0 0 14px; font-size:18px; color:#ffffff;"><?php echo esc_html(contenly_tr('Kontak', 'Contact')); ?></h4>
                    <div style="display:grid; gap:12px; color:rgba(226,232,240,.76); font-size:14px; line-height:1.7;">
                        <div>
                            <strong style="display:block; color:#ffffff; margin-bottom:2px;"><?php echo esc_html(contenly_tr('Kantor', 'Office')); ?></strong>
                            <?php echo esc_html(isset($contact['office_1']) ? $contact['office_1'] : 'Jakarta, Indonesia'); ?>
                        </div>
                        <div>
                            <strong style="display:block; color:#ffffff; margin-bottom:2px;"><?php echo esc_html(contenly_tr('Jam Buka', 'Business Hours')); ?></strong>
                            <?php echo esc_html($business_hours); ?>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 style="margin:0 0 14px; font-size:18px; color:#ffffff;"><?php echo esc_html(contenly_tr('Lokasi Kantor', 'Office Location')); ?></h4>
                    <div style="display:grid; gap:12px;">
                        <div style="border:1px solid rgba(255,255,255,.12); border-radius:18px; overflow:hidden; background:#fff; height:220px; box-shadow:0 16px 30px rgba(2,6,23,.18);">
                            <div
                                id="footer-office-map"
                                data-address="<?php echo esc_attr($office_address); ?>"
                                style="width:100%; height:220px; background:linear-gradient(180deg,#f8fafc 0%, #e2e8f0 100%);"></div>
                        </div>
                        <a href="https://maps.google.com/?q=<?php echo rawurlencode($office_address); ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:8px; text-decoration:none; color:#ffffff; font-size:13px; font-weight:700; letter-spacing:.01em;">
                            <span>📍</span>
                            <span><?php echo esc_html(contenly_tr('Buka lokasi di Google Maps', 'Open in Google Maps')); ?></span>
                        </a>
                    </div>
                </div>

            </div>

            <div style="border-top:1px solid rgba(255,255,255,.08); padding-top:16px; text-align:center; color:rgba(226,232,240,.52); font-size:12px; letter-spacing:.04em;">
                <?php echo esc_html(contenly_tr('Copyright © ' . date('Y') . ' ' . get_bloginfo('name') . '. Hak cipta dilindungi.', 'Copyright © ' . date('Y') . ' ' . get_bloginfo('name') . '. All rights reserved.')); ?>
            </div>

        </div>

        <style>
        #colophon .footer-links a{transition:color .2s ease}
        #colophon .footer-links a:hover{color:#539294 !important}
        #footer-office-map .leaflet-control-attribution{font-size:10px}
        #footer-office-map .leaflet-control-zoom a{color:#0f172a !important}
        @media (max-width: 1024px){
            #colophon .site-container > div:first-child{grid-template-columns:1fr 1fr !important}
        }
        @media (max-width: 700px){
            #colophon{padding:38px 0 18px !important}
            #colophon .site-container > div:first-child{grid-template-columns:1fr !important; gap:22px !important}
        }
        </style>
        <script>
        (function(){
            var mapEl = document.getElementById('footer-office-map');
            if (!mapEl || mapEl.dataset.loaded === '1') return;

            var officeAddress = mapEl.getAttribute('data-address') || 'Jakarta, Indonesia';
            var geocodeQueries = [
                officeAddress,
                'Jl Tanah Kusir II Kebayoran Lama Jakarta Selatan',
                'Jl Tanah Kusir Jakarta Selatan',
                'Kebayoran Lama Jakarta Selatan'
            ];

            function loadLeafletAssets() {
                return new Promise(function(resolve, reject) {
                    if (window.L) return resolve(window.L);

                    var cssHref = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
                    if (!document.querySelector('link[data-footer-map-leaflet]')) {
                        var css = document.createElement('link');
                        css.rel = 'stylesheet';
                        css.href = cssHref;
                        css.setAttribute('data-footer-map-leaflet', '1');
                        document.head.appendChild(css);
                    }

                    var script = document.querySelector('script[data-footer-map-leaflet]');
                    if (script) {
                        script.addEventListener('load', function(){ resolve(window.L); }, { once: true });
                        script.addEventListener('error', reject, { once: true });
                        return;
                    }

                    script = document.createElement('script');
                    script.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';
                    script.async = true;
                    script.setAttribute('data-footer-map-leaflet', '1');
                    script.onload = function(){ resolve(window.L); };
                    script.onerror = reject;
                    document.body.appendChild(script);
                });
            }

            function geocodeAddress() {
                var index = 0;
                function next() {
                    if (index >= geocodeQueries.length) return Promise.reject(new Error('geocode_failed'));
                    var query = geocodeQueries[index++];
                    return fetch('https://nominatim.openstreetmap.org/search?format=jsonv2&limit=1&q=' + encodeURIComponent(query), {
                        headers: { 'Accept': 'application/json' }
                    })
                    .then(function(res){ return res.json(); })
                    .then(function(data){
                        if (Array.isArray(data) && data.length && data[0].lat && data[0].lon) {
                            return data[0];
                        }
                        return next();
                    })
                    .catch(function(){ return next(); });
                }
                return next();
            }

            function showFallback() {
                mapEl.innerHTML = '<div style="height:100%;display:flex;align-items:center;justify-content:center;padding:18px;text-align:center;color:#355F72;font-size:13px;font-weight:700;line-height:1.6;background:linear-gradient(180deg,#f8fafc 0%, #e2e8f0 100%);"><?php echo esc_js(contenly_tr('Lokasi belum bisa dimuat otomatis.', 'The map could not load automatically.')); ?><br><a href="https://maps.google.com/?q=' + encodeURIComponent(officeAddress) + '" target="_blank" rel="noopener" style="color:#355F72;text-decoration:underline;"><?php echo esc_js(contenly_tr('Buka lokasi di Google Maps', 'Open in Google Maps')); ?></a></div>';
            }

            loadLeafletAssets()
                .then(function(L){
                    return geocodeAddress().then(function(result){
                        var lat = parseFloat(result.lat);
                        var lon = parseFloat(result.lon);
                        if (!isFinite(lat) || !isFinite(lon)) throw new Error('invalid_coordinates');

                        var map = L.map(mapEl, { scrollWheelZoom: false, zoomControl: true }).setView([lat, lon], 16);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '&copy; OpenStreetMap contributors'
                        }).addTo(map);
                        L.marker([lat, lon]).addTo(map).bindPopup('<strong>Ganesha Travel</strong><br>' + officeAddress).openPopup();
                        mapEl.dataset.loaded = '1';
                        setTimeout(function(){ map.invalidateSize(); }, 200);
                    });
                })
                .catch(function(){
                    showFallback();
                });
        })();
        </script>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
