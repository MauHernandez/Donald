<?php?><!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/static/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/static/animate.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="<?php echo get_stylesheet_directory_uri();?>/static/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/static/jquery.mThumbnailScroller.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Karla:400,700,400italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<?php wp_head(); 

	contact_form();
	?>

</head>



<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<?php main_menu();?>

		<header id="masthead" class="site-header" role="banner">

		</header><!-- .site-header -->

		 <div style="clear:both"></div>



	<div id="content" class="site-content">

