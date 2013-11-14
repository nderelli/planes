

<?php get_header(); ?>
	<ul id="posters">
		<?php $args = array(
			'post_type' => 'poster',
			'posts_per_page' => '-1'

		); ?>
		<?php $custom_query = new WP_Query($args);

	    while($custom_query->have_posts()) : $custom_query->the_post(); ?>
	    <li>
	    	<img src="//placehold.it/400x600" alt="placeholder">
	    	<aside class="minutae">
	    		<p><?php echo get_field('designer'); ?></p>
	    		<p><?php echo get_field('dimensions'); ?></p>
	    	</aside>
	    </li>
	    <?php endwhile; ?>

    </ul>
    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
