<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158604545-1"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-158604545-1');
   </script>
    <title>
      <?php bloginfo('name'); ?> | 
      <?php echo is_front_page() ? 'Home' : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
       .showcase{
          background:
            #333 url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg') ?> )no-repeat;
            background-size: 100%;
       }

       .bd-example{
         
       }

    </style>
  </head>

  <body>

    <div class="blog-masthead sticky-top">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark" role="navigation" style="background-color: midnightblue;">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <img src="<?php echo get_template_directory_uri(); ?>/img/WhiteLogo.png" height="45px"/>
               <?php
               wp_nav_menu( array(
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
               ) );
               ?>
            </div>
         </nav>
      </div>
    </div>

<?php 
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