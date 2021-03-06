

    <!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300i,400,400i,500i,700,700i&amp;subset=latin-ext" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- main wrapper -->
    <div class="container_fluid wrapper">
      <div class="row">
        <div class="header-wrapper">
          <div class="col-md-12 header-cover">
            <div class="top-logo-holder">
              <a class="home-link" href="<?php echo get_home_url(); ?>"><img src="http://webdesignstudio.website/weihnachtsessen/wp-content/uploads/2018/02/header.png" alt="logo"></a>
            </div>
            <a class="home-link" href="<?php echo get_home_url(); ?>"><h1 class="logo-text"><?php bloginfo('name'); ?></h1></a>

            <div class="main-nav">
              <nav>

                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </nav>

            </div>
          </div><!-- /header-cover -->
        </div><!-- /header-wrapper -->
