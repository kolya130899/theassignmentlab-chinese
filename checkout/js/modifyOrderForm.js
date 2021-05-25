// modifying order form on service type change
function modifyOrderForm() {
  $(".service-type-dropdown").on("click", function (e) {
    var target = $(e.target);

    if (target.hasClass("dropdown__option")) {
      var serviceType = target.text().split(" ")[0];

      console.log(serviceType);

      var inputsContainer = $(".js-specified-inputs");

      if (serviceType === "Editing&Proofreading" || serviceType === "Writing") {
        inputsContainer.html(
          '<div class="select"><p class="select__label">字数</p><div class="select__input" data-name="pages-quantity"> <span class="select__value default">页等于300字</span></div><div class="dropdown select__dropdown"></div></div><div class="select"><p class="select__label">引用格式</p><div class="select__input" data-name="sitations"> <span class="select__value default">选择</span></div><div class="dropdown select__dropdown"></div></div><div class="select"><p class="select__label">字数</p><div class="select__input" data-name="words-quantity"> <span class="select__value default">页等于300字</span></div><div class="dropdown select__dropdown"></div></div><div class="select"><p class="select__label">写作类型</p><div class="select__input" data-name="document-type"> <span class="select__value default">选择</span></div><div class="dropdown select__dropdown"></div></div><input type="hidden" name="pages-quantity" value=""> <input type="hidden" name="sitations" value=""> <input type="hidden" name="words-quantity" value=""> <input type="hidden" name="document-type" value="">'
        );
      } else if (serviceType === "Exam") {
        inputsContainer.html(
          '<div class="select"><p class="select__label">考试时长时间</p><div class="select__input" data-name="exam-duration"> <span class="select__value default">选择</span></div><div class="dropdown select__dropdown"></div></div><div class="select"><p class="select__label">考试类型</p><div class="select__input" data-name="exam-type"> <span class="select__value default">选择</span></div><div class="dropdown select__dropdown"></div></div><div class="select"><p class="select__label">考试类型</p><div class="select__input" data-name="exam-scope"> <span class="select__value default">选择</span></div><div class="dropdown select__dropdown"></div></div><div class="select"><p class="select__label">题型</p><div class="select__input" data-name="question-type"> <span class="select__value default">选择</span></div><div class="dropdown select__dropdown"></div></div><input type="hidden" name="exam-duration" value=""> <input type="hidden" name="exam-type" value=""> <input type="hidden" name="exam-scope" value=""> <input type="hidden" name="question-type" value="">'
        );
      } else if (serviceType === "Online") {
        inputsContainer.html(
          '<div class="select"><p class="select__label">网课长度（几周)</p><div class="select__input" data-name="course-duration"> <span class="select__value default">选择</span></div><div class="dropdown select__dropdown"></div></div><div class="select"><p class="select__label">课程名称</p> <input type="text" name="course-name"></div><input type="hidden" name="course-duration" value="">'
        );
      } else {
        inputsContainer.html(
          '<div class="select" style="max-width:none"><p class="select__label">课程名称</p> <input type="text" name="assignment-name"></div>'
        );
      }

      console.log("2 ", serviceType === "Exam");
    }
  });
}

$(document).ready(function () {
  modifyOrderForm();
});
