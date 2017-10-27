<?php extract($template_args); ?>

<div class="col-lg-6 news-page-item">
  <div class="news-page-item-bg ">
    <div class="news-page-item-img">
      <a href="<?php echo $latestNews[0]['permalink'] ?>">
        <?php echo $latestNews[0]['thumb'] ?>
      </a>
    </div>
    <div class="news-page-item-content">
      <div class="news-page-meta">
        <span class="meta-data"><?php echo $latestNews[0]['date'] ?></span>
        <span class="meta-views"><?php echo $latestNews[0]['views_count'] ?></span>
        <span class="meta-comments"><?php echo $latestNews[0]['comments_count'] ?></span>
      </div>
      <a href="<?php echo $latestNews[0]['permalink'] ?>">
        <?php echo $latestNews[0]['title'] ?>
      </a>
      <a href="<?php echo $latestNews[0]['permalink'] ?>"><p class="documents-slider-items-button"><?php echo __('Vezi detalii', 'platforma'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></p></a>
    </div>
  </div>
</div>
<div class="col-lg-3 news-page-item">
  <div class="news-page-item-bg">
    <div class="news-page-item-img">
      <a href="<?php echo $latestNews[1]['permalink'] ?>">
        <?php echo $latestNews[1]['thumb'] ?>
      </a>
    </div>
    <div class="news-page-item-content">
      <div class="news-page-meta">
        <span class="meta-data"><?php echo $latestNews[1]['date'] ?></span>
        <span class="meta-views"><?php echo $latestNews[1]['views_count'] ?></span>
        <span class="meta-comments"><?php echo $latestNews[1]['comments_count'] ?></span>
      </div>
      <a href="<?php echo $latestNews[1]['permalink'] ?>">
        <?php echo $latestNews[1]['title'] ?>
      </a>
      <a href="<?php echo $latestNews[1]['permalink'] ?>"><p class="documents-slider-items-button"><?php echo __('Vezi detalii', 'platforma'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></p></a>
    </div>
  </div>
</div>
<div class="col-lg-3 news-page-item">
  <div class="news-page-item-bg">
    <div class="news-page-item-img">
      <a href="<?php echo $latestNews[2]['permalink'] ?>">
        <?php echo $latestNews[2]['thumb'] ?>
      </a>
    </div>
    <div class="news-page-item-content">
      <div class="news-page-meta">
        <span class="meta-data"><?php echo $latestNews[2]['date'] ?></span>
        <span class="meta-views"><?php echo $latestNews[2]['views_count'] ?></span>
        <span class="meta-comments"><?php echo $latestNews[2]['comments_count'] ?></span>
      </div>
      <a href="<?php echo $latestNews[2]['permalink'] ?>">
        <?php echo $latestNews[2]['title'] ?>
      </a>
      <a href="<?php echo $latestNews[2]['permalink'] ?>"><p class="documents-slider-items-button"><?php echo __('Vezi detalii', 'platforma'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></p></a>
    </div>
  </div>
</div>
