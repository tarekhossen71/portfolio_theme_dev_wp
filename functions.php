<?php
    
    // theme panel 
    require_once dirname( __FILE__ ). '/inc/themepanel/redux-core/framework.php';
    require_once dirname( __FILE__ ). '/inc/themepanel/sample/themepanel.php';

    //custom field
    require_once dirname( __FILE__ ). '/inc/cmb2/init.php';
    require_once dirname( __FILE__ ). '/inc/cmb2/custom.php';

    // Shortcode 
    include __DIR__ . '/shortcode.php';

    function portfolio_theme_setup(){
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', [ 'aside','audio', 'video', 'image', 'gallery', 'quote', 'link', 'status', 'chat' ] );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'widgets' );
        add_theme_support( 'menus' );
        add_image_size( 'testimonial', 80, 80, true );

    





        add_filter( 'nav_menu_link_attributes', function($atts) {
            $atts['class'] = "nav-item nav-link";
            return $atts;
    }, 100, 1 );
    
    }
    add_action( 'after_setup_theme', 'portfolio_theme_setup' );

    function register_my_menus() {
        register_nav_menus(
            array(
              'primary-menu' => __( 'primary menu' ),
              'footer-menu' => __( 'footer menu' )
                )
            );
        }
     add_action( 'init', 'register_my_menus' );

     function footer_menu_not_found(){
        echo 'sorry! menu items not found';
     }

    function portfolio_assets(){
        wp_enqueue_style( 'fonts-gstatic', '//fonts.gstatic.com' );
        wp_enqueue_style( 'fonts-googleapis', '//fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap' );
        wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' );
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css' );
        wp_enqueue_style( 'lightbox', get_template_directory_uri().'/lib/lightbox/css/lightbox.min.css' );
        wp_enqueue_style( 'theme-style', get_template_directory_uri().'/css/style.css' );
        wp_enqueue_style( 'main-style', get_stylesheet_uri() );


        wp_enqueue_script( 'jquery-min', '//code.jquery.com/jquery-3.4.1.min.js', [ 'json' ], '1.0.0', true );
        wp_enqueue_script( 'bootstrap-bundle', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',[ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'typed', get_template_directory_uri().'/lib/typed/typed.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'easing', get_template_directory_uri().'/lib/easing/easing.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'waypoints', get_template_directory_uri().'/lib/waypoints/waypoints.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/lib/owlcarousel/owl.carousel.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'isotope', get_template_directory_uri().'/lib/isotope/isotope.pkgd.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'lightbox', get_template_directory_uri().'/lib/lightbox/js/lightbox.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri().'/mail/jqBootstrapValidation.min.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'contact', get_template_directory_uri().'/mail/contact.js', [ 'jquery' ], '1.0.0', true );
        wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', null, '1.0.0', true );

        wp_enqueue_script('google-recaptcha', '//www.google.com/recaptcha/api.js');
    }
    add_action( 'wp_enqueue_scripts', 'portfolio_assets' );

    function menu_not_found(){
        echo "Sorry, Menu not found !";
    }


    function portfolio_education(){
        register_post_type('education',array(
            'labels'            => array(
                'name'                  => __( 'Educations', 'portfolio' ),
                'singular_name'         => __( 'Education', 'portfolio' ),
                'add_new'               => __( 'Add New Education', 'portfolio' ),
                'add_new_item'          => __( 'Add New Education', 'portfolio' ),
                'edit_item'             => __( 'Edit Education', 'portfolio' ),
                'all_items'             => __( 'All Education', 'portfolio' ),
                'new_item'              => __( 'New Education', 'portfolio' ),
                'view_item'             => __( 'View Education', 'portfolio' ),
                'search_items'          => __( 'Search Educations', 'portfolio' ),
                'not_found'             => __( 'No Educations found', 'portfolio' ),
                'not_found_in_trash'    => __( 'No Educations found in Trash', 'portfolio' ),
                'parent_item_colon'     => __( 'Parent Education:', 'portfolio' ),
                'menu_name'             => __( 'Educations', 'portfolio' ),
                'featured_image'        => __( 'Education Image' ),
                'set_featured_image'    => __( 'Set Education Image', 'portfolio' ),
                'remove_featured_image' => __( 'Remove Education Image', 'portfolio' )
            ),
            'hierarchical'        => false,
            'description'         => 'description',
            'taxonomies'          => array(),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-book',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'supports'            => array( 'title' ),
            
        ));
        
    }
    add_action( 'init', 'portfolio_education' );

    function portfolio_expericence(){
        register_post_type('expericence',array(
            'labels'            => array(
                'name'                  => __( 'Expericences', 'portfolio' ),
                'singular_name'         => __( 'Expericence', 'portfolio' ),
                'add_new'               => __( 'Add New Expericence', 'portfolio' ),
                'add_new_item'          => __( 'Add New Expericence', 'portfolio' ),
                'edit_item'             => __( 'Edit Expericence', 'portfolio' ),
                'all_items'             => __( 'All Expericence', 'portfolio' ),
                'new_item'              => __( 'New Expericence', 'portfolio' ),
                'view_item'             => __( 'View Expericence', 'portfolio' ),
                'search_items'          => __( 'Search Expericences', 'portfolio' ),
                'not_found'             => __( 'No Expericences found', 'portfolio' ),
                'not_found_in_trash'    => __( 'No Expericences found in Trash', 'portfolio' ),
                'parent_item_colon'     => __( 'Parent Expericence:', 'portfolio' ),
                'menu_name'             => __( 'Expericences', 'portfolio' ),
                'featured_image'        => __( 'Expericence Image' ),
                'set_featured_image'    => __( 'Set Expericence Image', 'portfolio' ),
                'remove_featured_image' => __( 'Remove Expericence Image', 'portfolio' )
            ),
            'hierarchical'        => false,
            'description'         => 'description',
            'taxonomies'          => array(),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-welcome-learn-more',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'supports'            => array( 'title' ),
            
        ));
        
    }
    add_action( 'init', 'portfolio_expericence' );

    function portfolio_skill(){
        register_post_type('skill',array(
            'labels'            => array(
                'name'                  => __( 'Skills', 'portfolio' ),
                'singular_name'         => __( 'Skill', 'portfolio' ),
                'add_new'               => __( 'Add New Skill', 'portfolio' ),
                'add_new_item'          => __( 'Add New Skill', 'portfolio' ),
                'edit_item'             => __( 'Edit Skill', 'portfolio' ),
                'all_items'             => __( 'All Skill', 'portfolio' ),
                'new_item'              => __( 'New Skill', 'portfolio' ),
                'view_item'             => __( 'View Skill', 'portfolio' ),
                'search_items'          => __( 'Search Skills', 'portfolio' ),
                'not_found'             => __( 'No Skills found', 'portfolio' ),
                'not_found_in_trash'    => __( 'No Skills found in Trash', 'portfolio' ),
                'parent_item_colon'     => __( 'Parent Skill:', 'portfolio' ),
                'menu_name'             => __( 'Skills', 'portfolio' ),
                'featured_image'        => __( 'Skill Image' ),
                'set_featured_image'    => __( 'Set Skill Image', 'portfolio' ),
                'remove_featured_image' => __( 'Remove Skill Image', 'portfolio' )
            ),
            'hierarchical'        => false,
            'description'         => 'description',
            'taxonomies'          => array(),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-editor-justify',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'supports'            => array( 'title' ),
            
        ));
        
    }
    add_action( 'init', 'portfolio_skill' );

    function portfolio_service(){
        register_post_type('services',array(
            'labels'            => array(
                'name'                  => __( 'Services', 'portfolio' ),
                'singular_name'         => __( 'Service', 'portfolio' ),
                'add_new'               => __( 'Add New Service', 'portfolio' ),
                'add_new_item'          => __( 'Add New Service', 'portfolio' ),
                'edit_item'             => __( 'Edit Service', 'portfolio' ),
                'all_items'             => __( 'All Service', 'portfolio' ),
                'new_item'              => __( 'New Service', 'portfolio' ),
                'view_item'             => __( 'View Service', 'portfolio' ),
                'search_items'          => __( 'Search Services', 'portfolio' ),
                'not_found'             => __( 'No Services found', 'portfolio' ),
                'not_found_in_trash'    => __( 'No Services found in Trash', 'portfolio' ),
                'parent_item_colon'     => __( 'Parent Service:', 'portfolio' ),
                'menu_name'             => __( 'Services', 'portfolio' ),
                'featured_image'        => __( 'Service Image' ),
                'set_featured_image'    => __( 'Set Service Image', 'portfolio' ),
                'remove_featured_image' => __( 'Remove Service Image', 'portfolio' )
            ),
            'hierarchical'        => false,
            'description'         => 'description',
            'taxonomies'          => array(),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => get_template_directory_uri().'/inc/icons/service.png',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'supports'            => array( 'title', 'editor' ),
            
        ));
        
    }
    add_action( 'init', 'portfolio_service' );

    function portfolio_portfolio(){
        register_post_type('portfolio',array(
            'labels'            => array(
                'name'                  => __( 'Portfolios', 'portfolio' ),
                'singular_name'         => __( 'Portfolio', 'portfolio' ),
                'add_new'               => __( 'Add New Portfolio', 'portfolio' ),
                'add_new_item'          => __( 'Add New Portfolio', 'portfolio' ),
                'edit_item'             => __( 'Edit Portfolio', 'portfolio' ),
                'all_items'             => __( 'All Portfolio', 'portfolio' ),
                'new_item'              => __( 'New Portfolio', 'portfolio' ),
                'view_item'             => __( 'View Portfolio', 'portfolio' ),
                'search_items'          => __( 'Search Portfolios', 'portfolio' ),
                'not_found'             => __( 'No Portfolios found', 'portfolio' ),
                'not_found_in_trash'    => __( 'No Portfolios found in Trash', 'portfolio' ),
                'parent_item_colon'     => __( 'Parent Portfolio:', 'portfolio' ),
                'menu_name'             => __( 'Portfolios', 'portfolio' ),
                'featured_image'        => __( 'Portfolio Image' ),
                'set_featured_image'    => __( 'Set Portfolio Image', 'portfolio' ),
                'remove_featured_image' => __( 'Remove Portfolio Image', 'portfolio' )
            ),
            'hierarchical'        => false,
            'description'         => 'description',
            'taxonomies'          => array(),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-portfolio',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'supports'            => array( 'title', 'thumbnail' ),
            
        ));
    }
    add_action( 'init', 'portfolio_portfolio' );

    function portfolio_taxonomy() {
        
            $labels = array(
                'name'                  => __( 'Portfolio Categorys', 'portfolio' ),
                'singular_name'         => __( 'Portfolio Category', 'portfolio' ),
                'search_items'          => __( 'Search Portfolio Category', 'portfolio' ),
                'popular_items'         => __( 'Popular Portfolio Category', 'portfolio' ),
                'all_items'             => __( 'All Portfolio Categorys', 'portfolio' ),
                'parent_item'           => __( 'Parent Portfolio Category', 'portfolio' ),
                'parent_item_colon'     => __( 'Parent Portfolio Category', 'portfolio' ),
                'edit_item'             => __( 'Edit Portfolio Category', 'portfolio' ),
                'update_item'           => __( 'Update Portfolio Category', 'portfolio' ),
                'add_new_item'          => __( 'Add New Portfolio Category', 'portfolio' ),
                'new_item_name'         => __( 'New Portfolio Category', 'portfolio' ),
                'add_or_remove_items'   => __( 'Add or remove Portfolio Categorys', 'portfolio' ),
                'choose_from_most_used' => __( 'Portfolio Categorys', 'portfolio' ),
                'menu_name'             => __( 'Portfolio Category', 'portfolio' ),
            );
        
            $args = array(
                'labels'            => $labels,
                'public'            => true,
                'show_in_nav_menus' => true,
                'show_admin_column' => false,
                'hierarchical'      => true,
                'show_tagcloud'     => true,
                'show_ui'           => true,
                'query_var'         => true,
                'rewrite'           => true,
                'query_var'         => true,
                'capabilities'      => array(),
            );
        
            register_taxonomy( 'portflio_category', array( 'portfolio' ), $args );
        }
        
        add_action( 'init', 'portfolio_taxonomy' );



    function portfolio_testimonial(){
        register_post_type('testimonial',array(
            'labels'            => array(
                'name'                  => __( 'Testimonials', 'portfolio' ),
                'singular_name'         => __( 'Testimonial', 'portfolio' ),
                'add_new'               => __( 'Add New Testimonial', 'portfolio' ),
                'add_new_item'          => __( 'Add New Testimonial', 'portfolio' ),
                'edit_item'             => __( 'Edit Testimonial', 'portfolio' ),
                'all_items'             => __( 'All Testimonial', 'portfolio' ),
                'new_item'              => __( 'New Testimonial', 'portfolio' ),
                'view_item'             => __( 'View Testimonial', 'portfolio' ),
                'search_items'          => __( 'Search Testimonials', 'portfolio' ),
                'not_found'             => __( 'No Testimonials found', 'portfolio' ),
                'not_found_in_trash'    => __( 'No Testimonials found in Trash', 'portfolio' ),
                'parent_item_colon'     => __( 'Parent Testimonial:', 'portfolio' ),
                'menu_name'             => __( 'Testimonials', 'portfolio' ),
                'featured_image'        => __( 'Testimonial Image' ),
                'set_featured_image'    => __( 'Set Testimonial Image', 'portfolio' ),
                'remove_featured_image' => __( 'Remove Testimonial Image', 'portfolio' )
            ),
            'hierarchical'        => false,
            'description'         => 'description',
            'taxonomies'          => array(),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-testimonial',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
            'supports'            => array( 'title', 'editor', 'thumbnail' ),
            
        ));
        
    }
    add_action( 'init', 'portfolio_testimonial' );

    
