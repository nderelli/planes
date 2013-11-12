<?php get_header(); ?>

		<section>
		<div class="flexslider">
			<ul class="slides">
			    <?php $custom_query = new WP_Query('category_name=wall');
				while($custom_query->have_posts()) : $custom_query->the_post(); ?>
			    <?php 
			      	$post_thumbnail_id = get_post_thumbnail_id();
			        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
			    	<li <?php echo "style='background-image:url(" . $post_thumbnail_url . ");'"; ?>>
			    	</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div class="left">
			<p>
				Thursday<br />
				21 November 2013
			</p>
		</div>
		<div class="middle">
			<p>
				Silent Auction: 6:00pm<br />
				Live Auction: 7:30pm
			</p>
			<p>
				ASU Old Main<br />
				400 E. Tyler Mall<br />
				Tempe, AZ 85281
			</p>
		</div>
		<div class="right">
			<p>
			The Sixth Annual Visual <br />
			Communication Design Poster <br />
			and Clock Auction <br />
			</p>
			<p>
			Proceeds Benefit ASU’s<br />
			Graphic Design Senior Show<br />
			to be held May 2014<br />
			</p>
		</div>
		<a href="<?php bloginfo('url'); ?>/posters">
			<button class="button button-black">Cover Your Walls</button>
		</a>		
		</section>
<?php
if ( is_page() ) :
	get_footer( 'home' );
else :
	get_footer();
endif;
?>
				