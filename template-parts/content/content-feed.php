<article class="feed-article">
  <h2 class="feed-article-title"><?php the_title();?></h2>
  <div class="feed-article-meta">
    <p class="feed-article-date">
      <?php echo get_the_date(); ?>
    </p>
    <p class="feed-article-author">Author: <?php echo get_the_author(); ?></p>
    <p class="feed-article-comments">
      <img src="<?php echo get_template_directory_uri();?>/assets/images/comment-dark.png" alt="Comments">
      <?php echo wp_count_comments($post -> ID)->approved . ' comments';?>
    </p>
  </div>
  <div class="row">
    <div class="col-md-4">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid feed-article-img" alt="<?php the_title();?>">
    </div>
    <div class="col-md-8">
        <?php the_excerpt(); ?>
      <a href="<?php echo get_permalink();?>" class="feed-article-more">Read article</a>
    </div>
  </div>
  <div class="feed-article-share">
    <?php 
      echo do_shortcode('[ssba-buttons]');
    ?>
  </div>
</article>