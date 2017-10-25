<?php get_header(); ?>
<section class="documents-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-6  documents-page-list">
					<h3 class="title-block"><?php echo post_type_archive_title(); ?></h3>
					<p class="title-block-content">
						<?php echo get_field('documents_section_description', get_post(9)); ?>
					</p>
					<div class="documents-page-list-wrap">
						<?php do_action('plt_get_documents', 10); ?>
					</div>
					<a class="btn btn-primary btn-more" id="load_more_documents" href="#" role="button">Mai multe informații</a>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
