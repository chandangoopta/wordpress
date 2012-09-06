<div class="sidebar_left">

	<ul>
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
					
		<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
		<?php wp_list_bookmarks(); ?>
		
	<?php endif; ?>
	</ul>
	
</div>