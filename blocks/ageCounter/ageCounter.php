<section>
    <?php $time = new DateTime( null , new DateTimeZone( 'America/Chicago' ) );
    $born = new DateTime( get_field( 'birthdate' ), new DateTimeZone( 'America/Chicago' ) );
    $diff = $time->diff($born);
    //print_r( $diff ); 
    ?>
    <style>
        .birthblock{
        font-size: 24px;
        }

        .birthday {

        background:url('<?php echo get_template_directory_uri(); ?>/img/happy-birthday-balloons.png') no-repeat center;
        background-size:cover;
        height: 200px;            
        }

        .birthday p {
        text-shadow: 2px 2px 2px black;
        color: white;
        }

    </style>
    <div class="birthblock">
        <div class="birthday d-flex">

        <p class="text-center p-5 m-auto">Today, I am 
        
            <?php if ( $diff->y > 0 && $diff->m > 0 && $diff->d > 0 ): ?>
                <?=$diff->y?> year<?= ( ( $diff->y > 1 ) ? 's' : '' )?>, <?=$diff->m?> month<?= ( ( $diff->m > 1 ) ? 's' : '' )?> and <?=$diff->d?> day<?= ( ( $diff->d > 1 ) ? 's' : '' )?>
            <?php elseif ( $diff->m > 0 && $diff->d > 0 ): ?>
                <?=$diff->m?> month<?= ( ( $diff->m > 1 ) ? 's' : '' )?> and <?=$diff->d?> day<?= ( ( $diff->d > 1 ) ? 's' : '' )?>
            <?php elseif ( $diff->y > 0 && $diff->d > 0 ): ?>
                <?=$diff->y?> year<?= ( ( $diff->y > 1 ) ? 's' : '' )?> and <?=$diff->d?> day<?= ( ( $diff->d > 1 ) ? 's' : '' )?>
            <?php elseif ( $diff->y > 0 && $diff->m > 0 ): ?>
                <?=$diff->y?> year<?= ( ( $diff->y > 1 ) ? 's' : '' )?> and <?=$diff->m?> month<?= ( ( $diff->m > 1 ) ? 's' : '' )?>
            <?php elseif ( $diff->m > 0 ): ?>
                <?=$diff->m?> month<?= ( ( $diff->m > 1 ) ? 's' : '' )?>
            <?php endif;?> old!

        </p>

        </div>
    </div>
</section>
