<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
		<meta name="generator" content="WordPress.com" /> 
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>

<?php if ( strstr( $_SERVER['HTTP_USER_AGENT'], 'iPhone' ) ) { ?>
<meta name="viewport" content="width=320" />
<style type="text/css">
#header_img, #sidebar, #postbox .avatar {
	display: none;
}

#wrapper, #main {
	width: 320px;
	padding: 0;
	float: none;
	margin-left: 3px;
}

h1 {
	font-size: 2em;
	font-family: Georgia, "Times New Roman", serif;
	margin-left: 0;
	margin-top: 5px;
	margin-bottom: 10px;
}

h2 {
	font-size: 1.2em;
	font-weight: bold;
	color: #555;
}

#postbox form {
	padding: 5px;
}

#postbox textarea#posttext {
	width: 300px;
	height: 50px;
	border: 1px solid #c6d9e9;
	margin-bottom: 10px;
	padding: 2px;
	font: 1.4em/1.2em "Lucida Grande",Verdana,"Bitstream Vera Sans",Arial,sans-serif;
}
#postbox input#tags,  #commentform #comment {
	font-size: 1.2em;
	padding: 2px;
	border: 1px solid #c6d9e9;
	width: 300px;
	margin-left: 0;
}

#postbox label {
	color: #333;
	display: block;
	font-size: 1.2em;
	margin-bottom: 4px;
	margin-left: 0;
	font-weight: bold;
}

#postbox input#submit {
	font-size: 1.2em;
	margin-left: 250px;
	margin-top: 5px;
}

#main ul {
	list-style: none;
	margin-top: 16px;
	margin-left: 0;
}

#wpcombar {
	display: none;
}
body {
	padding-top: 0;
}

.logout a {
	color: #555;
	padding: 20px 0 20px 0;
}
</style>
<?php } ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript"> 
      function unhide(selector) {
        $(selector).toggleClass('hidden');
      } 
    </script>    
    <style type="text/css" media="screen">
      .hidden { display: none; } 
    </style>

<script language="Javascript">
	function counterUpdate(opt_countedTextBox, opt_countBody, opt_maxSize) {
        var countedTextBox = opt_countedTextBox ? opt_countedTextBox : "posttext";
        var countBody = opt_countBody ? opt_countBody : "countBody";
        var maxSize = opt_maxSize ? opt_maxSize : 1024;

        var field = document.getElementById(countedTextBox);

        if (field && field.value.length >= maxSize) {
                field.value = field.value.substring(0, maxSize);
        }
        var txtField = document.getElementById(countBody);
                if (txtField) { 
	       txtField.innerHTML = maxSize- field.value.length;
        }
	}
</script>

	</head>
<body>

<div id="wrapper">

<h1><a href="<?php bloginfo( 'url' ); ?>/"><?php bloginfo( 'name' ); ?></a></h1>

<?php
$image = get_header_image( );
if( preg_match( '|there-is-no-image.jpg$|', $image ) !== 1 ) {
?>

<div id="header_img">
<img src="<?php echo $image; ?>" width="726" height="150" alt="" />
</div>

<?php
} // if header image
?>
