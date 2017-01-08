<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=yearly&format=link'); ?>
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
<style type="text/css">
<!--
#blogtitle{
	 background:url("<?php bloginfo('template_directory'); ?>/images/title-img.php?var=<?php echo urlencode(get_bloginfo('name')); ?>") no-repeat left top;
}
-->
</style>
	
</head>
<body>
<div id="base">
<div id="base2">
	<div id="header">
		<a href="<?php bloginfo('rss2_url'); ?>" title="RSS Feed"><img src="<?php bloginfo('template_directory'); ?>/images/spacer.gif" alt="Subscribe RSS" class="rss"/></a>
		<div id="blogtitle"><a href="<?php echo get_option('home'); ?>"><?php
			if(!check_gd_freetype()){
				bloginfo('name');
			}else{
		?>
				<img src="<?php bloginfo('template_directory'); ?>/images/spacer.gif" width="100%" height="100%" alt="Home"/>
		<?php
			}
		?>
			</a></div>
		<div id="subtitle"><?php bloginfo('description');?></div>	
			<div class="searchbox">
			<form id="searchform" action="<?php bloginfo('url'); ?>/" method="get">
				<div class="search-field"><input type="text" value="Search ..." onfocus="if (this.value == 'Search ...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search ...';}" name="s" id="s" /></div>
				<div class="search-but"><input type="image" id="searchsubmit" value=" " src="<?php bloginfo('template_directory'); ?>/images/spacer.gif" /></div>
			</form>
			</div>
		<?php	if(function_exists("gd_info")){?>
				<div id="frame"></div>
		<?php }?>
	</div>
	<div id="container">
		<div id="menu">
			<ul><?php echo wp_list_pages('echo=0&sort_column=menu_order&depth=1&title_li='); ?></ul>
		</div>