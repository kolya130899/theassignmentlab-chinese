var selectOptions = [
  {
    name: "service-type",
    options: [
      "Writing&#92;论文写作",
      "Editing&Proofreading&#92; 编辑修改&校稿",
      "Exam&#92;考试",
      "Online course&#92;网课代写",
      "Assignment（编码,Excel计算,分析,数学,工科）",
    ],
  },
  {
    name: "subject",
    options: [
      {
        title: "Business",
        options: [
          "Business",
          "Business Communication",
          "Human Resource (HR) Management",
          "Leadership",
          "Logistics and Operations",
          "Management",
          "Marketing",
        ],
      },
      {
        title: "Computer programming",
        options: ["C or C++", "Java", "Matlab", "Python"],
      },
      {
        title: "Computer science",
        options: [
          "Algorithms and Data Structures",
          "Computer Graphics and Visualization",
          "Computer Networks",
          "Databases",
          "Other IT and Computer Science",
        ],
      },
      {
        title: "Economics",
        options: [
          "Accounting",
          "Banking",
          "Economics",
          "Finance",
          "International Trade",
          "Macroeconomics",
          "Microeconomics",
        ],
      },
      {
        title: "Formal sciences",
        options: ["Logic", "Math", "Statistics", "SPSS Data Analysis"],
      },
      {
        title: "Health and Life sciences",
        options: ["Biology", "Medicine", "Healthcare and Nursing"],
      },
      {
        title: "Humanities",
        options: [
          "Arts",
          "Culture",
          "English",
          "History and Anthropology",
          "Literature",
          "Media",
          "Movie Review",
          "Music",
          "Philosophy",
          "Religion (Theology)",
          "Tourism",
        ],
      },
      {
        title: "Legal studies",
        options: ["Business Law", "Law", "Public Administration"],
      },
      {
        title: "Physical sciences",
        options: [
          "Chemistry",
          "Environmental Science",
          "Geography",
          "Geology",
          "Physics",
        ],
      },
      {
        title: "Social sciences",
        options: [
          "Education",
          "Ethics",
          "Political Science",
          "Psychology",
          "Sociology",
          "Social Relations",
        ],
      },
      {
        title: "Others",
        options: [
          "Architecture",
          "Building and Construction",
          "Chemical Engineering",
          "Civil Engineering",
          "Electrical Engineering",
          "Mechanical Engineering",
          "Urban Planning",
        ],
      },
    ],
  },
  {
    name: "academic-level",
    options: ["High School", "College&#92;University", "Masters&#92;MBA"],
  },
  {
    name: "timezone",
    options: [
      "Vancouver (PDT/PST, GMT-7:00/GMT-8:00)",
      "Los-Angeles, San Francisco (PDT/PST, GMT-7:00/GMT-8:00)",
      "Denver (MDT/MST, GMT-6:00/GMT-7:00)",
      "Chicago, Dallas, Winnipeg (CDT/CST, GMT-5:00/GMT-6:00)",
      "Toronto, Montreal, Ottawa (EDT/EST, GMT-4:00/GMT-5:00)",
      "New York, Boston, Atlanta (EDT/EST, GMT-4:00/GMT-5:00)",
      "London (BST/GMT, GMT+1:00/GMT+0:00)",
      "Berlin, Paris, Warsaw (CEST/CET, GMT+2:00/GMT+1:00)",
      "Beijing, Shanghai, Hong-Kong (GMT+8:00)",
      "Perth (AWST, GMT+8:00)",
      "Adelaide (ACST/ACDT, GMT+9:30/GMT+10:30)",
      "Sydney, Melbourne (AEST/AEDT, GMT+10:00/GMT+11:00)",
      "Auckland, Wellington (NZST/NZDT, GMT+12:00/GMT+13:00)",
    ],
  },
  {
    name: "pages-quantity",
    options: [
      "1 page ~ 300 words",
      "2 page ~ 600 words",
      "3 page ~ 900 words",
      "4 page ~ 1200 words",
      "5 page ~ 1500 words",
      "6 page ~ 1800 words",
      "7 page ~ 2100 words",
      "8 page ~ 2400 words",
      "9 page ~ 2700 words",
      "10 page ~ 3000 words",
      "11 page ~ 3300 words",
      "12 page ~ 3600 words",
      "13 page ~ 3900 words",
      "14 page ~ 4200 words",
      "15 page ~ 4500 words",
      "16 page ~ 4800 words",
      "17 page ~ 5100 words",
      "18 page ~ 5400 words",
      "19 page ~ 5700 words",
      "20 page ~ 6000 words",
      "21 page ~ 6300 words",
      "22 page ~ 6600 words",
      "23 page ~ 6900 words",
      "24 page ~ 7200 words",
      "25 page ~ 7500 words",
      "26 page ~ 7800 words",
      "27 page ~ 8100 words",
      "28 page ~ 8400 words",
      "29 page ~ 8700 words",
      "30 page ~ 9000 words",
      "31 page ~ 9300 words",
      "32 page ~ 9600 words",
      "33 page ~ 9900 words",
      "34 page ~ 10200 words",
      "35 page ~ 10500 words",
      "36 page ~ 10800 words",
      "37 page ~ 11100 words",
      "38 page ~ 11400 words",
      "39 page ~ 11700 words",
      "40 page ~ 12000 words",
      "41 page ~ 12300 words",
      "42 page ~ 12600 words",
      "43 page ~ 12900 words",
      "44 page ~ 13200 words",
      "45 page ~ 13500 words",
      "46 page ~ 13800 words",
      "47 page ~ 14100 words",
      "48 page ~ 14400 words",
      "49 page ~ 14700 words",
      "50 page ~ 15000 words",
      "51 page ~ 15300 words",
      "52 page ~ 15600 words",
      "53 page ~ 15900 words",
      "54 page ~ 16200 words",
      "55 page ~ 16500 words",
      "56 page ~ 16800 words",
      "57 page ~ 17100 words",
      "58 page ~ 17400 words",
      "59 page ~ 17700 words",
      "60 page ~ 18000 words",
      "61 page ~ 18300 words",
      "62 page ~ 18600 words",
      "63 page ~ 18900 words",
      "64 page ~ 19200 words",
      "65 page ~ 19500 words",
      "66 page ~ 19800 words",
      "67 page ~ 20100 words",
      "68 page ~ 20400 words",
      "69 page ~ 20700 words",
      "70 page ~ 21000 words",
      "71 page ~ 21300 words",
      "72 page ~ 21600 words",
      "73 page ~ 21900 words",
      "74 page ~ 22200 words",
      "75 page ~ 22500 words",
      "76 page ~ 22800 words",
      "77 page ~ 23100 words",
      "78 page ~ 23400 words",
      "79 page ~ 23700 words",
      "80 page ~ 24000 words",
      "81 page ~ 24300 words",
      "82 page ~ 24600 words",
      "83 page ~ 24900 words",
      "84 page ~ 25200 words",
      "85 page ~ 25500 words",
      "86 page ~ 25800 words",
      "87 page ~ 26100 words",
      "88 page ~ 26400 words",
      "89 page ~ 26700 words",
      "90 page ~ 27000 words",
      "91 page ~ 27300 words",
      "92 page ~ 27600 words",
      "93 page ~ 27900 words",
      "94 page ~ 28200 words",
      "95 page ~ 28500 words",
      "96 page ~ 28800 words",
      "97 page ~ 29100 words",
      "98 page ~ 29400 words",
      "99 page ~ 29700 words",
      "100 page ~ 30000 words",
    ],
  },
  {
    name: "sitations",
    options: ["APA", "Chicago", "MLA", "Harvard", "Turabian", "Oxford"],
  },
  {
    name: "words-quantity",
    options: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10+"],
  },
  {
    name: "document-type",
    options: [
      {
        title: "Academic Writing",
        options: [
          "Essay",
          "Annotated Bibliography",
          "Term Paper",
          "Case Study",
          "Report",
          "Speech/Presentation",
          "Thesis",
          "Review (book, movie, article, peer review)",
          "Research Summary",
          "Research Paper",
          "Coursework",
        ],
      },
      {
        title: "Admission",
        options: [
          "Admission Essay",
          "Personal Statement",
          "Application Letter",
        ],
      },
      {
        title: "Career Service",
        options: [
          "Resume / CV",
          "Personal Statement",
          "Cover Letter",
          "Business Plan",
        ],
      },
      {
        title: "Dissertation",
        options: [
          "Dissertation",
          "Dissertation proposal",
          "Dissertation introduction",
          "Dissertation analysis",
          "Dissertation discussion",
          "Dissertation result",
        ],
      },
    ],
  },
];

function addOptionsToCustomSelects() {
  selectOptions.forEach(function (item) {
    var name = item.name;

    if (typeof item.options[0] === "string") {
      item.options.forEach(function (item) {
        var optionElement =
          "<p class='options__item' data-value='" +
          item +
          "'>" +
          item +
          " </p>";

        $(".select[data-name=" + name + "]")
          .next(".options")
          .append(optionElement);
      });
    } else {
      item.options.forEach(function (item) {
        var optionTitle =
          "<div class='options__title'><span>" + item.title + "</span></div>";
        $(".select[data-name=" + name + "]")
          .next(".options")
          .append(optionTitle);

        item.options.forEach(function (item) {
          var optionElement =
            "<p class='options__item' data-value='" +
            item +
            "'>" +
            item +
            " </p>";

          $(".select[data-name=" + name + "]")
            .next(".options")
            .append(optionElement);
        });
      });
    }
  });
}

// HANDLE FILE DRAG AND FROP
function handleFileDragLeave() {
  $(".file-drop__zone").on("dragleave", function (e) {
    e.preventDefault();
    $(e.target).removeClass("active");
  });
}
function handleFileDragOver() {
  $(".file-drop__zone").on("dragover", function (e) {
    e.preventDefault();
    if (
      $(e.target).hasClass("file-drop__zone") ||
      $(e.target).closest("file-drop__zone")
    ) {
      $(e.target).addClass("active");
    }
  });
}
function handleFileDrop() {
  $(".file-drop__zone").on("drop", function (e) {
    e.preventDefault();
    $(this).addClass("full");
    var droppedFile = e.originalEvent.dataTransfer.files;
    $(this).find("input")[0].files = droppedFile;
    $(this).find(".order-form__file").text(droppedFile[0].name);
  });
}
function handleFileInputChange() {
  $(".upload-file-input").on("change", function () {
    $(this).closest(".file-drop__zone").addClass("full");
    $(this).prev(".order-form__file").text($(this)[0].files[0].name);
  });
}

// end HANDLE FILE DRAG AND FROP

// SUBMIT ORDER FORM
function submitOrderForm() {
  $(".order-form--details").on("submit", function (e) {
    e.preventDefault();
    var data = $(this).serializeArray();
    console.log(data);
    window.location.href = "?form=auth";
  });
}

// SUBMIT AUTHENTIFICATION FORM
function submitAuthForm() {
  $(".order-form--auth").on("submit", function (e) {
    e.preventDefault();
    var data = $(this).serializeArray();
    console.log(data);
    window.location.href = "?form=payment";
  });
}

// PUT DEADLINE TO ORDER SUMMARY
function putDeadlineToSummary() {
  $("#datetimepicker").on("change", function () {
    $(".js-deadline").text($(this).val());
  });
}

$(document).ready(function () {
  addOptionsToCustomSelects();
  handleFileDrop();
  handleFileDragOver();
  handleFileDragLeave();
  handleFileInputChange();
  submitOrderForm();
  submitAuthForm();
  putDeadlineToSummary();
});
