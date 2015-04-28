<?php
/**

 */
?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >
    <head> 
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 		
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('', true); ?></title>
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" rel="icon">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <!-- bxSlider Javascript file -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/jquery.bxslider/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />        
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/font-awesome-4.3.0/css/font-awesome.min.css" />

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css"/>	
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-responsive.css"/> 
        
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-transition.js" type="text/javascript"></script>

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/default.css"/>

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive-styles.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/engine.js" type="text/javascript"></script>

        <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>
        <div class="basis">
            <!-- main -->
            <div class="main">
                <!-- header -->
                <header>
                    <div class="container">
                        <a class="btn btn-navbar" id="open-close">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-------custom logo and custom test and defualt logo text-------->
                        <?php $page = get_page_by_title("Home"); ?>
                        <a class="logo" href="<?php echo get_permalink($page->ID); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Academy Smart"/></a>
                        <nav class="site-nav">
                            <?php get_search_form(); ?>
                            <div class="social-link">
                                <a href='https://vk.com/academysmart' class="vk"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vk.png" alt="vk"/></a>
                                <a href='https://www.facebook.com/pages/Academy-Smart-Ltd/167899486656056?pnref=lhc' class="facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="facebook"/></a>
                                <a href='https://www.linkedin.com/company/1629913?trk=prof-exp-company-name' class="in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/in.png" alt="in"/></a>
                            </div>
                            <div class="clear"></div>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <!------ end of logo -------->
                    <div class="main-nav">
                        <div id="sub-menu-bg"></div>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => '',
                                'container' => '',
                                'menu_class' => 'nav'
                                    )
                            );
                            ?>                                   
                        <div class="clear"></div>
                    </div>
                </header>

