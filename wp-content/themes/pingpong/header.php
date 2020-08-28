<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pingpong
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!--
		PPD Baidu tongji
	-->
	<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?9cbd3ea553fb7f3ca8c4f14672894c24";
		var s = document.getElementsByTagName("script")[0]; 
		s.parentNode.insertBefore(hm, s);
	})();
	</script>

  <!--
		client GA tracking
	-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-4221199-12"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-4221199-12');
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="pagewidth">
			<div class="site-branding">
				<a class="logo" href="/">
					<img src="/wp-content/themes/pingpong/img/logo.png" alt="logo">
				</a>
			</div><!-- .site-branding -->

			<nav>
					<?php if (is_front_page()): ?>
						<a href="/kiite"> 创新与卓越教育研究院 <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					<?php else: ?>
						<a href="/"> 基尔大学主页 <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					<?php endif ?>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
