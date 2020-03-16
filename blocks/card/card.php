<style>
    /* Card styles */
    section.card-block{
        margin: 50px auto;
    }
    .card-header, .card-footer{
        background-color: midnightblue;
        color:white;
    }

    .card-body-link{
        text-align:center;
    }
    .card-body-link a{
        display:inline-block;
    }
    .card-body p{
        padding: 20px 50px;
        text-align: justify;
    }
</style>
<section class="container card-block">
    <div class="card">
        <?php if( get_field( 'header_or_image' ) == 'header'):?>
        <div class="card-header text-center">
            <?= get_field( 'header' ) ?>
        </div>
        <?php else: ?>
        <img src="<?= get_field( 'top_image' )['url'] ?>" class="card-img-top" alt="..." width="100%">
        <?php endif;?>
        <div class="card-body">
            <h5 class="card-title text-center"><?= get_field( 'body_title' ) ?></h5>
            <?php
                echo get_field( 'body_content' );
                if( ! empty( get_field( 'show_cta' ) ) ):
                    if( get_field( 'internal_or_external' ) == 'internal' ):
            ?>
                        <div class="card-body-link">
                            <a href="<?= get_field( 'body_cta_internal' ) ?>" class="btn btn-outline-primary"><?= get_field( 'body_cta_text' ) ?></a>
                        </div>
            <?php   elseif( get_field( 'internal_or_external' ) == 'external' ): ?>
                        <div class="card-body-link">
                            <a href="<?= get_field( 'body_cta_external' ) ?>" class="btn btn-outline-primary"><?= get_field( 'body_cta_text' ) ?></a>
                        </div>
            <?php   
                    endif;
                endif;
            ?>
        </div>
        <?php if( get_field( 'footer_or_image' ) == 'image' ):?>
        <img src="<?= get_field( 'bottom_image' )['url'] ?>" class="card-img-bottom" alt="..." width="100%">
        <?php elseif( get_field( 'footer_or_image' ) == 'footer' ) : ?>
        <div class="card-footer text-center">
            <?= get_field( 'footer' ) ?>
        </div>
        <?php else:endif; ?>
    </div>
</section>