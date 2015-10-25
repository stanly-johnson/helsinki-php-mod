<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the latest elements
 *
 * @package    WordPress
 * @subpackage Helsinki
 */
?>
	<footer id="footer">
		<div class="totop"><a href="#">^</a></div>
		<div class="wrapper">
			<?php
			// Include left footer
			get_template_part( 'parts/widget-area', 'footer-left' );
			// Include middle footer
			get_template_part( 'parts/widget-area', 'footer-middle' );
			// Include right footer
			get_template_part( 'parts/widget-area', 'footer-right' );
			?>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
