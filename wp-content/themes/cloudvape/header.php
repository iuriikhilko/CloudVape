<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head(); ?><script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-103177951-1', 'auto');  ga('send', 'pageview');</script>
  </head>
  <body>
    <header style="border-bottom: 1px solid #000;">
      <div style="padding-right: 5px;">
        <ul class="nav justify-content-end cv-social">
          <li class="nav-item">
            <a class="nav-link facebook" href="https://www.facebook.com/uacloud/" target="_blank"><i class="fab fa-facebook-f fa-lg" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link instagram" href="https://www.instagram.com/cloudvape_ua/" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tel:+380504588278"><i class="fas fa-phone fa-lg" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item d-none d-sm-block">
            <a class="nav-link" href="tel:+380504588278">(073) 808 80 00</a>
          </li>
        </ul>
      </div>
      <nav class="navbar navbar-expand-md navbar-light bg-faded">
        <a class="navbar-brand" style="margin-top: -40px;" href="<?php bloginfo('url')?>">
          <img src="<?php bloginfo('url')?>/wp-content/themes/cloudvape/images/logo.png" alt="logo" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu([
          'menu'            => 'top',
          'theme_location'  => 'top',
          'container'       => 'div',
          'container_id'    => 'bs4navbar',
          'container_class' => 'collapse navbar-collapse justify-content-end cv-space-top',
          'menu_id'         => false,
          'menu_class'      => 'navbar-nav cv-menu',
          'depth'           => 2,
          'fallback_cb'     => 'bs4navwalker::fallback',
          'walker'          => new bs4navwalker()
        ]);
        ?>
      </nav>
    </header>