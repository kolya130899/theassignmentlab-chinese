<form class="order-form order-form--payment">
  <!-- FORM BODY -->
  <h3 class="order-form__title">注册账户</h3>
  <div class="payment">
    <div class="payment__top">
      <div class="auth-toggler auth-toggler--payment">
        <div class="auth-toggler__item">
          <input type="radio" name="payment" id="payment" checked>
          <label for="payment">银行卡付款</label>
        </div>
        <div class="payment__icons">
          <img src="<?= $url; ?>img/visa-icon.svg" alt="">
          <img src="<?= $url; ?>img/mc-icon.svg" alt="">
          <img src="<?= $url; ?>img/discover-icon.svg" alt="">
          <img src="<?= $url; ?>img/ae-icon.svg" alt="">
        </div>
      </div>
    </div>


    <div class="payment__body">
      <!-- First Name-->
      <div class="select-wrapper">
        <p class="label">First Name</p>
        <input type="text" name="first-name">
      </div>

      <!-- Last Name-->
      <div class="select-wrapper">
        <p class="label">Last Name</p>
        <input type="text" name="last-name">
      </div>

      <!-- Card Number -->
      <div class="select-wrapper">
        <p class="label">Card Number (No spaces or dashes)</p>
        <input type="number" name="card-number">
      </div>

      <!-- Expiration -->
      <div class="select-wrapper">
        <p class="label">Expiration Date(MM/YY)</p>
        <input type="text" name="exp-date">
      </div>

      <!-- CVV -->
      <div class="select-wrapper">
        <p class="label">CVV</p>
        <input type="number" name="cvv">
      </div>

    </div>
  </div>

</form>