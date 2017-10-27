<?php get_header(); ?>
<section class="events-page">
		<div class="events-page-tabs">
			<div class="container">
				<ul class="tabs">
				  <li class="active"><a href="#tab1" class="active"><?php echo __('Următoarele evenimente', 'platforma'); ?></a></li>
				  <li><a href="#tab2"><?php echo __('Evenimente trecute', 'platforma'); ?></a></li>
				</ul>
			</div>
		</div>
		<div class="events-page-items">
			<div class="container">
				<div id="tab1" class="tabs-item">
				    <?php do_action('get-nearest-event'); ?>
						<div class="row">
							<div class="col-lg-9 col-md-6">
								<div class="tabs-content">
								  	<?php do_action('get-future-events'); ?>
									<a class="btn btn-primary btn-more" id="more_future"  href="#" role="button"><?php echo __('Mai multe informații', 'platforma'); ?></a>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 sidebar">
								<?php do_action('get-nearest-event-in-sidebar'); ?>
								<div class="fb-iframe">
									<?php dynamic_sidebar('Facebook sidebar widget'); ?>
								</div>
								<div class="latest-news">
								<p class="title-block"><?php echo __('Știri noi', 'platforma'); ?></p>
								<div class="sidebar-latest-news">
									<?php do_action('plt_get_news_for_sidebar', 5); ?>
						      <a class="btn btn-primary btn-more" href="#" id="load_more_news_sidebar" role="button"><?php echo __('Arată încă 5', 'platforma'); ?></a>
								</div>
							</div>
							</div>
						</div>
				</div>
				<div id="tab2" class="tabs-item end-events">
						<div class="row">
							<div class="col-lg-9 col-md-6">
								<div class="tabs-content">
								  	<?php do_action('get-past-events'); ?>
									<a class="btn btn-primary btn-more" id="more_post" href="#" role="button"><?php echo __('Mai multe informații', 'platforma'); ?></a>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 sidebar">
								<?php do_action('get-nearest-event-in-sidebar'); ?>
								<div class="fb-iframe">
									<?php dynamic_sidebar('Facebook sidebar widget'); ?>
								</div>
								<div class="latest-news">
								<p class="title-block"><?php echo __('Ultimile știri', 'platforma'); ?></p>
								<div class="sidebar-latest-news">
									<?php do_action('plt_get_news_for_sidebar', 5); ?>
									<a class="btn btn-primary btn-more" href="#" id="load_more_news_sidebar" role="button"><?php echo __('Arată încă 5', 'platforma'); ?></a>
								</div>
							</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
