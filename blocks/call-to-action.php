<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function call_to_action() {
		Block::make('Call To Action')
			->add_fields(array(
				Field::make('text', 'title', 'Title'),
				Field::make('textarea', 'caption', 'Caption'),
				Field::make('text', 'link_url', 'Link URL'),
				Field::make('text', 'link_label', 'Link Label'),
			))
			->set_icon('megaphone')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="cta_block">
					<div class="cta_block_inner">
						<div class="cta">
							<h2 class="cta_title"><?=$fields['title']?></h2>
							<p class="cta_caption"><?=$fields['caption']?></p>
							<a class="cta_link" href="<?=$fields['link_url']?>"><?=$fields['link_label']?></a>
						</div>
					</div>
				</div>

				<?php
			} );
	}
?>