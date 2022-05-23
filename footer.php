 <?php 
    global $themeoption;
  ?>
 <!-- Footer Start -->
 <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="<?php echo $themeoption['twitter_url'] ?>"><i class="<?php echo $themeoption['twitter'] ?>"></i></a>
                <a class="btn btn-light btn-social mr-2" href="<?php echo $themeoption['facebook_url'] ?>"><i class="<?php echo $themeoption['facebook'] ?>"></i></a>
                <a class="btn btn-light btn-social mr-2" href="<?php echo $themeoption['linkedin_url'] ?>"><i class="<?php echo $themeoption['linkedin'] ?>"></i></a>
                <a class="btn btn-light btn-social" href="<?php echo $themeoption['instagram_url'] ?>"><i class="<?php echo $themeoption['instagram'] ?>"></i></a>
            </div>

                <?php 
                    wp_nav_menu([
                        'location'      => 'footer-menu',
                        'menu_class'    => 'd-flex justify-content-center mb-3 footer-menu-list-style',
                        'menu_id'       => 'footer-menu',
                        'container'     => 'ul',
                        'link_after'    => '<span class="px-3 pe-0">|</span>',
                    ]);
                 ?>
            <?php echo $themeoption['copyright_text']; ?>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

   <?php wp_footer(); ?>
</body>

</html>