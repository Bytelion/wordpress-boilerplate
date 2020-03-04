			<footer class="page_footer">
				<div class="page_footer_inner">
					<div class="page_footer_group">
						<?php
							if (get_option("street")) {
						?>
						<div class="meta">
							<div class="meta_details">
								<div class="meta_detail">
									<span class="meta_detail_icon"><?=icon('place')?></span>
									<a class="meta_detail_label meta_detail_link" href="" target="_blank" rel="noopener">
										<span class="meta_address_street" itemprop="streetAddress"><?=get_option("street")?></span>,
										<span class="meta_address_group">
											<span class="meta_address_city" itemprop="addressLocality"><?=get_option("city")?></span>,
											<span class="meta_address_state" itemprop="addressRegion"><?=get_option("state")?></span>
											<span class="meta_address_zip" itemprop="postalCode"><?=get_option("zip")?></span>
										</span>
									</a>
								</div>
								<div class="meta_detail">
									<span class="meta_detail_icon"><?=icon('mail')?></span>
									<a class="meta_detail_label meta_detail_link" href="mailto:<?=get_option("email")?>" itemprop="email">Email: <?=get_option("email")?></pre></a>
								</div>
								<div class="meta_detail">
									<span class="meta_detail_icon"><?=icon('phone')?></span>
									<a class="meta_detail_label meta_detail_link" href="tel:<?=get_option("phone")?>" itemprop="telephone">Phone: <?=tel(get_option("phone"))?></a>
								</div>
							</div>
						</div>
						<?php
							}

							import('/menus/social.php');
						?>
					</div>
					<div class="page_footer_group">
						<p class="copyright">&copy; <?=$site["title"]?> <?=date('Y')?></p>
					</div>
				</div>
				<div class="page_menu">
					<div class="page_menu_inner">
						<?php
							wp_nav_menu(
								array(
									'container_class' => 'main_menu main_menu_sm',
									'menu_class' => 'main_menu_list  main_menu_list_sm',
									'theme_location' => 'main_menu'
								)
							);
						?>
						<button class="page_menu_close" aria-label="Toggle Menu">
							<span class="page_menu_close_inner">
								<span class="page_menu_close_icon"><?=icon('close')?></span>
								<span class="page_menu_close_label">Toggle Menu</span>
							</span>
						</button>
					</div>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>