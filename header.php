<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('title');?></title>
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="<?php echo get_site_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/release/image/og-image.png">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">
  
    <?php wp_head();?>	
    <?php wp_footer(); ?>

    <!-- APPLY TOUCH ICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/release/image/apple-touch-icon.png"/>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/release/image/favicon.ico" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/release/css/style.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script type="text/javascript">
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>

</head>
<body <?php body_class(); ?>>
    
<main>
    <div class="page__header">
        <div class="page__wrapper">
            <div class="head_cont">
                <div class="l-wrap">
                    <p class="txt_info">スシャールへ<br>ようこそ。</p>
                    <ul class="head_dot">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <h2 class="txt_head">
                        <span class="txt_head_ani1">挽きたての珈琲の</span>
                        <span class="txt_head_ani2">香りに包まれる</span>
                        <span class="txt_head_ani3">とっておきの時間</span>
                    </h2>
                    <ul class="head_dot">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="head_img_3">
                    <img src="<?php echo get_template_directory_uri();?>/release/image/header/header_img_3.png" alt="">
                </div>
                </div>
                <div class="head_img_1">
                    <img src="<?php echo get_template_directory_uri();?>/release/image/header/header_img_1.png" alt="">
                </div>
                <div class="head_img_2">
                    <img src="<?php echo get_template_directory_uri();?>/release/image/header/header_img_2.png" alt="">
                </div>
                <a class="ig" href="https://www.instagram.com/suchard0963/?hl=ja" target="_blank">
                    <img src="<?php echo get_template_directory_uri();?>/release/image/header/ig.png" alt="">
                </a>
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
                <div class="line4"></div>
            </div>
        </div>
    </div>
    <div class="page__content">