<?php get_header();?>

<div class="container">
  <div class="banner1">
    <p>banner
      <br>940x120</p>
  </div>
  <?php 
  if( have_posts() ) : while( have_posts() ) : the_post();
  get_template_part('content','post-single');
  endwhile;endif;
?>
</div>
<?php get_footer(); ?>