<?php
/*
Template Name: Clocks
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
		<section class="socialwrap">
		<div id="brick" class="masonry">
			<p>Coming Soon...</p>
		<?php $custom_query = new WP_Query('posts_per_page=-1&category_name=clock');
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<article class="item"><h1><?php the_post_thumbnail(); ?></h1>
		<?php the_content(); ?>
		</article>

		<?php endwhile; ?>
		</div>
		</section>
		
		<div id="aboutface"></div>
		
		
		
<?php get_footer(); ?>
