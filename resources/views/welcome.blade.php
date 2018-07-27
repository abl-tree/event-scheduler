<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>{{ config('app.name', 'Laravel') }} | Home</title>
		@if (App::isLocal())
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
			<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
			<link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
			<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
			<!-- banner Slider starts Here -->
			<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
			<!-- pop-up-box -->
			<script type="text/javascript" src="{{ asset('js/modernizr.custom.min.js') }}"></script>    
			<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
			<!--//pop-up-box-->
		@elseif (!App::isLocal() && Request::server('HTTP_X_FORWARDED_PROTO') == 'http')
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
			<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
			<link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
			<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
			<!-- banner Slider starts Here -->
			<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
			<!-- pop-up-box -->
			<script type="text/javascript" src="{{ asset('js/modernizr.custom.min.js') }}"></script>    
			<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
			<!--//pop-up-box-->
		@else
			<link href="{{ secure_asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
			<link href="{{ secure_asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
			<link href="{{ secure_asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
			<script src="{{ secure_asset('js/jquery.min.js') }}"></script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="{{ secure_asset('js/move-top.js') }}"></script>
			<script type="text/javascript" src="{{ secure_asset('js/easing.js') }}"></script>
			<!-- banner Slider starts Here -->
			<script src="{{ secure_asset('js/responsiveslides.min.js') }}"></script>
			<!-- pop-up-box -->
			<script type="text/javascript" src="{{ secure_asset('js/modernizr.custom.min.js') }}"></script>    
			<script type="text/javascript" src="{{ secure_asset('js/jquery.magnific-popup.js') }}"></script>
			<!--//pop-up-box-->
		@endif
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700italic,400italic,300,900,700,900italic,300italic' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
	</head>
	<body>
		<!-- header -->
		<div id="home" class="header">
			<!-- container -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="#">{{ config('app.name', 'Laravel') }}</a></h1>
				</div>
				<div class="top-nav">
                
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
							<p>Go to <a class="Signup play-icon" href="{{ url('/home') }}">Admin Page</a> or<span> 
							<a class="Signup play-icon" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
								{{ __('Logout') }}</a></p>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
                        @else
                            <p>You are not Logged in, <a class="Signup play-icon popup-with-zoom-anim" href="#small-dialog3">Log in here </a>   or<span> <a class="Signup play-icon popup-with-zoom-anim" href="#small-dialog2">Register</a></P>
                        @endauth
                    </div>
                @endif
					
				</div>
				<div class="clearfix"> </div>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
				</script>
				<!--//End-slider-script -->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="header-info">
								<p>LIVE PERMORMANCE</p>
								<p>BY<span>TEMBANG</span><span class="sub-text">Jawa</span></p>
								<p>	AT GOR SATRIA PURWOKERTO</p>
								<div class="red">20 SEPTEMBER 2014</div>
								<div class="button"><a href="#">View Here</a></div>
							</div>
						</li>
						<li>
							<div class="header-info">
								<p>LIVE TELECAST</p>
								<p>BY<span>TEMBANG</span><span class="sub-text">Jawa</span></p>
								<p>	AT WASHINGTON DC</p>
								<div class="red">24 OCTOMER 2014</div>
								<div class="button"><a href="#">View Here</a></div>
							</div>
						</li>
						<li>
							<div class="header-info">
								<p>LIVE DANCE SHOW</p>
								<p>BY<span>TEMBANG</span><span class="sub-text">Jawa</span></p>
								<p>	AT NEW YORK</p>
								<div class="red">15 JANUARY 2013</div>
								<div class="button"><a href="#">View Here</a></div>
							</div>
						</li>
						<li>
							<div class="header-info">
								<p>LIVE TELECAST</p>
								<p>BY<span>TEMBANG</span><span class="sub-text">Jawa</span></p>
								<p>	AT WASHINGTON DC</p>
								<div class="red">24 OCTOMER 2014</div>
								<div class="button"><a href="#">View Here</a></div>
							</div>
						</li>
						<li>
							<div class="header-info">
								<p>LIVE DANCE SHOW</p>
								<p>BY<span>TEMBANG</span><span class="sub-text">Jawa</span></p>
								<p>	AT NEW YORK</p>
								<div class="red">15 JANUARY 2013</div>
								<div class="button"><a href="#">View Here</a></div>
							</div>
						</li>
					</ul>
					<div class="clearfix"> </div>
					<!-- banner Slider Ends Here --> 
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- header -->
		<!-- sticky -->
		<div class="sticky">
			<!-- container -->
			<div class="container">
				<div class="top-header">
					<div class="fixed-header">
						<div class="sticky-logo">
							<h1><a class="scroll" href="#home">{{ config('app.name', 'Laravel') }}</a></h1>
						</div>	
						<div class="sticky-nav">
							<ul class="menu">
								<li><a class="scroll about-nav" href="#about">About</a></li>   
								<li><a class="scroll event-nav" href="#event">Event</a></li>
								<li><a class="scroll contact-nav" href="#contact">Contact</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- container -->	
		</div>
		<!-- sticky -->
		<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".top-header").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".top-header").addClass("fixed");
				}else{
					$(".top-header").removeClass("fixed");
				}
			 });

			 $('.menu li a').click(function () {
				//  alert('nice');
				$('.menu li a').not(this).removeClass('active');
				$(this).addClass('active');
			});

			$(document).scroll(function() {
				// console.log('about', $(window).scrollTop() + $(window).height() > $('#about').position().top + $('.about-info').position().top && $(window).scrollTop() + $(window).height() < $('#about').position().top + $('#about').height());
				// console.log('event', $(window).scrollTop() + $(window).height() > $('#event').position().top + $('.event-grids').position().top && $(window).scrollTop() + $(window).height() < $('#event').position().top + $('#event').height());

				if ($(window).scrollTop() + $(window).height() > $('#about').position().top && $(window).scrollTop() + $(window).height() < $('#about').position().top + $('#about').height()) {
					$('.menu li a').not('.menu li a.about-nav').removeClass('active');
					$('.menu li a.about-nav').addClass('active');
				} else if ($(window).scrollTop() + $(window).height() > $('#event').position().top && $(window).scrollTop() + $(window).height() < $('#event').position().top + $('#event').height()) {
					$('.menu li a').not('.menu li a.event-nav').removeClass('active');
					$('.menu li a.event-nav').addClass('active');
				} else if ($(window).scrollTop() + $(window).height() > $('#contact').position().top) {
					$('.menu li a').not('.menu li a.contact-nav').removeClass('active');
					$('.menu li a.contact-nav').addClass('active');
				} else {
					$('.menu li a').removeClass('active');
				}
			});
		});
		</script>
		<!-- /script-for sticky-nav -->
		<!-- banner -->
		<div class="banner">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><span> </span></a>
				<div id="small-dialog" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/64701045" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>	
				<div id="small-dialog3" class="mfp-hide">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="login">
                            <h3>{{ __('Login') }}</h3>
                            <p>Enter your account details to login</p>
                            <input type="email" placeholder="Email" value="{{ old('email') }}" name="email" required autofocus>			
                            <input type="password" placeholder="Password" name="password" required>							
                            <input type="submit"  value="Submit"/>
                        </div>
                    </form>
				</div>
				<div id="small-dialog2" class="mfp-hide">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
						<div class="signup">
							<h3>Register</h3>
							<h4>Please Enter Your Details</h4>
							<input type="text" class="email" placeholder="Name" name="name" required/>
							<input type="text" class="email" placeholder="Email" name="email" required/>
							<input type="password" class="password" placeholder="Password" name="password" required/>
							<input type="password" class="password" placeholder="Confirm password" name="password_confirmation" required/>
							<input type="submit" value="Submit"/>
						</div>
					</form>
				</div>	
				 <script>
						$(document).ready(function() {
							$('.popup-with-zoom-anim').magnificPopup({
								type: 'inline',
								fixedContentPos: false,
								fixedBgPos: true,
								overflowY: 'auto',
								closeBtnInside: true,
								preloader: false,
								midClick: true,
								removalDelay: 300,
								mainClass: 'my-mfp-zoom-in'
							});
																						
						});
				</script>	
		</div>
		<!-- banner -->
		<!-- about -->
		<div id="about" class="about">
			<!-- container -->	
			<div class="container">
				<h3>About Us</h3>
				<label> </label>
			</div>
			<!-- container -->	
			<div class="border">
				
			</div>
			<!-- about-info -->
			<div class="about-info">
				<!-- container -->	
				<div class="container">
					<div class="col-md-8 about-info-left">
						<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. 

						<span>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</span></p>

						<p class="bottom-text">"Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim."</p>
						<div class="map">
							<img src="images/map.png" alt="" />
						</div>
					</div>
					<div class="col-md-4 about-info-right">
						<div class="about-img">
							<img src="images/3.png" alt="" />
						</div>
							<div class="about-right-hedding">
								<h3>TIMELINE</h3>
							</div>
							<div class="border-bottom1"> </div>
							<div class="timeline-grid">
								<label class="red"> </label>
								<h4>2012</h4>
								<p>Was born</p>
							</div>
							<div class="timeline-grid middle">
								<label class="red1"> </label>
								<h4>2013</h4>
								<p>1st Album Launch</p>
							</div>
							<div class="timeline-grid bottom">
								<label class="red2"> </label>
								<h4>2014</h4>
								<p>3rd Album Launch</p>
							</div>
							<div class="border-bottom3"> </div>
							
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- container -->	
				<div class="border-bottom"> </div>
			</div>
			<!-- about-info -->
		</div>
		<!-- about -->
		<!-- content-events -->
		<div id="event" class="content-event">
			<!-- container -->
			<div class="container">
				<h3>Events</h3>
				<div class="event-grids">
					<div class="col-md-3 event-grid">
						<div class="pic"> </div>
						<ul>
							<li class="hedding">Wembley Stadium</li>
							<li class="date">2 December 2014</li>
						</ul>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 event-grid small-text">
						<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
					</div>
					<div class="col-md-2 event-grid large-text">
						<p class="text">$ 200 USD</p>
					</div>
					<div class="col-md-3 event-grid text-button">
						<ul>
							<li class="num">100 tickets Available</li>
							<li class="button yellow"><a href="#">Buy Ticket</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- contact-events -->
		<!-- contact -->
		<div id="contact" class="contact">
			<!-- container -->
			<div class="container">
				<h3>Contact Us</h3>
				<div class="col-md-7 contact-info">
					<div class="col-md-6">
						<form>
							<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						</form>
					</div>
					<div class="col-md-6">
						<form>
							<textarea value="Message:" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';">Message</textarea>	
						</form>
					</div>
					<div class="clearfix"> </div>
					<div class="submit-button">
						<form>
							<input type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="col-md-5">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="rect"> </a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- container -->
		</div>
		<!-- contact -->
		<div class="border-bottom"> </div>
		<!-- footer -->
		<div class="footer">
			<div class="copyright">
				<p>
					Template by <a href="http://w3layouts.com/">W3layouts.com</a>
				</p>
			</div>
		</div>
		<!-- footer -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>