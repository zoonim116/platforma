<?php get_header(); ?>
<section class="news-page">
		<div class="news-page-top">
			<div class="container">
				<div class="row">
	         <?php do_action('plt-top-new-slider');?>
				</div>
			</div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-lg-9 col-md-6  news-page-wrap">
					<div class="cat-news-real">
						<h3 class="title-block"><?php do_action('news-category-title', 3); ?></h3>
						<div class="news-control-wrap">
						<div class="slide-control">
						  	<a class="control-prev">
							    <i class="fa fa-angle-left"></i>
							</a>
							<a class="control-next">
							    <i class="fa fa-angle-right"></i>
							</a>
						 </div>
						<div class="row">
							<?php do_action('actuality-slider'); ?>

						</div>
						</div>
					</div>

					<div class="cat-news-social">
						<h3 class="title-block"><?php do_action('news-category-title', 4); ?></h3>
						<div class="news-control-wrap">
							<div class="slide-control">
							  	<a class="control-prev">
								    <i class="fa fa-angle-left"></i>
								</a>
								<a class="control-next">
								    <i class="fa fa-angle-right"></i>
								</a>
							 </div>
							 <div class="cat-news-social-items">
                  <?php do_action('social-slider'); ?>
							 </div>
						</div>
					</div>
					<div class="cat-news-educate">
						<h3 class="title-block"><?php do_action('news-category-title', 5); ?></h3>
						<div class="news-control-wrap">
							<div class="slide-control">
							  	<a class="control-prev">
								    <i class="fa fa-angle-left"></i>
								</a>
								<a class="control-next">
								    <i class="fa fa-angle-right"></i>
								</a>
							 </div>
							 <div class="cat-news-educate-items">
			              <?php do_action('education-slider'); ?>
							 </div>
						</div>
					</div>
					<div class="cat-news-life">
						<h3 class="title-block"><?php do_action('news-category-title', 6); ?></h3>
						<div class="news-control-wrap">
							<div class="slide-control">
							  	<a class="control-prev">
								    <i class="fa fa-angle-left"></i>
								</a>
								<a class="control-next">
								    <i class="fa fa-angle-right"></i>
								</a>
							 </div>
							 <div class="cat-news-life-items">
					          <?php do_action('lifestyle-slider'); ?>
							 </div>
						</div>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
