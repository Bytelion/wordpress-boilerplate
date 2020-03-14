<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function gallery() {
		Block::make('Gallery Carousel')
			->add_fields(array(
				Field::make('text', 'title', 'Title'),
				Field::make('textarea', 'description', 'Description'),
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

				<div class="gallery">
					<div class="gallery_row">
						<div class="gallery_inner">
							<?php
								if (!empty($fields['title']) || !empty($fields['description'])) {
							?>
							<div class="gallery_header">
								<?php
									if (!empty($fields['title'])) {
								?>
								<h2 class="gallery_title"><?=$fields['title']?></h2>
								<?php
									} if (!empty($fields['description'])) {
								?>
								<div class="gallery_description">
									<p><?=$fields['description']?></p>
								</div>
								<?php
									}
								?>
							</div>
							<?php
								}
							?>
							<div class="gallery_body">
								<div class="gallery_items">
									<?php
										$index = 1;

										foreach($fields['slides'] as $field) {
									?>
									<div class="gallery_item">
										<figure class="gallery_item_figure" aria-hidden="true">
											<?=wp_get_attachment_image($field['image'], 'full', '', [
												"class" => "gallery_item_image"
											])?>
											<figcaption class="gallery_item_details">
												<span class="gallery_index">
													<span class="gallery_index_number"><?=$index?></span>
													<span class="gallery_index_label"> of </span>
													<span class="gallery_index_number"><?=count($fields['slides'])?></span>
												</span>
												<p class="gallery_item_caption" itemprop="caption"><?=$field['caption']?></p>
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
					</div>
				</div>

				<?php
			});
	}
?>