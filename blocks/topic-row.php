<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function topic_row() {
		Block::make('Topic Row')
			->add_fields(array(
				Field::make('text', 'title', 'Title'),
				Field::make('textarea', 'description', 'Description'),
				Field::make('complex', 'items', 'Items')
					-> add_fields(array(
						Field::make('image', 'image', 'Image'),
						Field::make('text', 'title', 'Title'),
						Field::make('textarea', 'description', 'Description'),
						Field::make('text', 'link_url', 'Link URL'),
						Field::make('text', 'link_name', 'Link Name'),
					))
			))
			->set_icon('welcome-widgets-menus')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="topics">
					<div class="topics_row">
						<div class="topics_inner">
							<?php
								if (!empty($fields['title']) || !empty($fields['description'])) {
							?>
							<div class="topics_header">
								<?php
									if (!empty($fields['title'])) {
								?>
								<h2 class="topics_title">
									<span class="topics_title_label"><?=$fields['title']?></span>
								</h2>
								<?php
									} if (!empty($fields['description'])) {
								?>
								<div class="topics_description">
									<p><?=$fields['description']?></p>
								</div>
								<?php
									}
								?>
							</div>
							<?php
								}
							?>
							<div class="topics_body">
								<?php
									foreach($fields['items'] as $field) {
								?>
								<div class="topic">
									<div class="topic_inner">
										<?php
											if (!empty($field['image'])) {
										?>
										<figure class="topic_figure" aria-hidden="true">
											<?=wp_get_attachment_image($field['image'], 'full', '', [
												"class" => "topic_image"
											])?>
										</figure>
										<?php
											}
										?>
										<div class="topic_wrapper">
											<div class="topic_header">
												<h3 class="topic_title"><?=$field['title']?></h3>
											</div>
											<div class="topic_body">
												<div class="topic_description">
													<p><?=$field['description']?></p>
												</div>
											</div>
											<?php
												if (!empty($field['link_url'])) {
											?>
											<div class="topic_links">
												<a class="topic_link" href="<?=$field['link_url']?>"><?=$field['link_name']?></a>
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
							</div>
						</div>
					</div>
				</div>

				<?php
			});
	}
?>