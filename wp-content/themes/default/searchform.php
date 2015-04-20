<div class="buscar">
	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="bus1" />
		<input type="image" src="<? echo get_settings('home')."/wp-content/themes/i-feel-dirty/img/";?>searchbutton.gif" id="searchsubmit" value="Search" class="bus2" />
	</form>
</div>
