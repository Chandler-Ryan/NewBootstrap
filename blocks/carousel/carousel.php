<?php

/**
 * Carousel Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assessing defaults.
$carousel = get_field( 'carousel' ) ?: 'Your carousel here...';
$countSlides = count( get_field( 'carousel' ) ?? array() );
?>
<section class="carouselBlock">
    <div id="carousel<?=$post_id . '-' . $block['id']?>" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <?php if( get_field( 'show_carousel_indicators' ) ):?>
        <ol class="carousel-indicators">
        <?php for( $i = 0;  $i < $countSlides; $i++ ): ?>
        <li data-target="#carousel<?=$post_id . '-' . $block['id']?>" data-slide-to="<?= $i ?>" <?= ( ($i == 0) ? 'class="active"' : '' ) ?> ></li>
        <?php endfor;?>
        </ol>
        <?php endif; ?>
        <div class="carousel-inner">

        <?php for( $i = 0;  $i < $countSlides; $i++ ): ?>
            <div class="carousel-item <?= ( ($i == 0) ? 'active' : '' ) ?>">
                <img src="<?=$carousel[$i]['slide']['url']?>" class="d-block w-100" alt="...">
                <style>
                    .ccap{
                        background-color:rgba(44, 44, 44, 0.7);
                    }
                    .ccap h5, .ccap p{
                        color:white;
                    }
                </style>
                <?php
                    if( ! empty( $carousel[$i]['headline'] ) ):
                ?>
                        <div class="carousel-caption d-none d-md-block ccap">
                            <h5><?=$carousel[$i]['headline']?></h5>
                            <p><?=$carousel[$i]['content']?></p>
                        </div>
                <?php
                    endif;
                ?>
            </div>
        <?php endfor;?>

        </div>
    </div>
</section>
