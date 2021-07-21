<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>
  
    <?php wp_head();?>	
    <?php wp_footer(); ?>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/release/css/style.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

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
                        挽きたての珈琲の<br>
                        香りに包まれる<br>
                        とっておきの時間
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