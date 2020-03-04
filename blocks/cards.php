<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function cards() {
		Block::make('Card Group')
			->add_fields(array(
				Field::make('complex', 'items', 'Items')
					-> add_fields(array(
						Field::make('image', 'image', 'Image'),
						Field::make('textarea', 'caption', 'Caption')
					))
			))
			->set_icon('grid-view')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="cards_block">
					<div class="cards_block_inner">
						<div class="cards">
							<?php
								foreach($fields['items'] as $field) {
							?>
							<div class="card">
								<figure class="card_figure" aria-hidden="true">
									<?=wp_get_attachment_image($field['image'], 'full', '', [
										"class" => "card_image"
									])?>
									<figcaption class="card_details"><?=$field['caption']?></figcaption>
								</figure>
							</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>

				<?php
			} );
	}
?>