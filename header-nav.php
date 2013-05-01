<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <title><?php echo $Page->getPageTitle(), $Page->getSiteTitle(); ?></title>
    <meta name="description" content="See Katy Cook makes and sells homemade ice cream from local and regional ingredients in Michigan.">
    <meta name="viewport" content="width=device-width">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/modernizr.min.js"></script>
</head>

<body class="<?php echo $Page->getFileName(); ?>">
<!--[if lte IE 7]>
	<p class="browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<!--[if lte IE 8]>
	<noscript>
		<p class="browser-alert">You have javascript disabled. Some elements may not appear correctly on this page.</p>
	</noscript>
<![endif]-->
<div class="wrapper">
	<header class="header header--main" role="banner">
		<div class="logo"><a class="logo__link" href="/">See Katy Cook homemade ice cream</a></div>
	</header>
	<div class="sub-wrapper">
		<nav class="nav nav--main" role="navigation">
			<?php echo $Page->getNavigation(); ?>
		</nav>
		<section class="main-content section" role="main">
