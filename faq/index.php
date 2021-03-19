<?php
include("../components/head.php");
?>


<body>
  <header class="header ">
    <?php
    include("../components/header.php");
    ?>
  </header>

  <nav class="faq-nav">
    <div class="faq-nav__wrapper">
      <!-- #1 -->
      <div class="faq-nav-item active">
        <div class="faq-nav-item__container">
          <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="96" height="96" fill="white" />
            <path d="M36.5642 9.59998C34.0796 9.59998 32.1084 11.6294 32.1084 14.079V40.8108C32.1084 43.2604 34.0796 45.2769 36.5642 45.2769H81.9465C84.3945 45.2769 86.3919 43.2914 86.3919 40.8108V14.079C86.3919 11.5777 84.3945 9.59998 81.9465 9.59998H36.5642ZM36.5642 12.2507H81.9465C82.9661 12.2507 83.7541 13.0798 83.7541 14.079V17.5469H34.7565V14.079C34.7565 13.0436 35.5963 12.2507 36.5642 12.2507ZM34.7565 20.195H83.7541V24.1749H34.7565V20.195ZM34.7565 26.8126H83.7541V40.8108C83.7541 41.8049 82.9661 42.6288 81.9465 42.6288H36.5642C35.5756 42.6288 34.7565 41.8462 34.7565 40.8108V26.8126ZM41.5682 29.7943C39.9913 29.7943 38.7338 31.0969 38.7338 32.6881V35.8353C38.7338 37.4269 39.9913 38.7368 41.5682 38.7368H49.1349C50.7117 38.7368 51.9692 37.4265 51.9692 35.8353V32.6881C51.9692 31.1072 50.7117 29.7943 49.1349 29.7943H41.5682ZM41.5682 32.4424H49.1349C49.2345 32.4424 49.3186 32.5368 49.3186 32.6881V35.8353C49.3186 35.9917 49.2345 36.0887 49.1349 36.0887H41.5682C41.4686 36.0887 41.3845 35.9969 41.3845 35.8353V32.6881C41.3845 32.5523 41.4686 32.4424 41.5682 32.4424ZM37.3245 54.6254C35.2706 54.6254 31.6036 56.0102 28.7001 57.4002C27.1817 58.1271 25.9254 58.7701 24.9762 59.2829C24.2893 58.0847 22.9928 57.2735 21.5264 57.2735C18.8774 57.2735 16.2285 57.2735 13.5795 57.2735C11.3506 57.2735 9.59961 59.0757 9.59961 61.2534C9.59961 67.4297 9.59961 79.7823 9.59961 79.7823C9.59961 81.96 11.3653 83.7622 13.5795 83.7622H21.5264C23.704 83.7622 25.4934 82.0014 25.4934 79.7823V79.5547C28.0761 79.1364 30.5409 78.574 33.4403 78.4634C35.0771 78.4634 38.1367 80.7831 40.1251 82.1873C42.9587 84.1875 46.011 86.4 49.3211 86.4C50.3175 86.4 51.3184 86.0722 52.6364 85.5802C59.88 82.8722 75.134 74.1855 84.0593 69.0218C86.287 67.733 87.0513 64.8923 85.779 62.6886C84.5583 60.5743 82.0763 60.048 79.6708 60.881L61.1418 67.2969C60.8175 65.925 59.9453 64.6962 58.636 63.9403C53.4572 61.1634 48.0905 58.3102 42.7939 56.1511C40.972 55.4177 38.7997 54.6254 37.3245 54.6254ZM37.2419 57.2735C38.5247 57.294 40.4941 58.0744 41.8063 58.6027C47.234 60.9075 51.9884 63.3438 57.3069 66.2367C58.7927 67.0945 58.8856 68.8109 58.2845 69.852C57.5786 71.0746 55.9492 71.5667 54.6589 70.8217L46.6344 66.1876C44.9909 65.2384 43.6718 67.5274 45.3155 68.4762L53.34 73.1078C55.8611 74.5634 59.1175 73.6946 60.5731 71.1734C60.7638 70.8432 60.9234 70.4889 61.036 70.139L80.5399 63.3817C83.9397 62.2038 84.5358 65.7035 82.7794 66.7048C72.3947 72.6246 58.9419 80.3345 51.7082 83.0976C50.5033 83.547 49.5291 83.7622 49.3213 83.7622C47.3352 83.7622 44.4421 82 41.6485 80.028C39.7537 78.7529 36.3353 75.8631 33.4405 75.8154C31.2982 75.8204 27.8107 76.4391 25.4936 76.8653V62.0292C25.4936 62.0292 27.7067 60.7996 29.8329 59.7949C32.5791 58.4972 35.5051 57.3769 37.2419 57.2735ZM13.5797 59.9216C16.2287 59.9216 20.9018 59.9216 21.5266 59.9216C22.283 59.9216 22.8454 60.5384 22.8454 61.2534C22.8453 68.096 22.8454 78.4676 22.8454 79.7823C22.8454 80.5026 22.2623 81.1141 21.5266 81.1141H13.5797C12.8698 81.1141 12.2505 80.5387 12.2505 79.7823C12.2505 79.7823 12.2505 67.4297 12.2505 61.2534C12.2505 60.5115 12.8324 59.9216 13.5797 59.9216ZM16.2252 75.8128C15.494 75.8128 14.9011 76.4056 14.9011 77.1368C14.9011 77.8681 15.494 78.4609 16.2252 78.4609C16.9565 78.4609 17.5493 77.8681 17.5493 77.1368C17.5493 76.4056 16.9565 75.8128 16.2252 75.8128Z" fill="#5FCF9D" />
          </svg>
          <p>订单价格与付款方式</p>
        </div>
      </div>
      <!-- #2 -->
      <div class="faq-nav-item">
        <div class="faq-nav-item__container">
          <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="96" height="96" fill="white" />
            <path d="M52.4606 38.3058C60.2488 38.3058 66.5252 29.7158 66.5252 22.5918C66.3645 19.0108 64.797 15.6378 62.1635 13.2059C59.5299 10.7739 56.0431 9.47947 52.4606 9.60377C48.8725 9.50961 45.3899 10.8229 42.7574 13.2628C40.1248 15.7027 38.5513 19.0756 38.373 22.6605C38.373 29.7158 44.6723 38.3058 52.4606 38.3058ZM52.4606 14.1851C54.84 14.0599 57.1723 14.8807 58.9489 16.4685C60.7255 18.0562 61.8021 20.2821 61.9439 22.6605C61.9439 27.5626 57.4771 33.7932 52.4606 33.7932C47.444 33.7932 42.9543 27.5626 42.9543 22.6605C43.1306 20.2909 44.2206 18.0825 45.9942 16.5012C47.7678 14.9199 50.0863 14.0894 52.4606 14.1851ZM78.7574 63.4343C78.6038 65.6078 78.0039 67.7263 76.9949 69.6575C75.9859 71.5887 74.5897 73.2911 72.8933 74.6585C67.6761 79.682 60.7969 82.6163 53.5601 82.9049C52.9526 82.9049 52.3699 82.6636 51.9404 82.234C51.5108 81.8044 51.2694 81.2218 51.2694 80.6143C51.2694 80.0067 51.5108 79.4241 51.9404 78.9945C52.3699 78.5649 52.9526 78.3236 53.5601 78.3236C59.643 78.1156 65.4347 75.6683 69.8238 71.4516C71.0528 70.4782 72.0721 69.2661 72.8201 67.8882C73.5681 66.5103 74.0293 64.9952 74.1761 63.4343C74.0273 61.864 73.5559 60.3413 72.7912 58.9617C72.0265 57.5821 70.985 56.3753 69.7322 55.417C66.5344 52.316 62.556 50.1396 58.2201 49.1191C53.8842 48.0987 49.3527 48.2723 45.1076 49.6216C44.5376 49.7843 43.9269 49.7197 43.4035 49.4414C42.8802 49.1632 42.4852 48.6929 42.3013 48.1295C42.1174 47.5661 42.1591 46.9533 42.4176 46.4199C42.6761 45.8866 43.1312 45.4742 43.6874 45.2694C48.7229 43.6759 54.0955 43.4733 59.2368 44.683C64.378 45.8927 69.0966 48.4697 72.8933 52.1413C74.5999 53.5146 76.0025 55.2276 77.012 57.1716C78.0215 59.1157 78.6158 61.2484 78.7574 63.4343ZM39.8161 64.5796V61.1436C39.8161 59.0173 38.9715 56.9781 37.4679 55.4745C35.9644 53.971 33.9252 53.1263 31.7988 53.1263C29.6725 53.1263 27.6333 53.971 26.1297 55.4745C24.6262 56.9781 23.7815 59.0173 23.7815 61.1436V64.5796C22.5665 64.5796 21.4012 65.0623 20.542 65.9215C19.6829 66.7806 19.2002 67.9459 19.2002 69.161V80.6143C19.2002 81.8293 19.6829 82.9946 20.542 83.8537C21.4012 84.7129 22.5665 85.1956 23.7815 85.1956H39.8161C41.0312 85.1956 42.1965 84.7129 43.0556 83.8537C43.9148 82.9946 44.3975 81.8293 44.3975 80.6143V69.161C44.3975 67.9459 43.9148 66.7806 43.0556 65.9215C42.1965 65.0623 41.0312 64.5796 39.8161 64.5796ZM28.3628 61.1436C28.3628 60.2324 28.7248 59.3584 29.3692 58.714C30.0136 58.0697 30.8875 57.7076 31.7988 57.7076C32.7101 57.7076 33.5841 58.0697 34.2284 58.714C34.8728 59.3584 35.2348 60.2324 35.2348 61.1436V64.5796H28.3628V61.1436ZM23.7815 80.6143V69.161H39.8161V80.6143H23.7815Z" fill="#666C7D" />
          </svg>
          <p>账户安全</p>
        </div>
      </div>
      <!-- #3 -->
      <div class="faq-nav-item">
        <div class="faq-nav-item__container">
          <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="96" height="96" fill="white" />
            <path d="M15.6004 76.8H45.6004V82.8228C45.6004 83.1408 45.7264 83.4468 45.952 83.6724C46.1776 83.8968 46.4824 84.0228 46.8004 84.0228C46.8004 84.0228 46.8004 84.0228 46.8016 84.0228L80.4016 84C81.064 84 81.6004 83.4624 81.6004 82.8V54C81.6004 51.3528 79.4476 49.2 76.8004 49.2C75.3592 49.2 74.0812 49.8504 73.2004 50.8584C72.3196 49.8504 71.0416 49.2 69.6004 49.2C68.722 49.2 67.9096 49.4544 67.2004 49.8672V13.2C67.2004 12.5376 66.664 12 66.0004 12H24.0004C23.974 12 23.95 12.0132 23.9248 12.0156C23.8192 12.0228 23.7172 12.0432 23.6164 12.0768C23.578 12.09 23.5408 12.0996 23.5036 12.1164C23.3764 12.1752 23.2552 12.2484 23.152 12.3516L14.752 20.7516C14.6488 20.8548 14.5756 20.976 14.5168 21.1032C14.5 21.1404 14.4904 21.1764 14.4772 21.2148C14.4424 21.3156 14.422 21.4188 14.4148 21.5256C14.4136 21.552 14.4004 21.5748 14.4004 21.6V75.6C14.4004 76.2624 14.9368 76.8 15.6004 76.8ZM69.6004 51.6C70.924 51.6 72.0004 52.6764 72.0004 54V63.6H74.4004V54C74.4004 52.6764 75.4768 51.6 76.8004 51.6C78.124 51.6 79.2004 52.6764 79.2004 54V81.6L48.0004 81.6216V70.2L50.4004 68.3988V72H52.8004V39.6C52.8004 38.2764 53.8768 37.2 55.2004 37.2C56.524 37.2 57.6004 38.2764 57.6004 39.6V54V63.6H60.0004V54C60.0004 52.6764 61.0768 51.6 62.4004 51.6C63.724 51.6 64.8004 52.6764 64.8004 54V63.6H67.2004V54C67.2004 52.6764 68.2768 51.6 69.6004 51.6ZM64.8004 49.8672C64.0912 49.4544 63.2788 49.2 62.4004 49.2C61.522 49.2 60.7096 49.4544 60.0004 49.8672V39.6C60.0004 36.9528 57.8476 34.8 55.2004 34.8C52.5532 34.8 50.4004 36.9528 50.4004 39.6V65.3964L46.0792 68.64C45.778 68.8668 45.6004 69.2232 45.6004 69.6V74.4H16.8004V22.8H24.0004C24.664 22.8 25.2004 22.2624 25.2004 21.6V14.4H64.8004V49.8672ZM22.8004 16.0968V20.4H18.4972L22.8004 16.0968Z" fill="#666C7D" />
            <path d="M20.4002 26.3999C19.7366 26.3999 19.2002 26.9375 19.2002 27.5999V37.1999C19.2002 37.8623 19.7366 38.3999 20.4002 38.3999H30.0002C30.6638 38.3999 31.2002 37.8623 31.2002 37.1999V27.5999C31.2002 26.9375 30.6638 26.3999 30.0002 26.3999H20.4002ZM28.8002 35.9999H21.6002V28.7999H28.8002V35.9999Z" fill="#666C7D" />
            <path d="M30.0002 42H20.4002C19.7366 42 19.2002 42.5376 19.2002 43.2V52.8C19.2002 53.4624 19.7366 54 20.4002 54H30.0002C30.6638 54 31.2002 53.4624 31.2002 52.8V43.2C31.2002 42.5376 30.6638 42 30.0002 42ZM28.8002 51.6H21.6002V44.4H28.8002V51.6Z" fill="#666C7D" />
            <path d="M30.0002 57.6001H20.4002C19.7366 57.6001 19.2002 58.1377 19.2002 58.8001V68.4001C19.2002 69.0625 19.7366 69.6001 20.4002 69.6001H30.0002C30.6638 69.6001 31.2002 69.0625 31.2002 68.4001V58.8001C31.2002 58.1377 30.6638 57.6001 30.0002 57.6001ZM28.8002 67.2001H21.6002V60.0001H28.8002V67.2001Z" fill="#666C7D" />
            <path d="M47.9996 31.2H33.5996V33.6H47.9996V31.2Z" fill="#666C7D" />
            <path d="M47.9996 46.8H33.5996V49.2H47.9996V46.8Z" fill="#666C7D" />
            <path d="M38.3996 62.3999H33.5996V64.7999H38.3996V62.3999Z" fill="#666C7D" />
            <path d="M43.1998 62.3999H40.7998V64.7999H43.1998V62.3999Z" fill="#666C7D" />
            <path d="M47.9996 62.3999H45.5996V64.7999H47.9996V62.3999Z" fill="#666C7D" />
          </svg>
          <p>下单与交稿过程</p>
        </div>
      </div>
      <!-- #4 -->
      <div class="faq-nav-item">
        <div class="faq-nav-item__container">
          <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="96" height="96" fill="white" />
            <path d="M81.12 23.4C81.4348 23.9477 81.6004 24.5684 81.6 25.2V61.2H14.4V25.2C14.3996 24.4018 14.6645 23.6261 15.153 22.9949C15.6415 22.3636 16.326 21.9127 17.0988 21.7128L16.4988 19.3896C15.2109 19.7225 14.0702 20.4738 13.2558 21.5256C12.4415 22.5773 11.9997 23.8699 12 25.2V67.2C12.0019 68.7908 12.6347 70.3158 13.7595 71.4406C14.8843 72.5654 16.4093 73.1981 18 73.2H40.3356L37.536 81.6H34.8V84H61.2V81.6H58.464L55.6644 73.2H78C79.5907 73.1981 81.1157 72.5654 82.2405 71.4406C83.3653 70.3158 83.9981 68.7908 84 67.2V25.2C84.0008 24.1467 83.7235 23.1118 83.196 22.2L81.12 23.4ZM55.9344 81.6H40.0656L42.8652 73.2H53.1348L55.9344 81.6ZM81.6 67.2C81.6 68.1548 81.2207 69.0705 80.5456 69.7456C79.8705 70.4208 78.9548 70.8 78 70.8H18C17.0452 70.8 16.1295 70.4208 15.4544 69.7456C14.7793 69.0705 14.4 68.1548 14.4 67.2V63.6H81.6V67.2Z" fill="#666C7D" />
            <path d="M80.1002 12C79.2569 12.001 78.4365 12.2746 77.7614 12.78L75.6002 14.4C75.0404 13.6558 74.3155 13.0517 73.4826 12.6352C72.6497 12.2187 71.7314 12.0013 70.8002 12H25.2002C23.6095 12.0019 22.0845 12.6347 20.9597 13.7595C19.8349 14.8843 19.2021 16.4093 19.2002 18V58.8H21.6002V18C21.6002 17.0452 21.9795 16.1295 22.6546 15.4544C23.3297 14.7793 24.2454 14.4 25.2002 14.4H70.8002C71.3568 14.4052 71.9045 14.5397 72.4002 14.793C72.8958 15.0462 73.3258 15.4112 73.6562 15.8592L62.2214 24.4356C57.0722 28.2906 52.7567 33.1482 49.535 38.7156L41.4002 43.3584C41.2355 43.4519 41.0953 43.5831 40.991 43.7412C40.8867 43.8993 40.8213 44.0798 40.8002 44.268L39.6002 55.068C39.5816 55.2363 39.5988 55.4067 39.6507 55.5678C39.7026 55.729 39.788 55.8774 39.9014 56.0032C40.0147 56.129 40.1534 56.2294 40.3083 56.2978C40.4632 56.3662 40.6309 56.401 40.8002 56.4C40.8443 56.4 40.8884 56.3976 40.9322 56.3928L51.7322 55.1928C51.9204 55.1717 52.1009 55.1063 52.259 55.002C52.4171 54.8977 52.5483 54.7575 52.6418 54.5928L57.2882 46.4628C62.8557 43.2418 67.7134 38.9267 71.5682 33.7776L74.4002 30V58.8H76.8002V26.7996L83.2202 18.24C83.6548 17.6606 83.9194 16.9716 83.9844 16.2502C84.0495 15.5289 83.9124 14.8037 83.5885 14.1559C83.2646 13.5081 82.7667 12.9632 82.1505 12.5825C81.5344 12.2017 80.8245 12 80.1002 12ZM50.861 52.8744L44.0678 53.6292L47.387 50.31C47.5865 50.3669 47.7927 50.3972 48.0002 50.4C48.4749 50.4 48.9389 50.2592 49.3336 49.9955C49.7282 49.7318 50.0359 49.357 50.2175 48.9184C50.3992 48.4799 50.4467 47.9973 50.3541 47.5318C50.2615 47.0662 50.0329 46.6386 49.6973 46.3029C49.3616 45.9673 48.934 45.7387 48.4684 45.6461C48.0029 45.5535 47.5203 45.601 47.0818 45.7827C46.6432 45.9643 46.2684 46.2719 46.0047 46.6666C45.741 47.0613 45.6002 47.5253 45.6002 48C45.603 48.2075 45.6333 48.4137 45.6902 48.6132L42.371 51.9324L43.1246 45.1392L50.2046 41.0964L54.9086 45.8004L50.861 52.8744ZM56.5934 44.0964L54.2486 41.7516L51.9038 39.4056C52.2278 38.8644 52.5674 38.334 52.9118 37.8084L58.1918 43.0884C57.6662 43.4328 57.1358 43.7724 56.5934 44.0964ZM81.3002 16.8L69.6446 32.34C66.9741 35.9079 63.7914 39.062 60.1994 41.7L54.299 35.7996C56.9366 32.2065 60.0906 29.0229 63.659 26.352L79.2002 14.6988C79.4891 14.4813 79.8468 14.3756 80.2075 14.4009C80.5682 14.4263 80.9076 14.5811 81.1632 14.8369C81.4188 15.0926 81.5735 15.4321 81.5986 15.7928C81.6238 16.1536 81.5178 16.5112 81.3002 16.8Z" fill="#666C7D" />
            <path d="M63.0469 29.9136L64.6069 31.7424C65.2341 31.2096 65.8805 30.694 66.5461 30.1956L65.1061 28.2756C64.3997 28.802 63.7133 29.348 63.0469 29.9136Z" fill="#666C7D" />
            <path d="M57.5996 35.4601L59.4584 36.9805C60.5183 35.6854 61.6573 34.457 62.8688 33.3025L61.2092 31.5601C59.9269 32.7846 58.7214 34.087 57.5996 35.4601Z" fill="#666C7D" />
            <path d="M27.6002 18H25.2002V20.4H27.6002V18Z" fill="#666C7D" />
            <path d="M32.4 18H30V20.4H32.4V18Z" fill="#666C7D" />
            <path d="M37.1998 18H34.7998V20.4H37.1998V18Z" fill="#666C7D" />
            <path d="M56.4002 24H25.2002V26.4H56.4002V24Z" fill="#666C7D" />
            <path d="M50.3998 30H34.7998V32.4H50.3998V30Z" fill="#666C7D" />
            <path d="M46.8002 36H25.2002V38.4H46.8002V36Z" fill="#666C7D" />
            <path d="M38.4002 42H25.2002V44.4H38.4002V42Z" fill="#666C7D" />
            <path d="M37.2002 48H25.2002V50.4H37.2002V48Z" fill="#666C7D" />
            <path d="M37.2002 54H25.2002V56.4H37.2002V54Z" fill="#666C7D" />
            <path d="M70.8 42H66V44.4H70.8V42Z" fill="#666C7D" />
            <path d="M70.7998 48H58.7998V50.4H70.7998V48Z" fill="#666C7D" />
            <path d="M70.8004 54H56.4004V56.4H70.8004V54Z" fill="#666C7D" />
            <path d="M32.4002 30H25.2002V32.4H32.4002V30Z" fill="#666C7D" />
          </svg>
          <p>写手的背景</p>
        </div>
      </div>
      <!-- #5 -->
      <div class="faq-nav-item">
        <div class="faq-nav-item__container">
          <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="96" height="96" fill="white" />
            <path d="M85.297 55.0983L80.293 48.6059C80.1264 48.3874 80.0366 48.1239 80.0366 47.8533C80.0366 47.5827 80.1264 47.3192 80.293 47.1007L85.2304 40.57C85.7367 39.9177 86.073 39.1588 86.2113 38.3567C86.3495 37.5546 86.2858 36.7324 86.0254 35.9586C85.765 35.1849 85.3154 34.482 84.7141 33.9085C84.1128 33.335 83.3773 32.9076 82.5687 32.6617L74.5836 30.2255C74.3143 30.1443 74.0789 29.9831 73.9114 29.7653C73.7439 29.5475 73.6531 29.2843 73.652 29.0137V20.9779C73.6435 20.1651 73.4326 19.366 73.0367 18.6471C72.6409 17.9283 72.0716 17.3104 71.3762 16.8451C70.6979 16.3675 69.9091 16.0542 69.0772 15.9321C68.2452 15.8099 67.3947 15.8825 66.5984 16.1436L58.6132 18.6947C58.346 18.7789 58.0578 18.7799 57.79 18.6974C57.5222 18.6149 57.2886 18.4532 57.1227 18.2355L52.1452 11.7047C51.6511 11.0524 51.0027 10.5216 50.2532 10.1557C49.5037 9.7899 48.6744 9.5995 47.8333 9.60012C46.9883 9.59393 46.1543 9.78456 45.4032 10.1556C44.6521 10.5267 44.0063 11.067 43.5213 11.7303L38.6503 18.2992C38.4853 18.5218 38.2502 18.6878 37.9795 18.7727C37.7088 18.8577 37.4168 18.8571 37.1464 18.7712L29.1613 16.2201C28.3496 15.9571 27.4837 15.8857 26.6371 16.012C25.7906 16.1384 24.9883 16.4587 24.2985 16.9457C23.6087 17.4328 23.0518 18.0723 22.675 18.8098C22.2982 19.5473 22.1127 20.361 22.1343 21.1819L22.2009 29.2561C22.2152 29.5358 22.133 29.8123 21.967 30.0428C21.801 30.2733 21.5605 30.4451 21.2826 30.5316L13.2974 33.0189C12.4932 33.2661 11.7618 33.6931 11.1638 34.2647C10.5658 34.8364 10.1183 35.5362 9.85823 36.3063C9.59818 37.0765 9.53306 37.8949 9.66824 38.6939C9.80343 39.493 10.135 40.2497 10.6357 40.9016L15.6397 47.3303C15.8063 47.5488 15.896 47.8123 15.896 48.0829C15.896 48.3534 15.8063 48.617 15.6397 48.8354L10.7022 55.3662C10.196 56.0185 9.8597 56.7774 9.72142 57.5795C9.58315 58.3816 9.64687 59.2038 9.9073 59.9775C10.1677 60.7513 10.6173 61.4542 11.2186 62.0277C11.8198 62.6012 12.5554 63.0286 13.364 63.2745L21.3491 65.7107C21.6184 65.7919 21.8538 65.953 22.0213 66.1709C22.1888 66.3887 22.2796 66.6519 22.2807 66.9225V74.9966C22.2749 75.8119 22.4731 76.6168 22.8587 77.3436C23.2443 78.0704 23.806 78.6981 24.4968 79.174C25.1875 79.65 25.9873 79.9603 26.8289 80.079C27.6706 80.1977 28.5297 80.1214 29.3343 79.8564L37.3195 77.3053C37.5867 77.221 37.8748 77.2201 38.1426 77.3026C38.4104 77.3851 38.6441 77.5468 38.81 77.7645L43.7608 84.2952C44.255 84.9476 44.9034 85.4784 45.6529 85.8442C46.4024 86.2101 47.2317 86.4005 48.0728 86.3998C48.9178 86.406 49.7517 86.2154 50.5028 85.8443C51.254 85.4733 51.8998 84.9329 52.3848 84.2697L57.2824 77.6369C57.4473 77.4144 57.6825 77.2484 57.9532 77.1635C58.2239 77.0785 58.5159 77.0791 58.7862 77.165L66.7714 79.716C67.583 79.9791 68.4489 80.0505 69.2955 79.9241C70.1421 79.7978 70.9444 79.4775 71.6342 78.9904C72.324 78.5034 72.8809 77.8639 73.2577 77.1264C73.6345 76.3889 73.8199 75.5751 73.7983 74.7542V66.6801C73.7841 66.4004 73.8662 66.1239 74.0322 65.8934C74.1982 65.6629 74.4387 65.4911 74.7166 65.4046L82.7018 62.9173C83.5061 62.6701 84.2374 62.2431 84.8354 61.6714C85.4334 61.0998 85.8809 60.4 86.141 59.6299C86.401 58.8597 86.4662 58.0413 86.331 57.2423C86.1958 56.4432 85.8642 55.6865 85.3635 55.0345L85.297 55.0983ZM83.5536 58.9249C83.424 59.31 83.2008 59.6601 82.9023 59.9462C82.6038 60.2323 82.2386 60.4462 81.8367 60.5703L73.8516 63.1214C73.0446 63.3735 72.3425 63.8656 71.8471 64.5262C71.3517 65.1868 71.0889 65.9815 71.0967 66.7949V74.869C71.0985 75.2728 71.0003 75.6711 70.8102 76.0314C70.62 76.3917 70.3434 76.7035 70.003 76.9414C69.6626 77.1792 69.2682 77.3362 68.8521 77.3995C68.4361 77.4627 68.0103 77.4305 67.6098 77.3053L59.6247 74.818C58.819 74.5692 57.9516 74.5723 57.1478 74.8268C56.3441 75.0813 55.6455 75.574 55.153 76.2339L50.2554 82.7901C50.0105 83.1198 49.6872 83.3889 49.3124 83.5752C48.9375 83.7615 48.5217 83.8597 48.0994 83.8615C47.6794 83.8626 47.2652 83.7684 46.8904 83.5866C46.5157 83.4048 46.1912 83.1406 45.9434 82.8156L40.9926 76.2849C40.6237 75.7968 40.1397 75.3991 39.58 75.1242C39.0203 74.8494 38.4008 74.7051 37.7719 74.7032C37.3427 74.7034 36.9161 74.7679 36.5076 74.8945L28.5225 77.4456C28.1222 77.5721 27.6963 77.6057 27.2798 77.5436C26.8633 77.4815 26.4682 77.3255 26.1269 77.0885C25.7854 76.8523 25.5071 76.5419 25.3151 76.1827C25.1231 75.8235 25.0227 75.4257 25.0223 75.0221V66.8842C25.0133 66.0769 24.7382 65.2929 24.2362 64.6446C23.7342 63.9962 23.0311 63.5166 22.2275 63.2745L14.2423 60.8382C13.8423 60.7139 13.4788 60.5006 13.1814 60.2157C12.884 59.9309 12.6612 59.5825 12.5314 59.1992C12.4016 58.8159 12.3683 58.4086 12.4344 58.0106C12.5004 57.6126 12.6639 57.2353 12.9115 56.9096L17.8623 50.3788C18.365 49.7223 18.6361 48.9292 18.6361 48.1148C18.6361 47.3004 18.365 46.5072 17.8623 45.8507L12.7784 39.32C12.5281 38.994 12.3622 38.6156 12.2947 38.2161C12.2271 37.8166 12.2596 37.4074 12.3896 37.0223C12.5197 36.6372 12.7434 36.2873 13.0424 36.0015C13.3414 35.7157 13.7071 35.5022 14.1092 35.3786L22.0944 32.8913C22.9014 32.6392 23.6035 32.1471 24.0989 31.4865C24.5943 30.8259 24.8571 30.0312 24.8493 29.2178L24.7961 21.1819C24.7943 20.7782 24.8925 20.3798 25.0826 20.0196C25.2727 19.6593 25.5494 19.3475 25.8898 19.1096C26.2302 18.8718 26.6246 18.7148 27.0406 18.6515C27.4567 18.5882 27.8824 18.6205 28.2829 18.7457L36.2681 21.233C37.0815 21.4839 37.9575 21.478 38.7672 21.2163C39.5769 20.9545 40.2777 20.4507 40.7664 19.7789L45.664 13.2226C45.9089 12.8929 46.2321 12.6238 46.607 12.4375C46.9819 12.2512 47.3977 12.1531 47.8199 12.1512C48.2399 12.1501 48.6542 12.2444 49.0289 12.4261C49.4036 12.6079 49.7281 12.8721 49.9759 13.1971L54.9267 19.7278C55.4155 20.3997 56.1162 20.9035 56.9259 21.1653C57.7356 21.427 58.6116 21.4328 59.4251 21.1819L67.4102 18.6309C67.8105 18.5044 68.2364 18.4708 68.6529 18.5329C69.0694 18.595 69.4645 18.751 69.8058 18.988C70.1473 19.2241 70.4255 19.5346 70.6176 19.8938C70.8096 20.253 70.9099 20.6508 70.9104 21.0544V29.1285C70.9359 29.9226 71.2186 30.6895 71.7195 31.3226C72.2203 31.9557 72.9143 32.4237 73.7052 32.6617L81.6904 35.098C82.0903 35.2222 82.4539 35.4355 82.7513 35.7204C83.0487 36.0053 83.2714 36.3537 83.4013 36.737C83.5311 37.1203 83.5644 37.5276 83.4983 37.9256C83.4323 38.3235 83.2688 38.7009 83.0212 39.0266L78.0704 45.5573C77.5677 46.2139 77.2966 47.007 77.2966 47.8214C77.2966 48.6358 77.5677 49.4289 78.0704 50.0855L83.0611 56.5779C83.3351 56.8993 83.5232 57.2798 83.609 57.6866C83.6948 58.0933 83.6758 58.514 83.5536 58.9121V58.9249ZM60.9289 39.6771H56.3375C57.3622 33.7714 55.0066 30.8505 53.3563 29.6004C52.5355 28.8898 51.5299 28.4045 50.4455 28.1957C49.361 27.987 48.2379 28.0624 47.1944 28.4142C46.7266 28.6098 46.3272 28.9303 46.0441 29.3374C45.7609 29.7444 45.6059 30.221 45.5974 30.7102C45.5974 31.4245 45.5974 32.126 45.664 32.8148C45.9335 34.7881 45.6912 36.7946 44.9586 38.6567C44.3331 39.9322 41.698 41.2078 39.5154 41.9093C39.3961 41.7356 39.2343 41.5925 39.0441 41.4925C38.8539 41.3925 38.641 41.3385 38.4241 41.3353H29.6803C29.3273 41.3353 28.9888 41.4697 28.7393 41.7089C28.4897 41.9481 28.3495 42.2726 28.3495 42.6109V59.5754C28.3495 59.9137 28.4897 60.2381 28.7393 60.4774C28.9888 60.7166 29.3273 60.8509 29.6803 60.8509H38.4241C38.6422 60.8464 38.8559 60.7905 39.0462 60.6882C39.2365 60.5859 39.3976 60.4403 39.5154 60.2642L43.508 61.6928C45.5812 62.4344 47.7763 62.8146 49.9893 62.8153H60.543C61.8387 62.8266 63.0943 62.3846 64.0743 61.5722C65.0544 60.7597 65.6915 59.6325 65.8664 58.4019L67.5167 46.9222C67.6459 46.0202 67.5721 45.1022 67.3003 44.2298C67.0285 43.3575 66.5649 42.551 65.9408 41.8647C65.3167 41.1783 64.5466 40.628 63.6821 40.2507C62.8176 39.8733 61.8788 39.6778 60.9289 39.6771ZM37.0932 58.2871H31.0112V43.8736H37.0932V58.2871ZM64.8816 46.565L63.2313 58.0448C63.1439 58.6601 62.8253 59.2237 62.3353 59.6299C61.8453 60.0361 61.2175 60.2571 60.5696 60.2515H50.0425C48.1434 60.254 46.2592 59.93 44.4795 59.2948L39.7549 57.6111V44.5242C41.7778 43.8864 46.1297 42.2792 47.3675 39.7154C48.2911 37.4898 48.6205 35.0784 48.3257 32.7C48.3257 32.0495 48.2591 31.4245 48.2325 30.7739C48.6663 30.6053 49.1374 30.5437 49.6024 30.595C50.0675 30.6463 50.5117 30.8087 50.8942 31.0673C53.6491 32.4576 54.594 36.0419 53.4229 40.6338C53.3749 40.823 53.3727 41.0202 53.4165 41.2104C53.4603 41.4005 53.549 41.5785 53.6757 41.7307C53.7997 41.8811 53.9574 42.0027 54.1371 42.0866C54.3168 42.1705 54.5139 42.2146 54.7138 42.2154H60.9422C61.5158 42.2103 62.0838 42.3236 62.6075 42.5478C63.1313 42.7719 63.5985 43.1016 63.9774 43.5143C64.3562 43.927 64.6379 44.4132 64.8031 44.9396C64.9683 45.466 65.0132 46.0204 64.9348 46.565H64.8816Z" fill="#666C7D" />
          </svg>
          <p>质量与原创性</p>
        </div>
      </div>
      <!-- #6 -->
      <div class="faq-nav-item">
        <div class="faq-nav-item__container">
          <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="96" height="96" fill="white" />
            <path d="M56.4002 63.5999C56.0819 63.5999 55.7767 63.7264 55.5517 63.9514C55.3266 64.1765 55.2002 64.4817 55.2002 64.7999V74.3999H26.4002V69.5999H27.6002C27.9185 69.5999 28.2237 69.4735 28.4487 69.2485C28.6738 69.0234 28.8002 68.7182 28.8002 68.3999C28.8002 68.0817 28.6738 67.7765 28.4487 67.5514C28.2237 67.3264 27.9185 67.1999 27.6002 67.1999H26.4002V60H27.6002C27.9185 60 28.2237 59.8735 28.4487 59.6485C28.6738 59.4234 28.8002 59.1182 28.8002 58.7999C28.8002 58.4817 28.6738 58.1765 28.4487 57.9514C28.2237 57.7264 27.9185 57.5999 27.6002 57.5999H26.4002V50.4H27.6002C27.9185 50.4 28.2237 50.2735 28.4487 50.0485C28.6738 49.8234 28.8002 49.5182 28.8002 49.1999C28.8002 48.8817 28.6738 48.5765 28.4487 48.3514C28.2237 48.1264 27.9185 48 27.6002 48H26.4002V40.8H27.6002C27.9185 40.8 28.2237 40.6735 28.4487 40.4485C28.6738 40.2234 28.8002 39.9182 28.8002 39.6C28.8002 39.2817 28.6738 38.9765 28.4487 38.7514C28.2237 38.5264 27.9185 38.4 27.6002 38.4H26.4002V33.6H55.2002V43.2C55.2002 43.5182 55.3266 43.8234 55.5517 44.0485C55.7767 44.2735 56.0819 44.4 56.4002 44.4C56.7185 44.4 57.0237 44.2735 57.2487 44.0485C57.4738 43.8234 57.6002 43.5182 57.6002 43.2V32.4C57.6002 32.0817 57.4738 31.7765 57.2487 31.5514C57.0237 31.3264 56.7185 31.2 56.4002 31.2H25.2002C24.8819 31.2 24.5767 31.3264 24.3517 31.5514C24.1266 31.7765 24.0002 32.0817 24.0002 32.4V38.4H20.4002C20.0819 38.4 19.7767 38.5264 19.5517 38.7514C19.3266 38.9765 19.2002 39.2817 19.2002 39.6C19.2002 39.9182 19.3266 40.2234 19.5517 40.4485C19.7767 40.6735 20.0819 40.8 20.4002 40.8H24.0002V48H20.4002C20.0819 48 19.7767 48.1264 19.5517 48.3514C19.3266 48.5765 19.2002 48.8817 19.2002 49.1999C19.2002 49.5182 19.3266 49.8234 19.5517 50.0485C19.7767 50.2735 20.0819 50.4 20.4002 50.4H24.0002V57.5999H20.4002C20.0819 57.5999 19.7767 57.7264 19.5517 57.9514C19.3266 58.1765 19.2002 58.4817 19.2002 58.7999C19.2002 59.1182 19.3266 59.4234 19.5517 59.6485C19.7767 59.8735 20.0819 60 20.4002 60H24.0002V67.1999H20.4002C20.0819 67.1999 19.7767 67.3264 19.5517 67.5514C19.3266 67.7765 19.2002 68.0817 19.2002 68.3999C19.2002 68.7182 19.3266 69.0234 19.5517 69.2485C19.7767 69.4735 20.0819 69.5999 20.4002 69.5999H24.0002V75.5999C24.0002 75.9182 24.1266 76.2234 24.3517 76.4485C24.5767 76.6735 24.8819 76.7999 25.2002 76.7999H56.4002C56.7185 76.7999 57.0237 76.6735 57.2487 76.4485C57.4738 76.2234 57.6002 75.9182 57.6002 75.5999V64.7999C57.6002 64.4817 57.4738 64.1765 57.2487 63.9514C57.0237 63.7264 56.7185 63.5999 56.4002 63.5999Z" fill="#666C7D" />
            <path d="M71.5374 33.5641L71.4714 33.5161C71.4294 33.5161 71.3874 33.4501 71.3454 33.4261C71.2832 33.3869 71.2168 33.3547 71.1474 33.3301C71.0046 33.2815 70.8542 33.2591 70.7034 33.2641H70.6374H70.4514L70.3794 33.2941C70.3276 33.3067 70.2773 33.3248 70.2294 33.3481L70.1574 33.3901L70.0314 33.4681C69.9647 33.5118 69.9041 33.5643 69.8514 33.6241L47.2914 58.5601V58.6021L47.2314 58.6861C47.1958 58.7325 47.1656 58.7829 47.1414 58.8361C47.1336 58.8534 47.1235 58.8695 47.1114 58.8841L44.0334 65.8321C43.9332 66.0622 43.9076 66.318 43.9604 66.5634C44.0131 66.8088 44.1415 67.0315 44.3274 67.2001C44.5139 67.3686 44.7485 67.4743 44.9983 67.5023C45.248 67.5303 45.5003 67.4792 45.7194 67.3561L52.3194 63.6301H52.3674L52.5054 63.5281L52.5774 63.4621C52.5774 63.4621 52.5774 63.4621 52.6194 63.4201L74.3634 39.4201L76.1634 41.0281L66.4914 51.6601C66.2816 51.8989 66.1752 52.2112 66.1955 52.5285C66.2157 52.8457 66.361 53.1419 66.5994 53.3521C66.8352 53.5648 67.1456 53.6754 67.4628 53.6597C67.7799 53.6439 68.0779 53.5031 68.2914 53.2681L78.7374 41.7001C78.9501 41.4644 79.0607 41.1539 79.045 40.8368C79.0292 40.5196 78.8884 40.2217 78.6534 40.0081L71.5374 33.5641ZM47.6754 63.4981L48.5994 61.3741L49.6914 62.3581L47.6754 63.4981ZM51.6534 60.8881L49.8534 59.2801L70.7994 36.1501L72.5994 37.7581L51.6534 60.8881Z" fill="#666C7D" />
            <path d="M79.2 18C79.8627 18 80.4 17.4627 80.4 16.8C80.4 16.1372 79.8627 15.6 79.2 15.6C78.5373 15.6 78 16.1372 78 16.8C78 17.4627 78.5373 18 79.2 18Z" fill="#666C7D" />
            <path d="M74.4002 18C75.0629 18 75.6002 17.4627 75.6002 16.8C75.6002 16.1372 75.0629 15.6 74.4002 15.6C73.7375 15.6 73.2002 16.1372 73.2002 16.8C73.2002 17.4627 73.7375 18 74.4002 18Z" fill="#666C7D" />
            <path d="M69.6004 18C70.2631 18 70.8004 17.4627 70.8004 16.8C70.8004 16.1372 70.2631 15.6 69.6004 15.6C68.9376 15.6 68.4004 16.1372 68.4004 16.8C68.4004 17.4627 68.9376 18 69.6004 18Z" fill="#666C7D" />
            <path d="M82.1996 9.59998H13.7996C12.6857 9.59998 11.6174 10.0425 10.8298 10.8301C10.0421 11.6178 9.59961 12.6861 9.59961 13.8V82.2C9.59961 83.3139 10.0421 84.3822 10.8298 85.1698C11.6174 85.9575 12.6857 86.4 13.7996 86.4H82.1996C83.3135 86.4 84.3818 85.9575 85.1695 85.1698C85.9571 84.3822 86.3996 83.3139 86.3996 82.2V13.8C86.3996 12.6861 85.9571 11.6178 85.1695 10.8301C84.3818 10.0425 83.3135 9.59998 82.1996 9.59998ZM13.7996 12H82.1996C82.677 12 83.1348 12.1896 83.4724 12.5272C83.81 12.8647 83.9996 13.3226 83.9996 13.8V21.6H11.9996V13.8C11.9996 13.3226 12.1893 12.8647 12.5268 12.5272C12.8644 12.1896 13.3222 12 13.7996 12ZM82.1996 84H13.7996C13.3222 84 12.8644 83.8103 12.5268 83.4728C12.1893 83.1352 11.9996 82.6774 11.9996 82.2V24H83.9996V82.2C83.9996 82.6774 83.81 83.1352 83.4724 83.4728C83.1348 83.8103 82.677 84 82.1996 84Z" fill="#666C7D" />
          </svg>
          <p>网课代写常见问题</p>
        </div>
      </div>
    </div>
  </nav>

  <section class="faq-items content-section">
    <div class="faq-items__wrapper">
      <div class="faq-item">
        <h3>个人信息匿名保密吗? 不会泄露吧?</h3>
        <div class="faq-item__body">
          <p>Edu Expert Care为了保护客户的个人信息和论文安全, 所有资料全部通过银行级SSL数据加密, 做到完全匿名保密! 我们和所有工作人员签订了保密协议, 绝不容许泄露客户隐私</p>
        </div>
      </div>
    </div>
  </section>

  <section class="cta content-section">
    <h2 class="section-title">还犹豫是否下单？</h2>
    <div class="cta__wrapper">
      <!-- #1 -->
      <div class="cta-item">
        <div class="cta-item__item">
          <img src="../img/cta1.svg" alt="cta1">
        </div>
        <h3>免费下单<br>给专家要求</h3>
        <a class="cta-item__button" href="../checkout/?form=order-details">
          <img src="../img/arrow-right.svg" alt="arrow right">
        </a>
      </div>
      <!-- #2 -->
      <div class="cta-item">
        <div class="cta-item__item">
          <img src="../img/cta2.svg" alt="cta2">
        </div>
        <h3>有什么不清楚的<br>请联系客服</h3>
        <a class="cta-item__button" href="../checkout/?form=order-details">
          <img src="../img/arrow-right.svg" alt="arrow right">
        </a>
      </div>
      <!-- #3 -->
      <div class="cta-item">
        <div class="cta-item__item">
          <img src="../img/cta3.svg" alt="cta2">
        </div>
        <h3>查看有关专业写手的<br>更多信息</h3>
        <a class="cta-item__button" href="../checkout/?form=order-details">
          <img src="../img/arrow-right.svg" alt="arrow right">
        </a>
      </div>
    </div>
  </section>

  <section class="cta cta--second content-section">
    <h2 class="section-title">还犹豫是否下单？</h2>

    <div class="cta__wrapper">
      <!-- #1 -->
      <div class="cta-item">
        <h3>?</h3>
        <h4>如果你</h4>
        <p>想联系专家交付前</p>
      </div>
      <!-- #2 -->
      <div class="cta-item">
        <h3>?</h3>
        <h4>如果你</h4>
        <p>不知道有没有写手<br>
          能接你复杂的订单</p>
      </div>
      <!-- #3 -->
      <div class="cta-item">
        <h3>?</h3>
        <h4>如果你</h4>
        <p>有特色要求让你犹豫我们是<br>
          否能完成你的作业</p>
      </div>
    </div>

    <a class="cta-item__button" href="../checkout/?form=order-details">确定付款</a>
  </section>







  <?php
  include("../components/footer.php")
  ?>


  <script src="faq.js"></script>

</body>

</html>