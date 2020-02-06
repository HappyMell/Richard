<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post(); 
			the_content()

			?>

			<?php endwhile;


		endif; ?>

<?php
get_footer();

