<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head(); ?><script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-103177951-1', 'auto');  ga('send', 'pageview');</script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <a class="navbar-brand" href="<?php bloginfo('url')?>">
            <img class="logo-brand" src="http://cloudvape.com.ua/wp-content/themes/cloudvape/images/logo.png" alt="logo">
          </a>
          <div class="header-social-list">
            <ul>
              <a class="facebook" href="https://www.facebook.com/uacloud/" target="_blank"><li><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></li></a>
              <a class="instagram" href="https://www.instagram.com/cloudvape_ua/" target="_blank"><li><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></li></a>
              <a href="tel:+380504588278"><li><i class="fa fa-phone fa-lg" aria-hidden="true"></i></li></a>
              <a class="green-text" href="tel:+380504588278"><li>(073) 808 80 00</li></a>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <?php wp_nav_menu( array(
            'menu' => 'right_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav navbar-right',
            'walker' => new wp_bootstrap_navwalker())
          );?>
          </div>
        </div>
      </nav>
    </header>
    <div class="container-fluid content">