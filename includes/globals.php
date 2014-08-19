<?php
	//////////////////////////////
	// Site Title
	/////////////////////////////
	$title = "Site Title"; // Site Title
	$site_tagline = "Tagline"; // Site Tagline
	$hide_site_tagline = false; // Hide/Show site tagline (true, false; default = false)
	
	//////////////////////////////
	// Menu Items
	// file = page filename
	// title = menu item title
	/////////////////////////////
	$pages = array(
		array(
			'file' => 'home',
			'title' => 'Home'
		),
		array(
			'file' => 'gallery',
			'title' => 'Gallery'
		),
		array(
			'file' => 'single',
			'title' => 'Single image'
		)
	);
	
	//////////////////////////////
	// Gallery
	/////////////////////////////
	$slide_duration = '5000'; // Slider slide duration
	$fade_duration = '750'; // Slider fade duration
	
	//////////////////////////////
	// Scrollbar
	/////////////////////////////
	$bar_color = '#000'; // Scrollbar Color
	$bar_border = '#000'; // Scrollbar Border
	$bar_opacity = '.5'; // Scrollbar Opacity (0 - 1)
	$bar_width = '8'; // Scrollbar Width
	$bar_speed = '50'; // Scrollbar Speed
	
	//////////////////////////////
	// Misc
	/////////////////////////////
	$preloader_icon = true; // Show preloader (true, false)
?>