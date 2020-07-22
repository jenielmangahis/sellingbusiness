<<<<<<< HEAD
<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentynineteen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			?>
					<div class="widget-column footer-widget-1">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				<?php
		}
		?>
	</aside><!-- .widget-area -->

<?php endif; ?>
=======
<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentynineteen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			?>
					<div class="widget-column footer-widget-1">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				<?php
		}
		?>
	</aside><!-- .widget-area -->

<?php endif; ?>
>>>>>>> 12e5ad6e736125b89a23634631fb9afa8f10232c
