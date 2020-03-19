<?php 
   get_header();
   the_post();
   the_content();
?>

   <section class="boxes mt-3">
      <div class="container">
         <div class="row">
            <div class="col">
               <?php if(is_active_sidebar('box1')) dynamic_sidebar('box1'); ?>
            </div>
            <div class="col">
               <?php if(is_active_sidebar('box2')) dynamic_sidebar('box2'); ?>           
            </div>
            <div class="col">
               <?php if(is_active_sidebar('box3')) dynamic_sidebar('box3'); ?>            
            </div>         
         </div>
      </div>
   </section>

<?php get_footer(); ?>
