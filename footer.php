			<footer class="footer" id="footer">
				<div class="footer_primary">
					<div class="row">
						<div class="footer_primary_inner">
							<?php
								if (get_option("street")) {
							?>
							<div class="meta">
								<div class="meta_details">
									<div class="meta_detail">
										<span class="meta_detail_icon"><?=icon('place')?></span>
										<a class="meta_detail_label meta_detail_link" href="<?=get_option("google_maps_url")?>" target="_blank" rel="noopener">
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
					</div>
				</div>
				<div class="footer_ribbon">
					<div class="row">
						<div class="footer_ribbon_inner">
							<p class="copyright">&copy; <?=$site["title"]?> <?=date('Y')?></p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<section class="js-menu menu" id="menu" aria-label="Site Menu">
			<div class="menu_inner">
				<?php
					wp_nav_menu(
						array(
							'container_class' => 'main_menu main_menu_sm',
							'menu_class' => 'main_menu_list  main_menu_list_sm',
							'theme_location' => 'main_menu'
						)
					);
				?>
				<button class="menu_close" aria-label="Toggle Menu">
					<span class="menu_close_inner">
						<span class="menu_close_icon"><?=icon('close')?></span>
						<span class="menu_close_label">Toggle Menu</span>
					</span>
				</button>
			</div>
		</section>
		<?php wp_footer(); ?>
	</body>
</html>