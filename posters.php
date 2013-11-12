<?php
/*
Template Name: Posters
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
		<section class="socialwrap"
		<div id="brick" class="masonry">
		<?php $custom_query = new WP_Query('posts_per_page=-1&category_name=poster');
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<article class="item masonry-brick"><h1><?php the_post_thumbnail(); ?></h1>
		<?php the_content(); ?>
		<p><?php echo get_field('title'); ?><?php echo get_field('firm'); ?><?php echo '</br>' ?><?php echo get_field('dimensions'); ?></p>
		</article>
		<?php endwhile; ?>
		</div>
		</section>
		
		<div id="aboutface"></div>
		
		
		
<?php get_footer(); ?>
