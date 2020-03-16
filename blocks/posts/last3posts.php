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
    .l3-card-body p{
        padding: 0 10px;
        text-align: justify;
    }
    .l3-card-body h5{
        margin-top: .75rem;
    }
</style>
<?php 

    $categories = implode(',', get_field( 'categories_of_posts') );
    $args = array(
        'numberposts' => 3,
        'category' => $categories
    );

    // echo('<pre>'.print_r( get_posts( $args), true ).'</pre>' );
?>

<div class="container">
        <div class="row">
            <?php 
                global $post;
                foreach( get_posts( $args ) as $post ):
                setup_postdata( $post );
                $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                $imageSRC = wp_get_attachment_image_src($post_thumbnail_id, 'full');
            ?>
                <div class="col-md-4  d-flex align-items-stretch">
                    <div class="card">
                        <img src="<?= $imageSRC[0] ?>" class="card-img-top" alt="...">

                        <div class="l3-card-body">
                            <h5 class="card-title text-center"><?= $post->post_title ?></h5>
                            <p><?php the_content() ?></p>
                        </div>
                    </div>
                </div>
            <?php
                wp_reset_postdata(); 
                endforeach;
            ?>
        </div>
</div>
