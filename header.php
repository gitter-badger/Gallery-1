<?php include_once('settings/globals.php'); ?>
<!doctype html>
<html>
	<!-- head -->
	<head>
		<!-- meta -->
		<meta charset="utf-8">
		<meta name="keywords" content="<?php echo $keywords //echo Keywords ?>">
		<meta name="description" content="<?php echo $description //echo Description ?>">
		<meta name="viewport" content="width=width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
		<link rel="icon" type="image/png" href="assets/favicon.png">
		<!-- /meta -->
		<title><?php echo $title //echo Page Title ?></title>
		<!-- styles -->
		<link href="assets/style.css" rel="stylesheet" type="text/css">
		<!-- /styles -->
		<!-- fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
		<link href="assets/fonts/fontello/fontello.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 7]>
		<link href="assets/fonts/fontello/fontello-ie7.css" rel="stylesheet" type="text/css">
		<![endif]-->
		<!-- /fonts -->
		<!-- script -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.touchSwipe.min.js"></script>
		<!-- /scripts -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
			<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
		<![endif]-->
		<?php foreach(glob('galleries/' . $page_name . '/*.*') as $filename) { echo '<meta property="og:image" content="' . $filename . '" />'."\n"; } ?>
	</head>
	<!-- /head -->
	<!-- body -->
	<body class="<?php echo $page_name //echo body class ?>">
		<?php if ( $fullscreen_button == true ): ?>
		<!-- Toggle Button -->
		<div class="togglebutton"></div>
		<!-- /Toggle Button -->
		<?php endif; // Toggle Fullscreen Button ?>
		<?php if ( $gallery_navigation == true ): ?>
		<!-- Gallery Navigation -->
			<div id="prevbutton"></div>
			<div id="nextbutton"></div>
		<!-- Gallery Navigation -->
		<?php endif; // Gallery Navigation ?>
			<!-- header -->
			<header id="header" class="clearfix">
				<!-- #siteinfo -->
				<div id="siteinfo">
					<!-- #logo -->
					<h1 id="logo"><?php echo $title ?></h1>
					<!-- /#logo -->
					<h2 id="description"><?php echo $description ?></h2>
				</div>
				<!-- /#siteinfo -->
				<!-- #sitenav -->
				<div id="sitenav">
					<!-- nav -->
					<nav id="nav">
						<!-- #navigation -->
						<ul id="navigation">
							<?php 
								foreach ($pages as $page) {
									if ( $page == $page_name ){
										echo '<li class="active" id="' .$page. '">' .$page. '</li>';
									}else{
										echo '<a href="' .$page. '"><li id="' .$page. '">' . $page. '</li></a>';
								}}
							?>
						</ul>
						<!-- /#navigation -->
					</nav>
					<!-- /nav -->
				</div>
				<!-- /#sitenav -->
			</header>
			<!-- /header -->
			<!-- .pagewrapper -->
			<div id="pagewrapper">
				<!-- .contentwrapper -->
				<div id="contentwrapper">