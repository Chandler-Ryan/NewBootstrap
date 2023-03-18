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

// if ( is_admin() ):?>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<!-- <?php //endif;?> -->

<section class="carouselBlock">
    <div id="carouselExampleCaptions<?=$post_id . '-' . $block['id']?>" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <?php if( get_field( 'show_carousel_indicators' ) ):?>
        <ol class="carousel-indicators">
        <?php for( $i = 0;  $i < $countSlides; $i++ ): ?>
        <li data-target="#carouselExampleCaptions<?=$post_id . '-' . $block['id']?>" data-slide-to="<?= $i ?>" <?= ( ($i == 0) ? 'class="active"' : '' ) ?> ></li>
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
