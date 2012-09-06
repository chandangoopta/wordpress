<?php 
get_header( ); 

if( have_posts( ) ) {
	$first_post = true;

	while( have_posts( ) ) {
		the_post( );

		$email_md5		= md5( get_the_author_email( ) );
		$default_img	= urlencode( 'http://use.perl.org/images/pix.gif' );
?>

<div id="postpage">
<div id="main">
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
		
			<?php wp_time_since(); ?> <?php wp_delete_post_link('| Delete', ' ', ' '); ?>  
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
	<div class="bottom_of_entry">&nbsp;</div>

<?php
		comments_template( );

	} // while have_posts
} // if have_posts
?>

</div> <!-- // main -->
</div> <!-- // postpage -->

<?php
get_footer( );
