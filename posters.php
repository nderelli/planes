<?php
/*
Template Name: Posters
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
		<section class="socialwrap"
		<div id="brick" class="masonry">

		<!-- Live Auction Posters -->

		<?php $custom_query = new WP_Query(array(
			'posts_per_page' => -1,
			'category_name' => 'liveauction',

			));
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<article class="item masonry-brick">
			<?php the_content(); ?>
			<p>
				<?php echo get_field('firm'); ?><span class="live">*</span>
				<?php echo '</br>' ?>
				<?php echo get_field('dimensions'); ?>
			</p>
		</article>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<!-- Silent Auction Posters -->
		
		<?php $custom_query = new WP_Query(array(
			'posts_per_page' => -1,
			'category_name' => 'poster',
			'category__not_in' => array(9)
			));
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<article class="item masonry-brick">
			<?php the_content(); ?>
			<p>
				<?php echo get_field('firm'); ?>
				<?php echo '</br>' ?>
				<?php echo get_field('dimensions'); ?>
			</p>
		</article>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		</div>
		</section>
		
		<div id="aboutface"></div>
		
		
		
<?php get_footer(); ?>
