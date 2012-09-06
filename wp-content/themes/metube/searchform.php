		<div class="main_search">
			<form method="get" class="searchform_top" action="<?php bloginfo('url'); ?>/">
				<div>
					<input type="text" value="" name="s" class="searchform_top_text" onclick="this.value='';" />
					<input type="image" style="margin-top:-3px;margin-left:0px;outline: none;" onmouseover="this.src='<?php bloginfo('template_url')?>/images/searchhover.gif'" onmouseout="this.src='<?php bloginfo('template_url')?>/images/searchbutton.gif'" onmousedown="this.src='<?php bloginfo('template_url')?>/images/searchactive.gif'" src="<?php bloginfo('template_url')?>/images/searchbutton.gif" class="gosearch" />
				</div>
			</form>
			<div style="display:none;"><img src="<?php bloginfo('template_url')?>/images/searchhover.gif" alt="" /><img src="<?php bloginfo('template_url')?>/images/searchactive.gif" alt="" /><img src="<?php bloginfo('template_url')?>/images/navactive.gif" alt="" /><img src="<?php bloginfo('template_url')?>/images/navhover.gif" alt="" /></div>
		</div>