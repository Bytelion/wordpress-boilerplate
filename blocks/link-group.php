<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function link_group() {
		Block::make('Link Group')
			->add_fields(array(
				Field::make('text', 'title', 'Title'),
				Field::make('complex', 'items', 'Items')
					-> add_fields(array(
						Field::make('text', 'link', 'Link'),
						Field::make('text', 'name', 'Name'),
					))
			))
			->set_icon('admin-links')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="link_group">
					<div class="link_group_row">
						<div class="link_group_header">
							<h2 class="link_group_title"><?=$fields['title']?></h2>
						</div>
						<ul class="link_group_list">
							<?php
								foreach($fields['items'] as $field) {
							?>
							<li class="link_group_item">
								<a class="link_group_link" href="<?=$field['link']?>" itemprop="relatedLink">
									<span class="link_group_link_inner">
										<span class="link_group_link_label"><?=$field['name']?></span>
										<span class="link_group_link_icon"></span>
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
			});
	}
?>