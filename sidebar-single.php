<aside class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-active" data-type="popular">Popular</a>
    <a href="#" data-type="top-rated">Top rated</a>
    <a href="#" data-type="comments">Comments</a>
  </div>
  <div class="sidebar-feed" id="popular-feed">
    <?php 
      $popularArgs = array(
        'posts_per_page' => 5,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num'
      );
      $popularQuery = new WP_Query($popularArgs);
      if( $popularQuery -> have_posts() ) : while( $popularQuery -> have_posts() ) : $popularQuery -> the_post();
      get_template_part('template-parts/sidebar/sidebar','post');
      endwhile; endif;
      wp_reset_postdata();
      wp_reset_query();
    ?>
  </div>
  <div class="sidebar-feed" id="top-rated-feed">
    <!-- normal query -->
    <?php 
  $topRatedArgs = array(
    'posts_per_page' => 5
  );
  $topRatedQuery = new WP_Query($topRatedArgs);
  if( $topRatedQuery -> have_posts() ) : while ( $topRatedQuery -> have_posts() ) : $topRatedQuery -> the_post();
  get_template_part('template-parts/sidebar/sidebar','post');
  endwhile;endif;
  wp_reset_postdata();
  wp_reset_query();
  ?>
  </div>
  <div class="sidebar-feed" id="comments-feed">
    <!-- comment count query -->
    <?php 
  $commentsArgs = array(
    'posts_per_page' => 5,
    'orderby' => 'comment_count',
  );
  $commentsQuery = new WP_Query($commentsArgs);
  if( $commentsQuery -> have_posts() ) : while( $commentsQuery -> have_posts() ) : $commentsQuery -> the_post();
  get_template_part('template-parts/sidebar/sidebar','post');
  endwhile; endif;
  wp_reset_postdata();
  wp_reset_query();
  ?>
  </div>
  <section class="sidebar-social">
    <h3 class="social-title">Social</h3>
    <a href="#" class="social-media-link">
      <div class="social-media" id="facebook">
        <div class="row">
          <div class="col-lg-6 col-md-12 p-r">

            <div class="social-media-left">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" alt="Facebook">
              <h4 class="social-media-title">Like</h4>
            </div>
          </div>
          <div class="col-lg-6 p-l col-md-12">
            <div class="social-media-right">
              <p class="social-media-numbers">25041 Fans</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    <a href="#" class="social-media-link">
      <div class="social-media" id="twitter">
        <div class="row">
          <div class="col-lg-6 col-md-12 p-r">

            <div class="social-media-left">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" alt="Twitter">
              <h4 class="social-media-title">Follow</h4>
            </div>
          </div>
          <div class="col-lg-6 p-l col-md-12">
            <div class="social-media-right">
              <p class="social-media-numbers">25041 Followers</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    <a href="#" class="social-media-link">
      <div class="social-media" id="youtube">
        <div class="row">
          <div class="col-lg-6 col-md-12 p-r">
            <div class="social-media-left">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/youtube.png" alt="Youtube">
              <h4 class="social-media-title">Subscribe</h4>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 p-l">
            <div class="social-media-right">
              <p class="social-media-numbers">951 Subscribers</p>
            </div>
          </div>
        </div>
      </div>
    </a>
  </section>
  <section class="sidebar-banners">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="sidebar-banner">
          <p>banner<br>300x250</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="sidebar-banner">
          <p>banner<br>300x250</p>
        </div>
      </div>
    </div>
  </section>
  <?php echo do_shortcode('[custom-facebook-feed]');?>
  <div class="banner2">
    <p>banner<br>300x250</p>
  </div>
</aside>