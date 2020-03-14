<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function contact() {
		Block::make('Contact')
			->add_fields(array(
				Field::make('text', 'name', 'Name'),
				Field::make('text', 'title', 'Title'),
				Field::make('image', 'image', 'Image'),
				Field::make('text', 'phone', 'Phone'),
				Field::make('text', 'email', 'Email')
			))
			->set_icon('admin-users')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="contact_block">
					<div class="contact_block_row">
						<div class="contact_block_inner">
							<div class="contact" itemscope itemtype="https://schema.org/Person">
								<div class="contact_header">
									<div class="contact_info">
										<h2 class="contact_name" itemprop="name"><?=$fields['name']?></h2>
										<?php
											if (!empty($fields['title'])) {
										?>
										<div class="contact_title" itemprop="jobTitle"><?=$fields['title']?></div>
										<?php
											}
										?>
									</div>
									<?php
										if (!empty($fields['image'])) {
									?>
									<figure class="contact_figure">
										<?=wp_get_attachment_image($fields['image'], 'full', '', [
											"class" => "contact_image"
										])?>
									</figure>
									<?php
										}
									?>
								</div>
								<div class="contact_body">
									<div class="contact_details">
										<?php
											if (!empty($fields['phone']) || !empty($fields['email'])) {
										?>
										<div class="contact_detail">
											<div class="contact_detail_label">Contact</div>
											<div class="contact_detail_item">
												<div class="contact_detail_hint">Phone</div>
												<a class="contact_detail_info" itemprop="telephone" href="tel:<?=$fields['phone']?>"><?=$fields['phone']?></a>
											</div>
											<div class="contact_detail_item">
												<div class="contact_detail_hint">Email</div>
												<a class="contact_detail_info" href="mailto:<?=$fields['email']?>" itemprop="email"><?=$fields['email']?></a>
											</div>
										</div>
										<?php
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php
			});
	}
?>