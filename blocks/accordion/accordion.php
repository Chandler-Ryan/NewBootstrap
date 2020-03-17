<?php

/**
 * Accordion Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

if (is_admin()): ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<?php
endif;
$accordion = get_field('accordion');
// echo ('<pre>' . print_r($accordion, true) . '</pre>');

?>

<div class="accordion">
	<?php for( $i=0; $i < count( $accordion ); $i++ ): ?>

		<div class="card">
			<div class="card-header" id="heading<?=$i?>">
				<h5 class="mb-0">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
						<?= $accordion[$i]['header'] ?>
					</button>
				</h5>
			</div>

			<div id="collapse<?=$i?>" class="collapse show" aria-labelledby="heading<?=$i?>" data-parent="#accordion">
				<div class="card-body">
					<?= $accordion[$i]['content'] ?>
				</div>
			</div>
		</div>

	<?php endfor; ?>
</div>
