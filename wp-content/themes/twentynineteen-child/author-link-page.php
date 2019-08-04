<?php
/*
Template name: Author Link Page
Template Post Type: post, page, product
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				//THIS BIT IS CUSTOM!
				?>

				<div class="author-more-link">
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
						More by our author, <?php the_author(); ?>
					</a>
				</div>

				<?php
				//END CUSTOM BIT!

				// Includethe page content template
				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
