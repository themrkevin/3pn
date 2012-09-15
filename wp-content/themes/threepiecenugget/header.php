<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php  bloginfo('template_url'); ?>/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS: implied media="all" -->
  <link rel="stylesheet" href="<?php  bloginfo('template_url'); ?>/style.css?v=2" media="screen">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="<?php  bloginfo('template_url'); ?>/js/libs/modernizr-1.7.min.js"></script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28735097-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
<?php wp_head(); ?>

</head>

<body id="<?php echo get_query_var('name'); ?>" <?php body_class($class); ?>>
<div class="wrapper">
  <div class="container">
    <header>
    	<div class="logo">
        	<a href="/"><img src="<?php  bloginfo('template_url'); ?>/img/logo.png" alt="Three Piece Nugget" /></a>
        </div><!--.3pn-logo-->
		<nav>
        	<ul class="mainnav">
            	<?php wp_nav_menu(
					array(
						'theme_location' => 'main-nav',
						'container' => '',
						'items_wrap'  => '%3$s',	
					)
				); ?>
            </ul>
        </nav>
        <?php get_sidebar('slider'); ?>
    </header>
    <?php if(!is_page( array ('members','video','photos'))) { ?>
    <div class="main clearfix" role="main">
    <?php } else { ?>
    <div class="main clearfix full" role="main">
    <?php } ?>
		<div class="left clearfix">
        	<div class="content">
            
<!-- END header.php -->            