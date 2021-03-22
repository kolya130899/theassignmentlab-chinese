<form class="order-form order-form--details">
  <!-- FORM BODY -->
  <h3 class="order-form__title">请填写订单详情</h3>
  <h4 class="order-form__subtitle order-form__subtitle--grey">有任何问题，请随时联系客服。</h4>

  <!-- TYPE OF SERVICE -->
  <div class="select-wrapper">
    <p class="label">服务类型</p>
    <div class="select" data-name="service-type">
      <span class="select__value default">选择</span>
    </div>
    <div class="options"></div>
  </div>

  <!-- SUBJECT -->
  <div class="select-wrapper">
    <p class="label">学科</p>
    <div class="select" data-name="subject">
      <span class="select__value default">选择</span>
    </div>
    <div class="options"></div>
  </div>

  <!-- ACADEMIC LEVEL -->
  <div class="select-wrapper">
    <p class="label">学习等级</p>
    <div class="select" data-name="academic-level">
      <span class="select__value default">选择</span>
    </div>
    <div class="options"></div>
  </div>

  <!-- TIMEZONE -->
  <div class="select-wrapper">
    <p class="label">本地时区</p>
    <div class="select" data-name="timezone">
      <span class="select__value default">选择</span>
    </div>
    <div class="options"></div>
  </div>

  <div class="order-form__group">
    <!-- DEADLINE -->
    <div class="select-wrapper">
      <p class="label">本地时区</p>
      <input id="datetimepicker" type="text" placeholder="..." name="deadline" autocomplete="off">
    </div>

    <!-- NUMBER OF PAGES -->
    <div class="select-wrapper">
      <p class="label">字数 </p>
      <div class="select" data-name="pages-quantity">
        <span class="select__value default">页等于300字</span>
      </div>
      <div class="options"></div>
    </div>

    <!-- SITATIONS -->
    <div class="select-wrapper">
      <p class="label">引用格式 </p>
      <div class="select" data-name="sitations">
        <span class="select__value default">选择</span>
      </div>
      <div class="options"></div>
    </div>

    <!-- WORDS QUANTITY -->
    <div class="select-wrapper">
      <p class="label">字数</p>
      <div class="select" data-name="words-quantity">
        <span class="select__value default">页等于300字</span>
      </div>
      <div class="options"></div>
    </div>

  </div>

  <!-- TYPE OF DOCUMENT -->
  <div class="select-wrapper">
    <p class="label">写作类型</p>
    <div class="select" data-name="document-type">
      <span class="select__value default">选择</span>
    </div>
    <div class="options"></div>
  </div>

  <!-- DESCRIPTION -->
  <div class="select-wrapper">
    <p class="label">订单要求</p>
    <textarea name="description" id="description" cols="20" rows="4" placeholder="请告诉你作业的要求，写手应该注意的特点，要不需要draft"></textarea>
  </div>


  <h4 class="order-form__subtitle">附加文件</h4>
  <p class="order-form__description">(单子可以上软几个文件（word，图片，ppt，pdf，ZIP等等</p>

  <div class="file-drop">
    <!-- REQUIRMENTS -->
    <div class="file-drop__zone">
      <h4 class="order-form__subtitle">论文要求<br>评分标准</h4>
      <p class="order-form__description">Drag&drop<br>your file here</p>
      <div class="order-form__file">
        <img src="../../img/drop-file.svg" alt="">
      </div>
      <input type="file" name="requirements" id="requirements" class="upload-file-input">
      <label for="requirements" class="upload-file-button">上传文件</label>
    </div>
    <!-- SOURCES -->
    <div class="file-drop__zone">
      <h4 class="order-form__subtitle"><span>订单必读的材料</span></h4>
      <p class="order-form__description">Drag&drop<br>your file here</p>
      <div class="order-form__file">
        <img src="../../img/drop-file.svg" alt="">
      </div>
      <input type="file" name="sources" id="sources" class="upload-file-input">
      <label for="sources" class="upload-file-button">上传文件</label>
    </div>
    <!-- ADDITIONAL -->
    <div class="file-drop__zone">
      <h4 class="order-form__subtitle"><span>其他参考材料</span></h4>
      <p class="order-form__description">Drag&drop<br>your file here</p>
      <div class="order-form__file">
        <img src="../../img/drop-file.svg" alt="">
      </div>
      <input type="file" name="additional" id="additional" class="upload-file-input">
      <label for="additional" class="upload-file-button">上传文件</label>
    </div>
  </div>

  <!-- PROMOCODE -->
  <div class="select-wrapper select-wrapper--promocode">
    <input type="text" name="promocode" placeholder="我有优惠码">
    <p class="apply-promocode">Apply</p>
  </div>

  <div class="checkbox">
    <input type="checkbox" name="agreement" id="agreement">
    <label for="agreement"><span></span>点击此处同意EduExpertCare用户条款及隐私协议 </label>
  </div>

  <button type="submit" class="page-btn page-btn--order">确认订单详情</button>

  <!-- end FORM BODY -->



  <!-- INPUTS -->
  <input type="hidden" name="service-type" value="">
  <input type="hidden" name="subject" value="">
  <input type="hidden" name="academic-level" value="">
  <input type="hidden" name="timezone" value="">
  <!-- DEADLINE input#deadline -->
  <input type="hidden" name="pages-quantity" value="">
  <input type="hidden" name="sitations" value="">
  <input type="hidden" name="words-quantity" value="">
  <input type="hidden" name="document-type" value="">
  <!-- DESCRIPTION textarea#description -->
  <!-- FILES INPUTS -->
</form>