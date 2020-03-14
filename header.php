<?php include(get_template_directory() . '/config.php'); ?>
<?php include(get_template_directory() . '/utility.php'); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
			<?php
				wp_title('|', true, 'right');
				bloginfo('name');
			?>
		</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="page_wrapper">
			<header class="header" id="header">
				<a class="skip_link" id="skip_link" href="#skip_content">Skip to Main Content</a>
				<div class="header_primary">
					<div class="row">
						<div class="header_primary_inner">
							<?php
								the_custom_logo();
								wp_nav_menu(
									array(
										'container_class' => 'main_menu main_menu_lg',
										'menu_class' => 'main_menu_list main_menu_list_lg',
										'theme_location' => 'main_menu'
									)
								);
							?>

							<button class="menu_button" aria-label="Toggle Menu">
								<span class="menu_button_inner">
									<span class="menu_button_icon"><?php icon('menu'); ?></span>
									<span class="menu_button_label">Toggle Menu</span>
								</span>
							</button>
						</div>
					</div>
				</div>
			</header>