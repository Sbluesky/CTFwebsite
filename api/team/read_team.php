<?php
	session_start();
	include ('../../connectdb.php');

//In case, read_event.php file can read by anyone *
//return a data in JSON format
	
	//required header
	//header ("Access-Control-Allow-Origin: *");
	//header ("Content-Type: application/json; charset =UTF-8");

	//include object file
	//include_once '../object/team.php';
	//var_dump($string);
	//print_r ($string[0]['description']); 

?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="fr-FR"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="fr-FR"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="fr-FR"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="fr-FR"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="fr-FR"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head>
	<meta charset="UTF-8">
		<title>Top team ranking</title>
	<meta name="title" content="Top team ranking">
	<meta name="description" content="Top team ranking per year." />
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
<link rel='stylesheet' id='contact-form-7-css'  href='../../css/style3.css' type='text/css' media='all' />
<link rel='stylesheet' id='404-style-css'  href='../../css/style2.css' type='text/css' media='all' />
<link rel='stylesheet' id='styles-style-css'  href='../../css/style1.css' type='text/css' media='all' />
<link rel="canonical" href="https://saintepaix.com/contact/" />
<link rel='shortlink' href='https://saintepaix.com/?p=217' />
	</head>
<body class="page-template page-template-contact page-template-contact-php page page-id-217">

	<div class="overlap-loading"></div>
	<div class="showbox">
		<div class="loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="1" stroke-miterlimit="10"/>
			</svg>
		</div>
	</div>
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
					echo '<li id="menu-item-277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-277"><a href="../../user_action/userpage.php"><span> Your Information </span></a></li>';
					echo '<li id="menu-item-354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-354"><a href="../../team_action/teampage.php"><span> Your Team </span></a></li>';
				}
				else 
				{
					echo '<li id="menu-item-277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-277"><a href="../../user_action/login.php"><span> Log In </span></a></li>';
					echo '<li id="menu-item-354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-354"><a href="../../user_action/regiter.php"><span> Register </span></a></li>';
				}
			?>
			
			<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-274"><a href="../event/read_event.php"><span>Events</span></a></li>
			<li id="menu-item-273" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-273"><a href="read_team.php"><span>Top team ranking</span></a></li>
			</ul>
		</div>		
		</nav>
		<div class="border">
			<div class="border-right"></div>
			<div class="border-left"></div>
			<div class="border-bottom"></div>
			<div class="border-top"></div>
			<a href="../../index.php" title="CTF web" class="logo">
				<img src="../../image/logo1.png" alt="logo" />
			</a>
	<div class="animload">
		<h2 class="title-vertical title-contact"><span>T10 team</span></h2>
		
		<div class="animload">
		<section class="news">
			<div class="container" id="block-menu">
            
			<ul class="list-accordion">
				<li>
					<h3 class="js-toggle-accordion accordion title -bigx2">TOP 10 TEAM IN 2015 <span class="ic-accordion"></span></h3>
					<div style="display:none;" class="accordion-menu accordion-anim">
						<div class="splash-menu">
							
						</div>

						<div id="menu"  class="wrap-content-menu">
							<div class="wrap-menu">

								<div class="spacer-menu hidden-md-down"></div>

								<ul class="list-menu-beer list-menu-beer-title hidden-md-down">

									<li class="col-1">
										<h3 class="title-menu">Top</h3>
									</li>
									<li class="col-2">
										<h3 class="title-menu">Team </h3>
									</li>
									<li class="col-3">
										<h3 class="title-menu">Points</h3>
									</li>
								</ul>

									
				                
				                	<?php
				                		//khởi tạo 
										$url = 'https://ctftime.org/api/v1/top/2015/';
										$stmt = file_get_contents($url);
										if ($stmt)
										{
											http_response_code(200);
											$data_team = json_decode($stmt, true);
											for ($i=0; $i<10; $i++ )
											{
												echo "<ul class='list-menu-beer'>";
												echo "<li class='col-1'><span class='number'>";
												echo $i+1;
												echo "</span></li>";
												echo "<li class='col-2'><h3 class='title-brand-name'>";
												print_r($data_team["2015"][$i]['team_name']);
												echo "</h3></li>";
												echo "<li class='col-3'><h3 class='title-name-beer'>";
												print_r($data_team["2015"][$i]['points']);
												echo "</h3></li>";
												echo "</ul>";
											}
										}
										else
										{
											http_response_code(404);
											echo json_encode(array('message' => "No Team found." ));
											//header('location:../../index.php');
										}
										
									?>
											
				                					                
							</div>
						</div>
					</div>
				</li>
				<li>
					<h3 class="js-toggle-accordion accordion title -bigx2">TOP 10 TEAM IN 2016 <span class="ic-accordion"></span></h3>
					<div style="display:none;" class="accordion-menu accordion-anim">
						<div class="splash-menu">
							
						</div>

						<div id="menu-2"  class="wrap-content-menu">
							<div class="wrap-menu">

								<div class="spacer-menu hidden-md-down"></div>

								<ul class="list-menu-beer list-menu-beer-title hidden-md-down">

									<li class="col-1">
										<h3 class="title-menu">Top</h3>
									</li>
									<li class="col-2">
										<h3 class="title-menu">Team </h3>
									</li>
									<li class="col-3">
										<h3 class="title-menu">Points</h3>
									</li>
								</ul>

									
				                
				                	<?php
				                		//khởi tạo 
										$url = 'https://ctftime.org/api/v1/top/2016/';
												//read top team from api ctftime
										
										$stmt = file_get_contents($url);
										if ($stmt)
										{
											http_response_code(200);
											$data_team = json_decode($stmt, true);
											for ($i=0; $i<10; $i++ )
											{
												echo "<ul class='list-menu-beer'>";
												echo "<li class='col-1'><span class='number'>";
												echo $i+1;
												echo "</span></li>";
												echo "<li class='col-2'><h3 class='title-brand-name'>";
												print_r($data_team["2016"][$i]['team_name']);
												echo "</h3></li>";
												echo "<li class='col-3'><h3 class='title-name-beer'>";
												print_r($data_team["2016"][$i]['points']);
												echo "</h3></li>";
												echo "</ul>";
											}
										}
										else
										{
											http_response_code(404);
											echo json_encode(array('message' => "No Team found." ));
											//header('location:../../index.php');
										}
										
									?>
											
				                					                
							</div>
						</div>
					</div>
				</li>
				<li>
					<h3 class="js-toggle-accordion accordion title -bigx2">TOP 10 TEAM IN 2017 <span class="ic-accordion"></span></h3>
					<div style="display:none;" class="accordion-menu accordion-anim">
						<div class="splash-menu">
							
						</div>

						
							<div class="wrap-menu">

								<div class="spacer-menu hidden-md-down"></div>

								<ul class="list-menu-beer list-menu-beer-title hidden-md-down">

									<li class="col-1">
										<h3 class="title-menu">Top</h3>
									</li>
									<li class="col-2">
										<h3 class="title-menu">Team </h3>
									</li>
									<li class="col-3">
										<h3 class="title-menu">Points</h3>
									</li>
								</ul>

									
				                
				                	<?php
				                		//khởi tạo 
										$url = 'https://ctftime.org/api/v1/top/2017/';
										$stmt = file_get_contents($url);
										if ($stmt)
										{
											http_response_code(200);
											$data_team = json_decode($stmt, true);
											for ($i=0; $i<10; $i++ )
											{
												echo "<ul class='list-menu-beer'>";
												echo "<li class='col-1'><span class='number'>";
												echo $i+1;
												echo "</span></li>";
												echo "<li class='col-2'><h3 class='title-brand-name'>";
												print_r($data_team["2017"][$i]['team_name']);
												echo "</h3></li>";
												echo "<li class='col-3'><h3 class='title-name-beer'>";
												print_r($data_team["2017"][$i]['points']);
												echo "</h3></li>";
												echo "</ul>";
											}
										}
										else
										{
											http_response_code(404);
											echo json_encode(array('message' => "No Team found." ));
											//header('location:../../index.php');
										}
										
									?>
											
				                					                
							</div>
						
					</div>
				</li>
				<li>
					<h3 class="js-toggle-accordion accordion title -bigx2">TOP 10 TEAM IN 2018 <span class="ic-accordion"></span></h3>
					<div style="display:none;" class="accordion-menu accordion-anim">
						<div class="splash-menu">
							
						</div>

						
							<div class="wrap-menu">

								<div class="spacer-menu hidden-md-down"></div>

								<ul class="list-menu-beer list-menu-beer-title hidden-md-down">

									<li class="col-1">
										<h3 class="title-menu">Top</h3>
									</li>
									<li class="col-2">
										<h3 class="title-menu">Team </h3>
									</li>
									<li class="col-3">
										<h3 class="title-menu">Points</h3>
									</li>
								</ul>

									
				                
				                	<?php
				                		//khởi tạo 
										$url = 'https://ctftime.org/api/v1/top/2018/';
										$stmt = file_get_contents($url);
										if ($stmt)
										{
											http_response_code(200);
											$data_team = json_decode($stmt, true);
											for ($i=0; $i<10; $i++ )
											{
												echo "<ul class='list-menu-beer'>";
												echo "<li class='col-1'><span class='number'>";
												echo $i+1;
												echo "</span></li>";
												echo "<li class='col-2'><h3 class='title-brand-name'>";
												print_r($data_team["2018"][$i]['team_name']);
												echo "</h3></li>";
												echo "<li class='col-3'><h3 class='title-name-beer'>";
												print_r($data_team["2018"][$i]['points']);
												echo "</h3></li>";
												echo "</ul>";
											}
										}
										else
										{
											http_response_code(404);
											echo json_encode(array('message' => "No Team found." ));
											//header('location:../../index.php');
										}
										
									?>
											
				                					                
							</div>
						
					</div>
				</li>
			</ul>
        </div>							
		</section>
								
		</div>

		
	</div>
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
			<div class="copyright">
			<p>© Sam 2019</p>
			<div class="made-by">
				<a href="../index.php" target="_blank" class="pl">
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

