<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>
<section class="event-page wrap-page">
		<div class="bread-wrap">
			<div class="container">
				<div>
					<a href="<?php echo home_url('/'); ?>"><?php echo __('Acasă', 'platforma'); ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					<a href="<?php echo get_post_type_archive_link('event'); ?>"> <?php echo __('Evenimente', 'platforma'); ?>  <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					<span><?php the_title(); ?></span>
				</div>
			</div>
		</div>
		<div class="article-page-wrap">

			 <div class="top-events">
				<div class="news-page-item-img">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<div class="container">
					<div class="news-page-item-content">
						<div class="container">
							<div class="events-item-date">
                <p><?php echo date('d', get_field('event_date')); ?></p>
                <p><?php echo date('M', get_field('event_date')); ?></p>
							</div>
							<p class="link-events">
								<?php the_title(); ?>
							</p>
							<div class="news-page-meta">
                <span class="meta-data"><?php echo get_the_date('j.n.Y'); ?></span>
                <span class="meta-views"><?php echo getPostViews(get_the_ID()); ?></span>
                <span class="meta-comments"><?php echo get_comments_number(get_the_ID()); ?></span>
							</div>
						</div>
					</div>
				</div>

				</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="article-soc row">
							<div class="data"><span> <?php echo get_the_date('j M Y H:i'); ?></span></div>
							<div class="soc-wrap">
								<?php echo do_shortcode('[ssba-buttons]'); ?>
							</div>
						</div>

						<div class="article-content">
              <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <?php  the_content() ;?>
              <?php endwhile; endif; ?>
						</div>
					</div>
					<div class="col-lg-3 sidebar">
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
		</div>
		<div class="article-share">
			<div class="container">
				<div class="col-lg-9">
					<div class="article-soc row">
							<div class="data"><span><?php echo get_the_date('j M Y H:i'); ?></span></div>
							<div class="soc-wrap">
								<?php echo do_shortcode('[ssba-buttons]'); ?>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="article-bottom-wrap">
			<div class="container">
				<div class="row">
				<div class="col-lg-9">
					<div class="cat-news-real">
						<h3 class="title-block"><?php echo __('Evenimente Relevante', 'platforma'); ?></h3>
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
              <?php do_action('get-random-future-events'); ?>
						</div>
						</div>
					</div>
					<div class="article-comments">
            <?php // If comments are open or we have at least one comment, load up the comment template.
            while ( have_posts() ) : the_post();

        			// If comments are open or we have at least one comment, load up the comment template.
        			if ( comments_open() || get_comments_number() ) :
        				comments_template();
        			endif;

        		// End the loop.
        		endwhile;
              ?>
					</div>
				</div>
				<div class="col-lg-3 sidebar">
						<div class="fb-iframe">
							<?php dynamic_sidebar('Facebook sidebar widget'); ?>
						</div>
						<?php do_action('get-nearest-event-in-sidebar'); ?>
				</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
