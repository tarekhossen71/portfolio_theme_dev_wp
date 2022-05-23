<?php 

    global $themeoption;
    get_header();

?>


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    
    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="<?php 
                        if( isset( $themeoption['hero_img']['url'] ) ){
                            echo $themeoption['hero_img']['url'];
                        }
                     ?>" alt="">
                    
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3"><?php 
                        if( isset( $themeoption['hero_pretext'] ) ){
                            echo $themeoption['hero_pretext'];
                        }
                     ?></h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;"><?php
                        if( isset( $themeoption['hero_name'] ) ){
                            echo $themeoption['hero_name'];
                        }
                     ?></h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none"><?php 
                     if( isset( $themeoption['hero_designation'] ) ){
                            echo $themeoption['hero_designation'];
                        }
                    ?></div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">

                        <a href="<?php
                         if( isset( $themeoption['hero_download_url'] ) ){
                            echo $themeoption['hero_download_url'];
                        } 
                     ?>" class="btn btn-outline-light mr-5"><?php 
                        if( isset( $themeoption['hero_download_button'] ) ){
                            echo $themeoption['hero_download_button'];
                        }
                        ?></a>

                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="<?php
                             if( isset( $themeoption['hero_play_url'] ) ){
                                echo $themeoption['hero_play_url'];
                                }
                            ?>" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block"><?php
                         if( isset( $themeoption['hero_play_button'] ) ){
                                echo $themeoption['hero_play_button'];
                                }
                        ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?php
                if( isset( $themeoption['about_bg_text_title'] ) ){
                        echo $themeoption['about_bg_text_title'];
                    } 
            ?></h1>
                <h1 class="position-absolute text-uppercase text-primary"><?php
                 if( isset( $themeoption['about_front_text_title'] ) ){
                        echo $themeoption['about_front_text_title'];
                    } 
             ?></h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="<?php
                     if( isset( $themeoption['about_img']['url'] ) ){
                        echo $themeoption['about_img']['url'];
                    } 
                 ?> " alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4"><?php echo $themeoption['about_title']; ?></h3>
                    <p><?php echo $themeoption['about_description']; ?></p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2">
                            <h6><?php echo $themeoption['about_name_label']; ?> <span class="text-secondary"><?php echo $themeoption['about_name_value']; ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><?php echo $themeoption['about_birthday_label']; ?> <span class="text-secondary"><?php echo $themeoption['about_birthday_value']; ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2"><h6>
                            <?php echo $themeoption['about_Degree_label']; ?> <span class="text-secondary"><?php echo $themeoption['about_Degree_value']; ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><?php echo $themeoption['about_experience_label']; ?> <span class="text-secondary"><?php echo $themeoption['about_experience_value']; ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><?php echo $themeoption['about_phone_label']; ?> <span class="text-secondary"><?php echo $themeoption['about_phone_value']; ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><?php echo $themeoption['about_email_label']; ?> <span class="text-secondary"><?php echo $themeoption['about_email_value']; ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><?php echo $themeoption['about_address_label']; ?>s: <span class="text-secondary"><?php echo $themeoption['about_address_value']; ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><?php echo $themeoption['about_freelance_label']; ?> <span class="text-secondary"><?php echo $themeoption['about_freelance_value']; ?></span></h6>
                        </div>
                    </div>
                    <a href="<?php echo $themeoption['hire_me_button_url']; ?>" class="btn btn-outline-primary mr-4"><?php echo $themeoption['hire_me_button_label']; ?></a>
                    <a href="<?php echo $themeoption['learn_more_button_url']; ?>" class="btn btn-outline-primary"><?php echo $themeoption['learn_more_button_label']; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?php echo $themeoption['edu_and_expr_bg_title'] ?></h1>
                <h1 class="position-absolute text-uppercase text-primary"><?php echo $themeoption['edu_and_expr_front_title'] ?></h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4"><?php echo $themeoption['edu_title']; ?></h3>
                    
                        <div class="border-left border-primary pt-2 pl-4 ml-2">
                            <?php 
                            $edu = new WP_Query( [
                                'post_type'     => 'education'
                            ] );

                            while( $edu-> have_posts() ): $edu->the_post();
                                $educations = get_post_meta( get_the_ID(), 'education_repeat_group', true );

                                foreach( $educations as $education ){
                                    $title = $vercity = $separator = $year = $description = '';

                                    if ( isset( $education['education_title'] ) ) {
                                        $title = esc_html($education['education_title']);
                                    }

                                    if ( isset( $education['education_vercity'] ) ) {
                                        $vercity = esc_html($education['education_vercity']);
                                    }

                                    if ( isset( $education['education_separator'] ) ) {
                                        $separator = esc_html($education['education_separator']);
                                    }

                                    if ( isset( $education['education_year'] ) ) {
                                        $year = esc_html($education['education_year']);
                                    }

                                    if ( isset( $education['education_description'] ) ) {
                                        $description = esc_html($education['education_description']);
                                    }
                                
                                ?>
                                    <div class="position-relative mb-4">
                                        <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                                        <h5 class="font-weight-bold mb-1"><?php echo $title; ?></h5>
                                        <p class="mb-2"><strong><?php echo $vercity; ?></strong> <?php echo $separator; ?> <small><?php echo $year; ?></small></p>
                                        <p><?php echo $description; ?></p>
                                    </div>
                                
                                <?php
                                }
                            endwhile;
                         ?>
                   </div> 
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4"><?php echo $themeoption['expr_title'] ?></h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <?php 
                            $expr = new WP_Query( [
                                'post_type'     => 'expericence'
                            ] );

                            while( $expr->have_posts() ): $expr->the_post();
                                $expericences = get_post_meta( get_the_ID(), 'expericence_repeat_group', true );
                                foreach( $expericences as $expericence ){
                                    $exper_title = $exper_vercity = $exper_separator = $exper_year = $exper_description = '';

                                    if( isset( $expericence['expericence_title'] ) ){
                                        $exper_title = esc_html( $expericence['expericence_title'] );
                                    }

                                    if( isset( $expericence['expericence_vercity'] ) ){
                                         $exper_vercity = esc_html( $expericence['expericence_vercity'] );
                                    }

                                    if( isset( $expericence['expericence_separator'] ) ){
                                        $exper_separator = esc_html( $expericence['expericence_separator'] );
                                    }

                                    if( isset( $expericence['expericence_year'] ) ){
                                        $exper_year = esc_html( $expericence['expericence_year'] );
                                    }

                                    if( isset( $expericence['expericence_description'] ) ){
                                        $exper_description = esc_html( $expericence['expericence_description'] ); 
                                    }
                                    ?>
                                    <div class="position-relative mb-4">
                                        <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                                        <h5 class="font-weight-bold mb-1"><?php echo $exper_title; ?></h5>
                                        <p class="mb-2"><strong><?php echo $exper_vercity; ?></strong> <?php echo $exper_separator; ?> <small><?php echo $exper_year; ?></small></p>
                                        <p><?php echo $exper_description; ?></p>
                                    </div>
                                    <?php
                                }
                            endwhile;

                         ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?php echo $themeoption['skill_bg_title']; ?></h1>
                <h1 class="position-absolute text-uppercase text-primary"><?php echo $themeoption['skill_front_title']; ?></h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <?php 
                        $skill_post_type = new WP_Query( [
                            'post_type'     => 'skill'
                        ] );

                        while( $skill_post_type->have_posts() ):$skill_post_type->the_post();
                            $skills = get_post_meta( get_the_ID(), 'skill_group_id', true );
                            foreach ($skills as $skill) {

                                $name = $percent = $bgcolor = '';

                                 if ( isset( $skill['skill_group_name'] ) ){
                                    $name = esc_html( $skill['skill_group_name'] );
                                 }

                                 if ( isset( $skill['skill_group_percent'] ) ) {
                                     $percent = esc_html( $skill['skill_group_percent'] );
                                 }

                                 if ( isset( $skill['skill_group_color'] ) ) {
                                     $bgcolor = esc_html( $skill['skill_group_color'] );
                                 }
                                 ?>
                                 <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-bold"><?php echo $name; ?></h6>
                                        <h6 class="font-weight-bold"><?php echo $percent; ?> %</h6>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar <?php echo $bgcolor; ?>" role="progressbar" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <?php
                            }
                        endwhile;
                        ?>
                </div>
                <div class="col-md-6">
                    <?php 
                        while( $skill_post_type->have_posts() ):$skill_post_type->the_post();
                            $skills = get_post_meta( get_the_ID(), 'skill_group_right_id', true );
                            foreach ($skills as $skill) {

                                $name_right = $percent_right = $bgcolor_right = '';

                                 if ( isset( $skill['skill_group_name_right'] ) ){
                                    $name_right = esc_html( $skill['skill_group_name_right'] );
                                 }

                                 if ( isset( $skill['skill_group_percent_right'] ) ) {
                                     $percent_right = esc_html( $skill['skill_group_percent_right'] );
                                 }

                                 if ( isset( $skill['skill_group_color_right'] ) ) {
                                     $bgcolor_right = esc_html( $skill['skill_group_color_right'] );
                                 }
                                 ?>
                                 <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-bold"><?php echo $name_right; ?></h6>
                                        <h6 class="font-weight-bold"><?php echo $percent_right; ?> %</h6>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar <?php echo $bgcolor_right; ?>" role="progressbar" aria-valuenow="<?php echo $percent_right; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <?php
                            }
                        endwhile;
                     ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?php echo $themeoption['service_bg_titles'] ?></h1>
                <h1 class="position-absolute text-uppercase text-primary"><?php echo $themeoption['service_front_titles'] ?></h1>
            </div>
            <div class="row pb-3">
                <?php 
                    $service_post = new WP_Query( [
                        'post_type'     => 'services',
                        'order'         => 'ASC',
                    ] );

                    while( $service_post->have_posts() ):$service_post->the_post();
                        $read_more = get_post_meta( get_the_ID(), 'service_read_more', true );
                        $font_awesome = get_post_meta( get_the_ID(), 'service_fontawesome_class', true );
                        ?>
                        <div class="col-lg-4 col-md-6 text-center mb-5">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                <i class="<?php echo $font_awesome; ?> service-icon bg-primary text-white mr-3"></i>
                                <h4 class="font-weight-bold m-0"><?php the_title(); ?></h4>
                            </div>
                            <p><?php echo wp_trim_words( get_the_content(), 22 ) ?></p>
                            <a class="border-bottom border-primary text-decoration-none" href="<?php the_permalink(); ?>"><?php echo $read_more; ?></a>
                        </div>
                    <?php endwhile; ?>
                
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?php echo $themeoption['portfolio_bg_title'] ?></h1>
                <h1 class="position-absolute text-uppercase text-primary"><?php echo $themeoption['portfolio_front_title'] ?></h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <?php 
                            $terms = get_terms( 'portflio_category' );

                            foreach( $terms as $term ){
                                ?>
                                <li class="btn btn-sm btn-outline-primary m-1" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
                                <?php
                            }
                         ?>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                
                    <?php 
                        $portfolio = new WP_Query( array(
                            'post_type'         => 'portfolio',
                            'posts_per_page'    => 6,
                        ) );

                        while ( $portfolio->have_posts() ):$portfolio->the_post();
                            $termsArray = get_the_terms( $post->ID, 'portflio_category' );
                            $termSlug = ' ';
                            foreach( $termsArray as $term ){
                                $termSlug = $term->slug . ' ';
                            } ?>
                            <div class="col-lg-4 col-md-6 mb-4 portfolio-item <?php echo $termSlug; ?>">
                                <div class="position-relative overflow-hidden mb-2">
                                    <img class="img-fluid rounded w-100" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                        <a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="portfolio">
                                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <?php
                        endwhile;
                     ?>
                    
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?php echo $themeoption['testimonial_bg_title'] ?></h1>
                <h1 class="position-absolute text-uppercase text-primary"><?php echo $themeoption['testimonial_front_title'] ?></h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <?php 
                            $testimonial = new WP_Query( [
                                'post_type'     => 'testimonial',
                            ] );

                            while( $testimonial->have_posts() ):$testimonial->the_post();
                                $testimonials =  get_post_meta( get_the_ID(), 'designation', true );
                                ?>
                                <div class="text-center">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                    <h4 class="font-weight-light mb-4"><?php echo wp_trim_words( get_the_content(), 32 ); ?></h4>
                                    
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-circle mx-auto mb-3 testimonial-img' ) ); ?>
                                    <h5 class="font-weight-bold m-0"><?php the_title(); ?></h5>
                                    <span><?php echo $testimonials; ?></span>
                                </div>
                                <?php

                            endwhile;
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5" id="blog">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?php echo $themeoption['blog_bg_title']; ?></h1>
                <h1 class="position-absolute text-uppercase text-primary"><?php echo $themeoption['blog_front_title']; ?></h1>

            </div>
            <div class="row">
                <?php 
                    $featured_post = get_posts([
                        'post_type'         => 'post',
                        'posts_per_page'    => 3,
                    ]);

                    foreach( $featured_post as $post ){
                        setup_postdata( $post );
                        $post_day =  get_post_meta( get_the_ID(), 'post_day', true );
                        $post_month =  get_post_meta( get_the_ID(), 'post_month', true );
                        $post_button =  get_post_meta( get_the_ID(), 'post_button', true );
                        ?>
                        <div class="col-lg-4 mb-5">
                            <div class="position-relative mb-4">
                                
                                <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded w-100' ) ) ?>
                                <div class="blog-date">
                                    <h4 class="font-weight-bold mb-n1"><?php echo $post_day; ?></h4>
                                    <small class="text-white text-uppercase"><?php echo $post_month; ?></small>
                                </div>
                            </div>
                            <h5 class="font-weight-medium mb-4"><?php the_title(); ?></h5>
                            <a class="btn btn-sm btn-outline-primary py-2" href="<?php the_permalink(); ?>"><?php echo $post_button; ?></a>
                        </div>
                <?php
                    }
                 ?>
                
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?php
                    if ( isset( $themeoption['contact_bg_title'] ) ) {
                        echo $themeoption['contact_bg_title'];
                    }
                 ?></h1>
                <h1 class="position-absolute text-uppercase text-primary"><?php 
                    if ( isset( $themeoption['contact_front_title'] ) ) {
                        echo $themeoption['contact_front_title'];
                    }
                 ?></h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <?php echo do_shortcode('[contact-form-7 id="93" title="contact form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


   <?php get_footer(); ?>