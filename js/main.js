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
