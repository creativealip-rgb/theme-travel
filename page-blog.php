<?php
/**
 * Template Name: Blog Page
 */
get_header();

$member_stories = get_posts(contenly_all_language_post_args([
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 6,
  'orderby' => 'date',
  'order' => 'DESC',
  'meta_query' => [
    [
      'key' => '_is_travel_story',
      'value' => '1',
    ],
  ],
]));

$member_stories = array_values(array_filter($member_stories, function ($post) {
  return !function_exists('contenly_is_dummy_story') || !contenly_is_dummy_story($post);
}));

$featured_member_story = !empty($member_stories) ? $member_stories[0] : null;
$member_story_cards = !empty($member_stories) ? array_slice($member_stories, 1) : [];

$member_story_ids = array_map(function ($post) {
  return (int) $post->ID;
}, $member_stories);

$latest_articles = get_posts(contenly_all_language_post_args([
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 8,
  'orderby' => 'date',
  'order' => 'DESC',
  'post__not_in' => $member_story_ids,
  'meta_query' => [
    'relation' => 'OR',
    [
      'key' => '_is_travel_story',
      'compare' => 'NOT EXISTS',
    ],
    [
      'key' => '_is_travel_story',
      'value' => '1',
      'compare' => '!=',
    ],
  ],
]));

$featured_article = !empty($latest_articles) ? $latest_articles[0] : null;
$latest_sidebar_articles = !empty($latest_articles) ? array_slice($latest_articles, 1, 4) : [];
$cats = get_categories([
  'hide_empty' => true,
  'number' => 8,
  'lang' => 'all',
]);

$build_blog_payload = function($post) {
  if (!$post) {
    return null;
  }

  $categories = get_the_category($post->ID);
  $primary_category = isset($categories[0]) ? contenly_blog_category_label($categories[0]) : contenly_tr('Artikel', 'Article');
  $category_slugs = array_values(array_filter(array_map(function($cat) {
    return isset($cat->slug) ? (string) $cat->slug : '';
  }, $categories)));

  if (empty($category_slugs)) {
    $category_slugs = ['uncategorized'];
  }

  return [
    'id' => (int) $post->ID,
    'title' => html_entity_decode(wp_strip_all_tags(get_the_title($post)), ENT_QUOTES, 'UTF-8'),
    'url' => get_permalink($post),
    'date' => get_the_date('d M Y', $post),
    'author' => get_the_author_meta('display_name', $post->post_author),
    'excerpt' => html_entity_decode(wp_strip_all_tags(wp_trim_words(get_the_excerpt($post) ?: $post->post_content, 34, '...')), ENT_QUOTES, 'UTF-8'),
    'short_excerpt' => html_entity_decode(wp_strip_all_tags(wp_trim_words(get_the_excerpt($post) ?: $post->post_content, 18, '...')), ENT_QUOTES, 'UTF-8'),
    'category_name' => $primary_category,
    'category_slugs' => $category_slugs,
    'image_url' => get_the_post_thumbnail_url($post, 'large') ?: '',
    'image_url_medium' => get_the_post_thumbnail_url($post, 'medium_large') ?: (get_the_post_thumbnail_url($post, 'large') ?: ''),
  ];
};

$latest_payload = array_values(array_filter(array_map($build_blog_payload, $latest_articles)));
$member_payload = array_values(array_filter(array_map($build_blog_payload, $member_stories)));
?>

<main class="site-main blog-page-v2">
  <section class="blog-hero">
    <div class="site-container">
      <p class="blog-eyebrow"><?php echo esc_html(contenly_tr('Blog', 'Blog')); ?></p>
      <h1><?php echo esc_html(contenly_tr('Cerita member, tips, dan insight perjalanan', 'Member stories, travel tips, and practical trip insights')); ?></h1>
      <p><?php echo esc_html(contenly_tr('Lihat artikel terbaru dari tim Ganesha Travel dulu, lalu lanjut ke cerita real dari member buat dapetin gambaran trip yang lebih hidup dan realistis.', 'Start with the latest articles from the Ganesha Travel team, then continue to real member stories for a more vivid and realistic picture of each trip.')); ?></p>
      <div class="blog-hero-proof">
        <span><?php echo esc_html(contenly_tr('Artikel terbaru yang gampang discan', 'Latest articles that are easy to scan')); ?></span>
        <span><?php echo esc_html(contenly_tr('Cerita real dari member', 'Real stories from members')); ?></span>
        <span><?php echo esc_html(contenly_tr('Insight buat first timer sampai family trip', 'Useful insights from first-timers to family travellers')); ?></span>
      </div>
    </div>
  </section>

  <section class="blog-section">
    <div class="site-container">
      <div class="blog-tax-wrap">
        <div class="blog-tax" id="blog-tax-filter">
          <span><?php echo esc_html(contenly_tr('Kategori:', 'Category:')); ?></span>
          <a href="<?php echo esc_url(contenly_localized_blog_category_url('all')); ?>" class="chip chip--active" data-category="all"><?php echo esc_html(contenly_tr('Semua', 'All')); ?></a>
          <?php foreach ($cats as $cat) {
            if (strtolower($cat->slug) === 'uncategorized') continue;
            echo '<a href="' . esc_url(contenly_localized_blog_category_url($cat->slug)) . '" class="chip" data-category="' . esc_attr($cat->slug) . '">' . esc_html(contenly_blog_category_label($cat)) . '</a>';
          } ?>
        </div>
      </div>

      <div class="blog-list-head latest-head latest-head--top">
        <div>
          <h2><?php echo esc_html(contenly_tr('Artikel Terbaru', 'Latest Articles')); ?></h2>
          <p><?php echo esc_html(contenly_tr('Pilih artikel yang paling relevan dulu, lalu lanjutin dari list samping kalau mau baca yang lain. Jadi feel-nya mirip section homepage, tapi hierarkinya lebih rapi.', 'Start with the most relevant article, then continue through the side list if you want more. It keeps the homepage feel while giving the archive a cleaner hierarchy.')); ?></p>
        </div>
      </div>

      <div id="blog-latest-results">
      <?php if ($featured_article) :
        $featured_categories = get_the_category($featured_article->ID);
        $featured_primary_category = isset($featured_categories[0]) ? contenly_blog_category_label($featured_categories[0]) : contenly_tr('Artikel', 'Article');
      ?>
        <div class="blog-latest-layout">
          <div class="blog-latest-main">
            <article class="featured-article-slide featured-article-slide--homefeel">
              <a href="<?php echo esc_url(get_permalink($featured_article)); ?>" class="featured-article-media">
                <?php if (has_post_thumbnail($featured_article)) : ?>
                  <?php echo get_the_post_thumbnail($featured_article, 'large', ['style' => 'width:100%;height:100%;object-fit:cover;display:block;']); ?>
                <?php else : ?>
                  <div class="featured-article-fallback"><span><?php echo esc_html(contenly_tr('Artikel Terbaru', 'Latest Article')); ?></span></div>
                <?php endif; ?>
                <span class="featured-article-badge"><?php echo esc_html(contenly_tr('Artikel Pilihan', 'Featured Article')); ?></span>
              </a>
              <div class="featured-article-body">
                <div class="featured-article-meta-wrap">
                  <span class="featured-article-chip"><?php echo esc_html($featured_primary_category); ?></span>
                  <span class="meta featured-article-meta"><?php echo esc_html(get_the_date('d M Y', $featured_article)); ?> • <?php echo esc_html(get_the_author_meta('display_name', $featured_article->post_author)); ?></span>
                </div>
                <h3><a href="<?php echo esc_url(get_permalink($featured_article)); ?>"><?php echo esc_html(get_the_title($featured_article)); ?></a></h3>
                <p><?php echo esc_html(wp_trim_words(get_the_excerpt($featured_article) ?: $featured_article->post_content, 34, '...')); ?></p>
                <div class="featured-article-actions">
                  <a class="read" href="<?php echo esc_url(get_permalink($featured_article)); ?>"><?php echo esc_html(contenly_tr('Baca selengkapnya →', 'Read more →')); ?></a>
                  <span class="featured-article-helper"><?php echo esc_html(contenly_tr('Insight rapi dari tim Ganesha Travel buat bantu planning trip', 'Practical insights from the Ganesha Travel team to help you plan better trips')); ?></span>
                </div>
              </div>
            </article>
          </div>

          <aside class="blog-latest-sidebar">
            <div class="blog-latest-sidebar-card">
              <div class="blog-latest-sidebar-head">
                <span class="blog-latest-sidebar-kicker"><?php echo esc_html(contenly_tr('Artikel Lainnya', 'More Articles')); ?></span>
                <h3><?php echo esc_html(contenly_tr('Artikel terbaru lainnya', 'More recent articles')); ?></h3>
                <p><?php echo esc_html(contenly_tr('Quick scan buat lihat topik lain tanpa harus turun ke section bawah dulu.', 'Quick scan other topics without having to scroll further down first.')); ?></p>
              </div>

              <div class="blog-latest-sidebar-list">
                <?php if (!empty($latest_sidebar_articles)) : ?>
                  <?php foreach ($latest_sidebar_articles as $sidebar_article) :
                    $sidebar_categories = get_the_category($sidebar_article->ID);
                    $sidebar_primary_category = isset($sidebar_categories[0]) ? contenly_blog_category_label($sidebar_categories[0]) : contenly_tr('Artikel', 'Article');
                  ?>
                    <article class="blog-latest-mini-item">
                      <a href="<?php echo esc_url(get_permalink($sidebar_article)); ?>" class="blog-latest-mini-link">
                        <span class="blog-latest-mini-thumb-wrap">
                          <?php if (has_post_thumbnail($sidebar_article)) : ?>
                            <?php echo get_the_post_thumbnail($sidebar_article, 'medium', ['class' => 'blog-latest-mini-thumb', 'style' => 'width:100%;height:100%;object-fit:cover;display:block;']); ?>
                          <?php else : ?>
                            <span class="blog-latest-mini-thumb blog-latest-mini-thumb--fallback">✈️</span>
                          <?php endif; ?>
                        </span>
                        <span class="blog-latest-mini-copy">
                          <span class="blog-latest-mini-meta-row">
                            <span class="blog-latest-mini-category"><?php echo esc_html($sidebar_primary_category); ?></span>
                            <span class="blog-latest-mini-date"><?php echo esc_html(get_the_date('d M Y', $sidebar_article)); ?></span>
                          </span>
                          <strong><?php echo esc_html(get_the_title($sidebar_article)); ?></strong>
                        </span>
                      </a>
                    </article>
                  <?php endforeach; ?>
                <?php else : ?>
                  <div class="blog-latest-mini-empty"><?php echo esc_html(contenly_tr('Belum ada artikel lain yang tayang.', 'No other articles have been published yet.')); ?></div>
                <?php endif; ?>
              </div>

              <a href="<?php echo esc_url(contenly_localized_url('/blog/')); ?>" class="blog-latest-sidebar-cta"><?php echo esc_html(contenly_tr('Lihat semua artikel', 'View all articles')); ?></a>
            </div>
          </aside>
        </div>
      <?php else : ?>
        <div class="blog-empty-card">
          <p class="empty"><?php echo esc_html(contenly_tr('Belum ada artikel terbaru yang dipublikasikan.', 'No latest articles have been published yet.')); ?></p>
        </div>
      <?php endif; ?>
      </div>

      <div class="blog-list-head member-head">
        <div>
          <h2><?php echo esc_html(contenly_tr('Cerita Member', 'Member Stories')); ?></h2>
          <p><?php echo esc_html(contenly_tr('Pengalaman trip real dari member Ganesha Travel. Biar calon traveler bisa kebayang vibe perjalanan, ritme itinerary, dan insight yang beneran kejadian di lapangan.', 'Real trip experiences from Ganesha Travel members, so future travellers can picture the vibe, itinerary rhythm, and insights that truly happened on the ground.')); ?></p>
        </div>
      </div>

      <div id="blog-member-results">
      <?php if ($featured_member_story) : ?>
        <div class="member-story-stack">
          <article class="member-featured-story">
            <a href="<?php echo esc_url(get_permalink($featured_member_story)); ?>" class="member-featured-media">
              <?php if (has_post_thumbnail($featured_member_story)) : ?>
                <?php echo get_the_post_thumbnail($featured_member_story, 'large', ['style' => 'width:100%;height:100%;object-fit:cover;display:block;']); ?>
              <?php else : ?>
                <div class="blog-fallback"><span>Member Story</span></div>
              <?php endif; ?>
              <span class="member-featured-badge"><?php echo esc_html(contenly_tr('Member Story Pilihan', 'Featured Member Story')); ?></span>
            </a>
            <div class="member-featured-body">
              <div class="member-featured-meta-wrap">
                <span class="member-featured-chip"><?php echo esc_html(contenly_tr('Cerita Member', 'Member Story')); ?></span>
                <span class="meta member-featured-meta"><?php echo esc_html(get_the_date('d M Y', $featured_member_story)); ?> • <?php echo esc_html(get_the_author_meta('display_name', $featured_member_story->post_author)); ?></span>
              </div>
              <h3><a href="<?php echo esc_url(get_permalink($featured_member_story)); ?>"><?php echo esc_html(get_the_title($featured_member_story)); ?></a></h3>
              <p><?php echo esc_html(wp_trim_words(get_the_excerpt($featured_member_story) ?: $featured_member_story->post_content, 34, '...')); ?></p>
              <div class="member-featured-actions">
                <a class="read" href="<?php echo esc_url(get_permalink($featured_member_story)); ?>"><?php echo esc_html(contenly_tr('Baca cerita →', 'Read the story →')); ?></a>
                <span class="member-featured-helper"><?php echo esc_html(contenly_tr('Insight itinerary & pengalaman trip real dari member', 'Itinerary insights and real trip experiences from members')); ?></span>
              </div>
            </div>
          </article>

          <?php if (!empty($member_story_cards)) : ?>
            <div class="blog-grid member-story-grid member-story-grid--section">
              <?php foreach ($member_story_cards as $story) : ?>
                <article class="blog-card member-card">
                  <a href="<?php echo esc_url(get_permalink($story)); ?>" class="blog-media">
                    <span class="blog-card-badge"><?php echo esc_html(contenly_tr('Cerita Member', 'Member Story')); ?></span>
                    <?php if (has_post_thumbnail($story)) : ?>
                      <?php echo get_the_post_thumbnail($story, 'medium_large', ['style' => 'width:100%;height:100%;object-fit:cover;']); ?>
                    <?php else : ?>
                      <div class="blog-fallback"><span>Member Story</span></div>
                    <?php endif; ?>
                  </a>
                  <div class="blog-body">
                    <div class="meta"><?php echo esc_html(get_the_date('d M Y', $story)); ?> · <?php echo esc_html(get_the_author_meta('display_name', $story->post_author)); ?></div>
                    <h3><a href="<?php echo esc_url(get_permalink($story)); ?>"><?php echo esc_html(get_the_title($story)); ?></a></h3>
                    <p><?php echo esc_html(wp_trim_words(get_the_excerpt($story) ?: $story->post_content, 18, '...')); ?></p>
                    <a class="read" href="<?php echo esc_url(get_permalink($story)); ?>"><?php echo esc_html(contenly_tr('Baca cerita →', 'Read the story →')); ?></a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php else : ?>
        <div class="blog-empty-card">
          <p><?php echo esc_html(contenly_tr('Cerita member belum tersedia. Nanti section ini otomatis terisi begitu ada story member yang dipublikasikan.', 'Member stories are not available yet. This section will be filled automatically once a member story is published.')); ?></p>
        </div>
      <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<script id="blog-live-filter-data" type="application/json"><?php echo wp_json_encode([
  'latest' => $latest_payload,
  'member' => $member_payload,
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>

<style>
.blog-page-v2{background:#f8fafc}
.blog-hero{padding:120px 0 60px;background:linear-gradient(135deg,#355F72,#539294 60%,#E5A736);color:#fff;text-align:center}
.blog-eyebrow{margin:0 0 8px;font-size:12px;letter-spacing:.08em;text-transform:uppercase;font-weight:800;opacity:.92}
.blog-hero h1{margin:0 0 10px;font-size:clamp(32px,5vw,50px)}
.blog-hero p{margin:0 auto;max-width:760px;font-size:18px;opacity:.95;line-height:1.7}
.blog-hero-proof{margin:18px auto 0;display:flex;justify-content:center;gap:10px;flex-wrap:wrap}
.blog-hero-proof span{display:inline-flex;align-items:center;min-height:34px;padding:0 14px;border-radius:999px;background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.22);color:#EEF5F4;font-size:12px;font-weight:700;letter-spacing:.02em}
.blog-section{padding:50px 0 68px}

.blog-tax-wrap{margin-bottom:34px}
.blog-tax{display:flex;gap:10px;align-items:center;flex-wrap:wrap;padding:14px 16px;border-radius:22px;background:linear-gradient(180deg,#ffffff 0%,#f8fbff 100%);border:1px solid #E6EFED;box-shadow:0 10px 24px rgba(15,23,42,.04)}
.blog-tax span{font-size:13px;color:#64748b;font-weight:800;margin-right:2px}
.chip{display:inline-flex;align-items:center;height:36px;padding:0 14px;border-radius:999px;border:1px solid #DCE9E6;background:rgba(255,255,255,.92);color:#355F72 !important;-webkit-text-fill-color:#355F72;text-decoration:none;font-size:13px;font-weight:700;box-shadow:0 6px 14px rgba(15,23,42,.04);transition:transform .18s ease, box-shadow .18s ease, border-color .18s ease, background .18s ease, color .18s ease}
.chip:hover,.chip:focus-visible{transform:translateY(-1px);box-shadow:0 10px 18px rgba(15,23,42,.07);border-color:#BFD8D6;background:#fff;color:#355F72 !important;-webkit-text-fill-color:#355F72}
.chip--active{background:linear-gradient(135deg,#355F72,#539294);color:#fff !important;-webkit-text-fill-color:#fff;border-color:#355F72;box-shadow:0 14px 26px rgba(53,95,114,.22)}
.chip--active:hover,.chip--active:focus-visible{color:#fff !important;-webkit-text-fill-color:#fff;border-color:#355F72;background:linear-gradient(135deg,#355F72,#539294)}

.blog-list-head{display:flex;justify-content:space-between;align-items:flex-end;gap:16px;flex-wrap:wrap;margin:0 0 20px}
.blog-list-head h2{margin:0;color:#0f172a;font-size:30px}
.blog-list-head p{margin:0;max-width:760px;color:#64748b;line-height:1.75}
.latest-head--top{margin-top:10px}
.member-head{margin-top:48px}

.blog-latest-layout{display:grid;grid-template-columns:minmax(0,1.12fr) minmax(340px,.88fr);gap:24px;align-items:stretch;margin-bottom:8px}
.blog-latest-main,.blog-latest-sidebar{min-width:0}
.blog-latest-sidebar-card{background:#fff;border:1px solid #DCE9E6;border-radius:26px;padding:20px;box-shadow:0 14px 28px rgba(15,23,42,.06);height:100%;display:flex;flex-direction:column}
.blog-latest-sidebar-head{display:flex;flex-direction:column;gap:6px;margin-bottom:16px}
.blog-latest-sidebar-kicker{display:inline-flex;align-items:center;width:max-content;min-height:26px;padding:0 10px;border-radius:999px;background:#EEF5F4;color:#355F72;font-size:11px;font-weight:800;letter-spacing:.06em;text-transform:uppercase}
.blog-latest-sidebar-head h3{margin:0;font-size:24px;color:#0f172a}
.blog-latest-sidebar-head p{margin:0;color:#64748b;line-height:1.65;font-size:14px}
.blog-latest-sidebar-list{display:grid;gap:12px}
.blog-latest-mini-item{margin:0}
.blog-latest-mini-link{display:flex;align-items:stretch;gap:12px;text-decoration:none;padding:10px 0;border-bottom:1px solid #E7EFED}
.blog-latest-mini-item:last-child .blog-latest-mini-link{border-bottom:none;padding-bottom:0}
.blog-latest-mini-thumb-wrap{width:120px;min-width:120px;height:96px;border-radius:16px;overflow:hidden;background:#dce9e6;display:block;box-shadow:0 10px 18px rgba(15,23,42,.06)}
.blog-latest-mini-thumb{width:100%;height:100%;object-fit:cover;display:block}
.blog-latest-mini-thumb--fallback{display:flex;align-items:center;justify-content:center;width:100%;height:100%;background:linear-gradient(135deg,#355F72,#539294);color:#fff;font-size:28px}
.blog-latest-mini-copy{display:flex;flex-direction:column;justify-content:center;gap:8px;min-width:0}
.blog-latest-mini-meta-row{display:flex;align-items:center;gap:8px;flex-wrap:wrap}
.blog-latest-mini-category{display:inline-flex;align-items:center;min-height:22px;padding:0 8px;border-radius:999px;background:#EEF5F4;color:#355F72;font-size:10px;font-weight:800;letter-spacing:.05em;text-transform:uppercase}
.blog-latest-mini-copy strong{color:#0f172a;font-size:16px;line-height:1.42;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
.blog-latest-mini-date{font-size:11px;color:#94a3b8;font-weight:700;letter-spacing:.03em}
.blog-latest-mini-empty{padding:12px 0;color:#64748b;font-size:14px}
.blog-latest-sidebar-cta{display:inline-flex;align-items:center;margin-top:18px;color:#355F72;text-decoration:none;font-weight:700}

.featured-article-slide{display:grid;grid-template-columns:1fr;gap:18px;background:linear-gradient(180deg,#ffffff 0%,#f8fbff 100%);border:1px solid #DCE9E6;border-radius:30px;padding:18px;box-shadow:0 18px 36px rgba(15,23,42,.08);align-items:stretch;overflow:hidden;height:100%}
.member-featured-story{display:grid;grid-template-columns:1fr;gap:16px;background:linear-gradient(180deg,#ffffff 0%,#fbfefd 100%);border:1px solid #E6EFED;border-radius:26px;padding:16px;box-shadow:0 12px 24px rgba(15,23,42,.05);align-items:stretch;overflow:hidden;height:100%}
.featured-article-media,.member-featured-media{display:block;position:relative;overflow:hidden;border-radius:24px;background:#dce9e6;aspect-ratio:16/9;box-shadow:0 18px 28px rgba(83,146,148,.12)}
.member-featured-media{border-radius:20px;box-shadow:0 12px 22px rgba(83,146,148,.09)}
.featured-article-media img,.member-featured-media img{display:block;width:100%;height:100%;object-fit:cover}
.featured-article-badge,.member-featured-badge{position:absolute;left:16px;bottom:16px;z-index:2;display:inline-flex;align-items:center;min-height:34px;padding:0 14px;border-radius:999px;background:rgba(15,23,42,.62);backdrop-filter:blur(10px);color:#fff;font-size:12px;font-weight:800;letter-spacing:.05em;text-transform:uppercase;box-shadow:0 12px 24px rgba(15,23,42,.18)}
.member-featured-badge{min-height:30px;padding:0 12px;font-size:11px;box-shadow:0 10px 18px rgba(15,23,42,.14)}
.featured-article-fallback{height:100%;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#355F72,#539294,#E5A736);color:#fff}
.featured-article-fallback span{font-weight:700;letter-spacing:.04em}
.featured-article-body,.member-featured-body{display:flex;flex-direction:column;justify-content:flex-start;padding:4px 6px 6px;min-width:0;gap:14px}
.member-featured-body{gap:12px;padding:2px 4px 4px}
.featured-article-meta-wrap,.member-featured-meta-wrap{display:flex;align-items:center;gap:10px;flex-wrap:wrap}
.featured-article-chip,.member-featured-chip{display:inline-flex;align-items:center;min-height:28px;padding:0 12px;border-radius:999px;background:#E3EEEC;color:#355F72;font-size:12px;font-weight:800;letter-spacing:.06em;text-transform:uppercase}
.member-featured-chip{min-height:26px;padding:0 10px;font-size:11px;background:#EEF5F4}
.featured-article-body h3,.member-featured-body h3{margin:0;font-size:34px;line-height:1.12;letter-spacing:-.035em;color:#0f172a;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}
.member-featured-body h3{font-size:30px;-webkit-line-clamp:2}
.featured-article-body h3 a,.member-featured-body h3 a{text-decoration:none;color:#0f172a}
.featured-article-body p,.member-featured-body p{margin:0;color:#64748b;line-height:1.85;font-size:16px;display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;overflow:hidden}
.member-featured-body p{font-size:15px;line-height:1.75;-webkit-line-clamp:3}
.featured-article-meta,.member-featured-meta{font-size:13px;color:#94a3b8;margin:0}
.member-featured-meta{font-size:12px}
.featured-article-actions,.member-featured-actions{display:flex;align-items:center;gap:12px;flex-wrap:wrap;padding-top:12px;border-top:1px solid #E7EFED}
.member-featured-actions{padding-top:10px;gap:10px}
.featured-article-helper,.member-featured-helper{font-size:13px;color:#94a3b8}
.member-featured-helper{font-size:12px}

.member-story-stack{display:grid;gap:20px}
.blog-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px}
.member-story-grid--section{margin-bottom:4px}
.blog-card{background:#fff;border:1px solid #e2e8f0;border-radius:18px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 8px 20px rgba(15,23,42,.06);transition:transform .22s ease,box-shadow .22s ease}
.blog-card:hover,.featured-article-slide:hover,.member-featured-story:hover{transform:translateY(-3px);box-shadow:0 18px 34px rgba(15,23,42,.12)}
.blog-media{height:190px;display:block;overflow:hidden;position:relative}
.blog-card-badge{position:absolute;top:12px;left:12px;z-index:2;display:inline-flex;align-items:center;min-height:30px;padding:0 12px;border-radius:999px;background:rgba(255,255,255,.92);color:#355F72;font-size:12px;font-weight:800;box-shadow:0 10px 22px rgba(15,23,42,.12)}
.blog-fallback{height:100%;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#355F72,#539294);color:#fff}
.blog-fallback span{font-weight:700;letter-spacing:.04em}
.blog-body{padding:16px;display:grid;gap:8px;flex:1}
.blog-body h3{margin:0;font-size:20px;line-height:1.3;min-height:54px;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
.blog-body h3 a{text-decoration:none;color:#0f172a}
.blog-body p{margin:0;color:#64748b;line-height:1.7;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}
.meta{font-size:12px;color:#64748b;margin-bottom:8px}
.read{color:#539294;text-decoration:none;font-weight:700}
.member-card{border-color:#DCE9E6;background:linear-gradient(180deg,#fff 0%,#fbfefd 100%)}
.blog-empty-card{background:#fff;border:1px solid #e2e8f0;border-radius:20px;padding:20px;box-shadow:0 10px 24px rgba(15,23,42,.05)}
.empty{text-align:center;color:#64748b;margin:0}

@media (max-width: 1100px){
  .blog-grid,.member-story-grid{grid-template-columns:repeat(2,minmax(0,1fr))}
  .blog-latest-layout{grid-template-columns:1fr}
  .featured-article-body h3,.member-featured-body h3{font-size:30px}
}
@media (max-width: 768px){
  .blog-hero{padding:112px 0 48px}
  .blog-grid,.member-story-grid{grid-template-columns:1fr}
  .blog-list-head h2{font-size:24px}
  .featured-article-slide,.member-featured-story{padding:14px;gap:16px;border-radius:22px}
  .featured-article-media,.member-featured-media{border-radius:18px}
  .featured-article-body h3,.member-featured-body h3{font-size:28px}
  .blog-latest-sidebar-card{padding:14px}
  .blog-latest-mini-thumb-wrap{width:104px;min-width:104px;height:84px}
  .blog-latest-mini-copy strong{font-size:15px}
  .member-head{margin-top:40px}
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const filterRoot = document.getElementById('blog-tax-filter');
  const latestRoot = document.getElementById('blog-latest-results');
  const memberRoot = document.getElementById('blog-member-results');
  const dataEl = document.getElementById('blog-live-filter-data');
  if (!filterRoot || !latestRoot || !memberRoot || !dataEl) return;

  const params = new URLSearchParams(window.location.search || '');
  const requestedCategory = (params.get('category') || 'all').trim().toLowerCase();

  let payload = { latest: [], member: [] };
  try {
    payload = JSON.parse(dataEl.textContent || '{}');
  } catch (err) {
    console.error('blog live filter payload parse failed', err);
    return;
  }

  const escapeHtml = (value) => String(value || '')
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#039;');

  const renderImage = (url, fallbackText, cls) => {
    if (url) {
      return `<img src="${escapeHtml(url)}" alt="${escapeHtml(fallbackText)}" class="${cls}" style="width:100%;height:100%;object-fit:cover;display:block;">`;
    }
    return `<div class="blog-fallback"><span>${escapeHtml(fallbackText)}</span></div>`;
  };

  const renderLatest = (items) => {
    if (!items.length) {
      latestRoot.innerHTML = `<div class="blog-empty-card"><p class="empty"><?php echo esc_js(contenly_tr('Belum ada artikel di kategori ini.', 'No articles are available in this category.')); ?></p></div>`;
      return;
    }

    const featured = items[0];
    const sidebar = items.slice(1, 5);
    latestRoot.innerHTML = `
      <div class="blog-latest-layout">
        <div class="blog-latest-main">
          <article class="featured-article-slide featured-article-slide--homefeel">
            <a href="${escapeHtml(featured.url)}" class="featured-article-media">
              ${renderImage(featured.image_url, featured.title, '')}
              <span class="featured-article-badge"><?php echo esc_js(contenly_tr('Artikel Pilihan', 'Featured Article')); ?></span>
            </a>
            <div class="featured-article-body">
              <div class="featured-article-meta-wrap">
                <span class="featured-article-chip">${escapeHtml(featured.category_name)}</span>
                <span class="meta featured-article-meta">${escapeHtml(featured.date)} • ${escapeHtml(featured.author)}</span>
              </div>
              <h3><a href="${escapeHtml(featured.url)}">${escapeHtml(featured.title)}</a></h3>
              <p>${escapeHtml(featured.excerpt)}</p>
              <div class="featured-article-actions">
                <a class="read" href="${escapeHtml(featured.url)}"><?php echo esc_js(contenly_tr('Baca selengkapnya →', 'Read more →')); ?></a>
                <span class="featured-article-helper"><?php echo esc_js(contenly_tr('Insight rapi dari tim Ganesha Travel buat bantu planning trip', 'Practical insights from the Ganesha Travel team to help you plan better trips')); ?></span>
              </div>
            </div>
          </article>
        </div>
        <aside class="blog-latest-sidebar">
          <div class="blog-latest-sidebar-card">
            <div class="blog-latest-sidebar-head">
              <span class="blog-latest-sidebar-kicker"><?php echo esc_js(contenly_tr('Artikel Lainnya', 'More Articles')); ?></span>
              <h3><?php echo esc_js(contenly_tr('Artikel terbaru lainnya', 'More recent articles')); ?></h3>
              <p><?php echo esc_js(contenly_tr('Quick scan buat lihat topik lain tanpa harus turun ke section bawah dulu.', 'Quickly scan other topics without having to scroll down first.')); ?></p>
            </div>
            <div class="blog-latest-sidebar-list">
              ${sidebar.length ? sidebar.map(item => `
                <article class="blog-latest-mini-item">
                  <a href="${escapeHtml(item.url)}" class="blog-latest-mini-link">
                    <span class="blog-latest-mini-thumb-wrap">
                      ${item.image_url_medium ? `<img src="${escapeHtml(item.image_url_medium)}" alt="${escapeHtml(item.title)}" class="blog-latest-mini-thumb" style="width:100%;height:100%;object-fit:cover;display:block;">` : `<span class="blog-latest-mini-thumb blog-latest-mini-thumb--fallback">✈️</span>`}
                    </span>
                    <span class="blog-latest-mini-copy">
                      <span class="blog-latest-mini-meta-row">
                        <span class="blog-latest-mini-category">${escapeHtml(item.category_name)}</span>
                        <span class="blog-latest-mini-date">${escapeHtml(item.date)}</span>
                      </span>
                      <strong>${escapeHtml(item.title)}</strong>
                    </span>
                  </a>
                </article>
              `).join('') : `<div class="blog-latest-mini-empty"><?php echo esc_js(contenly_tr('Belum ada artikel lain di kategori ini.', 'No other articles are available in this category.')); ?></div>`}
            </div>
            <a href="<?php echo esc_url(contenly_localized_url('/blog/')); ?>" class="blog-latest-sidebar-cta"><?php echo esc_js(contenly_tr('Lihat semua artikel', 'View all articles')); ?></a>
          </div>
        </aside>
      </div>`;
  };

  const renderMember = (items) => {
    if (!items.length) {
      memberRoot.innerHTML = `<div class="blog-empty-card"><p class="empty"><?php echo esc_js(contenly_tr('Belum ada cerita member di kategori ini.', 'No member stories are available in this category.')); ?></p></div>`;
      return;
    }

    const featured = items[0];
    const cards = items.slice(1, 6);
    memberRoot.innerHTML = `
      <div class="member-story-stack">
        <article class="member-featured-story">
          <a href="${escapeHtml(featured.url)}" class="member-featured-media">
            ${renderImage(featured.image_url, featured.title, '')}
            <span class="member-featured-badge"><?php echo esc_js(contenly_tr('Member Story Pilihan', 'Featured Member Story')); ?></span>
          </a>
          <div class="member-featured-body">
            <div class="member-featured-meta-wrap">
              <span class="member-featured-chip"><?php echo esc_js(contenly_tr('Cerita Member', 'Member Story')); ?></span>
              <span class="meta member-featured-meta">${escapeHtml(featured.date)} • ${escapeHtml(featured.author)}</span>
            </div>
            <h3><a href="${escapeHtml(featured.url)}">${escapeHtml(featured.title)}</a></h3>
            <p>${escapeHtml(featured.excerpt)}</p>
            <div class="member-featured-actions">
              <a class="read" href="${escapeHtml(featured.url)}"><?php echo esc_js(contenly_tr('Baca cerita →', 'Read the story →')); ?></a>
              <span class="member-featured-helper"><?php echo esc_js(contenly_tr('Insight itinerary & pengalaman trip real dari member', 'Itinerary insights and real trip experiences from members')); ?></span>
            </div>
          </div>
        </article>
        ${cards.length ? `<div class="blog-grid member-story-grid member-story-grid--section">${cards.map(item => `
          <article class="blog-card member-card">
            <a href="${escapeHtml(item.url)}" class="blog-media">
              <span class="blog-card-badge"><?php echo esc_js(contenly_tr('Cerita Member', 'Member Story')); ?></span>
              ${item.image_url_medium ? `<img src="${escapeHtml(item.image_url_medium)}" alt="${escapeHtml(item.title)}" style="width:100%;height:100%;object-fit:cover;display:block;">` : `<div class="blog-fallback"><span>Member Story</span></div>`}
            </a>
            <div class="blog-body">
              <div class="meta">${escapeHtml(item.date)} · ${escapeHtml(item.author)}</div>
              <h3><a href="${escapeHtml(item.url)}">${escapeHtml(item.title)}</a></h3>
              <p>${escapeHtml(item.short_excerpt)}</p>
              <a class="read" href="${escapeHtml(item.url)}"><?php echo esc_js(contenly_tr('Baca cerita →', 'Read the story →')); ?></a>
            </div>
          </article>`).join('')}</div>` : ''}
      </div>`;
  };

  const setActiveChip = (category) => {
    filterRoot.querySelectorAll('.chip').forEach(el => el.classList.remove('chip--active'));
    const activeChip = filterRoot.querySelector(`.chip[data-category="${CSS.escape(category)}"]`) || filterRoot.querySelector('.chip[data-category="all"]');
    if (activeChip) {
      activeChip.classList.add('chip--active');
    }
  };

  const applyFilter = (category) => {
    const normalizedCategory = category && category !== 'all' ? category : 'all';
    const latestItems = normalizedCategory === 'all'
      ? payload.latest
      : payload.latest.filter(item => Array.isArray(item.category_slugs) && item.category_slugs.includes(normalizedCategory));
    const memberItems = normalizedCategory === 'all'
      ? payload.member
      : payload.member.filter(item => Array.isArray(item.category_slugs) && item.category_slugs.includes(normalizedCategory));

    setActiveChip(normalizedCategory);
    renderLatest(latestItems);
    renderMember(memberItems);
  };

  filterRoot.querySelectorAll('.chip[data-category]').forEach((chip) => {
    chip.addEventListener('click', function (event) {
      event.preventDefault();
      const category = (chip.getAttribute('data-category') || 'all').trim().toLowerCase();
      const targetUrl = chip.getAttribute('href');
      applyFilter(category);
      if (targetUrl) {
        window.history.replaceState({}, '', targetUrl);
      }
    });
  });

  const availableCategories = new Set(['all']);
  filterRoot.querySelectorAll('.chip[data-category]').forEach((chip) => {
    availableCategories.add((chip.getAttribute('data-category') || 'all').trim().toLowerCase());
  });

  applyFilter(availableCategories.has(requestedCategory) ? requestedCategory : 'all');
});
</script>

<?php get_footer(); ?>