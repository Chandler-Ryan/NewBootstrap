<?php get_header(); ?>
  <div class="row">
    <div class="col-sm-8 blog-main">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div id="<?=get_the_ID()?>">
                <h2 class="text-center"><?=the_field( 'date' )?></h2>
            </div>
          <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>          
    </div><!-- /.blog-main -->
<?php get_footer(); ?>