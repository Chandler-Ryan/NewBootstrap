<?php
   
   $carouselData[] = array(
      'image' => get_theme_mod('showcase_image'),
      'heading' => get_theme_mod('showcase_heading'),
      'text' => get_theme_mod('showcase_text'),
      'url' => get_theme_mod('btn_url'),
      'btn_txt' => get_theme_mod('btn_txt')
   );

   $carouselData[] = array(
      'image' => get_theme_mod('showcase_image2'),
      'heading' => get_theme_mod('showcase_heading2'),
      'text' => get_theme_mod('showcase_text2'),
      'url' => get_theme_mod('btn_url2'),
      'btn_txt' => get_theme_mod('btn_txt2')
   );

   $carouselData[] = array(
      'image' => get_theme_mod('showcase_image3'),
      'heading' => get_theme_mod('showcase_heading3'),
      'text' => get_theme_mod('showcase_text3'),
      'url' => get_theme_mod('btn_url3'),
      'btn_txt' => get_theme_mod('btn_txt3')
   );

   $carouselData[] = array(
      'image' => get_theme_mod('showcase_image4'),
      'heading' => get_theme_mod('showcase_heading4'),
      'text' => get_theme_mod('showcase_text4'),
      'url' => get_theme_mod('btn_url4'),
      'btn_txt' => get_theme_mod('btn_txt4')
   );
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title>
      <?php bloginfo('name'); ?> | 
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
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

    <section class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
         <ol class="carousel-indicators">
            <?php for( $i = 0;  $i < count( $carouselData ); $i++ ): ?>
            <li data-target="#carouselExampleCaptions" data-slide-to="<?= $i ?>" <?= ( ($i == 0) ? 'class="active"' : '' ) ?> ></li>
            <?php endfor;?>
         </ol>
         <div class="carousel-inner">

            <?php for( $i = 0;  $i < count( $carouselData ); $i++ ): ?>
               <div class="carousel-item <?= ( ($i == 0) ? 'active' : '' ) ?>">
                  <img src="<?=$carouselData[$i]['image']?>" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                     <h5><?=$carouselData[$i]['heading']?></h5>
                     <p><?=$carouselData[$i]['text']?></p>
                  </div>
               </div>
            <?php endfor;?>

         </div>
      </div>
   </section>

   <section>
      <?php $time = new DateTime( null , new DateTimeZone( 'America/Chicago' ) );
      $born = new DateTime( '2019-01-22', new DateTimeZone( 'America/Chicago' ) );
      $diff = $time->diff($born);
      //print_r( $diff ); 
      ?>
      <style>
         .birthblock{
            font-size: 24px;
         }

         .birthday {

            background:url('<?php echo get_template_directory_uri(); ?>/img/happy-birthday-balloons.png') no-repeat center;
            background-size:cover;
            height: 200px;            
         }

         .birthday p {
            text-shadow: 2px 2px 2px black;
            color: white;
         }

      </style>
      <div class="birthblock">
         <div class="birthday d-flex">

            <p class="text-center p-5 m-auto">Today, I am 
            
               <?php if ( $diff->y > 0 && $diff->m > 0 && $diff->d > 0 ): ?>
                  <?=$diff->y?> year<?= ( ( $diff->y > 1 ) ? 's' : '' )?>, <?=$diff->m?> month<?= ( ( $diff->m > 1 ) ? 's' : '' )?> and <?=$diff->d?> day<?= ( ( $diff->d > 1 ) ? 's' : '' )?>
               <?php elseif ( $diff->m > 0 && $diff->d > 0 ): ?>
                  <?=$diff->m?> month<?= ( ( $diff->m > 1 ) ? 's' : '' )?> and <?=$diff->d?> day<?= ( ( $diff->d > 1 ) ? 's' : '' )?>
               <?php elseif ( $diff->y > 0 && $diff->d > 0 ): ?>
                  <?=$diff->y?> year<?= ( ( $diff->y > 1 ) ? 's' : '' )?> and <?=$diff->d?> day<?= ( ( $diff->d > 1 ) ? 's' : '' )?>
               <?php elseif ( $diff->y > 0 && $diff->m > 0 ): ?>
                  <?=$diff->y?> year<?= ( ( $diff->y > 1 ) ? 's' : '' )?> and <?=$diff->m?> month<?= ( ( $diff->m > 1 ) ? 's' : '' )?>
               <?php elseif ( $diff->m > 0 ): ?>
                  <?=$diff->m?> month<?= ( ( $diff->m > 1 ) ? 's' : '' )?>
               <?php endif;?> old!

            </p>

         </div>
      </div>
   </section>

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