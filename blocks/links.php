<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function links() {
		Block::make('Link Group')
			->add_fields(array(
				Field::make('complex', 'items', 'Items')
					-> add_fields(array(
						Field::make('text', 'link', 'Link'),
						Field::make('text', 'label', 'Label'),
					))
			))
			->set_icon('admin-links')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="links_block">
					<div class="links_block_inner">
						<ul class="links">
							<?php
								foreach($fields['items'] as $field) {
							?>
							<li class="link_item">
								<a class="link_target" href="<?=$field['link']?>">
									<span class="link_inner">
										<span class="link_label"><?=$field['label']?></span>
										<span class="link_icon"></span>
									</span>
								</a>
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