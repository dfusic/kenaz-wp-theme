<div class="swiper-slide post-slider-item">
  <div class="slider-post" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');" url="<?php echo get_permalink();?>" title="<?php the_title();?>">
    <div class="slider-post-overlay">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/search.png" alt="View" class="lightbox-view">
    </div>
  </div>
</div>