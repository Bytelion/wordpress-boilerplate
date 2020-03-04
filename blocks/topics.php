<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function topics() {
		Block::make('Topic Row')
			->add_fields(array(
				Field::make('complex', 'items', 'Items')
					-> add_fields(array(
						Field::make('text', 'title', 'Title'),
						Field::make('textarea', 'caption', 'Caption'),
						Field::make('text', 'link', 'Link'),
					))
			))
			->set_icon('welcome-widgets-menus')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="topics_block">
					<div class="topics_block_inner">
						<ul class="topics">
							<?php
								foreach($fields['items'] as $field) {
							?>
							<li class="topic">
								<figure class="topic_figure" aria-hidden="true">
									<?=wp_get_attachment_image($field['image'], 'full', '', [
										"class" => "topic_image"
									])?>
								</figure>
								<div class="topic_wrapper">
									<h2 class="topic_title"><?=$field['title']?></h2>
									<p class="topic_caption"><?=$field['caption']?></p>
									<a class="topic_link" href="<?=$field['link']?>">Read More</a>
								</div>
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