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

</head>
<body <?php body_class(); ?>>
    
<main>
    <div class="page__header">
        header
    </div>
    <div class="page__content">