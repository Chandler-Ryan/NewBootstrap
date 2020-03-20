<?php 
if(!is_front_page() &&  is_page_template( 'Full Width Page' ) ) : ?>
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
      <?php if(is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>
    </div><!-- /.blog-sidebar -->
<?php endif;
if(!is_front_page() ):?>
  </div><!-- /.row -->
</div><!-- /.container -->
<?php endif;?>
    <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <h2 class="text-center social">
                <a href="https://www.facebook.com/chandler.ryan.543" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/chandler-ryan-91b094143/" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/Shakeyone" target="_blank"><i class="fa fa-github"></i></a>
                <a href="#" target="_blank"><i class="fa fa-bicycle"></i></a>
            </h2>
      <p>
        <a href="#"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>Back to top</a>
      </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php if( is_front_page() ): ?>
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
    <?php endif; wp_footer(); ?>
    <script>
    /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("blog-masthead").style.top = "0";
          // $('.blog-masthead').addClass('sticky-top');
        } else {
          document.getElementById("blog-masthead").style.top = "-61.27px";
          // $('.blog-masthead').removeClass('sticky-top');
        }
        prevScrollpos = currentScrollPos;
      }
    </script>
  </body>
</html>