<main class="page">
	<?php
		if (!is_front_page()) {
	?>
	<div class="page_header">
		<div class="row">
			<div class="page_header_inner">
				<?php if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				} ?>
				<h1 class="page_title"><?php the_title() ?></h1>
			</div>
		</div>
	</div>
	<?php
		}

		while (have_posts()) {
			the_post();
			the_content();
		}
	?>
</main>