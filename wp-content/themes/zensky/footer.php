<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "body-content-wrapper" div and all content after.
 *
 */
?>
			<a href="#" class="scrollup"></a>

			<footer id="ftr-main">

				<div id="footer-content-wrapper">

					<?php get_sidebar( 'footer' ); ?>

					<div class="clear">
					</div>

					<div id="copyright">
						<p>
							<?php
							 		$footerText = get_theme_mod('zensky_footer_copyright', null);

									if ( !empty( $footerText ) ) :

										echo esc_html( $footerText ) . ' | ';	

									endif;
							?>

						 	<a href="<?php echo esc_url( 'https://zentemplates.com/product/zensky' ); ?>"
						 		title="<?php esc_attr_e( 'ZenSky Theme', 'zensky' ); ?>">
								<?php esc_html_e('ZenSky Theme', 'zensky'); ?>
							</a> 
							<?php
								/* translators: %s: WordPress name */
								printf( __( 'Powered by %s', 'zensky' ), 'WordPress' ); ?>
						</p>
					</div><!-- #copyright -->
				</div><!-- #footer-content-wrapper -->
			</footer><!-- #ftr-main -->

		</div><!-- #body-content-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>