<?php get_header(); ?>

	<div class="main">
		<div class="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
			<div class="posttitle">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="entrytext">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
	
				<?php link_pages('Pages: ', 'number'); ?>
	
			</div>
		</div>
	  <?php endwhile; endif; ?>
	<?php edit_post_link('Edit page', '<p>', '</p>'); ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>