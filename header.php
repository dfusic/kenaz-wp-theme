<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  <title><?php echo get_bloginfo('name');?></title>
  <?php wp_head();?>
</head>

<body>
  <!-- top nav -->
  <nav class="top-nav">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <a href="<?php echo get_home_url();?>" class="logo-link">
            <div class="logo">
              <div class="logo-img-parent">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="Kenaz" class="logo-img">
              </div>
              <h1 class="logo-title">Kenaz</h1>
            </div>
          </a>
        </div>
        <div class="col-6">
          <div class="top-nav-menu">
            <?php 
            $topNavArgs = array(
              'theme_location'=>'top_nav'
            );
            wp_nav_menu($topNavArgs);?>
            <a href="#" class="search-top-nav">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/search-small.png" alt="Search">
            </a>
            <div class="search">
              <?php get_search_form(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- category navbar -->
  <nav class="cat-nav">
    <div class="container">
      <?php 
      $catsNavArgs = array(
        'theme_location'=>'main_nav'
      );
      wp_nav_menu($catsNavArgs);
      ?>
    </div>
  </nav>