<?php
include("components/head.php")
?>

<body>
  <div class="mainpage-top">
    <header class="header main-page-header">

      <div class="header-wrapper">
        <!-- MOBILE NAVBAR -->
        <div class="header__toggler">
          <span class="header__toggler--item"></span>

        </div>
        <nav class="header__navbar-mobile">
          <a href="#" class="text" id="open-mobile-subnavbar">代谢服务</a>
          <nav class="header__navbar-mobile--subnavbar">
            <a href="#" class="text">Essay 代写服务</a>
            <a href="#" class="text">网课代写服务</a>
            <a href="#" class="text">考试代写服务</a>
            <a href="#" class="text"> Assignment 代写服务</a>
          </nav>
          <a href="#" class="text">计算价格</a>
          <a href="#" class="text">博客</a>
          <a href="#" class="text">常见问题</a>
          <a href="#" class="text">联系客服</a>
        </nav>

        <!-- LOGO -->
        <a href="<?= $url; ?>" class="header__logo">
          <img src="<?= $url; ?>img/logo-white.svg" alt="">
        </a>
        <!-- DESKTOP NAVBAR -->
        <nav class="header__navbar">
          <a href="#" class="text" id="open-subnavbar">代谢服务</a>
          <nav class="header__navbar--subnavbar">
            <a href="#" class="text">Essay 代写服务</a>
            <a href="#" class="text">网课代写服务</a>
            <a href="#" class="text">考试代写服务</a>
            <a href="#" class="text"> Assignment 代写服务</a>
          </nav>
          <a href="#" class="text">计算价格</a>
          <a href="#" class="text">博客</a>
          <a href="#" class="text">常见问题</a>
          <a href="#" class="text">联系客服</a>
        </nav>
        <!-- BUTTON -->
        <span class="header__btn page-btn text">用户登陆</span>
      </div>
    </header>

    <div class="hero">
      <div class="hero-wrapper">
        <div class="hero__left">
          <h1 class="main-title">
            Edu Expert Care<br>
            是您的各种学术难题一站式解决平台
          </h1>
          <p class="hero-text text">
            英国，加拿大，美国本地导师团队帮海外留学生准时交各类英语论文、assignment<br>写作、essay 代写、Quiz和Exams代写
          </p>
          <div class="hero__bottom">
            <h3>每页$18 – $25，最快12小时完成</h3>
            <p class="text">包含但不限于Summary， Discussion， Reflection和Response</p>
          </div>
          <span class="hero-btn page-btn text">立刻下单</span>
        </div>
        <!-- <div class="hero__right"> -->
        <form action="" class="preorder-form">
          <h3 class="element-title">算出价格</h3>
          <!-- #1 -->
          <div class="custom-form-element">
            <p class="custom-form-element__header">服务类型</p>
            <input type="hidden">
            <p class="custom-form-element__select">选择</p>
            <div class="custom-form-element__select--menu">
              <p>Option 1</p>
              <p>Option 2</p>
              <p>Option 3</p>
              <p>Option 4</p>
            </div>
          </div>
          <!-- #2 -->
          <div class="custom-form-element">
            <p class="custom-form-element__header">学习等级</p>
            <input type="hidden">
            <p class="custom-form-element__select">选择)</p>
            <div class="custom-form-element__select--menu">
              <p>Option 1</p>
              <p>Option 2</p>
              <p>Option 3</p>
              <p>Option 4</p>
            </div>
          </div>
          <!-- #3 -->
          <div class="custom-form-element">
            <p class="custom-form-element__header">字数</p>
            <input type="hidden">
            <p class="custom-form-element__select">一页等于300字)</p>
            <div class="custom-form-element__select--menu">
              <p>Option 1</p>
              <p>Option 2</p>
              <p>Option 3</p>
              <p>Option 4</p>
            </div>
          </div>
          <!-- #4 -->
          <div class="custom-form-element">
            <p class="custom-form-element__header">交稿日期</p>
            <input type="hidden">
            <p class="custom-form-element__select">09.12.2020</p>
            <div class="custom-form-element__select--menu">
              <p>Option 1</p>
              <p>Option 2</p>
              <p>Option 3</p>
              <p>Option 4</p>
            </div>
          </div>
          <!-- CHECKBOX -->
          <div class="custom-checkbox text">
            <input type="checkbox" id="discount">
            <label for="discount">我是新顾客（１５% 优惠）</label>
          </div>
          <!-- TOTAL -->
          <p class="custom-total element-title">总价</p>
          <!-- SUBMIT BUTTON -->
          <div class="submot-btn-wrapper">
            <span class="submit-btn page-btn text">立刻下单</span>
          </div>
        </form>
        <!-- </div> -->
      </div>
    </div>

  </div>

  <section class="service content-section">
    <h2 class="section-title">留学生代写服务类型</h2>
    <div class="service-wrapper">
      <!-- ITEM 1 -->
      <div class="service__item">
        <img src="img/ic_essay.svg" alt="">
        <h3 class="element-title">Essay 代写</h3>
        <p class="text">
          英文代写是许多留学生难以克服的任务。英文
          写作不仅需要高级的词汇和句式，对写作方法
          和格式更有严苛的要求。
          我们的使命就是帮助你克服这一任务。我们只
          聘用母语写手，为你提供最靠谱的Essay代写。
          保证 100％原始和准时提交高质的英文论文代
          写。按您的要求，写手可以提供免费outline或
          根draft。写完的时候每篇论文通过turnitin检查，
          写后可以随时找我们无限免费修改。成绩不达
          标，全额退款。
        </p>
      </div>
      <!-- ITEM 2 -->
      <div class="service__item">
        <img src="img/ic_assignment.svg" alt="">
        <h3 class="element-title">Assignment 代写</h3>
        <p class="text">
          我们提供专业代写团队，所有订单可靠准时, 最高质量的作业代写，无论是普通
          Assignment，还是专业Project以及Lab
          Report， 我们都能帮你解决！
          我们只聘用经验丰富的写手，为你提供最高
          质量水准Assignment代写。 您预定的专家来
          帮您各种 算机(java, python代写), 精确科学，数学作业，金融科目，专业技术，商业，
          艺术和其他没有字数要求作业代写，如
          excel，数据库，ppt，spss和许多其他软件程
          序作业代写。成绩后不满意全额退款。
        </p>
      </div>
      <!-- ITEM 3 -->
      <div class="service__item">
        <img src="img/ic_cv.svg" alt="">
        <h3 class="element-title">网课代写</h3>
        <p class="text">
          给你提供网课代修的专业写手。 写手都用VPN保持未被捕获的。我们保安全地通过您的
          网课并获得A级。写手将及时完成所有任务（讨论，测验，测试，考试，项目等）。有需
          要的话，写手可以帮你与您的队友或教授沟通。
        </p>
      </div>
      <!-- ITEM 4 -->
      <div class="service__item">
        <img src="img/ic_presentation.svg" alt="">
        <h3 class="element-title">Presentation代写</h3>
        <p class="text">
          除了assignment和essay之外，对很多人来说，更大的挑战是做Presentation。Eduexpertcare
          为你提供Presentation代写、演讲稿代写，不满意全额退款，让你轻松搞定英文演讲，全程
          抓住听众的注意力。
        </p>
      </div>
    </div>

  </section>

  <section class="guarantee content-section">
    <h2 class="section-title">我们代写服务担保</h2>
    <div class="guarantee-wrapper">
      <!-- ITEM 1 -->
      <div class="guarantee__item">
        <div class="guarantee__item--image">
          <img src="img/guarantee1.svg" alt="">
        </div>
        <h3 class="element-title">100% 满意保证</h3>
        <p class="text">
          质量是最准要的条件
        </p>
      </div>
      <!-- ITEM 2 -->
      <div class="guarantee__item">
        <div class="guarantee__item--image">
          <img src="img/guarantee2.svg" alt="">
        </div>
        <h3 class="element-title">100%原创</h3>
        <p class="text">
          每篇作业都通过Turnitin来检<br>
          查是否原创
        </p>
      </div>
      <!-- ITEM 3 -->
      <div class="guarantee__item">
        <div class="guarantee__item--image">
          <img src="img/guarantee3.svg" alt="">
        </div>
        <h3 class="element-title">500+母语代写专家</h3>
        <p class="text">
          我们为您安排有丰富专业经<br>
          验的写手
        </p>
      </div>
      <!-- ITEM 4 -->
      <div class="guarantee__item">
        <div class="guarantee__item--image">
          <img src="img/guarantee4.svg" alt="">
        </div>
        <h3 class="element-title">100%保证安全</h3>
        <p class="text">
          我们隐私保证保护客户个人信
        </p>
      </div>
      <!-- ITEM 5 -->
      <div class="guarantee__item">
        <div class="guarantee__item--image">
          <img src="img/guarantee5.svg" alt="">
        </div>
        <h3 class="element-title">跟写手直接互动</h3>
        <p class="text">
          随时可以联系写手，提问题，<br>
          辅导
        </p>
      </div>
      <!-- ITEM 6 -->
      <div class="guarantee__item">
        <div class="guarantee__item--image">
          <img src="img/guarantee6.svg" alt="">
        </div>
        <h3 class="element-title">100%准时</h3>
        <p class="text">
          全天候接单，接受12小时急<br>
          单，所有订单均准时完成
        </p>
      </div>

    </div>

  </section>

  <section class="testimonials content-section">
    <h2 class="section-title">客户的反馈意见</h2>
    <!-- <div class="testimonials-wrapper">
      <div class="device device-iphone-x">
        <div class="device-frame">
          <img class="device-content" src="" alt="">
        </div>
        <div class="device-stripe"></div>
        <div class="device-header"></div>
        <div class="device-sensors"></div>
        <div class="device-btns"></div>
        <div class="device-power"></div>
      </div>
    </div> -->
  </section>

  <section class="numbers content-section">
    <h2 class="section-title">这10年证明我们成功的实时数据</h2>
    <div class="numbers-wrapper">
      <!-- NUMBER1 -->
      <div class="numbers__item">
        <h3 class="section-title">84342</h3>
        <p class="element-title">注册的客户</p>
      </div>
      <!-- NUMBER2 -->
      <div class="numbers__item">
        <h3 class="section-title">84342</h3>
        <p class="element-title">在线的作家</p>
      </div>
      <!-- NUMBER3 -->
      <div class="numbers__item">
        <h3 class="section-title">84342</h3>
        <p class="element-title">质量评分</p>
      </div>
    </div>
  </section>

  <section class="blog content-section">

    <h2 class="section-title">博客</h2>

    <div class="slider__container">
      <div class="prev-btn">
        <img src="img/prev-arr.svg" alt="">
      </div>
      <div class="next-btn">
        <img src="img/next-arr.svg" alt="">
      </div>
      <div class="blog__slider">
        <!-- SLIDE 1 -->
        <div class="blog__slider--slide">
          <img src="img/slide1.svg" alt="">
          <h3 class="element-title">Title</h3>
          <p class="text">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </p>
          <p class="order-now text">立即下单</p>
        </div>
        <!-- SLIDE 2 -->
        <div class="blog__slider--slide">
          <img src="img/slide2.svg" alt="">
          <h3 class="element-title">Title</h3>
          <p class="text">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </p>
          <p class="order-now text">立即下单</p>
        </div>
        <!-- SLIDE 3 -->
        <div class="blog__slider--slide">

          <img src="img/slide3.svg" alt="">
          <h3 class="element-title">Title</h3>
          <p class="text">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </p>
          <p class="order-now text">立即下单</p>
        </div>
        <!-- SLIDE 1 -->
        <div class="blog__slider--slide">
          <img src="img/slide1.svg" alt="">
          <h3 class="element-title">Title</h3>
          <p class="text">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </p>
          <p class="order-now text">立即下单</p>
        </div>
        <!-- SLIDE 2 -->
        <div class="blog__slider--slide">
          <img src="img/slide2.svg" alt="">
          <h3 class="element-title">Title</h3>
          <p class="text">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </p>
          <p class="order-now text">立即下单</p>
        </div>
        <!-- SLIDE 3 -->
        <div class="blog__slider--slide">

          <img src="img/slide3.svg" alt="">
          <h3 class="element-title">Title</h3>
          <p class="text">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </p>
          <p class="order-now text">立即下单</p>
        </div>
      </div>
    </div>
  </section>



  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/slick-settings.js"></script>


</body>

</html>