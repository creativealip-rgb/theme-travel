<!doctype html>
<html <?php language_attributes(); ?>>
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><?php wp_head(); ?>
<style id="wd-equipment-proportion-final">
/* Tighten equipment cards so product photos sit proportionally, without a huge empty top area. */
.wd-equipment-grid{align-items:stretch}
.wd-equipment-grid .wd-equip-card{display:flex!important;flex-direction:column;min-height:0!important;height:auto!important;border-radius:26px!important;background:#fff!important;border:1px solid rgba(7,31,42,.08)!important;box-shadow:0 18px 44px rgba(7,31,42,.09)!important;text-align:left!important;overflow:hidden!important}
.wd-equip-photo{width:100%!important;height:230px!important;aspect-ratio:auto!important;margin:0!important;border-radius:26px 26px 0 0!important;background:linear-gradient(180deg,#f8fbfc 0%,#edf6f7 100%)!important;display:flex!important;align-items:center!important;justify-content:center!important;overflow:hidden!important}
.wd-equip-photo img{width:100%!important;height:100%!important;object-fit:contain!important;display:block!important;filter:drop-shadow(0 14px 18px rgba(0,0,0,.12))!important}
.wd-equipment-grid .wd-equip-card h3{margin:20px 24px 6px!important;color:#071f2a!important;font-size:clamp(1.35rem,2vw,1.75rem)!important;line-height:1.05!important}
.wd-equipment-grid .wd-equip-card p{margin:0 24px 18px!important;color:#60727a!important;min-height:42px!important;line-height:1.45!important}
.wd-equipment-grid .wd-equip-card span{margin:0 24px 24px!important;align-self:flex-start!important}
.wd-equip-photo img[alt^="Masks"]{padding:24px!important}
.wd-equip-photo img[alt^="Wetsuits"]{padding:10px 48px!important}
.wd-equip-photo img[alt^="BCD"]{padding:16px 42px!important}
.wd-equip-photo img[alt^="Regulators"]{padding:24px 18px!important}
.wd-equip-photo img[alt^="Fins"]{padding:30px 20px!important}
.wd-equip-photo img[alt^="Dive Computers"]{padding:18px 52px!important}
@media(max-width:980px){.wd-equip-photo{height:220px!important}}
@media(max-width:640px){.wd-equipment-grid .wd-equip-card{border-radius:22px!important}.wd-equip-photo{height:205px!important;border-radius:22px 22px 0 0!important}.wd-equipment-grid .wd-equip-card p{min-height:0!important}.wd-equip-photo img[alt^="Dive Computers"]{padding:16px 62px!important}}
</style>

<style id="wd-equipment-product-set-final">
.wd-equip-photo img[alt^="Wetsuits"]{padding:8px 34px}
.wd-equip-photo img[alt^="BCD"]{padding:14px 28px}
.wd-equip-photo img[alt^="Regulators"]{padding:22px 18px}
.wd-equip-photo img[alt^="Fins"]{padding:28px 16px}
.wd-equip-photo img[alt^="Masks"]{padding:30px}
.wd-equip-photo img[alt^="Dive Computers"]{padding:18px}
</style>

<style id="wd-equipment-watch-photo-final">
/* Equipment cards now use the provided product photo, not generic stock imagery. */
.wd-equipment-grid .wd-equip-card{position:relative;overflow:hidden;text-align:left;min-height:420px;padding:0;background:#071e2a!important;border:1px solid rgba(255,255,255,.1);box-shadow:0 24px 70px rgba(5,24,32,.16)}
.wd-equipment-grid .wd-equip-card:before,.wd-equipment-grid .wd-equip-card:after{display:none!important;content:none!important}
.wd-equip-photo{display:block;width:100%;aspect-ratio:1.08/1;background:#f7fafb;overflow:hidden;border-radius:28px 28px 0 0}
.wd-equip-photo img{width:100%;height:100%;object-fit:contain;display:block;padding:18px;filter:drop-shadow(0 18px 26px rgba(0,0,0,.18))}
.wd-equipment-grid .wd-equip-card h3,.wd-equipment-grid .wd-equip-card p,.wd-equipment-grid .wd-equip-card span{position:relative;z-index:2;margin-left:24px;margin-right:24px}
.wd-equipment-grid .wd-equip-card h3{margin-top:22px;color:#fff!important}
.wd-equipment-grid .wd-equip-card p{color:rgba(233,247,250,.76)!important}
.wd-equipment-grid .wd-equip-card span{display:inline-flex;margin-bottom:24px;color:#031c24!important;background:#7be7ef;border-radius:999px;padding:10px 15px;font-weight:800}
.wd-equipment-grid .wd-equip-icon{display:none!important}
@media(max-width:760px){.wd-equipment-grid .wd-equip-card{min-height:auto}.wd-equip-photo{aspect-ratio:1.25/1}.wd-equip-photo img{padding:14px}}
</style>

<style id="wd-equipment-padding-hardfix">
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card{padding:0!important;display:flex!important;flex-direction:column!important;justify-content:flex-start!important;align-items:stretch!important;min-height:0!important;height:auto!important}
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card .wd-equip-photo{margin:0!important;width:100%!important;height:230px!important;display:flex!important;align-items:center!important;justify-content:center!important}
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card h3{margin:20px 24px 6px!important;padding:0!important}
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card p{margin:0 24px 18px!important;padding:0!important}
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card span{margin:0 24px 24px!important}
@media(max-width:640px){html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card .wd-equip-photo{height:205px!important}}
</style>

<style id="wd-equipment-rmbg-set-final">
html body.whaledive-home #equipment .wd-equip-photo{background:radial-gradient(circle at 50% 72%,rgba(6,31,42,.10) 0 22%,transparent 23%),linear-gradient(180deg,#f8fbfc 0%,#eef7f7 100%)!important}
html body.whaledive-home #equipment .wd-equip-photo img{object-fit:contain!important;filter:drop-shadow(0 16px 20px rgba(0,0,0,.16))!important}
html body.whaledive-home #equipment .wd-equip-photo img[alt^="Masks"]{padding:34px 26px!important}
html body.whaledive-home #equipment .wd-equip-photo img[alt^="Wetsuits"]{padding:10px 74px!important}
html body.whaledive-home #equipment .wd-equip-photo img[alt^="BCD"]{padding:12px 64px!important}
html body.whaledive-home #equipment .wd-equip-photo img[alt^="Regulators"]{padding:42px 18px!important}
html body.whaledive-home #equipment .wd-equip-photo img[alt^="Fins"]{padding:34px 22px!important}
html body.whaledive-home #equipment .wd-equip-photo img[alt^="Dive Computers"]{padding:18px 86px!important}
@media(max-width:640px){html body.whaledive-home #equipment .wd-equip-photo img[alt^="Wetsuits"]{padding:8px 82px!important}html body.whaledive-home #equipment .wd-equip-photo img[alt^="BCD"]{padding:10px 76px!important}html body.whaledive-home #equipment .wd-equip-photo img[alt^="Dive Computers"]{padding:16px 92px!important}}
</style>

<style id="wd-equipment-image-bg-remove-final">
/* Remove the rounded image plate behind transparent equipment PNGs. */
html body.whaledive-home #equipment .wd-equip-photo{background:transparent!important;border-radius:0!important;box-shadow:none!important;overflow:visible!important}
html body.whaledive-home #equipment .wd-equip-photo:before,html body.whaledive-home #equipment .wd-equip-photo:after{display:none!important;content:none!important}
html body.whaledive-home #equipment .wd-equip-photo img{background:transparent!important;box-shadow:none!important}
html body.whaledive-home #equipment .wd-equipment-grid .wd-equip-card{background:linear-gradient(180deg,#fff 0%,#f7fbfb 100%)!important}
</style>

<style id="wd-compressed-course-assets-final">
html body.whaledive-home #courses .wd-course-card{overflow:hidden!important;padding-top:0!important;display:flex!important;flex-direction:column!important}
html body.whaledive-home #courses .wd-course-photo{width:calc(100% + 2px)!important;height:190px!important;margin:-1px -1px 20px!important;border-radius:24px 24px 0 0!important;overflow:hidden!important;background:#092c3a!important;position:relative!important}
html body.whaledive-home #courses .wd-course-photo:after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(4,20,28,.05),rgba(4,20,28,.42));pointer-events:none}
html body.whaledive-home #courses .wd-course-photo img{width:100%!important;height:100%!important;object-fit:cover!important;display:block!important;filter:saturate(.98) contrast(1.04)}
html body.whaledive-home #courses .wd-course-no,html body.whaledive-home #courses .wd-course-card h3,html body.whaledive-home #courses .wd-course-meta,html body.whaledive-home #courses .wd-course-card p,html body.whaledive-home #courses .wd-course-card a{margin-left:24px!important;margin-right:24px!important}
html body.whaledive-home #courses .wd-course-card a{margin-bottom:24px!important;margin-top:auto!important}
@media(max-width:760px){html body.whaledive-home #courses .wd-course-photo{height:210px!important}}
</style>

<style id="wd-course-layout-clean-final">
html body.whaledive-home #courses.wd-dark{background:radial-gradient(circle at 20% 0%,rgba(39,209,221,.14),transparent 34%),linear-gradient(180deg,#061b27 0%,#03131d 100%)!important;overflow:hidden!important}
html body.whaledive-home #courses .wd-course-grid{display:grid!important;grid-template-columns:repeat(6,minmax(0,1fr))!important;gap:22px!important;align-items:stretch!important;margin-top:42px!important}
html body.whaledive-home #courses .wd-course-card{grid-column:span 2!important;position:relative!important;display:flex!important;flex-direction:column!important;min-height:0!important;height:auto!important;padding:22px!important;overflow:hidden!important;text-align:left!important;border-radius:28px!important;background:linear-gradient(180deg,rgba(10,45,60,.96),rgba(5,27,39,.98))!important;border:1px solid rgba(119,221,231,.24)!important;box-shadow:0 26px 70px rgba(0,0,0,.26)!important}
html body.whaledive-home #courses .wd-course-card:nth-child(4){grid-column:2 / span 2!important}
html body.whaledive-home #courses .wd-course-card:nth-child(5){grid-column:4 / span 2!important}
html body.whaledive-home #courses .wd-course-top{display:flex!important;align-items:flex-start!important;justify-content:space-between!important;gap:14px!important;position:relative!important;z-index:2!important;margin:0 0 16px!important}
html body.whaledive-home #courses .wd-course-meta{display:flex!important;gap:8px!important;flex-wrap:wrap!important;margin:0!important}
html body.whaledive-home #courses .wd-course-meta span{display:inline-flex!important;align-items:center!important;border-radius:999px!important;padding:7px 10px!important;background:rgba(174,221,226,.14)!important;border:1px solid rgba(174,221,226,.18)!important;color:#dff9fb!important;font-size:.7rem!important;letter-spacing:.08em!important;text-transform:uppercase!important;font-weight:800!important;line-height:1!important}
html body.whaledive-home #courses .wd-course-no{margin:0!important;position:absolute!important;right:-2px!important;top:-18px!important;z-index:0!important;color:rgba(141,230,236,.12)!important;font-size:5.4rem!important;line-height:1!important;font-weight:900!important;letter-spacing:-.08em!important;pointer-events:none!important}
html body.whaledive-home #courses .wd-course-photo{position:relative!important;z-index:1!important;width:100%!important;height:188px!important;margin:0 0 22px!important;border-radius:20px!important;overflow:hidden!important;background:#092c3a!important;box-shadow:inset 0 0 0 1px rgba(255,255,255,.06)!important}
html body.whaledive-home #courses .wd-course-photo:after{content:""!important;position:absolute!important;inset:0!important;background:linear-gradient(180deg,rgba(4,20,28,0) 40%,rgba(4,20,28,.18) 100%)!important;pointer-events:none!important}
html body.whaledive-home #courses .wd-course-photo img{width:100%!important;height:100%!important;object-fit:cover!important;display:block!important;filter:saturate(1.03) contrast(1.04)!important}
html body.whaledive-home #courses .wd-course-card h3{position:relative!important;z-index:2!important;margin:0 0 10px!important;color:#fff!important;font-size:clamp(1.45rem,2vw,2rem)!important;line-height:1.05!important;letter-spacing:-.03em!important;text-align:left!important}
html body.whaledive-home #courses .wd-course-card p{position:relative!important;z-index:2!important;margin:0 0 22px!important;color:rgba(226,246,248,.76)!important;line-height:1.55!important;min-height:50px!important;text-align:left!important}
html body.whaledive-home #courses .wd-course-card a{position:relative!important;z-index:2!important;margin:auto 0 0!important;align-self:flex-start!important;display:inline-flex!important;border-radius:999px!important;padding:12px 18px!important;background:#78e7ef!important;color:#04202a!important;font-weight:900!important;text-decoration:none!important}
@media(max-width:980px){html body.whaledive-home #courses .wd-course-grid{grid-template-columns:repeat(2,minmax(0,1fr))!important}html body.whaledive-home #courses .wd-course-card,html body.whaledive-home #courses .wd-course-card:nth-child(4),html body.whaledive-home #courses .wd-course-card:nth-child(5){grid-column:auto!important}.wd-course-photo{height:200px!important}}
@media(max-width:640px){html body.whaledive-home #courses .wd-course-grid{grid-template-columns:1fr!important;gap:18px!important;margin-top:28px!important}html body.whaledive-home #courses .wd-course-card{padding:18px!important;border-radius:24px!important}html body.whaledive-home #courses .wd-course-photo{height:210px!important;border-radius:18px!important}html body.whaledive-home #courses .wd-course-no{font-size:4.4rem!important;top:-12px!important}html body.whaledive-home #courses .wd-course-card p{min-height:0!important}}
</style>

<style id="wd-course-slider-final">
/* Course cards become a single-row horizontal slider instead of a two-line grid. */
html body.whaledive-home #courses .wd-course-grid{display:flex!important;grid-template-columns:none!important;gap:22px!important;align-items:stretch!important;overflow-x:auto!important;overflow-y:visible!important;scroll-snap-type:x mandatory!important;scroll-padding-left:max(24px,calc((100vw - 1160px)/2))!important;padding:8px max(24px,calc((100vw - 1160px)/2)) 24px!important;margin-left:calc(-1 * max(24px,calc((100vw - 1160px)/2)))!important;margin-right:calc(-1 * max(24px,calc((100vw - 1160px)/2)))!important;-webkit-overflow-scrolling:touch!important;overscroll-behavior-x:contain!important}
html body.whaledive-home #courses .wd-course-grid::-webkit-scrollbar{height:8px!important}
html body.whaledive-home #courses .wd-course-grid::-webkit-scrollbar-track{background:rgba(255,255,255,.06)!important;border-radius:999px!important}
html body.whaledive-home #courses .wd-course-grid::-webkit-scrollbar-thumb{background:rgba(120,231,239,.55)!important;border-radius:999px!important}
html body.whaledive-home #courses .wd-course-card,html body.whaledive-home #courses .wd-course-card:nth-child(4),html body.whaledive-home #courses .wd-course-card:nth-child(5){grid-column:auto!important;flex:0 0 clamp(310px,31vw,370px)!important;width:clamp(310px,31vw,370px)!important;scroll-snap-align:start!important}
html body.whaledive-home #courses .wd-section-cta{margin-top:18px!important}
html body.whaledive-home #courses .wd-divider:after{content:"Swipe course path";display:inline-flex;margin-left:14px;border:1px solid rgba(120,231,239,.26);border-radius:999px;padding:7px 11px;color:#9deef4;font-size:.72rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase;vertical-align:middle}
@media(min-width:1240px){html body.whaledive-home #courses .wd-course-card,html body.whaledive-home #courses .wd-course-card:nth-child(4),html body.whaledive-home #courses .wd-course-card:nth-child(5){flex-basis:370px!important;width:370px!important}}
@media(max-width:760px){html body.whaledive-home #courses .wd-course-grid{gap:16px!important;padding-bottom:20px!important}html body.whaledive-home #courses .wd-course-card{flex-basis:min(86vw,360px)!important;width:min(86vw,360px)!important}html body.whaledive-home #courses .wd-divider:after{display:none!important}}
</style>

<style id="wd-course-slider-fade-final">
/* Make the course carousel feel intentional: contained track with soft blurred edges. */
html body.whaledive-home #courses .wd-shell{position:relative!important;overflow:hidden!important}
html body.whaledive-home #courses .wd-course-grid{position:relative!important;width:100%!important;margin-left:0!important;margin-right:0!important;padding:10px 0 30px!important;scroll-padding-left:0!important;mask-image:linear-gradient(90deg,transparent 0,#000 7%,#000 93%,transparent 100%)!important;-webkit-mask-image:linear-gradient(90deg,transparent 0,#000 7%,#000 93%,transparent 100%)!important;scrollbar-width:thin!important;scrollbar-color:rgba(120,231,239,.58) rgba(255,255,255,.07)!important}
html body.whaledive-home #courses .wd-shell:before,html body.whaledive-home #courses .wd-shell:after{content:""!important;position:absolute!important;top:185px!important;bottom:86px!important;width:78px!important;z-index:6!important;pointer-events:none!important;backdrop-filter:blur(2px)!important;-webkit-backdrop-filter:blur(2px)!important}
html body.whaledive-home #courses .wd-shell:before{left:0!important;background:linear-gradient(90deg,#061b27 0%,rgba(6,27,39,.82) 35%,rgba(6,27,39,0) 100%)!important}
html body.whaledive-home #courses .wd-shell:after{right:0!important;background:linear-gradient(270deg,#03131d 0%,rgba(3,19,29,.82) 35%,rgba(3,19,29,0) 100%)!important}
html body.whaledive-home #courses .wd-course-card{position:relative!important;z-index:1!important}
html body.whaledive-home #courses .wd-course-grid::-webkit-scrollbar{height:6px!important}
html body.whaledive-home #courses .wd-course-grid::-webkit-scrollbar-track{background:rgba(255,255,255,.055)!important;border-radius:999px!important;margin-inline:90px!important}
html body.whaledive-home #courses .wd-course-grid::-webkit-scrollbar-thumb{background:linear-gradient(90deg,#6edfe8,#a8fbff)!important;border-radius:999px!important}
html body.whaledive-home #courses .wd-divider:after{content:"Drag / swipe"!important}
@media(max-width:760px){html body.whaledive-home #courses .wd-course-grid{mask-image:linear-gradient(90deg,transparent 0,#000 10%,#000 90%,transparent 100%)!important;-webkit-mask-image:linear-gradient(90deg,transparent 0,#000 10%,#000 90%,transparent 100%)!important}html body.whaledive-home #courses .wd-shell:before,html body.whaledive-home #courses .wd-shell:after{top:170px!important;bottom:70px!important;width:38px!important}}
</style>

<style id="wd-course-click-slider-final">
/* Click/drag carousel: no native scrollbar, edge fade sits flush with section edges. */
html body.whaledive-home #courses{position:relative!important}
html body.whaledive-home #courses .wd-shell{overflow:visible!important}
html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{content:""!important;position:absolute!important;top:0!important;bottom:0!important;width:clamp(58px,7vw,120px)!important;z-index:8!important;pointer-events:none!important;backdrop-filter:blur(3px)!important;-webkit-backdrop-filter:blur(3px)!important}
html body.whaledive-home #courses:before{left:0!important;background:linear-gradient(90deg,#061b27 0%,rgba(6,27,39,.86) 42%,rgba(6,27,39,0) 100%)!important}
html body.whaledive-home #courses:after{right:0!important;background:linear-gradient(270deg,#03131d 0%,rgba(3,19,29,.86) 42%,rgba(3,19,29,0) 100%)!important}
html body.whaledive-home #courses .wd-course-grid{cursor:grab!important;scroll-behavior:smooth!important;scrollbar-width:none!important;-ms-overflow-style:none!important;mask-image:none!important;-webkit-mask-image:none!important;padding-left:0!important;padding-right:0!important}
html body.whaledive-home #courses .wd-course-grid::-webkit-scrollbar{display:none!important}
html body.whaledive-home #courses .wd-course-grid.is-dragging{cursor:grabbing!important;scroll-snap-type:none!important;user-select:none!important}
html body.whaledive-home #courses .wd-course-grid.is-dragging *{pointer-events:none!important}
html body.whaledive-home #courses .wd-slider-controls{position:relative!important;z-index:12!important;display:flex!important;justify-content:center!important;gap:12px!important;margin:12px 0 0!important}
html body.whaledive-home #courses .wd-slider-btn{width:46px!important;height:46px!important;border-radius:999px!important;border:1px solid rgba(120,231,239,.34)!important;background:rgba(8,40,54,.82)!important;color:#a8fbff!important;font-size:2rem!important;line-height:1!important;display:inline-flex!important;align-items:center!important;justify-content:center!important;cursor:pointer!important;box-shadow:0 14px 36px rgba(0,0,0,.26)!important;transition:transform .18s ease,background .18s ease!important}
html body.whaledive-home #courses .wd-slider-btn:hover{transform:translateY(-2px)!important;background:rgba(120,231,239,.18)!important}
html body.whaledive-home #courses .wd-slider-btn:disabled{opacity:.35!important;cursor:not-allowed!important;transform:none!important}
html body.whaledive-home #courses .wd-divider:after{content:"Click / drag"!important}
@media(max-width:760px){html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{width:34px!important;backdrop-filter:blur(2px)!important;-webkit-backdrop-filter:blur(2px)!important}html body.whaledive-home #courses .wd-slider-btn{width:42px!important;height:42px!important}}
</style>

<style id="wd-course-edge-viewport-final">
/* Extend carousel fade to the actual viewport edges, matching the marked red zones. */
html body.whaledive-home #courses{position:relative!important;isolation:isolate!important;overflow:hidden!important}
html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{content:""!important;position:absolute!important;top:0!important;bottom:0!important;width:clamp(92px,12vw,190px)!important;z-index:20!important;pointer-events:none!important;backdrop-filter:blur(4px)!important;-webkit-backdrop-filter:blur(4px)!important}
html body.whaledive-home #courses:before{left:calc(50% - 50vw)!important;background:linear-gradient(90deg,#061b27 0%,rgba(6,27,39,.94) 34%,rgba(6,27,39,.58) 68%,rgba(6,27,39,0) 100%)!important}
html body.whaledive-home #courses:after{right:calc(50% - 50vw)!important;background:linear-gradient(270deg,#03131d 0%,rgba(3,19,29,.94) 34%,rgba(3,19,29,.58) 68%,rgba(3,19,29,0) 100%)!important}
html body.whaledive-home #courses .wd-slider-controls,html body.whaledive-home #courses .wd-section-cta,html body.whaledive-home #courses .wd-divider,html body.whaledive-home #courses .wd-sub{position:relative!important;z-index:25!important}
html body.whaledive-home #courses .wd-course-grid{position:relative!important;z-index:10!important}
@media(max-width:760px){html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{width:54px!important;backdrop-filter:blur(3px)!important;-webkit-backdrop-filter:blur(3px)!important}}
</style>

<style id="wd-course-smooth-compact-final">
/* Smoother viewport-edge fade and slightly more compact course cards. */
html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{width:clamp(74px,9vw,150px)!important;backdrop-filter:blur(1.5px)!important;-webkit-backdrop-filter:blur(1.5px)!important}
html body.whaledive-home #courses:before{background:linear-gradient(90deg,#061b27 0%,rgba(6,27,39,.82) 24%,rgba(6,27,39,.42) 56%,rgba(6,27,39,.14) 78%,rgba(6,27,39,0) 100%)!important}
html body.whaledive-home #courses:after{background:linear-gradient(270deg,#03131d 0%,rgba(3,19,29,.82) 24%,rgba(3,19,29,.42) 56%,rgba(3,19,29,.14) 78%,rgba(3,19,29,0) 100%)!important}
html body.whaledive-home #courses .wd-course-card{padding:18px!important;flex-basis:clamp(292px,29vw,344px)!important;width:clamp(292px,29vw,344px)!important;border-radius:24px!important}
html body.whaledive-home #courses .wd-course-photo{height:166px!important;margin-bottom:18px!important;border-radius:18px!important}
html body.whaledive-home #courses .wd-course-top{margin-bottom:12px!important}
html body.whaledive-home #courses .wd-course-meta span{padding:6px 9px!important;font-size:.66rem!important}
html body.whaledive-home #courses .wd-course-no{font-size:4.8rem!important;top:-14px!important;right:0!important}
html body.whaledive-home #courses .wd-course-card h3{font-size:clamp(1.32rem,1.75vw,1.72rem)!important;margin-bottom:8px!important}
html body.whaledive-home #courses .wd-course-card p{font-size:.94rem!important;line-height:1.45!important;min-height:42px!important;margin-bottom:18px!important}
html body.whaledive-home #courses .wd-course-card a{padding:11px 16px!important;font-size:.92rem!important}
@media(max-width:760px){html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{width:24px!important;backdrop-filter:blur(.5px)!important;-webkit-backdrop-filter:blur(.5px)!important}html body.whaledive-home #courses:before{background:linear-gradient(90deg,#061b27 0%,rgba(6,27,39,.58) 35%,rgba(6,27,39,.18) 70%,rgba(6,27,39,0) 100%)!important}html body.whaledive-home #courses:after{background:linear-gradient(270deg,#03131d 0%,rgba(3,19,29,.58) 35%,rgba(3,19,29,.18) 70%,rgba(3,19,29,0) 100%)!important}html body.whaledive-home #courses .wd-course-card{flex-basis:min(82vw,330px)!important;width:min(82vw,330px)!important;padding:16px!important;border-radius:22px!important}html body.whaledive-home #courses .wd-course-photo{height:174px!important;margin-bottom:16px!important}html body.whaledive-home #courses .wd-course-card p{min-height:0!important;font-size:.9rem!important}html body.whaledive-home #courses .wd-course-no{font-size:4rem!important;top:-10px!important}}
</style>

<style id="wd-course-mobile-proportion-final">
/* Final polish: softer edge veil and better mobile course-card proportions. */
html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{width:clamp(56px,7vw,110px)!important;backdrop-filter:blur(.8px)!important;-webkit-backdrop-filter:blur(.8px)!important;opacity:.92!important}
html body.whaledive-home #courses:before{background:linear-gradient(90deg,#061b27 0%,rgba(6,27,39,.64) 28%,rgba(6,27,39,.28) 62%,rgba(6,27,39,.06) 84%,rgba(6,27,39,0) 100%)!important}
html body.whaledive-home #courses:after{background:linear-gradient(270deg,#03131d 0%,rgba(3,19,29,.64) 28%,rgba(3,19,29,.28) 62%,rgba(3,19,29,.06) 84%,rgba(3,19,29,0) 100%)!important}
html body.whaledive-home #courses .wd-course-card{min-height:0!important;flex-basis:clamp(286px,28vw,332px)!important;width:clamp(286px,28vw,332px)!important;padding:16px!important;border-radius:22px!important}
html body.whaledive-home #courses .wd-course-photo{height:150px!important;margin-bottom:15px!important;border-radius:16px!important}
html body.whaledive-home #courses .wd-course-top{margin-bottom:10px!important}
html body.whaledive-home #courses .wd-course-card p{min-height:0!important;margin-bottom:16px!important;display:-webkit-box!important;-webkit-line-clamp:2!important;-webkit-box-orient:vertical!important;overflow:hidden!important}
html body.whaledive-home #courses .wd-slider-controls{margin-top:8px!important}
@media(max-width:760px){html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{width:14px!important;backdrop-filter:none!important;-webkit-backdrop-filter:none!important;opacity:.78!important}html body.whaledive-home #courses:before{background:linear-gradient(90deg,rgba(6,27,39,.48) 0%,rgba(6,27,39,.18) 55%,rgba(6,27,39,0) 100%)!important}html body.whaledive-home #courses:after{background:linear-gradient(270deg,rgba(3,19,29,.48) 0%,rgba(3,19,29,.18) 55%,rgba(3,19,29,0) 100%)!important}html body.whaledive-home #courses .wd-course-grid{padding-top:6px!important;padding-bottom:18px!important;gap:14px!important;scroll-padding-left:18px!important}html body.whaledive-home #courses .wd-course-card{flex-basis:min(78vw,304px)!important;width:min(78vw,304px)!important;padding:14px!important;border-radius:20px!important}html body.whaledive-home #courses .wd-course-photo{height:142px!important;margin-bottom:13px!important;border-radius:15px!important}html body.whaledive-home #courses .wd-course-meta span{font-size:.61rem!important;padding:5px 8px!important}html body.whaledive-home #courses .wd-course-no{font-size:3.55rem!important;top:-8px!important;right:2px!important}html body.whaledive-home #courses .wd-course-card h3{font-size:1.28rem!important;margin-bottom:7px!important}html body.whaledive-home #courses .wd-course-card p{font-size:.84rem!important;line-height:1.4!important;margin-bottom:14px!important}html body.whaledive-home #courses .wd-course-card a{padding:10px 14px!important;font-size:.86rem!important}html body.whaledive-home #courses .wd-slider-btn{width:38px!important;height:38px!important;font-size:1.6rem!important}}
</style>

<style id="wd-course-cardonly-fade-final">
/* Keep the carousel edge veil only as tall as the course cards, not the full section. */
html body.whaledive-home #courses{position:relative!important;overflow:hidden!important}
html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{top:clamp(158px,16vw,214px)!important;bottom:auto!important;height:clamp(316px,34vw,418px)!important;width:clamp(50px,6vw,96px)!important;z-index:20!important;pointer-events:none!important;backdrop-filter:blur(.45px)!important;-webkit-backdrop-filter:blur(.45px)!important;opacity:.84!important}
html body.whaledive-home #courses:before{left:calc(50% - 50vw)!important;background:linear-gradient(90deg,rgba(6,27,39,.62) 0%,rgba(6,27,39,.34) 36%,rgba(6,27,39,.12) 70%,rgba(6,27,39,0) 100%)!important}
html body.whaledive-home #courses:after{right:calc(50% - 50vw)!important;background:linear-gradient(270deg,rgba(3,19,29,.62) 0%,rgba(3,19,29,.34) 36%,rgba(3,19,29,.12) 70%,rgba(3,19,29,0) 100%)!important}
@media(max-width:760px){html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{top:156px!important;height:322px!important;width:12px!important;backdrop-filter:none!important;-webkit-backdrop-filter:none!important;opacity:.64!important}html body.whaledive-home #courses:before{background:linear-gradient(90deg,rgba(6,27,39,.34) 0%,rgba(6,27,39,.12) 62%,rgba(6,27,39,0) 100%)!important}html body.whaledive-home #courses:after{background:linear-gradient(270deg,rgba(3,19,29,.34) 0%,rgba(3,19,29,.12) 62%,rgba(3,19,29,0) 100%)!important}}
@media(max-width:420px){html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{top:148px!important;height:306px!important;width:10px!important}}
</style>

<style id="wd-course-dynamic-card-fade-final">
/* Exact card-height edge fade, positioned from the real carousel card bounds. */
html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{display:none!important;content:none!important}
html body.whaledive-home #courses .wd-course-edge{position:absolute!important;z-index:20!important;pointer-events:none!important;width:clamp(46px,5.5vw,88px)!important;opacity:.78!important;transition:top .18s ease,height .18s ease!important}
html body.whaledive-home #courses .wd-course-edge.left{left:calc(50% - 50vw)!important;background:linear-gradient(90deg,rgba(6,27,39,.48) 0%,rgba(6,27,39,.22) 48%,rgba(6,27,39,.07) 74%,rgba(6,27,39,0) 100%)!important}
html body.whaledive-home #courses .wd-course-edge.right{right:calc(50% - 50vw)!important;background:linear-gradient(270deg,rgba(3,19,29,.48) 0%,rgba(3,19,29,.22) 48%,rgba(3,19,29,.07) 74%,rgba(3,19,29,0) 100%)!important}
@media(max-width:760px){html body.whaledive-home #courses .wd-course-edge{width:8px!important;opacity:.46!important}}
</style>

<style id="wd-course-mask-fade-final">
/* Use a real mask on the carousel track so the fade is smooth and only as tall as the cards. */
html body.whaledive-home #courses:before,html body.whaledive-home #courses:after{display:none!important;content:none!important}
html body.whaledive-home #courses .wd-course-edge{display:none!important}
html body.whaledive-home #courses .wd-course-grid{position:relative!important;z-index:10!important;mask-image:linear-gradient(90deg,transparent 0,#000 5.5%,#000 94.5%,transparent 100%)!important;-webkit-mask-image:linear-gradient(90deg,transparent 0,#000 5.5%,#000 94.5%,transparent 100%)!important;background:transparent!important}
html body.whaledive-home #courses .wd-slider-controls{margin-top:6px!important}
html body.whaledive-home #courses .wd-section-cta{margin-top:18px!important}
html body.whaledive-home #courses .wd-shell{padding-bottom:54px!important}
@media(max-width:760px){html body.whaledive-home #courses .wd-course-grid{mask-image:linear-gradient(90deg,transparent 0,#000 3.5%,#000 96.5%,transparent 100%)!important;-webkit-mask-image:linear-gradient(90deg,transparent 0,#000 3.5%,#000 96.5%,transparent 100%)!important}html body.whaledive-home #courses .wd-shell{padding-bottom:44px!important}html body.whaledive-home #courses .wd-section-cta{margin-top:14px!important}}
</style>

<style id="wd-course-mask-height-exact-final">
/* Make carousel mask height match the card height exactly: no vertical padding inside masked track. */
html body.whaledive-home #courses .wd-course-grid{padding-top:0!important;padding-bottom:0!important;align-items:stretch!important}
html body.whaledive-home #courses .wd-course-card{margin-top:0!important;margin-bottom:0!important}
html body.whaledive-home #courses .wd-slider-controls{margin-top:18px!important}
@media(max-width:760px){html body.whaledive-home #courses .wd-course-grid{padding-top:0!important;padding-bottom:0!important}html body.whaledive-home #courses .wd-slider-controls{margin-top:14px!important}}
</style>

<style id="wd-remove-click-drag-final">
html body.whaledive-home #courses .wd-divider:after{display:none!important;content:none!important}
</style>

<style id="wd-navbar-darker-final">
/* Whale Dive guideline: deeper ocean-navy navbar with subtle teal edge. */
html body.whaledive-home .wd-nav,
html body.whaledive-home header,
html body.whaledive-home .wd-header{
  background:linear-gradient(180deg,#03131d 0%,#061b27 100%)!important;
  border-color:rgba(120,231,239,.12)!important;
  box-shadow:0 18px 46px rgba(0,0,0,.34), inset 0 -1px 0 rgba(120,231,239,.08)!important;
}
html body.whaledive-home .wd-nav a:not(.wd-login),
html body.whaledive-home .wd-header a:not(.wd-login){color:rgba(235,250,252,.82)!important}
html body.whaledive-home .wd-nav a:not(.wd-login):hover,
html body.whaledive-home .wd-header a:not(.wd-login):hover{color:#a8fbff!important}
html body.whaledive-home .wd-brand span,
html body.whaledive-home .wd-logo-text{color:#f5fdff!important}
html body.whaledive-home .wd-login,
html body.whaledive-home a[href*="login"].wd-btn,
html body.whaledive-home .wd-nav .wd-btn{background:#14c7bd!important;color:#03131d!important;box-shadow:0 10px 24px rgba(20,199,189,.2)!important}
</style>

<style id="wd-navbar-white-font-final">
html body.whaledive-home .wd-nav a:not(.wd-login),
html body.whaledive-home .wd-header a:not(.wd-login),
html body.whaledive-home header nav a:not(.wd-login){color:#ffffff!important}
html body.whaledive-home .wd-nav a:not(.wd-login):hover,
html body.whaledive-home .wd-header a:not(.wd-login):hover,
html body.whaledive-home header nav a:not(.wd-login):hover{color:#a8fbff!important}
</style>

<style id="wd-course-strip-spacing-final">
/* Restore the right-side accent strip without the Click/Drag label, and tighten course section spacing. */
html body.whaledive-home #courses{padding-top:66px!important;padding-bottom:58px!important}
html body.whaledive-home #courses .wd-shell{padding-bottom:0!important}
html body.whaledive-home #courses .wd-divider{position:relative!important;display:flex!important;align-items:center!important;justify-content:center!important;margin-bottom:10px!important}
html body.whaledive-home #courses .wd-divider:after{content:""!important;display:block!important;position:absolute!important;right:0!important;top:50%!important;width:clamp(118px,18vw,250px)!important;height:7px!important;border-radius:999px!important;transform:translateY(-50%)!important;background:linear-gradient(90deg,rgba(120,231,239,.85),rgba(20,199,189,.42),rgba(120,231,239,0))!important;border:1px solid rgba(120,231,239,.14)!important;box-shadow:0 0 22px rgba(20,199,189,.14)!important}
html body.whaledive-home #courses .wd-sub{margin-bottom:24px!important}
html body.whaledive-home #courses .wd-course-grid{margin-top:0!important}
html body.whaledive-home #courses .wd-slider-controls{margin-top:14px!important;margin-bottom:0!important}
html body.whaledive-home #courses .wd-section-cta{margin-top:14px!important;margin-bottom:0!important}
html body.whaledive-home #courses + section{padding-top:62px!important}
@media(max-width:760px){html body.whaledive-home #courses{padding-top:52px!important;padding-bottom:46px!important}html body.whaledive-home #courses .wd-divider:after{width:82px!important;height:5px!important;right:0!important;opacity:.72!important}html body.whaledive-home #courses .wd-sub{margin-bottom:18px!important}html body.whaledive-home #courses .wd-slider-controls{margin-top:12px!important}html body.whaledive-home #courses .wd-section-cta{margin-top:12px!important}html body.whaledive-home #courses + section{padding-top:48px!important}}
</style>

<style id="wd-course-bottom-tight-final">
/* Tighten the carousel controls/CTA area so the course section does not leave a large empty slab. */
html body.whaledive-home #courses{padding-bottom:36px!important}
html body.whaledive-home #courses .wd-slider-controls{margin-top:10px!important;margin-bottom:0!important}
html body.whaledive-home #courses .wd-section-cta{margin-top:10px!important;margin-bottom:0!important;line-height:1!important}
html body.whaledive-home #courses .wd-section-cta .wd-btn{padding:13px 22px!important;min-height:0!important}
html body.whaledive-home #courses + section{padding-top:42px!important}
@media(max-width:760px){html body.whaledive-home #courses{padding-bottom:32px!important}html body.whaledive-home #courses .wd-slider-controls{margin-top:8px!important}html body.whaledive-home #courses .wd-section-cta{margin-top:8px!important}html body.whaledive-home #courses + section{padding-top:36px!important}}
</style>

<style id="wd-course-strip-match-final">
/* Match the right course-title strip to the subtle thin-line style on the left. */
html body.whaledive-home #courses .wd-divider:after{
  content:""!important;
  display:block!important;
  position:absolute!important;
  right:0!important;
  top:50%!important;
  width:clamp(132px,20vw,280px)!important;
  height:2px!important;
  border:0!important;
  border-radius:999px!important;
  transform:translateY(-50%)!important;
  background:linear-gradient(90deg,rgba(120,231,239,.66),rgba(120,231,239,.22),rgba(120,231,239,0))!important;
  box-shadow:0 0 14px rgba(120,231,239,.16)!important;
  opacity:.92!important;
}
@media(max-width:760px){
  html body.whaledive-home #courses .wd-divider:after{width:82px!important;height:2px!important;opacity:.72!important}
}
</style>

<style id="wd-course-strips-symmetric-final">
/* Symmetric thin accent lines on both sides of the course title. */
html body.whaledive-home #courses .wd-divider{position:relative!important;display:flex!important;align-items:center!important;justify-content:center!important;gap:24px!important}
html body.whaledive-home #courses .wd-divider:before,
html body.whaledive-home #courses .wd-divider:after{
  content:""!important;
  display:block!important;
  position:static!important;
  flex:1 1 0!important;
  max-width:280px!important;
  min-width:120px!important;
  width:auto!important;
  height:2px!important;
  border:0!important;
  border-radius:999px!important;
  transform:none!important;
  opacity:.82!important;
  box-shadow:0 0 12px rgba(120,231,239,.14)!important;
}
html body.whaledive-home #courses .wd-divider:before{background:linear-gradient(90deg,rgba(120,231,239,0),rgba(120,231,239,.22),rgba(120,231,239,.66))!important}
html body.whaledive-home #courses .wd-divider:after{background:linear-gradient(90deg,rgba(120,231,239,.66),rgba(120,231,239,.22),rgba(120,231,239,0))!important}
html body.whaledive-home #courses .wd-divider .wd-title{flex:0 0 auto!important;margin:0!important;position:relative!important;z-index:2!important}
@media(max-width:760px){html body.whaledive-home #courses .wd-divider{gap:12px!important}html body.whaledive-home #courses .wd-divider:before,html body.whaledive-home #courses .wd-divider:after{min-width:38px!important;max-width:82px!important;height:2px!important;opacity:.64!important}}
</style>

<style id="wd-course-strips-flat-final">
/* Final override: both title strips use the exact same flat thin-line system. */
html body.whaledive-home #courses .wd-divider{position:relative!important;display:flex!important;align-items:center!important;justify-content:center!important;gap:24px!important;background:transparent!important;isolation:isolate!important}
html body.whaledive-home #courses .wd-divider:before,
html body.whaledive-home #courses .wd-divider:after{
  content:""!important;
  display:block!important;
  position:static!important;
  flex:1 1 0!important;
  width:auto!important;
  min-width:120px!important;
  max-width:260px!important;
  height:1px!important;
  border:0!important;
  border-radius:0!important;
  transform:none!important;
  opacity:.72!important;
  box-shadow:none!important;
  filter:none!important;
}
html body.whaledive-home #courses .wd-divider:before{background:linear-gradient(90deg,rgba(120,231,239,0),rgba(120,231,239,.54))!important}
html body.whaledive-home #courses .wd-divider:after{background:linear-gradient(90deg,rgba(120,231,239,.54),rgba(120,231,239,0))!important}
html body.whaledive-home #courses .wd-title{background:transparent!important;text-shadow:none!important;box-shadow:none!important;filter:none!important}
html body.whaledive-home #courses .wd-title:before,
html body.whaledive-home #courses .wd-title:after{display:none!important;content:none!important}
@media(max-width:760px){html body.whaledive-home #courses .wd-divider{gap:12px!important}html body.whaledive-home #courses .wd-divider:before,html body.whaledive-home #courses .wd-divider:after{min-width:38px!important;max-width:76px!important;height:1px!important;opacity:.62!important}}
</style>

<style id="wd-course-strips-pill-both-final">
/* Make both course title accents identical, using the stronger Whale Dive glow-bar treatment on both sides. */
html body.whaledive-home #courses .wd-divider{position:relative!important;display:flex!important;align-items:center!important;justify-content:center!important;gap:24px!important;background:transparent!important;overflow:visible!important}
html body.whaledive-home #courses .wd-divider:before,
html body.whaledive-home #courses .wd-divider:after{
  content:""!important;
  display:block!important;
  position:static!important;
  flex:1 1 0!important;
  width:auto!important;
  min-width:120px!important;
  max-width:250px!important;
  height:7px!important;
  border:1px solid rgba(120,231,239,.14)!important;
  border-radius:999px!important;
  transform:none!important;
  opacity:.78!important;
  filter:none!important;
  box-shadow:0 0 18px rgba(20,199,189,.14)!important;
}
html body.whaledive-home #courses .wd-divider:before{background:linear-gradient(90deg,rgba(120,231,239,0),rgba(20,199,189,.42),rgba(120,231,239,.85))!important}
html body.whaledive-home #courses .wd-divider:after{background:linear-gradient(90deg,rgba(120,231,239,.85),rgba(20,199,189,.42),rgba(120,231,239,0))!important}
html body.whaledive-home #courses .wd-divider .wd-title{flex:0 0 auto!important;margin:0!important;background:transparent!important;text-shadow:none!important;box-shadow:none!important;filter:none!important}
html body.whaledive-home #courses .wd-title:before,
html body.whaledive-home #courses .wd-title:after{display:none!important;content:none!important}
@media(max-width:760px){html body.whaledive-home #courses .wd-divider{gap:12px!important}html body.whaledive-home #courses .wd-divider:before,html body.whaledive-home #courses .wd-divider:after{min-width:38px!important;max-width:82px!important;height:5px!important;opacity:.66!important}}
</style>

<style id="wd-course-strips-identical-final">
/* Force both course heading accents to be literally identical: same size, same color, no directional gradient. */
html body.whaledive-home #courses .wd-divider{
  position:relative!important;
  display:grid!important;
  grid-template-columns:minmax(90px,260px) auto minmax(90px,260px)!important;
  align-items:center!important;
  justify-content:center!important;
  column-gap:24px!important;
  background:transparent!important;
  overflow:visible!important;
}
html body.whaledive-home #courses .wd-divider:before,
html body.whaledive-home #courses .wd-divider:after{
  content:""!important;
  display:block!important;
  position:static!important;
  width:100%!important;
  min-width:0!important;
  max-width:none!important;
  height:5px!important;
  border:1px solid rgba(120,231,239,.12)!important;
  border-radius:999px!important;
  transform:none!important;
  opacity:.72!important;
  filter:none!important;
  box-shadow:0 0 14px rgba(20,199,189,.10)!important;
  background:rgba(120,231,239,.34)!important;
}
html body.whaledive-home #courses .wd-divider:before{grid-column:1!important;grid-row:1!important}
html body.whaledive-home #courses .wd-divider:after{grid-column:3!important;grid-row:1!important}
html body.whaledive-home #courses .wd-divider .wd-title{
  grid-column:2!important;
  grid-row:1!important;
  margin:0!important;
  background:transparent!important;
  text-shadow:none!important;
  box-shadow:none!important;
  filter:none!important;
  position:relative!important;
  z-index:2!important;
}
html body.whaledive-home #courses .wd-title:before,
html body.whaledive-home #courses .wd-title:after{display:none!important;content:none!important}
@media(max-width:760px){
  html body.whaledive-home #courses .wd-divider{grid-template-columns:minmax(34px,74px) auto minmax(34px,74px)!important;column-gap:12px!important}
  html body.whaledive-home #courses .wd-divider:before,
  html body.whaledive-home #courses .wd-divider:after{height:4px!important;opacity:.62!important}
}
</style>

<style id="wd-course-strips-fixed-final">
/* Lock both heading accents to fixed equal width and equal gap from the title. */
html body.whaledive-home #courses .wd-divider{
  position:relative!important;
  display:flex!important;
  align-items:center!important;
  justify-content:center!important;
  gap:22px!important;
  width:100%!important;
  background:transparent!important;
  overflow:visible!important;
}
html body.whaledive-home #courses .wd-divider:before,
html body.whaledive-home #courses .wd-divider:after{
  content:""!important;
  display:block!important;
  position:static!important;
  flex:0 0 190px!important;
  width:190px!important;
  min-width:190px!important;
  max-width:190px!important;
  height:5px!important;
  border:1px solid rgba(120,231,239,.12)!important;
  border-radius:999px!important;
  transform:none!important;
  opacity:.72!important;
  filter:none!important;
  box-shadow:0 0 14px rgba(20,199,189,.10)!important;
  background:rgba(120,231,239,.34)!important;
}
html body.whaledive-home #courses .wd-divider .wd-title{
  flex:0 0 auto!important;
  margin:0!important;
  background:transparent!important;
  text-shadow:none!important;
  box-shadow:none!important;
  filter:none!important;
}
html body.whaledive-home #courses .wd-title:before,
html body.whaledive-home #courses .wd-title:after{display:none!important;content:none!important}
@media(max-width:980px){html body.whaledive-home #courses .wd-divider:before,html body.whaledive-home #courses .wd-divider:after{flex-basis:120px!important;width:120px!important;min-width:120px!important;max-width:120px!important}}
@media(max-width:760px){html body.whaledive-home #courses .wd-divider{gap:12px!important}html body.whaledive-home #courses .wd-divider:before,html body.whaledive-home #courses .wd-divider:after{flex-basis:52px!important;width:52px!important;min-width:52px!important;max-width:52px!important;height:4px!important;opacity:.62!important}}
</style>

<style id="wd-course-strips-centered-final">
/* Center the heading group itself so both equal strips have identical visible gap and length. */
html body.whaledive-home #courses .wd-divider{
  position:relative!important;
  display:flex!important;
  align-items:center!important;
  justify-content:center!important;
  gap:22px!important;
  width:max-content!important;
  max-width:100%!important;
  margin-left:auto!important;
  margin-right:auto!important;
  background:transparent!important;
  overflow:visible!important;
}
html body.whaledive-home #courses .wd-divider:before,
html body.whaledive-home #courses .wd-divider:after{
  content:""!important;
  display:block!important;
  position:static!important;
  flex:0 0 190px!important;
  width:190px!important;
  min-width:190px!important;
  max-width:190px!important;
  height:5px!important;
  border:1px solid rgba(120,231,239,.12)!important;
  border-radius:999px!important;
  transform:none!important;
  opacity:.72!important;
  filter:none!important;
  box-shadow:0 0 14px rgba(20,199,189,.10)!important;
  background:rgba(120,231,239,.34)!important;
}
html body.whaledive-home #courses .wd-divider .wd-title{flex:0 0 auto!important;margin:0!important;background:transparent!important;text-shadow:none!important;box-shadow:none!important;filter:none!important}
html body.whaledive-home #courses .wd-title:before,
html body.whaledive-home #courses .wd-title:after{display:none!important;content:none!important}
@media(max-width:980px){html body.whaledive-home #courses .wd-divider:before,html body.whaledive-home #courses .wd-divider:after{flex-basis:120px!important;width:120px!important;min-width:120px!important;max-width:120px!important}}
@media(max-width:760px){html body.whaledive-home #courses .wd-divider{gap:12px!important;width:100%!important}html body.whaledive-home #courses .wd-divider:before,html body.whaledive-home #courses .wd-divider:after{flex:1 1 52px!important;width:auto!important;min-width:34px!important;max-width:52px!important;height:4px!important;opacity:.62!important}}
</style>

<style id="wd-course-strips-gapfix-final">
/* Browser-measured correction: equalize the visible gap from title to both strips. */
html body.whaledive-home #courses .wd-divider:after{margin-left:-36px!important}
@media(max-width:760px){html body.whaledive-home #courses .wd-divider:after{margin-left:0!important}}
</style>

<style id="wd-course-strips-measured-final">
/* Use measured real elements so left/right accents are exactly equal around the title. */
html body.whaledive-home #courses .wd-divider{position:relative!important;display:block!important;text-align:center!important;width:100%!important;margin-left:auto!important;margin-right:auto!important;overflow:visible!important;background:transparent!important}
html body.whaledive-home #courses .wd-divider:before,
html body.whaledive-home #courses .wd-divider:after{display:none!important;content:none!important}
html body.whaledive-home #courses .wd-divider .wd-title{display:inline-block!important;margin:0!important;position:relative!important;z-index:2!important;background:transparent!important;text-shadow:none!important;box-shadow:none!important;filter:none!important}
html body.whaledive-home #courses .wd-title:before,
html body.whaledive-home #courses .wd-title:after{display:none!important;content:none!important}
html body.whaledive-home #courses .wd-title-strip{position:absolute!important;top:50%!important;height:5px!important;width:190px!important;border:1px solid rgba(120,231,239,.12)!important;border-radius:999px!important;background:rgba(120,231,239,.34)!important;box-shadow:0 0 14px rgba(20,199,189,.10)!important;opacity:.72!important;transform:translateY(-50%)!important;pointer-events:none!important;z-index:1!important}
@media(max-width:980px){html body.whaledive-home #courses .wd-title-strip{width:120px!important}}
@media(max-width:760px){html body.whaledive-home #courses .wd-title-strip{width:52px!important;height:4px!important;opacity:.62!important}}
</style>
<script id="wd-course-strips-measured-js">
(function(){
  function syncCourseTitleStrips(){
    var divider=document.querySelector('#courses .wd-divider');
    if(!divider) return;
    var title=divider.querySelector('.wd-title');
    if(!title) return;
    var left=divider.querySelector('.wd-title-strip.left');
    var right=divider.querySelector('.wd-title-strip.right');
    if(!left){left=document.createElement('span');left.className='wd-title-strip left';divider.appendChild(left)}
    if(!right){right=document.createElement('span');right.className='wd-title-strip right';divider.appendChild(right)}
    var d=divider.getBoundingClientRect();
    var t=title.getBoundingClientRect();
    var vw=window.innerWidth||document.documentElement.clientWidth;
    var w=vw<=760?52:(vw<=980?120:190);
    var gap=vw<=760?12:22;
    left.style.left=(t.left-d.left-gap-w)+'px';
    right.style.left=(t.right-d.left+gap)+'px';
  }
  window.addEventListener('load',syncCourseTitleStrips);
  window.addEventListener('resize',syncCourseTitleStrips);
  document.addEventListener('DOMContentLoaded',syncCourseTitleStrips);
  setTimeout(syncCourseTitleStrips,250);
})();
</script>

<style id="wd-course-strips-thin-final">
/* Course title strips: match the equipment-section reference, thin tapered lines. */
html body.whaledive-home #courses .wd-title-strip{
  height:2px!important;
  width:190px!important;
  border:0!important;
  border-radius:999px!important;
  box-shadow:none!important;
  opacity:.82!important;
  background:transparent!important;
}
html body.whaledive-home #courses .wd-title-strip.left{
  background:linear-gradient(90deg,rgba(14,55,68,0),rgba(14,55,68,.78))!important;
}
html body.whaledive-home #courses .wd-title-strip.right{
  background:linear-gradient(90deg,rgba(14,55,68,.78),rgba(14,55,68,0))!important;
}
@media(max-width:980px){html body.whaledive-home #courses .wd-title-strip{width:120px!important}}
@media(max-width:760px){html body.whaledive-home #courses .wd-title-strip{width:52px!important;height:2px!important;opacity:.68!important}}
</style>

<style id="wd-equipment-compact-final">
/* Compact equipment cards while keeping product PNGs readable. */
html body.whaledive-home #equipment{padding-top:62px!important;padding-bottom:62px!important}
html body.whaledive-home #equipment .wd-section-head{margin-bottom:28px!important}
html body.whaledive-home #equipment .wd-equipment-grid,
html body.whaledive-home #equipment .wd-equip-grid{gap:18px!important}
html body.whaledive-home #equipment .wd-equip-card,
html body.whaledive-home #equipment article{
  min-height:0!important;
  padding:18px 18px 16px!important;
  border-radius:22px!important;
}
html body.whaledive-home #equipment .wd-equip-photo,
html body.whaledive-home #equipment figure{
  height:150px!important;
  min-height:150px!important;
  margin:0 0 12px!important;
  padding:0!important;
}
html body.whaledive-home #equipment .wd-equip-photo img,
html body.whaledive-home #equipment figure img{
  max-height:142px!important;
  object-fit:contain!important;
}
html body.whaledive-home #equipment h3{font-size:1.05rem!important;margin:0 0 6px!important;line-height:1.18!important}
html body.whaledive-home #equipment p{font-size:.88rem!important;line-height:1.45!important;margin:0 0 10px!important}
html body.whaledive-home #equipment .wd-equip-link,
html body.whaledive-home #equipment article > span:last-child{font-size:.72rem!important;letter-spacing:.08em!important}
@media(max-width:760px){
  html body.whaledive-home #equipment{padding-top:48px!important;padding-bottom:50px!important}
  html body.whaledive-home #equipment .wd-section-head{margin-bottom:22px!important}
  html body.whaledive-home #equipment .wd-equipment-grid,
  html body.whaledive-home #equipment .wd-equip-grid{gap:14px!important}
  html body.whaledive-home #equipment .wd-equip-card,
  html body.whaledive-home #equipment article{padding:16px!important;border-radius:20px!important}
  html body.whaledive-home #equipment .wd-equip-photo,
  html body.whaledive-home #equipment figure{height:130px!important;min-height:130px!important;margin-bottom:10px!important}
  html body.whaledive-home #equipment .wd-equip-photo img,
  html body.whaledive-home #equipment figure img{max-height:124px!important}
}
</style>
</head>
<body <?php body_class('whaledive-home'); ?>><?php wp_body_open(); ?>
<main class="wd-page">
  <header class="wd-header"><div class="wd-shell"><div class="wd-nav"><a class="wd-brand" href="/"><img src="https://whaledivecentre.com/wp-content/themes/theme-travel-master/assets/logo.jpg" alt="Whale Dive Centre"><span>Whale Dive Centre</span></a><button class="wd-hamburger" type="button" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button><nav class="wd-menu" id="wd-mobile-menu"><a href="/">Home</a><a href="/courses/">Courses</a><a href="/equipment/">Equipment</a><a href="/about/">About</a><?php if(is_user_logged_in()){ $u=wp_get_current_user(); echo '<a href="/member-dashboard/" class="wd-nav-member">Dashboard</a>'; } else { echo '<a href="/member-login/" class="wd-nav-member">Login</a>'; } ?></nav></div></div></header>

  <!-- HERO -->
  <section class="wd-hero wd-hero-simple"><div class="wd-shell wd-hero-focus"><div class="wd-hero-copy"><span class="wd-kicker">Scuba training, gear support & dive community</span><h1>Dive Beyond<br>the Surface.</h1><p>Jakarta-based scuba training, gear fitting, and small-group dive support built around calm briefings, safer habits, and ocean-ready confidence.</p><div class="wd-actions"><a class="wd-btn" href="/courses/">Explore Courses</a><a class="wd-btn alt" href="/about/#contact-form">Ask the Crew</a></div><div class="wd-hero-proof"><span><b>PADI / SSI</b> aligned pathway</span><span><b>Small groups</b> calmer skill progression</span><span><b>Gear fit</b> before open water</span></div></div><aside class="wd-hero-course" aria-label="Recommended beginner course"><span>Start here</span><h2>Open Water Diver</h2><p>Your first scuba certification with calm briefings, small groups, and ocean-ready skills.</p><div><b>3-4 days</b><b>Max 4 divers</b><b>From Rp 6.5M</b></div><a href="/courses/">See course path</a></aside></div></section>
  <section class="wd-section white wd-authentic"><div class="wd-shell"><div class="wd-divider"><h2 class="wd-title">Built for calmer, better-prepared divers</h2></div><p class="wd-sub">Training, equipment support, and trip planning are handled as one connected experience so every diver understands the plan before getting in the water.</p><div class="wd-auth-grid"><article class="wd-auth-card wd-auth-training"><span>Training</span><h3>Skill-first course sessions</h3><p>Clear briefings, repeated practice, and instructor-led progression before open-water confidence.</p></article><article class="wd-auth-card wd-auth-gear"><span>Gear fitting</span><h3>Comfort before checkout</h3><p>Mask fit, exposure protection, BCD sizing, and computer setup support from the crew.</p></article><article class="wd-auth-card wd-auth-trip"><span>Community</span><h3>Trips planned around conditions</h3><p>Site choice, group size, and diver readiness come before rushing a schedule.</p></article></div><p class="wd-photo-note">Every course plan starts with diver comfort, certification level, and schedule fit before the crew recommends the next step.</p></div></section>    <!-- WELCOME -->
  <section class="wd-section light wd-center"><div class="wd-shell"><h2 class="wd-title">Welcome to <em>Whale Dive Centre</em></h2><p class="wd-sub">A concise pathway for new and active divers: choose the right course, understand the gear, and meet the crew before your next ocean session.</p><div class="wd-checks"><div class="wd-check">Certified Instructors</div><div class="wd-check">Small Group Training</div><div class="wd-check">Safety Focused</div><div class="wd-check">Community Driven</div></div></div></section>

  <!-- AFFILIATIONS -->
  <section class="wd-section white wd-center"><div class="wd-shell"><div class="wd-divider"><h2 class="wd-title">Our Affiliations</h2></div><p class="wd-sub">Recognized dive education pathways, safety culture, and gear support brought into one clear local experience.</p><div class="wd-logos"><div class="wd-logo-pill">PADI<span>Recreational training</span></div><div class="wd-logo-pill">SSI<span>Dive education</span></div><div class="wd-logo-pill">NAUI<span>Safety standards</span></div><div class="wd-logo-pill">TDI<span>Technical pathway</span></div></div></div></section>

  <!-- COURSES -->
  <section id="courses" class="wd-section wd-dark wd-center"><div class="wd-shell"><div class="wd-divider"><h2 class="wd-title">Our Dive Courses</h2></div><p class="wd-sub">A structured pathway from your first breath underwater to pro-level dive leadership.</p><div class="wd-course-grid"><?php $courses=[['Open Water','Beginner','3-4 days','Your first certification to dive safely with a buddy.','open-water-diver','wdc-course-open-water.png'],['Advanced Open Water','Next level','2 days','Build confidence with deeper dives, navigation, and specialty skills.','advanced-open-water','wdc-course-advanced-open-water.png'],['Rescue Diver','Safety','2-3 days','Learn prevention, response, and real-world rescue thinking.','rescue-diver','wdc-course-rescue-diver.png'],['Divemaster','Pro track','Flexible','Lead dives, assist classes, and grow into a dive professional.','divemaster','wdc-course-divemaster.png'],['Instructor Course','Teach','Custom','Prepare to teach, mentor, and guide new divers.','instructor-course','wdc-course-instructor-course.png']]; foreach($courses as $i=>$c): ?><article class="wd-course-card"><div class="wd-course-top"><div class="wd-course-meta"><span><?php echo esc_html($c[1]); ?></span><span><?php echo esc_html($c[2]); ?></span></div><div class="wd-course-no">0<?php echo $i+1; ?></div></div><figure class="wd-course-photo"><img loading="lazy" decoding="async" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/<?php echo esc_attr($c[5]); ?>" alt="<?php echo esc_attr($c[0]); ?> scuba course photo"></figure><h3><?php echo esc_html($c[0]); ?></h3><p><?php echo esc_html($c[3]); ?></p><a href="/courses/">View course</a></article><?php endforeach; ?></div><div class="wd-slider-controls" aria-label="Course slider controls"><button class="wd-slider-btn prev" type="button" aria-label="Previous course">‹</button><button class="wd-slider-btn next" type="button" aria-label="Next course">›</button></div><div class="wd-section-cta"><a class="wd-btn" href="/courses/">View All Courses</a></div></div></section>

  <!-- DIVE SITES HIDDEN -->
<!-- EQUIPMENT -->
  <section id="equipment" class="wd-section white wd-center wd-eq"><div class="wd-shell"><div class="wd-divider"><h2 class="wd-title">Scuba Equipment for Sale</h2></div><p class="wd-sub">Essential gear categories for training, fun dives, and safer underwater comfort.</p><div class="wd-equipment-grid"><?php $eq=[['Masks','Clear vision and reliable fit','wdc-mask-compressed.png','masks'],['Wetsuits','Thermal comfort for longer dives','wdc-wetsuit-compressed.png','wetsuits'],['BCD','Buoyancy control and trim support','wdc-bcd-compressed.png','bcd'],['Regulators','Smooth breathing and safe air delivery','wdc-regulators-compressed.png','regulators'],['Fins','Efficient movement with less fatigue','wdc-fins-compressed.png','fins'],['Dive Computers','Track depth, time, tank pressure, and safer ascent data','wdc-dive-computer-compressed.png','dive-computers']]; foreach($eq as $e): $equipment_url=add_query_arg('category',$e[3],home_url('/equipment/')); ?><article class="wd-equip-card"><figure class="wd-equip-photo"><img loading="lazy" decoding="async" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/<?php echo esc_attr($e[2]); ?>" alt="<?php echo esc_attr($e[0]); ?> scuba equipment product photo"></figure><h3><?php echo esc_html($e[0]); ?></h3><p><?php echo esc_html($e[1]); ?></p><a class="wd-equip-link" href="<?php echo esc_url($equipment_url); ?>" aria-label="View <?php echo esc_attr($e[0]); ?> products">View product</a></article><?php endforeach; ?></div></div></section>

  <!-- SOCIAL PROOF (NEW) -->
  <section class="wd-section wd-proof wd-center"><div class="wd-shell"><span class="wd-kicker">Trusted by Divers</span><h2 class="wd-title">What Our Community Says</h2><div class="wd-reviews-grid">
    <article class="wd-review-card"><div class="wd-review-stars">★★★★★</div><p>"The crew made my first open water course feel safe and calm. Small group, patient instructors, and the gear was in great condition."</p><div class="wd-review-author"><b>Sarah M.</b><span>Open Water Diver</span></div></article>
    <article class="wd-review-card"><div class="wd-review-stars">★★★★★</div><p>"Serious training with a calm Jakarta-based crew. My Divemaster pathway felt structured, honest, and focused on real dive leadership."</p><div class="wd-review-author"><b>Marco R.</b><span>PADI Divemaster</span></div></article>
    <article class="wd-review-card"><div class="wd-review-stars">★★★★★</div><p>"Bought my first mask and fins here. The crew helped me find the right fit before I even got in the water. Great service."</p><div class="wd-review-author"><b>Ayu P.</b><span>Active Diver</span></div></article>
  </div></div></section>

  <!-- ARTICLES -->
  <section id="articles" class="wd-section wd-articles"><div class="wd-shell"><div class="wd-article-head"><div><span class="wd-kicker">Featured Article</span><h2 class="wd-title">Dive Stories & Ocean Notes</h2><p class="wd-sub">Short field notes for new divers, gear buyers, and ocean-minded community members.</p></div><a class="wd-btn" href="/blog/">Read Blog</a></div><div class="wd-article-grid"><article class="wd-featured-card"><span>Featured</span><h3>How to Prepare for Your First Open Water Course</h3><p>What to expect before pool sessions, ocean dives, equipment fitting, and the habits that make new divers feel calm underwater.</p><a href="/blog/">Read article</a></article><article class="wd-mini-article"><b>Gear Guide</b><h3><a href="/mask-fit-tips-buying-first-scuba-mask/">Mask fit tips before buying your first scuba mask</a></h3></article><article class="wd-mini-article"><b>Safety</b><h3><a href="/slow-ascents-buoyancy-control/">Why slow ascents and buoyancy control matter</a></h3></article><article class="wd-mini-article"><b>Community</b><h3><a href="/better-dive-habits-small-groups/">Building better dive habits with small groups</a></h3></article></div></div></section>

  <!-- MEMBERSHIP CTA -->
  <section id="membership" class="wd-section wd-community wd-center"><div class="wd-shell"><span class="wd-kicker">Member Portal</span><h2 class="wd-title">Join the Whale Dive Community</h2><p class="wd-sub">Use the member portal after enrollment to track course progress, equipment orders, certifications, and crew updates in one place.</p><div class="wd-trust-row"><div><b>Course tracking</b><span>Enrollment to certification</span></div><div><b>Equipment shop</b><span>Buy or rent gear online</span></div><div><b>Cert portfolio</b><span>All your dive cards in one place</span></div></div><a class="wd-btn alt" href="/member-register/">Create Free Account</a></div></section>

  <!-- FOOTER -->
  <footer id="contact" class="wd-footer"><div class="wd-shell"><div class="wd-footer-top"><div class="wd-footer-brand"><span class="wd-footer-kicker">Ready to dive?</span><h2>Whale Dive Centre</h2><p>Dive training, community trips, equipment support, and ocean-minded experiences for safer adventures below the surface.</p><a class="wd-btn alt" href="/about/#contact-form">Start Inquiry</a></div><nav class="wd-footer-col"><h3>Explore</h3><a href="/courses/">Dive Courses</a><a href="/equipment/">Scuba Equipment</a><a href="/about/">About Us</a><a href="/blog/">Blog</a></nav><nav class="wd-footer-col"><h3>Courses</h3><a href="/course/open-water-diver/">Open Water</a><a href="/course/advanced-open-water/">Advanced Open Water</a><a href="/course/rescue-diver/">Rescue Diver</a><a href="/course/divemaster/">Divemaster</a><a href="/course/instructor-course/">Instructor</a></nav><div class="wd-footer-col"><h3>Contact</h3><p>Email: info@whaledivecentre.com</p><p>Phone: (021) 27939068</p><p>Jl. Tanah Kusir II No.3, RT.10/RW.9, Kby. Lama Sel., Kec. Kebayoran Lama, Kota Jakarta Selatan, DKI Jakarta 12240</p><div class="wd-social"><a href="https://www.instagram.com/whaledivecentre.id?igsh=YjE1Z3o4NjBmcjAy" target="_blank" rel="noopener" aria-label="Facebook">FB</a><a href="https://www.instagram.com/whaledivecentre.id?igsh=YjE1Z3o4NjBmcjAy" target="_blank" rel="noopener" aria-label="Instagram">IG</a><a href="https://www.instagram.com/whaledivecentre.id?igsh=YjE1Z3o4NjBmcjAy" target="_blank" rel="noopener" aria-label="YouTube">YT</a><a href="https://www.instagram.com/whaledivecentre.id?igsh=YjE1Z3o4NjBmcjAy" target="_blank" rel="noopener" aria-label="TikTok">TT</a></div></div></div><div class="wd-footer-bottom"><span>© <?php echo date('Y'); ?> Whale Dive Centre. All rights reserved.</span><span>PADI / SSI / NAUI / TDI training pathways</span> | <a href="/privacy-policy/" style="color:rgba(255,255,255,.6);text-decoration:none;font-size:13px">Privacy Policy</a> | <a href="/terms/" style="color:rgba(255,255,255,.6);text-decoration:none;font-size:13px">Terms of Service</a></div></div></footer>
</main>

<style id="wd-home-polish-pass">
.whaledive-home .wd-hero:before{background:linear-gradient(90deg,rgba(3,18,28,.88),rgba(3,18,28,.5) 46%,rgba(3,18,28,.7))!important}.whaledive-home .wd-hero-proof span{backdrop-filter:blur(10px);background:rgba(255,255,255,.1);border-color:rgba(255,255,255,.18)}.whaledive-home .wd-btn{box-shadow:0 14px 30px rgba(0,143,191,.2)}.whaledive-home .wd-btn.alt{box-shadow:none}.whaledive-home .wd-auth-card:before,.whaledive-home .wd-featured-card:before{background:linear-gradient(180deg,rgba(2,19,31,.05),rgba(2,19,31,.76))!important}.whaledive-home .wd-course-card{position:relative;overflow:hidden}.whaledive-home .wd-course-no{opacity:.16}.whaledive-home .wd-course-card p,.whaledive-home .wd-review-card p{line-height:1.68}.whaledive-home .wd-equip-card{background:linear-gradient(180deg,#fff,#eef8fb);border:1px solid rgba(0,64,91,.08);box-shadow:0 18px 45px rgba(2,32,46,.08)}.whaledive-home .wd-equip-icon{background:linear-gradient(135deg,#08364a,#08a7c7)!important;color:#fff!important;box-shadow:0 12px 26px rgba(0,143,191,.22)}.whaledive-home .wd-mini-article{min-height:150px}.whaledive-home .wd-mini-article b:after{content:" · 3 min read";font-weight:600;color:rgba(1,48,65,.55)}.whaledive-home .wd-community .wd-sub{max-width:760px}.whaledive-home .wa-float-btn{left:28px!important;right:auto!important;top:auto!important;bottom:18px!important;width:62px!important;min-width:62px!important;height:54px!important;padding:0!important;border-radius:999px!important;font-size:0!important;overflow:hidden;transform:scale(.88);transform-origin:left bottom}.whaledive-home .wa-float-btn:after{content:"Call";font-size:11px;font-weight:900;letter-spacing:.04em}
.whaledive-home .wd-course-card:before{background:linear-gradient(180deg,rgba(3,18,28,.16),rgba(3,18,28,.88))!important}.whaledive-home .wd-course-card h3,.whaledive-home .wd-course-card p,.whaledive-home .wd-course-card a,.whaledive-home .wd-course-meta{position:relative;z-index:2}.whaledive-home .wd-equip-card:before{display:block!important;content:""!important;opacity:1!important;filter:none!important;mix-blend-mode:normal!important}.whaledive-home .wd-equip-card:after{display:none!important;content:none!important}.whaledive-home .wd-equip-card img{opacity:1!important;filter:none!important;mix-blend-mode:normal!important}.whaledive-home .wd-equip-card h3{letter-spacing:-.02em}.whaledive-home .wd-review-card{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.14)}
@media(max-width:780px){.whaledive-home .wd-hero{padding-bottom:104px}.whaledive-home .wa-float-btn{left:22px!important;right:auto!important;top:auto!important;bottom:14px!important;width:58px!important;min-width:58px!important;height:52px!important;transform:scale(.82)}.whaledive-home .wd-actions{gap:10px}.whaledive-home .wd-actions .wd-btn{width:100%;justify-content:center}.whaledive-home .wd-hero-proof{grid-template-columns:1fr!important}.whaledive-home .wd-mini-article{min-height:auto}.whaledive-home .wd-course-card:before{background:linear-gradient(180deg,rgba(3,18,28,.24),rgba(3,18,28,.92))!important}.whaledive-home .wd-equipment-grid,.whaledive-home .wd-course-grid,.whaledive-home .wd-reviews-grid{gap:18px!important}}
</style>
<style id="wd-mobile-fix-final">
.whaledive-home .wa-float-btn{display:none!important}
@media(max-width:780px){
  .whaledive-home{overflow-x:hidden}
  .whaledive-home .wd-shell{width:min(100% - 32px, 1180px)!important}
  .whaledive-home .wd-header,.whaledive-home header{position:relative!important}
  .whaledive-home .wd-nav{display:flex!important;align-items:center!important;justify-content:space-between!important}
  .whaledive-home .wd-menu{display:none!important;position:absolute!important;left:16px!important;right:16px!important;top:74px!important;z-index:50!important;padding:18px!important;border-radius:22px!important;background:rgba(3,18,28,.96)!important;border:1px solid rgba(255,255,255,.12)!important;box-shadow:0 24px 70px rgba(0,0,0,.32)!important}
  .whaledive-home .wd-menu-open .wd-menu,body.wd-menu-open.whaledive-home .wd-menu{display:grid!important;gap:12px!important}
  .whaledive-home .wd-menu a{width:100%!important;text-align:left!important}
  .whaledive-home .wd-hamburger{display:flex!important}
  .whaledive-home .wd-hero{min-height:auto!important;padding:118px 0 64px!important}
  .whaledive-home .wd-hero-focus{display:grid!important;grid-template-columns:1fr!important;gap:26px!important}
  .whaledive-home .wd-hero-copy{text-align:left!important;max-width:none!important}
  .whaledive-home .wd-hero h1{font-size:clamp(44px,13vw,64px)!important;line-height:.92!important;letter-spacing:-.06em!important}
  .whaledive-home .wd-hero p{font-size:16px!important;line-height:1.65!important}
  .whaledive-home .wd-actions{display:grid!important;grid-template-columns:1fr!important;gap:10px!important}
  .whaledive-home .wd-btn{width:100%!important;justify-content:center!important}
  .whaledive-home .wd-hero-proof{display:grid!important;grid-template-columns:1fr!important;gap:10px!important}
  .whaledive-home .wd-hero-course{width:100%!important;max-width:none!important;margin:0!important}
  .whaledive-home .wd-section{padding:58px 0!important}
  .whaledive-home .wd-title{font-size:clamp(30px,9vw,44px)!important;line-height:1.02!important}
  .whaledive-home .wd-sub{font-size:15px!important;line-height:1.65!important}
  .whaledive-home .wd-auth-grid,.whaledive-home .wd-aff-grid,.whaledive-home .wd-course-grid,.whaledive-home .wd-equipment-grid,.whaledive-home .wd-reviews-grid,.whaledive-home .wd-blog-grid{display:grid!important;grid-template-columns:1fr!important;gap:18px!important}
  .whaledive-home .wd-course-card,.whaledive-home .wd-equip-card,.whaledive-home .wd-review-card,.whaledive-home .wd-mini-article{width:100%!important;min-width:0!important}
  .whaledive-home .wd-equip-card:before{display:block!important;content:""!important;opacity:1!important;filter:none!important;mix-blend-mode:normal!important}
  .whaledive-home .wd-equip-card:after{display:none!important;content:none!important}
  .whaledive-home .wd-equip-card img{opacity:1!important;filter:none!important;mix-blend-mode:normal!important}
}
</style>
<style id="wd-image-cleanup-final">
.whaledive-home .wd-equip-card:before,.whaledive-home .wd-equip-card:after{display:none!important;content:none!important;background:none!important}
.whaledive-home .wd-equip-card{min-height:300px!important;padding:30px!important;display:flex!important;flex-direction:column!important;align-items:flex-start!important;justify-content:flex-end!important;background:radial-gradient(circle at 82% 12%,rgba(8,167,199,.18),transparent 34%),linear-gradient(180deg,#fff,#edf8fb)!important;position:relative!important;overflow:hidden!important}
.whaledive-home .wd-equip-card:has(.wd-equip-icon){isolation:isolate}
.whaledive-home .wd-equip-icon{position:absolute!important;top:26px!important;left:26px!important;width:82px!important;height:82px!important;border-radius:28px!important;display:grid!important;place-items:center!important;font-size:32px!important;font-weight:900!important;letter-spacing:-.08em!important;background:linear-gradient(135deg,#052b3d,#08a7c7)!important;color:#fff!important;box-shadow:0 18px 36px rgba(0,99,130,.22)!important;z-index:1!important}
.whaledive-home .wd-equip-icon:after{content:"";position:absolute;inset:auto -92px -86px auto;width:150px;height:150px;border:1px solid rgba(8,167,199,.22);border-radius:999px;pointer-events:none}
.whaledive-home .wd-equip-card h3,.whaledive-home .wd-equip-card p,.whaledive-home .wd-equip-card a{position:relative!important;z-index:2!important}
.whaledive-home .wd-equip-card h3{margin-top:130px!important}
.whaledive-home .wd-featured-card:before{background:linear-gradient(135deg,rgba(3,31,48,.96),rgba(0,109,132,.74))!important}
@media(max-width:780px){.whaledive-home .wd-equip-card{min-height:260px!important;padding:26px!important}.whaledive-home .wd-equip-icon{width:72px!important;height:72px!important;border-radius:24px!important;font-size:28px!important}.whaledive-home .wd-equip-card h3{margin-top:112px!important}}
</style>
<script>document.addEventListener("DOMContentLoaded",function(){var s=document.createElement('style');s.id='wd-final-visual-overrides';s.textContent='.whaledive-home .wd-equip-card:before,.whaledive-home .wd-equip-card:after{display:none!important;content:none!important;background:none!important}.home .wd-eq .wd-equip-icon,.whaledive-home .wd-equip-icon,.wd-equip-icon{display:grid!important;position:absolute!important;top:26px!important;left:26px!important;width:82px!important;height:82px!important;border-radius:28px!important;place-items:center!important;font-size:32px!important;font-weight:900!important;letter-spacing:-.08em!important;background:linear-gradient(135deg,#052b3d,#08a7c7)!important;color:#fff!important;box-shadow:0 18px 36px rgba(0,99,130,.22)!important;z-index:3!important}.whaledive-home .wd-equip-card{background:radial-gradient(circle at 82% 12%,rgba(8,167,199,.18),transparent 34%),linear-gradient(180deg,#fff,#edf8fb)!important}.whaledive-home .wa-float-btn{display:none!important}';document.head.appendChild(s);var b=document.querySelector(".wd-hamburger"),m=document.querySelector(".wd-menu");if(!b||!m)return;b.addEventListener("click",function(){var open=document.body.classList.toggle("wd-menu-open");b.setAttribute("aria-expanded",open?"true":"false")});m.querySelectorAll("a").forEach(function(a){a.addEventListener("click",function(){document.body.classList.remove("wd-menu-open");b.setAttribute("aria-expanded","false")})})})</script>
<script id="wd-course-click-slider-js">
document.addEventListener('DOMContentLoaded',function(){
  var track=document.querySelector('#courses .wd-course-grid');
  var prev=document.querySelector('#courses .wd-slider-btn.prev');
  var next=document.querySelector('#courses .wd-slider-btn.next');
  if(!track||!prev||!next) return;
  function step(){var card=track.querySelector('.wd-course-card');return card?card.getBoundingClientRect().width+22:360;}
  function update(){var max=track.scrollWidth-track.clientWidth-2;prev.disabled=track.scrollLeft<=2;next.disabled=track.scrollLeft>=max;}
  prev.addEventListener('click',function(){track.scrollBy({left:-step(),behavior:'smooth'});});
  next.addEventListener('click',function(){track.scrollBy({left:step(),behavior:'smooth'});});
  var down=false,startX=0,startLeft=0,moved=false;
  track.addEventListener('pointerdown',function(e){down=true;moved=false;startX=e.clientX;startLeft=track.scrollLeft;track.classList.add('is-dragging');track.setPointerCapture(e.pointerId);});
  track.addEventListener('pointermove',function(e){if(!down)return;var dx=e.clientX-startX;if(Math.abs(dx)>4)moved=true;track.scrollLeft=startLeft-dx;});
  function end(){down=false;track.classList.remove('is-dragging');setTimeout(update,80);} 
  track.addEventListener('pointerup',end);track.addEventListener('pointercancel',end);track.addEventListener('lostpointercapture',end);
  track.addEventListener('click',function(e){if(moved){e.preventDefault();e.stopPropagation();}},true);
  track.addEventListener('scroll',update,{passive:true});window.addEventListener('resize',update);update();
});
</script>

<script id="wd-course-dynamic-card-fade-js">
document.addEventListener('DOMContentLoaded',function(){
  var section=document.querySelector('#courses');
  var track=document.querySelector('#courses .wd-course-grid');
  if(!section||!track) return;
  var left=section.querySelector('.wd-course-edge.left')||document.createElement('span');
  var right=section.querySelector('.wd-course-edge.right')||document.createElement('span');
  left.className='wd-course-edge left'; right.className='wd-course-edge right';
  if(!left.parentNode) section.appendChild(left); if(!right.parentNode) section.appendChild(right);
  function place(){
    var card=track.querySelector('.wd-course-card'); if(!card) return;
    var sr=section.getBoundingClientRect(), cr=card.getBoundingClientRect();
    var top=cr.top-sr.top, height=cr.height;
    left.style.top=right.style.top=Math.max(0,top)+'px';
    left.style.height=right.style.height=height+'px';
  }
  place(); window.addEventListener('resize',place); track.addEventListener('scroll',place,{passive:true});
  setTimeout(place,400); setTimeout(place,1200);
});
</script>
<?php wp_footer(); ?>
<style id="wd-equipment-compact-override-final">
body.whaledive-home #equipment .wd-equip-card{padding:16px 16px 14px!important;min-height:0!important;border-radius:20px!important}
body.whaledive-home #equipment .wd-equip-card .wd-equip-photo{height:148px!important;min-height:148px!important;margin:0 0 10px!important;padding:0!important;display:flex!important;align-items:center!important;justify-content:center!important}
body.whaledive-home #equipment .wd-equip-card .wd-equip-photo img{height:100%!important;max-height:140px!important;width:100%!important;object-fit:contain!important;display:block!important}
body.whaledive-home #equipment .wd-equip-card h3{font-size:1.02rem!important;line-height:1.15!important;margin:0 0 5px!important}
body.whaledive-home #equipment .wd-equip-card p{font-size:.86rem!important;line-height:1.38!important;margin:0 0 9px!important;min-height:0!important}
body.whaledive-home #equipment .wd-equip-card .wd-equip-link{font-size:.7rem!important;line-height:1!important}
body.whaledive-home #equipment .wd-equip-grid{gap:16px!important}
@media(max-width:760px){body.whaledive-home #equipment .wd-equip-card{padding:14px!important}body.whaledive-home #equipment .wd-equip-card .wd-equip-photo{height:124px!important;min-height:124px!important}body.whaledive-home #equipment .wd-equip-card .wd-equip-photo img{max-height:118px!important}}
</style>

<style id="wd-equipment-image-bigger-final">
/* Keep compact cards, but make transparent equipment products visually larger. */
body.whaledive-home #equipment .wd-equip-card{padding:16px 16px 15px!important}
body.whaledive-home #equipment .wd-equip-card .wd-equip-photo{
  height:170px!important;
  min-height:170px!important;
  margin:0 0 10px!important;
  overflow:visible!important;
  display:flex!important;
  align-items:center!important;
  justify-content:center!important;
}
body.whaledive-home #equipment .wd-equip-card .wd-equip-photo img{
  width:88%!important;
  height:88%!important;
  max-width:88%!important;
  max-height:160px!important;
  object-fit:contain!important;
  transform:scale(1.34)!important;
  transform-origin:center center!important;
}
body.whaledive-home #equipment .wd-equip-card h3{margin-top:2px!important}
@media(max-width:760px){
  body.whaledive-home #equipment .wd-equip-card .wd-equip-photo{height:150px!important;min-height:150px!important}
  body.whaledive-home #equipment .wd-equip-card .wd-equip-photo img{max-height:142px!important;transform:scale(1.28)!important}
}
</style>

<style id="wd-equipment-view-product-final">
/* Equipment CTA: deeper Whale Dive brand button, product-oriented wording. */
body.whaledive-home #equipment .wd-equip-link,
body.whaledive-home #equipment article > span:last-child{
  display:inline-flex!important;
  align-items:center!important;
  justify-content:center!important;
  min-height:38px!important;
  padding:0 18px!important;
  border-radius:999px!important;
  background:linear-gradient(135deg,#063448 0%,#075064 52%,#0b6f75 100%)!important;
  color:#f5fdff!important;
  box-shadow:0 12px 24px rgba(3,19,29,.18), inset 0 1px 0 rgba(255,255,255,.14)!important;
  border:1px solid rgba(120,231,239,.18)!important;
  font-weight:800!important;
  letter-spacing:.02em!important;
  text-transform:none!important;
}
body.whaledive-home #equipment .wd-equip-link:hover,
body.whaledive-home #equipment article > span:last-child:hover{
  background:linear-gradient(135deg,#052b3b 0%,#06485b 50%,#0a6268 100%)!important;
  transform:translateY(-1px)!important;
}
</style>

<style id="wd-equipment-card-clean-final">
/* Final equipment card cleanup: keep cards compact without cropping product PNGs. */
body.whaledive-home #equipment .wd-equip-card{overflow:hidden!important;padding:18px 18px 17px!important}
body.whaledive-home #equipment .wd-equip-card .wd-equip-photo{
  height:164px!important;
  min-height:164px!important;
  margin:0 0 12px!important;
  padding:14px 8px 4px!important;
  overflow:visible!important;
}
body.whaledive-home #equipment .wd-equip-card .wd-equip-photo img{
  width:100%!important;
  height:100%!important;
  max-width:100%!important;
  max-height:142px!important;
  object-fit:contain!important;
  transform:scale(1.08)!important;
  object-position:center center!important;
}
body.whaledive-home #equipment .wd-equip-card .wd-equip-link{margin-top:2px!important}
@media(max-width:760px){
  body.whaledive-home #equipment .wd-equip-card .wd-equip-photo{height:150px!important;min-height:150px!important;padding-top:12px!important}
  body.whaledive-home #equipment .wd-equip-card .wd-equip-photo img{max-height:130px!important;transform:scale(1.05)!important}
}
</style>

<style id="wd-equipment-card-clean-hard-final">
/* Highest-priority equipment cleanup: compact cards, no cropped transparent products. */
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card{padding:18px!important;overflow:hidden!important;border-radius:22px!important}
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card .wd-equip-photo{height:164px!important;min-height:164px!important;max-height:164px!important;margin:0 0 12px!important;padding:14px 10px 4px!important;overflow:visible!important;display:flex!important;align-items:center!important;justify-content:center!important}
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card .wd-equip-photo img{width:100%!important;height:100%!important;max-width:100%!important;max-height:140px!important;object-fit:contain!important;object-position:center center!important;transform:scale(1.03)!important;padding:0!important;display:block!important}
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card h3{margin:0 0 5px!important}
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card p{margin:0 0 10px!important;min-height:0!important}
html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card .wd-equip-link{margin:0!important}
@media(max-width:760px){html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card .wd-equip-photo{height:150px!important;min-height:150px!important;max-height:150px!important}html body.whaledive-home #equipment.wd-eq .wd-equipment-grid .wd-equip-card .wd-equip-photo img{max-height:128px!important;transform:scale(1)!important}}
</style>
</body></html>
