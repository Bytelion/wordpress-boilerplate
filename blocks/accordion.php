<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function accordion() {
		Block::make('Accordion')
			->add_fields(array(
				Field::make('text', 'title', 'Title'),
				Field::make('textarea', 'description', 'Description'),
				Field::make('complex', 'items', 'Items')
					-> add_fields(array(
						Field::make('text', 'title', 'Title'),
						Field::make('text', 'subtitle', 'Subtitle'),
						Field::make('textarea', 'caption', 'Caption'),
					))
			))
			->set_icon('editor-ul')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="accordion">
					<div class="accordion_row">
						<div class="accordion_inner">
							<?php
								if (!empty($fields['title']) || !empty($fields['description'])) {
							?>
							<div class="accordion_header">
								<?php
									if (!empty($fields['title'])) {
								?>
								<h2 class="accordion_title"><?=$fields['title']?></h2>
								<?php
									} if (!empty($fields['description'])) {
								?>
								<div class="accordion_description">
									<p><?=$fields['description']?></p>
								</div>
								<?php
									}
								?>
							</div>
							<?php
								}
							?>
							<div class="accordion_items">
								<?php
									foreach($fields['items'] as $field) {
								?>
								<div class="accordion_item">
									<button class="accordion_swap">
										<span class="accordion_swap_info">
											<span class="accordion_swap_title"><?=$field['title']?></span>
											<?php
												if (!empty($field['subtitle'])) {
											?>
											<span class="accordion_swap_subtitle"><?=$field['subtitle']?></span>
											<?php
												}
											?>
										</span>
										<span class="accordion_swap_icon"></span>
									</button>
									<div class="accordion_content typography"><?=$field['caption']?></div>
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