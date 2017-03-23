<?php
/**
 * @package    wireframe
 * @author     Anand Kumar <anand@anandkumar.net>
 * @copyright  Copyright (c) 2016 - 2017, Anand Kumar
 * @link       http://webelements.io/themes/wireframe/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
 
get_header(); // Loads the header.php template. ?>

<main <?php hybrid_attr( 'content' ); ?>>

	<?php if ( have_posts() ) : // Checks if any posts were found. ?>

		<?php while ( have_posts() ) : // Begins the loop through found posts. ?>

			<?php the_post(); // Loads the post data. ?>

			<?php hybrid_get_content_template(); // Loads the content/*.php template. ?>

			<?php if ( is_singular() ) : // If viewing singular. ?>

				<?php comments_template( '', true ); // Loads the comments.php template. ?>

			<?php endif; // End check for single post. ?>

		<?php endwhile; // End found posts loop. ?>

	<?php endif; // End check for posts. ?>
	
	<?php if ( is_singular( 'post' ) ) : // If viewing a single post page. ?>

	<div class="loop-nav">
		<?php previous_post_link( '<div class="prev">' . __( 'Previous Post: %link', 'wireframe' ) . '</div>', '%title' ); ?>
		<?php next_post_link(     '<div class="next">' . __( 'Next Post: %link',     'wireframe' ) . '</div>', '%title' ); ?>
	</div><!-- .loop-nav -->

	<?php elseif ( is_home() || is_archive() || is_search() ) : // If viewing the blog, an archive, or search results. ?>

		<?php the_posts_pagination(
			array(
				'prev_text' => _x( '&larr; Previous', 'posts navigation', 'wireframe' ),
				'next_text' => _x( 'Next &rarr;',     'posts navigation', 'wireframe' )
			)
		); ?>

	<?php endif; // End check for type of page being viewed. ?>

</main>

<?php get_footer(); // Loads the footer.php template.