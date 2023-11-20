var colors = document.querySelectorAll(".products_details__top .products-variants--slot");

for (var i = 0; i < colors.length; i++) {
    colors[i].addEventListener("click", function() {
        // Remove "active" class from all elements
        colors.forEach(function(element) {
            element.classList.remove("active");
        });

        // Add "active" class to the clicked element
        this.classList.add("active");
    });
};