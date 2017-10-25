<section class="footer">
		<div class="footer-contact-form">
      <div class="map-iframe">
            <?php dynamic_sidebar('Google maps widget'); ?>
      </div>
			<div class="container">
				<div class="col-lg-5 col-md-7">
					<?php  if(qtranxf_getLanguage() == 'ro') : ?>
						<?php echo do_shortcode('[contact-form-7 id="61" title="Contactați-ne"]'); ?>
					<?php else: ?>
							<?php echo do_shortcode('[contact-form-7 id="63" title="Contact Us"]'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="footer-navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 footer-navigation-address">
						<p class="footer-navigation-address-title"><?php echo __('Centrul Parteneriat pentru Dezvoltare', 'platforma'); ?></p>
						<p class="footer-navigation-address-content"><?php dynamic_sidebar('Address widget'); ?></p>
						<?php dynamic_sidebar('Social widget'); ?>
					</div>
					<div class="col-md-6 col-lg-3 footer-navigation-menu">
						<p class="footer-navigation-address-title"><?php echo __('Navigare', 'platforma'); ?></p>
							<?php dynamic_sidebar('Footer menu widget'); ?>
					</div>
					<div class="col-md-6 col-lg-3 footer-navigation-lang">
						<p class="footer-navigation-address-title"><?php echo __('Your language is', 'platforma'); ?>:</p>
						<?php
							if(qtranxf_getLanguage() == 'ro') {
								$ro = "#";
								$en = str_replace('/', '/en/', $_SERVER['REQUEST_URI']);
							} else {
								$en = "#";
								$ro = str_replace('/en/', '/ro/', $_SERVER['REQUEST_URI']);
							}
						?>
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php if(qtranxf_getLanguage() == 'ro') : ?>
									Română
								<?php else: ?>
									English
								<?php endif; ?>
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item <?php if(qtranxf_getLanguage() == 'ro') echo 'active'; ?>" href="<?php echo $ro; ?>">Română</a>
						    <a class="dropdown-item <?php if(qtranxf_getLanguage() == 'en') echo 'active'; ?>" href="<?php echo $en; ?>">English</a>
						  </div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 footer-navigation-form">
						<p class="footer-navigation-address-title"><?php echo __("Pentru noutăți abonați-vă la newsletter", 'platforma'); ?></p>
						<form>
						  <div class="form-group">
						    <input type="email" class="form-control" id="InputEmail2" placeholder="Email">
						  </div>
						  <button type="submit" class="btn btn-primary">Abonează-te</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div>
						<p>© <?php echo date('Y'); ?> <a href="#">Centrul Parteneriat pentru Dezvoltare</a>, All Rights Reserved.</p>
					</div>
					<div>
						<p>Created by <a href="#">RMinds</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php wp_footer(); ?>
</body>
</html>
