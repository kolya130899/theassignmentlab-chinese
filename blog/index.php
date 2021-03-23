<?php
include("../components/head.php");
?>


<body>
  <header class="header header--essay">
    <?php
    include("../components/header.php");
    ?>
  </header>


  <nav class="blog-filter">
    <div class="blog-filter__wrapper">
      <p class="blog-filter__item">article tag</p>
    </div>
  </nav>

  <div class="blog content-section">
    <div class="blog__wrapper">
      <!-- #1 -->
      <div class="blog-article">
        <a class="blog-article__image" href="articles/?article=article1">
          <img src="img/article1.svg" alt="article 1">
        </a>
        <h2 class="blog-article__title">找代写方法 判定代写机构是否正规靠谱的关键点</h2>
        <p class="blog-article__description">
          Assignment难不难写（essay、report）？Homework难不难写？难，这是毋庸置疑的，难在哪呢？
        </p>
        <div class="blog-article__tags">
          <p class="blog-filter__item">article tag</p>
        </div>
      </div>
      <!-- #2 -->
      <div class="blog-article">
        <a class="blog-article__image" href="articles/?article=article2">
          <img src="img/article2.svg" alt="article 2">
        </a>
        <h2 class="blog-article__title">找代写方法 判定代写机构是否正规靠谱的关键点</h2>
        <p class="blog-article__description">
          Assignment难不难写（essay、report）？Homework难不难写？难，这是毋庸置疑的，难在哪呢？
        </p>
        <div class="blog-article__tags">
          <p class="blog-filter__item">article tag</p>
        </div>
      </div>
    </div>
  </div>



  <?php
  include("../components/footer.php")
  ?>



</body>

</html>