<aside <?php hybrid_attr( 'sidebar', 'primary' ); ?>>

	<?php if ( is_active_sidebar( 'primary' ) ) : // If the sidebar has widgets. ?>

		<?php dynamic_sidebar( 'primary' ); // Displays the primary sidebar. ?>

	<?php endif; // End widgets check. ?>

</aside><!-- #sidebar-primary -->