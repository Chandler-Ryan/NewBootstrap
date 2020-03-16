<?php
/**
* Template Name: Progress Updates
*
* @package WordPress
* @subpackage WPBootstrap
* @since 1.0
*/
global $wpdb;

$progressPosts = $wpdb->get_results( "SELECT ID from `g3i7mt_posts` WHERE post_type = 'progress' AND post_status = 'publish' ", ARRAY_N );
foreach ($progressPosts as $progressId){
    $idList[] = $progressId[0];
}
// print_r($idList);
get_header(); ?>
    <div class="row">
        <div class="col-sm-8 blog-main">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="blog-post">
                <h2 class="blog-post-title">
                <?php the_title(); ?>
                </h2>
                <?php the_content(); ?>
            </div><!-- /.blog-post -->
            <?php endwhile; ?>
            <div class="row">
                <?php foreach ($idList as $update): 
                $imageURL = get_field( 'update_image', $update )['url']; ?>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?=$imageURL?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
            
            </div>
        <?php else : ?>
            <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>          
        </div><!-- /.blog-main -->
<?php get_footer(); ?>