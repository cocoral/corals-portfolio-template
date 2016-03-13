<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mywptemplate
 */

?>


	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<div class='container'>
			<div class="site-info">
				<p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mywptemplate' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'mywptemplate' ), 'WordPress' ); ?></a></p>
			</div><!-- .site-info -->
			
			<div class='footer-credit'>
				<p>Designed and coded with love by Coral @ Toronto. <?php the_time('Y'); ?>.</p>
			</div>
		</div>

	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
