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
<style>
    .accordion .card-header, .accordion .card-footer{
        background-color: midnightblue;
        color:white;
    }

	.accordion .card-header h5{
		text-align: center;
	}

	.accordion .card-header a{
		color: rgb( 204, 204, 204 );
	}

	.accordion .card-header <a:hover></a:hover>{
		color: white;
	}

    .accordion .card-body-link{
        text-align:center;
    }
    .accordion .card-body-link a{
        display:inline-block;
    }
    .accordion .card-body p{
        padding: 20px 50px;
        text-align: justify;
    }
</style>
<div id="accordion<?=get_field( 'accordionid' )?>" class="accordion">
	<?php for( $i=0; $i < count( $accordion ); $i++ ): ?>

		<div class="card">
			<div class="card-header" id="heading<?=$i?>">
				<h5 class="mb-0">
					<a class="text-center" data-toggle="collapse" role="button" href="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
					<i class="fa fa-chevron-circle-right pull-left"></i><?= $accordion[$i]['header'] ?>
					</a>
				</h5>
			</div>

			<div id="collapse<?=$i?>" class="collapse <?= $i == 0 ? 'show' : '' ?>" aria-labelledby="heading<?=$i?>" data-parent="#accordion<?=get_field( 'accordionid' )?>">
				<div class="card-body">
					<?= $accordion[$i]['content'] ?>
				</div>
			</div>
		</div>

	<?php endfor; ?>
</div>
