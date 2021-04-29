<!--			<div>
		<?php
			$menu = wp_nav_menu([
				'theme_location'	=> 'footer-menu',
				'fallback_cb' 		=> null,
				'echo'				=> false
			]);
			if ( $menu ) {
				// Content before menu
				echo $menu;
				// Content after menu
			} else {
				// In case there is no menu
				echo 'There is no menu here!..';
			}
		?>
		</div>-->
		<footer class="footer">
			<div class="container">
		
				<div class="footer_inner">
					<div class="footer_col footer_col--first">
						<div class="footer_logo">MoGo</div>
						<div class="footer_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						</div>
						
						<div class="footer_social">
							<div class="footer_social-header">
								<b>15k</b> followers
							</div>
							<div class="footer_social-content">
								Follow us:
								<a href="#" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/assets/images/footer/ico_1.jpg" alt="">
								</a>
								<a href="#" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/assets/images/footer/ico_2.jpg" alt="">
								</a>
								<a href="#" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/assets/images/footer/ico_3.jpg" alt="">
								</a>
								<a href="#" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/assets/images/footer/ico_4.jpg" alt="">
								</a>
								<a href="#" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/assets/images/footer/ico_5.jpg" alt="">
								</a>
								<a href="#" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/assets/images/footer/ico_6.jpg" alt="">
								</a>
								<a href="#" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/assets/images/footer/ico_7.jpg" alt="">
								</a>
								<a href="#" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/assets/images/footer/ico_8.jpg" alt="">
								</a>
							</div>
						</div>
						
						<form class="subscribe" action="/" method="post">
							<input class="subscribe_input" type="email" name="name" placeholder="Your Email...">
							<button class="subscribe_btn" type="submit">Subscribe</button>
						</form>
						
					</div><!-- /.footer_col -->
					
					<div class="footer_col footer_col--second">
						<div class="footer_title">Blogs</div>
						
						<div class="fblog">
							<div class="fblog_item">
								<div class="fblog_img">
									<img  src="<?php bloginfo('template_directory');?>/assets/images/footer/1.jpg">
								</div>
								<div class="fblog_content">
									<a class="fblog_title" href="#">Lorem ipsum dolor sit amet, 
									consectetur adipiscing</a>
									<div class="fbolg_date">Jan 9, 2016</div>
								</div>
							</div>
							<div class="fblog_item">
								<div class="fblog_img">
									<img  src="<?php bloginfo('template_directory');?>/assets/images/footer/2.jpg">
								</div>
								<div class="fblog_content">
									<a class="fblog_title" href="#">Consectetur adipiscing elit, 
									sed do eiusmod tempor</a>
									<div class="fbolg_date">Jan 9, 2016</div>
								</div>
							</div>
							<div class="fblog_item">
								<div class="fblog_img">
									<img  src="<?php bloginfo('template_directory');?>/assets/images/footer/3.jpg">
								</div>
								<div class="fblog_content">
									<a class="fblog_title" href="#">sed do eiusmod tempor 
									incididunt ut labore</a>
									<div class="fbolg_date">Jan 9, 2016</div>
								</div>
							</div>
							
						</div><!-- /.fblog -->
						
					</div>

					<div class="footer_col footer_col--third">
						<div class="footer_title">Instagram</div>
					
						<div class="instagram">
							<div class="instagram_item">
								<img src="<?php bloginfo('template_directory');?>/assets/images/footer/insta.png" alt="">
							</div>
							<div class="instagram_link">
								<a href="#" target="_blank">View more photos</a>
							</div>
						</div>
					</div>
				</div><!-- /.footer_inner -->
				
				<div class="copyright">
					© 2021 WPL by <span>ME</span>
				</div>
			
			</div><!-- /.container -->
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>