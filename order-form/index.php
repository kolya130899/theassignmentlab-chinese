<?php
include("../components/head.php")
?>

<body>
  <header class="header">
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

  <section class="top-section">
    <h2 class="section-title">留学生代写服务类型</h2>
    <img src="<?= $url; ?>img/icon.svg" alt="">
  </section>

  <div class="form-section">
    <div class="form-section-wrapper">
      <svg width="1228" height="54" viewBox="0 0 1228 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="form-section__progressbar">
        <path d="M2 1C1.59925 1 1.2372 1.23925 1.08007 1.60791C0.922943 1.97657 1.00108 2.40343 1.27861 2.69253L24.6138 27L1.27861 51.3075C1.00108 51.5966 0.922943 52.0234 1.08007 52.3921C1.2372 52.7607 1.59925 53 2 53H1202C1202.27 53 1202.53 52.889 1202.72 52.6925L1226.72 27.6925C1227.09 27.3056 1227.09 26.6944 1226.72 26.3075L1202.72 1.30747C1202.53 1.11104 1202.27 1 1202 1H2Z" fill="#F8F8F8" stroke="#5FCF9D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path class="block active" d="M2 2H394L418 27L394 52H2L26 27L2 2Z" fill="#5FCF9D" />
        <path class="block-text active" d="M160.62 31.24H165.68V32.1H160.62V31.24ZM165.68 25.02V25.86H160.62V25.02H165.68ZM165.68 27.88H160.62V27.08H165.68V27.88ZM160.62 29.14H165.68V29.96H160.62V29.14ZM169.38 32.1H167.82V23.52H163.54C163.64 23.2 163.72 22.86 163.8 22.52H168.9V20.62H164.26C164.38 20.14 164.48 19.66 164.56 19.2L162.02 19.12C161.98 19.58 161.94 20.08 161.88 20.62H157.64V22.52H161.6C161.56 22.86 161.5 23.2 161.44 23.52H158.54V32.1H157.06L156.84 30.88L155 31.5V25.92H157.06V23.66H155V19.34H152.76V23.66H150.78V25.92H152.76V32.22C151.9 32.5 151.14 32.74 150.5 32.9L151.38 35.28C153.04 34.66 155.08 33.88 157 33.1V34.12H160.28C159.2 34.84 157.6 35.64 156.28 36.1C156.78 36.54 157.42 37.22 157.74 37.7C159.34 37.1 161.38 36.04 162.76 35.12L161.42 34.12H164.82L163.72 35.2C165.1 35.92 166.94 37.04 167.82 37.78L169.36 36.14C168.6 35.54 167.18 34.74 165.96 34.12H169.38V32.1ZM177 28C177.12 27.46 177.24 26.9 177.36 26.32H186V24.28H177.76L178.08 22.66L175.68 22.44C175.28 24.9 174.62 28.1 174.08 30.08H184.36C184.06 33.26 183.68 34.8 183.16 35.22C182.92 35.42 182.64 35.46 182.22 35.46C181.64 35.46 180.32 35.44 179.02 35.34C179.44 35.94 179.76 36.88 179.8 37.56C181.1 37.6 182.38 37.62 183.1 37.54C183.98 37.48 184.58 37.3 185.16 36.7C185.94 35.88 186.4 33.82 186.84 29C186.88 28.68 186.92 28 186.92 28H177ZM182.84 31.44H171.76V33.64H182.84V31.44ZM171.36 19.98V24.48H173.72V22.18H186.18V24.48H188.66V19.98H171.36ZM196.76 22.4C196.06 21.52 194.56 20.18 193.48 19.26L191.9 20.76C192.96 21.78 194.42 23.2 195.06 24.08L196.76 22.4ZM196.14 32.88V25.2H190.92V27.48H193.84V33.52C193.84 34.42 193.16 35.1 192.72 35.4C193.1 35.86 193.66 36.86 193.82 37.42C194.26 36.94 195.02 36.36 199.48 33.34C199.24 32.84 198.92 31.84 198.82 31.16L196.14 32.88ZM209.3 20.58H198.22V22.98H203.52V34.62C203.52 34.98 203.36 35.1 202.96 35.12C202.56 35.14 201.08 35.16 199.82 35.06C200.2 35.74 200.66 36.92 200.76 37.64C202.64 37.64 203.96 37.58 204.86 37.16C205.76 36.74 206.06 36.04 206.06 34.66V22.98H209.3V20.58ZM215.1 28.94V27.56H218.74V28.94H215.1ZM215.1 24.4H218.74V25.76H215.1V24.4ZM224.98 25.76H221.2V24.4H224.98V25.76ZM224.98 28.94H221.2V27.56H224.98V28.94ZM229.04 32.2H221.2V30.9H227.44V22.46H224.58C225.12 21.7 225.72 20.86 226.26 19.98L223.62 19.22C223.24 20.22 222.54 21.48 221.9 22.46H217.62L218.48 22.04C218.08 21.22 217.18 20 216.4 19.16L214.36 20.06C214.94 20.78 215.6 21.7 216 22.46H212.78V30.9H218.74V32.2H211.02V34.42H218.74V37.68H221.2V34.42H229.04V32.2ZM236.6 22.22C235.88 21.4 234.36 20.16 233.24 19.32L231.74 20.84C232.84 21.76 234.32 23.1 234.98 23.96L236.6 22.22ZM249.22 31H244.76V29.04H248.3V26.88H244.76V24.94H248.88V22.76H247.04C247.52 21.82 248 20.76 248.46 19.72L246.04 18.98C245.74 20.14 245.12 21.64 244.56 22.76H241.22L242.68 22.22C242.42 21.36 241.7 20.06 241.08 19.12L238.96 19.86C239.5 20.76 240.06 21.9 240.34 22.76H238.02V24.94H242.36V26.88H238.64V29.04H242.36V31H237.56V32.88C237.42 32.52 237.3 32.14 237.22 31.86L235.64 33.06V25.2H230.68V27.48H233.36V33.78C233.36 34.86 232.8 35.6 232.36 35.96C232.74 36.28 233.38 37.14 233.58 37.62C233.94 37.14 234.54 36.6 238 33.9C237.9 33.72 237.8 33.48 237.7 33.22H242.36V37.74H244.76V33.22H249.22V31ZM252.12 28.8C252.54 27.26 252.86 24.88 252.9 23.22L251.22 23C251.12 24.62 250.82 26.86 250.4 28.22L252.12 28.8ZM259.72 33.12V32.2H265.7V33.12H259.72ZM265.7 29.58V30.52H259.72V29.58H265.7ZM267.94 27.84H257.52V37.76H259.72V34.76H265.7V35.42C265.7 35.66 265.6 35.74 265.32 35.74C265.06 35.74 264.12 35.76 263.3 35.7C263.58 36.28 263.86 37.14 263.94 37.72C265.32 37.72 266.32 37.72 267.02 37.38C267.74 37.06 267.94 36.5 267.94 35.46V27.84ZM263.84 25.38V24.52H268.14V22.92H263.84V22.12H268.68V20.42H263.84V19.06H261.48V20.42H256.8V22.12H261.48V22.92H257.34V24.5C257.1 23.76 256.64 22.64 256.22 21.78L255.08 22.26V19.06H252.94V37.72H255.08V23.18C255.4 23.96 255.68 24.8 255.82 25.38L257.38 24.62L257.34 24.52H261.48V25.38H256.18V27.08H269.28V25.38H263.84Z" fill="#F8F8F8" />
        <path d="M381 28L395.17 28L391.59 31.59L393 33L399 27L393 21L391.59 22.41L395.17 26L381 26L381 28Z" fill="white" />
        <path class="block " opacity="0.1" d="M406 2H798L822 27L798 52H406L430 27L406 2Z" fill="#5FCF9D" />
        <path class="block-text " d="M580.96 21.32C580.1 20.7 578.38 19.82 577.18 19.3L575.86 21.04C577.08 21.66 578.78 22.62 579.58 23.26L580.96 21.32ZM579.8 26.78C578.92 26.18 577.2 25.34 576.02 24.82L574.76 26.6C575.98 27.2 577.68 28.14 578.48 28.76L579.8 26.78ZM579.06 29.7C577.88 32 576.34 34.48 575.28 36L577.28 37.6C578.5 35.66 579.76 33.38 580.82 31.28L579.06 29.7ZM588.3 34.9V30.82H592.12V28.56H588.3V25.04H592.84V22.78H586.74L588.68 22.08C588.4 21.22 587.7 19.92 587.1 18.98L584.9 19.72C585.46 20.68 586.06 21.94 586.3 22.78H580.98V25.04H585.82V28.56H581.78V30.82H585.82V34.9H580.38V37.16H593.36V34.9H588.3ZM606.96 26.84V22.5H609.02V26.84H606.96ZM603.16 29.14H604.62C604.5 31.34 604.16 33.7 603.14 35.58C603.16 35.46 603.16 35.34 603.16 35.2V29.14ZM599.1 26.84V26.82V22.5H600.88V26.84H599.1ZM613.26 26.84H611.38V20.3H604.66V26.84H603.16V20.3H596.82V26.82V26.84H594.74V29.14H596.76C596.62 31.56 596.16 34.24 594.68 36.22C595.12 36.52 596.02 37.44 596.36 37.92C598.18 35.6 598.84 32.1 599.02 29.14H600.88V35.18C600.88 35.44 600.78 35.54 600.5 35.54C600.24 35.56 599.4 35.56 598.62 35.52C598.92 36.08 599.26 37.04 599.36 37.64C600.68 37.64 601.64 37.6 602.28 37.22C602.66 37.02 602.9 36.74 603.02 36.36C603.52 36.74 604.26 37.46 604.56 37.86C606.18 35.54 606.74 32.08 606.9 29.14H609.02V35.08C609.02 35.36 608.94 35.46 608.64 35.48C608.4 35.48 607.52 35.48 606.76 35.44C607.08 36.04 607.4 37.06 607.48 37.68C608.84 37.68 609.8 37.64 610.48 37.24C611.16 36.86 611.38 36.24 611.38 35.12V29.14H613.26V26.84ZM630.4 19.82C629.52 21.6 628.04 23.34 626.52 24.46C627.02 24.88 627.82 25.76 628.2 26.22C629.82 24.86 631.54 22.68 632.6 20.54L630.4 19.82ZM617.18 21.7H620.48V32.34H622.28V19.82H615.44V32.42H617.18V21.7ZM619.02 33.44C619.6 31.8 619.74 30.08 619.74 28.54V22.64H617.96V28.54C617.96 31 617.68 34.4 614.6 36.18C615.02 36.5 615.6 37.14 615.84 37.54C617.4 36.52 618.36 35.18 618.9 33.72C619.74 34.8 620.74 36.2 621.16 37.12L622.66 35.92C622.18 35.02 621.08 33.6 620.2 32.58L619.02 33.44ZM633.06 28.62V26.46H626.14V19.42H623.96V26.46H622.66V28.62H623.96V34.44C623.96 35.32 623.4 35.74 623 35.96C623.32 36.38 623.74 37.28 623.88 37.8C624.28 37.5 625 37.18 628.78 35.66C628.68 35.16 628.6 34.18 628.6 33.54L626.14 34.4V28.62H627.32C628.18 32.28 629.6 35.48 631.9 37.32C632.26 36.72 632.98 35.88 633.5 35.48C631.56 34.08 630.26 31.5 629.52 28.62H633.06ZM639.42 27.4C639.42 27.12 639.42 26.82 639.42 26.58V24.26H648.84V27.4H639.42ZM644.68 22.06L645.92 21.7C645.68 20.96 645.2 19.8 644.76 18.96L642.38 19.54C642.72 20.32 643.12 21.3 643.36 22.06H636.92V26.58C636.92 29.48 636.72 33.6 634.56 36.44C635.14 36.68 636.2 37.44 636.66 37.9C638.34 35.66 639.04 32.48 639.3 29.62H648.84V30.66H651.28V22.06H644.68Z" fill="#5FCF9D" />
        <path d="M785 28L799.17 28L795.59 31.59L797 33L803 27L797 21L795.59 22.41L799.17 26L785 26L785 28Z" fill="white" />
        <path class="block" opacity="0.1" d="M810 2H1202L1226 27L1202 52H810L834 27L810 2Z" fill="#5FCF9D" />
        <path class="block-text" d="M971.32 27.94V31.44C971.32 33.54 971.72 34.24 973.62 34.24H975.14C976.58 34.24 977.18 33.56 977.42 30.9C976.76 30.76 975.78 30.38 975.34 29.98C975.28 31.8 975.2 32.06 974.88 32.06H974.04C973.72 32.06 973.66 32 973.66 31.44V27.94H977.12V25.88H972.16V23.56H976.32V21.56H972.16V19.16H969.8V21.56H968.22C968.4 21.1 968.56 20.62 968.7 20.16L966.46 19.66C966 21.4 965.14 23.14 964.06 24.24C964.6 24.52 965.56 25.12 966.02 25.5C966.48 24.96 966.9 24.3 967.3 23.56H969.8V25.88H964.36V27.94H967.62C967.34 29.9 966.62 31.46 963.94 32.42C964.48 32.88 965.1 33.78 965.38 34.4C968.7 33.02 969.66 30.78 970.04 27.94H971.32ZM963.88 22.76C963.24 21.84 961.86 20.52 960.72 19.62L958.92 20.96C960.04 21.94 961.36 23.32 961.92 24.28L963.88 22.76ZM963.44 26.74H958.96V28.94H961.16V34.06C960.34 34.52 959.48 35.14 958.68 35.86L960.26 37.94C961.34 36.68 962.42 35.52 963.18 35.52C963.62 35.52 964.24 36.12 965.04 36.58C966.4 37.36 967.96 37.6 970.34 37.6C972.28 37.6 975.26 37.5 976.74 37.4C976.76 36.76 977.14 35.58 977.38 34.94C975.46 35.22 972.38 35.38 970.38 35.38C968.32 35.38 966.6 35.28 965.36 34.54C964.46 34 963.98 33.52 963.44 33.42V26.74ZM985.5 29.54L985.18 27.4L983.4 27.88V25H985.52V22.82H983.4V19.06H981.1V22.82H978.84V25H981.1V28.5C980.14 28.72 979.28 28.94 978.56 29.1L979.08 31.38C979.72 31.2 980.38 31.04 981.1 30.82V35.18C981.1 35.44 981 35.52 980.76 35.52C980.52 35.54 979.8 35.54 979.1 35.5C979.4 36.14 979.68 37.12 979.76 37.72C981.06 37.72 981.96 37.66 982.58 37.28C983.2 36.9 983.4 36.32 983.4 35.18V30.16L985.5 29.54ZM992.36 31.32H995.92V29.24H992.36V27.68H989.98V29.24H986.26V31.32H989.98V32.72H985.26V34.82H989.98V37.74H992.36V34.82H997.2V32.72H992.36V31.32ZM993.12 21.96C992.58 22.6 991.94 23.2 991.24 23.76C990.58 23.22 990 22.6 989.5 21.96H993.12ZM995 19.78L994.62 19.86H986.02V21.96H987.22C987.86 23.06 988.62 24.04 989.5 24.92C988.1 25.7 986.54 26.34 984.92 26.76C985.36 27.18 985.92 28.08 986.16 28.62C987.92 28.08 989.64 27.3 991.18 26.32C992.66 27.34 994.34 28.16 996.24 28.66C996.54 28.08 997.2 27.16 997.68 26.7C995.96 26.32 994.38 25.72 993.04 24.96C994.46 23.74 995.62 22.26 996.42 20.54L995 19.78ZM1011.74 28.7C1010.86 30.22 1009.62 31.46 1008.1 32.42C1006.54 31.44 1005.32 30.18 1004.44 28.7H1011.74ZM1013.54 26.28L1013.12 26.36H1009.18V24.04H1016.48V21.68H1009.18V19.06H1006.7V21.68H999.44V24.04H1006.7V26.36H1000.42V28.7H1003.04L1001.96 29.08C1002.98 30.92 1004.2 32.44 1005.7 33.66C1003.6 34.54 1001.16 35.12 998.5 35.46C998.96 35.98 999.58 37.12 999.78 37.74C1002.78 37.26 1005.58 36.46 1007.98 35.2C1010.14 36.38 1012.72 37.16 1015.84 37.6C1016.14 36.9 1016.82 35.82 1017.34 35.26C1014.7 34.98 1012.4 34.42 1010.46 33.64C1012.54 32.04 1014.16 29.96 1015.2 27.26L1013.54 26.28ZM1023.34 19.16C1022.28 22.1 1020.46 24.98 1018.56 26.8C1018.98 27.38 1019.7 28.7 1019.96 29.28C1020.42 28.8 1020.9 28.26 1021.36 27.68V37.7H1023.8V23.96C1024.54 22.62 1025.16 21.26 1025.7 19.92L1023.34 19.16ZM1037.32 23.36H1035.12V19.28H1032.64V23.36H1025.02V25.76H1032.64V34.84C1032.64 35.28 1032.46 35.44 1031.96 35.44C1031.5 35.46 1029.74 35.46 1028.2 35.4C1028.56 36.02 1028.98 37.08 1029.12 37.76C1031.32 37.78 1032.82 37.74 1033.8 37.36C1034.76 37 1035.12 36.38 1035.12 34.84V25.76H1037.32V23.36ZM1030.78 31.82C1030.18 30.62 1028.94 28.66 1028.04 27.2L1025.92 28.18C1026.82 29.7 1028 31.76 1028.52 32.98L1030.78 31.82ZM1056.94 24.58V22.26H1048.74L1050.12 21.66C1049.82 20.9 1049.22 19.7 1048.68 18.8L1046.34 19.68C1046.74 20.48 1047.22 21.48 1047.54 22.26H1039.1V24.58H1044.14C1043.94 28.8 1043.56 33.3 1038.76 35.86C1039.4 36.36 1040.14 37.18 1040.5 37.82C1044.1 35.76 1045.58 32.64 1046.26 29.3H1052.56C1052.28 32.88 1051.92 34.58 1051.4 35.04C1051.12 35.26 1050.86 35.3 1050.42 35.3C1049.82 35.3 1048.42 35.28 1047.06 35.16C1047.52 35.8 1047.86 36.8 1047.9 37.5C1049.26 37.56 1050.58 37.56 1051.36 37.48C1052.26 37.4 1052.9 37.2 1053.5 36.54C1054.32 35.68 1054.74 33.46 1055.1 28.04C1055.16 27.72 1055.18 27 1055.18 27H1046.6C1046.7 26.18 1046.74 25.38 1046.8 24.58H1056.94ZM1065.22 29.36H1068.42V27.06H1059.84V29.36H1062.86V34.18C1061.42 34.42 1060.1 34.62 1059.08 34.78L1059.74 37.18C1062.32 36.62 1065.84 35.9 1069.12 35.18L1068.94 33.06C1067.72 33.3 1066.44 33.54 1065.22 33.76V29.36ZM1076.96 24.78V22.46H1075.08L1076.44 21.28C1075.9 20.62 1074.72 19.68 1073.82 19.06L1072.24 20.36C1073.04 20.96 1074.04 21.78 1074.58 22.46H1071.42C1071.38 21.38 1071.38 20.26 1071.4 19.16H1068.84C1068.84 20.26 1068.86 21.38 1068.9 22.46H1059.08V24.78H1069.02C1069.5 31.82 1071 37.74 1074.42 37.74C1076.32 37.74 1077.12 36.82 1077.48 33.04C1076.82 32.78 1075.94 32.2 1075.4 31.64C1075.3 34.18 1075.06 35.24 1074.64 35.24C1073.18 35.24 1071.96 30.62 1071.54 24.78H1076.96Z" fill="#5FCF9D" />
        <path d="M1179 31.17L1174.83 27L1173.41 28.41L1179 34L1191 22L1189.59 20.59L1179 31.17Z" fill="white" />
      </svg>

      <div class="form-section__body">
        <div class="form-section__body--order-form active ">
          <form class="active-form form-item" id="order-form">
            <h3 class="order-form__title">请填写订单详情</h3>
            <p class="order-form__subtitle">有任何问题，请随时联系客服。</p>
            <div class="order-form__dropdowns">
              <div class="order-form__dropdowns--column">
                <!-- #1 -->
                <div class="custom-form-element">
                  <p class="custom-form-element__header">服务类型</p>
                  <input type="hidden" id="service-input">
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
                  <p class="custom-form-element__header">本地时区</p>
                  <input type="hidden" id="timezone-input">
                  <p class="custom-form-element__select">选择</p>
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
                  <input type="hidden" id="words-quantity-input">
                  <p class="custom-form-element__select">页等于300字</p>
                  <div class="custom-form-element__select--menu">
                    <p>Option 1</p>
                    <p>Option 2</p>
                    <p>Option 3</p>
                    <p>Option 4</p>
                  </div>
                </div>

                <!-- #4 -->
                <div class="custom-form-element">
                  <p class="custom-form-element__header">所需引用数</p>
                  <input type="hidden" id="links-input">
                  <p class="custom-form-element__select">1</p>
                  <div class="custom-form-element__select--menu">
                    <p>Option 1</p>
                    <p>Option 2</p>
                    <p>Option 3</p>
                    <p>Option 4</p>
                  </div>
                </div>

                <!-- ____ -->
              </div>

              <div class="order-form__dropdowns--column">
                <!-- #1 -->
                <div class="custom-form-element">
                  <p class="custom-form-element__header">学习等级</p>
                  <input type="hidden" id="academic-input">
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
                  <p class="custom-form-element__header">交稿日期</p>
                  <input type="text" id="date-input" placeholder="...">
                </div>

                <!-- #3 -->
                <div class="custom-form-element">
                  <p class="custom-form-element__header">引用格式</p>
                  <input type="hidden" id="sitation-input">
                  <p class="custom-form-element__select">选择</p>
                  <div class="custom-form-element__select--menu">
                    <p>Option 1</p>
                    <p>Option 2</p>
                    <p>Option 3</p>
                    <p>Option 4</p>
                  </div>
                </div>

                <!-- #4 -->
                <div class="custom-form-element">
                  <p class="custom-form-element__header">写作类型</p>
                  <input type="hidden" id="doctype-input">
                  <p class="custom-form-element__select">选择</p>
                  <div class="custom-form-element__select--menu">
                    <p>Option 1</p>
                    <p>Option 2</p>
                    <p>Option 3</p>
                    <p>Option 4</p>
                  </div>
                </div>

                <!-- ____ -->
              </div>

            </div>

            <div class="custom-form-element">
              <p class="custom-form-element__header">订单要求</p>
              <textarea name="description" id="description" placeholder="请告诉你作业的要求，写手应该注意的特点，要不需要draft"></textarea>
            </div>

            <h4 class="element-title order-form-title">附加文件</h4>
            <p class="order-form-subtitle">(单子可以上软几个文件（word，图片，ppt，pdf，ZIP等等</p>

            <div class="order-form__draggable-container">
              <div class="draggable__item">
                <input type="file" id="quality">
                <label for="quality">
                  <h3 class="element-title">论文要求<br>评分标准</h3>
                  <p>
                    Drag&drop<br>
                    your file here
                  </p>
                  <img src="<?= $url; ?>img/file-upload-cloud.svg" alt="">
                  <p class="page-btn">上传文件 </p>
                </label>
              </div>
              <div class="draggable__item">
                <input type="file" id="materials">
                <label for="quality">
                  <h3 class="element-title">论文要求<br>评分标准</h3>
                  <p>
                    Drag&drop<br>
                    your file here
                  </p>
                  <img src="<?= $url; ?>img/file-upload-cloud.svg" alt="">
                  <p class="page-btn">上传文件 </p>
                </label>
              </div>
              <div class="draggable__item">
                <input type="file" id="additional">
                <label for="quality">
                  <h3 class="element-title">论文要求<br>评分标准</h3>
                  <p>
                    Drag&drop<br>
                    your file here
                  </p>
                  <img src="<?= $url; ?>img/file-upload-cloud.svg" alt="">
                  <p class="page-btn">上传文件 </p>
                </label>
              </div>
            </div>

            <div class="order-form__promocode">
              <input type="text" name="promocode" placeholder="我有优惠码">
              <p class="order-form__promocode--apply">Apply</p>
            </div>

            <div class="custom-checkbox text">
              <input type="checkbox" id="agreement">
              <label for="agreement">点击此处同意EduExpertCare用户条款及隐私协议</label>
            </div>

            <div class="order-form__submit order">
              <p class="page-btn">确认订单详情</p>
            </div>


            <div class="form-section__body--total"></div>
          </form>

          <!-- REGISTRATION FORM -->
          <div class="form-section__body--order-form reg-form form-item">
            <h3 class="order-form__title">请填写订单详情</h3>
            <div class="reg-forms-toggler">
              <input type="radio" name="customer-type" id="new" checked>
              <label for="new" class="reg-forms-toggler__label">
                <span></span>
                新顾客
              </label>

              <input type="radio" name="customer-type" id="returning">
              <label for="returning" class="reg-forms-toggler__label">
                <span></span>
                已有帐户
              </label>
            </div>
            <div class="reg-form__socials">
              <img src="<?= $url; ?>img/google.svg" alt="">
            </div>
            <div class="reg-form__socials">
              <img src="<?= $url; ?>img/facebook.svg" alt="">
            </div>
            <div class="reg-form__socials">
              <img src="<?= $url; ?>img/wechat.svg" alt="">
            </div>

            <!-- <div class="fb-login-button" data-size="large" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div> -->
            <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->

            <form action="" id="new-form">
              <h4 class="element-title">或者填写下面的表格</h4>
              <!-- #1 -->
              <div class="custom-form-element">
                <p class="custom-form-element__header">邮箱</p>
                <input type="text" id="doctype-input" class="custom-form-element__select textfield">
              </div>
              <!-- #2 -->
              <div class="custom-form-element">
                <p class="custom-form-element__header">密码</p>
                <input type="text" id="doctype-input" class="custom-form-element__select textfield">
              </div>
              <!-- #3 -->
              <div class="custom-form-element">
                <p class="custom-form-element__header">确认密码</p>
                <input type="text" id="doctype-input" class="custom-form-element__select textfield">
              </div>

              <!-- #4 -->
              <div class="custom-form-element">
                <p class="custom-form-element__header">手机（WhatsApp</p>
                <input type="hidden" id="doctype-input">
                <p class="custom-form-element__select">&nbsp;</p>
                <div class="custom-form-element__select--menu">
                  <p>Option 1</p>
                  <p>Option 2</p>
                  <p>Option 3</p>
                  <p>Option 4</p>
                </div>
              </div>

              <!-- #5 -->
              <div class="custom-form-element">
                <p class="custom-form-element__header">QQ号码</p>
                <input type="text" id="doctype-input" class="custom-form-element__select textfield">
              </div>
              <!-- #6 -->
              <div class="custom-form-element">
                <p class="custom-form-element__header">姓名</p>
                <input type="text" id="doctype-input" class="custom-form-element__select textfield">
              </div>

              <div class="order-form__submit registration">
                <p class="page-btn">提交订单 & 登录账户</p>
              </div>

            </form>

            <form action="" id="returning-form">
              <h4 class="element-title">或者填写下面的表格</h4>
              <!-- #1 -->
              <div class="custom-form-element">
                <p class="custom-form-element__header">邮箱</p>
                <input type="text" id="doctype-input" class="custom-form-element__select textfield">
              </div>
              <!-- #2 -->
              <div class="custom-form-element">
                <p class="custom-form-element__header">密码</p>
                <input type="text" id="doctype-input" class="custom-form-element__select textfield">
              </div>


              <div class="order-form__submit registration">
                <p class="page-btn">提交订单 & 登录账户</p>
              </div>

            </form>

          </div>

          <!-- PAYMENT FORM -->
          <div class="payment-form form-item">
            <h3 class="order-form__title">请填写订单详情</h3>

            <form action="" id="payment-form">
              <div class="payment-form__top">
                <div class="reg-forms-toggler">
                  <input type="radio" name="customer-type" id="credit" checked>
                  <label for="credit" class="reg-forms-toggler__label">
                    <span></span>
                    银行卡付款
                  </label>
                </div>
                <div class="payment-form__top--cards">
                  <img src="<?= $url; ?>img/Vlogo.svg" alt="">
                  <img src="<?= $url; ?>img/MClogo.svg" alt="">
                  <img src="<?= $url; ?>img/Dlogo.svg" alt="">
                  <img src="<?= $url; ?>img/AElogo.svg" alt="">
                </div>
              </div>
              <div class="payment-form__items">
                <div class="payment-form__items--credentials">
                  <!-- #1 -->
                  <div class="custom-form-element">
                    <p class="custom-form-element__header">First Name</p>
                    <input type="text" id="doctype-input" class="custom-form-element__select textfield">
                  </div>
                  <!-- #2 -->
                  <div class="custom-form-element">
                    <p class="custom-form-element__header">Last Name</p>
                    <input type="text" id="doctype-input" class="custom-form-element__select textfield">
                  </div>
                </div>
                <div class="payment-form__items--card-info">
                  <!-- #1 -->
                  <div class="custom-form-element">
                    <p class="custom-form-element__header">Card Number (No spaces or dashes)</p>
                    <input type="text" id="doctype-input" class="custom-form-element__select textfield">
                  </div>
                  <div class="card-info__right">
                    <!-- #1 -->
                    <div class="custom-form-element">
                      <p class="custom-form-element__header">Expiration Date(MM/YY)</p>
                      <input type="text" id="doctype-input" class="custom-form-element__select textfield">
                    </div>
                    <!-- #2 -->
                    <div class="custom-form-element">
                      <p class="custom-form-element__header">CVV</p>
                      <input type="text" id="doctype-input" class="custom-form-element__select textfield">
                    </div>
                  </div>

                </div>
              </div>

              <div class="custom-checkbox text">
                <input type="checkbox" id="save-card">
                <label for="save-card">Save this card</label>
              </div>

              <div class="order-form__submit card-submit ">
                <p class="page-btn">确定付款</p>
              </div>

            </form>

          </div>

          <div class="form-section__body--modal">
            <div class="modal-wrapper">
              <p class="close-modal">&#10006;</p>
              <h2>
                亲爱的顾客，谢谢您的选择！<br>
                您的支付成功了。根据填写的要求我们马上去安排专业的作
              </h2>
              <p>
                您可以上账户查看订单状态
                有任何问题，请随时联系客服
              </p>

              <div class="order-form__submit ty-submit">
                <p class="page-btn">Support</p>
              </div>
            </div>
          </div>

        </div>



        <div class="form-section__body--order-cost">
          <div class="order-cost">
            <h3 class="element-title">预算价格</h3>
            <p class="text">
              <span>截止日期</span>
              <span>Selected deadline date</span>
            </p>
            <div class="order-cost__divider">
              <p class="element-title">总价</p>
              <div class="order-cost__line"></div>
            </div>
            <!-- ITEM 1 -->
            <div class="order-cost__item">
              <div class="order-cost__item-wrapper">
                <img src="<?= $url; ?>img/flagUSA.svg" alt="">
                <p class="order-cost__item--currency">美元</p>
              </div>
              <p class="order-cost__item--price">
                <span>$</span><span>0</span>.<span>00</span>
              </p>
            </div>
            <!-- ITEM 2 -->
            <div class="order-cost__item">
              <div class="order-cost__item-wrapper">
                <img src="<?= $url; ?>img/flagGB.svg" alt="">
                <p class="order-cost__item--currency">英镑</p>
              </div>
              <p class="order-cost__item--price">
                <span>$</span><span>0</span>.<span>00</span>
              </p>
            </div>
            <!-- ITEM 3 -->
            <div class="order-cost__item">
              <div class="order-cost__item-wrapper">
                <img src="<?= $url; ?>img/flagCAN.svg" alt="">
                <p class="order-cost__item--currency">美元</p>
              </div>
              <p class="order-cost__item--price">
                <span>$</span><span>0</span>.<span>00</span>
              </p>
            </div>
            <!-- ITEM 4 -->
            <div class="order-cost__item">
              <div class="order-cost__item-wrapper">
                <img src="<?= $url; ?>img/flagNZ.svg" alt="">
                <p class="order-cost__item--currency">澳元</p>
              </div>
              <p class="order-cost__item--price">
                <span>$</span><span>0</span>.<span>00</span>
              </p>
            </div>
            <!-- ITEM 5 -->
            <div class="order-cost__item">
              <div class="order-cost__item-wrapper">
                <img src="<?= $url; ?>img/flagEU.svg" alt="">
                <p class="order-cost__item--currency">欧元</p>
              </div>
              <p class="order-cost__item--price">
                <span>$</span><span>0</span>.<span>00</span>
              </p>
            </div>

            <div class="order-cost__line"></div>

            <div class="order-cost__descriptor"><span class="text">汇率随银行波动</span></div>
          </div>


        </div>
        <div class=""></div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?= $url; ?>js/index.js"></script>

    <!-- <script src="https://apis.google.com/js/platform.js" async defer></script> -->

    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v8.0" nonce="JraTSXDq"></script> -->

</body>

</html>