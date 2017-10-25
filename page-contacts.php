<?php /* Template Name: Contacts */ ?>
<?php get_header(); ?>
<section class="contact-page">
		<div class="bread-wrap">
			<div class="container">
				<div>
					<a href="<?php echo home_url('/'); ?>"><?php echo __('Acasă', 'platforma'); ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					<span><?php the_title(); ?></span>
				</div>
			</div>
		</div>
		<div class="container">
			<h1 class="title-block"><?php the_title(); ?></h1>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php  the_content() ;?>
      <?php endwhile; endif; ?>
		</div>
	</section>
<?php  get_footer('with-map'); ?>
