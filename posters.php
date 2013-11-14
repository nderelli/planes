<?php
/**
 * Template Name: Posters
 *
 * Print posts of a Custom Post Type.
 */
?>

<?php get_header(); ?>
	<?php $args = array(
		'post_type' => 'vcd_poster',
		'posts_per_page' => '-1'

	); ?>
	<?php $custom_query = new WP_Query($args);

    while($custom_query->have_posts()) : $custom_query->the_post(); ?>
    <article>
            <p>
            FUCK YOU TWO TIMES
            	<?php echo the_title(); ?>
                <?php echo get_field('designer'); ?>
                <?php '</br>' ?>
                <?php echo get_field('dimensions'); ?>
            </p>
    </article>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
