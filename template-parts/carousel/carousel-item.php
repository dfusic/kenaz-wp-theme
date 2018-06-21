<div class="swiper-slide">
  <div class="header-carousel-item" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <div class="header-carousel-overlay">
      <div class="header-carousel-data">
        <p class="header-carousel-date">
          <?php echo get_the_date(); ?>
        </p>
        <p class="header-carousel-comments">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/comment-light.png">
          <?php 
      $id = $post->ID;
      $commentCount = wp_count_comments($id)->approved;
      if($commentCount == 1){
        echo $commentCount . ' comment';
      }else{
        echo $commentCount . ' comments';
      }
      ?>
        </p>
        <h3 class="header-carousel-title">
          <?php the_title(); ?>
        </h3>
        <a href="<?php echo the_permalink();?>" class="header-carousel-link">Read article</a>

      </div>
    </div>
  </div>
</div>
