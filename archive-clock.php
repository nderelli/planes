<?php get_header(); ?>
	<article>
		<header>
			<h1 class="hidden">Posters</h1>
			<p>This is text that describes the section. This is hard-coded, be on the lookout for a way to build this dynamically. It might be worth it here to link to a complete list of contributors, or a total count of the posters.</p>
		</header>
		<ul id="clocks">
			<?php $allClocks = array(
				'post_type' => 'clock',
				'posts_per_page' => '-1'

			); ?>
			<?php $clock_query = new WP_Query($allClocks);
		    while($clock_query->have_posts()) : $clock_query->the_post(); ?>

		    <li>
		    	<div class="circle"></div>
		    	<aside class="minutae">
		    		<p><?php echo get_field('designer'); ?></p>
		    		<p><?php echo get_field('title'); ?></p>
		    	</aside>
		    </li>
		    <?php endwhile; ?>

	    </ul>
	</article>
    <?php wp_reset_postdata(); ?>
<?php get_footer(); ?>