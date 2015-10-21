<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tabula_Rasa_owlandpeaock
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tabula-rasa-owlandpeaock' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'tabula-rasa-owlandpeaock' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'tabula-rasa-owlandpeaock' ), 'tabula-rasa-owlandpeaock', '<a href="http://www.third-law.com/" rel="designer">Third Law Web Design</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
