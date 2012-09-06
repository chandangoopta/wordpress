<?php get_header(); ?>

	<div id="content">

		<div class="singlebody">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="singlepost">
			
				<h2><?php the_title(); ?></h2>

				<div class="videogame">
				
				<?php if( get_post_meta($post->ID, "video", true) ): ?>
				
					<div class="videopart">

						<?php $values = get_post_custom_values("video"); echo $values[0]; ?>
					
					</div>
					
					<div class="postinformation">
					
						<div class="postviewpart">
						<?php if(function_exists('the_views')) { the_views(); } ?>
						</div>
					
						<p><font style="font-weight:bold;">Published:</font> <?php echo time_ago(); ?></p>
					
						<p><font style="font-weight:bold;">Category:</font> <?php the_category(', ') ?></p>
					
						<?php the_tags( '<p><font style="font-weight:bold;">Tags:</font> ', ', ', '</p>'); ?>
						
						<p><font style="font-weight:bold;">Description:</font> <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?></p>
						
					</div>
					
				<?php elseif( get_post_meta($post->ID, "game", true) ): ?>
				
					<div class="gamepart">

						<object type="application/x-shockwave-flash" width="638" height="515" data="<?php $values = get_post_custom_values("game"); echo $values[0]; ?>"><param name="movie" value="<?php $values = get_post_custom_values("game"); echo $values[0]; ?>" /></object>
					
					</div>
					
					<div class="postinformation">
					
						<div class="postviewpart">
						<?php if(function_exists('the_views')) { the_views(); } ?>
						</div>
					
						<p><font style="font-weight:bold;">Published:</font> <?php echo time_ago(); ?></p>
					
						<p><font style="font-weight:bold;">Category:</font> <?php the_category(', ') ?></p>
					
						<?php the_tags( '<p><font style="font-weight:bold;">Tags:</font> ', ', ', '</p>'); ?>
						
						<p><font style="font-weight:bold;">How to Play:</font> <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?></p>
						
					</div>
					
				<?php else: ?>
				
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					<div class="postinformation">
					
						<div class="postviewpart">
						<?php if(function_exists('the_views')) { the_views(); } ?>
						</div>
						
						<p><font style="font-weight:bold;">Published:</font> <?php the_time('l, F jS, Y') ?></p>
					
						<p><font style="font-weight:bold;">Category:</font> <?php the_category(', ') ?></p>
					
						<?php the_tags( '<p><font style="font-weight:bold;">Tags:</font> ', ', ', '</p>'); ?>
					</div>
					
				<?php endif; ?>
				
				</div>
				
				<div class="share">
					<ul class="sharing-cl" id="text">
						<li><a rel="nofollow" target="_blank" class="sh-tweet" href="http://twitter.com/home?status=Currently watching <?php the_permalink(); ?>" title="Click to share on Twitter">twitter</a></li>
						<li><script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script><a rel="nofollow" class="sh-face" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" onclick="return fbs_click()" target="_blank" title="Click to share on Facebook">facebook</a></li>
						<li><a rel="nofollow" target="_blank" class="sh-su" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>">stumbleupon</a></li>
					</ul>
				</div>
			
			</div>
			
				<?php comments_template(); ?>
				
		<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>
			
		</div>

			<?php include (TEMPLATEPATH . '/sidebar_single.php'); ?>

	</div>

<?php get_footer(); ?>
