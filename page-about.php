<?php /* Template Name: About us */ ?>
<?php get_header(); ?>
<section class="about-us-page wrap-page">
		<div class="bread-wrap">
			<div class="container">
				<div>
					<a href="<?php echo home_url('/'); ?>"><?php echo __('Acasă', 'platforma'); ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					<span><?php the_title(); ?></span>
				</div>
			</div>
		</div>
		<div class="container">
			<h1 class="title-wrap"><?php the_title(); ?></h1>
			<div class="wrap-page-row">
				<div class="row">
					<div class="col-lg-9 col-md-6">
						<div class="content-wrap">
              <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <?php  the_content() ;?>
              <?php endwhile; endif; ?>
						</div>
					</div>
          <?php get_sidebar( 'without-news' ); ?>

				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
