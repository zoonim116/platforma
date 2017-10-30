<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<section class="header">
		<div class="container">
			<div class="row">
				<div class="header__logo col-md-9">
					<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
            	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					 ?>
					<a href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo[0] ; ?>" alt="<?php echo bloginfo('name') ; ?>"><span><?php echo __('Platforma Societății Civile EU Moldova', 'platforma'); ?></span></a>
				</div>
				<div class="header__menu col-md-3">
					<div class="row">
					<div class="header__menu-lang">
						<ul>
							<?php
								$cnt = 0;
								if(qtranxf_getLanguage() == 'ro') {
									$ro = "#";
									$en = '/en'. $_SERVER['REQUEST_URI'];
								} else {
									$en = "#";
									$ro = str_replace('/en/', '/ro/', $_SERVER['REQUEST_URI'], $cnt);
								}
							?>
							<li class="<?php if(qtranxf_getLanguage() == 'ro')  { echo 'active'; } ?>">
								<?php if(qtranxf_getLanguage() == 'ro') : ?>
									<span>Română</span>
								<?php else : ?>
									<a href="<?php echo $ro; ?>">Română</a>
								<?php endif; ?>
							</li>
							<li class="<?php if(qtranxf_getLanguage() == 'en')  { echo 'active'; } ?>">
								<?php if (qtranxf_getLanguage() == 'en') : ?>
									<span>English</span>
								<?php else : ?>
									<a href="<?php echo $en; ?>">English</a>
								<?php endif; ?>
							</li>
						</ul>
					</div>
					<div class="header__menu-search"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__search-form">
			<div class="container">
				<?php get_search_form(); ?>
				
			</div>
		</div>
	</section>
	<section class="navigation-wrap">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			 <div class="container">
				 <?php
					wp_nav_menu( array(
							'menu'              => 'main-menu',
							'theme_location'    => 'main-menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'navbarSupportedContent',
							'menu_class'        => 'navbar-nav mr-auto',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker())
					);
			?>
		 </div>
		</nav>
	</section>
