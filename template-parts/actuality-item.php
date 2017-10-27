
<div class="news-page-item col-lg-4">
  <div class="news-page-item-bg">
    <div class="news-page-item-img">
      <a href="<?php echo get_the_permalink(); ?>">
        <?php the_post_thumbnail([220]); ?>
      </a>
    </div>
    <div class="news-page-item-content">
      <div class="news-page-meta">
        <span class="meta-data"><?php echo get_the_date('j.n.Y'); ?></span>
        <span class="meta-views"><?php echo getPostViews(get_the_ID()); ?></span>
        <span class="meta-comments"><?php echo get_comments_number(get_the_ID()); ?></span>
      </div>
      <a href="<?php echo get_the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
      <a href="<?php echo get_the_permalink(); ?>"><p class="documents-slider-items-button"><?php echo __('Vezi detalii', 'platforma'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></p></a>
    </div>
  </div>
</div>
