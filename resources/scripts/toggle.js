$(document).ready(function () {
  $("#sidebarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
    $(".fa-bars").toggleClass("fa-times");
  });
});
