<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Kashish </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Modernizr -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        <style>
    .logo {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 48px;
      color: white;
      background-color: #2e3e44; /* Match background color as needed */
      padding: 20px;
      display: inline-block;
      height: 60px;
    }

    .logo .dot {
      color: white;
      font-size: 0.9em;
      margin-left: 2px;
    }

    .fluid{
        height: 350px;
        width: 350px;
    }

    </style>

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			{{-- <img class="img-fluid" src="{{ asset('assets/images/logo.png') }}" alt="" /> --}}
            <div class="logo" style="font-size: 48px">
                Kashish<span class="dot" style="font-size: 100
                px">.</span>
            </div>
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#testimonials">Testimonials</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('{{ asset('assets/uploads/back.jpeg') }}') no-repeat center center; background-size: cover; height: 100vh;">
		<div class="heading">
			<h1>hello i'm Kashish</h1>
			<p>"Passionate web developer blending creativity and code to build elegant, functional websites."</p>
			<h3 class="cd-headline clip is-full-width">
				<span>Let's build something amazing together — </span>
				<span class="cd-words-wrapper">
					<b class="is-visible">Web Development</b>
					<b>Web Designing</b>
					<b>Creative Design</b>
					<b>Backend Development</b>
				</span>
			</h3>
		</div>
	</section>

	<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>About Kashish.</h2>
                        <p>
                            I'm a passionate and dedicated developer with a strong foundation in modern web technologies. I enjoy building efficient, user-friendly websites and applications that solve real-world problems. With a detail-oriented approach and a love for clean code, I bring both creativity and functionality to every project.
                        </p>
                        <p>
                            I believe in continuous learning, collaboration, and creating digital experiences that make an impact. Whether it's front-end design or back-end logic, I aim to deliver work that not only meets expectations but exceeds them.
                        </p>

                        <a href="#" class="sim-btn btn-hover-new" id="viewButton" data-text="View CV"><span>View CV</span></a>
                        {{-- <a href="#" class="sim-btn btn-hover-new" id="downloadButton" data-text="Download CV"><span>Download CV</span></a> --}}
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="{{ asset('assets/uploads/image.png') }}" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Services</h3>
                <p>I offer a range of services to help you build, launch, and grow your digital presence. Whether you're looking for a custom website, a mobile-friendly design, or a complete brand identity, I deliver solutions tailored to your unique needs. Explore the services below to see how I can help bring your ideas to life.</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-seo"></i>
						</div>
						<h2>Web Development</h2>
						<p>I build dynamic, high-performance websites and applications tailored to your business needs using modern tech stacks and clean code.</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>Responsive Design</h2>
						<p>I ensure your website looks perfect on all devices—desktops, tablets, and mobiles—providing a seamless user experience everywhere.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>Creative Design</h2>
						<p>Crafting visually appealing and user-friendly designs that not only look great but also reflect your brand’s personality and purpose.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>Support</h2>
						<p>Providing reliable post-launch support, updates, and troubleshooting to keep your digital presence smooth and stress-free.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>Web Idea</h2>
						<p>Have an idea? I help transform concepts into fully functional web products with a strong focus on usability and performance.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>Graphic Design</h2>
						<p>From logos to social media creatives, I design eye-catching graphics that make your brand stand out and connect with your audience.</p>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Portfolio</h3>
                <p>Explore a curated collection of my work, ranging from responsive web development and creative design to professional graphic work. Each project showcases my attention to detail, technical skill, and dedication to delivering visually engaging and user-centric experiences. Whether it's building clean code or crafting bold visuals, I strive to bring ideas to life through thoughtful design and development.</p>
            </div><!-- end title -->
			
			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-left">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".gal_a">Web Development</button>
						<button data-filter=".gal_b">Creative Design</button>
						<button data-filter=".gal_c">Graphic Design</button>
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
                <div class="col-md-4 col-sm-6 gallery-grid gal_c">
					<div class="gallery-single fix">
						<img src="{{ asset('assets/uploads/graphics.jpg') }}" class="img-fluid fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('assets/uploads/graphics.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
                
				<div class="col-md-4 col-sm-6 gallery-grid gal_b">
					<div class="gallery-single fix">
						<img src="{{ asset('assets/uploads/creative.jpg') }}" class="img-fluid fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('assets/uploads/creative.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b">
					<div class="gallery-single fix">
						<img src="{{ asset('assets/uploads/creative-1.jpg') }}" class="img-fluid fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('assets/uploads/creative-1.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-grid gal_a">
					<div class="gallery-single fix">
						<img src="{{ asset('assets/uploads/web.jpg') }}" class="img-fluid fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('assets/uploads/web.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-grid gal_b">
					<div class="gallery-single fix">
						<img src="{{ asset('assets/uploads/gallery_img-04.jpg') }}" class="img-fluid fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('assets/uploads/gallery_img-04.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c">
					<div class="gallery-single fix">
						<img src="{{ asset('assets/uploads/gallery_img-05.jpg') }}" class="img-fluid fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('assets/uploads/gallery_img-05.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c">
					<div class="gallery-single fix">
						<img src="{{ asset('assets/uploads/graphics1.jpg') }}" class="img-fluid fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('assets/uploads/graphics1.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-grid gal_a">
					<div class="gallery-single fix">
						<img src="{{ asset('assets/uploads/web1.jpg') }}" class="img-fluid fluid" alt="Image">
						<div class="img-overlay">
							<a href="{{ asset('assets/uploads/web1.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	 <div id="testimonials" class="section wb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Testimonials</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/uploads/testi_01.png') }}" alt="" class="img-fluid alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/uploads/testi_02.png') }}" alt="" class="img-fluid alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/uploads/testi_03.png') }}" alt="" class="img-fluid alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/uploads/testi_01.png') }}" alt="" class="img-fluid alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/uploads/testi_02.png') }}" alt="" class="img-fluid alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/uploads/testi_03.png') }}" alt="" class="img-fluid alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="blog" class="section lb">
		<div class="container">
			<div class="section-title text-left">
                <h3>Blog</h3>
                <p>Welcome to my blog! Here, I share insights, tutorials, and updates on web development, design trends, and the creative process. Whether you're a fellow developer, designer, or someone curious about tech, there's something here for you. Stay tuned for valuable content and fresh ideas!</p>
            </div><!-- end title -->
			
			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{ asset('assets/uploads/blog-01.jpg') }}" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Crafting Scalable and Secure Web Apps with Spring Boot & JWT</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>As a developer, I’m always exploring how design and functionality merge. Here, I share my experience working with Spring Boot to build secure, role-based applications using JWT. A great read if you're into clean, explicit Java code!</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{ asset('assets/uploads/blog-02.jpg') }}" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>22</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Building Clean Architectures with Spring Boot & Java</h4>
							<ul>
                                <li>by admin</li>
                                <li>Aug 22, 2022</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Clean code is not just a preference — it’s a necessity. Here, I break down how I structured a full-stack Java web project with a layered architecture, using H2 for development and integrating Swagger UI for seamless documentation.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="{{ asset('assets/uploads/blog-03.jpg') }}" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>02</span>
								<span>Nov</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Design Meets Code: My Journey into Web UI Styling</h4>
							<ul>
                                <li>by admin</li>
                                <li>Nov 02, 2024</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Combining modern UI design with robust backend logic is a balance I strive for. This post reflects on how I approached styling the frontend of this very portfolio — minimal, modern, and user-friendly, using only custom CSS and thoughtful layout.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-left">
                <h3>Contact</h3>
                <p>Whether you have a question, want to collaborate, or just want to say hi —
                    my inbox is always open. I’ll try my best to get back to you as soon as I can!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            @csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" name="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" name="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" name="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn btn-hover-new" data-text="Send Message" type="submit">Send Message</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#home">Home</a>
                        <a href="#blog">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#about">About</a>
                        <a href="#">Faq</a>
                        <a href="#contact">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2025 <a href="#">Kashish</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
<script src="{{ asset('assets/js/all.js') }}"></script>
<!-- Camera Slider -->
<script src="{{ asset('assets/js/jquery.mobile.customized.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script> 
<script src="{{ asset('assets/js/parallaxie.js') }}"></script>
<script src="{{ asset('assets/js/headline.js') }}"></script>
<!-- Contact form JavaScript -->
<script src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('assets/js/contact_me.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/jquery.vide.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#viewButton").click(function (e) {
            e.preventDefault();
            window.location.href = "http://127.0.0.1:8000/assets/uploads/kashish_prasad_cv.pdf";
        });
    });
    
    $(document).on('click', '.download-ss-btn', function () {

        $.ajax({
            type: "POST",
            url: 'http://127.0.0.1:8080/utils/json/pdfGen',
            data: {
                data: JSON.stringify(jsonData)
            }

        }).done(function (data) {
            var blob = new Blob([data]);
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = "Sample.pdf";
            link.click();
        });
    });

    // $(document).ready(function() {

    //     $('#contactForm').bootstrapValidator({
    //         // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
    //         feedbackIcons: {
    //             valid: 'fa fa-check',
    //             invalid: 'fa fa-times',
    //             validating: 'fa fa-refresh'
    //         },
    //         fields: {
    //             name: {
    //                 validators: {
    //                         stringLength: {
    //                         min: 2,
    //                     },
    //                         notEmpty: {
    //                         message: 'Name is required'
    //                     }
    //                 }
    //             },
    //             email: {
    //                 validators: {
    //                     notEmpty: {
    //                         message: 'Email is required'
    //                     },
    //                     emailAddress: {
    //                         message: 'Enter a valid email address'
    //                     }
    //                 }
    //             },
    //             // message: {
    //             //     validators: {
    //             //           stringLength: {
    //             //             min: 10,
    //             //             max: 1000,
    //             //             message:'Votre message doit faire plus de 10 caractères et moins de 1000.'
    //             //         },
    //             //         notEmpty: {
    //             //             message: 'Veuillez indiquer votre message'
    //             //         }
    //             //         }
    //             //     },
    //             phone: {
    //                 validators: {
    //                         stringLength: {
    //                         min: 10,
    //                     },
    //                         notEmpty: {
    //                         message: 'Phone is required'
    //                     }
    //                 }
    //             }
    //     }}).on('success.form.bv', function (e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: "POST",
    //             url: "{{ route('store') }}",
    //             data: formData,
    //             dataType: "json",
    //             encode: true,
    //             success: function(data){
    //                 if(data == "1")
    //                     $('#message').html("<h2>Contact form submitted successfully").append("<p>We will be in touch soon.</p>").hide().fadeIn("slow");
    //                 else
    //                     console.log("Error");
    //             }
    //         });
    //     });
    // });

</script>
</body>
</html>
