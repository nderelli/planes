

<?php get_header(); ?>
	<article>
		<header>
			<h1 class="hidden">Posters</h1>
			<p>This is text that describes the section. This is hard-coded, be on the lookout for a way to build this dynamically. It might be worth it here to link to a complete list of contributors, or a total count of the posters.</p>
		</header>
		<ul id="posters">
			<?php $allPosters = array(
				'post_type' => 'poster',
				'posts_per_page' => '-1'

			); ?>
			<?php $poster_query = new WP_Query($allPosters);

		    while($poster_query->have_posts()) : $poster_query->the_post(); ?>
		    <li>
		    	<img src="//placehold.it/400x600" alt="placeholder">
		    	<div class="minutae">
		    		<h2><?php echo get_field('designer'); ?></h2>
		    		<p><?php echo get_field('dimensions'); ?></p>
		    	</div>
		    </li>
		    <?php endwhile; ?>

	    </ul>
    </article>
    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
