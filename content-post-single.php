<?php setPostViews(get_the_ID()); ?>
<?php// echo getPostViews(get_the_ID());?>

<header class="post-header" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">
  <div class="post-header-overlay">
    <div class="post-header-data">
      <p class="post-header-date"><?php echo get_the_date();?></p>
      <h4 class="post-header-title"><?php the_title();?></h4>
    </div>
  </div>
</header>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <section class="single-post-content">
      <?php the_content();?>
      <section class="share-post">
        <?php echo do_shortcode('[ssba-buttons]');?>
      </section>
      </section>
     <div class="banner1">
       <p>banner<br>620x120</p>
     </div>
      <section class="author">
        <h3 class="author-title">About the author</h3>
            <img class="img-fluid author-avatar" src="<?php 
             $avatarUrl = get_avatar_url($post->post_author);
             echo $avatarUrl;
            ?>">
            <p class="author-desc">
              <?php 
                $authorDesc = get_the_author_meta('user_description', $post->post_author);
                echo $authorDesc;
              ?>
            </p>
      </section>
      <section class="comments">
        <h2 class="comments-title">Comments</h2>
        <?php 
         if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
        ?>
      </section>
    </div>
    <div class="col-md-4 p-r" id="single-sidebar">
      <?php get_sidebar('single');?>
    </div>
  </div>
</div>