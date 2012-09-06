<?php
$user			= get_userdata( $current_user->ID );
$first_name		= attribute_escape( $user->first_name );
include_once "/var/www/Khulaamanch/post_tweet.php"
?>

<div id="postbox">
	<form id="new_post" name="new_post" method="post" action="<?php bloginfo( 'url' ); ?>/">
		<input type="hidden" name="action" value="post" />
		<?php wp_nonce_field( 'new-post' ); ?>

		<?php echo prologue_get_avatar( $user->ID, $user->user_email, 48 ); ?>

		<label for="posttext">Welcome, <?php echo $first_name; ?>. Post Your Voice!</label>
		<textarea name="posttext" id="posttext" rows="3" cols="60" onkeyup="counterUpdate('posttext', 'countBody','140');"></textarea>
			
<!--		<label for="tags">Give it a Tag:</label>
		<input type="text" name="tags" id="tags" autocomplete="off" />
-->	
		<input id="submit" type="submit" value="Post it" />
	</form>
</div> <!-- // postbox -->
<div id="countBody">140</div>
