<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	
	<title>AboutMe - Personal Portfolio Resume Template</title>
	<!-- set your website meta description and keywords -->
	<meta name="description" content="Add your business website description here">
	<meta name="keywords" content="Add your business website keywords here">
	<!-- set your website favicon -->
	<link href="<?= $view->getThemePath(); ?>/favicon.ico" rel="icon" type="image/x-icon">

	
	<!-- Bootstrap Stylesheets -->
<link rel="stylesheet" href="<?= $view->getThemePath(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $view->getThemePath(); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= $view->getThemePath(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= $view->getThemePath(); ?>/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?= $view->getThemePath(); ?>/css/lightbox.min.css">
<link rel="stylesheet" href="<?= $view->getThemePath(); ?>/css/parallax.css" type="text/css">
<link rel="stylesheet" href="<?= $view->getThemePath(); ?>/css/style.css" type="text/css">
<link rel="stylesheet" href="<?= $view->getThemePath(); ?>/css/responsive.css" type="text/css">

	
</head>

<body>
	<!-- start Header -->
    <header id="header" class="header">
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?= $view->url('/'); ?>">
                                <img class="logo logo-white" src="<?= $view->getThemePath(); ?>/images/logo.png" alt="logo">
                                <img class="logo logo-color" src="<?= $view->getThemePath(); ?>/images/logo-color.png" alt="logo">
                            </a>
                        </div><!-- End navbar-header -->
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?= $view->url('/view#'); ?>" class="active">Home</a></li>
                                <li><a href="<?= $view->url('/view#about'); ?>">About</a></li>
                                <li><a href="<?= $view->url('/view#service'); ?>">Service</a></li>
                                <li><a href="<?= $view->url('/view#portfolio'); ?>">Portfolio</a></li>
                                <li><a href="<?= $view->url('/view#pricingtable'); ?>">Pricing</a></li>
                                <li><a href="<?= $view->url('/view#blog'); ?>">Blog</a></li>
                                <li><a href="<?= $view->url('/view#contact'); ?>" class="last">Contact</a></li>
                            </ul>
                        </div><!-- End navbar-collapse -->
                    </nav>
                </div><!-- End col -->
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End header-nav -->
</header>

	<!-- end Header -->
	
	<!-- start slider and home section -->
	<section id="home" class="home">
        <div class="home-top-banner banner-1">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
								<div class="banner-content banner-content-fullwidth">
									<h3>Hi, I'm</h3>
									<h1 class="header-title-text type-animate">
										<a href="" class="typewrite" data-period="2000" data-type='[ "Emma Jones", "Proffessional", "Creative Director", "From United States" ]'>
										<span class="wrap"></span>
										</a>&nbsp;
									</h1>
									<ul class="list-inline list-social">
										<li>
											<a href="#" class="social-icon social-icon-facebook">
												<i class="fa fa-facebook"></i>
												<i class="fa fa-facebook"></i>
											</a>
										</li>
										<li>
											<a href="#" class="social-icon social-icon-twitter">
												<i class="fa fa-twitter"></i>
												<i class="fa fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" class="social-icon social-icon-gplus">
												<i class="fa fa-google-plus"></i>
												<i class="fa fa-google-plus"></i>
											</a>
										</li>
										<li>
											<a href="#" class="social-icon social-icon-vimeo">
												<i class="fa fa-vimeo"></i>
												<i class="fa fa-vimeo"></i>
											</a>
										</li>
										<li>
											<a href="#" class="social-icon social-icon-pinterest">
												<i class="fa fa-pinterest"></i>
												<i class="fa fa-pinterest"></i>
											</a>
										</li>
										<li>
											<a href="#" class="social-icon social-icon-linkedin">
												<i class="fa fa-linkedin"></i>
												<i class="fa fa-linkedin"></i>
											</a>
										</li>
									</ul>
								</div><!--End banner-content -->
							</div><!--End col-sm-12 -->
                        </div><!--End row -->
                    </div><!--End container -->
                </div><!--End display-table-cell -->
            </div><!--End display-table -->
        </div><!--End home-top-banner -->
	</section>
	<!-- end slider and home section -->
	
	<!-- start About section -->
	<section id="about" class="about about-timeline-style">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">About <strong>Me</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
				</div><!-- end col -->
                
                <?php $profileImagePath = $view->getThemePath()."/images/profile/profile-image-1.jpg"?>

				<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-6">
            <div class="profile-image">
                <img src="<?php echo $profileImagePath; ?>" alt="profile photo">
            </div><!-- end profile-image -->
        </div><!-- end col -->
        <div class="col-sm-6">
            <div class="about-text">
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                <div class="button-holder">
                    <a class="btn btn-shutter-out-horizontal" href="#">Download Resume</a>
                    <a class="btn btn-shutter-out-horizontal" href="#contact">Hire Me</a>
                </div><!-- end button-holder -->
            </div><!-- about-text -->
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end col-sm-12 -->

				<div class="col-sm-12">
					<div class="nav-tab-menu">
						<ul class="nav nav-tabs">
							<li class="active">
								<button data-toggle="tab" data-target="#tab1" aria-expanded="true">
									<i class="fa fa-paper-plane-o"></i>
									<span class="tab-title text-bold">Experience</span>
								</button>
							</li>
							<li>
								<button data-toggle="tab" data-target="#tab2" aria-expanded="false">
									<i class="fa fa-graduation-cap"></i>
									<span class="tab-title text-bold">Education</span>
								</button>
							</li>
							<li>
								<button data-toggle="tab" data-target="#tab3" aria-expanded="false">
									<i class="fa fa-trophy"></i>
									<span class="tab-title text-bold">Award</span>
								</button>
							</li>
							<li>
								<button data-toggle="tab" data-target="#tab4" aria-expanded="false">
									<i class="fa fa-diamond"></i>
									<span class="tab-title text-bold">Skills</span>
								</button>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="tab1" class="tab-pane fade active in">
							<div class="icon-holder experience">
								<i class="fa fa-paper-plane-o"></i>
								<span class="tab-content-title text-bold">Experience</span>
							</div>
							<ul class="timeline">
								<li class="timeline-right">
									<div class="timeline-badge">
										<i class="fa fa-calendar"></i>
										<p class="date-inverted">Dec 2016 - Current</p>
									</div><!-- end timeline-badge -->
									<div class="timeline-panel">
										<div class="experience-content">
											<h4>MGS PVT. LTD.</h4>
											<h5>Creative Director</h5>
											<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
										</div>
									</div><!--end timeline-panel -->
								</li><!-- end timeline-right -->
								<li class="timeline-left">
									<div class="timeline-badge">
										<i class="fa fa-calendar"></i>								
										<p class="date">Oct 2015 - Nov 2016</p>
									</div><!-- end timeline-badge -->
									<div class="timeline-panel">
										<div class="experience-content">
											<h4>MGS PVT. LTD.</h4>
											<h5>Senior Designer </h5>
											<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
										</div>
									</div><!-- end timeline-panel -->
								</li><!-- end timeline-left -->
								<li class="timeline-right">
									<div class="timeline-badge">
										<i class="fa fa-calendar"></i>
										<p class="date-inverted">Sep 2013 - Sep 2015</p>
									</div><!-- end timeline-badge -->
									<div class="timeline-panel">
										<div class="experience-content">
											<h4>MGS PVT. LTD.</h4>
											<h5>Designer</h5>
											<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
										</div>
									</div><!-- end timeline-panel -->
								</li><!-- end timeline-right -->
							</ul><!-- end timeline -->
						</div>
						<div id="tab2" class="tab-pane fade">
							<div class="icon-holder education">
								<i class="fa fa-graduation-cap"></i>
								<span class="tab-content-title text-bold">Education</span>
							</div>
							<ul class="timeline">
								<li class="timeline-left">
									<div class="timeline-badge">
										<i class="fa fa-calendar"></i>
										<p class="date">2011 - 2012</p>
									</div><!-- end timeline-badge -->
									<div class="timeline-panel">
										<div class="experience-content">
											<h4>Master's Degree</h4>
											<h5>College Name here</h5>
											<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
										</div>
									</div><!--end timeline-panel -->
								</li><!-- end timeline-left -->
								<li class="timeline-right">
									<div class="timeline-badge">
										<i class="fa fa-calendar"></i>								
										<p class="date-inverted">2007 - 2011</p>
									</div><!-- end timeline-badge -->
									<div class="timeline-panel">
										<div class="experience-content">
											<h4>Bachelor's Degree</h4>
											<h5>Institute Name here</h5>
											<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
										</div>
									</div><!-- end timeline-panel -->
								</li><!-- end timeline-right -->
								<li class="timeline-left">
									<div class="timeline-badge">
										<i class="fa fa-calendar"></i>
										<p class="date">2006 - 2007</p>
									</div><!-- end timeline-badge -->
									<div class="timeline-panel">
										<div class="experience-content">
											<h4>School Education</h4>
											<h5>School Name here</h5>
											<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
										</div>
									</div><!-- end timeline-panel -->
								</li><!-- end timeline-left -->
							</ul><!-- end timeline -->
						</div>
						<div id="tab3" class="tab-pane fade">
							<div class="icon-holder education">
								<i class="fa fa-trophy"></i>
								<span class="tab-content-title text-bold">Award</span>
							</div>
							<ul class="timeline">
								<li class="timeline-right">
									<div class="timeline-badge">
										<i class="fa fa-calendar"></i>
										<p class="date-inverted">May 2017</p>
									</div><!-- end timeline-badge -->
									<div class="timeline-panel">
										<div class="experience-content">
											<h4>People Awards</h4>
											<h5>Institute Name</h5>
											<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
										</div>
									</div><!--end timeline-panel -->
								</li><!-- end timeline-right -->
								<li class="timeline-left">
									<div class="timeline-badge">
										<i class="fa fa-calendar"></i>								
										<p class="date">April 2016</p>
									</div><!-- end timeline-badge -->
									<div class="timeline-panel">
										<div class="experience-content">
											<h4>People Awards</h4>
											<h5>Institute Name</h5>
											<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
										</div>
									</div><!-- end timeline-panel -->
								</li><!-- end timeline-left -->
								<li class="timeline-right">
									<div class="timeline-badge">
										<i class="fa fa-calendar"></i>
										<p class="date-inverted">August 2015</p>
									</div><!-- end timeline-badge -->
									<div class="timeline-panel">
										<div class="experience-content">
											<h4>People Awards</h4>
											<h5>Institute Name</h5>
											<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks.</p>
										</div>
									</div><!-- end timeline-panel -->
								</li><!-- end timeline-right -->
							</ul><!-- end timeline -->
						</div>
						<div id="tab4" class="tab-pane fade">
							<div class="row">
								<div class="progressbar-wrap">
									<div class="col-xs-3">
										<div class="progressbar" data-animate="false">
											<div class="circle" data-percent="98.7" data-color="#04b962">
												<div></div>
												<p>HTML5</p>
											</div><!-- end circle -->
										</div><!-- end progressbar -->
									</div><!-- end col -->
									<div class="col-xs-3">
										<div class="progressbar" data-animate="false">
											<div class="circle" data-percent="95.8" data-color="#04b962">
												<div></div>
												<p>CSS3</p>
											</div><!-- end circle -->
										</div><!-- end progressbar -->
									</div><!-- end col -->
									<div class="col-xs-3">
										<div class="progressbar" data-animate="false">
											<div class="circle" data-percent="90.5" data-color="#04b962">
												<div></div>
												<p>PHP</p>
											</div><!-- end circle -->
										</div><!-- end progressbar -->
									</div><!-- end col -->
									<div class="col-xs-3">
										<div class="progressbar" data-animate="false">
											<div class="circle" data-percent="78.2" data-color="#04b962">
												<div></div>
												<p>Jquery</p>
											</div><!-- end circle -->
										</div><!-- end progressbar -->
									</div><!-- end col -->
								</div><!-- end progressbar-wrap -->
							</div><!-- end row -->
						</div>
					</div><!-- end tab-content -->
				</div><!-- end col-sm-12 -->
				
			</div><!-- end row -->	
		</div><!-- end container -->  
	</section>
	<!-- end About section -->
	
	<!-- start service -->
	<section id="service" class="service service-3-column parallax">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">My  <strong>Services</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col -->
				<div class="col-md-4 col-xs-6">
					<div class="service-wrap">
						<div class="service-box">
							<div class="service-box-wrap">
								<div class="service-icon-box">
									<i class="fa fa-cogs"></i>
								</div>
								<div class="service-short-content-box">
									<h3>App Devlopment</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<a class="btn btn-shutter-out-horizontal" href="single-service.html">Read More</a>
								</div>
							</div><!-- end service-box-wrap -->
						</div><!-- end service-box -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
				<div class="col-md-4 col-xs-6">
					<div class="service-wrap">
						<div class="service-box">
							<div class="service-box-wrap">
								<div class="service-icon-box">
									<i class="fa fa-paint-brush"></i>
								</div>
								<div class="service-short-content-box">
									<h3>Graphic Design</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<a class="btn btn-shutter-out-horizontal" href="single-service.html">Read More</a>
								</div>
							</div><!-- end service-box-wrap -->
						</div><!-- end service-box -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
				<div class="col-md-4 col-xs-6">
					<div class="service-wrap">
						<div class="service-box">
							<div class="service-box-wrap">
								<div class="service-icon-box">
									<i class="fa fa-bolt"></i>
								</div>
								<div class="service-short-content-box">
									<h3>Flash Design</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<a class="btn btn-shutter-out-horizontal" href="single-service.html">Read More</a>
								</div>
							</div><!-- end service-box-wrap -->
						</div><!-- end service-box -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
				<div class="col-md-4 col-xs-6">
					<div class="service-wrap">
						<div class="service-box">
							<div class="service-box-wrap">
								<div class="service-icon-box">
									<i class="fa fa-desktop"></i>
								</div>
								<div class="service-short-content-box">
									<h3>Web Design</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<a class="btn btn-shutter-out-horizontal" href="single-service.html">Read More</a>
								</div>
							</div><!-- end service-box-wrap -->
						</div><!-- end service-box -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
				<div class="col-md-4 col-xs-6">
					<div class="service-wrap">
						<div class="service-box">
							<div class="service-box-wrap">
								<div class="service-icon-box">
									<i class="fa fa-camera"></i>
								</div>
								<div class="service-short-content-box">
									<h3>Photography</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<a class="btn btn-shutter-out-horizontal" href="single-service.html">Read More</a>
								</div>
							</div><!-- end service-box-wrap -->
						</div><!-- end service-box -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
				<div class="col-md-4 col-xs-6">
					<div class="service-wrap">
						<div class="service-box">
							<div class="service-box-wrap">
								<div class="service-icon-box">
									<i class="fa fa-umbrella"></i>
								</div>
								<div class="service-short-content-box">
									<h3>Support</h3>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<a class="btn btn-shutter-out-horizontal" href="single-service.html">Read More</a>
								</div>
							</div><!-- end service-box-wrap -->
						</div><!-- end service-box -->
					</div><!-- end service-wrap -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!--End Container --> 
	</section>
	<!-- end service -->
	
	<!-- start team -->
	<section id="team" class="our-team">
		<div class="container">
			<div class="row" >
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">My  <strong>Team</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!--End col-sm-12 --> 					
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap">
						<div class="team-thumb">
							<img src="<?= $view->getThemePath(); ?>/images/team/team-1.jpg" alt="Thomas Ross">
						</div><!-- end team-thumb -->
						<div class="team-social-box">
							<a href="#" class="social-icon social-icon-small social-icon-facebook">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-twitter">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-gplus">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-linkedin">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
							</a>
						</div><!-- end team-social -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my friend, so absorbed in the exquisite sense of tranquil existence, that I neglect my talents.</p>
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>Thomas Ross</h4>
									<h5>Funder &amp; Director</h5>
								</div><!-- end team-title -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap">
						<div class="team-thumb">
							<img src="<?= $view->getThemePath(); ?>/images/team/team-2.jpg" alt="Resa Rhythm">
						</div><!-- end team-thumb -->
						<div class="team-social-box">
							<a href="#" class="social-icon social-icon-small social-icon-facebook">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-twitter">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-gplus">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-linkedin">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
							</a>
						</div><!-- end team-social -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my friend, so absorbed in the exquisite sense of tranquil existence, that I neglect my talents.</p>
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>Resa Rhythm</h4>
									<h5>Co-Founder</h5>
								</div><!-- end team-title -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap" >
						<div class="team-thumb">
							<img src="<?= $view->getThemePath(); ?>/images/team/team-3.jpg" alt="Emma Jane">
						</div><!-- end team-thumb -->
						<div class="team-social-box">
							<a href="#" class="social-icon social-icon-small social-icon-facebook">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-twitter">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-gplus">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-linkedin">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
							</a>
						</div><!-- end team-social -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my friend, so absorbed in the exquisite sense of tranquil existence, that I neglect my talents.</p>
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>Emma Jane</h4>
									<h5>Ast. Director</h5>
								</div><!-- end team-title -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
				<div class="col-md-3 col-xs-6">
					<div class="team-wrap">
						<div class="team-thumb">
							<img src="<?= $view->getThemePath(); ?>/images/team/team-4.jpg" alt="John Marta">
						</div><!-- end team-thumb -->
						<div class="team-social-box">
							<a href="#" class="social-icon social-icon-small social-icon-facebook">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-twitter">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-gplus">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" class="social-icon social-icon-small social-icon-linkedin">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
							</a>
						</div><!-- end team-social -->
						<div class="team-details">
							<div class="details-plain">
								<p>I am so happy, my friend, so absorbed in the exquisite sense of tranquil existence, that I neglect my talents.</p>
							</div><!-- end details-plain -->
							<div class="details-overly">
								<div class="team-title">
									<h4>John Marta</h4>
									<h5>Ast. Director</h5>
								</div><!-- end team-title -->
							</div><!-- end details-overly -->
						</div><!-- end team-details -->
					</div><!-- end team-wrap -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!--End Container --> 
	</section><!-- End Team -->
	<!-- end team -->
	
	<!-- start portfolio -->
	<section id="portfolio" class="filter-section portfolio-style2 parallax">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">Portfolio  <strong>Gallery</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col -->	
				<div class="col-sm-12">
					<!-- start filter-container -->
					<div class="filter-container isotopeFilters">
						<ul class="list-inline filter">
							<li class="active"><a href="#" data-filter="*">All </a></li>
							<li><a href="#" data-filter=".illustrations">Illustrations</a></li>
							<li><a href="#" data-filter=".photography">Photography</a></li>
							<li><a href="#" data-filter=".websites">Websites</a></li>
							<li><a href="#" data-filter=".art">Art</a></li>
						</ul>
					</div><!--End filter-container -->
				</div><!--End col-sm-12 --> 
				<div class="col-sm-12">	
					<div class="row">
						<div class="isotopeContainer">
							<div class="col-md-3 col-xs-6 no-space isotopeSelector websites">
								<div class="portfolio-wrapper">
									<img src="<?= $view->getThemePath(); ?>/images/portfolio/thumb/1.jpg" alt="Portfolio Title">									
									<div class="portfolio-overlay">
										<div class="portfolio-overlay-inner">
											<div class="portfolio-overlay-content">
												<div class="portfolio-link">
													<a title="Details" href="<?= $view->getThemePath(); ?>/single-portfolio.html"><i class="fa fa-link"></i></a>
													<a data-lightbox="websites" data-title="Image Preview" href="<?= $view->getThemePath(); ?>/images/portfolio/1.jpg"><i class="fa fa-search-plus"></i></a>
												</div><!--End portfolio-link -->
												<div class="portfolio-caption">
													<h3><a href="single-portfolio.html">Portfolio Title</a></h3>
												</div><!--End portfolio-caption -->
											</div><!--End portfolio-overlay-content -->
										</div><!--End portfolio-overlay-inner -->
									</div><!--End portfolio-overlay -->
								</div><!--End portfolio-wrapper -->
							</div>
							<div class="col-md-3 col-xs-6 no-space isotopeSelector photography">
								<div class="portfolio-wrapper">
									<img src="<?= $view->getThemePath(); ?>/images/portfolio/thumb/2.jpg" alt="Portfolio Title">
									<div class="portfolio-overlay">
										<div class="portfolio-overlay-inner">
											<div class="portfolio-overlay-content">
												<div class="portfolio-link">
													<a title="Details" href="<?= $view->getThemePath(); ?>/single-portfolio.html"><i class="fa fa-link"></i></a>
													<a data-lightbox="photography" data-title="Image Preview" href="<?= $view->getThemePath(); ?>/images/portfolio/2.jpg"><i class="fa fa-search-plus"></i></a>
												</div><!--End portfolio-link -->
												<div class="portfolio-caption">
													<h3><a href="<?= $view->getThemePath(); ?>/single-portfolio.html">Portfolio Title</a></h3>
												</div><!--End portfolio-caption -->
											</div><!--End portfolio-overlay-content -->
										</div><!--End portfolio-overlay-inner -->
									</div><!--End portfolio-overlay -->
								</div><!--End portfolio-wrapper -->
							</div>
							<div class="col-md-3 col-xs-6 no-space isotopeSelector art">
								<div class="portfolio-wrapper">
									<img src="<?= $view->getThemePath(); ?>/images/portfolio/thumb/3.jpg" alt="Portfolio Title">
									<div class="portfolio-overlay">
										<div class="portfolio-overlay-inner">
											<div class="portfolio-overlay-content">
												<div class="portfolio-link">
													<a title="Details" href="single-portfolio.html"><i class="fa fa-link"></i></a>
													<a data-lightbox="art" data-title="Image Preview" href="<?= $view->getThemePath(); ?>/images/portfolio/3.jpg"><i class="fa fa-search-plus"></i></a>
												</div><!--End portfolio-link -->
												<div class="portfolio-caption">
													<h3><a href="<?= $view->getThemePath(); ?>/single-portfolio.html">Portfolio Title</a></h3>
												</div><!--End portfolio-caption -->
											</div><!--End portfolio-overlay-content -->
										</div><!--End portfolio-overlay-inner -->
									</div><!--End portfolio-overlay -->
								</div><!--End portfolio-wrapper -->
							</div>
							<div class="col-md-3 col-xs-6 no-space isotopeSelector photography">
								<div class="portfolio-wrapper">
									<img src="<?= $view->getThemePath(); ?>/images/portfolio/thumb/4.jpg" alt="Portfolio Title">
									<div class="portfolio-overlay">
										<div class="portfolio-overlay-inner">
											<div class="portfolio-overlay-content">
												<div class="portfolio-link">
													<a title="Details" href="<?= $view->getThemePath(); ?>/single-portfolio.html"><i class="fa fa-link"></i></a>
													<a data-lightbox="photography" data-title="Image Preview" href="<?= $view->getThemePath(); ?>/images/portfolio/4.jpg"><i class="fa fa-search-plus"></i></a>
												</div><!--End portfolio-link -->
												<div class="portfolio-caption">
													<h3><a href="<?= $view->getThemePath(); ?>/single-portfolio.html">Portfolio Title</a></h3>
												</div><!--End portfolio-caption -->
											</div><!--End portfolio-overlay-content -->
										</div><!--End portfolio-overlay-inner -->
									</div><!--End portfolio-overlay -->
								</div><!--End portfolio-wrapper -->
							</div>
							<div class="col-md-3 col-xs-6 no-space isotopeSelector websites">
								<div class="portfolio-wrapper">
									<img src="<?= $view->getThemePath(); ?>/images/portfolio/thumb/5.jpg" alt="Portfolio Title">
									<div class="portfolio-overlay">
										<div class="portfolio-overlay-inner">
											<div class="portfolio-overlay-content">
												<div class="portfolio-link">
													<a title="Details" href="<?= $view->getThemePath(); ?>/single-portfolio.html"><i class="fa fa-link"></i></a>
													<a data-lightbox="websites" data-title="Image Preview" href="<?= $view->getThemePath(); ?>/images/portfolio/5.jpg"><i class="fa fa-search-plus"></i></a>
												</div><!--End portfolio-link -->
												<div class="portfolio-caption">
													<h3><a href="<?= $view->getThemePath(); ?>/single-portfolio.html">Portfolio Title</a></h3>
												</div><!--End portfolio-caption -->
											</div><!--End portfolio-overlay-content -->
										</div><!--End portfolio-overlay-inner -->
									</div><!--End portfolio-overlay -->
								</div><!--End portfolio-wrapper -->
							</div>
							<div class="col-md-3 col-xs-6 no-space isotopeSelector illustrations">
								<div class="portfolio-wrapper">
									<img src="<?= $view->getThemePath(); ?>/images/portfolio/thumb/6.jpg" alt="Portfolio Title">
									<div class="portfolio-overlay">
										<div class="portfolio-overlay-inner">
											<div class="portfolio-overlay-content">
												<div class="portfolio-link">
													<a title="Details" href="<?= $view->getThemePath(); ?>/single-portfolio.html"><i class="fa fa-link"></i></a>
													<a data-lightbox="illustrations" data-title="Image Preview" href="<?= $view->getThemePath(); ?>/images/portfolio/6.jpg"><i class="fa fa-search-plus"></i></a>
												</div><!--End portfolio-link -->
												<div class="portfolio-caption">
													<h3><a href="<?= $view->getThemePath(); ?>/single-portfolio.html">Portfolio Title</a></h3>
												</div><!--End portfolio-caption -->
											</div><!--End portfolio-overlay-content -->
										</div><!--End portfolio-overlay-inner -->
									</div><!--End portfolio-overlay -->
								</div><!--End portfolio-wrapper -->
							</div>
							<div class="col-md-3 col-xs-6 no-space isotopeSelector art">
								<div class="portfolio-wrapper">
									<img src="<?= $view->getThemePath(); ?>/images/portfolio/thumb/7.jpg" alt="Portfolio Title">
									<div class="portfolio-overlay">
										<div class="portfolio-overlay-inner">
											<div class="portfolio-overlay-content">
												<div class="portfolio-link">
													<a title="Details" href="<?= $view->getThemePath(); ?>/single-portfolio.html"><i class="fa fa-link"></i></a>
													<a data-lightbox="art" data-title="Image Preview" href="<?= $view->getThemePath(); ?>/images/portfolio/7.jpg"><i class="fa fa-search-plus"></i></a>
												</div><!--End portfolio-link -->
												<div class="portfolio-caption">
													<h3><a href="<?= $view->getThemePath(); ?>/single-portfolio.html">Portfolio Title</a></h3>
												</div><!--End portfolio-caption -->
											</div><!--End portfolio-overlay-content -->
										</div><!--End portfolio-overlay-inner -->
									</div><!--End portfolio-overlay -->
								</div><!--End portfolio-wrapper -->
							</div>
							<div class="col-md-3 col-xs-6 no-space isotopeSelector illustrations">
								<div class="portfolio-wrapper">
									<img src="<?= $view->getThemePath(); ?>/images/portfolio/thumb/8.jpg" alt="Portfolio Title">
									<div class="portfolio-overlay">
										<div class="portfolio-overlay-inner">
											<div class="portfolio-overlay-content">
												<div class="portfolio-link">
													<a title="Details" href="<?= $view->getThemePath(); ?>/single-portfolio.html"><i class="fa fa-link"></i></a>
													<a data-lightbox="illustrations" data-title="Image Preview" href="<?= $view->getThemePath(); ?>/images/portfolio/8.jpg"><i class="fa fa-search-plus"></i></a>
												</div><!--End portfolio-link -->
												<div class="portfolio-caption">
													<h3><a href="<?= $view->getThemePath(); ?>/single-portfolio.html">Portfolio Title</a></h3>
												</div><!--End portfolio-caption -->
											</div><!--End portfolio-overlay-content -->
										</div><!--End portfolio-overlay-inner -->
									</div><!--End portfolio-overlay -->
								</div><!--End portfolio-wrapper -->
							</div>
						</div><!--End isotopeContainer -->
					</div>	
				</div>  <!--End col-sm-12 -->  
			</div><!-- end row -->
		</div><!--End container -->
	</section>
	<!-- end portfolio -->
	
	<!-- start Pricing Plan 14 -->
	<section id="pricingtable" class="pricing">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">Pricing  <strong>Plan</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col -->
			</div><!-- end row -->	
			<div class="row">
				<div class="col-sm-4">
					<div class="pricing-plan-wrap">
						<div class="pricing-plan-header">
							<h3>Starter</h3>
							<div class="price-holder">
								<p class="dolar"><sup>$</sup>19</p>
								<sub>/month<strong>*</strong></sub>
							</div><!-- end price-holder -->
						</div><!-- end pricing-plan-header -->
						<ul class="list-unstyled">
							<li>10GB Storage</li>
							<li>10 Emails</li>
							<li>10 Domains</li>
							<li>Unlimited Bandwidth</li>
						</ul><!-- end list -->
						<a class="btn btn-shutter-out-horizontal" href="#">Choose Plan</a>
					</div><!-- end pricing-plan-wrap -->
				</div><!-- end pricing-plan -->
				<div class="col-sm-4">
					<div class="pricing-plan-wrap active">
						<div class="pricing-plan-header">
							<h3>Standard</h3>
							<div class="price-holder">
								<p class="dolar"><sup>$</sup>29</p>
								<sub>/month<strong>*</strong></sub>
							</div><!-- end price-holder -->
						</div><!-- end pricing-plan-header -->
						<ul class="list-unstyled">
							<li>15GB Storage</li>
							<li>15 Emails</li>
							<li>15 Domains</li>
							<li>Unlimited Bandwidth</li>
						</ul><!-- end list -->
						<a class="btn btn-shutter-out-horizontal" href="#">Choose Plan</a>
					</div><!-- end pricing-plan-wrap -->
				</div><!-- end pricing-plan -->
				<div class="col-sm-4">
					<div class="pricing-plan-wrap">
						<div class="pricing-plan-header">
							<h3>Premium</h3>
							<div class="price-holder">
								<p class="dolar"><sup>$</sup>39</p>
								<sub>/month<strong>*</strong></sub>
							</div><!-- end price-holder -->
						</div><!-- end pricing-plan-header -->
						<ul class="list-unstyled">
							<li>20GB Storage</li>
							<li>20 Emails</li>
							<li>20 Domains</li>
							<li>Unlimited Bandwidth</li>
						</ul><!-- end list -->
						<a class="btn btn-shutter-out-horizontal" href="#">Choose Plan</a>
					</div><!-- end pricing-plan-wrap -->
				</div><!-- end pricing-plan -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end Pricing Plan 14 -->
	
	<!--  start quotes-section -->
	<section id="quotes-section" class="quotes-section parallax">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="quotes-wrap text-center">
						<!-- start section title-wrap -->
						<div class="title-wrap">
							<div class="section-title-box">
								<h2 class="section-title">Let's Work  <strong>Together</strong></h2>
							</div><!-- end section-title-box -->
						</div>
						<!-- end section title-wrap -->
						<p>I am available for freelance.</p>
						<a class="btn btn-shutter-out-horizontal btn-transparent" href="#contact">Get Quotes</a>
					</div>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end quotes-section -->
	
	<!-- start blog -->
	<section id="blog" class="blog blog-style2">
		<div class="container">
			<div class="row">	
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">Blog  <strong>Post</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col -->
			</div><!-- end row -->				
			<div class="row">
				<div class="col-sm-12">
					<div class="owl-carousel">
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="<?= $view->getThemePath(); ?>/images/blog/thumb/1.jpg" alt="Blog Image">
								</div><!--End post-thumb -->
								<div class="post-content">
									<div class="post-title">
										<h3><a href="<?= $view->getThemePath(); ?>/single-blog.html">A small river named Duden place</a></h3>
									</div><!--End post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!--End post-excerpt -->
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Zinia Jones</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">Oct 12, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#">8</a></span>
									</div><!--End post-meta -->
								</div><!--End post-content -->
							</article><!--End post-wrap -->
						</div><!--End item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="<?= $view->getThemePath(); ?>/images/blog/thumb/2.jpg" alt="Blog Image">
								</div><!--End post-thumb -->
								<div class="post-content">
									<div class="post-title">
										<h3><a href="<?= $view->getThemePath(); ?>/single-blog.html">A small river named Duden place</a></h3>
									</div><!--End post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="<?= $view->getThemePath(); ?>/single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!--End post-excerpt -->
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Zinia Jones</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">Oct 12, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#">8</a></span>
									</div><!--End post-meta -->
								</div><!--End post-content -->
							</article><!--End post-wrap -->
						</div><!--End item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="<?= $view->getThemePath(); ?>/images/blog/thumb/3.jpg" alt="Blog Image">
								</div><!--End post-thumb -->
								<div class="post-content">
									<div class="post-title">
										<h3><a href="<?= $view->getThemePath(); ?>/single-blog.html">A small river named Duden place</a></h3>
									</div><!--End post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="<?= $view->getThemePath(); ?>/single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!--End post-excerpt -->
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Zinia Jones</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">Oct 12, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#">8</a></span>
									</div><!--End post-meta -->
								</div><!--End post-content -->
							</article><!--End post-wrap -->
						</div><!--End item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="<?= $view->getThemePath(); ?>/images/blog/thumb/4.jpg" alt="Blog Image">
								</div><!--End post-thumb -->
								<div class="post-content">
									<div class="post-title">
										<h3><a href="<?= $view->getThemePath(); ?>/single-blog.html">A small river named Duden place</a></h3>
									</div><!--End post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="<?= $view->getThemePath(); ?>/single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!--End post-excerpt -->
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Zinia Jones</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">Oct 12, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#">8</a></span>
									</div><!--End post-meta -->
								</div><!--End post-content -->
							</article><!--End post-wrap -->
						</div><!--End item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="<?= $view->getThemePath(); ?>/images/blog/thumb/5.jpg" alt="Blog Image">
								</div><!--End post-thumb -->
								<div class="post-content">
									<div class="post-title">
										<h3><a href="<?= $view->getThemePath(); ?>/single-blog.html">A small river named Duden place</a></h3>
									</div><!--End post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="<?= $view->getThemePath(); ?>/single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!--End post-excerpt -->
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Zinia Jones</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">Oct 12, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#">8</a></span>
									</div><!--End post-meta -->
								</div><!--End post-content -->
							</article><!--End post-wrap -->
						</div><!--End item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="<?= $view->getThemePath(); ?>/images/blog/thumb/6.jpg" alt="Blog Image">
								</div><!--End post-thumb -->
								<div class="post-content">
									<div class="post-title">
										<h3><a href="<?= $view->getThemePath(); ?>/single-blog.html">A small river named Duden place</a></h3>
									</div><!--End post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="<?= $view->getThemePath(); ?>/single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!--End post-excerpt -->
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Zinia Jones</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">Oct 12, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#">8</a></span>
									</div><!--End post-meta -->
								</div><!--End post-content -->
							</article><!--End post-wrap -->
						</div><!--End item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="<?= $view->getThemePath(); ?>/images/blog/thumb/7.jpg" alt="Blog Image">
								</div><!--End post-thumb -->
								<div class="post-content">
									<div class="post-title">
										<h3><a href="<?= $view->getThemePath(); ?>/single-blog.html">A small river named Duden place</a></h3>
									</div><!--End post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!--End post-excerpt -->
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Zinia Jones</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">Oct 12, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#">8</a></span>
									</div><!--End post-meta -->
								</div><!--End post-content -->
							</article><!--End post-wrap -->
						</div><!--End item -->
						<div class="item">
							<article class="post-wrap">
								<div class="post-thumb">
									<img src="<?= $view->getThemePath(); ?>/images/blog/thumb/8.jpg" alt="Blog Image">
								</div><!--End post-thumb -->
								<div class="post-content">
									<div class="post-title">
										<h3><a href="single-blog.html">A small river named Duden place</a></h3>
									</div><!--End post-title -->
									<div class="post-excerpt">
										<p>The Big Oxmox advised her not to do so, because there were... <a class="btn-more" href="<?= $view->getThemePath(); ?>/single-blog.html">Read More <i class="fa fa-angle-double-right"></i></a></p>
									</div><!--End post-excerpt -->
									<div class="post-meta">
										<span><i class="fa fa-user"></i><a href="#">Zinia Jones</a></span>
										<span><i class="fa fa-calendar"></i><a href="#">Oct 12, 2017</a></span>
										<span><i class="fa fa-comments"></i><a href="#">8</a></span>
									</div><!--End post-meta -->
								</div><!--End post-content -->
							</article><!--End post-wrap -->
						</div><!--End item -->
					</div><!-- end carousel -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end blog -->
	
	<!-- start testimonials -->
	<section id="testimonials" class="testimonials testimonial-single parallax">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">What  <strong>Client Say!</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
				</div><!-- end col -->
			</div><!-- end row -->
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="owl-carousel owl-theme">
						<div class="testimonial-item">
							<div class="testimonial-image">
								<img src="<?= $view-> getThemePath(); ?>/images/customer/customer-1.jpg" alt="Jonathon Hume"/>
							</div><!--End testimonial-image -->
							<div class="testimonial-content">
								<div class="rating-wrap">
									<div class="rating">
										<div class="stars five"></div>
									</div>
								</div><!--End rating-wrap -->
								<p class="blockquote">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
								<div class="testimonial-author">
									<h4 class="text-capitalize">Lisa Hume</h4>
									<p>CEO, MGSTech.</p>
								</div><!--End testimonial-author -->
							</div><!--End testimonial-content -->
						</div><!-- end testimonial-item -->							
						<div class="testimonial-item">
							<div class="testimonial-image">
								<img src="<?= $view->getThemePath(); ?>/images/customer/customer-2.jpg" alt="John Doe" />
							</div><!--End testimonial-image -->
							<div class="testimonial-content">
								<div class="rating-wrap">
									<div class="rating">
										<div class="stars five"></div>
									</div>
								</div><!--End rating-wrap -->
								<p class="blockquote">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
								<div class="testimonial-author">
									<h4 class="text-capitalize">John Doe</h4>
									<p>Designer, MGSUI</p>
								</div><!--End testimonial-author -->
							</div><!--End testimonial-content -->
						</div><!-- end testimonial-item -->
						<div class="testimonial-item">
							<div class="testimonial-image">
								<img src="<?= $view->getThemePath(); ?>/images/customer/customer-3.jpg" alt="Jonathon Hume" />
							</div><!--End testimonial-image -->
							<div class="testimonial-content">
								<div class="rating-wrap">
									<div class="rating">
										<div class="stars five"></div>
									</div>
								</div><!--End rating-wrap -->
								<p class="blockquote">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
								<div class="testimonial-author">
									<h4 class="text-capitalize">Mike Arthur</h4>
									<p>CEO, MGSIT</p>
								</div><!--End testimonial-author -->
							</div><!--End testimonial-content -->
						</div><!-- end testimonial-item -->
					</div><!-- end carousel -->
				</div><!-- end col -->
			</div><!-- end row --> 
		</div><!-- end container --> 
	</section>
	<!-- end testimonials -->
	
	<!-- start clients -->
	<section id="clients" class="clients">
		<div class="container">
			<div class="row">				
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">My  <strong>Clients</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
				</div><!-- end col -->
				<div class="col-sm-12">						
					<div class="owl-carousel owl-theme">
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/1.png" alt="client 1"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/2.png" alt="client 2"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/3.png" alt="client 3"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/4.png" alt="client 4"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/5.png" alt="client 5"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/6.png" alt="client 6"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/7.png" alt="client 7"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/8.png" alt="client 8"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/9.png" alt="client 9"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/10.png" alt="client 10"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/11.png" alt="client 11"/>
						</div><!-- end client-item-wrap -->
						<div class="client-item-wrap">
							<img src="<?= $view->getThemePath(); ?>/images/clients/12.png" alt="client 12"/>
						</div><!-- end client-item-wrap -->
					</div><!-- end owl-carousel -->
				</div><!-- end col -->
			</div><!-- end row -->	
		</div><!-- end container -->   
		<div class="clearfix"></div>
	</section>
	<!-- end clients -->
	
	<!-- start success-story -->
	<section id="success-story" class="success-story parallax">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">Success  <strong>Story</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
				</div><!-- end col -->
				<!-- BEGIN count Box -->
				<div class="success-story-inner text-center">
					<div class="col-xs-6 col-md-3">
						<div class="counter-wrap">
							<div class="counter-icon"><i class="fa fa-coffee"></i></div>
							<div class="counter-text">
								<div class="counter">34360</div>
								<p>CUPS OF COFFEE</p>
							</div><!-- end counter-text -->
						</div><!-- end counter-wrap -->
					</div><!-- end col -->
					<div class="col-xs-6 col-md-3">
						<div class="counter-wrap">
							<div class="counter-icon"><i class="fa fa-trophy"></i></div>
							<div class="counter-text">
								<div class="counter">32</div>
								<p>AWARDS</p>
							</div><!-- end counter-text -->
						</div><!-- end counter-wrap -->
					</div><!-- end col -->
					<div class="col-xs-6 col-md-3">
						<div class="counter-wrap">
							<div class="counter-icon"><i class="fa fa-book"></i></div>
							<div class="counter-text">
								<div class="counter">218</div>
								<p>BOOKS</p>
							</div><!-- end counter-text -->
						</div><!-- end counter-wrap -->
					</div><!-- end col -->
					<div class="col-xs-6 col-md-3">
						<div class="counter-wrap">
							<div class="counter-icon"><i class="fa fa-group"></i></div>
							<div class="counter-text">
								<div class="counter">94360</div>
								<p>FANS</p>
							</div><!-- end counter-text -->
						</div><!-- end counter-wrap -->
					</div><!-- end col --> 
				</div><!-- end text-center --> 
				<!-- END count Box -->	
			</div><!-- end row --> 
		</div><!-- end container --> 
	</section>
	<!--End #success-story -->
	
	<!-- start contact -->
	<section id="contact" class="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- start section title-wrap -->
					<div class="title-wrap">
						<div class="section-title-box">
							<h2 class="section-title">Wanna  <strong>Talk</strong></h2>
						</div><!-- end section-title-box -->
					</div>
					<!-- end section title-wrap -->
					<div class="intro-text text-center">
						A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my heart.
					</div><!-- end intro-text -->
				</div><!-- end col -->
			</div><!-- end row -->	
			<!-- start contact section -->
			<div class="row">
				<div class="col-sm-6">
					<!-- start title-box -->
					<div class="title-box">
						<h3 class="sub-title">Write <strong>Me</strong></h3>
					</div>
					<!-- end title-box -->
					<form id="contactForm" name="contactform" data-toggle="validator" class="contact-form">
						<div id="msgContactSubmit" class="hidden"></div>
						<div class="form-group col-sm-12">
							<div class="help-block with-errors"></div>
							<input name="fname" id="fname" placeholder="Your Name*" class="form-control" type="text" required data-error="Please enter Name"> 
							<div class="input-group-icon"><i class="fa fa-user"></i></div>
						</div><!-- end form-group -->
						<div class="form-group col-sm-12">
							<div class="help-block with-errors"></div>
							<input name="email" id="email" placeholder="Your Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" type="email" required data-error="Please enter valid Email"> 
							<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
						</div><!-- end form-group -->
						<div class="form-group col-sm-12">
							<div class="help-block with-errors"></div>
							<input name="phone" id="phone" placeholder="Phone* Use Only Digit with/without + sign" class="form-control" type="text" required data-error="Please enter valid Phone">
							<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
						</div><!-- end form-group -->
						<div class="form-group col-sm-12">
							<div class="help-block with-errors"></div>
							<textarea rows="3" name="message" id="message" placeholder="Write comment here*" class="form-control" required data-error="Please enter message"></textarea>
							<div class="input-group-icon"><i class="fa fa-pencil"></i></div>
						</div><!-- end form-group -->
						<div class="form-group col-sm-12">
							<button type="submit" id="submit" class="btn btn-shutter-out-horizontal">Send</button>
						</div><!-- end form-group -->					
						<span class="sub-text">* Required fields</span>
						<div class="clearfix"></div>
					</form><!-- end form -->
				</div><!-- end col -->
				
				<div class="col-sm-6">
					<!-- start title-box -->
					<div class="title-box">
						<h3 class="sub-title">Get Free <strong>Quote</strong></h3>
					</div>
					<!-- end title-box -->
					<!-- strat quoteForm -->
					<div id="serviceQuoteForm" class="hireme-holder">
						<form id="quoteForm" name="free-quote" data-toggle="validator" class="quoteForm">
							<div id="msgQuoteSubmit" class="hidden"></div>
							<div class="form-group">
								<div class="help-block with-errors"></div>
								<input name="fname" id="quoteName" placeholder="Full Name*" class="form-control" required data-error="Please enter Name" type="text">
								<div class="input-group-icon"><i class="fa fa-user"></i></div>
							</div><!-- end form-group -->
							<div class="form-group">
								<div class="help-block with-errors"></div>
								<input name="email" id="quoteEmail" placeholder="Email Address*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" required data-error="Please enter valid Email" type="email"> 
								<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
							</div><!-- end form-group -->
							<div class="form-group">
								<div class="help-block with-errors"></div>
								<input name="phone" id="quotePhone" placeholder="Phone* Use Only Digit with/without + sign" class="form-control" required data-error="Please enter valid Phone" type="text">
								<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
							</div><!-- end form-group -->
							<div class="form-group">
								<div class="help-block with-errors"></div>
								<input name="address" id="address" placeholder="Address*" class="form-control" required data-error="Please enter Address" type="text">
								<div class="input-group-icon"><i class="fa fa-map-marker"></i></div>
							</div><!-- end form-group -->
							<div class="form-group">
								<div class="help-block with-errors"></div>
								<select name="service" id="quoteService" class="form-control" required data-error="Please Select Service">
									<option value="">--- Select a Sevice* ---</option>
									<option value="Web Design">Web Design</option>
									<option value="Graphic Design">Graphic Design</option>
									<option value="Flash Design">Flash Design</option>
									<option value="Photography">Photography</option>
									<option value="App Devlopment">App Devlopment</option>
									<option value="Support">Support</option>
								</select>
								<div class="input-group-icon"><i class="fa fa-cogs"></i></div> 
							</div><!-- end form-group -->
							<div class="form-group bottomMargin0">
								<button type="submit" id="quoteSubmit" class="btn btn-shutter-out-horizontal disabled" style="pointer-events: all; cursor: pointer;">Send Request</button>									
							</div>
							<span class="sub-text">* Required fields</span>
						</form><!-- end form -->
					</div>
					<!-- end quoteForm -->
				</div><!-- end col -->
			</div><!-- end row -->
			<!-- end contact section -->
			<div class="row">	
				<!-- start contact Info -->
				<div class="col-sm-12 text-center">
					<div class="row">
						<div class="col-sm-4">
							<div class="contact-item">
								<div class="contact-item-inner">
									<div class="contact-icon">
										<i class="fa fa-home"></i>
									</div>
									<div class="contact-desc">
										<h4>70 Trent Rd, Luton LU3 1TA</h4>
									</div>
								</div><!-- end contact-item-inner -->
							</div><!-- end contact-item -->
						</div><!-- end col -->
						<div class="col-sm-4">
							<div class="contact-item">
								<div class="contact-item-inner">
									<div class="contact-icon">
										<i class="fa fa-envelope"></i>
									</div>
									<div class="contact-desc">
										<h4><a href="mailto:sales@yourwebsite.com">sales@yourwebsite.com</a></h4>
									</div>
								</div><!-- end contact-item-inner -->
							</div><!-- end contact-item --> 
						</div><!-- end col -->
						<div class="col-sm-4">
							<div class="contact-item">
								<div class="contact-item-inner">
									<div class="contact-icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="contact-desc">
										<h4><a href="tel:000-0000-0000">+000 0000 0000</a></h4>
									</div>
								</div><!-- end contact-item-inner --> 
							</div><!-- end contact-item --> 
						</div><!-- end col -->
					</div><!-- end row -->
				</div><!-- end col-sm-12 -->
				<!-- end contact Info -->
			</div><!-- end row -->
		 </div><!-- end container --> 
	</section>
	<!-- end contact -->
	
	<!-- start footer -->
	<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-top clearfix">
                <div class="col-sm-4">
                    <div class="columnbottom-margin subscribe-form-wrap">
                        <h4 class="widget-title">Subscribe <span>NewsLetter</span></h4>
                        <p>By subscribing to our mailing list you will always get latest news from us.</p>
                        <div class="mc-form-holder">
                            <form id="mc-form">
                                <input id="mc-email" class="form-control" placeholder="email address" name="EMAIL" type="email">
                                <button class="btn" type="submit"><i class="fa fa-paper-plane"></i></button>
                                <label for="mc-email"></label>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="columnbottom-margin recent-work-wrap">
                        <h4 class="widget-title">Recent <span>Work</span></h4>
                        <div class="latest-pfolio">
                            <?php for ($i = 1; $i <= 3; $i++): ?>
                                <div class="col-xs-4 no-space">
                                    <div class="portfolio-wrapper">
                                        <img src="<?= $view->getThemePath(); ?>/images/portfolio/thumb/<?= $i ?>.jpg" alt="Portfolio Title">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-overlay-inner">
                                                <div class="portfolio-overlay-content">
                                                    <div class="portfolio-link">
                                                        <a title="Details" href="<?= $view->getThemePath(); ?>/single-portfolio.html"><i class="fa fa-link"></i></a>
                                                        <a data-lightbox="recentwork" data-title="Image Preview" href="<?= $view->getThemePath(); ?>/images/portfolio/<?= $i ?>.jpg"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="columnbottom-margin contact-info-wrap">
                        <h4 class="widget-title">Contact <span>Details</span></h4>
                        <ul class="contact-info list-unstyled">
                            <li><i class="fa fa-home"></i> 70 Trent Rd, Luton LU3 1TA, UK</li>
                            <li><i class="fa fa-phone"></i> <a href="tel:000-0000-0000">000 0000 0000</a></li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:sales@yourwebsite.com">sales@yourwebsite.com</a></li>
                        </ul>
                        <ul class="list-inline list-social clearfix">
                            <?php
                            $socialLinks = [
                                'facebook' => 'fa-facebook',
                                'twitter' => 'fa-twitter',
                                'google-plus' => 'fa-google-plus',
                                'vimeo' => 'fa-vimeo',
                                'pinterest' => 'fa-pinterest',
                                'linkedin' => 'fa-linkedin'
                            ];
                            foreach ($socialLinks as $platform => $icon):
                            ?>
                                <li>
                                    <a href="#" class="social-icon social-icon-small social-icon-<?=$platform ?>">
                                        <i class="fa <?= $icon ?>"></i>
                                        <i class="fa <?= $icon ?>"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
		<div class="col-sm-12">   
        <a href="#" class="footer-logo-link">
            <img class="footer-logo" src="<?= $view-> getThemePath(); ?>/images/footer-logo.png"  alt="Site Logo">
        </a>   
    <p class="text-center copyright">&copy; <?= date('Y') ?> <a href="https://1.envato.market/kPy00" class="footer-site-link">MGScoder</a> All rights reserved. <a href="https://1.envato.market/7B3dY" class="footer-site-link">Buy AboutMe HTML Template</a></p>
</div>


</div>

    </div>
</footer>

	<!-- end footer -->
	
	<a href="#" class="scrollup"><i class="fa fa-arrow-circle-up"></i></a>
	
	<!-- jQuery Library -->
	<!-- jQuery Library -->
<script src="<?= $view->getThemePath(); ?>/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap Js -->
<script src="<?= $view->getThemePath(); ?>/js/bootstrap.min.js"></script>
<!-- Circle Progress Js -->
<script src="<?= $view->getThemePath(); ?>/js/circle-progress.js"></script>
<!-- Isotope Filtring Js -->
<script src="<?= $view->getThemePath(); ?>/js/isotope.pkgd.min.js"></script>
<!-- Lightbox Js -->
<script src="<?= $view->getThemePath(); ?>/js/lightbox.min.js"></script>
<!-- owl.carousel Js -->
<script src="<?= $view->getThemePath(); ?>/js/owl.carousel.min.js"></script>
<!-- Form validator Js -->
<script src="<?= $view->getThemePath(); ?>/js/validator.min.js"></script>
<!-- ajaxchimp Js -->
<script src="<?= $view->getThemePath(); ?>/js/jquery.ajaxchimp.min.js"></script>
<!-- counterup Js -->
<script src="<?= $view->getThemePath(); ?>/js/waypoint.js"></script>    
<script src="<?= $view->getThemePath(); ?>/js/jquery.counterup.min.js"></script>
<!-- Template main Js -->
<script src="<?= $view->getThemePath(); ?>/js/main.js"></script>

	
</body>
</html>