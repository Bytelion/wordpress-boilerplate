<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function gallery() {
		Block::make('Gallery Carousel')
			->add_fields(array(
				Field::make('complex', 'slides', 'Slides')
					-> add_fields(array(
						Field::make('image', 'image', 'Image'),
						Field::make('textarea', 'caption', 'Caption')
					))
			))
			->set_icon('images-alt2')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="gallery_block">
					<div class="gallery_block_inner">
						<div class="gallery_items">
							<?php
								$index = 0;

								foreach($fields['slides'] as $field) {
							?>
							<div class="gallery_item">
								<figure class="gallery_figure" aria-hidden="true">
									<?=wp_get_attachment_image($field['image'], 'full', '', [
										"class" => "gallery_image"
									])?>
									<figcaption class="gallery_details">
										<span class="gallery_index">
											<span class="gallery_index_number"><?=$index?></span>
											<span class="gallery_index_label"> of </span>
											<span class="gallery_index_number"><?=count($fields['slides'])?></span>
										</span>
										<p><?=$field['caption']?></p>
									</figcaption>
								</figure>
							</div>
							<?php
									$index++;
								}
							?>
						</div>
					</div>
				</div>

				<?php
			} );
	}
?>