<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	</div><!-- #page -->
	<div class="footer">
	<div class="main">
			<?php wp_nav_menu( array( 'theme_location' => 'primary','menu' =>'menufooter', 'menu_class' => 'menufooter' ) ); ?>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>