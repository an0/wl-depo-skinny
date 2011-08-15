<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if (is_single() || is_page() || is_archive()) { bloginfo('name'); echo(' - '); wp_title('',true); } else { bloginfo('name'); echo(' - '); bloginfo('description'); } ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div class="container">
	<?php if (!is_single() && !is_page()) : ?>
	<div class="header">
		<div id="menu">
			<ul>
				<li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>"><a href="<?php bloginfo('url'); ?>"><?php _e('Home') ?></a></li>
				<?php wp_list_pages('title_li=&depth=1&exclude=2'); ?>
			</ul>
		</div>
	
	  <h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a> 
		<span><?php bloginfo('description'); ?></span></h1>
	</div><!-- end header -->
	<?php endif; ?>