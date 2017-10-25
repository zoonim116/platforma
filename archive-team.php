<?php get_header(); ?>
<section class="team-page wrap-page">
		<div class="bread-wrap">
			<div class="container">
				<div>
					<a href="#"><?php echo __('Acasă', 'platforma'); ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					<span><?php echo __('Membrii platformei', 'platforma'); ?></span>
				</div>
			</div>
		</div>
		<div class="container">
			<h1 class="title-wrap"><?php echo __('Membrii platformei', 'platforma'); ?></h1>
			<div class="wrap-page-row">
				<div class="row">
					<div class="col-lg-9 col-md-6">
						<?php do_action('plt-get-team-members'); ?>
					</div>
					<?php get_sidebar( 'without-news' ); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
