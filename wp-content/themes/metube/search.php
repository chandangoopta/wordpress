<?php get_header(); ?>

	<div id="content">
	<?
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>	
		<?php include (TEMPLATEPATH . '/sidebar_archive.php'); ?>

		<div class="homebody2">

			<div class="randomposts">
			
	  <?php if (have_posts()) : ?>	
	  
		<h2 class="pagetitle">Search Results</h2>
		
		  <?if ($tg_300250_disable == "false") { ?>
		  <? if ($tg_300_250) { ?>
	<div class="catads">
          <? echo stripslashes($tg_300_250); ?>
		  </div>
          <? } else { ?>
	<div class="catads">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/300-250.gif" alt="" />
	</div>
          <? } ?>
		  <? } else { ?>
		  <? } ?>
	  
	  <?php while (have_posts()) : the_post(); ?>

					<div class="posts2">
						<div class="postimage">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="120" height="72" alt="<?php the_title_attribute(); ?>" /></a>
						</div>
						<div class="postinfo">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $tit = the_title('','',FALSE); echo substr($tit, 0, 30); if (strlen($tit) > 30) echo " ..."; ?></a>
						</div>
						<div class="postviews">
							<?php echo time_ago(); ?>  
						</div>
						<div class="postviews">
							<?php if(function_exists('the_views')) { the_views(); } ?>  
						</div>
					</div>

	<?php endwhile; ?>

			</div>

		<div class="navigation">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi('', '', '', '', 3, false);} ?>
		</div>
		
	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>
		
	<?php endif; ?>		
		
		</div>

	</div>

<?php get_footer(); ?>
