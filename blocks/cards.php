<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function cards() {
		Block::make('Card Group')
			->add_fields(array(
				Field::make('text', 'title', 'Title'),
				Field::make('textarea', 'description', 'Description'),
				Field::make('complex', 'items', 'Items')
					-> add_fields(array(
						Field::make('image', 'image', 'Image'),
						Field::make('text', 'title', 'Title'),
						Field::make('textarea', 'description', 'Description')
					))
			))
			->set_icon('grid-view')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="card_group">
					<?php
						if (!empty($fields['title']) || !empty($fields['description'])) {
					?>
					<div class="card_group_header">
						<div class="card_group_header_row">
							<div class="card_group_header_inner">
								<?php
									if (!empty($fields['title'])) {
								?>
								<h2 class="card_group_title"><?=$fields['title']?></h2>
								<?php
									} if (!empty($fields['description'])) {
								?>
								<div class="card_group_description">
									<p><?=$fields['description']?></p>
								</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
					<?php
						}
					?>
					<div class="card_group_body">
						<div class="card_group_body_row">
							<div class="card_group_items">
								<?php
									foreach($fields['items'] as $field) {
								?>
								<div class="card_group_item">
									<figure class="card_group_item_figure">
										<?=wp_get_attachment_image($field['image'], 'full', '', [
											"class" => "card_group_item_image"
										])?>
									</figure>
									<div class="card_group_item_body">
										<h3 class="card_group_item_title"><?=$field['title']?></h3>
										<p class="card_group_item_description"><?=$field['description']?></p>
									</div>
								</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</div>

				<?php
			});
	}
?>