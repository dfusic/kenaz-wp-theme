<a href="<?php echo the_permalink();?>" class="footer-post-link">
  <article class="footer-post">
    <div class="row">
      <div class="col-md-8">
        <div class="footer-post-data">
          <div class="footer-post-header">
            <p class="footer-post-date"><?php echo get_the_date(); ?></p>
            <p class="footer-post-comment-count">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/comment-dark.png" alt="Comment Count">
              <?php 
              $id = $post->ID;
              echo wp_count_comments($id)->approved;
              ?>
            </p>
          </div>
          <h2 class="footer-post-title"><?php the_title(); ?></h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="footer-post-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
      </div>
    </div>
  </article>
</a>