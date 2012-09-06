<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE 7]>
<link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-ie7.css" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 6]>
<link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-ie6.css" type="text/css" media="screen" />
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body>
<?
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<div id="main">

		<div id="header">
			<div class="logo">		
		  <? if ($tg_title) { ?>
				<h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><? echo $tg_title; ?></a></h1>
          <? } else { ?>
				<a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.gif" alt="<?php bloginfo('name'); ?>" /></a>
          <? } ?>
			</div>		

			<div class="searchpart">
				<div class="search">
					<?php include(TEMPLATEPATH . '/searchform.php'); ?>
				</div>
				<div class="searchmenu">
					<ul>
						<li><a href="<? echo $tg_menu_video; ?>" title="Browse Latest Videos">Videos</a></li>
						<li><a href="<? echo $tg_menu_game; ?>" title="Browse Latest Games">Games</a></li>
					</ul>
				</div>
			</div>
			
			<?if ($tg_topright_menu == "false") { ?>
			<div class="topright">
				<ul>
					<li><a href="<?php echo get_option('home'); ?>/wp-login.php?action=register" title="">Create Account</a></li>
					<li class="signin"><a href="<?php echo get_option('home'); ?>/wp-login.php" title="">Sign In</a></li>
				</ul>
			</div>
			<? } else { ?>
			<? } ?>
			
		</div>
