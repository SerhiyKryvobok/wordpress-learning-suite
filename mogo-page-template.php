<?php /* Template name: mogo */?>
<?php get_template_part('template-parts/mogo/header', 'mogo'); ?>
	<div class="page">

		<!-- Intro -->
		<div class="intro" id="intro">
			<div class="container">
				<div class="intro_inner">
					<h2 class="intro_suptitle">Learning environment</h2>
					<h1 class="intro_title">Welcome to Test</h1>
					
					<a class="btn" href="#">Push me!</a>
				</div>
			</div>
			<div class="slider">
				<div class="container">
					<div class="slider_inner">
						<div class="slider_item active">
							<span class="slider_num">1</span>
							<span class="slider_text">slide</span>
						</div>
						<div class="slider_item">
							<span class="slider_num">2</span>
							<span class="slider_text">slide</span>
						</div>
						<div class="slider_item">
							<span class="slider_num">3</span>
							<span class="slider_text">slide</span>
						</div>
						<div class="slider_item">
							<span class="slider_num">4</span>
							<span class="slider_text">slide</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- About -->
		<section class="section" id="about">
			<div class="container">
			
				<div class="section_header">
					<h3 class="section_suptitle">What we do</h3>
					<h2 class="section_title">Story about us</h2>
					<div class="section_text">
						<p>Loore.....</p>
					</div>
				</div>
				
				<div class="card">
					<div class="card_item">
						<div class="card_inner">
							<div class="card_img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/about/1.png" alt="">
							</div>
							<div class="card_text">thinking...</div>
						</div>
					</div>
					<div class="card_item">
						<div class="card_inner">
							<div class="card_img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/about/2.png" alt="">
							</div>
							<div class="card_text">growing...</div>
						</div>
					</div>
					<div class="card_item">
						<div class="card_inner">
							<div class="card_img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/about/3.png" alt="">
							</div>
							<div class="card_text">use!</div>
						</div>
					</div>
				</div>
				
			</div> <!-- /.container -->
		</section>
		
		<!-- Statistics -->
		<div class="statistics">
			<div class="container">
			
				<div class="stat">
					<div class="stat_item">
						<div class="stat_count">00</div>
						<div class="stat_text">Implemented templates</div>
					</div>
					<div class="stat_item">
						<div class="stat_count">00</div>
						<div class="stat_text">..etc #1</div>
					</div>
					<div class="stat_item">
						<div class="stat_count">00</div>
						<div class="stat_text">..etc #2</div>
					</div>
					<div class="stat_item">
						<div class="stat_count">00</div>
						<div class="stat_text">..etc #3</div>
					</div>
					<div class="stat_item">
						<div class="stat_count">00</div>
						<div class="stat_text">..etc #4</div>
					</div>
				</div>
			
			</div>
		</div> <!-- /.statistics -->
		
		<!-- Services -->
		<section class="section">
			<div class="container">

				<div class="section_header">
					<h3 class="section_suptitle">We work with</h3>
					<h2 class="section_title">Amazing services</h2>
				</div>

				<div class="services">
				
					<div class="services_item services_item--border">
						<img class="services_icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/services/photo.png">
						<div class="services_title">Photography</div>
						<div class="services_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
					</div>

					<div class="services_item services_item--border">
						<img class="services_icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/services/web.png">
						<div class="services_title">Web design</div>
						<div class="services_text">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
					</div>

					<div class="services_item services_item--border">
						<img class="services_icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/services/creat.png">
						<div class="services_title">Creativity</div>
						<div class="services_text">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
					</div>

					<div class="services_item">
						<img class="services_icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/services/seo.png">
						<div class="services_title">Seo</div>
						<div class="services_text">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
					</div>

					<div class="services_item ">
						<img class="services_icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/services/css.png">
						<div class="services_title">Css/Html</div>
						<div class="services_text">Lorem dolor sit amet, consectetur adipiscing elit, sed do tempor.</div>
					</div>

					<div class="services_item">
						<img class="services_icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/services/digit.png">
						<div class="services_title">Digital</div>
						<div class="services_text">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
					</div>
					
				</div>

			</div> <!-- /.container -->
		</section>
		
		<!-- Devices -->
		<section class="section section--devices">
			<div class="container">
			
				<div class="section_header">
					<h3 class="section_suptitle">For all devices</h3>
					<h2 class="section_title">Unique design</h2>
				</div>
				
				<div class="devices">
					<img class="devices_item" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/devices/ipad.png">
					<img class="devices_item devices_item--iphone" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/devices/iphone.png">
				</div>
				
				<div ></div>
			</div> <!-- /.container -->
		</section>
		
		<!-- Service -->
		<section class="section" id="service">
			<div class="container">
			
				<div class="section_header">
					<h3 class="section_suptitle">Service</h3>
					<h2 class="section_title">what we do</h2>
					<div class="section_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				
				<div class="wedo">
					<div class="wedo_item">
						<img class="wedo_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/wedo/wedo.png">
					</div>
					<div class="wedo_item">
						
						<div class="accordion">
							<div class="accordion_item" data-collapse="#wedo_1">
								<div class="accordion_header">
									<img class="accordion_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/wedo/photo.png">
									<div class="accordion_title">Photography</div>
								</div>
								<div class="accordion_content" id="wedo_1">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
							
							<div class="accordion_item active" data-collapse="#wedo_2">
								<div class="accordion_header">
									<img class="accordion_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/wedo/creat.png">
									<div class="accordion_title">creativity</div>
								</div>
								<div class="accordion_content" id="wedo_2">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
							
							<div class="accordion_item" data-collapse="#wedo_3">
								<div class="accordion_header">
									<img class="accordion_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/wedo/web.png">
									<div class="accordion_title">web design</div>
								</div>
								<div class="accordion_content" id="wedo_3">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</div> <!-- /.accordion-->
						
					</div> <!-- /.wedo_item -->
				</div> <!-- /.wedo -->

			</div> <!-- /.container -->
		</section>
		
		<!-- Reviews 1 -->
		<div class="section section--grey">
			<div class="container">
				<div class="reviews" data-slider>
					
					<div class="reviews_item">
						<img class="reviews_photo" src="http://placehold.it/145" alt="">
						<div class="reviews_text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
						<div class="reviews_author">John Doe</div>
					</div>
					
					<div class="reviews_item">
						<img class="reviews_photo" src="http://placehold.it/145" alt="">
						<div class="reviews_text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
						<div class="reviews_author">John Doe</div>
					</div>
				</div>
			</div> <!-- /.container -->
		</div>
		
		<!-- Contacts -->
		<section class="section" id="contacts">
			<div class="container">
				<div class="section_header">
					<h3 class="section_suptitle">Who we are</h3>
					<h2 class="section_title">Meet our team</h2>
					<div class="section_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<div class="card">
					<div class="card_item">
						<div class="card_inner">
							<div class="card_img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/team/1.png" alt="">
							</div>
							<div class="card_text">
								<div class="social">
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-facebook-f"></i>
									</a>
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-twitter"></i>
									</a>
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-pinterest-p"></i>
									</a>
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-instagram"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="card_info">
							<div class="card_name">Matthew Dix</div>
							<div class="card_prof">Graphic Design</div>
						</div>
					</div> <!-- /.card_item -->
					<div class="card_item">
						<div class="card_inner">
							<div class="card_img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/team/2.png" alt="">
							</div>
							<div class="card_text">	
								<div class="social">
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-facebook-f"></i>
									</a>
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-twitter"></i>
									</a>
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-pinterest-p"></i>
									</a>
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-instagram"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="card_info">
							<div class="card_name">Christopher Campbell</div>
							<div class="card_prof">Branding/UX design</div>
						</div>
					</div> <!-- /.card_item -->
					<div class="card_item">
						<div class="card_inner">
							<div class="card_img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/team/3.png" alt="">
							</div>
							<div class="card_text">
								<div class="social">
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-facebook-f"></i>
									</a>
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-twitter"></i>
									</a>
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-pinterest-p"></i>
									</a>
									<a class="social_item" href="#" target="_blank">	
										<i class="fab fa-instagram"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="card_info">
							<div class="card_name">Michael Fertig </div>
							<div class="card_prof">Developer</div>
						</div>
					</div> <!-- /.card_item -->
				</div> <!-- /.card -->				
			</div> <!-- /.container -->
		</section>
		
		<!-- Logos -->
		<div class="section section--grey">
			<div class="container">
				
				<div class="logos">
					<div class="logos_item">
						<img class="logos_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/logos/1.png" alt="">
					</div>
					<div class="logos_item">
						<img class="logos_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/logos/2.png" alt="">
					</div>
					<div class="logos_item">
						<img class="logos_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/logos/3.png" alt="">
					</div>
					<div class="logos_item">
						<img class="logos_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/logos/4.png" alt="">
					</div>
					<div class="logos_item">
						<img class="logos_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/logos/5.png" alt="">
					</div>
					<div class="logos_item">
						<img class="logos_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/logos/6.png" alt="">
					</div>
				</div>
				
			</div>
		</div>

		<!-- Works -->
		<section class="section" id="work">
			<div class="container">
				<div class="section_header">
					<h3 class="section_suptitle">What we do</h3>
					<h2 class="section_title">some of our work</h2>
					<div class="section_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div> <!-- /.container -->
			
			<div class="works">
				
				<div class="works_col">
					<div class="works_item">
						<img class="works_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/1.jpg" alt="">
						<div class="works_info">
							<img class="works_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/icon.png">
							<div class="works_title">creatively designed</div>
							<div class="works_text">Lorem ipsum dolor sit</div>
						</div>
					</div>
					<div class="works_item">
						<img class="works_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/2.jpg" alt="">
						<div class="works_info">
							<img class="works_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/icon.png">
							<div class="works_title">creatively designed</div>
							<div class="works_text">Lorem ipsum dolor sit</div>
						</div>
					</div>
				</div>
				<div class="works_col">
					<div class="works_item">
						<img class="works_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/3.jpg" alt="">
						<div class="works_info">
							<img class="works_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/icon.png">
							<div class="works_title">creatively designed</div>
							<div class="works_text">Lorem ipsum dolor sit</div>
						</div>
					</div>
					<div class="works_item">
						<img class="works_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/4.jpg" alt="">
						<div class="works_info">
							<img class="works_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/icon.png">
							<div class="works_title">creatively designed</div>
							<div class="works_text">Lorem ipsum dolor sit</div>
						</div>
					</div>				
				</div>
				<div class="works_col">
					<div class="works_item">
						<img class="works_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/5.jpg" alt="">
						<div class="works_info">
							<img class="works_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/icon.png">
							<div class="works_title">creatively designed</div>
							<div class="works_text">Lorem ipsum dolor sit</div>
						</div>
					</div>					
				</div>
				<div class="works_col">
					<div class="works_item">
						<img class="works_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/6.jpg" alt="">
						<div class="works_info">
							<img class="works_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/icon.png">
							<div class="works_title">creatively designed</div>
							<div class="works_text">Lorem ipsum dolor sit</div>
						</div>
					</div>
					<div class="works_item">
						<img class="works_img" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/7.jpg" alt="">
						<div class="works_info">
							<img class="works_icon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/works/icon.png">
							<div class="works_title">creatively designed</div>
							<div class="works_text">Lorem ipsum dolor sit</div>
						</div>
					</div>						
				</div>
					
			</div> <!-- /.works -->

		</section>
		
		<!-- Reviews 2 -->
		<div class="section section--reviews">
			<div class="container">
				<div class="reviews" data-slider>
					<!--a class="reviews_btn reviews_btn--prev" href="#">Prev</a>
					<a class="reviews_btn reviews_btn--next" href="#">Next</a-->
				
					<div class="reviews_item">
						<img class="reviews_photo" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/reviews/2.jpg" alt="">
						<div class="reviews_text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
						<div class="reviews_author">John Doe</div>
					</div>
					
					<div class="reviews_item">
						<img class="reviews_photo" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/reviews/2.jpg" alt="">
						<div class="reviews_text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
						<div class="reviews_author">John Doe</div>
					</div>
				</div>
			</div> <!-- /.container -->
		</div>
		
		<!-- Clients -->
		<section class="section section--clients">
			<div class="container">
				<div class="section_header">
					<h3 class="section_suptitle">Happy Clients</h3>
					<h2 class="section_title">What people say</h2>
				</div>				
				
				<div class="clients">
					<div class="clients_item">
						<img class="clients_photo" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/clients/1.jpg" alt="">
						<div class="clients_content">
							<div class="clients_name">Matthew Dix</div>
							<div class="clients_prof">Graphic Design</div>
							<div class="clients_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
						</div>
					</div>
					<div class="clients_item">
						<img class="clients_photo" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/clients/2.jpg" alt="">
						<div class="clients_content">
							<div class="clients_name">Nick Karvounis</div>
							<div class="clients_prof">Graphic Design</div>
							<div class="clients_text">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
						</div>
					</div>
					<div class="clients_item">
						<img class="clients_photo" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/clients/3.jpg" alt="">
						<div class="clients_content">
							<div class="clients_name">Jaelynn Castillo </div>
							<div class="clients_prof">Graphic Design</div>
							<div class="clients_text">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
						</div>
					</div>
					<div class="clients_item">
						<img class="clients_photo" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/clients/4.jpg" alt="">
						<div class="clients_content">
							<div class="clients_name">Mike Petrucci</div>
							<div class="clients_prof">Graphic Design</div>
							<div class="clients_text">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
						</div>
					</div>
				</div>
				
			</div><!-- /.container -->
		</section>

		<!-- Blog -->
		<section class="section" id="blog">
			<div class="container">
				<div class="section_header">
					<h3 class="section_suptitle">Our stories</h3>
					<h2 class="section_title">Latest blog</h2>
				</div>	
				
				<div class="blog">
					<div class="blog_item">
						<div class="blog_header">
							<a href="#">
								<img class="blog_photo" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/blog/1.jpg" alt="">
							</a>
							<div class="blog_date">
								<div class="blog_date-day">15</div>Jan
							</div>
						</div>
						<div class="blog_content">
							<div class="blog_title">
								<a href="#">Lorem ipsum dolor sit amet</a>
							</div>
							<div class="blog_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
						<div class="blog_footer">
							<div class="blog_stat">
								<span class="blog_statItem">
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/blog/vie.jpg" alt=""> 542
								</span>
								<span class="blog_statItem">
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/blog/com.jpg" alt=""> 17
								</span>
							</div>
						</div>
					</div>
					
					<div class="blog_item">
						<div class="blog_header">
							<a href="#">
								<img class="blog_photo" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/blog/2.jpg" alt="">
							</a>
							<div class="blog_date">
								<div class="blog_date-day">14</div>Jan
							</div>
						</div>
						<div class="blog_content">
							<div class="blog_title">
								<a href="#">sed do eiusmod tempor</a>
							</div>
							<div class="blog_text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
						<div class="blog_footer">
							<div class="blog_stat">
								<span class="blog_statItem">
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/blog/vie.jpg" alt=""> 992
								</span>
								<span class="blog_statItem">
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri();?>/assets/images/mogo/blog/com.jpg" alt=""> 42
								</span>
							</div>
						</div>
					</div>

					<div class="blog_item">
						<div class="blog_header">
							<a href="#">
								<img class="blog_photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/blog/3.jpg" alt="">
							</a>
							<div class="blog_date">
								<div class="blog_date-day">12</div>Jan
							</div>
						</div>
						<div class="blog_content">
							<div class="blog_title">
								<a href="#">incididunt ut labore et dolore</a>
							</div>
							<div class="blog_text">Elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</div>
						</div>
						<div class="blog_footer">
							<div class="blog_stat">
								<span class="blog_statItem">
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/blog/vie.jpg" alt=""> 1560
								</span>
								<span class="blog_statItem">
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/blog/com.jpg" alt=""> 98
								</span>
							</div>
						</div>
					</div>					
				</div><!-- /.blog -->
				
			</div><!-- /.cotainer -->
		</section>

		<!-- Map -->
		<section class="section section--map">
			<div class="container">
				<div class="map">
					<h2 class="map_title">
						<div><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/mogo/map/icon.png" alt="">
						</div>
						<a href="https://goo.gl/maps/PZJDcCtMLvpTiGJw8" target="_blank">Open map</a>
					</h2>
				</div>
			</div>
		</section>
		
	</div><!-- /.page -->
<?php get_template_part('template-parts/mogo/footer', 'mogo'); ?>
