<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function cover() {
		Block::make('Cover')
			->add_fields(array(
				Field::make('image', 'image', 'Image'),
				Field::make('text', 'title', 'Title'),
				Field::make('textarea', 'caption', 'Caption')
			))
			->set_icon('format-image')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="cover_block">
					<div class="cover_block_inner">
						<div class="cover">
							<figure class="cover_figure">
								<?=wp_get_attachment_image($fields['image'], 'full', '', [
									"class" => "cover_background"
								])?>
							</figure>
							<div class="cover_inner">
								<div class="cover_body">
									<h2 class="cover_title"><?=$fields['title']?></h2>
									<p class="cover_caption"><?=$fields['caption']?></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php
			} );
	}
?>