<?php get_header(); ?>

	<div id="content">
	
		<?php include (TEMPLATEPATH . '/sidebar_archive.php'); ?>

		<div class="homebody2">

			<div class="randomposts">
	  <?php if (have_posts()) : ?>	
	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>
	  
	  <div class="catads">
	  <img src="https://www.google.com/adsense/static/en_US/images/inline_rectangle.gif" alt="" />
	  </div>
	  
	  <?php while (have_posts()) : the_post(); ?>
	  


					<div class="posts2">
						<div class="postimage">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php $values = get_post_custom_values("thumb"); echo $values[0]; ?>" width="120" height="72" alt="<?php the_title_attribute(); ?>" /></a>
						</div>
						<div class="postinfo">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $tit = the_title('','',FALSE); echo substr($tit, 0, 40); if (strlen($tit) > 40) echo " ..."; ?></a>
						</div>
						<div class="postviews">
							<?php the_time('F jS, Y') ?>  
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

		<h2 class="center">No posts found. Try a search?</h2>
		<?php get_search_form(); ?>
		
	<?php endif; ?>		
		
		</div>

	</div>

<?php get_footer(); ?>
