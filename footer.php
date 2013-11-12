		</div> <!-- End .content-wrapper -->
		
		<footer>
			<p>&copy; <?php echo date("Y"); ?> Arizona State University. All Rights Reserved.</p>
		</footer>

	</div> <!-- Close .wrapper !-->

<?php wp_enqueue_script( 'js-combo', get_bloginfo( 'template_directory' ) . '/js/script-min.js', array('jquery')); ?>

<?php wp_footer(); ?><!-- required don't remove -->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js?ver=3.5.1'></script>
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/masonry.min.js"></script>
<script type='text/javascript' src='http://masonry.desandro.com/components/classie/classie.js'></script>
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/jquery.anystretch.min.js"></script>
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>

<script type="text/javascript">
	window.onload = function() {
 		 var wall = new Masonry( document.getElementById('brick'), {
 		 	columnWidth: 118,
    		gutterWidth: 40,
    		isFitWidth: false
 		 });
 		 
	}; 

	docReady( function() {

  var container = document.querySelector('.masonry');
  var msnry = new Masonry( container, {
    columnWidth: 60
  });

  eventie.bind( container, 'click', function( event ) {
    // don't proceed if item content was not clicked on
    var target = event.target;
    if ( !classie.has( target, 'item' )  ) {
      return;
    }
    var itemElem = target.parentNode;
    classie.toggleClass( itemElem, 'is-expanded' );

    msnry.layout();
  });
  
});
</script>



</body>
</html>
