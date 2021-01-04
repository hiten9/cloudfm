<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

	<?php if ( has_custom_logo() ) : ?>
		<?php the_custom_logo(); ?>
	<?php endif; ?>
