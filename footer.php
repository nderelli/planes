		</div> <!-- End .inner -->
    </section> <!-- End .content-wrapper -->
		
		<footer>
      <div class="inner">
  			<p>&copy; <?php echo date("Y"); ?> Arizona State University. All Rights Reserved.</p>
      </div>
		</footer>

	</div> <!-- Close .wrapper !-->

<?php wp_enqueue_script( 'js-combo', get_bloginfo( 'template_directory' ) . '/js/script-min.js', array('jquery')); ?>

<?php wp_footer(); ?><!-- required don't remove -->
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/masonry.min.js"></script>
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/jquery.anystretch.min.js"></script>
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>





</body>
</html>
