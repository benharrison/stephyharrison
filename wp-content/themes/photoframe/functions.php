<?php 
//show the ( Register / Log in ) above the comment box.
$templatelite_comment_login=true;


if(function_exists('register_sidebar')){
		register_sidebar(array(
		'before_widget' => '<li><div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></li>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'));
		
		function unregister_problem_widgets() {
			unregister_sidebar_widget('search');
			unregister_sidebar_widget('tag_cloud');
		}
		add_action('widgets_init','unregister_problem_widgets');
}

function add_meta_link(){
	echo '<li><a href="http://www.hostrefer.com/" title="Web Hosting Directory">Web Hosting Refer</a></li>';
	echo '<li><a href="http://www.beewhois.com/" title="Domain Name Search">Domain Whois - BeeWhois</a></li>';
}
add_action('wp_meta', 'add_meta_link'); 

//change the tag cloud
function widget_cloud($args) {
	global $wpdb, $post;
	extract($args);
	include(TEMPLATEPATH . '/sidebar/tagcloud.php');
}
register_sidebar_widget('Tag Cloud', 'widget_cloud');

function check_gd_freetype(){
	if (!function_exists('gd_info'))
  		return false;
  	$gd = gd_info();
	if ($gd["FreeType Support"] == false)
  		return false;
  	return true;
  
}
//GsL98DGtpo0W
 