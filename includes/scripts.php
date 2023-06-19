<?php
    echo '
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/scrollIt.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/jquery.slicknav.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/gijgo.min.js"></script>

        <!--contact js-->
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/js/jquery.form.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
            function toast(body, color){
                $(".toast").fadeIn("slow", function(){
                    $(this)[0].classList.remove("bg-primary")
                    $(this)[0].classList.remove("bg-danger")
                    $(this)[0].classList.remove("bg-success")
                    $(this)[0].classList.remove("bg-warning")
                    $(this)[0].classList.add(color)
                    $(this)[0].classList.remove("hide")
                    $(this).children()[0].children[0].textContent = body
                })
            }
        </script>
    ';
?>