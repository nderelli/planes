		</div> <!-- End .content-wrapper -->
		
	
	</div> <!-- Close .wrapper !-->

<?php wp_enqueue_script( 'js-combo', get_bloginfo( 'template_directory' ) . '/js/script-min.js', array('jquery')); ?>

<?php wp_footer(); ?><!-- required don't remove -->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js?ver=3.5.1'></script>
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/masonry.min.js"></script>
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/jquery.anystretch.min.js"></script>
<script type="text/javascript"src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script> !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');</script> 

<script type="text/javascript">
	window.onload = function() {
 		 var wall = new Masonry( document.getElementById('brick'), {
 		 	columnWidth: 130,
    		gutterWidth: 25,
    		isFitWidth: false
 		 });
 		 $('.masonry-brick').click(function(){
    	$(this).toggleClass('itemclicked')
   		$(this).toggleClass('item');
    	$.smoothScroll({scrollTarget: $(this) });
	var wall = new Masonry( document.getElementById('brick'), {
	});
}); 

$('img').click(function(){
lol = '.title' + '.' + $(this).attr('class');
		$('.title').hide();
		$(lol).toggle();
});

$('#cover').click(function(){
		$('.masonry-brick').removeClass('itemclicked').addClass('item');
		$('.title').hide();
	var wall = new Masonry( document.getElementById('brick'), {
	});
		$(window).scrollTop(0);
});
	}; 
</script>



</body>
</html>
