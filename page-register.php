<?php
/**
 * Template Name: Register Page
 */
get_header();
$errors=[];$success='';
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['password_confirm'])){
  $username=sanitize_user($_POST['username']??'');
  $email=sanitize_email($_POST['email']??'');
  $password=$_POST['password']??'';
  $password_confirm=$_POST['password_confirm']??'';
  if(empty($username))$errors[]=contenly_tr('Username wajib diisi', 'Username is required');
  if(empty($email)||!is_email($email))$errors[]=contenly_tr('Email tidak valid', 'Please enter a valid email address');
  if(empty($password))$errors[]=contenly_tr('Kata sandi wajib diisi', 'Password is required');
  if(strlen($password)<6)$errors[]=contenly_tr('Kata sandi minimal 6 karakter', 'Password must be at least 6 characters');
  if($password!==$password_confirm)$errors[]=contenly_tr('Konfirmasi kata sandi tidak sama', 'Password confirmation does not match');
  if(username_exists($username))$errors[]=contenly_tr('Username sudah terdaftar', 'This username is already registered');
  if(email_exists($email))$errors[]=contenly_tr('Email sudah terdaftar', 'This email is already registered');
  if(empty($errors)){
    $user_id=wp_create_user($username,$password,$email);
    if(!is_wp_error($user_id)) {
      wp_safe_redirect(add_query_arg('registered', '1', contenly_localized_url('/login/')));
      exit;
    } else $errors[]=$user_id->get_error_message();
  }
}
?>
<main class="auth-layout">
  <section class="auth-left">
    <div class="brand">Ganesha Travel</div>
    <h1><?php echo wp_kses_post(contenly_tr('Mulai perjalananmu<br>bersama Ganesha Travel.', 'Start your next trip<br>with Ganesha Travel.')); ?></h1>
    <p><?php echo esc_html(contenly_tr('Buat akun baru untuk booking lebih cepat, simpan destinasi favorit, dan nikmati promo khusus member.', 'Create a new account to book faster, save favourite destinations, and unlock member-only promos.')); ?></p>
  </section>

  <section class="auth-right">
    <div class="auth-box">
      <h2><?php echo esc_html(contenly_tr('Buat akun baru', 'Create a new account')); ?></h2>
      <p><?php echo esc_html(contenly_tr('Daftar untuk mulai booking dan kelola perjalananmu', 'Register to start booking and manage your trips.')); ?></p>

      <?php if($errors): ?><div class="msg err"><ul><?php foreach($errors as $e):?><li><?php echo esc_html($e);?></li><?php endforeach;?></ul></div><?php endif; ?>

      <form method="post" class="contenly-auth-form" id="contenly-register-form">
        <div class="field-wrap"><label><?php echo esc_html(contenly_tr('Username', 'Username')); ?></label><input type="text" name="username" placeholder="<?php echo esc_attr(contenly_tr('Masukkan username', 'Enter your username')); ?>" autocomplete="username" value="<?php echo esc_attr($_POST['username']??'');?>" required></div>
        <div class="field-wrap"><label><?php echo esc_html(contenly_tr('Alamat Email', 'Email Address')); ?></label><input type="email" name="email" placeholder="name@example.com" autocomplete="email" value="<?php echo esc_attr($_POST['email']??'');?>" required></div>
        <div class="field-wrap"><label><?php echo esc_html(contenly_tr('Kata Sandi', 'Password')); ?></label><input type="password" name="password" placeholder="<?php echo esc_attr(contenly_tr('Buat kata sandi', 'Create a password')); ?>" autocomplete="new-password" required></div>
        <div class="field-wrap"><label><?php echo esc_html(contenly_tr('Konfirmasi Kata Sandi', 'Confirm Password')); ?></label><input type="password" name="password_confirm" placeholder="<?php echo esc_attr(contenly_tr('Ulangi kata sandi', 'Repeat your password')); ?>" autocomplete="new-password" required></div>
        <button type="submit" id="register-submit-btn"><?php echo esc_html(contenly_tr('Daftar', 'Register')); ?></button>
      </form>

      <p class="auth-switch"><?php echo esc_html(contenly_tr('Sudah punya akun?', 'Already have an account?')); ?> <a href="<?php echo esc_url(contenly_localized_url('/login/')); ?>"><?php echo esc_html(contenly_tr('Masuk di sini', 'Log in here')); ?></a></p>
    </div>
  </section>
</main>

<style>
body.page-template-page-register header.site-header,
body.page-template-page-register footer.site-footer,
body.page-template-page-register #wpadminbar{display:none!important}
body.page-template-page-register{margin-top:0!important}
body.page-template-page-register .site-main{min-height:0!important;padding-bottom:0!important}
body.page-template-page-register .site-main .site-container{max-width:none!important;margin:0!important;padding:0!important}
.auth-layout{min-height:100dvh;display:flex;flex-direction:column;background:#fff;position:relative;left:50%;right:50%;margin-left:-50vw;margin-right:-50vw;width:100vw;max-width:none!important}
.auth-layout::before{content:"";position:fixed;inset:-20% -30% auto -30%;height:48vh;pointer-events:none;background:radial-gradient(ellipse at top, rgba(83,146,148,.14) 0%, rgba(83,146,148,.06) 35%, rgba(255,255,255,0) 72%);z-index:0}
.auth-layout::after{content:"";position:fixed;inset:auto -30% -22% -30%;height:42vh;pointer-events:none;background:radial-gradient(ellipse at bottom, rgba(229,167,54,.14) 0%, rgba(229,167,54,.05) 38%, rgba(255,255,255,0) 72%);z-index:0}
.auth-left{display:none;flex:1 1 50%;background:linear-gradient(160deg,#355F72 0%,#539294 60%,#E5A736 100%);color:#fff;padding:64px 56px;justify-content:center;flex-direction:column;box-sizing:border-box}
.brand{font-size:26px;font-weight:800;margin-bottom:24px}.auth-left h1{font-size:56px;line-height:1.05;margin:0 0 14px}.auth-left p{max-width:520px;font-size:18px;opacity:.92;line-height:1.7;margin:0}
.auth-right{display:flex;align-items:center;justify-content:center;padding:18px 14px 28px;background:transparent;overflow-y:auto;min-height:100dvh;position:relative;z-index:1}
.auth-box{width:100%;max-width:380px;background:transparent;border:0;border-radius:0;padding:0;box-shadow:none;margin:auto 0}
.mobile-brand{display:none}
.mobile-brand-icon{display:none}
.auth-box h2{text-align:center;font-size:28px;line-height:1.2;margin:0 0 12px;color:#0f172a;font-weight:700;letter-spacing:-.01em}.auth-box>p{text-align:center;color:#64748b;margin:0 0 18px;font-size:14px;line-height:1.5}
.msg{padding:12px 14px;border-radius:12px;margin-bottom:14px;font-size:14px}.msg.ok{background:#dcfce7;color:#166534;border:1px solid #86efac}.msg.err{background:#fee2e2;color:#991b1b;border:1px solid #fca5a5}.msg ul{margin:0;padding-left:18px}
.contenly-auth-form{display:grid;gap:14px}.contenly-auth-form label{display:block;font-size:15px;font-weight:600;color:#334155;margin-bottom:8px;text-align:left}
.contenly-auth-form input{width:100%;height:46px;padding:0 14px;border:1px solid #DCE9E6;border-radius:10px;background:#EEF5F4;font-size:15px;color:#0f172a}
.contenly-auth-form input:focus{outline:none;border-color:#B7D3D3;box-shadow:0 0 0 3px rgba(83,146,148,.1)}
.contenly-auth-form button{width:100%;height:46px;border:0;border-radius:10px;background:linear-gradient(90deg,#355F72,#539294,#E5A736);color:#fff;font-weight:700;font-size:17px;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;box-shadow:0 6px 14px rgba(83,146,148,.22);margin-top:6px;margin-bottom:10px}
.contenly-auth-form button.is-loading{opacity:.9;pointer-events:none}
.contenly-auth-form button.is-loading::before{content:"";width:16px;height:16px;border:2px solid rgba(255,255,255,.45);border-top-color:#fff;border-radius:999px;animation:btnspin .7s linear infinite}
@keyframes btnspin{to{transform:rotate(360deg)}}
.auth-switch{text-align:left;margin-top:2px;color:#64748b;font-size:13px}.auth-switch a{color:#539294;font-weight:600;text-decoration:none}
@media(max-width:640px){.auth-box h2{font-size:26px;line-height:1.2}.auth-box>p{font-size:14px}.auth-right{padding:16px 12px 24px}.auth-layout::before{height:42vh;opacity:.9}.auth-layout::after{height:36vh;opacity:.85}}
@media(min-width:1201px){.auth-layout{flex-direction:row;height:100vh;overflow:hidden}.auth-left{display:flex;position:sticky;top:0;height:100vh}.auth-right{flex:1 1 50%;height:100vh;overflow-y:auto;background:#fff;align-items:center!important;justify-content:center!important;padding:56px 28px;box-sizing:border-box}.auth-box{max-width:420px;background:transparent;border:0;box-shadow:none;padding:0;margin:0 auto;text-align:center}.mobile-brand{display:none}.auth-box h2{font-size:44px;line-height:1.2;text-align:center!important}.auth-box>p{font-size:16px;text-align:center!important}}
</style>

<script>
(function(){
  const form = document.getElementById('contenly-register-form');
  const btn = document.getElementById('register-submit-btn');
  if (!form || !btn) return;

  const submitRegister = function () {
    if (form.dataset.submitting === '1') return;
    form.dataset.submitting = '1';
    btn.classList.add('is-loading');
    btn.dataset.original = btn.textContent;
    btn.textContent = <?php echo wp_json_encode(contenly_tr('Daftar...', 'Registering...')); ?>;
    if (typeof form.requestSubmit === 'function') {
      form.requestSubmit();
    } else {
      form.submit();
    }
  };

  btn.addEventListener('click', function (e) {
    e.preventDefault();
    submitRegister();
  });

  form.addEventListener('keydown', function (e) {
    if (e.key === 'Enter') {
      e.preventDefault();
      submitRegister();
    }
  });
})();
</script>
<?php get_footer(); ?>