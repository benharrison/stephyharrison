<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
	<?php if ( is_home() ) { ?>
		<div class="spacer"></div>
	<?php } ?>

<?php 
	if (have_posts()) :
		$post = $posts[0]; // Hack. Set $post so that the_date() works.
		if (is_category()) { /* If this is a category archive */ ?>
				<p class="archivetitle">Archive for the Category &loz; <?php echo single_cat_title(); ?> &loz;</p>
<?php 		} elseif (is_day()) {  /* If this is a daily archive */ ?>
				<p class="archivetitle">Archive for <?php the_time('F jS, Y'); ?></p>
<?php 		} elseif (is_month()) { /* If this is a monthly archive */ ?>
				<p class="archivetitle">Archive for &loz; <?php the_time('F, Y'); ?> &loz;</p>
<?php 		} elseif (is_year()) { /* If this is a yearly archive */ ?>
				<p class="archivetitle">Archive for &loz; <?php the_time('Y'); ?> &loz;</p>
<?php 		} elseif (is_search()) { /* If this is a search */ ?>
				<p class="archivetitle">Search Results</p>
<?php 		} elseif (is_author()) { /* If this is an author archive */ ?>
				<p class="archivetitle">Author Archive</p>
<?php 		} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { /* If this is a paged archive */ ?>
			<p class="archivetitle">Blog Archives</p>
<?php 		} elseif (is_tag()) { /* If this is a tag archive */ ?> 
				<p class="archivetitle">Tag-Archive for &loz; <?php single_tag_title(); ?> &loz; </p>
<?php 		}

		while (have_posts()) : the_post(); ?>
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
									<?php  the_tags('&nbsp;|&nbsp;<span class="tags">Tags: ', ', ', '</span>'); ?>
									&nbsp;|&nbsp;<span class="bubble"><?php comments_popup_link('Leave a Comment','One Comment', '% Comments', '','Comments off'); ?></span>
							</div>
							<div class="entry">
							<?php  if (is_search()){
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
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>
		<h1>Not found</h1>
		<p class="sorry">"Sorry, but you are looking for something that isn't here. Try something else.</p>
	<?php endif; ?>
</div>
<?php get_footer();?>