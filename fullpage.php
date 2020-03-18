<?php
/**
* Template Name: Full Width Page
*
*/
get_header(); ?>
  <div class="row">
    <div class="col page-main">
        <h1 class="blog-post-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div><!-- /.page-main -->
<?php get_footer(); ?>
