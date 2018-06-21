<?php if ( post_password_required() ) {
	return;
} ?>
	<div id="comments" class="comments-area">
		<?php if ( have_comments() ) : ?>
      <div class="comment-list">
				<?php 
				wp_list_comments( array(
					'short_ping'  => true,
          'avatar_size' => 60,
          'style' => 'div',
          'callback' => 'mytheme_comment'
        ) );
				?>
			</div>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'Comments are closed.' ); ?>
			</p>
    <?php endif; ?>
    <section class="add-comment">
      <?php 
    comment_form(array(
      'title_reply' => 'Add your comment',
      'comment_notes_before' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel maximus elit, non sagittis urna. Integer gravida non diam non aliquam. '
    ));
    ?>
    </section>
    
	</div>