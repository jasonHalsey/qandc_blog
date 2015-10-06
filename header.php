<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div class="page-frame">




			<div class="header">

				<div class="top-sticky-frame">
					<div class="top-sticky">

						<a class="page-logo" href="/index.php"><img src="http://www.qandc.com/img/QC-logo.png" alt="Q&amp;C Hotel Bar" /></a>

						<ul class="top-nav">

							<li><h7><a href="/specials.php"><font color="#552277">SPECIAL OFFERS</font></a></h7></li>
							<li><h7><a href="tel:866-247-7936">1 (866) 247-7936</a></h7></li>
							<li class="highlight res-btn"><a class="reservations-toggle" href="https://gc.synxis.com/rez.aspx?Hotel=61552&Chain=15198" target="_blank"><font color="ffffff">BOOK NOW</font></a></li>
							<li class="translate">
								<!-- Google Translate Begin -->
								<div id="translate_contain">
									<div id="google_translate_element"></div>
									<script type="text/javascript">
									function googleTranslateElementInit() {
									 new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,fr,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
									}
									</script>
									<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
									</script>
								</div>

								<!-- Google Translate End -->
							</li>
						</ul>


						<div class="reservations-frame">
							<form action="https://gc.synxis.com/rez.aspx?"  method="post" onsubmit="_gaq.push(['_linkByPost', this]);" target="_blank">
								<input type="hidden" name="Hotel" value="61552" />
								<input type="hidden" name="Chain" value="15198" />
								<input type="hidden" name="start" value="availresults" />
								<input type="hidden" name="shell" value="tapatioresort" />
								<input name="NCK" id="hidNavisKeyword" type="hidden" value="organic"/>
								Check-In
								<input type="text" name="arrive" id="check-in-datepicker" value="10/05/2015"/>
								Check-Out
								<input type="text" name="depart" id="check-out-datepicker" value="10/07/2015" />
								Promo Code
								<input type="text" name="promo" />
								<input type="submit" id="book-now" value="CHECK AVAILABILITY" />
							</form>

							<script type="text/javascript">NavisSetHiddenKeywordFieldD("hidNavisKeyword","organic");</script>
							<div class="reservations-close"></div>
						</div><!-- End div.eservations-frame -->



						<ul class="main-nav">
							<li><h7><a href="/awards-and-accolades.php">REVIEWS & AWARDS</a> &nbsp;|&nbsp;&nbsp;</h7></li>

							<li><h7><a href="/gallery.php">GALLERY</a>&nbsp;|&nbsp;&nbsp;</h7></li>


							<li><h7><a href="/rooms.php">ROOMS</a> &nbsp;|&nbsp;&nbsp;</h7></li>
							<li><h7><a href="/bar.php">DINING</a> &nbsp;|&nbsp;&nbsp;</h7></li>

							<!--<li><h7><a href="/specials.php">SPECIALS</a> &nbsp;|&nbsp;&nbsp;</h7></li>-->
			                <!--<li><h7><a href="/calendar.php">CALENDAR</a> &nbsp;|&nbsp;&nbsp;</h7></li>-->

							<li><h7><a href="/business-travel.php">BUSINESS TRAVEL</a> &nbsp;|&nbsp;&nbsp;</h7></li>
							
							<li><h7><a href="#">EVENTS</a> &nbsp;|&nbsp;&nbsp;</h7>
								<ul class="dropdown">
									<li><a href="/new-orleans-event-venues.php">Hotel Venues</a></li>
									<li><a href="/new-orleans-wedding-venue.php">Weddings</a></li>
									<li><a href="/room-blocks.php">Room Blocks</a></li>
									<li><a href="/new-orleans-event-planning.php">Let's Talk</a></li>
			                    </ul>
							</li>
							<li><h7><a href="/amenities.php">AMENITIES</a> &nbsp;|&nbsp;&nbsp;</h7></li>

							<li><h7><a href="#">LOCATION</a></h7>
								<ul class="dropdown">
									<li><a href="/location.php">Directions</a></li>
									<li><a href="/guide.php">NOLA Guide</a></li>
									<li><a href="/calendar.php">Calendar</a></li>
			                    </ul>
								</li>

							<!--<li><h7><a href="/guide.php">NOLA GUIDE</a></h7></li>-->
						</ul>
					</div>
				</div>



				<div class="banner">
					<ul class="banner-slider">
						<li><img src="http://www.qandc.com/img/slider/slide-sm-queen-new.jpg" alt="Q&C Hotel Guestroom" /></li>					
					</ul>
				</div><!--End div.banner -->



			</div><!-- End div.header -->



	