<div class="col-lg-3 col-md-6 sidebar">
  <div class="latest-news">
    <p class="title-block"><?php echo __('Știri noi', 'platforma'); ?></p>
    <div class="sidebar-latest-news">
      <?php do_action('plt_get_news_for_sidebar', 5); ?>
      <a class="btn btn-primary btn-more" href="#" id="load_more_news_sidebar" role="button"><?php echo __('Arată încă 5', 'platforma'); ?></a>
    </div>
  </div>
  <?php do_action('get-nearest-event-in-sidebar'); ?>
  <div class="fb-iframe">
    <?php dynamic_sidebar('Facebook sidebar widget'); ?>
  </div>
</div>
