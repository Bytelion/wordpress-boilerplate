---
to: blocks/<%=name%>.php
---
<?php
	use Carbon_Fields\Block;
	use Carbon_Fields\Field;

	function <%=name%>() {
		Block::make('<%=Name%>')
			->add_fields(array(
				Field::make('text', 'title', 'Title'),
			))
			->set_icon('editor-ul')
			->set_category('Custom')
			->set_render_callback(function ($fields) {
				?>

				<div class="<%=name%>">
					<div class="<%=name%>_row">
						<div class="<%=name%>_inner">
							<?=$fields['title']?>
						</div>
					</div>
				</div>

				<?php
			});
	}
?>