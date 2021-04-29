<?php get_header(); ?>

<div class="intro">
	<div class="container">
		<div class="intro_inner">
			<h3 class="intro_suptitle">Hello, friend! This is my environment for additional learning. There are links above to view my templates markup examples.</h2>
			<h2 class="intro_title">Welcome to Test! Enjoy!</h1>
		</div>
	</div>
</div>

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
								<img class="blog_photo" src="<?php echo get_template_directory_uri();?>/assets/images/about-1.jpg" alt="">
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
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri();?>/assets/images/vie.jpg" alt=""> 542
								</span>
								<span class="blog_statItem">
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri();?>/assets/images/com.jpg" alt=""> 17
								</span>
							</div>
						</div>
					</div>
					
					<div class="blog_item">
						<div class="blog_header">
							<a href="#">
								<img class="blog_photo" src="<?php echo get_template_directory_uri();?>/assets/images/about-2.jpg" alt="">
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
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri();?>/assets/images/vie.jpg" alt=""> 992
								</span>
								<span class="blog_statItem">
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri();?>/assets/images/com.jpg" alt=""> 42
								</span>
							</div>
						</div>
					</div>

					<div class="blog_item">
						<div class="blog_header">
							<a href="#">
								<img class="blog_photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-3.jpg" alt="">
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
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/vie.jpg" alt=""> 1560
								</span>
								<span class="blog_statItem">
									<img class="blog_statIcon" src="<?php echo get_template_directory_uri(); ?>/assets/images/com.jpg" alt=""> 98
								</span>
							</div>
						</div>
					</div>					
				</div><!-- /.blog -->
				
			</div><!-- /.cotainer -->
		</section>

<?php

if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

//		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
//	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
//	get_template_part( 'template-parts/content/content-none' );

}

get_footer();

?>