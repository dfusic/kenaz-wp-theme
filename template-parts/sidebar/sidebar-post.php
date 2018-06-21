<a href="<?php echo get_permalink(); ?>" class="sidebar-post-link">
  <article class="sidebar-post">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="sidebar-post-header">
          <p class="sidebar-post-date">
            <?php echo get_the_date(); ?>
          </p>
          <p class="sidebar-post-comments">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/comment-dark.png" alt="<?php echo wp_count_comments($post->ID)->approved . ' comments';?>">
            <?php echo wp_count_comments($post->ID)->approved; ?>
          </p>
        </div>
        <h2 class="sidebar-post-title">
          <?php the_title();?>
        </h2>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="sidebar-post-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
      </div>
    </div>
  </article>
</a>