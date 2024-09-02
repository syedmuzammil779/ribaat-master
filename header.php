<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
              integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themify-icons.css">
        <!-- owl.carousel -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
        <!-- fancybox -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fancybox.css">
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.18/jquery.zoom.min.js"></script>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <?php wp_head(); ?>
    </head>
    </head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="fixed-top">
            <?php if(get_field('show_on_website', 'option') == 'Yes')  {?>
            <div class="top-header1">
                <div class="container">
                    <div class="social">
                        <p><?php echo the_field('free_sale_text', 'option'); ?></p>
                        <a id="open-pop" href="#myModal22">FALL2022</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="top-header">
                <div class="container">
                    <div class="social">
                        <p><?php echo the_field('free_shiping', 'option'); ?></p>
                    </div>
                </div>
            </div>
            <div class="top-header2">
                <div class="container">
                    <div class="main-logo">
                        <div class="logo">
                            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                                <?php  $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                                if ( has_custom_logo() ) {
                                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                } ?>
                            </a>
                        </div>
                        <div class="logo" id="mobile-log">
                            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                                <?php  $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                                if ( has_custom_logo() ) {
                                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                } ?>
                            </a>
                        </div>


                    </div>
                    <div class="cart">
                        <a href="<?php echo site_url(); ?>/my-account" id="res-ac">Account</a>
                        <!--                        <a href="<?php echo site_url(); ?>/cart">
<img src="<?php echo get_template_directory_uri(); ?>/images/icon.png">

</a> -->
                        <?php do_shortcode('[woo-minicart]'); ?>
                        <!--                        <span class='badge badge-warning' id='lblCartCount'> <?php echo WC()->cart->get_cart_contents_count(); ?></span> -->
                    </div>

                </div>
            </div>

            <div class="mian-menu">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button class="navbar-toggler hamburger" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span></span>

                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <!-- <ul class="navbar-nav">
<div class="mobile-li">
<ul>
<li><a href="support.html">Account</a></li>
</ul>
</div>
</ul> -->
                            <?php 
                            wp_nav_menu(array( 
                                'theme_location' => 'header-menu', 
                                // 'container_class' => 'navbar-nav' ,
                                'menu_class' => 'navbar-nav'
                            ));
                            ?>
                            <div class="mobile-li" id="mob-li">
                                <ul>
                                    <li><a href="support.html">Support</a></li>
                                    <li><a href="shipping-policy.html">Shipping Policy</a></li>
                                    <li><a href="refund-policy.html">Refund Policy</a></li>
                                    <li><a href="term-services.html">Terms of Service</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                            </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <?php if(is_archive() || is_product()) { ?>
    <?php } else { ?>

    <section class="home-banner" id="home-bannrr">
        <img src="<?php echo the_field('top_banner'); ?>">
    </section>
    <?php } ?>