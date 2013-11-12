<?php
/*
Template Name: Location
*/
?>

<?php get_header(); ?>

		<section>
		<div class="flexslider">
			<ul class="slider">
			    <?php $custom_query = new WP_Query('category_name=oldmain');
				while($custom_query->have_posts()) : $custom_query->the_post(); ?>
			    <?php 
			      	$post_thumbnail_id = get_post_thumbnail_id();
			        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
			    	<li <?php echo "style='background-image:url(" . $post_thumbnail_url . ");'"; ?>>
			    	</li>
				<?php endwhile; ?>
			</ul>
		</div>

		<div class="location">
			<h1>Old Main Never Looked So New</h1>
			<div class="row1">
				<img class="alignnone size-full wp-image-1069" alt="old-main-web_small" src="http://postershow2013.asuvcd.org/wp-content/uploads/2013/10/old-main-web_small.jpg" width="529" height="354" />
				<div class="textblock">
					<p>Thursday<br />
					21 November 2013</p>
					<p>Silent Auction: 6:00pm<br />
					Live Auction: 7:30pm</p>
				</div>
			</div>
			<div class="row2">
				<div class="textblock">
					<p>For Directions,<br />
					Click <a title="here" href="https://maps.google.com/maps?q=Old+Main+at+Arizona+State+University,+400+East+Tyler+Mall,+Tempe,+AZ&amp;hl=en&amp;ll=33.420589,-111.933957&amp;spn=0.006331,0.011137&amp;sll=33.391922,-111.928101&amp;sspn=0.20266,0.353279&amp;oq=old+main+400+east+&amp;hnear=Old+Main+at+Arizona+State+University,+400+E+Tyler+Mall,+Tempe,+Arizona+85281&amp;t=m&amp;z=17" target="_blank">Here</a></p>
					<p>Old Main, Tempe Campus<br />
					400 East Tyler Mall</p>
				</div>
				<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Old+Main+at+Arizona+State+University,+400+East+Tyler+Mall,+Tempe,+AZ&amp;aq=0&amp;oq=old+main+400+east+&amp;sll=33.391922,-111.928101&amp;sspn=0.20266,0.353279&amp;ie=UTF8&amp;hq=&amp;hnear=Old+Main+at+Arizona+State+University,+400+E+Tyler+Mall,+Tempe,+Arizona+85281&amp;t=m&amp;ll=33.420553,-111.934032&amp;spn=0.025074,0.036564&amp;z=14&amp;iwloc=A&amp;output=embed" height="354" width="529" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
			</div>
		</div>
		</section>

<?php get_footer(); ?>