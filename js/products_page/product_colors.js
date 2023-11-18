var parentDiv = document.querySelector(".products-variants");
var colors = document.querySelectorAll(".products_details__top .products-variants--slot");
for (var i = 0; i < colors.length; i++) {
    colors[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}