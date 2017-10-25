<?php get_header(); ?>
<section class="documents-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-6  documents-page-list">
					<h3 class="title-block"><?php echo post_type_archive_title(); ?></h3>
					<p class="title-block-content">
						<?php echo get_field('documents_section_description', get_post(9)); ?>
					</p>
					<div class="documents-page-list-wrap">
						<?php do_action('plt_get_documents', 10); ?>
					</div>
					<a class="btn btn-primary btn-more" id="load_more_documents" href="#" role="button">Mai multe informații</a>
				</div>
				<div class="col-lg-3 col-md-6 sidebar">
					<div class="latest-news">
						<p class="title-block"><?php echo __('Ultimile știri', 'platforma'); ?></p>
						<div class="sidebar-latest-news">
							<div class="sidebar-latest-news-items">
								<a href="#" class="row">
									<img src="img/news1.jpg" alt="slide">
									<p>reședintele raionului Cimișlia iese din PPEM: Apreciez acțiunile Guvernului Filip</p>
								</a>
							</div>
							<div class="sidebar-latest-news-items">
								<a href="#" class="row">
									<img src="img/news1.jpg" alt="slide">
									<p>reședintele raionului Cimișlia iese din PPEM: Apreciez acțiunile Guvernului Filip</p>
								</a>
							</div>
							<div class="sidebar-latest-news-items">
								<a href="#" class="row">
									<img src="img/news1.jpg" alt="slide">
									<p>reședintele raionului Cimișlia iese din PPEM: Apreciez acțiunile Guvernului Filip</p>
								</a>
							</div>
							<div class="sidebar-latest-news-items">
								<a href="#" class="row">
									<img src="img/news1.jpg" alt="slide">
									<p>reședintele raionului Cimișlia iese din PPEM: Apreciez acțiunile Guvernului Filip</p>
								</a>
							</div>
							<div class="sidebar-latest-news-items">
								<a href="#" class="row">
									<img src="img/news1.jpg" alt="slide">
									<p>reședintele raionului Cimișlia iese din PPEM: Apreciez acțiunile Guvernului Filip</p>
								</a>
							</div>
							<a class="btn btn-primary btn-more" href="#" role="button">Arată încă 5</a>
						</div>
					</div>
					<div class="events">
						<p class="title-block">Următorul eveniment</p>
						<div class="events-item">
							<div class="row">
								<div class="events-item-date">
									<p>30</p>
									<p>dec</p>
								</div>
								<div class="events-item-title">
									<a href="#">
										Expoziție de caricatură la muzeul naţional de artă al moldovei
									</a>
								</div>
							</div>
							<div class="events-item-link">
								<p>24/08/2017 - 15:00 Muzeul naţional de artă al moldovei, strada 31 august 1989. Nr 115</p>
								<a href="#"><p class="documents-slider-items-button">Vezi detalii<i class="fa fa-angle-double-right" aria-hidden="true"></i></p></a>
							</div>
						</div>
					</div>
					<div class="fb-iframe"></div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
