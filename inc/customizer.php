<?php
   function wpb_customize_register($wp_customize){
      // Showcase Section
      $wp_customize -> add_section('showcase_image', array(
         'title' => __('Showcase', 'wpbootstrap'),
         'description' => sprintf(__('Showcase Carousel Options', 'wpbootstrap')),
         'priority' => 130
      ));

      $wp_customize -> add_setting('showcase_image', array(
         'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
         'label' => __('Showcase Image 1', 'wpbootstrap'),
         'section' => 'showcase_image',
         'settings' => 'showcase_image',
         'priority' => 1
      )));

      $wp_customize -> add_setting('showcase_heading', array(
         'default' => __('Custom Bootstrap Wordpress Theme'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('showcase_heading', array(
         'label' => __('Image 1 Heading', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 2
      ));

      $wp_customize -> add_setting('showcase_text', array(
         'default' => __('Et laboriosam molestiae et amet non. Aspernatur nisi incidunt debitis dignissimos autem et. Voluptas illo tempore sint tenetur perferendis. In provident aut hic ipsam qui.'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('showcase_text', array(
         'label' => __('Image 1 Text', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 3
      ));

      $wp_customize -> add_setting('btn_url', array(
         'default' => __(''),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('btn_url', array(
         'label' => __('Image 1 Button URL', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 4
      ));

      $wp_customize -> add_setting('btn_txt', array(
         'default' => __('Read More'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('btn_txt', array(
         'label' => __('Image 1 Button Text', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 5
      ));

      // Image 2

      $wp_customize -> add_setting('showcase_image2', array(
         'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image2', array(
         'label' => __('Showcase Image 2', 'wpbootstrap'),
         'section' => 'showcase_image',
         'settings' => 'showcase_image2',
         'priority' => 6
      )));

      $wp_customize -> add_setting('showcase_heading2', array(
         'default' => __('Custom Bootstrap Wordpress Theme'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('showcase_heading2', array(
         'label' => __('Image 2 Heading', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 7
      ));

      $wp_customize -> add_setting('showcase_text2', array(
         'default' => __('Et laboriosam molestiae et amet non. Aspernatur nisi incidunt debitis dignissimos autem et. Voluptas illo tempore sint tenetur perferendis. In provident aut hic ipsam qui.'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('showcase_text2', array(
         'label' => __('Image 2 Text', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 8
      ));

      $wp_customize -> add_setting('btn_url2', array(
         'default' => __(''),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('btn_url2', array(
         'label' => __('Image 2 Button URL', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 9
      ));

      $wp_customize -> add_setting('btn_txt2', array(
         'default' => __('Read More'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('btn_txt2', array(
         'label' => __('Image 2 Button Text', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 10
      ));

      // Image 3

      $wp_customize -> add_setting('showcase_image3', array(
         'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image3', array(
         'label' => __('Showcase Image 3', 'wpbootstrap'),
         'section' => 'showcase_image',
         'settings' => 'showcase_image3',
         'priority' => 11
      )));

      $wp_customize -> add_setting('showcase_heading3', array(
         'default' => __('Custom Bootstrap Wordpress Theme'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('showcase_heading3', array(
         'label' => __('Image 3 Heading', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 12
      ));

      $wp_customize -> add_setting('showcase_text3', array(
         'default' => __('Et laboriosam molestiae et amet non. Aspernatur nisi incidunt debitis dignissimos autem et. Voluptas illo tempore sint tenetur perferendis. In provident aut hic ipsam qui.'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('showcase_text3', array(
         'label' => __('Image 3 Text', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 13
      ));

      $wp_customize -> add_setting('btn_url3', array(
         'default' => __(''),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('btn_url3', array(
         'label' => __('Image 3 Button URL', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 14
      ));

      $wp_customize -> add_setting('btn_txt3', array(
         'default' => __('Read More'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('btn_txt3', array(
         'label' => __('Image 3 Button Text', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 15
      ));

      // Image 4

      $wp_customize -> add_setting('showcase_image4', array(
         'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image4', array(
         'label' => __('Showcase Image 4', 'wpbootstrap'),
         'section' => 'showcase_image',
         'settings' => 'showcase_image4',
         'priority' => 16
      )));

      $wp_customize -> add_setting('showcase_heading4', array(
         'default' => __('Custom Bootstrap Wordpress Theme'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('showcase_heading4', array(
         'label' => __('Image 4 Heading', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 17
      ));

      $wp_customize -> add_setting('showcase_text4', array(
         'default' => __('Et laboriosam molestiae et amet non. Aspernatur nisi incidunt debitis dignissimos autem et. Voluptas illo tempore sint tenetur perferendis. In provident aut hic ipsam qui.'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('showcase_text4', array(
         'label' => __('Image 4 Text', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 18
      ));

      $wp_customize -> add_setting('btn_url4', array(
         'default' => __(''),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('btn_url4', array(
         'label' => __('Image 4 Button URL', ''),
         'section' => 'showcase_image',
         'priority' => 19
      ));

      $wp_customize -> add_setting('btn_txt4', array(
         'default' => __('Read More'),
         'type' => 'theme_mod'
      ));

      $wp_customize -> add_control('btn_txt4', array(
         'label' => __('Image 4 Button Text', 'wpbootstrap'),
         'section' => 'showcase_image',
         'priority' => 20
      ));
   }

   add_action('customize_register', 'wpb_customize_register');

?>