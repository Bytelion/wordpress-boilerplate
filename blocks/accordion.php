<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function accordion() {
		Block::make('Accordion')
			->add_fields(array(
				Field::make('complex', 'items', 'Items')
					-> add_fields(array(
						Field::make('text', 'title', 'Title'),
						Field::make('textarea', 'caption', 'Caption'),
					))
			))
			->set_icon('editor-ul')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="accordion_block">
					<div class="accordion_block_inner">
						<ul class="accordion_items">
						<?php
							foreach($fields['items'] as $field) {
						?>
							<li class="accordion">
								<button class="accordion_trigger">
									<span class="accordion_title"><?=$field['title']?></span>
									<span class="accordion_icon"></span>
								</button>
								<div class="accordion_content"><?=$field['caption']?></div>
							</li>
						<?php
							}
						?>
						</ul>
					</div>
				</div>

				<?php
			} );
	}
?>