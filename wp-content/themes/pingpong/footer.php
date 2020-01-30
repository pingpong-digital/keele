<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pingpong
 */

?>

	</div><!-- #content -->
	<section class="form">
		<div class="pagewidth">
			<div class="container">
				<h2>联系我们</h2>
				<div class="text">大家好，我是Jennifer翟，基尔大学中国代表。关于在基尔大学学习的方方面面，你都可以通过以下联系方式联系我咨询和了解。<br>
				电话：+86 15710071811<br>
电邮：<a style="color: #fff" href="mailto:j.zhai@keele.ac.uk">j.zhai@keele.ac.uk</a></div>
				<div class="form-container">
					<?php echo do_shortcode('[contact-form-7 id="28" title="main-form"]'); ?>
				</div>
			</div>
		</div>
	</section>

	<footer id="colophon" class="site-footer">
		<div class="pagewidth">
			<div class="part-1">
				<p>© University of Keele 2019 版权所有</p>
				<img src="/wp-content/uploads/tef-gold.png" alt="TEF Gold" class="tef">
			</div>
			<div class="part-2">
				<b>关注我们</b> 微博  微信
			</div>
			<div class="part-3">
				基尔大学 <br>
				Staffordshire, UK, <br> 
				ST5 5BG <br>
			</div>
			<div class="part-4">
				<img src="/wp-content/uploads/map.png" width=156 style="visibility: hidden;" >
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
