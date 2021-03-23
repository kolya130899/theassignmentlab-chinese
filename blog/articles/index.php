<?php
include("../../components/head.php");
?>


<body>
  <header class="header header--essay">
    <?php
    include("../../components/header.php");
    ?>
  </header>



  <section class="article">
    <div class="article__wrapper">
      <div class="article__left">
        <a href="../" class="article__back"><img src="img/back.svg" alt="back"><span>Back</span></a>


        <?php
        $article = $_GET["article"];
        include($article . ".php");
        ?>
      </div>
      <?php
      include("../../components/preorder-form.php")
      ?>
    </div>
  </section>



  <?php
  include("../../components/footer.php")
  ?>
</body>

</html>