<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function contact() {
		Block::make('Contact')
			->add_fields(array(
				Field::make('text', 'name', 'Name'),
				Field::make('text', 'title', 'Title'),
				Field::make('text', 'phone', 'Phone'),
				Field::make('text', 'email', 'Email')
			))
			->set_icon('admin-users')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="contact_block">
					<div class="contact_block_inner">
						<div class="contact">
							<div class="contact_header">
								<div class="contact_info">
									<h2 class="contact_name"><?=$fields['name']?></h2>
									<p class="contact_title"><?=$fields['title']?></p>
								</div>
								<figure class="contact_figure">
									<?=wp_get_attachment_image($fields['image'], 'full', '', [
										"class" => "contact_image"
									])?>
								</figure>
							</div>
							<div class="contact_details">
								<div class="contact_detail">
									<span class="contact_detail_hint">Phone: </span>
									<a class="contact_detail_info" href="tel:<?=$fields['phone']?>"><?=$fields['phone']?></a>
								</div>
								<div class="contact_detail">
									<span class="contact_detail_hint">Email: </span>
									<a class="contact_detail_info" href="mailto:<?=$fields['email']?>"><?=$fields['email']?></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php
			} );
	}
?>