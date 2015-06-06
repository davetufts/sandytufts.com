<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $this->get('title') ?></title>
	<?php 
	if  ($this->get('description')) { 
		?>
		<meta name="description" content="<?php echo $this->get('description'); ?>" />
		<?php 
	} 
	if  ($this->get('header_content')) {
		echo $this->get('header_content');
	}
	?>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<script src="/js/libs/modernizr-2.5.3.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body class="<?= $this->get('section') ?>">


<header class="group">
	<section>
		<p id="logo">
			<a href="/"><img src="/img/template/sandytufts_doula_logo.png" alt="Sandy Tufts: Birth Doula" /></a>
		</p>
		<nav class="utility">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/resources/">Resources</a></li>
				<li class="facebook"><a href="http://www.facebook.com/SandyTuftsBirthDoula"><img src="/img/icons/f_logo.png" alt="Find me on Facebook" /></a></li>
			</ul>
		</nav>
	
		<nav class="primary">
			<ul>
				<?php
					$a = ' class="active"';
				?>
				<li id="nav-home"<?php          echo ($this->get('section') == 'home')          ? $a : ''; ?>><a href="/">Home</a></li>
				<li id="nav-about"<?php         echo ($this->get('section') == 'about')         ? $a : ''; ?>><a href="/about/">About Me</a></li>
				<li id="nav-doula"<?php         echo ($this->get('section') == 'doula')         ? $a : ''; ?>><a href="/doula_services/">Doula Services</a></li>
				<li id="nav-placenta"<?php      echo ($this->get('section') == 'placenta')      ? $a : ''; ?>><a href="/placenta_encapsulation/">Placenta Encapsulation</a></li>
				<li id="nav-breastfeeding"<?php echo ($this->get('section') == 'breastfeeding') ? $a : ''; ?>><a href="/breastfeeding/">Breastfeeding Support</a></li>
				<li id="nav-photos"<?php        echo ($this->get('section') == 'photos')        ? $a : ''; ?>><a href="/photos/">Photos</a></li>
				<li id="nav-contact"<?php       echo ($this->get('section') == 'contact')       ? $a : ''; ?>><a href="/contact/">Contact</a></li>
			</ul>
		</nav>
	</section>
</header>


<div class="wrapper">
<div role="torso" class="group">


