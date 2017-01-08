<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
	<div class="spacer"></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="post">
				<div class="page_top">
					<div class="post_bottom">
						<span class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>
						<div class="post_content">
							<div class="info"></div>
							<div class="entry">
							<?php if (is_search()){
									the_excerpt();
								}else{
									the_content('more...'); 
								}
							?>
							</div>
							<div class="clear"></div>	
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>
<?php get_footer();?>