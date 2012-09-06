<?php 
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'post' ) {
	if ( ! is_user_logged_in() )
		auth_redirect();

	if( !current_user_can( 'publish_posts' ) ) {
		wp_redirect( get_bloginfo( 'url' ) . '/' );
		exit;
	}

	check_admin_referer( 'new-post' );

	$user_id		= $current_user->user_id;
	$post_content	= $_POST['posttext'];
	$tags			= $_POST['tags'];

	$char_limit		= 40;
	$post_title		= strip_tags( $post_content );
	if( strlen( $post_title ) > $char_limit ) {
		$post_title = substr( $post_title, 0, $char_limit ) . ' ... ';
	}

	$post_id = wp_insert_post( array(
		'post_author'	=> $user_id,
		'post_title'	=> $post_title,
		'post_content'	=> $post_content,
		'tags_input'	=> $tags,
		'post_status'	=> 'publish'
	) );

	wp_redirect( get_bloginfo( 'url' ) . '/' );
	exit;
}

get_header( ); 

if( current_user_can( 'publish_posts' ) ) {
	require_once dirname( __FILE__ ) . '/post-form.php';
}
?>

<div id="main">
	<h2>Latest Updates <a class="rss" href="<?php bloginfo( 'rss2_url' ); ?>">RSS</a></h2><div id="hide-comments"><a href="javascript:unhide('.showhide')">Show/Hide Comments</a></div>
	<ul>

<?php
if( have_posts( ) ) {

	$previous_user_id = 0;
	while( have_posts( ) ) {
		the_post( );
?>

<li id="prologue-<?php the_ID(); ?>" class="user_id_<?php the_author_ID( ); ?>">

<?php echo prologue_get_avatar( get_the_author_ID( ), get_the_author_email( ), 32 ); ?>

	<div class="poundtop">
	   <div class="p1"></div>
	   <div class="p2"></div>
	   <div class="p3"></div>
	   <div class="p4"></div>
	 </div>

		
	<div class="postcontent">
		<?php the_content( __( '(More ...)' ) ); ?>
	</div> 
	
	<div class="post-meta">
		<?php #the_author_posts_link( ); ?>
		
			<?php wp_time_since(); ?> | <?php comments_popup_link( __( 'Add Comment' ), __( '1 comment' ), __( '% comments' ) ); ?> <?php #wp_delete_post_link(' | Delete', ' ', ' '); ?>  
			<!-- <br />
			<?php the_tags( __( 'Tags: ' ), ', ', ' ' ); ?> -->
		</div>
	
	<div class="poundbottom">
	   <div class="p4"></div>
	   <div class="p3"></div>
	   <div class="p2"></div>
	   <div class="p1"></div>
	</div>
	
	<!-- // postcontent -->
	<div class="bottom_of_entry"></div>
	<div class="showhide">
	<?php comments_to_post(); ?>
	</div>
</li>

<?php
	} // while have_posts

} // if have_posts
?>
	<?php posts_nav_link(); ?> - <?php wp_loginout(); ?>
	</ul>

	

</div> <!-- // main -->

<?php
get_footer( );
