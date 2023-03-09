<?php
/**
* Template Name: Progress Updates
*
* @package WordPress
* @subpackage WPBootstrap
* @since 1.0
*/


$query = new WP_Query( ['cat' => 4] );
get_header(); ?>
<h1 class="text-center" style="margin-top:100px"><?php the_title()?></h1>
<div class="row col-8 mx-auto">
  <?php the_content(); ?>
</div>
<div class="col mx-auto">
  <?php if($query->have_posts()) : 
    while ( $query->have_posts() ): $query->the_post()?>
        <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php the_content(); ?>
      </div><!-- /.blog-post -->
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php __('No Page Found'); ?></p>
  <?php endif; ?>          
</div><!-- /.blog-main -->

<?php
get_footer(); 
?>