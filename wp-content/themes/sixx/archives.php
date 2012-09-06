<?php
/*
Template Name: Archives
*/
?>

<?php 
get_header( ); 
?>


<div id="postpage">
<div id="main">

	<div class="poundtop">
	   <div class="p1"></div>
	   <div class="p2"></div>
	   <div class="p3"></div>
	   <div class="p4"></div>
	 </div>
	
	<div class="postcontent">
		<?php wp_tag_cloud('number=0'); ?>
	</div> 
	
	<div class="poundbottom">
	   <div class="p4"></div>
	   <div class="p3"></div>
	   <div class="p2"></div>
	   <div class="p1"></div>
	</div>
	
	<!-- // postcontent -->

</div> <!-- // main -->
</div> <!-- // postpage -->

<?php
get_footer( );