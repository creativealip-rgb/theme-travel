<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<main class="site-main about-page-v2">
  <section class="ab-hero">
    <div class="site-container ab-hero-inner">
      <p class="ab-eyebrow"><?php echo esc_html(contenly_tr('Tentang Ganesha Travel', 'About Ganesha Travel')); ?></p>
      <h1><?php echo esc_html(contenly_tr('Perjalanan yang rapi, nyaman, dan minim drama.', 'Well-planned journeys that feel smooth, comfortable, and stress-free.')); ?></h1>
      <p class="ab-lead"><?php echo esc_html(contenly_tr('Kami bantu traveler Indonesia dari tahap isi kebutuhan perjalanan, penyusunan itinerary, sampai pendampingan saat perjalanan — dengan standar layanan yang jelas, transparan, dan lebih enak diikuti dari awal.', 'We help travellers from the moment they share their trip brief, through itinerary design, all the way to on-trip support — with a service standard that stays clear, transparent, and easy to follow from the start.')); ?></p>
      <div class="ab-proof-row">
        <span><?php echo esc_html(contenly_tr('Itinerary realistis', 'Realistic itineraries')); ?></span>
        <span><?php echo esc_html(contenly_tr('Budget transparan', 'Transparent budgeting')); ?></span>
        <span><?php echo esc_html(contenly_tr('Respon cepat', 'Fast response')); ?></span>
      </div>

      <div class="ab-trustbar">
        <div><strong>50K+</strong><span><?php echo esc_html(contenly_tr('Traveler terlayani', 'Travellers served')); ?></span><small><?php echo esc_html(contenly_tr('Domestik, internasional, dan corporate trip', 'Domestic, international, and corporate trips')); ?></small></div>
        <div><strong>100+</strong><span><?php echo esc_html(contenly_tr('Destinasi aktif', 'Active destinations')); ?></span><small><?php echo esc_html(contenly_tr('Pilihan trip yang terus dikurasi tim kami', 'Trip options continuously curated by our team')); ?></small></div>
        <div><strong><?php echo esc_html(contenly_tr('7 Tahun+', '7+ Years')); ?></strong><span><?php echo esc_html(contenly_tr('Pengalaman operasional', 'Operational experience')); ?></span><small><?php echo esc_html(contenly_tr('Flow perjalanan dan handling di lapangan', 'On-the-ground trip flow and handling experience')); ?></small></div>
        <div><strong>24/7</strong><span><?php echo esc_html(contenly_tr('Dukungan tim', 'Team support')); ?></span><small><?php echo esc_html(contenly_tr('Lebih tenang saat ada perubahan di tengah jalan', 'More peace of mind when plans change mid-journey')); ?></small></div>
      </div>
    </div>
  </section>

  <section class="ab-section">
    <div class="site-container ab-split">
      <article class="ab-card ab-main">
        <span class="ab-mini-kicker"><?php echo esc_html(contenly_tr('Siapa kami', 'Who we are')); ?></span>
        <h2><?php echo esc_html(contenly_tr('Partner perjalanan buat traveler yang pengin flow lebih jelas.', 'A travel partner for people who want a clearer, smoother trip flow.')); ?></h2>
        <p><?php echo esc_html(contenly_tr('Ganesha Travel adalah partner perjalanan untuk trip domestik dan internasional: family trip, corporate outing, honeymoon, sampai open trip. Kami menggabungkan pengalaman lapangan dan sistem digital agar proses booking lebih cepat, itinerary lebih realistis, dan komunikasi lebih jelas.', 'Ganesha Travel is a travel partner for domestic and international trips: family trips, corporate outings, honeymoons, and open trips. We combine on-the-ground experience with digital systems so booking feels faster, itineraries stay more realistic, and communication is easier to follow.')); ?></p>
        <p><?php echo contenly_tr('Kami percaya perjalanan yang baik bukan cuma soal destinasi, tapi rasa tenang selama prosesnya. Karena itu kami fokus di 3 hal: <strong>rencana yang terukur</strong>, <strong>biaya yang transparan</strong>, dan <strong>pendampingan yang responsif</strong>.', 'We believe a great trip is not only about the destination, but also the peace of mind throughout the process. That is why we focus on 3 things: <strong>measured planning</strong>, <strong>transparent costs</strong>, and <strong>responsive support</strong>.'); ?></p>
        <div class="ab-principles">
          <span><?php echo esc_html(contenly_tr('Rencana yang terukur', 'Measured planning')); ?></span>
          <span><?php echo esc_html(contenly_tr('Biaya transparan', 'Transparent costs')); ?></span>
          <span><?php echo esc_html(contenly_tr('Pendampingan responsif', 'Responsive support')); ?></span>
        </div>
      </article>

      <aside class="ab-card ab-side">
        <span class="ab-mini-kicker"><?php echo esc_html(contenly_tr('Fokus layanan', 'Service focus')); ?></span>
        <h3><?php echo esc_html(contenly_tr('Trip yang paling sering kami bantu rapihin.', 'The trips we help organise most often.')); ?></h3>
        <ul class="ab-icon-list">
          <li><span>🧭</span><div><strong><?php echo esc_html(contenly_tr('Custom itinerary', 'Custom itinerary')); ?></strong><small><?php echo esc_html(contenly_tr('Sesuai budget, tempo, dan preferensi aktivitas.', 'Matched to your budget, travel pace, and activity preferences.')); ?></small></div></li>
          <li><span>👨‍👩‍👧‍👦</span><div><strong><?php echo esc_html(contenly_tr('Family & private trip', 'Family & private trips')); ?></strong><small><?php echo esc_html(contenly_tr('Lebih nyaman buat rombongan kecil sampai kebutuhan yang lebih personal.', 'More comfortable for small groups and travellers with more personal needs.')); ?></small></div></li>
          <li><span>🤝</span><div><strong><?php echo esc_html(contenly_tr('Corporate outing', 'Corporate outings')); ?></strong><small><?php echo esc_html(contenly_tr('Perjalanan kerja, gathering, dan handling yang lebih terstruktur.', 'For work trips, gatherings, and more structured coordination.')); ?></small></div></li>
          <li><span>🏨</span><div><strong><?php echo esc_html(contenly_tr('Akomodasi & transport', 'Accommodation & transport')); ?></strong><small><?php echo esc_html(contenly_tr('Rekomendasi yang relevan supaya itinerary tetap efisien dan enak dijalani.', 'Relevant recommendations so the itinerary stays efficient and comfortable to follow.')); ?></small></div></li>
        </ul>
      </aside>
    </div>
  </section>

  <section class="ab-section ab-muted">
    <div class="site-container">
      <span class="ab-section-kicker"><?php echo esc_html(contenly_tr('Flow kerja', 'How we work')); ?></span>
      <h2 class="ab-title"><?php echo esc_html(contenly_tr('Cara kerja kami', 'Our process')); ?></h2>
      <p class="ab-title-sub"><?php echo esc_html(contenly_tr('Biar dari awal user udah punya gambaran proses yang jelas — mulai dari brief singkat sampai detail keberangkatan.', 'So travellers understand the process from the beginning — from the first brief to the final departure details.')); ?></p>
      <div class="ab-steps">
        <article class="ab-step">
          <span>01</span>
          <h3><?php echo esc_html(contenly_tr('Isi kebutuhan perjalanan', 'Share your trip brief')); ?></h3>
          <p><?php echo esc_html(contenly_tr('Kami review tujuan, jumlah pax, durasi, dan budget untuk bikin draft perjalanan yang realistis.', 'We review the destination, number of travellers, duration, and budget to prepare a realistic draft itinerary.')); ?></p>
        </article>
        <article class="ab-step">
          <span>02</span>
          <h3><?php echo esc_html(contenly_tr('Rancang itinerary', 'Design the itinerary')); ?></h3>
          <p><?php echo esc_html(contenly_tr('Itinerary disusun seimbang antara eksplorasi, waktu istirahat, dan efisiensi biaya.', 'The itinerary is balanced between exploration, rest time, and cost efficiency.')); ?></p>
        </article>
        <article class="ab-step">
          <span>03</span>
          <h3><?php echo esc_html(contenly_tr('Eksekusi & pendampingan', 'Execution & support')); ?></h3>
          <p><?php echo esc_html(contenly_tr('Dari proses booking sampai hari H, tim kami siap review cepat saat ada perubahan atau kendala.', 'From booking through departure day, our team is ready to respond quickly when plans change or issues come up.')); ?></p>
        </article>
      </div>
    </div>
  </section>

  <section class="ab-section">
    <div class="site-container ab-grid-2">
      <article class="ab-card">
        <h3><?php echo esc_html(contenly_tr('Visi', 'Vision')); ?></h3>
        <p><?php echo esc_html(contenly_tr('Menjadi perusahaan travel terpercaya di Indonesia dengan layanan yang konsisten rapi, transparan, dan berorientasi pengalaman pelanggan.', 'To become a trusted travel company in Indonesia with service that stays organised, transparent, and centred on customer experience.')); ?></p>
      </article>
      <article class="ab-card">
        <h3><?php echo esc_html(contenly_tr('Misi', 'Mission')); ?></h3>
        <ul>
          <li><?php echo esc_html(contenly_tr('Menyediakan paket bernilai tinggi dengan kualitas layanan profesional.', 'Provide high-value travel packages with professional service quality.')); ?></li>
          <li><?php echo esc_html(contenly_tr('Menyederhanakan proses booking lewat pengalaman digital yang mudah.', 'Simplify the booking process through an easy digital experience.')); ?></li>
          <li><?php echo esc_html(contenly_tr('Memberikan pendampingan cepat dan solutif di setiap fase perjalanan.', 'Deliver fast, solution-oriented support in every phase of the journey.')); ?></li>
        </ul>
      </article>
    </div>
  </section>

  <section class="ab-section ab-cta-wrap">
    <div class="site-container">
      <div class="ab-cta">
        <div>
          <h2><?php echo esc_html(contenly_tr('Siap rencanakan trip berikutnya?', 'Ready to plan your next trip?')); ?></h2>
          <p><?php echo esc_html(contenly_tr('Ceritakan kebutuhan perjalananmu, nanti tim kami bantu cocokin itinerary, tempo trip, dan range budget yang paling masuk.', 'Tell us what you need and our team will help match the right itinerary, travel pace, and budget range.')); ?></p>
          <div class="ab-cta-proof"><?php echo esc_html(contenly_tr('Isi form sekali • Direview tim admin • Cocok buat custom atau paket siap jalan', 'Submit once • Reviewed by our team • Great for custom requests or ready-to-book packages')); ?></div>
        </div>
        <div class="ab-cta-actions">
          <a href="<?php echo esc_url(contenly_localized_url('/contact/#contact-form-start')); ?>" class="ab-btn primary"><?php echo esc_html(contenly_tr('Isi Form Kebutuhan', 'Share Your Trip Brief')); ?></a>
          <a href="<?php echo esc_url(contenly_localized_url('/tour-packages/')); ?>" class="ab-btn ghost"><?php echo esc_html(contenly_tr('Lihat Paket Pilihan', 'Browse Tour Packages')); ?></a>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.about-page-v2{background:#EEF5F4}
.ab-hero{padding:128px 0 56px;background:linear-gradient(140deg,#355F72,#539294 45%,#E5A736 100%);color:#EEF5F4}
.ab-hero-inner{text-align:center}
.ab-eyebrow{margin:0 0 8px;font-size:12px;letter-spacing:.08em;text-transform:uppercase;font-weight:800;opacity:.92}
.ab-hero h1{margin:0 auto 12px;max-width:900px;font-size:clamp(34px,5vw,58px);line-height:1.05;color:#fff}
.ab-lead{margin:0 auto;max-width:860px;font-size:18px;line-height:1.72;opacity:.96}
.ab-proof-row{margin:20px auto 0;display:flex;justify-content:center;gap:10px;flex-wrap:wrap}
.ab-proof-row span{display:inline-flex;align-items:center;min-height:34px;padding:0 14px;border-radius:999px;background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.22);color:#EEF5F4;font-size:12px;font-weight:700;letter-spacing:.02em}
.ab-trustbar{margin:30px auto 0;max-width:1080px;display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:14px}
.ab-trustbar>div{background:linear-gradient(180deg,rgba(255,255,255,.18),rgba(255,255,255,.10));border:1px solid rgba(255,255,255,.22);border-radius:18px;padding:18px 16px;backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);text-align:left;box-shadow:inset 0 1px 0 rgba(255,255,255,.12)}
.ab-trustbar strong{display:block;font-size:30px;line-height:1;color:#fff;margin-bottom:8px}
.ab-trustbar span{display:block;font-size:11px;text-transform:uppercase;letter-spacing:.08em;color:#D8E8E8;font-weight:800;margin-bottom:8px}
.ab-trustbar small{display:block;font-size:13px;line-height:1.6;color:rgba(239,246,255,.84)}

.ab-section{padding:64px 0}
.ab-muted{background:#EEF5F4}
.site-main .site-container.ab-grid-2{display:grid !important;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:8px;align-items:stretch}
.site-main .site-container.ab-split{display:grid !important;grid-template-columns:1.2fr .8fr;gap:26px;align-items:start}
.ab-split > .ab-main{grid-column:1}
.ab-split > .ab-side{grid-column:2}
.ab-card{background:#fff;border:1px solid #e2e8f0;border-radius:22px;padding:28px;box-shadow:0 14px 30px rgba(15,23,42,.06);transition:transform .25s ease,box-shadow .25s ease}
.ab-card:hover{transform:translateY(-3px);box-shadow:0 18px 34px rgba(15,23,42,.10)}
.ab-card h2,.ab-card h3{margin:0 0 12px;color:#0f172a;line-height:1.2}
.ab-card p{margin:0 0 14px;color:#475569;line-height:1.8}
.ab-card ul{margin:0;padding-left:18px;color:#475569;line-height:1.75}
.ab-mini-kicker,.ab-section-kicker{display:inline-flex;align-items:center;min-height:30px;padding:0 12px;border-radius:999px;background:#EEF5F4;color:#355F72;font-size:11px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;margin:0 0 14px}
.ab-principles{display:flex;gap:10px;flex-wrap:wrap;margin-top:12px}
.ab-principles span{display:inline-flex;align-items:center;min-height:36px;padding:0 14px;border-radius:999px;background:#f8fbff;border:1px solid #DCE9E6;color:#355F72;font-size:13px;font-weight:700}
.ab-icon-list{padding-left:0;list-style:none;display:grid;gap:12px}
.ab-icon-list li{display:grid;grid-template-columns:28px minmax(0,1fr);gap:12px;align-items:flex-start;background:#f8fbff;border:1px solid #DCE9E6;border-radius:14px;padding:12px 13px}
.ab-icon-list li strong{display:block;color:#0f172a;margin-bottom:3px;font-size:14px}
.ab-icon-list li small{display:block;color:#64748b;line-height:1.65;font-size:13px}
.ab-main{border-top:4px solid #539294}
.ab-side{border-top:4px solid #E5A736}

.ab-title{text-align:center;margin:0 0 12px;color:#0f172a;font-size:30px}
.ab-title-sub{max-width:720px;margin:0 auto 22px;color:#64748b;line-height:1.75;text-align:center}
.ab-steps{display:grid !important;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}
.ab-step{background:#fff;border:1px solid #DCE9E6;border-radius:18px;padding:20px 18px;box-shadow:0 8px 22px rgba(30,64,175,.07)}
.ab-step span{display:inline-grid;place-items:center;width:36px;height:36px;border-radius:999px;background:#DCE9E6;color:#355F72;font-weight:800;margin-bottom:12px}
.ab-step h3{margin:0 0 8px;color:#0f172a;font-size:18px}
.ab-step p{margin:0;color:#64748b;line-height:1.7}

.ab-cta-wrap{padding-top:20px;padding-bottom:72px}
.ab-cta-wrap .site-container{position:relative}
.ab-cta-wrap .site-container::before{content:"";position:absolute;top:-10px;left:0;right:0;height:1px;background:#DCE9E6}
.ab-cta{position:relative;overflow:hidden;margin:14px auto 0;max-width:1160px;background:radial-gradient(120% 140% at 0% 0%,#539294 0%,#355F72 52%,#355F72 100%);border:1px solid rgba(148,163,184,.28);border-radius:28px;padding:34px 30px;display:flex;flex-direction:column;justify-content:center;align-items:center;gap:8px;box-shadow:0 22px 48px rgba(2,6,23,.30),inset 0 1px 0 rgba(255,255,255,.06);text-align:center}
.ab-cta::before{content:"";position:absolute;inset:0;background:linear-gradient(120deg,rgba(83,146,148,.16),rgba(229,167,54,.08) 42%,rgba(83,146,148,0) 75%);pointer-events:none}
.ab-cta h2{margin:0 0 10px;color:#f8fafc;font-size:clamp(24px,2.6vw,34px);line-height:1.15}
.ab-cta p{margin:0 auto 14px;color:#cbd5e1;line-height:1.72;max-width:620px}
.ab-cta-proof{font-size:13px;line-height:1.7;color:#D8E8E8}
.ab-cta-actions{display:flex;justify-content:center;gap:10px;flex-wrap:wrap;margin-top:14px}
.ab-btn{display:inline-flex;align-items:center;justify-content:center;height:48px;padding:0 20px;border-radius:12px;text-decoration:none;font-weight:700;transition:transform .2s ease,box-shadow .2s ease,filter .2s ease}
.ab-btn:hover{transform:translateY(-1px)}
.ab-btn.primary{background:linear-gradient(120deg,#355F72,#539294,#E5A736);color:#fff;box-shadow:0 12px 28px rgba(83,146,148,.36)}
.ab-btn.primary:hover{box-shadow:0 16px 34px rgba(83,146,148,.46);filter:saturate(1.06)}
.ab-btn.ghost{background:rgba(148,163,184,.12);border:1px solid rgba(148,163,184,.35);color:#e2e8f0}
.ab-btn.ghost:hover{background:rgba(148,163,184,.2)}

@media(max-width:900px){
  .ab-trustbar{grid-template-columns:repeat(2,minmax(0,1fr))}
  .site-main .site-container.ab-split{grid-template-columns:1fr !important}
  .site-main .site-container.ab-grid-2,.ab-steps{grid-template-columns:1fr !important}
  .ab-split > .ab-main,.ab-split > .ab-side{grid-column:auto}
  .ab-cta{flex-direction:column;align-items:center}
  .ab-cta-actions{margin-top:10px;justify-content:center}
}
</style>

<?php get_footer(); ?>