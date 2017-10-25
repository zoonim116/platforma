<div class="documents-page-items">
    <a href="<?php echo $upload_file['url']; ?>">
      <p class="documents-slider-items-title"><?php the_title(); ?></p>
    </a>
    <p class="documents-slider-items-size"><?php echo formatFileSize($upload_file['id']); ?></p>
    <a href="<?php echo $upload_file['url']; ?>"><p class="documents-slider-items-button"><?php echo __('Vezi detalii', 'platforma'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></p></a>
</div>
