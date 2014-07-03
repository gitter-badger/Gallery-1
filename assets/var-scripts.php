<script type="text/javascript">
	///////////////////////////////
	// Gallery
	///////////////////////////////
	$.backstretch([ <?php foreach(glob('galleries/' . $gallery . '/*.{gif,jpg,png}', GLOB_BRACE) as $filename){ echo '"' . $filename . '",'."\n";} ?> ],
	{duration: <?php echo $slide_duration ?>, fade: <?php echo $fade_duration ?>});
	$("#prevbutton").click(function(x) {
		x.preventDefault();
		$("body").data("backstretch").prev();
	});
	$("#nextbutton").click(function(x) {
		x.preventDefault();
		$("body").data("backstretch").next();
	});

	jQuery(document).ready(function(){
		///////////////////////////////
		// niceScroll
		///////////////////////////////
		$("html").niceScroll({
			cursorcolor: "<?php echo $bar_color ?>",
			cursorborder: "<?php echo $bar_border ?>",
			cursoropacitymax: "<?php echo $bar_opacity ?>",
			cursorwidth: "<?php echo $bar_width ?>",
			scrollspeed: "<?php echo $bar_speed ?>",
		});
	});
</script>
