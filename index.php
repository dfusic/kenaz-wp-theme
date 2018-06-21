<?php get_header(); ?>
<div class="container">
  <section class="banner1">
    <p>Banner 1
      <br> 940x120</p>
  </section>
</div>
<!-- 3 latest posts carousel -->
<div class="container">
  <div class="header-carousel">
    <div class="swiper-wrapper">
      <?php 
        $headerCarouselArgs = array(
          'posts_per_page' => 3,
          'post_type' => array('post', 'business')
        );
        $headerCarouselQuery = new WP_Query($headerCarouselArgs);
        if( $headerCarouselQuery -> have_posts() ) : while( $headerCarouselQuery -> have_posts() ) : $headerCarouselQuery -> the_post();
          get_template_part('template-parts/carousel/carousel', 'item');
        endwhile; endif;
        wp_reset_postdata();
        wp_reset_query();
      ?>
    </div>
    <div class="header-carousel-controls">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/prev-white.png" alt="Previous" class="header-carousel-prev">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/next-white.png" alt="Next" class="header-carousel-next">
    </div>
  </div>
</div>
<!-- news feed -->
<div class="container" style="margin-top: 25px">
  <div class="row">
    <div class="col-md-8">
      <!-- news feed -->
      <section class="news">
        <div class="news-header">
          <h1 class="news-title">News</h1>
          <a href="<?php 
          $newsId = get_cat_ID('News');
          echo get_category_link($newsId);?>" class="news-see-more">See all</a>
        </div>
        <div class="row">
          <?php 
            $newsId = get_cat_ID('News');
            $newsArgs = array(
              'posts_per_page'=> 3,
              'post_type'=> array('post'),
              'cat'=> $newsId
            );
            $newsQuery = new WP_Query($newsArgs);
            if( $newsQuery -> have_posts() ) : while( $newsQuery -> have_posts() ) : $newsQuery -> the_post();
              get_template_part('template-parts/index/index', 'post');
            endwhile;endif;
            wp_reset_postdata();
            wp_reset_query();
          ?>
        </div>
      </section>
      <!-- sport section -->
      <section class="sport">
        <div class="sport-header">
          <h2 class="sport-title">Sport</h2>
          <a href="<?php 
              $sportId = get_cat_ID('Sport');
              echo get_category_link($sportId);?>" class="sport-read-more">See all</a>
        </div>
        <div class="row">
          <?php 
              $sportId = get_cat_ID('Sports');
              $sportArgs = array(
                  'cat' => $sportId,
                  'posts_per_page' => 3
              );
              $sportsQuery = new WP_Query($sportArgs);
              if( $sportsQuery -> have_posts() ) : while( $sportsQuery -> have_posts() ) : $sportsQuery -> the_post();
              get_template_part('template-parts/index/index', 'post');
              endwhile; endif;
              wp_reset_postdata();
              wp_reset_query();
              ?>
        </div>
      </section>
      <div class="banner-medium">
        <p>banner
          <br>620x120</p>
      </div>
      <!-- business -->
      <section class="business">
        <div class="business-header">
          <h1 class="business-title">Business</h1>
          <a href="<?php echo get_post_type_archive_link( 'business' );?>" class="business-read-more">See more</a>
        </div>
        <div class="row">
          <?php 
                $businessArgs = array(
                    'post_type' => array('business'),
                    'posts_per_page' => 4
                );
                $businessQuery = new WP_Query($businessArgs);
                if( $businessQuery -> have_posts() ) : while( $businessQuery -> have_posts() ) : $businessQuery -> the_post();
                get_template_part('template-parts/business-cpt/business-cpt', 'post');
                endwhile; endif;
                wp_reset_postdata();
                wp_reset_query();
                ?>
        </div>
      </section>
      <!-- banner 3 -->
      <div class="banner-medium">
        <p>banner
          <br>620x120</p>
      </div>
      <!-- content -->
      <section class="news-carousel">
        <div class="news-carousel-header">
          <h1>News Carousel</h1>
          <div class="news-carousel-controls">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/prev-orange.png" alt="Previous" class="news-carousel-prev">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/next-orange.png" alt="Next" class="news-carousel-next">
          </div>
        </div>
        <div class="news-carousel-wrapper">
          <div class="swiper-wrapper">
            <?php 
           $newsId = get_cat_ID('News');
            $newsArgs = array(
              'posts_per_page' => 4,
              'post_type' => array('post'),
              'cat' => $newsId
            );
            $newsQuery = new WP_Query($newsArgs);
            if( $newsQuery -> have_posts() ) : while( $newsQuery -> have_posts() ) : $newsQuery -> the_post();
              get_template_part('template-parts/carousel/carousel-news','item');
            endwhile;endif;
            wp_reset_postdata();
            wp_reset_query();
            ?>
          </div>
        </div>
      </section>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <section class="editorials-slider">
            <div class="editorials-slider-header">
              <h1 class="editorials-slider-title">Editorials</h1>
              <div class="editorials-slider-controls">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/prev-brown.svg" alt="Previous" class="editorials-carousel-prev">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/next-brown.svg" alt="Next" class="editorials-carousel-next">
              </div>
            </div>
            <div class="editorials-slider-wrapper">
              <div class="swiper-wrapper">
                <?php 
                $editorialsId = get_cat_ID('Editorials');
                $editorialsArgs = array(
                  'posts_per_page' => 3,
                  'cat' => $editorialsId
                );
                $editorialsQuery = new WP_Query($editorialsArgs);
                if( $editorialsQuery -> have_posts() ) : while( $editorialsQuery -> have_posts() ) : $editorialsQuery -> the_post();
                get_template_part('template-parts/carousel/carousel-news','item');
                endwhile; endif;
                wp_reset_postdata();
                wp_reset_query();
                ?>
              </div>
            </div>
          </section>
        </div>
        <div class="col-lg-6 col-md-12">
          <section class="local-news-slider">
            <div class="local-news-slider-header">
              <h1 class="local-news-title">Local News</h1>
              <div class="local-news-slider-controls">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/prev-brown.svg" alt="Previous" class="local-news-carousel-prev">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/next-brown.svg" alt="Next" class="local-news-carousel-next">
              </div>
            </div>
            <div class="local-news-slider-wrapper">
              <div class="swiper-wrapper">
                <?php 
                $localNewsId = get_cat_ID('Local News');
                $localNewsArgs = array(
                  'cat' => $localNewsId,
                  'posts_per_page' => 3,
                );
                $localNewsQuery = new WP_Query($localNewsArgs);
                if( $localNewsQuery -> have_posts() ) : while( $localNewsQuery -> have_posts() ) : $localNewsQuery -> the_post();
                get_template_part('template-parts/carousel/carousel-news','item');
                endwhile; endif;
                wp_reset_postdata();
                wp_reset_query();
                ?>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <!-- sidebar -->
      <?php get_sidebar();?>
    </div>
  </div>
  <div class="banner-large">
    <p>banner
      <br>940x120</p>
  </div>
  <section class="post-slider">
    <div class="post-slider-wrapper">
      <div class="swiper-wrapper">
        <?php 
          $postSliderArgs = array(
            'posts_per_page' => 10,
            'post_type' => array('post', 'business'),
            'order'=> 'ASC'
          );
          $postSliderQuery = new WP_Query($postSliderArgs);
          if( $postSliderQuery -> have_posts() ) : while ( $postSliderQuery -> have_posts() ) : $postSliderQuery -> the_post();
            get_template_part('template-parts/carousel/carousel-post', 'item');
          endwhile; endif;
          wp_reset_postdata();
          wp_reset_query();
          ?>
      </div>
    </div>
    <section class="post-slider-controls">
      <a href="#" class="post-slider-prev">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/prev-white.png" alt="Previous">
      </a>
      <a href="#" class="post-slider-next">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/next-white.png" alt="Previous">
      </a>
    </section>
    <section class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">
        <?php 
                if($postSliderQuery -> have_posts() ) : while( $postSliderQuery->have_posts()) : $postSliderQuery->the_post();
                ?>
        <div class="gallery-thumb swiper-slide" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>'); "></div>
        <?php
               endwhile;endif;
              ?>
      </div>
    </section>
  </section>
  <!-- lightbox -->
  <div class="black-overlay">
    <div class="lightbox">
      <div class="lightbox-overlay">
        <div class="lightbox-data">
          <h2 class="lightbox-title"></h2>
          <a href="#" class="lightbox-read-more">Read more</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>