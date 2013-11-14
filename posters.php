<?php
/*
Template Name: Posters
*/
?>

<?php get_header(); ?>
		<ul id="posters">
		<!-- Live Auction Posters -->

		<?php $custom_query = new WP_Query(array(
			'posts_per_page' => -1,
			'category_name' => 'liveauction',

			));
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<li class="item">
			<img src="http://www.placehold.it/300x450" alt="test poster">
			<p>
				<?php echo get_field('firm'); ?><span class="live">*</span>
				<?php echo '</br>' ?>
				<?php echo get_field('dimensions'); ?>
			</p>
		</li>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

		<!-- Silent Auction Posters -->
		
		<?php $custom_query = new WP_Query(array(
			'posts_per_page' => -1,
			'category_name' => 'poster',
			'category__not_in' => array(9)
			));
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<li class="item">
			<img src="http://www.placehold.it/300x450" alt="test poster">
			<p>
				<?php echo get_field('firm'); ?>
				<?php echo '</br>' ?>
				<?php echo get_field('dimensions'); ?>
			</p>
		</li>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		</ul>
		
		<div id="aboutface"></div>
		
		
		
<?php get_footer(); ?>
