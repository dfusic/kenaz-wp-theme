<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="footer-logo">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/footer-logo.png" alt="Kenaz">
          <h1>Kenaz</h1>
        </div>
        <p class="footer-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus praesentium fugiat voluptatum, et veritatis harum.</p>
        <ul class="list-inline social-media">
          <li class="list-inline-item">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/rss.png" alt="Share on social media!">
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/facebook.png" alt="Share on social media!">
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/twitter.png" alt="Share on social media!">
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/dribbble.png" alt="Share on social media!">
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/linkedin.png" alt="Share on social media!">
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/youtube.png" alt="Share on social media!">
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media/skype.png" alt="Share on social media!">
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h2 class="newsletter-title">Newsletter</h2>
        <p class="newsletter-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut porro pariatur modi accusantium incidunt alias.</p>
        <?php echo do_shortcode('[mc4wp_form id="86"]');?>
      </div>
      <div class="col-md-4">
        <div class="tags-cloud">
          <h2 class="tags-cloud-title">Tags Widget</h2>
          <div class="tag-cloud">
            <?php 
          $tagsArgs = array(
            'smallest' => 14,
            'largest' => 14,
            'unit' => 'px',
            'hide_empty' => false
          );
          wp_tag_cloud($tagsArgs); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <section class="footer-featured">
          <h3 class="footer-featured-title">Featured</h3>
          <?php 
            $footerFeatured = new WP_Query(array(
              'posts_per_page' => 3
            ));
            if( $footerFeatured -> have_posts() ) : while( $footerFeatured -> have_posts() ) : $footerFeatured -> the_post();
              get_template_part('template-parts/footer/footer', 'post');
            endwhile;endif;
            wp_reset_postdata();
            wp_reset_query();
            ?>
        </section>
      </div>
      <div class="col-md-4">
        <section class="random-posts">
          <h3 class="random-posts-title">Random Posts</h3>
          <?php 
              $randomPostsArgs = array(
                'posts_per_page' => 3,
                'orderby' => 'rand',
                'post_type' => array('business', 'post')
              );
              $randomQuery = new WP_Query($randomPostsArgs);
              if($randomQuery -> have_posts() ) : while( $randomQuery -> have_posts() ) : $randomQuery -> the_post();
              get_template_part('template-parts/footer/footer', 'post');
              endwhile;endif;

              ?>
        </section>
      </div>
      <div class="col-md-4">
        <section class="twitter-feed">
          <h3 class="twitter-feed-title">Twitter Feed</h3>
          <?php echo do_shortcode('[fts_twitter twitter_name=dfusic tweets_count=3 cover_photo=no stats_bar=no show_retweets=no show_replies=no]');?>
        </section>
      </div>
    </div>
  </div>
  <div class="footer-bottom-parent">
    <div class="container">
      <section class="footer-bottom">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <p class="footer-bottom-text">&copy; 2018 - Kenaz Template - factory.hr</p>
          </div>
          <div class="col-6">
            <?php 
        $footerBottom = array(
          'theme_location' => 'footer_bottom_nav'
        );
        wp_nav_menu($footerBottom);
        ?>
          </div>
        </div>
      </section>
    </div>
  </div>
</footer>



<?php wp_footer();?>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/swiper.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/main.min.js"></script>
</body>

</html>