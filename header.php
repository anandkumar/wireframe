<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head>
<?php wp_head(); // Required by WordPress coding standards. ?>
</head>
<body <?php hybrid_attr( 'body' ); ?>>

	<div id="container">

		<header <?php hybrid_attr( 'header' ); ?>>

			<div <?php hybrid_attr( 'branding' ); ?>>

					<?php if ( get_custom_logo() ) : // If native WordPress cutom logo defined. ?>
				
						<?php the_custom_logo(); ?>

					<?php else : // Else show hybrid text site title and description. ?>
					
						<?php hybrid_site_title(); ?>
						<?php hybrid_site_description(); ?>

					<?php endif; // End branding section. ?>
						
			</div><!-- #branding -->

		</header><!-- #header -->