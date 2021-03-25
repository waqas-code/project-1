<?php
   function print_header(){
   	echo '
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Education &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">www.yourdomainname.com</p>
						<p class="num">Call: +01 123 456 7890</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.php"><i class="icon-study"></i>Educ<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="courses.php">Courses</a></li>
							<li><a href="teacher.php">Teacher</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li class="has-dropdown">
								<a href="blog.php">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
							<li class="btn-cta"><a href="#"><span>Login</span></a></li>
							<li class="btn-cta"><a href="#"><span>Create a Course</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/sunset.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The Roots of Education are Bitter, But the Fruit is Sweet</h1>
									<h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
									<p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/programmer.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The Great Aim of Education is not Knowledge, But Action</h1>
									<h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/tree.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>We Help You to Learn New Things</h1>
									<h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>';
   }

function print_footer(){

 echo '
<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/programmer.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Education</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown(".simply-countdown-one", {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $("#simply-countdown-losange").simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>
 ';
   }
 function course_category(){
 	$category_course = array(
      array(
           'icon' => "<i class='icon-shop'></i>",
           'heading' => "Developer",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-heart4'></i>",
           'heading' => "Business",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-banknote'></i>",
           'heading' => "Health",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-lab2'></i>",
           'heading' => "Psychology",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-photo'></i>",
           'heading' => "Front-end",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-home-outline'></i>",
           'heading' => "Real State",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-shop'></i>",
           'heading' => "Teacher",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-bubble3'></i>",
           'heading' => "ECommerce",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
 	);
 	$course_list = "";
 	//print_r($category_course);
 	foreach ($category_course as $n) {
 		$course_list.='<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							'.$n['icon'].'
						</span>
						<div class="desc">
							<h3><a href="#">'.$n['heading'].'</a></h3>
							<p>'.$n['description'].'</p>
						</div>
					</div>
				</div>';
 	}
 	echo '<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Course categories</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				 '.$course_list.'
			</div>
		</div>
	</div>';
 }
 function followers(){
 	$our_followers = array(
       array(
        'icon' => "<i class='icon-world'></i>",
        'data_to' => "4000",
         'span' => "Students Enrolled",
       ), 
       array(
        'icon' => "<i class='icon-study'></i>",
        'data_to' => "835939",
         'span' => "Foreign Followers",
       ), 
       array(
        'icon' => "<i class='icon-bulb'></i>",
        'data_to' => "10039",
         'span' => "Certified Teachers",
       ), 
       array(
        'icon' => "<i class='icon-head'></i>",
        'data_to' => "3000",
         'span' => "Classes Complete",
       ), 
 	);
   $our_folower = "";
    //print_r($our_followers);
    foreach ($our_followers as $a) {
      $our_folower.='<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon">'.$a['icon'].'</span>
							<span class="fh5co-counter js-counter" data-from="0" data-to='.$a['data_to'].' data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">'.$a['span'].'</span>
						</div>';
    }
 	echo '<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						'.$our_folower.'
					</div>
				</div>
			</div>
		</div>
	</div>';
 }

function course_conetent(){
   $course_list = array(
    array(
      'image' => "images/project-1.jpg",
       'heading' => "Web Developer",
       'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
       'button' => "Click Here!",
    ),
     array(
      'image' => "images/project-2.jpg",
       'heading' => "Android Developer",
       'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
       'button' => "Click Here!",
    ),
      array(
      'image' => "images/project-3.jpg",
       'heading' => "Flutter Developer",
       'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
       'button' => "Click Here!",
    ),
       array(
      'image' => "images/project-4.jpg",
       'heading' => "Python Developer",
       'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
       'button' => "Click Here!",
    ),
   );
   $course_map = "";
   //print_r($course_list);
   foreach ($course_list as $b) {
   	$course_map.='<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url('.$b['image'].');">
						</a>
						<div class="desc">
							<h3><a href="#">'.$b['heading'].'</a></h3>
							<p>'.$b['description'].'</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">'.$b['button'].'</a></span>
						</div>
					</div>
					</div>';
   }
	echo '<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Course</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
			  '.$course_map.'
			  </div>	
		</div>
	</div>';
}
function tesimonials(){
	echo '<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span>Testimonials</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/person1.jpg);"></div>
									<span>Mary Walker<br><small>Students</small></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/person2.jpg);"></div>
									<span>Mike Smith<br><small>Students</small></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/person3.jpg);"></div>
									<span>Rita Jones<br><small>Teacher</small></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
';
}
function blog_and_event(){
	$blog_content = array(
       array(
         'span' => "16<br>Mar.",
         'heading' => "Pakistan, International Triathlon Event",
         'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
         'title' => "Read more",
       ),
       array(
         'span' => "17<br>Mar.",
         'heading' => "Pakistan, International Triathlon Event",
         'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
         'title' => "Read more",
       ),
       array(
         'span' => "18<br>Mar.",
         'heading' => "Pakistan, International Triathlon Event",
         'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
         'title' => "Read more",
       ),
	 );
	$content_blog = "";
	foreach ($blog_content as $d) {
	   $content_blog.='<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>'.$d['span'].'</span></div>
						<h3><a href="#">'.$d['heading'].'</a></h3>
						<p>'.$d['description'].'</p>
						<p><a href="#">'.$d['title'].'</a></p>
					</div>
				</div>';
	}
  $living = array(
   array(
   	  'image' => "images/project-2.jpg",
   	  'heading' => "Living Lifestyle & Healty",
   	  'span' => "April. 13th",
   	  'icon' => "21<i class='icon-speech-bubble'></i>",
   	  'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
   array(
   	  'image' => "images/project-3.jpg",
   	  'heading' => "Living Lifestyle & Healty",
   	  'span' => "April. 13th",
   	  'icon' => "22<i class='icon-speech-bubble'></i>",
   	  'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
   array(
   	  'image' => "images/project-4.jpg",
   	  'heading' => "Living Lifestyle & Healty",
   	  'span' => "April. 13th",
   	  'icon' => "23<i class='icon-speech-bubble'></i>",
   	  'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
  );
  $living_content = "";
  //print_r($living);
  foreach ($living as $e) {
  	$living_content.='<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url('.$e['image'].');"></a>
						<div class="blog-text">
							<h3><a href="#">'.$e['heading'].'</a></h3>
							<span class="posted_on">'.$e['span'].'</span>
							<span class="comment"><a href="">'.$e['icon'].'</a></span>
							<p>'.$e['description'].'</p>
						</div> 
					</div>
				</div>';
  }
	echo '<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Blog &amp; Events</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row row-padded-mb">
				'.$content_blog.'
			</div>
			<div class="row">
				'.$living_content.'
				</div>
			</div>
		</div>
	</div>';
}
function plan_and_pricing(){
 $plan_content = array(
    array(
      'title' => "Free",
      'currency' => "$",
      'span' =>"03",
      'year' => "per year",
      'li' => "pricing__feature",
      'button' => "Choose plan",
    ),
     array(
      'title' => "Plan",
      'currency' => "$",
      'span' =>"05",
      'year' => "per year",
      'li' => "pricing__feature",
      'button' => "Choose plan",
    ),
      array(
      'title' => "Pro-Plan",
      'currency' => "$",
      'span' =>"09",
      'year' => "per year",
       'li' => "pricing__feature"
   )
 );
 $content_plan = "";
 //print_r($plan_content);
 foreach ($plan_content as $f) {
 	$content_plan.='<div class="col-md-4 animate-box">
						<div class="pricing__item">
							<div class="wrap-price">
	                     <h3 class="pricing__title">'.$f['title'].'</h3>
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">'.$f['currency'].'</span>'.$f['span'].'
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">'.$f['year'].'</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">'.$f['li'].'</li>
	                        <li class="pricing__feature">Limited Courses</li>
	                        <li class="pricing__feature">Free 3 Lessons</li>
	                        <li class="pricing__feature">No Supporter</li>
	                        <li class="pricing__feature">No Tutorial</li>
	                        <li class="pricing__feature">No Ebook</li>
	                         <li class="pricing__feature">Limited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">'.$f['button'].'</button>
                     </div>
                  </div>
                  </div>';
 }
	echo '<div id="fh5co-pricing" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Plan &amp; Pricing</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="pricing pricing--rabten">
					'.$content_plan.'
            </div>
			</div>
		</div>
	</div>';
}
function online_course_time(){
	echo '
	<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Mike Smith</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>
';
}
function instgram_gallery(){
	$gallery = array(
       array(
         'image' => "images/project-5.jpg",
       ),
        array(
         'image' => "images/project-3.jpg",
       ),
         array(
         'image' => "images/project-7.jpg",
       ),
          array(
         'image' => "images/project-9.jpg",
       ),
	);
  $Instagram_content = "";
   //print_r($gallery);
  foreach ($gallery as $h) {
  	$Instagram_content.='<div class="col-md-3 col-padded">
				<a href="#" class="gallery" style="background-image: url('.$h['image'].');"></a>
			</div>';
  }
	echo '
	<div id="fh5co-gallery" class="fh5co-bg-section">
		<div class="row text-center">
			<h2><span>Instagram Gallery</span></h2>
		</div>
		<div class="row">
			'.$Instagram_content.'
		</div>
	</div>';
}
function course(){
	 $lits_courses = array(
    array(
      'image' => "images/project-1.jpg",
       'heading' => "Web Developer",
       'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
       'button' => "Click Here!",
    ),
     array(
      'image' => "images/project-2.jpg",
       'heading' => "Android Developer",
       'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
       'button' => "Click Here!",
    ),
      array(
      'image' => "images/project-3.jpg",
       'heading' => "Flutter Developer",
       'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
       'button' => "Click Here!",
    ),
       array(
      'image' => "images/project-4.jpg",
       'heading' => "Python Developer",
       'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
       'button' => "Click Here!",
    ),
   );
   $courses_maps = "";
   //print_r($course_list);
   foreach ($lits_courses as $list) {
   	$courses_maps.='<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url('.$list['image'].');">
						</a>
						<div class="desc">
							<h3><a href="#">'.$list['heading'].'</a></h3>
							<p>'.$list['description'].'</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">'.$list['button'].'</a></span>
						</div>
					</div>
					</div>';
   }
	echo '
	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Course</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				'.$courses_maps.'
			</div>
		</div>
	</div>';
}
function teachers(){
  $teacher = array(
   array(
    'image' => "images/staff-1.jpg",
    'icon-fb' => "<i class='icon-facebook2'></i>",
    'icon-twitter' => "<i class='icon-twitter2'></i>",
    'icon-drible'=> "<i class='icon-dribbble2'></i>",
    'icon-github' => "<i class='icon-github'></i>",
    'span' => "Physic Health",
    'heading' => "M.WAQAS",
    'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
   array(
    'image' => "images/staff-2.jpg",
    'icon-fb' => "<i class='icon-facebook2'></i>",
    'icon-twitter' => "<i class='icon-twitter2'></i>",
    'icon-drible'=> "<i class='icon-dribbble2'></i>",
    'icon-github' => "<i class='icon-github'></i>",
    'span' => "Physic Health",
    'heading' => "M.WAQAS",
    'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
   array(
    'image' => "images/staff-3.jpg",
    'icon-fb' => "<i class='icon-facebook2'></i>",
    'icon-twitter' => "<i class='icon-twitter2'></i>",
    'icon-drible'=> "<i class='icon-dribbble2'></i>",
    'icon-github' => "<i class='icon-github'></i>",
    'span' => "Physic Health",
    'heading' => "M.WAQAS",
    'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
   array(
    'image' => "images/staff-2.jpg",
    'icon-fb' => "<i class='icon-facebook2'></i>",
    'icon-twitter' => "<i class='icon-twitter2'></i>",
    'icon-drible'=> "<i class='icon-dribbble2'></i>",
    'icon-github' => "<i class='icon-github'></i>",
    'span' => "Physic Health",
    'heading' => "M.WAQAS",
    'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
   array(
    'image' => "images/staff-1.jpg",
    'icon-fb' => "<i class='icon-facebook2'></i>",
    'icon-twitter' => "<i class='icon-twitter2'></i>",
    'icon-drible'=> "<i class='icon-dribbble2'></i>",
    'icon-github' => "<i class='icon-github'></i>",
    'span' => "Physic Health",
    'heading' => "M.WAQAS",
    'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
   array(
    'image' => "images/staff-3.jpg",
    'icon-fb' => "<i class='icon-facebook2'></i>",
    'icon-twitter' => "<i class='icon-twitter2'></i>",
    'icon-drible'=> "<i class='icon-dribbble2'></i>",
    'icon-github' => "<i class='icon-github'></i>",
    'span' => "Physic Health",
    'heading' => "M.WAQAS",
    'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
   array(
    'image' => "images/staff-1.jpg",
    'icon-fb' => "<i class='icon-facebook2'></i>",
    'icon-twitter' => "<i class='icon-twitter2'></i>",
    'icon-drible'=> "<i class='icon-dribbble2'></i>",
    'icon-github' => "<i class='icon-github'></i>",
    'span' => "Physic Health",
    'heading' => "M.WAQAS",
    'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
   array(
    'image' => "images/staff-3.jpg",
    'icon-fb' => "<i class='icon-facebook2'></i>",
    'icon-twitter' => "<i class='icon-twitter2'></i>",
    'icon-drible'=> "<i class='icon-dribbble2'></i>",
    'icon-github' => "<i class='icon-github'></i>",
    'span' => "Physic Health",
    'heading' => "M.WAQAS",
    'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
   ),
  );
  $content_teacher = "";
  foreach ($teacher as $t_list) {
  	$content_teacher.='<div class="col-md-3 text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url('.$t_list['image'].');">
							<ul class="fh5co-social">
								<li><a href="#">'.$t_list['icon-fb'].'</a></li>
								<li><a href="#">'.$t_list['icon-twitter'].'</a></li>
								<li><a href="#">'.$t_list['icon-drible'].'</a></li>
								<li><a href="#"></a>'.$t_list['icon-github'].'</li>
							</ul>
						</div>
						<span>'.$t_list['span'].'</span>
						<h3><a href="#">'.$t_list['heading'].'</a></h3>
						<p>'.$t_list['description'].'</p>
					</div>
				</div>';
  }
	echo '<div id="fh5co-staff">
		<div class="container">
			<div class="row">
				'.$content_teacher.'
			</div>
		</div>
	</div>
';
}
function about(){
	$about_content = array(
      array(
           'icon' => "<i class='icon-shop'></i>",
           'heading' => "Developer",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-heart4'></i>",
           'heading' => "Business",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-banknote'></i>",
           'heading' => "Health",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-lab2'></i>",
           'heading' => "Psychology",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-photo'></i>",
           'heading' => "Front-end",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-home-outline'></i>",
           'heading' => "Real State",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-shop'></i>",
           'heading' => "Teacher",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
      array(
           'icon' => "<i class='icon-bubble3'></i>",
           'heading' => "ECommerce",
           'description' => "A computer programmer, sometimes called a software developer, a programmer or more recently a coder, is a person who creates computer software.",
      ),
 	);
 	$about_list = "";
 	//print_r($category_course);
 	foreach ($about_content as $list_about) {
 		$about_list.='<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							'.$list_about['icon'].'
						</span>
						<div class="desc">
							<h3><a href="#">'.$list_about['heading'].'</a></h3>
							<p>'.$list_about['description'].'</p>
						</div>
					</div>
				</div>';
 	}
 	$our_followers = array(
       array(
        'icon' => "<i class='icon-world'></i>",
        'data_to' => "4000",
         'span' => "Students Enrolled",
       ), 
       array(
        'icon' => "<i class='icon-study'></i>",
        'data_to' => "835939",
         'span' => "Foreign Followers",
       ), 
       array(
        'icon' => "<i class='icon-bulb'></i>",
        'data_to' => "10039",
         'span' => "Certified Teachers",
       ), 
       array(
        'icon' => "<i class='icon-head'></i>",
        'data_to' => "3000",
         'span' => "Classes Complete",
       ), 
 	);
   $folower_list = "";
    //print_r($our_followers);
    foreach ($our_followers as $w) {
      $folower_list.='<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon">'.$w['icon'].'</span>
							<span class="fh5co-counter js-counter" data-from="0" data-to='.$w['data_to'].' data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">'.$w['span'].'</span>
						</div>';
    }
	echo '<div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span>About Our University</span>
				<h2>Welcome to Education Website</h2>
				<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>
				<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed.</p>
				<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="images/img_bg_2.jpg" alt="Free HTML5 Bootstrap Template">
			</div>
		</div>
	</div>

	<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
					 '.$folower_list.'
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Course categories</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				'.$about_list.'
			</div>
		</div>
	</div>';
}
function pricing(){
	$plan_content = array(
    array(
      'title' => "Free",
      'currency' => "$",
      'span' =>"03",
      'year' => "per year",
      'li' => "pricing__feature",
      'button' => "Choose plan",
    ),
     array(
      'title' => "Plan",
      'currency' => "$",
      'span' =>"05",
      'year' => "per year",
      'li' => "pricing__feature",
      'button' => "Choose plan",
    ),
      array(
      'title' => "Pro-Plan",
      'currency' => "$",
      'span' =>"09",
      'year' => "per year",
      'li' => "pricing__feature",
      'button' => "Choose plan",
    ),
 );
 $planning_list = "";
 //print_r($plan_content);
 foreach ($plan_content as $plan_list) {
 	$planning_list.='<div class="col-md-4 animate-box">
						<div class="pricing__item">
							<div class="wrap-price">
	                     <h3 class="pricing__title">'.$plan_list['title'].'</h3>
							</div>
                     <div class="pricing__price">
                        <span class="pricing__anim pricing__anim--1">
								<span class="pricing__currency">'.$plan_list['currency'].'</span>'.$plan_list['span'].'
                        </span>
                        <span class="pricing__anim pricing__anim--2">
								<span class="pricing__period">'.$plan_list['year'].'</span>
                        </span>
                     </div>
                     <div class="wrap-price">
                     	<ul class="pricing__feature-list">
	                        <li class="pricing__feature">'.$plan_list['li'].'</li>
	                        <li class="pricing__feature">Limited Courses</li>
	                        <li class="pricing__feature">Free 3 Lessons</li>
	                        <li class="pricing__feature">No Supporter</li>
	                        <li class="pricing__feature">No Tutorial</li>
	                        <li class="pricing__feature">No Ebook</li>
	                         <li class="pricing__feature">Limited Registered User</li>
	                     </ul>
	                     <button class="pricing__action">'.$plan_list['button'].'</button>
                     </div>
                  </div>
                  </div>';
 }
	echo '<div id="fh5co-pricing" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Plan &amp; Pricing</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="pricing pricing--rabten">
				  '.$planning_list.'
               </div>
            </div>
			</div>
		</div>
	</div>
';
}
function contact(){
	echo '<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://freehtml5.co">freeHTML5.co</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>';
}
?>
