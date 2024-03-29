<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>WordPress Plugin Boilerplate Generator | Ready to use WordPress Plugin Boilerplate</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="WordPress Plugin Boilerplate Generator, Stop wasting time searching and replacing text strings manually" />
		<meta name="keywords" content="WordPress Plugin Boilerplate Generator" />
		<meta property="og:url" content="https://tabernawp.com/cl-wordpress-plugin-boilerplate-generator/" />
		<meta property="og:title" content="WordPress Plugin Boilerplate Generator | Ready to use WordPress Plugin Boilerplate" />
		<meta property="og:image" content="https://tabernawp.com/cl-wordpress-plugin-boilerplate-generator/images/wppb-share.jpg" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="./js/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
		<script src="./js/skel.min.js"></script>
		<script src="./js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="./css/skel.css" />
			<link rel="stylesheet" href="./css/style.css" />
			<link rel="stylesheet" href="./css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">
				<span class="logo icon fa-plug"></span>
				<h1>WordPress Plugin Boilerplate<br> Generator</h1>
				<h2>Based on the <a href="http://wppb.io/" title="WordPress Plugin Boilerplate by Tom McFarlin">WPPB by Tom McFarlin</a></h2>
				<h3>Now maintained by <a href="https://twitter.com/devinvinson">Devin Vinson</a></h3>
				<p>Stop wasting time searching and replacing text strings manually.</p>

			</div>

		<!-- Main -->
			<div id="main">

				<header class="major container 75%">
					<h2>You only need to type your plugin
					<br />
					details in the form below
					<br />
					and a zip file will be generated</h2>
				</header>

				<div class="box container">
					<header>
						<h2>Create your amazing wppb based plugin</h2>
					</header>
					<section>
						<form method="POST" action="/" id="wppb-form">
							<div class="row">
								<div class="6u 12u(3)">
									<label for="name">Plugin Name</label>
									<input class="text" type="text" name="name" id="name" value="" placeholder="Your amazing plugin" data-validation="required" />
								</div>
								<div class="6u 12u(3)">
									<label for="slug">Plugin Slug</label>
									<input class="text" type="text" name="slug" id="slug" value="" placeholder="your-amazing-plugin" data-validation="required" />
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<label for="uri">Plugin URI</label>
									<input class="text" type="text" name="uri" id="uri" value="" placeholder="Your Plugin URI" data-validation="required" data-validation="url" />
								</div>
							</div>
							<div class="row">
								<div class="6u 12u(3)">
									<label for="author-name">Author Name</label>
									<input class="text" type="text" name="author_name" id="author-name" value="" placeholder="Your name" data-validation="required" />
								</div>
								<div class="6u 12u(3)">
									<label for="author-email">Author Email</label>
									<input class="text" type="email" name="author_email" id="author-email" value="" placeholder="your@email.tld" data-validation="required" data-validation="email"/>
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<label for="author-uri">Author URI</label>
									<input class="text" type="text" name="author_uri" id="author-uri" value="" placeholder="https://yoursite.tld" data-validation="required" data-validation="url" />
								</div>
							</div>
							<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" value="Build" /></li>
										<li><input type="reset" value="Reset" class="alt" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container 75%">
					<ul class="icons">
						<li><a href="https://twitter.com/CarlosLongarela" class="icon fa-twitter" title="Follow me"><span class="label">Twitter</span></a></li>
						<li><a href="https://github.com/CarlosLongarela" class="icon fa-github" title="Fork this site"><span class="label">Github</span></a></li>
						<li><a href="https://bit.ly/clcodeable" class="icon fa-infinity" title="Hire me in Codeable"><span class="label">Codeable</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; 2019 <a href="https://tabernawp.com/">Carlos Longarela</a>.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</div>

			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74049753-4"></script>
			<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-74049753-4');
			</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=tmeister" async="async"></script>
	</body>
</html>