<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function call_to_action() {
		Block::make('Call To Action')
			->add_fields(array(
				Field::make('text', 'title', 'Title'),
				Field::make('textarea', 'description', 'Description'),
				Field::make('text', 'link_url', 'Link URL'),
				Field::make('text', 'link_label', 'Link Label'),
			))
			->set_icon('megaphone')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="cta">
					<div class="cta_row">
						<div class="cta_inner">
							<div class="cta_body">
								<h2 class="cta_title"><?=$fields['title']?></h2>
								<div class="cta_description">
									<p><?=$fields['description']?></p>
								</div>
							</div>
							<div class="cta_action">
								<a class="cta_link" href="<?=$fields['link_url']?>"><?=$fields['link_label']?></a>
							</div>
						</div>
					</div>
				</div>

				<?php
			} );
	}
?>