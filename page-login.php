<?php
/**
 * Template Name: Login Page
 */

$error = '';
$success = '';
$default_redirect = contenly_localized_url('/dashboard/');
$redirect_to = isset($_REQUEST['redirect_to']) ? wp_unslash($_REQUEST['redirect_to']) : $default_redirect;
$redirect_to = wp_validate_redirect($redirect_to, $default_redirect);

if (isset($_GET['registered']) && $_GET['registered'] === '1') {
  $success = contenly_tr('Akun berhasil dibuat. Silakan login.', 'Your account has been created successfully. Please log in.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'])) {
  $creds = [
    'user_login'    => sanitize_text_field(isset($_POST['email']) ? $_POST['email'] : ''),
    'user_password' => isset($_POST['password']) ? $_POST['password'] : '',
    'remember'      => false,
  ];
  $user = wp_signon($creds, false);
  if (is_wp_error($user)) {
    $error = contenly_tr('Email/username atau kata sandi salah. Coba lagi.', 'The email/username or password is incorrect. Please try again.');
  } else {
    $target = add_query_arg('login', 'success', $redirect_to);
    wp_safe_redirect($target);
    exit;
  }
}

get_header();
?>
<main class="auth-layout">
  <section class="auth-left">
    <div class="brand">Ganesha Travel</div>
    <h1><?php echo wp_kses_post(contenly_tr('Rencanakan liburanmu<br>lebih mudah & terarah.', 'Plan your trips<br>with more ease and clarity.')); ?></h1>
    <p><?php echo esc_html(contenly_tr('Masuk ke akunmu untuk kelola booking, simpan wishlist destinasi, dan lanjutkan perjalanan tanpa ribet.', 'Log in to manage bookings, save destination wishlists, and continue your trip planning without extra friction.')); ?></p>
  </section>

  <section class="auth-right">
    <div class="auth-box">
      <h2><?php echo esc_html(contenly_tr('Selamat datang kembali', 'Welcome back')); ?></h2>
      <p><?php echo esc_html(contenly_tr('Masukkan akun kamu untuk melanjutkan booking di Ganesha Travel', 'Enter your account details to continue your booking with Ganesha Travel.')); ?></p>

      <?php if ($success): ?>
        <div class="auth-success"><?php echo esc_html($success); ?></div>
      <?php endif; ?>

      <?php if ($error): ?>
        <div class="auth-error"><?php echo esc_html($error); ?></div>
      <?php endif; ?>

      <form method="post" class="contenly-auth-form" id="contenly-login-form">
        <input type="hidden" name="redirect_to" value="<?php echo esc_attr($redirect_to); ?>">
        <div class="field-wrap">
          <label for="login-email"><?php echo esc_html(contenly_tr('Alamat Email', 'Email Address')); ?></label>
          <input id="login-email" type="text" name="email" placeholder="name@example.com" autocomplete="username email" required>
        </div>

        <div class="field-wrap">
          <div class="label-row">
            <label for="login-password"><?php echo esc_html(contenly_tr('Kata Sandi', 'Password')); ?></label>
            <a class="forgot-link" href="<?php echo esc_url(wp_lostpassword_url(contenly_localized_url('/login/'))); ?>"><?php echo esc_html(contenly_tr('Lupa kata sandi?', 'Forgot your password?')); ?></a>
          </div>
          <input id="login-password" type="password" name="password" placeholder="<?php echo esc_attr(contenly_tr('Masukkan kata sandi Anda', 'Enter your password')); ?>" autocomplete="current-password" required>
        </div>

        <button type="submit" id="login-submit-btn" onclick="if(this.form){this.form.submit();}"><?php echo esc_html(contenly_tr('Masuk', 'Log In')); ?></button>
      </form>

      <p class="auth-switch"><?php echo esc_html(contenly_tr('Belum punya akun?', "Don't have an account yet?")); ?> <a href="<?php echo esc_url(contenly_localized_url('/register/')); ?>"><?php echo esc_html(contenly_tr('Daftar di sini', 'Register here')); ?></a></p>
    </div>
  </section>
</main>

<style>
body.page-template-page-login header.site-header,
body.page-template-page-login footer.site-footer,
body.page-template-page-login #wpadminbar{display:none!important}
body.page-template-page-login{margin-top:0!important}
body.page-template-page-login .site-main{min-height:0!important;padding-bottom:0!important}
body.page-template-page-login .site-main .site-container{max-width:none!important;margin:0!important;padding:0!important}
.auth-layout{min-height:100dvh;display:flex;flex-direction:column;background:#fff;position:relative;left:50%;right:50%;margin-left:-50vw;margin-right:-50vw;width:100vw;max-width:none!important}
.auth-layout::before{content:"";position:fixed;inset:-20% -30% auto -30%;height:48vh;pointer-events:none;background:radial-gradient(ellipse at top, rgba(83,146,148,.14) 0%, rgba(83,146,148,.06) 35%, rgba(255,255,255,0) 72%);z-index:0}
.auth-layout::after{content:"";position:fixed;inset:auto -30% -22% -30%;height:42vh;pointer-events:none;background:radial-gradient(ellipse at bottom, rgba(229,167,54,.14) 0%, rgba(229,167,54,.05) 38%, rgba(255,255,255,0) 72%);z-index:0}
.auth-left{display:none;flex:1 1 50%;background:linear-gradient(160deg,#355F72 0%,#539294 60%,#E5A736 100%);color:#fff;padding:64px 56px;justify-content:center;flex-direction:column;box-sizing:border-box}
.brand{font-size:26px;font-weight:800;margin-bottom:24px}.auth-left h1{font-size:56px;line-height:1.05;margin:0 0 14px}.auth-left p{max-width:520px;font-size:18px;opacity:.92;line-height:1.7;margin:0}
.auth-right{display:flex;align-items:center;justify-content:center;padding:18px 14px 28px;background:transparent;overflow-y:auto;min-height:100dvh;position:relative;z-index:1}
.auth-box{width:100%;max-width:380px;background:transparent;border:0;border-radius:0;padding:0;box-shadow:none;margin:auto 0;text-align:center}
.mobile-brand{display:none}
.mobile-brand-icon{display:none}
.auth-box h2{display:block;width:100%;text-align:center !important;font-size:28px;line-height:1.2;margin:0 auto 12px;color:#0f172a;font-weight:700;white-space:normal;letter-spacing:-.01em}
.auth-box>p{text-align:center !important;color:#64748b;margin:0 auto 18px;font-size:14px;line-height:1.5;max-width:320px}
.auth-error{background:#fee2e2;border:1px solid #fecaca;color:#991b1b;border-radius:12px;padding:12px 14px;font-size:14px;line-height:1.5;margin-bottom:14px}
.auth-success{background:#dcfce7;border:1px solid #86efac;color:#166534;border-radius:12px;padding:12px 14px;font-size:14px;line-height:1.5;margin-bottom:14px}
.contenly-auth-form{display:grid;gap:14px}
.field-wrap label{display:block;margin-bottom:8px;text-align:left}
.label-row{display:flex;justify-content:space-between;align-items:center;gap:10px;margin-bottom:8px}
.label-row label{margin-bottom:0;text-align:left}
.contenly-auth-form label{font-size:15px;font-weight:600;color:#334155;text-align:left}
.forgot-link{font-size:12px;color:#64748b;text-decoration:none;font-weight:500}
.contenly-auth-form input{width:100%;height:46px;padding:0 14px;border:1px solid #DCE9E6;border-radius:10px;background:#EEF5F4;font-size:15px;color:#0f172a}
.contenly-auth-form input:focus{outline:none;border-color:#B7D3D3;box-shadow:0 0 0 3px rgba(83,146,148,.1)}
.contenly-auth-form button{width:100%;height:46px;border:0;border-radius:10px;background:linear-gradient(90deg,#355F72,#539294,#E5A736);color:#fff;font-weight:700;font-size:17px;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;box-shadow:0 6px 14px rgba(83,146,148,.22);margin-top:6px;margin-bottom:10px}
.contenly-auth-form button.is-loading{opacity:.9;pointer-events:none}
.contenly-auth-form button.is-loading::before{content:"";width:16px;height:16px;border:2px solid rgba(255,255,255,.45);border-top-color:#fff;border-radius:999px;animation:btnspin .7s linear infinite}
@keyframes btnspin{to{transform:rotate(360deg)}}
.auth-switch{text-align:left;margin-top:2px;color:#64748b;font-size:13px}.auth-switch a{color:#539294;font-weight:600;text-decoration:none}
@media(max-width:640px){.auth-box h2{font-size:26px;line-height:1.2}.auth-box>p{font-size:14px}.auth-right{padding:16px 12px 24px}.auth-layout::before{height:42vh;opacity:.9}.auth-layout::after{height:36vh;opacity:.85}}
@media(min-width:1201px){.auth-layout{flex-direction:row;height:100vh;overflow:hidden}.auth-left{display:flex;position:sticky;top:0;height:100vh}.auth-right{flex:1 1 50%;height:100vh;overflow-y:auto;background:#fff;align-items:center!important;justify-content:center!important;padding:56px 28px;box-sizing:border-box}.auth-box{max-width:420px;background:transparent;border:0;box-shadow:none;padding:0;margin:0 auto;text-align:center}.mobile-brand{display:none}.auth-box h2{font-size:44px;text-align:center!important}.auth-box>p{font-size:16px;text-align:center!important}}
</style>

<script>
(function(){
  const form = document.getElementById('contenly-login-form');
  const btn = document.getElementById('login-submit-btn');
  if (!form || !btn) return;

  form.addEventListener('submit', function(){
    if (form.dataset.submitting === '1') return;
    form.dataset.submitting = '1';
    btn.classList.add('is-loading');
    btn.dataset.original = btn.textContent;
    btn.textContent = <?php echo wp_json_encode(contenly_tr('Masuk...', 'Logging in...')); ?>;
  });
})();
</script>
<?php get_footer(); ?>