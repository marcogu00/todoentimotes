<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/jquery.bxslider/jquery.bxslider.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/jquery.bxslider/jquery.bxslider.css">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/animate.css">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script>
		$('.home-slider').bxSlider({
		  mode: 'fade',
		  captions: true
		});
	</script>
	<script>
	$(document).ready(function(){
	    $('li.menu-item-has-children').addClass('dropdown');
	    $('ul.sub-menu').addClass('dropdown-menu');
		$('li.menu-item-has-children a').addClass('dropdown-toggle');
		$('li.menu-item-has-children a').attr('data-toggle','dropdown');
		$('ul.sub-menu a').addClass('sub-elemento');
		$('a.sub-elemento').removeAttr('data-toggle');
		$('.header-responsive').hide();
	});
	</script>
	<script>
	$(window).scroll(function(){
		var height = $('.header-desktop').height() - 50;
        if ($(window).scrollTop() > height) {
        	$('.header-responsive').fadeIn();
        } else {
    	    $('.header-responsive').fadeOut();
        }
    });
	</script>
	<script>
		$("a.galeria").fancybox();
	</script>
	<script>
		$(document).ready(function(){
			var alto = $(".mapa").width();
			$("#map-canvas").css("height",alto);
		});
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53201657-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
	<header class="container hidden-xs header-desktop">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logoTT.png" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive">
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 text-right search">
				<?php custom_search_form(); ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				<nav class="menu-top">
					<?php wp_nav_menu(
						array(
						'container' => false,
						'items_wrap' => '<ul>%3$s</ul>',
						'theme_location' => 'menutop'));
					?>
				</nav>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<nav class="navbar navbar-default cat-menu" role="navigation">
						 <div class="collapse navbar-collapse">
							<?php wp_nav_menu(
								array(
								'container' => false,
								'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
								'theme_location' => 'menuprincipal'));
							?>
						</div>
					</nav>
				</div>				
			</div>				
		</div>
	</header>
	<header class="header-responsive navbar-fixed-top">
		<nav class="container nabvar navbar-default responsive-menu" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</button>
				<a href="<?php bloginfo('url'); ?>" class="navbar-brand">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logoTT.png" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive">
				</a>
			</div>
			<div class="collapse navbar-collapse navbar-responsive-collapse">
				<?php wp_nav_menu(
					array(
					'container' => false,
					'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
					'theme_location' => 'menuresponsive'));
				?>
			</div>
		</nav>		
	</header>
	<section class="container main">
		<div class="row">
		
