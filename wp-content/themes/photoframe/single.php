<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
	<div class="spacer"></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="post">
				<div class="post_top">
					<div class="post_bottom">
						<span class="date_d"><?php the_time('d');?></span>
						<span class="date_m"><?php the_time('M');?></span>
						<span class="date_y"><?php the_time('Y');?></span>
						<span class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>
						<div class="post_content">
							<div class="info"><span class="postauthor">Author: <?php the_author_posts_link('nickname'); ?><?php edit_post_link(' ( Edit )',' ',''); ?></span>&nbsp;|&nbsp;
								<span class="category">Category: <?php the_category(', ') ?></span>
									<?php if(is_archive()){ the_tags('&nbsp;|&nbsp;<span class="tags">Tags: ', ', ', '</span>');} ?>
									<?php the_tags('&nbsp;|&nbsp;<span class="tags">Tags: ', ', ', '</span>');?>
							</div>
							<div class="entry">
							<?php
									the_content('more...'); 
									wp_link_pages(array('before' => '<div><strong><center>Pages: ', 'after' => '</center></strong></div>', 'next_or_number' => 'number')); 
							?>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>


			<div id="postmetadata">
			You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed. 
			<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { // Both Comments and Pings are open ?>
						You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
			<?php }elseif(!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {	// Only Pings are Open ?>
						Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
			<?php }elseif(('open' == $post-> comment_status) && !('open' == $post->ping_status)){	// Comments are open, Pings are not ?>
						You can skip to the end and leave a response. Pinging is currently not allowed.
			<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {	// Neither Comments, nor Pings are open ?>
						Both comments and pings are currently closed.
			<?php } 
					edit_post_link('Edit this entry.','',''); 
			?>
		</div>			
		<div id="comments"><?php comments_template(); ?></div>
	<?php endwhile; ?>
		<div class="navigation">
				<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
				<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h1>Not found</h1>
		<p class="sorry">"Sorry, but you are looking for something that isn't here. Try something else.</p>
	<?php endif; ?>
</div>
<?php get_footer();?>