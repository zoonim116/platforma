<?php get_header(); ?>
<section class="slider">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			       <?php do_action('plt_get_homepage_slides', 10); ?>
			  </div>
			  <div class="slide__control">
			  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <i class="fa fa-angle-left" aria-hidden="true"></i>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <i class="fa fa-angle-right" aria-hidden="true"></i>
				</a>
			  </div>
			</div>
</section>
<section class="actualitate">
		<div class="container">
			<h3 class="title-block"><?php echo  __('Actualitate', 'platforma'); ?></h3>
			<div class="actualitate-slider-wrap">
				<div class="slide-control">
				  	<a class="control-prev">
					    <i class="fa fa-angle-left"></i>
					</a>
					<a class="control-next">
					    <i class="fa fa-angle-right"></i>
					</a>
				 </div>
			<div class="actualitate-slider">
				<?php do_action('plt_get_actualitate_news', 10); ?>
			</div>
			<a class="btn btn-primary btn-more" href="#" role="button">Mai multe informații</a>
			</div>

		</div>
	</section>
	<section class="documents">
		<div class="container">
			<h3 class="title-block"><?php echo __('Documente', 'platforma'); ?></h3>
			<p class="title-block-content">
				<?php the_field('documents_section_description'); ?>
			</p>
			<div class="documents-slider">
				<?php do_action('plt_get_homepage_documents'); ?>
			</div>
			<a class="btn btn-primary btn-more" href="<?php echo get_post_type_archive_link('documents'); ?>" role="button"><?php echo __('Mai multe informații', 'platforma'); ?></a>
		</div>
	</section>
	<section class="news-wrap">
		<div class="container">
			<h3 class="title-block"><?php echo __('Știrile noastrev', 'platforma'); ?></h3>
			<p class="title-block-content">
				<?php the_field('news_section_description'); ?>
			</p>
			<div class="news-wrap__slide">
				<div class="news-wrap__slide-item">
					<div class="row">
						<?php do_action('plt_get_latest_news_homepage', 10); ?>
					</div>
				</div>
			</div>
			<a class="btn btn-primary btn-more" href="<?php echo get_post_type_archive_link('news'); ?>" role="button"><?php echo __('Mai multe informații', 'platforma'); ?></a>
		</div>
	</section>
<?php get_footer(); ?>
