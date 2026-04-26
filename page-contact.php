<?php
/**
 * Template Name: Contact Page
 */

get_header();
$success = '';
$error = '';
$contact = function_exists('contenly_get_contact_details') ? contenly_get_contact_details() : [];
$active_form = sanitize_key($_POST['form_type'] ?? 'custom-tour');
if (!in_array($active_form, ['contact-admin', 'custom-tour'], true)) {
  $active_form = 'custom-tour';
}

if (isset($_POST['contact_admin_submit']) || isset($_POST['contact_submit'])) {
  $name = sanitize_text_field($_POST['name'] ?? '');
  $email = sanitize_email($_POST['email'] ?? '');
  $phone = sanitize_text_field($_POST['phone'] ?? '');
  $message = sanitize_textarea_field($_POST['message'] ?? '');
  $topic = sanitize_text_field($_POST['topic'] ?? '');
  $active_form = 'contact-admin';

  if (!$name || !$email || !$topic || !$message) {
    $error = 'Mohon lengkapi kolom wajib (nama, email, topik, dan pesan).';
  } elseif (!is_email($email)) {
    $error = 'Format email belum valid.';
  } else {
    $to = get_option('admin_email');
    $subject_line = '[Ganesha Travel] Hubungi Admin - ' . ($topic ?: 'General');
    $headers = ['Content-Type: text/html; charset=UTF-8', 'Reply-To: ' . $email];

    $body = '<h3>Pesan Baru dari Form Hubungi Admin</h3>'
      . '<p><b>Nama:</b> ' . esc_html($name) . '</p>'
      . '<p><b>Email:</b> ' . esc_html($email) . '</p>'
      . '<p><b>No. Telepon:</b> ' . esc_html($phone) . '</p>'
      . '<p><b>Topik:</b> ' . esc_html($topic) . '</p>'
      . '<p><b>Pesan:</b><br>' . nl2br(esc_html($message)) . '</p>';

    if (wp_mail($to, $subject_line, $body, $headers)) {
      $success = 'Terima kasih! Pesan kamu sudah masuk. Tim admin akan review dan respon maksimal 2 jam kerja.';
      $_POST = [];
    } else {
      $error = 'Maaf, sistem email sedang sibuk. Coba lagi beberapa saat ya.';
    }
  }
}

if (isset($_POST['custom_tour_submit'])) {
  $name = sanitize_text_field($_POST['name'] ?? '');
  $email = sanitize_email($_POST['email'] ?? '');
  $phone = sanitize_text_field($_POST['phone'] ?? '');
  $service = sanitize_text_field($_POST['service'] ?? '');
  $destination = sanitize_text_field($_POST['destination'] ?? '');
  $travel_date = sanitize_text_field($_POST['travel_date'] ?? '');
  $pax = sanitize_text_field($_POST['pax'] ?? '');
  $budget = sanitize_text_field($_POST['budget'] ?? '');
  $message = sanitize_textarea_field($_POST['message'] ?? '');
  $active_form = 'custom-tour';

  if (!$name || !$email || !$service || !$message) {
    $error = 'Mohon lengkapi kolom wajib (nama, email, jenis kebutuhan, dan detail kebutuhan).';
  } elseif (!is_email($email)) {
    $error = 'Format email belum valid.';
  } else {
    $to = get_option('admin_email');
    $subject_line = '[Ganesha Travel] Request Custom Tour - ' . ($service ?: 'General');
    $headers = ['Content-Type: text/html; charset=UTF-8', 'Reply-To: ' . $email];

    $body = '<h3>Request Baru dari Form Custom Tour</h3>'
      . '<p><b>Nama:</b> ' . esc_html($name) . '</p>'
      . '<p><b>Email:</b> ' . esc_html($email) . '</p>'
      . '<p><b>No. Telepon:</b> ' . esc_html($phone) . '</p>'
      . '<p><b>Jenis kebutuhan:</b> ' . esc_html($service) . '</p>'
      . '<p><b>Tujuan:</b> ' . esc_html($destination) . '</p>'
      . '<p><b>Tanggal rencana:</b> ' . esc_html($travel_date) . '</p>'
      . '<p><b>Jumlah pax:</b> ' . esc_html($pax) . '</p>'
      . '<p><b>Budget:</b> ' . esc_html($budget) . '</p>'
      . '<p><b>Detail kebutuhan:</b><br>' . nl2br(esc_html($message)) . '</p>';

    if (wp_mail($to, $subject_line, $body, $headers)) {
      $success = 'Terima kasih! Request custom tour kamu sudah masuk. Tim admin akan review dan respon maksimal 2 jam kerja.';
      $_POST = [];
    } else {
      $error = 'Maaf, sistem email sedang sibuk. Coba lagi beberapa saat ya.';
    }
  }
}
?>

<main class="site-main contact-page-v2">
  <section class="ct-hero">
    <div class="site-container ct-hero-inner">
      <p class="ct-eyebrow">Contact</p>
      <h1><?php echo esc_html(contenly_tr('Pilih kebutuhanmu: hubungi admin atau request custom tour.', 'Choose what you need: contact the admin or request a custom tour.')); ?></h1>
      <p class="ct-lead"><?php echo esc_html(contenly_tr('Sekarang form-nya dipisah biar lebih jelas. Kalau cuma mau tanya admin, pakai form singkat. Kalau mau minta itinerary atau paket custom, pakai form request custom tour yang lebih lengkap.', 'The forms are now separated to make everything clearer. If you just want to ask the admin something, use the short form. If you need an itinerary or a custom package, use the more complete custom tour request form.')); ?></p>
      <div class="ct-proof-row">
        <span><?php echo esc_html(contenly_tr('Respon maks. 2 jam kerja', 'Response within 2 business hours max')); ?></span>
        <span><?php echo esc_html(contenly_tr('Direview langsung oleh admin', 'Reviewed directly by the admin')); ?></span>
        <span><?php echo esc_html(contenly_tr('Flow lebih rapi sesuai kebutuhan', 'A clearer flow based on your needs')); ?></span>
      </div>
    </div>
  </section>

  <section class="ct-section">
    <div class="site-container ct-grid">
      <article class="ct-card form-card" id="contact-form-start">
        <div class="ct-form-intro">
          <span class="ct-form-kicker"><?php echo esc_html(contenly_tr('Pilih form', 'Choose a form')); ?></span>
          <h2><?php echo esc_html(contenly_tr('Form kontak & request trip', 'Contact form & trip request')); ?></h2>
          <p class="sub"><?php echo esc_html(contenly_tr('Pilih dulu jenis form yang kamu butuhkan. Form admin cocok buat pertanyaan umum. Form custom tour cocok buat request itinerary, paket, atau kebutuhan trip yang lebih detail.', 'Choose the form type you need first. The admin form is suitable for general questions. The custom tour form is better for itinerary requests, packages, or more detailed travel needs.')); ?></p>
        </div>

        <div class="ct-form-switch" role="tablist" aria-label="Pilih jenis form">
          <button type="button" class="ct-switch-btn <?php echo $active_form === 'contact-admin' ? 'is-active' : ''; ?>" data-target="contact-admin" aria-pressed="<?php echo $active_form === 'contact-admin' ? 'true' : 'false'; ?>"><?php echo esc_html(contenly_tr('Hubungi Admin', 'Contact Admin')); ?></button>
          <button type="button" class="ct-switch-btn <?php echo $active_form === 'custom-tour' ? 'is-active' : ''; ?>" data-target="custom-tour" aria-pressed="<?php echo $active_form === 'custom-tour' ? 'true' : 'false'; ?>"><?php echo esc_html(contenly_tr('Request Custom Tour', 'Request Custom Tour')); ?></button>
        </div>

        <?php if ($success): ?><div class="alert ok"><?php echo esc_html($success); ?></div><?php endif; ?>
        <?php if ($error): ?><div class="alert err"><?php echo esc_html($error); ?></div><?php endif; ?>

        <div class="ct-form-panel <?php echo $active_form === 'contact-admin' ? 'is-active' : ''; ?>" data-panel="contact-admin">
          <div class="ct-helper-note"><?php echo esc_html(contenly_tr('Pakai form ini kalau kamu mau tanya admin soal booking, pembayaran, jadwal, atau butuh bantuan umum.', 'Use this form if you want to ask the admin about bookings, payments, schedules, or need general help.')); ?></div>
          <form method="post" class="ct-form">
            <input type="hidden" name="form_type" value="contact-admin">

            <div class="grid-2">
              <div>
                <label><?php echo esc_html(contenly_tr('Nama Lengkap *', 'Full Name *')); ?></label>
                <input type="text" name="name" value="<?php echo $active_form === 'contact-admin' ? esc_attr($_POST['name'] ?? '') : ''; ?>" required>
              </div>
              <div>
                <label>Email *</label>
                <input type="email" name="email" value="<?php echo $active_form === 'contact-admin' ? esc_attr($_POST['email'] ?? '') : ''; ?>" required>
              </div>
            </div>

            <div class="grid-2">
              <div>
                <label><?php echo contenly_tr('No. Telepon <small>(opsional)</small>', 'Phone Number <small>(optional)</small>'); ?></label>
                <input type="text" name="phone" placeholder="<?php echo esc_attr(contenly_tr('08xxxxxxxxxx', '+62xxxxxxxxxx')); ?>" value="<?php echo $active_form === 'contact-admin' ? esc_attr($_POST['phone'] ?? '') : ''; ?>">
              </div>
              <div>
                <label><?php echo esc_html(contenly_tr('Topik *', 'Topic *')); ?></label>
                <select name="topic" required>
                  <option value=""><?php echo esc_html(contenly_tr('Pilih topik', 'Choose a topic')); ?></option>
                  <option value="Pertanyaan Booking" <?php selected(($active_form === 'contact-admin' ? ($_POST['topic'] ?? '') : ''), 'Pertanyaan Booking'); ?>>Pertanyaan Booking</option>
                  <option value="Pembayaran" <?php selected(($active_form === 'contact-admin' ? ($_POST['topic'] ?? '') : ''), 'Pembayaran'); ?>>Pembayaran</option>
                  <option value="Jadwal / Keberangkatan" <?php selected(($active_form === 'contact-admin' ? ($_POST['topic'] ?? '') : ''), 'Jadwal / Keberangkatan'); ?>>Jadwal / Keberangkatan</option>
                  <option value="Perubahan Data" <?php selected(($active_form === 'contact-admin' ? ($_POST['topic'] ?? '') : ''), 'Perubahan Data'); ?>>Perubahan Data</option>
                  <option value="Lainnya" <?php selected(($active_form === 'contact-admin' ? ($_POST['topic'] ?? '') : ''), 'Lainnya'); ?>>Lainnya</option>
                </select>
              </div>
            </div>

            <div>
              <label><?php echo esc_html(contenly_tr('Pesan *', 'Message *')); ?></label>
              <textarea name="message" rows="6" placeholder="<?php echo esc_attr(contenly_tr('Tulis pertanyaan atau kebutuhanmu untuk admin', 'Write your question or request for the admin')); ?>" required><?php echo $active_form === 'contact-admin' ? esc_textarea($_POST['message'] ?? '') : ''; ?></textarea>
            </div>

            <button type="submit" name="contact_admin_submit"><?php echo esc_html(contenly_tr('Kirim ke Admin', 'Send to Admin')); ?></button>
            <p class="ct-form-note"><?php echo esc_html(contenly_tr('Setelah submit, tim admin akan review dan balas via email atau telepon dalam maksimal 2 jam kerja.', 'After you submit, the admin team will review and reply by email or phone within a maximum of 2 business hours.')); ?></p>
          </form>
        </div>

        <div class="ct-form-panel <?php echo $active_form === 'custom-tour' ? 'is-active' : ''; ?>" data-panel="custom-tour">
          <div class="ct-helper-note"><?php echo esc_html(contenly_tr('Pakai form ini kalau kamu mau request trip custom, itinerary baru, family trip, corporate outing, atau paket yang perlu disesuaikan.', 'Use this form if you want to request a custom trip, a new itinerary, a family trip, a corporate outing, or a package that needs adjusting.')); ?></div>
          <form method="post" class="ct-form">
            <input type="hidden" name="form_type" value="custom-tour">

            <div class="grid-2">
              <div>
                <label><?php echo esc_html(contenly_tr('Nama Lengkap *', 'Full Name *')); ?></label>
                <input type="text" name="name" value="<?php echo $active_form === 'custom-tour' ? esc_attr($_POST['name'] ?? '') : ''; ?>" required>
              </div>
              <div>
                <label>Email *</label>
                <input type="email" name="email" value="<?php echo $active_form === 'custom-tour' ? esc_attr($_POST['email'] ?? '') : ''; ?>" required>
              </div>
            </div>

            <div class="grid-2">
              <div>
                <label><?php echo contenly_tr('No. Telepon <small>(opsional)</small>', 'Phone Number <small>(optional)</small>'); ?></label>
                <input type="text" name="phone" placeholder="<?php echo esc_attr(contenly_tr('08xxxxxxxxxx', '+62xxxxxxxxxx')); ?>" value="<?php echo $active_form === 'custom-tour' ? esc_attr($_POST['phone'] ?? '') : ''; ?>">
              </div>
              <div>
                <label><?php echo esc_html(contenly_tr('Jenis Kebutuhan *', 'Type of Request *')); ?></label>
                <select name="service" required>
                  <option value=""><?php echo esc_html(contenly_tr('Pilih kebutuhan', 'Choose your request')); ?></option>
                  <option value="Custom Itinerary" <?php selected(($active_form === 'custom-tour' ? ($_POST['service'] ?? '') : ''), 'Custom Itinerary'); ?>>Custom Itinerary</option>
                  <option value="Paket Tour" <?php selected(($active_form === 'custom-tour' ? ($_POST['service'] ?? '') : ''), 'Paket Tour'); ?>>Paket Tour</option>
                  <option value="Corporate Trip" <?php selected(($active_form === 'custom-tour' ? ($_POST['service'] ?? '') : ''), 'Corporate Trip'); ?>>Corporate Trip</option>
                  <option value="Family Trip" <?php selected(($active_form === 'custom-tour' ? ($_POST['service'] ?? '') : ''), 'Family Trip'); ?>>Family Trip</option>
                  <option value="Airport Transfer / Rental" <?php selected(($active_form === 'custom-tour' ? ($_POST['service'] ?? '') : ''), 'Airport Transfer / Rental'); ?>>Airport Transfer / Rental</option>
                </select>
              </div>
            </div>

            <div class="grid-3">
              <div>
                <label><?php echo contenly_tr('Tujuan <small>(opsional)</small>', 'Destination <small>(optional)</small>'); ?></label>
                <input type="text" name="destination" placeholder="<?php echo esc_attr(contenly_tr('Contoh: Bali, Labuan Bajo, Jepang', 'Example: Bali, Labuan Bajo, Japan')); ?>" value="<?php echo $active_form === 'custom-tour' ? esc_attr($_POST['destination'] ?? '') : ''; ?>">
              </div>
              <div>
                <label><?php echo contenly_tr('Tanggal Rencana <small>(opsional)</small>', 'Planned Dates <small>(optional)</small>'); ?></label>
                <input type="text" name="travel_date" placeholder="<?php echo esc_attr(contenly_tr('Contoh: 20-24 Mei 2026', 'Example: 20-24 May 2026')); ?>" value="<?php echo $active_form === 'custom-tour' ? esc_attr($_POST['travel_date'] ?? '') : ''; ?>">
              </div>
              <div>
                <label><?php echo contenly_tr('Jumlah Pax <small>(opsional)</small>', 'Number of Travellers <small>(optional)</small>'); ?></label>
                <input type="text" name="pax" placeholder="<?php echo esc_attr(contenly_tr('Contoh: 4 Orang', 'Example: 4 Travellers')); ?>" value="<?php echo $active_form === 'custom-tour' ? esc_attr($_POST['pax'] ?? '') : ''; ?>">
              </div>
            </div>

            <div>
              <label><?php echo contenly_tr('Budget Range <small>(opsional)</small>', 'Budget Range <small>(optional)</small>'); ?></label>
              <select name="budget">
                <option value=""><?php echo esc_html(contenly_tr('Pilih estimasi budget', 'Choose an estimated budget')); ?></option>
                <option value="< 5 juta" <?php selected(($active_form === 'custom-tour' ? ($_POST['budget'] ?? '') : ''), '< 5 juta'); ?>>&lt; 5 juta</option>
                <option value="5 - 15 juta" <?php selected(($active_form === 'custom-tour' ? ($_POST['budget'] ?? '') : ''), '5 - 15 juta'); ?>>5 - 15 juta</option>
                <option value="15 - 30 juta" <?php selected(($active_form === 'custom-tour' ? ($_POST['budget'] ?? '') : ''), '15 - 30 juta'); ?>>15 - 30 juta</option>
                <option value="> 30 juta" <?php selected(($active_form === 'custom-tour' ? ($_POST['budget'] ?? '') : ''), '> 30 juta'); ?>>&gt; 30 juta</option>
              </select>
            </div>

            <div>
              <label><?php echo esc_html(contenly_tr('Detail Kebutuhan *', 'Request Details *')); ?></label>
              <textarea name="message" rows="6" placeholder="<?php echo esc_attr(contenly_tr('Ceritakan kebutuhanmu: tipe trip, preferensi hotel/transport, aktivitas utama, dll', 'Tell us what you need: trip type, hotel/transport preferences, main activities, etc.')); ?>" required><?php echo $active_form === 'custom-tour' ? esc_textarea($_POST['message'] ?? '') : ''; ?></textarea>
            </div>

            <button type="submit" name="custom_tour_submit"><?php echo esc_html(contenly_tr('Kirim Request Custom Tour', 'Send Custom Tour Request')); ?></button>
            <p class="ct-form-note"><?php echo esc_html(contenly_tr('Setelah submit, tim admin akan review brief kamu dan balas via email atau telepon dalam maksimal 2 jam kerja.', 'After you submit, the admin team will review your brief and reply by email or phone within a maximum of 2 business hours.')); ?></p>
          </form>
        </div>
      </article>

      <aside class="ct-card side-card">
        <span class="ct-form-kicker"><?php echo esc_html(contenly_tr('Info admin', 'Admin Info')); ?></span>
        <h2><?php echo esc_html(contenly_tr('Informasi Kontak', 'Contact Information')); ?></h2>
        <div class="info-list">
          <a class="info-item" href="https://maps.google.com/?q=<?php echo rawurlencode($contact['office_1'] ?? 'Jakarta, Indonesia'); ?>" target="_blank" rel="noopener"><strong><span>📍</span>Office</strong><span><?php echo esc_html($contact['office_1'] ?? 'Jakarta, Indonesia'); ?></span></a>
          <div class="info-item"><strong><span>🕘</span><?php echo esc_html(contenly_tr('Jam Buka', 'Business Hours')); ?></strong><span><?php echo esc_html(function_exists('contenly_localize_business_hours') ? contenly_localize_business_hours($contact['hours'] ?? '') : ($contact['hours'] ?? 'Senin–Sabtu: 09:00–18:00')); ?> WIB</span></div>
        </div>
      </aside>
    </div>
  </section>
</main>

<style>
.contact-page-v2{background:#EEF5F4}
.ct-hero{padding:126px 0 58px;background:linear-gradient(140deg,#355F72,#539294 42%,#E5A736 100%);color:#EEF5F4;text-align:center}
.ct-eyebrow{margin:0 0 8px;font-size:12px;letter-spacing:.08em;text-transform:uppercase;font-weight:800;opacity:.92}
.ct-hero h1{margin:0 0 12px;font-size:clamp(34px,5vw,56px);line-height:1.05;color:#fff}
.ct-lead{margin:0 auto;max-width:880px;font-size:18px;line-height:1.75}
.ct-proof-row{margin:18px auto 0;display:flex;justify-content:center;gap:10px;flex-wrap:wrap}
.ct-proof-row span{display:inline-flex;align-items:center;min-height:34px;padding:0 14px;border-radius:999px;background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.22);color:#EEF5F4;font-size:12px;font-weight:700;letter-spacing:.02em}

.ct-section{padding:56px 0 72px}
.site-main .site-container.ct-grid{display:grid !important;grid-template-columns:minmax(0,1fr) 360px;gap:22px;align-items:start}
.ct-grid > .form-card{grid-column:1;max-width:none}
.ct-grid > .side-card{grid-column:2}
.ct-card{background:#fff;border:1px solid #e2e8f0;border-radius:22px;padding:24px;box-shadow:0 12px 30px rgba(15,23,42,.06);transition:transform .25s ease,box-shadow .25s ease}
.ct-card:hover{transform:translateY(-3px);box-shadow:0 18px 34px rgba(15,23,42,.10)}
.ct-card h2{margin:0 0 8px;color:#0f172a}
.ct-form-kicker{display:inline-flex;align-items:center;min-height:30px;padding:0 12px;border-radius:999px;background:#EEF5F4;color:#355F72;font-size:11px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;margin:0 0 14px}
.sub{margin:0 0 14px;color:#64748b;line-height:1.72}
.ct-helper-note{margin:0 0 14px;padding:12px 14px;border-radius:14px;background:#f8fbff;border:1px solid #DCE9E6;color:#475569;line-height:1.7;font-size:14px}
.ct-form-switch{display:flex;gap:10px;flex-wrap:wrap;margin:0 0 18px}
.ct-switch-btn{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:0 18px;border-radius:999px;border:1px solid #cbd5e1;background:#fff;color:#355F72;font-size:14px;font-weight:800;cursor:pointer;transition:.2s ease;text-align:center}
.ct-switch-btn:hover{border-color:#539294;background:#f8fbff}
.ct-switch-btn.is-active{background:linear-gradient(110deg,#355F72,#539294);color:#fff;border-color:transparent;box-shadow:0 14px 24px rgba(83,146,148,.22)}
.ct-form-panel{display:none}
.ct-form-panel.is-active{display:block}

.alert{padding:12px 14px;border-radius:12px;margin-bottom:12px;font-size:14px}
.alert.ok{background:#dcfce7;color:#166534;border:1px solid #86efac}
.alert.err{background:#fee2e2;color:#991b1b;border:1px solid #fca5a5}

.ct-form{display:grid;gap:14px}
.grid-2{display:grid !important;grid-template-columns:1fr 1fr;gap:12px}
.grid-3{display:grid !important;grid-template-columns:1fr 1fr 1fr;gap:12px}
.ct-form label{display:block;margin-bottom:6px;font-weight:700;color:#334155;font-size:14px}
.ct-form label small{font-size:12px;color:#94a3b8;font-weight:700}
.ct-form input,.ct-form textarea,.ct-form select{width:100%;padding:13px 14px;border:1px solid #cbd5e1;border-radius:12px;font-size:15px;background:#fff;color:#0f172a}
.ct-form input:focus,.ct-form textarea:focus,.ct-form select:focus{outline:none;border-color:#B7D3D3;box-shadow:0 0 0 3px rgba(183,211,211,.30)}
.ct-form button{height:52px;border:0;border-radius:14px;background:linear-gradient(110deg,#355F72,#539294);color:#fff;font-weight:800;font-size:16px;cursor:pointer;transition:transform .2s ease,box-shadow .2s ease}
.ct-form button:hover{transform:translateY(-1px);box-shadow:0 14px 28px rgba(83,146,148,.35)}
.ct-form-note{margin:0;color:#64748b;line-height:1.7;font-size:14px}

.info-list{display:grid;gap:10px;margin-bottom:16px}
.info-item{display:block;border:1px solid #e2e8f0;border-radius:14px;padding:14px;background:#f8fbff;text-decoration:none}
.info-item strong{display:flex;align-items:center;gap:8px;color:#0f172a;margin-bottom:4px}
.info-item strong span{display:inline-flex;width:16px;justify-content:center}
.info-item span{color:#64748b;line-height:1.6}
.mini-cta{background:#EEF5F4;border:1px solid #D8E8E8;border-radius:16px;padding:16px}
.mini-cta h3{margin:0 0 6px;color:#355F72}
.mini-cta p{margin:0 0 12px;color:#475569;line-height:1.7}

@media(max-width:900px){
  .site-main .site-container.ct-grid{grid-template-columns:1fr !important}
  .ct-grid > .form-card,.ct-grid > .side-card{grid-column:auto}
  .grid-2,.grid-3{grid-template-columns:1fr}
  .ct-form-switch{flex-direction:column}
  .ct-switch-btn{width:100%}
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function(){
  const buttons = document.querySelectorAll('.ct-switch-btn');
  const panels = document.querySelectorAll('.ct-form-panel');

  function activatePanel(target){
    buttons.forEach((button) => {
      const isActive = button.getAttribute('data-target') === target;
      button.classList.toggle('is-active', isActive);
      button.setAttribute('aria-pressed', isActive ? 'true' : 'false');
    });

    panels.forEach((panel) => {
      panel.classList.toggle('is-active', panel.getAttribute('data-panel') === target);
    });
  }

  buttons.forEach((button) => {
    button.addEventListener('click', function(){
      activatePanel(this.getAttribute('data-target'));
    });
  });
});
</script>

<?php get_footer(); ?>