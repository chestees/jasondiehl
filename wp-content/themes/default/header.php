<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3725315-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();

</script>
<div class="cnt">
	<div class="header">
		<div class="head1">
			<a class="blogname" href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div>
		<div class="head2">
			<div style="float:left; padding:7px 0 0 37px;"><a class="Vimeo" href="http://www.vimeo.com/jasondiehl" target="_blank"><span class="displace">Vimeo Videos</span></a></div>
            <div style="float:left; padding:7px 0 0 76px;"><a class="Facebook" href="http://www.facebook.com/jason.r.diehl" target="_blank"><span class="displace">Facebook</span></a></div>
            <div style="clear:both;"></div>
            <div style="float:left; padding:14px 0 0 37px;"><a class="Flickr" href="http://www.flickr.com/photos/jason-diehl/" target="_blank"><span class="displace">Flickr Feed</span></a></div>
            <div style="float:left; padding:14px 0 0 76px;"><a class="LinkedIn" href="http://www.linkedin.com/in/jasondiehl" target="_blank"><span class="displace">LinkedIn Profile</span></a></div>
		</div>
	</div>
