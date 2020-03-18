<?php 
   get_header();
   the_post();
   the_content();
?>
</div><!-- div.container from header -->

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

   <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
   </footer>
   <?php wp_footer(); ?>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script>
      $(document).ready(function(){
         var height = 0;
         $('.box').each(function(){
            if ($(this).height() > height) height = $(this).height();
         });
         $('.box').each(function(){
            $(this).height(height);
         });
      });
   </script>
</body>
</html>