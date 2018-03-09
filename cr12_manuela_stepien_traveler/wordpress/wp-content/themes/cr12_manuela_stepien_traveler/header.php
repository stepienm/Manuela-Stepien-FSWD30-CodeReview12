<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">


	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php bloginfo('name'); ?></title>

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet"> 
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
  	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

   <?php wp_head(); ?>

</head>
<body>
<div class="blog-masthead">
      <div class="container">

	<nav class="blog-nav">

		<?php
wp_nav_menu( array(
    'theme_location'	=> 'primary',
    'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
	'container'			=> 'div',
	'container_class'	=> 'collapse navbar-collapse',
	'container_id'		=> 'bs-example-navbar-collapse-1',
	'menu_class'		=> 'navbar-nav mr-auto',
    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
    'walker'			=> new WP_Bootstrap_Navwalker()
) );
?>
 	
	</nav>
</div>
</div>

		<div class="container">
			<div class="blog-header">
       			<h1 class="blog-title"><?php bloginfo('name'); ?></h1>
       			<p class="lead blog-description"><?php bloginfo('description'); ?></p>
     		</div>
		</div>
