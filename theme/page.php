<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gnws
 */

get_header();
?>

<main>
	<div class="container">
		<?php the_content() ?>

	</div>
</main>

<?php
get_footer();
