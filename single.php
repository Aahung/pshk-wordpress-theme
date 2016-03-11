<?php
/**
 * The template for displaying all single posts.
 *
 * @package _pshktheme
 */

get_header(); ?>

<div id="content" class="large-8 columns">	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<div class="large-4 columns">
	<?php get_sidebar(); ?>
</div>

</div>
<?php get_footer(); ?>
