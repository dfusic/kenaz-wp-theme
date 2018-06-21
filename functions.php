<?php 

#navbarovi
register_nav_menus( array(
	'top_nav' => 'Navigacija na vrhu',
  'main_nav' => 'Glavna navigacija',
  'footer_bottom_nav' => 'Navigacija na dnu footera'
));
#/navbarovi

# portfolio post type
function cpt_business() {
	$labels = array(
		'name'               => 'Business posts',
		'singular_name'      => 'Business post',
		'menu_name'          => 'Business Posts',
		'name_admin_bar'     => 'Business Posts',
		'add_new'            => 'Add New Business Post',
    'add_new_item'       => 'Add New Business Post',
    'menu_icon'          => 'dashicons-welcome-write-blog',
		'new_item'           => 'New Business Post',
		'edit_item'          => 'Edit Business Post',
		'view_item'          => 'View Business Post',
		'all_items'          => 'All Business Posts',
		'search_items'       => 'Search Business posts',
		'parent_item_colon'  => 'Parent Business Posts',
		'not_found'          => 'No posts found :(',
		'not_found_in_trash' => 'No posts in trash :('
	);

	$args = array( 
		'public'      => true, 
		'labels'      => $labels,
    'description' => 'Business Posts',
    'supports' => ['title','thumbnail','editor', 'comments'],
		'show_in_nav_menus' => true,
		'has_archive' => true
	);
    	register_post_type( 'business', $args );
}
add_action( 'init', 'cpt_business' );
// register business taxonomy

function business_taxonomy(){
  register_taxonomy('business', 'business');
}
add_action('init', 'business_taxonomy');

# /business post type

# post thumbnails
add_theme_support( 'post-thumbnails' );
# /post thumbnails


# post view counter
// function to display number of posts.
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0 View";
  }
  return $count.' Views';
}

// function to count views.
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
  }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}

# /post view count

function mytheme_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
<div <?php comment_class(); ?> id="li-comment-
  <?php comment_ID() ?>">
  <div id="comment-<?php comment_ID(); ?>">
    <div class="row">
      <div class="col-2">
        <div class="comment-author vcard">
          <?php echo get_avatar($comment,$size='75'); ?>
        </div>
      </div>

      <div class="col-10">
        <div class="comment-header">
          <!-- name and meta -->
          <p class="comment-author">
            <?php echo get_comment_author();?>
          </p>
          <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
              <?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?>
            </a>
            <?php edit_comment_link(__('(Edit)'),'  ','') ?>
          </div>
          <div class="reply">
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          </div>
        </div>
        <!-- comment content -->
        <?php comment_text() ?>
      </div>

      <?php if ($comment->comment_approved == '0') : ?>
      <em>
        <?php _e('Your comment is awaiting moderation.') ?>
      </em>
      <br />
      <?php endif; ?>
    </div>
  </div>
  <?php
       }
       // coment field to the bottom
       function wpb_move_comment_field_to_bottom( $fields ) {
        $comment_field = $fields['comment'];
        unset( $fields['comment'] );
        unset($fields['website']);
        $fields['comment'] = $comment_field;
        return $fields;
        }
         
        add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
        //remove website field
        function crunchify_disable_comment_url($fields) { 
          unset($fields['url']);
          return $fields;
      }
      add_filter('comment_form_default_fields','crunchify_disable_comment_url');
      // placeholder to comment_form inputs 

      function placeholder_input_fields($fields){
        $fields =  array(

          'author' =>
            '<p class="comment-form-author">' .
            '<input id="author" placeholder="Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30"' . $aria_req . ' /></p>',
        
          'email' =>
            '<p class="comment-form-email">'.
            '<input id="email" placeholder="Email address" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" size="30"' . $aria_req . ' /></p>'
        );
        return $fields;
      }

      add_filter('comment_form_default_fields', 'placeholder_input_fields')  
?>