<form class="order-form order-form--auth">
  <!-- FORM BODY -->
  <h3 class="order-form__title">注册账户</h3>

  <div class="auth-toggler">
    <div class="auth-toggler__item">
      <input type="radio" name="authentification" id="registration" checked>
      <label for="registration">新顾客</label>
    </div>
    <div class="auth-toggler__item">
      <input type="radio" name="authentification" id="login">
      <label for="login">已有帐户</label>
    </div>
  </div>

  <div class="social-auth">
    <div class="js-google-register">
      <img src="../../img/google-auth.svg" alt="">
    </div>
    <div class="js-google-register">
      <img src="../../img/facebook-auth.svg" alt="">
    </div>
    <div class="js-google-register">
      <img src="../../img/wechat-auth.svg" alt="">
    </div>
  </div>

  <h4 class="order-form__subtitle order-form__subtitle--auth">或者填写下面的表格</h4>

  <!-- EMAIL -->
  <div class="select-wrapper auth-input">
    <p class="label">邮箱</p>
    <input type="email" name="email">
  </div>
  <!-- PASSWORD -->
  <div class="select-wrapper auth-input">
    <p class="label">密码</p>
    <input type="password" name="password" autocomplete="off">
  </div>
  <div class="registration-info">
    <!-- CONFIRM PASSWORD -->
    <div class="select-wrapper auth-input">
      <p class="label">密码</p>
      <input type="password" name="confirm-password" autocomplete="off">
    </div>
    <!-- PHONE-->
    <div class="select-wrapper auth-input">
      <p class="label">手机（WhatsApp</p>
      <input type="tel" name="phone">
    </div>
    <!-- QQ NUMBER-->
    <div class="select-wrapper auth-input">
      <p class="label">QQ号码</p>
      <input type="tel" name="phone">
    </div>
    <!-- NAME-->
    <div class="select-wrapper auth-input">
      <p class="label">姓名</p>
      <input type="text" name="name">
    </div>
  </div>

  <button type="submit" class="page-btn page-btn--auth js-register-btn">提交订单 & 登录账户</button>

</form>