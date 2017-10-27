<div class="tabs-content">
	<div class="tabs-events">
		<div class="row">
			<div class="news-page-item-img col-lg-4">
			<a href="<?php the_permalink(); ?>">
				<div class="cover"></div>
				<?php the_post_thumbnail(); ?>
				<div class="events-item-date">
          <p><?php echo date('d', get_field('event_date')); ?></p>
          <p><?php echo date('M', get_field('event_date')); ?></p>
				</div>
			</a>
		</div>
		<div class="news-page-item-content col-lg-8">
			<div class="news-page-meta">
        <span class="meta-data"><?php echo get_the_date('j.n.Y'); ?></span>
        <span class="meta-views"><?php echo getPostViews(get_the_ID()); ?></span>
        <span class="meta-comments"><?php echo get_comments_number(get_the_ID()); ?></span>
			</div>
			<a href="<?php the_permalink(); ?>">
				   <?php the_title(); ?>
			</a>
			<div class="adress-event">
				<p> <?php echo date('d/m/Y - G:i', get_field('event_date')); ?></p>
				<p><?php echo get_field('event_address'); ?></p>
			</div>
			<a href="<?php the_permalink(); ?>"><p class="documents-slider-items-button"><?php echo __('Vezi detalii', 'platforma'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></p></a>
		</div>
		</div>
</div>
</div>
