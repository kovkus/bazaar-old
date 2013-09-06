<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Bazaar Košice</title>
	<meta name="description" content="pizza,obedy,menu,kosice">
	<meta name="author" content="David Kovac">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/normalize.css" media="screen" />
	<link rel="stylesheet" href="css/skeleton.css" media="screen" />
	<link rel="stylesheet" href="css/base.css" media="screen" />
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<link rel="stylesheet" href="css/superfish.css" media="screen" />
	<link rel="stylesheet" href="css/prettyPhoto.css" media="screen" />
	<link rel="stylesheet" href="css/flexslider.css" media="screen" />
	<link rel="stylesheet" href="css/reveal.css" media="screen" />
	<link rel="stylesheet" href="css/datePicker.css" media="screen" />
	<link rel="stylesheet" href="css/responsive.css" media="screen" />
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie/ie8.css" media="screen" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">	
</head>

<body>
	<div id="wrapper">
		<header id="header" class="header">
			<div class="container clearfix">
				<div class="grid_12">
					<a href="#menu" class="menu-link">Menu</a>
					<nav id="menu" class="primary clearfix" role="navigation">
						<ul class="sf-menu">
							<li><a href="index.php">Domov</a></li>
							<li><a href="menu-large.html">Our menu</a>
								<ul class="left-sub">
									<li><a href="menu-small.html">Small Thumbs Menu</a></li>
									<li><a href="menu-large.html">Large Thumbs Menu</a></li>
									<li><a href="menu-grid.html">Grid Menu</a></li>
									<li><a href="menu-list.html">List Menu</a></li>
								</ul>
							</li>
							<li class="midsection"><a href="our-story.html">About us</a>
								<ul class="left-sub">
									<li><a href="our-story.html">Our story</a></li>
									<li><a href="our-team.html">Our team</a></li>
									<li><a href="reviews.html">Reviews</a></li>
									<li><a href="gift-card.html">Get a gift card</a></li>
									<li><a href="gift-dinner.html">Gift a dinner</a></li>
								</ul>
							</li>
							<li><a href="latest-events.html">Events</a>
								<ul>
									<li><a href="latest-events.html">Latest events</a></li>
									<li><a href="upcoming-events.html">Upcoming events</a></li>
									<li><a href="order-catering.html">Catering</a></li>
									<li><a href="reservation.html">Reservation</a></li>
									<li><a href="single-event.html">Single event</a></li>
								</ul>
							</li>
							<li><a href="gallery.html">Galéria</a></li>
							<li><a href="contacts.html">Kontakt</a></li>
						</ul>
					</nav>
					<div id="logo">
						<a href="index.html"><img src="images/logo.png" width="136" height="140"/></a>
					</div>
					<div id="slogan" class="slogan">
						<div class="slogan-inner">PIZZERIA & RESTAURANT</div>
					</div>
				</div>
			</div>
			
		</header>
    <?php
     if (!$_GET['page']) {
      include "pages/intro.php";
     }
     else {
     include "pages/".$_GET['page'];
     }
    ?>
			<!-- Banners -->
			<div class="banners-wrap">
				<div class="container clearfix">
					<div class="grid_6">
						
						<!-- Gift a Card -->
						<div class="action-btn-holder block action-btn-holder__banner action-btn-holder__left">
							<a href="gift-card.html" class="action-btn block">
								<span class="txt-wrapper">
									GEt a <span class="highlight">gift card</span>
									<!-- Stars (Default) -->
									<span class="stars-default">
										<i class="star star__first"></i>
										<i class="star star__second star__big"></i>
										<i class="star star__third"></i>
									</span>
									<!-- Stars (Default) / End -->
									<!-- Stars (Active) -->
									<span class="stars-active">
										<i class="star star__first"></i>
										<i class="star star__second star__big"></i>
										<i class="star star__third"></i>
									</span>
									<!-- Stars (Active) / End -->
								</span>
								<i class="ico ico-cards"></i>
								<i class="ico ico-cards ico-cards__alt"></i>
							</a>
							<span class="action-btn-back"></span>
						</div>
						<!-- Gift a Card / End -->
						
					</div>
					<div class="grid_6">
						
						<!-- Gift a Dinner -->
						<div class="action-btn-holder block action-btn-holder__banner action-btn-holder__right">
							<a href="gift-dinner.html" class="action-btn block">
								<span class="txt-wrapper">
									<span class="highlight">objednávka</span>
									<!-- Stars (Default) -->
									<span class="stars-default">
										<i class="star star__first"></i>
										<i class="star star__second star__big"></i>
										<i class="star star__third"></i>
									</span>
									<!-- Stars (Default) / End -->
									<!-- Stars (Active) -->
									<span class="stars-active">
										<i class="star star__first"></i>
										<i class="star star__second star__big"></i>
										<i class="star star__third"></i>
									</span>
									<!-- Stars (Active) / End -->
								</span>
								<i class="ico ico-pizza"></i>
								<i class="ico ico-pizza ico-pizza__alt"></i>
							</a>
							<span class="action-btn-back"></span>
						</div>
						<!-- Gift a Dinner / End -->
						
					</div>
				</div>
			</div>
			<!-- Banners / End -->
			
			<!-- Secondary Content -->
			<div class="container clearfix">
				<div class="grid_4">
					<!-- Reviews -->
					<div class="reviews">
						<!-- Title -->
						<div class="title-wrap title-wrap__small">
							<h2>reviews</h2>
						</div>
						<!-- /Title -->
						<ul class="unstyled">
							<li class="clearfix">
								<span class="rating-mark rating-mark__5">5</span>
								<blockquote class="styled">Suspendisse tempor sagittis urna. In ut nulla quis erat sagittis commodo a sed felis.</blockquote>
								<div class="author">John Doe</div>
							</li>
							<li class="clearfix">
								<span class="rating-mark rating-mark__5">5</span>
								<blockquote class="styled">Suspendisse tempor sagittis urna. In ut nulla quis erat sagittis commodo a sed felis.</blockquote>
								<div class="author">John Doe</div>
							</li>
						</ul>
					</div>
					<!-- Reviews / End -->
				</div>
				<div class="grid_4">
					
					<!-- Featured Dish -->
					<div class="featured">
						<!-- Title -->
						<div class="title-wrap title-wrap__small">
							<h2>featured <em>Dish</em></h2>
						</div>
						<!-- /Title -->
						
						<!-- Image -->
						<figure class="accent-box accent-box__animated">
							<span class="accent-box-inner">
								<a href="#"><img src="http://placehold.it/290x192" alt=""></a>
								<span class="ribbon">this week</span>
								<span class="mask"></span>
							</span>
						</figure>
						<!-- /Image -->
						
						<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
						
					</div>
					<!-- Featured Dish / End -->
					
				</div>
				<div class="grid_4">
					
					<!-- Featured Drink -->
					<div class="featured">
						<!-- Title -->
						<div class="title-wrap title-wrap__small">
							<h2>Recommended <em>Drink</em></h2>
						</div>
						<!-- /Title -->
						
						<!-- Image -->
						<figure class="accent-box accent-box__animated">
							<span class="accent-box-inner">
								<a href="#"><img src="http://placehold.it/290x192" alt=""></a>
								<span class="ribbon">this week</span>
								<span class="mask"></span>
							</span>
						</figure>
						<!-- /Image -->
						
						<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
						
					</div>
					<!-- Featured Drink / End -->
					
				</div>
			</div>
			<!-- Secondary Content / End -->
			
			
			
		</div>
		<!-- Content / End -->
		
		<!-- Back to Top -->
		<div class="back-to-top">
			<div class="container clearfix">
				<div class="grid_12">
					<div class="back-to-top-inner">
						<a href="#" id="to-top"><span class="arrow-up"></span>top</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Back to Top / End -->
		
		
		<!-- Footer
    	================================================================ -->
		<footer id="footer" class="footer">
			
			<!-- Footer Widgets -->
			<div class="footer-widgets">
				<div class="container clearfix">
					
					<div class="grid_2">
						<!-- Pages Widget -->
						<div class="widget-pages widget widget__footer">
							<h3 class="widget-title">navigate</h3>
							<div class="widget-content">
								<ul>
									<li><a href="#">Home page</a></li>
									<li><a href="#">Our menu</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="#">Events</a></li>
									<li><a href="#">Our gallery</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>
						</div>
						<!-- Pages Widget / End -->
					</div>
					<div class="grid_2">
						<!-- Social Widget -->
						<div class="widget-social widget widget__footer">
							<h3 class="widget-title">we're social</h3>
							<div class="widget-content">
								<ul class="social-links">
									<li class="soc-facebook"><a href="#">be a fan</a></li>
									<li class="soc-twitter"><a href="#">follow us</a></li>
									<li class="soc-gplus"><a href="#">join us</a></li>
									<li class="soc-pinterest"><a href="#">our pinboard</a></li>
									<li class="soc-linkedin"><a href="#">link us</a></li>
									<li class="soc-rss"><a href="#">RSS feed</a></li>
								</ul>
							</div>
						</div>
						<!-- Social Widget / End -->
					</div>
					<div class="grid_3">
						<!-- Contacts Widget -->
						<div class="widget-contacts widget widget__footer">
							<h3 class="widget-title">be in touch</h3>
							<div class="widget-content">
								<ul class="contacts-list">
									<li class="phone">
										<span class="name">phone:</span>
										+ 44 1225 324 980
									</li>
									<li class="email">
										<span class="name">e-mail:</span>
										<a href="mailto:olia@gozha.net">olia@gozha.net</a>
									</li>
									<li class="address">
										19c Charles Street,<br>
										Bath BA 1 1HX,<br>
										United Kingdom
									</li>
								</ul>
							</div>
						</div>
						<!-- Contacts Widget / End -->
					</div>
					<div class="grid_5 colborder">
						<div class="prefix_1">
							<!-- Order Widget -->
							<div class="widget-order widget widget__footer">
								<h3 class="widget-title">Need catering?.. <span class="adv-title">we can help!</span></h3>
								<div class="widget-content">
									<!-- Action Button -->
									<div class="action-btn-holder">
										<a href="#" class="action-btn block" id="order-catering-trigger">
											order catering <i class="ico ico-catering"></i>
										</a>
										<span class="action-btn-back"></span>
									</div>
									<!-- Action Button / End -->
								</div>
							</div>
							<!-- Order Widget / End -->
							
							<!-- Copyright -->
							<div class="copyright">
								Copyright &copy; 2013, 4seasons. All rights reserved.
								<div class="clearfix">
									<div class="fleft"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use.</a></div>
									<div class="fright">Done by <a href="http://themeforest.net/user/olechka">Olia Gozha</a></div>
								</div>
							</div>
							<!-- Copyright / End -->
							
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Widgets / End -->	
			
			
		</footer>
		<!-- Footer / End -->
		
		
		
		<!-- Booking Table Modal
    	================================================================ -->
		<div id="booking-table-modal" class="reveal-modal">
			<div class="reveal-modal-inner">
				<h2 class="extra-title center">Reservation form:</h2>
				<form action="booking.php" id="resform" class="form form__modal">
					
					<!-- Date -->
					<div class="field clearfix">
						<label for="res-date" class="fleft">Dinner date</label>
						<input type="text" name="res-date" id="res-date" class="date-pick fright">
					</div>
					<!-- Date / End -->
					
					<!-- Time -->
					<div class="field clearfix">
						<label for="res-time" class="fleft">Set time</label>
						<select name="res-time" id="res-time" class="dropkick fright" tabindex="1">
							<option value="10:00 a.m.">10:00 a.m.</option>
							<option value="10:30 a.m.">10:30 a.m.</option>
							<option value="11:00 a.m.">11:00 a.m.</option>
							<option value="11:30 a.m.">11:30 a.m.</option>
							<option value="12:00 p.m.">12:00 p.m.</option>
							<option value="12:30 p.m.">12:30 p.m.</option>
							<option value="13:00 p.m.">13:00 p.m.</option>
							<option value="13:30 p.m.">13:30 p.m.</option>
							<option value="14:00 p.m.">14:00 p.m.</option>
							<option value="14:30 p.m.">14:30 p.m.</option>
							<option value="15:00 p.m.">15:00 p.m.</option>
							<option value="15:30 p.m.">15:30 p.m.</option>
							<option value="16:00 p.m.">16:00 p.m.</option>
						</select>
					</div>
					<!-- Time / End -->
					
					<!-- Persons -->
					<div class="field clearfix">
						<label for="res-person" class="fleft">Persons</label>
						<select name="res-person" id="res-person" class="dropkick fright">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4+">4+</option>
						</select>
					</div>
					<!-- Persons / End -->
					
					<!-- Email -->
					<div class="field clearfix">
						<label for="res-email" class="fleft">Your email</label>
						<input type="email" name="res-email" id="res-email" class="fright" placeholder="olia@gozha.net">
					</div>
					<!-- Email / End -->
					
					<!-- Phone -->
					<div class="field clearfix">
						<label for="res-tel" class="fleft">Contact phone</label>
						<input type="tel" name="res-tel" id="res-tel" class="fright" placeholder="+1 879 1234 657">
					</div>
					<!-- Phone / End -->
					
					<!-- Action Button -->
					<div class="center submit-button-wrap">
						<div class="action-btn-holder action-btn-holder__warning">
							<input type="button" name="res-submit" id="res-submit" value="book a table" class="action-btn"/>
							<!-- Decoration -->
							<span class="stars stars__small"></span>
							<span class="action-btn-back"></span>
							<!-- Decoration / End  -->
						</div>
					</div>
					<!-- Action Button / End -->
					
					<div id="res-response"></div>
					
				</form>
			</div>
			<a class="close-reveal-modal">&#215;</a>
		</div>
		<!-- Booking Table Modal / End -->
		
		
		
		<!-- Order Catering Modal
    	================================================================ -->
		
		<div id="order-catering-modal" class="reveal-modal">
			<div class="reveal-modal-inner">
				<h2 class="extra-title center">Order catering</h2>
				<form action="catering.php" id="order-form" class="form form__modal">
					
					<!-- First Name -->
					<div class="field clearfix">
						<label for="order-name" class="fleft">First Name</label>
						<input type="text" name="order-name" id="order-name" class="fright" placeholder="John">
					</div>
					<!-- First Name / End -->
					
					<!-- Last Name -->
					<div class="field clearfix">
						<label for="order-l-name" class="fleft">Last Name</label>
						<input type="text" name="order-l-name" id="order-l-name" class="fright" placeholder="Doe">
					</div>
					<!-- Last Name / End -->
					
					<!-- Event Type -->
					<div class="field clearfix">
						<label for="order-event" class="fleft">Event Type</label>
						<select name="order-event" id="order-event" class="dropkick fright">
							<option value="birthday">birthday</option>
							<option value="wedding">wedding</option>
							<option value="party">party</option>
							<option value="breakfast">breakfast</option>
							<option value="lunch">lunch</option>
							<option value="dinner">dinner</option>
						</select>
					</div>
					<!-- Event Type / End -->
					
					
					<!-- Special Date -->
					<div class="field clearfix">
						<label for="order-date" class="fleft">Special date</label>
						<input type="text" name="order-date" id="order-date" class="date-pick fright">
					</div>
					<!-- Special Date / End -->
					
					<!-- Persons -->
					<div class="field clearfix">
						<label for="order-person" class="fleft">Persons</label>
						<select name="order-person" id="order-person" class="dropkick fright">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4+">4+</option>
						</select>
					</div>
					<!-- Persons / End -->
					
					<!-- Email -->
					<div class="field clearfix">
						<label for="order-email" class="fleft">Your email</label>
						<input type="email" name="order-email" id="order-email" class="fright" placeholder="olia@gozha.net">
					</div>
					<!-- Email / End -->
					
					<!-- Phone -->
					<div class="field clearfix">
						<label for="order-tel" class="fleft">Contact phone</label>
						<input type="tel" name="order-tel" id="order-tel" class="fright" placeholder="+1 879 1234 657">
					</div>
					<!-- Phone / End -->
					
					<div class="form-msg">We contact you in a while...stay tuned!</div>
					
					<!-- Action Button -->
					<div class="center submit-button-wrap">
						<div class="action-btn-holder action-btn-holder__light">
							<a href="#" class="action-btn block" id="order-submit">
								order catering <i class="ico ico-catering"></i>
							</a>
							<span class="action-btn-back"></span>
						</div>
					</div>
					<!-- Action Button / End -->
					
					<div id="order-response"></div>
					
				</form>
			</div>
			<a class="close-reveal-modal">&#215;</a>
		</div>
		<!-- Order Catering Modal / End -->
		
		
			
		
	</div>
	<!-- Wrapper / End -->
	
	
	<!-- Javascript Files
	================================================== -->
	
	<!-- initialize jQuery Library -->
	<script src="js/jquery-1.9.1.min.js"></script>
	<!-- Modernizr -->
	<script src="js/modernizr.custom.14583.js"></script>
	<!-- jQuery migrate plugin -->
	<script src="js/jquery-migrate-1.1.1.min.js"></script>
	<!-- easing plugin -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider.js"></script>
	<!-- Prettyphoto -->
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- Main Navigation Script (superfish) -->
	<script src="js/jquery.superfish.js"></script>
	<!-- Reveal Popup -->
	<script src="js/jquery.reveal.js"></script>
	<!-- Datepicker -->
	<script src="js/date.js"></script>
	<script src="js/jquery.datePicker.js"></script>
	<!-- Dropkick -->
	<script src="js/jquery.dropkick-1.0.0.js"></script>
	<!-- Tipsy -->
	<script src="js/jquery.tipsy.js"></script>
	<!-- Carousel -->
	<script src="js/jquery.carouFredSel-6.2.1.js"></script>
	<!-- Isotope -->
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.imagesloaded.min.js"></script>
	<!-- Forms -->
	<script src="js/jquery.form.js"></script>
	
	<!-- Custom -->
	<script src="js/custom.js"></script>
	
</body>
</html>