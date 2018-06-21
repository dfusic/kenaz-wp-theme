<?php get_header(); ?>

<div class="container">
  <div class="banner1">
    <p>banner<br>940x120</p>
  </div>
  <div class="category-carousel">
    <div class="swiper-wrapper">
      <?php 
        $category =get_queried_object();
        $categoryCarouselArgs = array(
          'posts_per_page' => 3,
          'post_type' => 'business'
        );
        $categoryCarouselPosts = new WP_Query($categoryCarouselArgs);
        if($categoryCarouselPosts -> have_posts() ) : while ($categoryCarouselPosts -> have_posts() ) : $categoryCarouselPosts -> the_post();
        get_template_part('template-parts/carousel/carousel', 'item');
        endwhile;endif;
        wp_reset_postdata();
        wp_reset_query();
      ?>
    </div>
    <div class="header-carousel-controls">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/prev-white.png" alt="Previous" class="category-carousel-prev">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/next-white.png" alt="Next" class="category-carousel-next">
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <section class="feed">
        <h1 class="feed-title">
          <?php single_cat_title(); ?>
        </h1>
        <?php 
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $category = get_queried_object();
        $feedArgs = array(
          'posts_per_page' => 6,
          'paged' => $paged,
          'post_type' => 'business'
        );
        $feedQuery = new WP_Query($feedArgs);

        if($feedQuery -> have_posts() ) : while ($feedQuery -> have_posts() ) : $feedQuery -> the_post();
        get_template_part('template-parts/content/content', 'feed');
        endwhile;endif;
        wp_reset_postdata();
        wp_reset_query();
        ?>
        <div class="pagination">
          <?php the_posts_pagination(array(
            'prev_text' => '',
            'next_text' => '',
            'screen_reader_text' => ''
          ));
          ?>
        </div>
      </section>
      <div class="banner1">
        <p>banner<br>620x120</p>
      </div>
    </div>
    <div class="col-md-4">
      <?php get_sidebar();?>
    </div>
  </div>
</div>

<?php get_footer(); ?>