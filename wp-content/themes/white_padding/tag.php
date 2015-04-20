<?php get_header() ?>

	<div id="container">
		<div id="content">

			<h2 class="page-title"><?php _e( 'Tag Archives:', 'sandbox' ) ?> <span><?php single_tag_title() ?></span></h2>

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>

<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
				<div class="entry-content">
<?php the_excerpt(__( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?>

				</div>
				<div class="entry-meta">
        	<?php edit_post_link( __( 'Edit', 'whitepad' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="author vcard"><?php printf( __( 'By %s', 'whitepad' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'whitepad' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="entry-date"> on <abbr class="published" title="<?php the_time('Y-m-d') ?>"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'whitepad' ), the_date( '', '', '', false ), get_the_time() ) ?></abbr></span>
          <span class="meta-sep">|</span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'whitepad' ), get_the_category_list(', ') ) ?></span>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'whitepad' ), ", ", "</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'whitepad' ), __( 'Comments (1)', 'whitepad' ), __( 'Comments (%)', 'whitepad' ) ) ?></span>
        </div>
			</div><!-- .post -->

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>