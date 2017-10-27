<?php extract($template_args); ?>
<div class="cat-news-educate-item">
  <div class="news-wrap__slide">
    <div class="news-wrap__slide-item">
      <div class="row">
        <div class="col-lg-8 news-wrap-one-post news-wrap-items">
          <a href="<?php echo $slide[0]['permalink']; ?>">
            <?php echo $slide[0]['thumb']; ?>
            <div class="cover"></div>
            <div class="news-wrap__slide-item-link">
              <p><?php echo $slide[0]['title']; ?></p>
            </div>

          </a>

        </div>
        <div class="col-lg-4 news-wrap-grid">
            <div class="news-wrap-items">
              <a href="<?php echo $slide[1]['permalink']; ?>">
                <?php echo $slide[1]['thumb']; ?>
                <div class="cover"></div>
                <div class="news-wrap__slide-item-link">
                  <p><?php echo $slide[1]['title']; ?></p>
                </div>
              </a>
            </div>
            <div class="news-wrap-items">
              <a href="<?php echo $slide[2]['permalink']; ?>">
                <?php echo $slide[2]['thumb']; ?>
                <div class="cover"></div>
                <div class="news-wrap__slide-item-link">
                  <p><?php echo $slide[2]['title']; ?></p>
                </div>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
