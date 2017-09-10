<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="DTI"/>
    <meta name="description"
          content="Variability of the industrial projects in the country such as gas and petroleum projects, steel industries, mines, cement industries, sugar cane, water supply and agriculture along with the trust in Damun Tejarat Iranian,">
    <meta name="keywords" content="Dti,damun,Trading,DamunTradingCo">
    <meta name="author" content="Dti">
    <title>DamunTradingCo|DTI</title>
    <link rel="stylesheet"
          href="<?php bloginfo('template_directory'); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="<?php bloginfo('template_directory'); ?>/node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet"
          href="<?php bloginfo('template_directory'); ?>/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="<?php bloginfo('template_directory'); ?>/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link href="<?php bloginfo('template_directory'); ?>/favicons.ico" rel="icon">
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--<![endif]&ndash;&gt;-->
    <?php wp_head(); ?>
</head>
<body>
<main class="container-fluid top">
    <section class="container">
        <header class="col-xs-12 col-md-12 top-th">
            <address class="pull-left">
                <a href="mailto:<?php the_field('email', 11) ?>"><i
                            style="color:#0dbff2;" class="fa fa-envelope"></i><?php the_field('email', 11) ?></a>
            </address>
            <aside class="pull-right">
                <a class="social-Hed" href="#"><i class="fa fa-facebook"></i></a>
                <a class="social-Hed" href="#"><i class="fa fa-paper-plane"></i></a>
                <a class="social-Hed" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="social-Hed" href="#"><i class="fa fa-instagram"></i></a>
                <a class="social-Hed" href="#"><i class="fa fa-linkedin"></i></a>
            </aside>
        </header>
    </section>
</main>

<header class="navbar-web menu hidden-xs hidden-sm">
    <div class="container">
        <img class="img-Nav" src="<?php bloginfo('template_directory'); ?>/app/images/Group.png">
        <section class="pull-right hidden-xs hidden-sm section section--menu" id="Shylock">
            <nav class="menu1 menu--shylock">
                <ul class="menu__list">
                    <li class="menu__item" id="aboutnav"><a class="menu__link">About us</a></li>
                    <li class="menu__item" id="customernav"><a class="menu__link">Customers</a></li>
                    <li class="menu__item" id="servicenav"><a class="menu__link">Services</a></li>
                    <li class="menu__item" id="productsnav"><a class="menu__link">Products</a></li>
                    <li class="menu__item" id="latestnav"><a class="menu__link">Latest News</a></li>
                    <li class="menu__item" id="contactnav"><a class="menu__link">Contact Us</a></li>
                </ul>
            </nav>
        </section>
    </div>
</header>
<nav class="navbar navbar2 navbar-inverse navbar-inverse2 menu2  hidden-lg hidden-md">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <img class="img-Nav img-Nav2" src="<?php bloginfo('template_directory'); ?>/app/images/Group.png">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li id="aboutnav"><a href="#">about</a></li>
                <li id="customernav"><a href="#">Customers</a></li>
                <li id="servicenav"><a href="#">Services</a></li>
                <li id="productsnav"><a href="#">Products</a></li>
                <li id="latestnav"><a href="#">Latest News</a></li>
                <li id="contactnav"><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="sliders-img">
    <?php echo do_shortcode('[layerslider id="1"]') ?>
</div>
<main id="about" class="container">
    <p class="text-center about-T"><?php the_field('about', 7) ?></p>
    <p class="text-center"><img class="code" src="<?php bloginfo('template_directory'); ?>/app/images/dti-code.jpg"
                                alt="code"></p>
    <section class="container">
        <p class="text-center text-about"><?php the_field('summery', 7) ?></p>
    </section>
</main>


<main class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-3 box">
            <div class="big"><img src="<?php the_field('right_menu', 7) ?>">
                <div class="small"><i class="fa fa-eye"></i></div>
            </div>
            <h2 class="text-center"><?php the_field('text_right_menu', 7) ?></h2>
            <p class="text-justify"><?php the_field('summery_right_menu', 7) ?></p>
        </div>
        <div class="col-xs-12 col-md-3 box">
            <div class="big"><img src="<?php the_field('image_center_menu', 7) ?>">
                <div class="small"><i class="fa fa-eye"></i></div>
            </div>
            <h2 class="text-center"><?php the_field('text_center_menu', 7) ?></h2>
            <p class="text-justify"><?php the_field('summery_center_menu', 7) ?></p>
        </div>
        <div class="col-xs-12 col-md-3 box">
            <div class="big"><img src="<?php the_field('image_left_menu', 7) ?>">
                <div class="small"><i class="fa fa-eye"></i></div>
            </div>
            <h2 class="text-center"><?php the_field('text_left_menu', 7) ?></h2>
            <p class="text-justify"><?php the_field('summery_left_menu', 7) ?></p>
        </div>
    </div>
</main>


<main id="costomers" class="container-fluid backgrund">
    <p class="text-center about-Customer"><span style="color:#FFF; font-size: 27px;">OUR</span> <span
                style="color:#363636; font-size: 27px;">customers</span>
    </p>
    <p class="text-center"><img class="imagew" src="<?php bloginfo('template_directory'); ?>/app/images/transi.png"
                                alt="code"></p>
    <div class="owl-carousel owl-theme slidercenter" id="centerslider">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <?php if (in_category('4')) : ?>
                    <div class="item">
                        <div class="costomer-Trans">
                            <h2 class="pull-left textcostomer"><?php the_title(); ?></h2>
                            <img height="200px" src="<?php the_post_thumbnail(); ?>
                            <p class=" pull-left"><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endif; // end while
            } // end if
        }
        ?>

    </div>
</main>


<main id="service" class="container-fluid">
    <p class="text-center about-T"><?php the_field('service', 9) ?></p>
    <p class="text-center"><img class="code" src="<?php bloginfo('template_directory'); ?>/app/images/dti-code.jpg"
                                alt="code"></p>
    <section class="container">
        <p class="text-center text-about"><?php the_field('summery_service', 9) ?></p>
    </section>
</main>
<main class="container-fluid">
    <div class="col-md-6">
        <div class="service">
            <div class="servic-box"><i class="fa fa-cogs"></i></div>
            <h2 class="text-center"><?php the_field('top_left', 9) ?></h2>
            <p class="text-justify mCustomScrollbar content-a1"
               data-mcs-theme="minimal-dark"><?php the_field('summery_top_left', 9) ?> </p>
        </div>

    </div>
    <div class="col-md-6">
        <div class="service">
            <div class="servic-box"><i class="fa fa-cogs"></i></div>
            <h2 class="text-center"><?php the_field('top_right', 9) ?></h2>
            <p class="text-justify mCustomScrollbar content-a1"
               data-mcs-theme="minimal-dark"><?php the_field('summery_top_right', 9) ?></p>
        </div>

    </div>
</main>
<br>
<hr>
<main id="portfolio" class="container-fluid">
    <p class="text-center about-T"><?php the_field('portfolio', 104) ?></p>
    <p class="text-center"><img class="image" src="<?php bloginfo('template_directory'); ?>/app/images/dti-code.jpg"
                                alt="code"></p>
    <section class="container">
        <p class="text-center text-about"><?php the_field('text_summery', 104) ?></p>
    </section>
    <div class="col-md-12 portfolio">
        <?php
        $categories = get_categories([
            'parent' => 11,
            'hide_empty' => 0
        ]);
        foreach ($categories as $category) {
            ?>
            <li data-href="test1.html" cat_id="<?= $category->term_id ?>"
                class="btn btn-class cat"><?= $category->name ?></li>
            <?php
        }
        ?>

    </div>
    <div class="result">
        <main class="container-fluid">
            <section class="row">
                <div class="grid firest">

                </div>
            </section>
        </main>
    </div>
</main>

<main id="latest" class="container-fluid later">
    <p class="text-center about-T">Latest News</p>
    <p class="text-center"><img class="responsiv" src="<?php bloginfo('template_directory'); ?>/app/images/transi.png"
                                alt="code"></p>
    <div class="owl-carousel owl-theme sliderbottom" id="bottomslider">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <?php if (in_category('2')) : ?>
                    <div class="item">
                        <div class="col-md-4">
                            <div class="latestn">
                                <img height="230px;" src=<?php the_post_thumbnail(); ?>
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="latest">
                                <h2> <?php the_time(); ?> | <?php the_date('y/m/d'); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; // end while
            } // end if
        }
        ?>
    </div>
</main>

<main id="contact" class="container-fluid">
    <p class="text-center about-T"><?php the_field('contact', 11) ?></p>
    <p class="text-center"><img class="code" src="<?php bloginfo('template_directory'); ?>/app/images/dti-code.jpg"
                                alt="code"></p>
    <section class="container">
        <p class="text-center text-about"><?php the_field('summery_contact', 11) ?></p>
    </section>
</main>
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 form-Contact">
            <div class="col-md-12">
                <div style="direction: ltr !important;" class="form-group">
                    <?php echo do_shortcode('[contact-form-7 id="113" title="contact form"]') ?>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <h2 class="contact"><?php the_field('contact_info', 11) ?></h2>
            <p class="text-justify"><?php the_field('summery_contact_info', 11) ?></p>
            <div class="row">
                <div class="col-md-1 col-xs-2">
                    <div class="social"><i class="fa fa-map-marker"></i></div>
                </div>
                <div class="col-md-10 col-xs-6 text-Contact">
                    <span>ADRRESS</span>
                    <P><?php the_field('address', 11) ?></P>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-2">
                    <div class="social"><i class="fa fa-phone"></i></div>
                </div>
                <div class="col-md-10 col-xs-4 text-Contact">
                    <span>PHONE</span>
                    <P><?php the_field('phone', 11) ?></P>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-2">
                    <div class="social"><i style="font-size: 28px; margin-top: -4px; margin-left: 2px;"
                                           class="fa fa-mobile"></i></div>
                </div>
                <div class="col-md-10 col-xs-4 text-Contact">
                    <span>MOBILE</span>
                    <P><?php the_field('mobile', 11) ?></P>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-2">
                    <div class="social"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="col-md-10 col-xs-4 text-Contact">
                    <span>E-MAIL</span>
                    <P><a style="color: #222222"
                          href="mailto:<?php the_field('email', 11) ?>"><?php the_field('email', 11) ?></a></P>
                </div>
            </div>
        </div>
    </div>
</main>
<main class="container-fluid">
    <section class="row">
        <div id="diamond"><i class="fa fa-map-marker marker"></i></div>

        <div class="blue">
            <iframe class="map-contact"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.609959389039!2d48.51242685180933!3d36.65983287214001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDM5JzM0LjUiTiA0OMKwMzAnNDUuMiJF!5e0!3m2!1sen!2sir!4v1504785336038"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </div>
    </section>
</main>
<main class="container-fluid">
    <div class="row">
        <footer class="footer">
            <div class="col-md-12 col-xs-12">
                <p class="text-center margin-top-25"><img
                            src="<?php bloginfo('template_directory'); ?>/app/images/Group.png"></p>
            </div>
            <div style="display: flex; justify-content: center;" class="col-md-12 col-xs-12">
                <div class="social-footer"><a href="#"><i class="fa fa-instagram"></i></a></div>
                <div class="social-footer"><a href="#"><i class="fa fa-facebook"></i></a></div>
                <div class="social-footer"><a href="#"><i class="fa fa-google-plus"></i></a></div>
                <div class="social-footer"><a href="#"><i class="fa fa-paper-plane"></i></a></div>
                <div class="social-footer"><a href="#"><i class="fa fa-twitter"></i></a></div>
            </div>
            <span class="text-center font-footer">Powered By <a href="http://cotint.ir" target="_blank"><span
                            class="cotint">Co|tint</span></a> 2017</span>
        </footer>
    </div>
</main>
<div class="btn-top"><i style="color:#FFFFFF; font-size:22px; padding-top:12px; padding-left:13px;"
                        class="fa fa-chevron-up" aria-hidden="true"></i></div>
<script src="<?php bloginfo('template_directory'); ?>/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/dest/js/app.js"></script>
<script>
    (function ($) {
        $(window).on("load", function () {
            $(".content-a1").mCustomScrollbar({
                axis: "yx"
            });
        });
    })(jQuery);
</script>
<script>
    $(document).ready(function (e) {
        $(".btn-top").click(function (e) {
            /*$(document).scrollTop(0);*/
            $("body,html").animate({scrollTop: 200}, 3000);
        });
    });
    $(document).scroll(function (e) {
        h = $(document).scrollTop();
        if (h > 250) {
            $(".btn-top").fadeIn();
        } else {
            $(".btn-top").fadeOut();
        }
    });

    $(document).ready(function (e) {
        $(".post").click(function () {
            var data_id = $(this).attr('data_id');
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    'data_id': data_id,
                    'action': 'f711_get_post_content' //this is the name of the AJAX method called in WordPress
                }, success: function (grid) {
                    $('.grid').html(grid);
                },
                error: function () {
                    alert("error");
                }
            });
        });
    });


    $(document).ready(function (e) {
        $(document).on("click", ".cat", function () {
            var cat_id = $(this).attr('cat_id');
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    'cat_id': cat_id,
                    'action': 'f711_get_post_content' //this is the name of the AJAX method called in WordPress
                }, success: function (grid) {
                    $('.grid').html(grid);
                },
                error: function () {
                    alert("error");
                }
            });
        });
$(".cat:first").trigger('click')
    });
    $(document).ready(function () {
        $(".portfolio li").click(function () {
            $(".portfolio li").removeClass("active");
            $(this).addClass("active");
        });
        $('.portfolio li:first-child').addClass('active').show();

//        $('.cat :first-child').click(function () {
//            var cat_id = $(this).attr('cat_id');
//        });

    });

</script>

</body>
</html>
