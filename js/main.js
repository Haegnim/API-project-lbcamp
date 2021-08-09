function lineclick() {
  const btn = document.querySelector(".btn");

  btn.addEventListener("click", function () {
    btn.classList.toggle("active");
    btn.classList.toggle("not-active");
  });
}
lineclick();
