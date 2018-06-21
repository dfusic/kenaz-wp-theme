<div class="col-lg-4 col-md-6">
  <a href="<?php the_permalink();?>" class="post-link">
    <article class="post">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="img-fluid post-image">
      <div class="post-content">
        <div class="post-content-header">
          <p class="post-date">
            <?php echo get_the_date(); ?>
          </p>
          <p class="post-comment-count">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/comment-dark.png" alt="">
            <?php 
            $postCommentCount = wp_count_comments($post->ID)->approved;
            if($postCommentCount == 1){
              echo $postCommentCount . ' comment';
            }else{
              echo $postCommentCount . ' comments';
            }
            ?>
          </p>
        </div>
        <h2 class="post-title">
          <?php the_title();?>
        </h2>
      </div>
    </article>
  </a>
</div>