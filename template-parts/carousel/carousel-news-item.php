<a href="<?php the_permalink();?>" class="news-carousel-link swiper-slide">
  <div class="news-carousel-item ">
    <div class="news-carousel-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>);"></div>
    <div class="news-carousel-data">
      <p class="news-carousel-date"><?php echo get_the_date(); ?></p>
      <h3 class="news-carousel-title"><?php the_title();?></h3>
    </div>
  </div>
</a>