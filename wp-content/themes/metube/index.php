<?php get_header(); ?>

	<div id="content">
<?
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
		<div class="homebody">

			<div class="randomposts">
			
				<h2>Random Videos &amp; Games</h2>
				<?php $recent = new WP_Query("cat=-<? echo $tg_normal_post; ?>&showposts=4&orderby=rand"); while($recent->have_posts()) : $recent->the_post();?>
					<div class="posts">
						<div class="postimage">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="120" height="72" alt="<?php the_title_attribute(); ?>" /></a>
						</div>
						<div class="postinfo">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $tit = the_title('','',FALSE); echo substr($tit, 0, 40); if (strlen($tit) > 40) echo " ..."; ?></a>
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
			
			<div class="randomposts">
			
				<h2 class="featured">Featured</h2>
				
				<div class="featuredleft">
				<?php $recent = new WP_Query("cat=<? echo $tg_featured_post; ?>&showposts=1"); while($recent->have_posts()) : $recent->the_post();?>
					<div class="fposts">
						<div class="fpostimage">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="220" height="164" alt="<?php the_title_attribute(); ?>" /></a>
						</div>
						<div class="postinfo">
							<a style="font-size:14px;font-weight:bold;" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $tit = the_title('','',FALSE); echo substr($tit, 0, 40); if (strlen($tit) > 40) echo " ..."; ?></a>
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
				
				<div class="featuredright">
				<?php $recent = new WP_Query("cat=<? echo $tg_featured_post; ?>&showposts=3&offset=1"); while($recent->have_posts()) : $recent->the_post();?>
					<div class="fpostsright">
						<div class="fpostrightimage">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="120" height="72" alt="<?php the_title_attribute(); ?>" /></a>
						</div>
						<div class="fpostrighti">
						<div class="postrightinfo">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $tit = the_title('','',FALSE); echo substr($tit, 0, 50); if (strlen($tit) > 50) echo " ..."; ?></a>
						</div>
						<div class="postviews">
							<?php echo time_ago(); ?>  
						</div>
						<div class="postviews">
							<?php if(function_exists('the_views')) { the_views(); } ?>  
						</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>				
			
			</div>
		
			<div class="randomposts">
			
				<h2>Latest Videos</h2>
				<?php $recent = new WP_Query("cat=<? echo $tg_video_post; ?>&showposts=8"); while($recent->have_posts()) : $recent->the_post();?>
					<div class="posts">
						<div class="postimage">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="120" height="72" alt="<?php the_title_attribute(); ?>" /></a>
						</div>
						<div class="postinfo">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $tit = the_title('','',FALSE); echo substr($tit, 0, 40); if (strlen($tit) > 40) echo " ..."; ?></a>
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

			<div class="randomposts">
			
				<h2>Latest Games</h2>
				<?php $recent = new WP_Query("cat=<? echo $tg_game_post; ?>&showposts=8"); while($recent->have_posts()) : $recent->the_post();?>
					<div class="posts">
						<div class="postimage">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="120" height="72" alt="<?php the_title_attribute(); ?>" /></a>
						</div>
						<div class="postinfo">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $tit = the_title('','',FALSE); echo substr($tit, 0, 40); if (strlen($tit) > 40) echo " ..."; ?></a>
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
			
		</div>

			<?php include (TEMPLATEPATH . '/sidebar_home.php'); ?>

	</div>

<?php get_footer(); ?>
