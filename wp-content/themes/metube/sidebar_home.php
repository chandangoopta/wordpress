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
		  

	<div class="rightvideo">
		  <? if ($tg_feat_video) { ?>
			<? echo stripslashes($tg_feat_video); ?>
          <? } else { ?>
	    	<object width="300" height="200"><param name="movie" value="http://www.youtube.com/v/uhHMWLjL77U&hl=en_US&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/uhHMWLjL77U&hl=en_US&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="300" height="200"></embed></object>
          <? } ?>	
	</div>
	
	<div class="whatsnew">
		<h2>What's New</h2>
		<?php $recent = new WP_Query("cat=<? echo $tg_normal_post; ?>&showposts=5"); while($recent->have_posts()) : $recent->the_post();?>
		<div class="fromblog">
			<div class="fromblogtitle">
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</div>
			<div class="fromblogcon">
				<p><?php echo excerpt(25); ?></p>
			</div>
		</div>
		<?php endwhile; ?>

		<div class="allblogs">
			<a href="<? echo $tg_blog_cat; ?>" title="Read All Blog Posts">Read more in our Blog</a>
		</div>
	</div>
	
</div>