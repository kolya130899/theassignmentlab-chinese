<?php
include("components/head.php")
?>

<body>
  <div class="mainpage-top">
    <header class="header main-page-header">
      <?php
      include("components/header.php")
      ?>
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
          <!-- TYPE OF DOCUMENT -->
          <div class="select-wrapper">
            <p class="label">服务类型</p>
            <div class="select" data-name="service-type">
              <span class="select__value default">选择</span>
            </div>
            <div class="options">
              <p class="options__item" data-value="Writing\论文写作">Writing\论文写作 </p>
              <p class="options__item" data-value="Editing&amp;Proofreading\ 编辑修改&amp;校稿">Editing&amp;Proofreading\ 编辑修改&amp;校稿 </p>
              <p class="options__item" data-value="Exam\考试">Exam\考试 </p>
              <p class="options__item" data-value="Online course\网课代写">Online course\网课代写 </p>
              <p class="options__item" data-value="Assignment（编码,Excel计算,分析,数学,工科）">Assignment（编码,Excel计算,分析,数学,工科） </p>
            </div>
          </div>
          <!-- ACADEMIC LEVEL -->
          <div class="select-wrapper">
            <p class="label">学习等级</p>
            <div class="select" data-name="academic-level">
              <span class="select__value default">选择</span>
            </div>
            <div class="options">
              <p class="options__item" data-value="High School">High School </p>
              <p class="options__item" data-value="College\University">College\University </p>
              <p class="options__item" data-value="Masters\MBA">Masters\MBA </p>
            </div>
          </div>
          <!-- NUMBER OF PAGES -->
          <div class="select-wrapper">
            <p class="label">字数 </p>
            <div class="select" data-name="pages-quantity">
              <span class="select__value default">页等于300字</span>
            </div>
            <div class="options" style="display: none;">
              <p class="options__item" data-value="1 page ~ 300 words">1 page ~ 300 words </p>
              <p class="options__item" data-value="2 page ~ 600 words">2 page ~ 600 words </p>
              <p class="options__item" data-value="3 page ~ 900 words">3 page ~ 900 words </p>
              <p class="options__item" data-value="4 page ~ 1200 words">4 page ~ 1200 words </p>
              <p class="options__item" data-value="5 page ~ 1500 words">5 page ~ 1500 words </p>
              <p class="options__item" data-value="6 page ~ 1800 words">6 page ~ 1800 words </p>
              <p class="options__item" data-value="7 page ~ 2100 words">7 page ~ 2100 words </p>
              <p class="options__item" data-value="8 page ~ 2400 words">8 page ~ 2400 words </p>
              <p class="options__item" data-value="9 page ~ 2700 words">9 page ~ 2700 words </p>
              <p class="options__item" data-value="10 page ~ 3000 words">10 page ~ 3000 words </p>
              <p class="options__item" data-value="11 page ~ 3300 words">11 page ~ 3300 words </p>
              <p class="options__item" data-value="12 page ~ 3600 words">12 page ~ 3600 words </p>
              <p class="options__item" data-value="13 page ~ 3900 words">13 page ~ 3900 words </p>
              <p class="options__item" data-value="14 page ~ 4200 words">14 page ~ 4200 words </p>
              <p class="options__item" data-value="15 page ~ 4500 words">15 page ~ 4500 words </p>
              <p class="options__item" data-value="16 page ~ 4800 words">16 page ~ 4800 words </p>
              <p class="options__item" data-value="17 page ~ 5100 words">17 page ~ 5100 words </p>
              <p class="options__item" data-value="18 page ~ 5400 words">18 page ~ 5400 words </p>
              <p class="options__item" data-value="19 page ~ 5700 words">19 page ~ 5700 words </p>
              <p class="options__item" data-value="20 page ~ 6000 words">20 page ~ 6000 words </p>
              <p class="options__item" data-value="21 page ~ 6300 words">21 page ~ 6300 words </p>
              <p class="options__item" data-value="22 page ~ 6600 words">22 page ~ 6600 words </p>
              <p class="options__item" data-value="23 page ~ 6900 words">23 page ~ 6900 words </p>
              <p class="options__item" data-value="24 page ~ 7200 words">24 page ~ 7200 words </p>
              <p class="options__item" data-value="25 page ~ 7500 words">25 page ~ 7500 words </p>
              <p class="options__item" data-value="26 page ~ 7800 words">26 page ~ 7800 words </p>
              <p class="options__item" data-value="27 page ~ 8100 words">27 page ~ 8100 words </p>
              <p class="options__item" data-value="28 page ~ 8400 words">28 page ~ 8400 words </p>
              <p class="options__item" data-value="29 page ~ 8700 words">29 page ~ 8700 words </p>
              <p class="options__item" data-value="30 page ~ 9000 words">30 page ~ 9000 words </p>
              <p class="options__item" data-value="31 page ~ 9300 words">31 page ~ 9300 words </p>
              <p class="options__item" data-value="32 page ~ 9600 words">32 page ~ 9600 words </p>
              <p class="options__item" data-value="33 page ~ 9900 words">33 page ~ 9900 words </p>
              <p class="options__item" data-value="34 page ~ 10200 words">34 page ~ 10200 words </p>
              <p class="options__item" data-value="35 page ~ 10500 words">35 page ~ 10500 words </p>
              <p class="options__item" data-value="36 page ~ 10800 words">36 page ~ 10800 words </p>
              <p class="options__item" data-value="37 page ~ 11100 words">37 page ~ 11100 words </p>
              <p class="options__item" data-value="38 page ~ 11400 words">38 page ~ 11400 words </p>
              <p class="options__item" data-value="39 page ~ 11700 words">39 page ~ 11700 words </p>
              <p class="options__item" data-value="40 page ~ 12000 words">40 page ~ 12000 words </p>
              <p class="options__item" data-value="41 page ~ 12300 words">41 page ~ 12300 words </p>
              <p class="options__item" data-value="42 page ~ 12600 words">42 page ~ 12600 words </p>
              <p class="options__item" data-value="43 page ~ 12900 words">43 page ~ 12900 words </p>
              <p class="options__item" data-value="44 page ~ 13200 words">44 page ~ 13200 words </p>
              <p class="options__item" data-value="45 page ~ 13500 words">45 page ~ 13500 words </p>
              <p class="options__item" data-value="46 page ~ 13800 words">46 page ~ 13800 words </p>
              <p class="options__item" data-value="47 page ~ 14100 words">47 page ~ 14100 words </p>
              <p class="options__item" data-value="48 page ~ 14400 words">48 page ~ 14400 words </p>
              <p class="options__item" data-value="49 page ~ 14700 words">49 page ~ 14700 words </p>
              <p class="options__item" data-value="50 page ~ 15000 words">50 page ~ 15000 words </p>
              <p class="options__item" data-value="51 page ~ 15300 words">51 page ~ 15300 words </p>
              <p class="options__item" data-value="52 page ~ 15600 words">52 page ~ 15600 words </p>
              <p class="options__item" data-value="53 page ~ 15900 words">53 page ~ 15900 words </p>
              <p class="options__item" data-value="54 page ~ 16200 words">54 page ~ 16200 words </p>
              <p class="options__item" data-value="55 page ~ 16500 words">55 page ~ 16500 words </p>
              <p class="options__item" data-value="56 page ~ 16800 words">56 page ~ 16800 words </p>
              <p class="options__item" data-value="57 page ~ 17100 words">57 page ~ 17100 words </p>
              <p class="options__item" data-value="58 page ~ 17400 words">58 page ~ 17400 words </p>
              <p class="options__item" data-value="59 page ~ 17700 words">59 page ~ 17700 words </p>
              <p class="options__item" data-value="60 page ~ 18000 words">60 page ~ 18000 words </p>
              <p class="options__item" data-value="61 page ~ 18300 words">61 page ~ 18300 words </p>
              <p class="options__item" data-value="62 page ~ 18600 words">62 page ~ 18600 words </p>
              <p class="options__item" data-value="63 page ~ 18900 words">63 page ~ 18900 words </p>
              <p class="options__item" data-value="64 page ~ 19200 words">64 page ~ 19200 words </p>
              <p class="options__item" data-value="65 page ~ 19500 words">65 page ~ 19500 words </p>
              <p class="options__item" data-value="66 page ~ 19800 words">66 page ~ 19800 words </p>
              <p class="options__item" data-value="67 page ~ 20100 words">67 page ~ 20100 words </p>
              <p class="options__item" data-value="68 page ~ 20400 words">68 page ~ 20400 words </p>
              <p class="options__item" data-value="69 page ~ 20700 words">69 page ~ 20700 words </p>
              <p class="options__item" data-value="70 page ~ 21000 words">70 page ~ 21000 words </p>
              <p class="options__item" data-value="71 page ~ 21300 words">71 page ~ 21300 words </p>
              <p class="options__item" data-value="72 page ~ 21600 words">72 page ~ 21600 words </p>
              <p class="options__item" data-value="73 page ~ 21900 words">73 page ~ 21900 words </p>
              <p class="options__item" data-value="74 page ~ 22200 words">74 page ~ 22200 words </p>
              <p class="options__item" data-value="75 page ~ 22500 words">75 page ~ 22500 words </p>
              <p class="options__item" data-value="76 page ~ 22800 words">76 page ~ 22800 words </p>
              <p class="options__item" data-value="77 page ~ 23100 words">77 page ~ 23100 words </p>
              <p class="options__item" data-value="78 page ~ 23400 words">78 page ~ 23400 words </p>
              <p class="options__item" data-value="79 page ~ 23700 words">79 page ~ 23700 words </p>
              <p class="options__item" data-value="80 page ~ 24000 words">80 page ~ 24000 words </p>
              <p class="options__item" data-value="81 page ~ 24300 words">81 page ~ 24300 words </p>
              <p class="options__item" data-value="82 page ~ 24600 words">82 page ~ 24600 words </p>
              <p class="options__item" data-value="83 page ~ 24900 words">83 page ~ 24900 words </p>
              <p class="options__item" data-value="84 page ~ 25200 words">84 page ~ 25200 words </p>
              <p class="options__item" data-value="85 page ~ 25500 words">85 page ~ 25500 words </p>
              <p class="options__item" data-value="86 page ~ 25800 words">86 page ~ 25800 words </p>
              <p class="options__item" data-value="87 page ~ 26100 words">87 page ~ 26100 words </p>
              <p class="options__item" data-value="88 page ~ 26400 words">88 page ~ 26400 words </p>
              <p class="options__item" data-value="89 page ~ 26700 words">89 page ~ 26700 words </p>
              <p class="options__item" data-value="90 page ~ 27000 words">90 page ~ 27000 words </p>
              <p class="options__item" data-value="91 page ~ 27300 words">91 page ~ 27300 words </p>
              <p class="options__item" data-value="92 page ~ 27600 words">92 page ~ 27600 words </p>
              <p class="options__item" data-value="93 page ~ 27900 words">93 page ~ 27900 words </p>
              <p class="options__item" data-value="94 page ~ 28200 words">94 page ~ 28200 words </p>
              <p class="options__item" data-value="95 page ~ 28500 words">95 page ~ 28500 words </p>
              <p class="options__item" data-value="96 page ~ 28800 words">96 page ~ 28800 words </p>
              <p class="options__item" data-value="97 page ~ 29100 words">97 page ~ 29100 words </p>
              <p class="options__item" data-value="98 page ~ 29400 words">98 page ~ 29400 words </p>
              <p class="options__item" data-value="99 page ~ 29700 words">99 page ~ 29700 words </p>
              <p class="options__item" data-value="100 page ~ 30000 words">100 page ~ 30000 words </p>
            </div>
          </div>
          <!-- DEADLINE -->
          <div class="select-wrapper">
            <p class="label">本地时区</p>
            <input id="datetimepicker" type="text" placeholder="..." name="deadline" autocomplete="off">
          </div>
          <!-- CHECKBOX -->
          <div class="custom-checkbox text">
            <input type="checkbox" id="discount">
            <label for="discount">我是新顾客（7% 优惠）</label>
          </div>
          <!-- TOTAL -->
          <p class="custom-total element-title">总价</p>
          <!-- SUBMIT BUTTON -->
          <div class="submot-btn-wrapper">
            <span class="submit-btn page-btn text">立刻下单</span>
          </div>


          <input type="hidden" name="service-type" value="">
          <input type="hidden" name="academic-level" value="">
          <!-- DEADLINE input#deadline -->
          <input type="hidden" name="pages-quantity" value="">
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

    <div class="testimonials__slider-container">
      <div class="iphone-image__slider">
        <div class="iphone-image">
          <div class="active-slide">
            <img src="img/screen1.svg" alt="screen1">
          </div>
          <div class="active-slide">
            <img src="img/screen2.svg" alt="screen2">
          </div>
          <div class="active-slide">
            <img src="img/screen3.svg" alt="screen3">
          </div>
          <div class="active-slide">
            <img src="img/screen4.svg" alt="screen4">
          </div>
          <div class="active-slide">
            <img src="img/screen5.svg" alt="screen5">
          </div>
          <!-- <img src="img/iPhoneX.svg" alt="" class=""> -->
        </div>
      </div>




      <!-- should be mask -->
      <!-- <svg width="255" height="548" viewBox="0 0 255 548" fill="none" xmlns="http://www.w3.org/2000/svg" class="mask">
        <defs>
          <mask id="mask" x="0" y="0" width="255" height="548">
            <rect x="0" y="0" width="255" height="548" />
            <path d="M253.004 30.9672V30.9652C252.961 21.5241 250.206 14.2411 245.158 9.31969C240.112 4.39973 232.833 1.89648 223.853 1.89648H201.155C198.794 1.89648 196.867 3.82343 196.867 6.1856V7.83193C196.867 15.651 190.52 21.999 182.703 21.999H71.9001C64.0824 21.999 57.7357 15.651 57.7357 7.83193V6.1856C57.7357 3.82343 55.809 1.89648 53.4475 1.89648H30.7499C21.7701 1.89648 14.4906 4.39967 9.45513 9.31999C4.41796 14.242 1.68481 21.5257 1.68481 30.9672V518.282C1.68481 527.753 5.07616 534.754 10.5558 539.386C16.0248 544.008 23.5295 546.226 31.7028 546.226H222.986C231.138 546.226 238.643 544.008 244.117 539.386C249.602 534.754 253.004 527.753 253.004 518.282V30.9672Z" stroke="black" stroke-opacity="0.1" stroke-width="2" />
          </mask>
        </defs>
        <rect x="0" y="0" width="255" height="548" />
      </svg> -->


      <div class="testimonials__slider">
        <div class="testimonials__slider--slide active-current">
          <img src="img/screen1.svg" alt="screen1">
        </div>
        <div class="testimonials__slider--slide">
          <img src="img/screen2.svg" alt="screen2">
        </div>
        <div class="testimonials__slider--slide">
          <img src="img/screen3.svg" alt="screen3">
        </div>
        <div class="testimonials__slider--slide">
          <img src="img/screen4.svg" alt="screen4">
        </div>
        <div class="testimonials__slider--slide">
          <img src="img/screen5.svg" alt="screen5">
        </div>
      </div>
      <div class="testimonials__slider--controls">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="testi-prev-btn">
          <circle cx="24" cy="24" r="24" fill="#F8F8F8" />
          <path d="M27.41 19.41L26 18L20 24L26 30L27.41 28.59L22.83 24L27.41 19.41Z" fill="#666C7D" />
        </svg>
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="testi-next-btn">
          <circle cx="24" cy="24" r="24" fill="#F8F8F8" />
          <path d="M20.59 28.59L22 30L28 24L22 18L20.59 19.41L25.17 24L20.59 28.59Z" fill="#666C7D" />
        </svg>
      </div>
    </div>
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

  <section class="ceo content-section">
    <div class="ceo__container">
      <!-- #1 -->
      <div class="ceo__container--item">
        <h3>Why Online assignment help is the best option</h3>
        <p>
          There are many reasons that students may need assignment writing help. First of all, most students have other commitments such as a full time or part-time job, family responsibilities, or they simply need some free time to travel and do other things to increase the quality of life. Secondly, students may be passionate about their assignments but lack the necessary skills required for university assignment writing that are possessed by assignment help experts. In such cases, they are justified to seek assignment help online. Regardless of your reasons, we are here to provide you with custom assignment writing service.
        </p>
      </div>
      <!-- #2 -->
      <div class="ceo__container--item">
        <h3>Need help with your assignment? You have come to the right place!</h3>
        <p>
          Most students are confused when choosing college assignments help. This is because there are many companies offering online assignment writing service and there is just no way of telling which ones are genuine just by looking at their names. Well, our company has been in business for a long time and our quality services speak for themselves. Our loyal customers have expressed satisfaction with our assignment writing help and that is why they keep coming back and bringing their friends along. For this reason, worry no more as you have come to the right place.
        </p>
      </div>
      <!-- #3 -->
      <div class="ceo__container--item">
        <h3>Enjoy our assignment writing service and save time!</h3>
        <p>
          Writing assignments can take up a lot of time. Our university assignment help service will help you manage your time better. By letting us work on your assignments, you will have more time to focus on other important things in life. In addition, our assignment help experts have the power to write your assignments within the shortest time possible. This will enable you to submit all your assignments on time even when you have strict deadlines.
        </p>
      </div>
      <!-- #4 -->
      <div class="ceo__container--item">
        <h3>University assignment help just for you</h3>
        <p>
          We treat every student in a special way. Every client is important to us regardless of the type of assignment writing help they need. We do not discriminate against anyone and take the opportunity to serve you as a privilege. Every client is assigned the most qualified writer in their field of specialization and has the freedom to keep in touch with the writer throughout the writing process. Return clients also have the freedom to request the services of a specific writer that they have worked with before when they need help with assignment to ensure customer satisfaction.
        </p>
      </div>
      <!-- #5 -->
      <div class="ceo__container--item">
        <h3>Online assignment writing of the highest quality</h3>
        <p>
          The best assignment writing service will do more than just putting words together. We ensure that every part of the assignment is seamlessly linked to the next. We believe in conducting adequate research prior to starting the writing process to ensure that all the details of the assignment are captured. Our assignment help experts search for information from a reliable source only to ensure the assignment is based on credible information above everything else. To us, quality means more than meeting the client’s expectations. We go beyond what our clients expect from us and provide them with high-quality assignments that earn the highest grades. Most clients have come back to commend our writers for their hard work!
        </p>
      </div>
      <!-- #6 -->
      <div class="ceo__container--item">
        <h3>Assignment writing help for any subject and any task</h3>
        <p>
          Some students worry that they will not get assignment help online because their subjects are too complex. Worry no more because our online assignment writing service comprises diverse subjects. We have assignment help experts who specialize in all subjects ranging from technical subjects such as engineering, computer science, and medicine.
          We also have writers for subjects such as mathematics, English, physics, chemistry, biology, geography, history, and many others. We also provide university assignment help on essay writing, projects proposals, theses, dissertations, business plans, online classes, marketing plans, and many others. With us, you get all online assignment help under one roof.
        </p>
      </div>
      <!-- #7 -->
      <div class="ceo__container--item">
        <h3>Assignment help service for a reasonable price</h3>
        <p>
          Most students are afraid of seeking assignment writing help because they believe it will cost them a fortune. Or that’s what some of the companies offering assignment help online have made students believe. It gets worse when students are promised high quality and they pay a fortune for it only to receive poor quality assignments. As our company’s mission states, we strive to offer the highest quality online assignment writing service at the most affordable prices in the market. We understand that students do not earn a lot of money and we wish to establish long term relationships with them that are based on mutual benefit and not exploitation.
        </p>
      </div>
      <!-- #8 -->
      <div class="ceo__container--item">
        <h3>College assignment help from top writers</h3>
        <p>
          Our writers are recruited from English speaking native countries around the world. Their diverse backgrounds help in ensuring that our clients get the exact match of writers that can offer the best assignment writing services. Our writers have academic qualifications including bachelor’s degrees, Masters, and Ph.D. in different subjects. In addition to academic qualifications, our writers have excellent communication and interpersonal skills to ensure that they related well with our clients. We, therefore, trust our writers to be our ambassadors when they interact with clients.
        </p>
      </div>
      <!-- #9 -->
      <div class="ceo__container--item">
        <h3>Our assignment help writing experts</h3>
        <p>
          We pride ourselves on having the best team of writers in the market. We believe that our reputation is built by being able to keep our promise to our clients. This is only achieved by hiring a team of professional writers that share in our vision. We offer training to our writers to make sure that their skills are aligned with our vision. By doing so, we are confident to say that our writers are the best assignment help writing experts in the industry.
        </p>
      </div>
      <!-- #10 -->
      <div class="ceo__container--item">
        <h3>Enjoy our High-Quality assignment writing services</h3>
        <p>
          High quality is our strongest suit! We understand that students are capable of writing their own papers but we offer unmatched benefits to make it worth their while. Students that choose us to offer them help with assignment writing get the following benefits.
        </p>
      </div>
      <!-- #11 -->
      <div class="ceo__container--item">
        <h3>Proficient and timely assignment writing help</h3>
        <p>
          Most students worry that their assignments will not be delivered on time. Some of the clients have had bad experiences in the past with unqualified writers from some of our competitors. Such clients may have lost faith in online assignment writing providers by the time they come to us. However, they change their mind as we strive to restore their confidence in assignment help online. Our team of writers adheres to the clients’ deadline even when operating under a strict time limit. This gives the clients time to review the assignment and get back to us if they need anything else.
        </p>
      </div>
      <!-- #12 -->
      <div class="ceo__container--item">
        <h3>Custom assignment writing service provided by experienced professionals</h3>
        <p>
          In our many years of experience, we have learnt that every assignment is unique in its own accord. We, therefore, provide custom assignment writing services that are tailored to meet the needs of every client. This approach has helped us maintain our 100% originality guarantee and above all to assure students that their assignments will be plagiarism-free. Our team of writers can handle simple to complex assignments which means that clients get the best help with assignment regardless of their areas of specialization. Our writers have a lot of experience in online assignment writing thereby providing clients with high-quality assignments that assure them of getting high grades.
        </p>
      </div>
    </div>
    <p class="ceo__decription">
      Now that you know all about our online assignment help service, please feel free to contact our customer support team at any time for any inquiries. Relax and let us take control of your grades as we provide you the best assignment writing help you can ever get!
    </p>

  </section>

  <?include("components/footer.php")?>



  <script src="js/index.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/slick-settings.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
  <script>
    $(document).ready(function() {
      $.datetimepicker.setLocale("en");
      $("#datetimepicker").datetimepicker({
        format: "Y-m-d H:i",
      });
    });
  </script>


</body>

</html>