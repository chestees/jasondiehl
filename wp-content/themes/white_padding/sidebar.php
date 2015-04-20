<div class="sidebar">
  <div id="primary">
    <ul class="ul_side aligncenter"><li><a class="img" href="http://www.chestees.com/?utm_source=jasondiehl&utm_medium=banner&utm_term=click&utm_campaign=product" target="_blank"><img src="/wp-content/themes/white_padding/images/banner_chestees.gif" /></a></li></ul>
    <ul class="ul_side aligncenter"><li><a class="img" href="http://www.damptshirts.com/?utm_source=jasondiehl&utm_medium=banner&utm_term=click&utm_campaign=product" target="_blank"><img src="/wp-content/themes/white_padding/images/banner_damp.gif" /></a></li></ul>
    <ul class="ul_side">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>
      <?php 
        $children = wp_list_pages('echo=0&title_li=&sort_column=menu_order'); 
        if ($children != '') {
          echo '<li id="pages">';
          echo '</h3>';
          echo _e( 'Pages', 'whitepad' );
          echo '</h3>';
          echo '<ul>';
          if ($children != '') {
            echo $children;
          }
          echo '</ul>';
          echo '</li>';
        }
      ?>
      
      <?php 
        $children = wp_list_categories('echo=0&title_li=&show_count=0&hierarchical=1'); 
        if ($children != '') {
          echo '<li id="categories">';
          echo '<h3>';
          echo _e( 'Categories', 'whitepad');
          echo '</h3>';
          echo '<ul>';
          if ($children != '') {
            echo $children;
          }
          echo '</ul>';
          echo '</li>';
        }
      ?>
      <li id="archives">
        <h3>
          <?php _e( 'Archives', 'sandbox' ) ?>
        </h3>
        <ul>
          <?php wp_get_archives('type=monthly') ?>
        </ul>
      </li>
      <?php endif; // end primary sidebar widgets  ?>
    </ul>
  </div>
  <!-- #primary .sidebar -->
  <div id="secondary">
    <ul class="ul_side">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
      <li id="search">
        <h3><label for="s"><?php _e( 'Search', 'whitepad' ) ?></label></h3>
        <div id="search_frm">
          <form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
            <input id="search_inp" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" />
            <input type="image" id="search_btn" src="http://www.jasondiehl.com/wp-content/themes/white_padding/images/search-btn.png" />
          </form>
        </div>
      </li>
      
      <?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&show_images=1') ?>
      <!--
        <li id="rss-links">
          <h3><?php _e( 'RSS Feeds', 'whitepad' ) ?></h3>
          <ul>
            <li><a href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'whitepad' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All posts', 'sandbox' ) ?></a></li>
            <li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'whitepad' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All comments', 'sandbox' ) ?></a></li>
          </ul>
        </li>
  
        <li id="meta">
          <h3><?php _e( 'Meta', 'whitepad' ) ?></h3>
          <ul>
            <?php wp_register() ?>
  
            <li><?php wp_loginout() ?></li>
            <?php wp_meta() ?>
  
          </ul>
        </li>-->
      <?php endif; // end secondary sidebar widgets  ?>
    </ul>
  </div>
  <!-- #secondary .sidebar -->
</div>
