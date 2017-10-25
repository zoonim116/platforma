<div class="col-lg-3 col-md-6 sidebar">
  <div class="latest-news">
    <p class="title-block"><?php echo __('Ultimile știri', 'platforma'); ?></p>
    <div class="sidebar-latest-news">
      <?php do_action('plt_get_news_for_sidebar', 5); ?>
      <a class="btn btn-primary btn-more" href="#" id="load_more_news_sidebar" role="button"><?php echo __('Arată încă 5', 'platforma'); ?></a>
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
