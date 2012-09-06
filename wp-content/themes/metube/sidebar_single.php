<div class="sidebar_right">
<?
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
		  <?if ($tg_300250_disable == "false") { ?>
		  <? if ($tg_300_250) { ?>
	<div class="ads300">
          <? echo stripslashes($tg_300_250); ?>
		  </div>
          <? } else { ?>
	<div class="ads300">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/300-250.gif" alt="" />
	</div>
          <? } ?>
		  <? } else { ?>
		  <? } ?>
	
	<div class="whatsnew">
		<h2>Random Videos</h2>

		<?php $recent = new WP_Query("cat=<? echo $tg_video_post; ?>&showposts=5&orderby=rand"); while($recent->have_posts()) : $recent->the_post();?>
			<div class="singleright">
				<div class="singlerightimage">
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="90" height="54" alt="<?php the_title_attribute(); ?>" /></a>
				</div>
				<div class="singlerighti">
					<div class="singlerightinfo">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $tit = the_title('','',FALSE); echo substr($tit, 0, 50); if (strlen($tit) > 50) echo " ..."; ?></a>
					</div>
					<div class="postviews">
						<?php the_time('F jS, Y') ?>  
					</div>
					<div class="postviews">
						<?php if(function_exists('the_views')) { the_views(); } ?>  
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	
	<div class="whatsnew">
		<h2>Random Games</h2>

		<?php $recent = new WP_Query("cat=<? echo $tg_game_post; ?>&showposts=5&orderby=rand"); while($recent->have_posts()) : $recent->the_post();?>
			<div class="singleright">
				<div class="singlerightimage">
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="90" height="54" alt="<?php the_title_attribute(); ?>" /></a>
				</div>
				<div class="singlerighti">
					<div class="singlerightinfo">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $tit = the_title('','',FALSE); echo substr($tit, 0, 50); if (strlen($tit) > 50) echo " ..."; ?></a>
					</div>
					<div class="postviews">
						<?php the_time('F jS, Y') ?>  
					</div>
					<div class="postviews">
						<?php if(function_exists('the_views')) { the_views(); } ?>  
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	
</div>