<?php 
get_header( ); 
?>

<div id="userpage">
<div id="main">

<?php
if( have_posts( ) ) {
	$first_post = true;

	while( have_posts( ) ) {
		the_post( );

		$author_feed_url = '';
		if( function_exists( 'get_author_feed_link' ) ) {
			$author_feed_url = get_author_feed_link( get_the_author_ID( ) );
		}
		else {
			$author_feed_url = get_author_rss_link( false, get_the_author_ID( ), get_the_author_nickname( ) );
		}
?>

<?php if( $first_post === true ) { ?>
	
		<?php echo prologue_get_avatar( get_the_author_id( ), get_the_author_email( ), 48 ); ?>
		
		<p><?php the_author_description(); ?></p>
		<br>
		<p>Web: <a href="<?php the_author_url(); ?>"><?php the_author_url(); ?></a></p>
		<br>
	<h2>
		Updates from <?php the_author_posts_link( ); ?>
		<a class="rss" href="<?php echo $author_feed_url; ?>">RSS</a>
	</h2>
	
<?php } // first_post ?>

	<ul>
		<li>
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
		<?php the_author_posts_link( ); ?>
		
			<?php wp_time_since(); ?> | <?php comments_popup_link( __( 'Add Comment' ), __( '1 comment' ), __( '% comments' ) ); ?> <?php wp_delete_post_link('| Delete', ' ', ' '); ?>  
			<!-- <br />
			<?php the_tags( __( 'Tags: ' ), ', ', ' ' ); ?> -->
		</div>
	
	<div class="poundbottom">
	   <div class="p4"></div>
	   <div class="p3"></div>
	   <div class="p2"></div>
	   <div class="p1"></div>
	</div>

		</li>
	</ul>
	

<?php
		$first_post = false;

	} // while have_posts

	echo '<div class="navigation"><p>' . posts_nav_link() . '</p></div>';

} // if have_posts
?>


</div> <!-- // main -->
</div> <!-- // postpage -->

<?php
get_footer( );
