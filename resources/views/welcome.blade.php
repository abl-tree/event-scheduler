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

		<title>Tembang Bootstarp Website Template | Home :: w3layouts</title>
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700italic,400italic,300,900,700,900italic,300italic' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
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
					<h1><a href="#">TEMBANG <span>Jawa</span></a></h1>
				</div>
				<div class="top-nav">
                
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <p>You are not Logged in, <a class="Signup play-icon popup-with-zoom-anim" href="#small-dialog3">Log in here </a>   or<span> <a class="Signup play-icon popup-with-zoom-anim" href="#small-dialog2">Register</a></P>
                        @endauth
                    </div>
                @endif
					
				</div>
				<div class="clearfix"> </div>
				<!-- banner Slider starts Here -->
	  			<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
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
						<h1><a class="scroll" href="#home">TEMBANG <span>Jawa</a> </span></h1>
					</div>	
					<div class="sticky-nav">
						<ul>
							<li><a class="scroll active" href="#about">About</a></li>   
							<li><a class="scroll" href="#event">Event</a></li>
							<li><a class="scroll" href="#contact">Contact</a></li>
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
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
		<!-- banner -->
		<div class="banner">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><span> </span></a>
			<!-- pop-up-box -->
					<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box-->
				<div id="small-dialog" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/64701045" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>	
				<div id="small-dialog3" class="mfp-hide">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="login">
                            <h3>Login</h3>
                            <p>Enter your account details to login</p>
                            <input type="email" placeholder="Email" value="{{ old('email') }}" required autofocus>			
                            <input type="password" placeholder="Password" name="password" required>							
                            <input type="submit"  value="Submit"/>
                        </div>
                    </form>
				</div>
				<div id="small-dialog2" class="mfp-hide">
					<div class="signup">
						<h3>Register</h3>
						<h4>Please Enter Your Details</h4>
						<input type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" />
						<input type="text" value="Second Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Second Name';}" />
						<input type="text" class="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"  />
						<input type="text" class="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>
						<input type="text" class="email" value="Confirm password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm password';}"  />
						<input type="submit" value="Submit"/>
					</div>
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
		<!-- portfolio -->
		<div class="portfolio">
			<!-- container -->
			<div class="container">
				<h3>Gallery</h3>
				<div class="gallery-images">
					<div class="gallery-image">
						<img src="images/3.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image">
						<img src="images/4.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image right">
						<img src="images/5.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image">
						<img src="images/7.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image">
						<img src="images/6.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="gallery-image right">
						<img src="images/8.jpg" alt="" />
						<div class="caption">
							<span> </span>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="gallery-text">
					
					</div>
				</div>
			</div>
			<!-- container -->
		</div>
		<!-- portfolio -->
		<!-- contact -->
		<div id="contact" class="contact">
			<!-- container -->
			<div class="container">
				<h3>Contact Us</h3>
				<div class="col-md-7">
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