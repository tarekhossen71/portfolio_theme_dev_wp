<?php 
    global $themeoption;
 ?>
<!DOCTYPE html>
<html <?php language_attributes();  ?> class="no-js" >
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="<?php echo home_url(); ?> ?>" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5 text-primary">
                <?php 
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    }else{
                        echo get_bloginfo( 'name' ); 
                    }
                    
                
                 ?>
                    
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <?php 
                wp_nav_menu( [
                    'theme_location'      => 'primary-menu',
                    'menu_class'    => 'navbar-nav m-auto py-0',
                    'menu_id'       => 'primary-menu',
                    'container'     => 'ul',
                    'fallback_cb'   => 'menu_not_found'
                ] );
            ?>
            <a href="<?php if( isset( $themeoption['header_button_url'] ) ){
                    echo $themeoption['header_button_url'];
                } ?>" class="btn btn-outline-primary d-none d-lg-block">
            <?php 
                if( isset( $themeoption['header_button_name'] ) ){
                    echo $themeoption['header_button_name'];
                }
             ?></a>
        </div>
    </nav>
    <!-- Navbar End -->