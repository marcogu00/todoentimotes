<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name') ?></title>
	<script src="http://ajax.googleapis.com/ajax/libs/2.0.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	<script src="<?php bloginfo('stylesheet_directory');?>/js/bootstrap.js"> </script>
</head>
<body>
	<header class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
				Logo
			</div>
			<div class="col-xs-12 col-sm-6 col-md-8 col lg-8">
				<?php get_searchform(); ?>
			</div>
			<nav class="menu-top">
				<ul>
					<li><a href=""></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section>	