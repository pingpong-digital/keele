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

	<footer id="colophon" class="site-footer">
		<div class="pagewidth">
			<div class="part-1">
				<p>© University of Keele 2019 版权所有</p>
				<img src="/wp-content/uploads/tef-gold.png" alt="TEF Gold" class="tef">
			</div>
			<div class="part-2">
				<b>关注我们</b> 
				<div class="social-media">
					<div class="social-media__item social-media__wechat">
						<span class="social-media__name wechat">微信</span>
						<span class="qrcode">
							<img src="/wp-content/uploads/qrcode.jpg" alt="QR Code">
						</span>
					</div>
					<a class="social-media__item social-media__weibo" target="_blank" href="https://weibo.com/2148467014">
						<span class="social-media__name weibo">微博</span>
					</a>
				</div>
				
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
