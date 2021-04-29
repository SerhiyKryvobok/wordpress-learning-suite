<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<title>WPL</title>
		<?php wp_head(); ?>
	</head>

	<body>
		<header class="header" id="header">
			<div class="container">
				<div class="header_inner">
					<div class="header_logo" data-scroll="#intro"><!--a class="home" href="/"-->WPL</a>
<!--						<?php if ( get_header_image() ) : ?>
							<a href="<?php echo esc_url( home_url( '/' )); ?>" rel="home">
								<img class="block relative" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							</a>
						<?php endif; ?>-->
					</div>
					
					<nav class="nav" id="nav">
						<!--div class="nav_list" id="nav_list">	
							<a class="nav_link" href="#">About</a> 
							<a class="nav_link" href="#" >Service</a> 
							<a class="nav_link" href="#" >Blog</a> 
							<a class="nav_link" href="#" >Work</a> 
							<a class="nav_link" href="#" >Contacts</a> 
						</div-->
						<?php
							if ( has_nav_menu('mainpage-menu')) {
								// Content before menu
								wp_nav_menu([
									'theme_location' => 'mainpage-menu'
								]);
								// Content after menu
							} else {
								// Content, if theres no menu..
								echo 'There is no menu here!..';
							}		
						?>
					</nav>
					
					<button class="nav-toggle" id="nav_toggle" type="button">
						<span class="nav-toggle_item">Menu</span>
					</button>	
					
				</div>
			</div> 
		</header>
