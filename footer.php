<?php
// Footer Template
?>
<!-- Footer Section -->
<section class="footer ">
    <div class="container footer-content ">
        <div class="row text-center">
            <div class="footer-logo col-lg-4 col-md-4 col-sm-12">
                <img src="<?php echo get_template_directory_uri(). "/images/logo-black.png" ?>" alt="">
            </div>
            <div class="cbag-footer-tc col-lg-4 col-md-4 col-sm-12"><a class="footer-terms " href="<?php echo home_url('/terms-conditions') ?>"> Terms & Conditions </a></div>
            <div class="footer-social col-lg-4 col-md-4 col-sm-12">
                <a href=""> <i class="fab fa-linkedin-in"></i></a> 
                <a href=""> <i class="fab fa-instagram"></i></a>
                <a href=""> <i class="fab fa-facebook-f"></i></a>
                <a href=""> <i class="fab fa-twitter"></i></a>
                <a href=""> <i class="fab fa-youtube"></i></a>
            </div>
        </div>

    </div>
</section>

<!-- End of Footer Section -->


<?php wp_footer(); ?>
</body>
</html>