<?php 
get_header( ); 
$tag_obj = $wp_query->get_queried_object();
?>

<div id="main">
	<h2>Latest Updates: <?php single_tag_title( ); ?> <a class="rss" href="<?php echo get_tag_feed_link( $tag_obj->term_id ); ?>">RSS</a></h2>
	<ul>

<?php
if( have_posts( ) ) {

	$previous_user_id = 0;
	while( have_posts( ) ) {
		the_post( );
?>

<li>

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

<?php
	} // while have_posts

	echo '<div class="navigation"><p>' . posts_nav_link() . '</p></div>';
} // if have_posts
?>

	</ul>
</div> <!-- // main -->

<?php
get_footer( );
