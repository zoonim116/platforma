<div class="top-events">
  <div class="tabs-events">
    <div class="news-page-item-img">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('full'); ?>
          <div class="cover"></div>
        </a>
    </div>
    <div class="news-page-item-content">
        <div class="events-item-date">
                <p><?php echo date('d', get_field('event_date')); ?></p>
                <p><?php echo date('M', get_field('event_date')); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="link-events">
          <?php the_title(); ?>
        </a>
        <div class="news-page-meta">
          <span class="meta-data"><?php echo get_the_date('j.n.Y'); ?></span>
          <span class="meta-views"><?php echo getPostViews(get_the_ID()); ?></span>
          <span class="meta-comments"><?php echo get_comments_number(get_the_ID()); ?></span>
        </div>
    </div>
  </div>
</div>
