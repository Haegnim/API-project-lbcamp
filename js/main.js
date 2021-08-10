function lineclick() {
  const btn = document.querySelector(".btn");

  btn.addEventListener("click", function () {
    btn.classList.toggle("active");
    btn.classList.toggle("not-active");
  });
}
lineclick();

// function dropdownclick() {
//   const btn = document.querySelector(".dropdown");

//   btn.addEventListener("click", function () {
//     btn.classList.toggle("on");
//   });
// }
// dropdownclick();

$(function () {
  // search select button active
  $(".dropdown").click(function () {
    $(this).toggleClass("on");
    if ($(this).hasClass("on")) {
      $(this).find(".dropdown_menu").slideDown(300);
      $(this).find("i").attr("class", "fa fa-chevron-up");
    } else {
      $(this).find(".dropdown_menu").slideUp(300);
      $(this).find("i").attr("class", "fa fa-chevron-down");
    }
  });
});

// search position buttom box hide and show
const h_bt_sl = $(".bt_box span").outerHeight();
const h_bt_box = $(".bt_box").outerHeight();
console.log(h_bt_sl);
console.log(h_bt_box);
$(".bt_box").css("bottom", -(h_bt_box - h_bt_sl));

$(".bt_box").click(function () {
  $(this).toggleClass("on");
  if ($(this).hasClass("on")) {
    $(".bt_box i").attr("class", "fa fa-chevron-down");
    $(".bt_box").stop().animate({ bottom: 0 }, 300);
  } else {
    $(".bt_box i").attr("class", "fa fa-chevron-up");
    $(".bt_box")
      .stop()
      .animate({ bottom: -(h_bt_box - h_bt_sl) }, 300);
  }
});
