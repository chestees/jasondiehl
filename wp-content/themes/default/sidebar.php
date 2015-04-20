	<div class="sidebar">
			<!--<h3>Search</h3>
			<div class="bloque1"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>
            -->

            <?php /* If this is a 404 page */ if (is_404()) { ?>
            <?php /* If this is a category archive */ } elseif (is_category()) { ?>
            <div class="bloque1"><p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p></div>
            
            <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
            <div class="bloque1"><p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
            for the day <?php the_time('l, F jS, Y'); ?>.</p></div>
            
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <div class="bloque1"><p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
            for <?php the_time('F, Y'); ?>.</p></div>
            
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <div class="bloque1"><p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
            for the year <?php the_time('Y'); ?>.</p></div>
            
            <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
            <div class="bloque1"><p>You have searched the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
            for <strong>'<?php echo wp_specialchars($s); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p></div>
            
            <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <div class="bloque1"><p>You are currently browsing the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives.</p></div>
            
            <?php } ?>
		<div class="bloque1">
			<h3>Pages</h3>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</div>
		<div class="bloque2">
			<!--
            <h3>Categories</h3>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>
            -->
			<h3>Archives</h3>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</div>
        <div class="bloque1">
			<h3>Great T-Shirt Sites</h3>
            <ul>
            	<li><a href="http://www.chestees.com/?from,jason_diehl">Chestees Funny T-Shirts</a></li>
                <li><a href="http://www.glowsters.com/?from,jason_diehl">Glowsters Onesies &amp; T-Shirts for Kids and Babies</a></li>
                <li><a href="http://www.damptshirts.com/?from,jason_diehl">Damp T-Shirts Database</a></li>
                <li><a href="http://www.monster-hoodies.com/?from,jason_diehl">Monster Hoodies</a></li>
                <li><a href="http://www.threadless.com/?streetteam=Chestees">Threadless</a></li>
                <li><a href="http://www.shareasale.com/r.cfm?u=323844&b=45220&m=5993&afftrack=&urllink=www.snorgtees.com">Snorg T-Shirts</a></li>
                <li><a href="http://www.shareasale.com/r.cfm?u=323844&b=121923&m=5108&afftrack=&urllink=www.bustedtees.com">Busted Tees</a></li>
                <li><a href="http://www.shareasale.com/r.cfm?u=323844&b=28657&m=6694&afftrack=&urllink=www.deezteez.com">Deez Teez</a></li>
                <li><a href="http://www.shareasale.com/r.cfm?u=323844&b=107913&m=12558&afftrack=&urllink=www.uneetee.com">Uneetee</a></li>
            </ul>
        </div>
	</div>
	<div class="clearfix"></div>
</div>

