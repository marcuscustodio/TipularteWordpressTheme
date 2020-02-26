<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css"> 
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
  
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    

    <header>
      <div class="container">
		<div class="content-header">
            <div class="logo">
              <img src="<?php bloginfo('template_url');?>/img/tripularte.png" alt="">
            </div>

              
              <div class="nav">
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle"/>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
              </div>
            </div>

      </div>
    </header>