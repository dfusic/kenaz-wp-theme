<div class="col-md-6">
  <a href="<?php echo the_permalink(); ?>" class="business-post-link">
  <article class="business-post">
       <div class="row">
           <div class="col-md-6">
               <div class="business-post-img" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');"></div>
           </div>
           <div class="col-md-6">
               <div class="business-post-content">
                   <p class="business-post-date"><?php echo the_date(); ?></p>
                   <h2 class="business-post-title"><?php the_title();?></h2>
               </div>
           </div>
       </div>
   </article>
</a>
</div>