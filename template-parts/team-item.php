<div class="team-item">
  <div class="team-item-person">
    <div><?php the_post_thumbnail([118, 118]); ?></div>
    <div>
      <p class="team-person-name"><?php the_title(); ?></p>
      <p class="team-person-func"><?php the_field('position'); ?></p>
      <a href="mailto:<?php the_field('email'); ?>" class="team-person-mail"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php the_field('email'); ?></a>
    </div>
  </div>
  <div class="team-item-quote">
  <?php the_content(); ?>
  </div>
</div>
