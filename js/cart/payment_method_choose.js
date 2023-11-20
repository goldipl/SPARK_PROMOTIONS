var payment_methods = document.querySelectorAll(".payment_method_box__slots .payment_method_box__slots--slot");

for (var i = 0; i < payment_methods.length; i++) {
    payment_methods[i].addEventListener("click", function() {
        // Remove "active" class from all elements
        payment_methods.forEach(function(element) {
            element.classList.remove("active");
        });

        // Add "active" class to the clicked element
        this.classList.add("active");
    });
};