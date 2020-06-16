
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="fr-FR"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="fr-FR"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="fr-FR"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="fr-FR"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="fr-FR"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head>
	<meta charset="UTF-8">
	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
		<title>Log In</title>
	<meta name="title" content="Log In">
	<meta name="description" content="Prenez donc le temps, ici, chez vous, de prendre le temps." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0 minimal-ui" />
	<link rel="shortcut icon" href="https://saintepaix.com/wp-content/themes/saintepaix/images/icone/favicon.ico">
	<link rel="icon" sizes="16x16 32x32 64x64" href="https://saintepaix.com/wp-content/themes/saintepaix/images/icone/favicon.ico">

	

	<meta name="msapplication-TileColor" content="#f3e5b1">
	<meta name="msapplication-TileImage" content="https://saintepaix.com/wp-content/themes/saintepaix/images/icone/favicon-144.png">
	<meta name="msapplication-config" content="https://saintepaix.com/wp-content/themes/saintepaix/images/icone/browserconfig.xml">

	<!-- Chrome, Firefox OS, Opera and Vivaldi -->
	<meta name="theme-color" content="#f3e5b1">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#f3e5b1">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#f3e5b1">

		<link href='https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>


	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='contact-form-7-css'  href='../css/style3.css' type='text/css' media='all' />
<link rel='stylesheet' id='404-style-css'  href='../css/style2.css' type='text/css' media='all' />
<link rel='stylesheet' id='styles-style-css'  href='../css/style1.css' type='text/css' media='all' />
<link rel="canonical" href="https://saintepaix.com/nos-menus/" />
<link rel='shortlink' href='https://saintepaix.com/?p=352' />
	</head>
<body class="page-template page-template-page-nos-menu page-template-page-nos-menu-php page page-id-352">

	<div class="overlap-loading"></div>
	
	<div id="wrap" class="is-loading">
		
		<button class="js-toggle-nav toggle-nav">
			<div class="toggle-nav-wrap">
				<span class="top"></span>
				<span class="middle"></span>
				<span class="bottom"></span>
			</div>
		</button>
		
		<nav class="main">
		<div class="menu-menu-1-container"><ul id="menu-menu-1" class="menu">
			<?php
				if(isset($_COOKIE['ID']) OR isset($_SESSION['ID']))
				{
					echo '<li id="menu-item-277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-277"><a href="user_action/userpage.php"><span> Your Information </span></a></li>';
					echo '<li id="menu-item-354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-354"><a href="team_action/teampage.php"><span> Your Team </span></a></li>';
				}
				else 
				{
					echo '<li id="menu-item-277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-277"><a href="login.php"><span> Log In </span></a></li>';
					echo '<li id="menu-item-354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-354"><a href="register.php"><span> Register </span></a></li>';
				}
			?>
			
			<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-274"><a href="../api/event/read_event.php"><span>Events</span></a></li>
			<li id="menu-item-273" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-273"><a href="../api/team/read_team.php"><span>Top team ranking</span></a></li>
			</ul>
		</div>		
		</nav>
		
		<div class="border">
			<div class="border-right"></div>
			<div class="border-left"></div>
			<div class="border-bottom"></div>
			<div class="border-top"></div>
			<a href="../index.php" title="CTF web" class="logo">
				<img src="../image/logo1.png" alt="logo" />
			</a>

<div class="animload">
    <h2 class="title-vertical title-menus"><span>your side</span></h2>
	
	<div class="container" id="block-bouffe">

		<div class="row">
			<div class="col-lg-4 col-md-5 hidden-md-down">
				<img src="../image/hacker6.jpg" alt="" class="img-menu-vertical" data-bottom-top="transform: translateY(0%);" data-top-bottom="transform: translateY(10%);">
			</div>

			<div class="col-lg-8">
				<div class="wrap-menu-bouffe">
					<h2 class="title -bigx2 splash">
						Log in
						
					</h2>

					
						
							
								
									<form action="user_login.php" method="post" id="loginform" name="loginform" class="validate form-styled form-newsletter">
									    
											<div class="wrap-form-newsletter">
												<label for="">
													<span class="stroke-form">
														<input type="text" value="" name="username" class="required email" id="username" placeholder="Your username">
														<input type="password" value="" name="passwd" class="required email" id="passwd" placeholder="Password">
														<strong></strong>
													</span>
												</label>
												</br>
												</br>
												<center><button class="btn" type="submit" value="Login" name="login" id="login">LOGIN</button> </center>
											</div>
										
									    
									</form>
								

													
					
				</div>
			</div>
		</div>
	</div>

	<section class="box-punch box-punch-beer" id="home-block-3">
		<div class="container">
			<div class="row row-reverse">
				<div class="col-md-6 -padding-left-0">
					<div class="item-floating">
						<figure data-bottom-top="transform: translateY(-10%);" data-top-bottom="transform: translateY(10%);">
							<img src="../image/hacker3.png" alt="">
							<img src="../image/hacker3.png" alt="" class="animate-img">
							<img src="https://saintepaix.com/wp-content/themes/saintepaix/images/fork_anim-1.svg" alt="" class="animatefork animatefork-1">
							<img src="https://saintepaix.com/wp-content/themes/saintepaix/images/fork_anim-2.svg" alt="" class="animatefork animatefork-2">
							<img src="https://saintepaix.com/wp-content/themes/saintepaix/images/fork_anim-3.svg" alt="" class="animatefork animatefork-3">
							<img src="https://saintepaix.com/wp-content/themes/saintepaix/images/fork_anim-4.svg" alt="" class="animatefork animatefork-4">
							<img src="https://saintepaix.com/wp-content/themes/saintepaix/images/fork_anim-5.svg" alt="" class="animatefork animatefork-5">
						</figure>
					</div>
				</div>
				<div class="col-md-6">
					<article class="box-punch-text -right">
						<div class="text -max" data-bottom-top="transform: translateY(30px);" data-top-bottom="transform: translateY(-10px);">
							<h2 class="title -big splash">
																Register<br> 
							</h2>
							<p>Don't have account? Register as a new user.</p>
							<a href="register.php" class="btn">Register</a>
						</div>
					</article>
				</div>
				<a href="#block-bouffe" class="js-scroll-down scroll-down">
					<span class="icon-arrow-down -hover"></span>
				</a>
				<div class="bg-black -right"></div>
			</div>
		</div>
	</section>


								<footer>
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6">
																<p>
									NT213.K11.ANTT<br/>
									UIT<br/>
									Team 13
								</p>
							</div>
							<div class="col-lg-4 col-md-6">
								<p>
									<a href="tel:0708090797">0708090797</a><br/>
									<a href="mailto:troibansang@gmail.com" class="link">troibansang@gmail.com</a><br/>
									
								</p>
							</div>
							<div class="col-lg-4 col-md-12">
																<div id="mc_embed_signup">
									<form action="//saintepaix.us14.list-manage.com/subscribe/post?u=8d73736c4d9bc128a3350cc9b&amp;id=a0fee0102e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-styled form-newsletter" target="_blank" novalidate>
									    <div id="mc_embed_signup_scroll">
											<div class="wrap-form-newsletter">
												<label for="">
													<span class="stroke-form">
														<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your email">
														<strong></strong>
													</span>
												</label>
												<button class="btn-send" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
													<span class="icon-newsletter"></span>
												</button>
											</div>
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8d73736c4d9bc128a3350cc9b_a0fee0102e" tabindex="-1" value=""></div>
									</form>
								</div>
								<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
								<!--End mc_embed_signup-->
							</div>
						</div>
						
					</div>
				</footer>
				</div>
		</div> 
		<div class="copyright">
			<p>© Sam 2019</p>
			<div class="made-by">
				<a href="http://plcossette.com/" target="_blank" class="pl">
										<span class="link">Milchstraße</span>
					&
				</a>
				<a href="http://mariemd.work/" target="_blank" class="mmd">
					Cosmos
					<span class="link">never stop<sup>BS</sup></span>
				</a>
			</div>
		</div>
	</div> 

<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/jquery-2.2.3.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/tether.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/bootstrap.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/is.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/placeholder.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/jquery.prettySocial.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/map.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/skrollr.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/wow.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/themes/saintepaix/_/js/functions.js?ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/saintepaix.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Merci de confirmer que vous n\u2019\u00eates pas un robot."}},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://saintepaix.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.4'></script>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-76492496-1', 'auto');
	ga('send', 'pageview');

</script>
</body>
</html>
