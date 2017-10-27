<div class="events">
                <p class="title-block"><?php echo __('Următorul eveniment', 'platforma'); ?></p>
                <div class="events-item">
                  <div class="row">
                    <div class="events-item-date">
                      <p><?php echo date('d', get_field('event_date')); ?></p>
                      <p><?php echo date('M', get_field('event_date')); ?></p>
                    </div>
                    <div class="events-item-title">
                      <a href="<?php the_permalink(); ?>">
                        <?php echo substr(trim(get_the_title()), 0, 60) ; ?>
                      </a>
                    </div>
                  </div>
                  <div class="events-item-link">
                    <div class="adress-event">
                				<p> <?php echo date('d/m/Y - G:i', get_field('event_date')); ?></p>
                        <p><?php the_field('event_address'); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>"><p class="documents-slider-items-button"><?php echo __('Vezi detalii', 'platforma'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></p></a>
                  </div>
                </div>
              </div>
