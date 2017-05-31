<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class=" well col-md-12 custom-comments">
<?php if(have_comments()): ?> 
	<!--grab comments-->
	<?php /* printf(
			esc_html(_nx('comment count "%2$s"', 'comment count "%2$s"', get_comments_number(),'comments-title' ) ),
			number_format_i18n(get_comments_number()),
			'<span>'.get_the_title().'</span>',
		);
		*/
	?>
	<h3 class="comments-title"></h3>
	<ol>
	<!--customize comment lists-->
	<?php $args = array(
		'walker' 			=> null,
		'max-depth' 		=>'',
		'style' 			=> 'ol',
		'callback' 			=> null,
		'end-callback' 		=> null,
		'type' 				=> 'all',
		'reply_text' 		=> 'reply',
		'page' 				=> '',
		'per_page'			=> '',
		'avatar_size' 		=> 32,
		'reverse_top_level' => null,
		'reverse_children' 	=> null,
		'format' 			=> 'html5',
		'short_ping' 		=> false,
		'echo' 				=> true,
		);
		 wp_list_comments($args); ?>
	</ol>
	<?php if(comments_open() && get_comments_number()): ?>
		<h4><?php esc_html_e('comments are closed', 'theme-4'); ?></h4>
	<?php endif; ?>

<?php endif; ?> 	
	<?php comment_form(); ?>
</div>