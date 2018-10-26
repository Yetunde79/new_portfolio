var scroll = new SmoothScroll();
var button = document.querySelector("#portfolio_btn");
var toggle = document.querySelector("#portfolio");

if (button) {
  button.addEventListener("click", function() {
    var options = { speed: 1000, easing: "easeOutCubic" };
    scroll.animateScroll(button, toggle, options);
  });
}
