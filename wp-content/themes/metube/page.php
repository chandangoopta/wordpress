<?php get_header(); ?>

	<div id="content">

		<div class="singlebody">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="singlepost">
			
				<h2><?php the_title(); ?></h2>

				<div class="videogame">
				
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		
				</div>
						
			</div>
				
		<?php endwhile; else: ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

		<?php endif; ?>
			
		</div>

			<?php include (TEMPLATEPATH . '/sidebar_single.php'); ?>

	</div>

<?php get_footer(); ?>
