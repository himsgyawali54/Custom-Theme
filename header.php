<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="canonical" href="https://www.seostairs.com" />
    <title>SEO Company | Best SEO Marketing Agency | SEO Stairs</title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/seostairs-favicon.webp" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/index.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/other-pages.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/single-blog-post.css" rel="stylesheet" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="header" class="sticky-top">
      
        <div class="container d-flex justify-content-between">
          <?php
            $logoimg= get_header_image();
          ?>
          <a class="navbar-brand" href="<?php echo site_url() ?>">
            <img src="<?php echo $logoimg;?>" alt=""></a>
          <?php wp_nav_menu(array('theme_location' => 'primary-menu','menu_class' => 'navs-class')) 
          
          ?>
      
         
        </div>
      
    </header>