<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
  <title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
  <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>?id=<?php time() ?>" />
  <?php wp_head() // For plugins ?>
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-3725315-3']);
		_gaq.push(['_trackPageview']);
	
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body class="<?php sandbox_body_class() ?>">
<!--[if IE 7]>
  <link rel="stylesheet" type="text/css" href="http://www.jasondiehl.com/wp-content/themes/white_padding/css/ie7style.css" />
<![endif]-->
<div id="wrapper">
	<div id="blog" class="clearfix">
    <div id="header" class="clearfix">
      <h1 id="blog-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
      <div class="social">
      	<a href="http://www.facebook.com/jason.r.diehl" target="_blank" class="fb"><span>Facebook</span></a>
        <a href="http://www.vimeo.com/jasondiehl" target="_blank" class="vimeo"><span>Vimeo Videos</span></a>
        <a href="http://www.linkedin.com/in/jasondiehl" target="_blank" class="linkedin"><span>Connect on LinkedIn</span></a>
      </div>
    </div>
    <!--  #header -->
    <div id="navigation">
      <?php sandbox_globalnav() ?>
    </div>
    <!-- #nav bar -->
