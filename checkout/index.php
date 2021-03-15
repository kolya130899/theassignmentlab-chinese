<?php
include("../components/head.php")
?>

<body>
  <header class="header">
    <?php
    include("../components/header.php");
    ?>
  </header>

  <section class="order-heading content-section">
    <h2 class="section-title">留学生代写服务类型</h2>
    <div class="order-heading__icon">
      <img src="../img/owl.svg" alt="logo">
    </div>
  </section>

  <section class="order">
    <div class="progressbar">
      <picture>
        <?php
        if ($_GET["form"] == "order-details") {
          echo "<source srcset='../img/progress1-mob.svg' media='(max-width: 600px)'> <img src='../img/progress1.svg' alt=''>";
        } else if ($_GET["form"] == "auth") {
          echo "<source srcset='../img/progress2-mob.svg' media='(max-width: 600px)'> <img src='../img/progress2.svg' alt=''>";
        } else if ($_GET["form"] == "payment") {
          echo "<source srcset='../img/progress3-mob.svg' media='(max-width: 600px)'> <img src='../img/progress3.svg' alt=''>";
        } else {
          echo "This form doesn't exist";
        }
        ?>
      </picture>

    </div>
    <div class="order__wrapper">
      <div class="order__left">
        <?php
        if ($_GET["form"] == "order-details") {
          include("./forms/order-form.php");
        } else if ($_GET["form"] == "auth") {
          include("./forms/auth.php");
        } else if ($_GET["form"] == "payment") {
          include("./forms/payment.php");
        } else {
          echo "should be a new form";
        }
        ?>
      </div>
      <div class="order__right summary">
        <h4 class="order-form__subtitle">附加文件</h4>
        <p class="order-form__description">截止日期 <span class="js-deadline" id="summary-deadline">Selected deadline date</span></p>
        <p class="order-form__description">总价</p>
        <div class="summary__item">
          <div class="summary__info">
            <img src="../img/us-flag.svg" alt="">
            <span>美元</span>
          </div>
          <p class="summary__price js-us-summary">$<span>0</span>.<span>00</span></p>
        </div>
        <div class="summary__item">
          <div class="summary__info">
            <img src="../img/uk-flag.svg" alt="">
            <span>英镑</span>
          </div>
          <p class="summary__price js-uk-summary">£<span>0</span>.<span>00</span></p>
        </div>
        <div class="summary__item">
          <div class="summary__info">
            <img src="../img/cad-flag.svg" alt="">
            <span>美元</span>
          </div>
          <p class="summary__price js-cad-summary">$<span>0</span>.<span>00</span></p>
        </div>
        <div class="summary__item">
          <div class="summary__info">
            <img src="../img/nz-flag.svg" alt="">
            <span>澳元</span>
          </div>
          <p class="summary__price js-nz-summary">$<span>0</span>.<span>00</span></p>
        </div>
        <div class="summary__item">
          <div class="summary__info">
            <img src="../img/eu-flag.svg" alt="">
            <span>欧元</span>
          </div>
          <p class="summary__price js-eu-summary">€<span>0</span>.<span>00</span></p>
        </div>
        <div class="summary__line"></div>
        <p class="order-form__description">汇率随银行波动</p>
      </div>
    </div>
  </section>




  <?
    include("../components/footer.php");
  ?>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="<?= $url; ?>js/index.js"></script>
  <script src="./forms/index.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
  <script>
    $(document).ready(function() {
      $.datetimepicker.setLocale("en");
      $("#datetimepicker").datetimepicker({
        format: "Y-m-d H:i",
      });
    });
  </script>

  <script>
    $("document").ready(function() {
      $.ajax({
        type: "GET",
        url: "https://api.exchangeratesapi.io/latest/?base=USD&symbols=CAD,GBP,NZD,EUR",
        success: function(res) {
          console.log(res);
        }
      });
    });
  </script>
</body>

</html>