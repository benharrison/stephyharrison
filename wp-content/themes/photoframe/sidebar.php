<div id="sidebar">
<ul>
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : 
	?>
		
		<?php wp_list_pages(array('title_li' => '<h1>Pages</h1>')); ?>
		
		<li>
			<h1>Archives</h1>
			<ul><?php wp_get_archives('type=monthly'); ?></ul>
		</li>

		<?php if ( is_archive() ) { ?>
				<li><h1>Calendar</h1><ul><?php get_calendar(); ?></ul></li>
		<?php	} ?>

		<?php if ( is_single()|| is_page() ) { ?>
				<li><h1>Recent Posts</h1><ul><?php wp_get_archives('type=postbypost&limit=5')?></ul></li>
		<?php	} ?>
		
		<?php if ( is_home() || is_page() ) { 	/* If this is the frontpage */ 
				wp_list_bookmarks('orderby=rand&title_before=<h1>&title_after=</h1>&between=<br/>&show_description=1&limit=20');
		?>

		<?php wp_list_categories('show_count=1&title_li=<h1>Categories</h1>'); ?>
<?php } ?>
		<li><h1>Meta</h1>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
			</ul>
		</li>
<?php endif; ?>
</ul>
</div>
