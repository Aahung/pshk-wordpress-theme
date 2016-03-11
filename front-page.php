<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _pshktheme
 */

get_header(); ?>

<div id="content" class="large-8 columns">	
	<div class="text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pshk-homepage.jpg">
	</div>
</div>
<div class="large-4 columns">
	<?php get_sidebar(); ?>
</div>

</div>
<?php get_footer(); ?>
