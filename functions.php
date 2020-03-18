<?php
   // Register Nav Walker class_alias
   require_once('class-wp-bootstrap-navwalker.php');

   // Theme suppprt
   function wpb_theme_setup(){

      add_theme_support('post-thumbnails');
      // Nav Menus
      register_nav_menus(array(
         'primary' => __('Primary Menu')
      ));

      // Post Formats
      add_theme_support('post-formats', array('aside', 'gallery'));

   }

   add_action('after_setup_theme', 'wpb_theme_setup');

//    Excerpt Length Control
   function set_excerpt_length(){
      return 150;
   }

   add_filter('excerpt_length', 'set_excerpt_length');

   function wpse_allowedtags() {
    // Add custom tags to this string
        return '<script>,<style>,<br>,<em>,<i>,<ul>,<ol>,<li>,<a>,<p>,<img>,<video>,<audio>'; 
    }

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) : 

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
    $raw_excerpt = $wpse_excerpt;
        if ( '' == $wpse_excerpt ) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 150;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

                foreach ($tokens[0] as $token) { 

                    if ($count >= $excerpt_length && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) { 
                    // Limit reached, continue until , ; ? . or ! occur at the end
                        $excerptOutput .= trim($token);
                        break;
                    }

                    // Add words to complete sentence
                    $count++;

                    // Append what's left of the token
                    $excerptOutput .= $token;
                }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

                $excerpt_end = ' <a href="'. esc_url( get_permalink() ) . '">' . '&nbsp;&raquo;&nbsp;' . sprintf(__( 'Read more about: %s &nbsp;&raquo;', 'wpse' ), get_the_title()) . '</a>'; 
                $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end); 

                //$pos = strrpos($wpse_excerpt, '</');
                //if ($pos !== false)
                // Inside last HTML tag
                //$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
                //else
                // After the content
                // $wpse_excerpt .= $excerpt_more; /*Add read more in new paragraph */

            return $wpse_excerpt;

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif; 

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');

//    // Excerpt More Tag Change
//    function new_excerpt_more($more){
//       return '</p><div class="text-center blogLinkBlock"><a class="btn btn-primary readMore" href="'.get_permalink().'">Read More</a></div>';
//    }

// add_filter('excerpt_more', 'new_excerpt_more');
   
   //widget locations
   function wpb_init_widget($id){
      register_sidebar(array(
         'name' => 'Sidebar',
         'id' => 'sidebar',
         'before_widget' => '<div class="sidebar-module">',
         'after_widget' => '</div>',
         'before_title' => '<h4>',
         'after_title' => '</h4>'
      ));
      register_sidebar(array(
         'name' => 'Box1',
         'id' => 'box1',
         'before_widget' => '<div class="box">',
         'after_widget' => '</div>',
         'before_title' => '<h3>',
         'after_title' => '</h3>'
      ));
      register_sidebar(array(
         'name' => 'Box2',
         'id' => 'box2',
         'before_widget' => '<div class="box">',
         'after_widget' => '</div>',
         'before_title' => '<h3>',
         'after_title' => '</h3>'
      ));
      register_sidebar(array(
         'name' => 'Box3',
         'id' => 'box3',
         'before_widget' => '<div class="box">',
         'after_widget' => '</div>',
         'before_title' => '<h3>',
         'after_title' => '</h3>'
      ));
   }

   add_action('widgets_init', 'wpb_init_widget');

   // Customizer file
   require get_template_directory(). '/inc/customizer.php';

   // Change cookie warning on comments
   function comment_form_change_cookies_consent( $fields ) {
      $commenter = wp_get_current_commenter();
      $consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
      $fields['cookies'] = '
      <div class="comment-form-cookies-consent form-group">
         <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . 'autocomplete-"off" />' .
         '<div class="btn-group">
            <label for="wp-comment-cookies-consent" class="btn btn-primary checker">
               <span class="glyphicon glyphicon-ok"></span>
               <span class="wBorder">&nbsp;&nbsp;&nbsp;</span>
            </label>
            <label for="wp-comment-cookies-consent" class="btn btn-primary active">
               Save this info for the next time you are commenting.
            </label>
         </div>
      </div>';
      return $fields;
   }
   add_filter( 'comment_form_default_fields', 'comment_form_change_cookies_consent' );

function register_acf_block_types() {

   // register a carousel block.
   acf_register_block_type(array(
       'name'              => 'carousel',
       'title'             => __('Carousel'),
       'description'       => __('A custom carousel block.'),
       'render_template'   => 'blocks/carousel/carousel.php',
       'category'          => 'layout',
       'icon'              => 'images-alt2',
       'keywords'          => array( __( 'carousel' ), __( 'slider' ), __( 'image'), __( 'gallery' ) ),
   ));

   // register a ageCounter block.
   acf_register_block_type(array(
      'name'              => 'ageCounter',
      'title'             => __('Age Counter'),
      'description'       => __('Lists how old someone is to the day.'),
      'render_template'   => 'blocks/ageCounter/ageCounter.php',
      'category'          => 'layout',
      'icon'              => 'calendar-alt',
      'keywords'          => array( __( 'age' ), __( 'counter' ) ),
  ));

     // register a card block.
     acf_register_block_type(array(
      'name'              => 'card',
      'title'             => __('Card'),
      'description'       => __('Full container block with Header/Footer or an Image to replace the header or footer.'),
      'render_template'   => 'blocks/card/card.php',
      'category'          => 'layout',
      'icon'              => 'id',
      'keywords'          => array( __( 'card' ) ),
  ));

      // register a card list block.
      acf_register_block_type(array(
      'name'              => 'card-list',
      'title'             => __('Card List'),
      'description'       => __('Full container block with Header containing list items.'),
      'render_template'   => 'blocks/card/card-list.php',
      'category'          => 'layout',
      'icon'              => 'list-view',
      'keywords'          => array( __( 'card' ), __( 'list' ) ),
   ));

   // register a block with last 3 posts from selected category.
   acf_register_block_type(array(
      'name'              => 'last3posts',
      'title'             => __('Last 3 Posts'),
      'description'       => __('Full container block with the last 3 posts.'),
      'render_template'   => 'blocks/posts/last3posts.php',
      'category'          => 'layout',
      'icon'              => 'share-alt',
      'keywords'          => array( __( 'posts' ), __( '3' ), __( 'last' ) ),
   ));

   // register a block with last 3 posts from selected category.
   acf_register_block_type(array(
      'name'              => 'accordion',
      'title'             => __('Accordion'),
      'description'       => __('Expanding / Collapsing cards to show content.'),
      'render_template'   => 'blocks/accordion/accordion.php',
      'category'          => 'layout',
      'icon'              => 'editor-customchar',
      'keywords'          => array( __( 'accordion' ), __( 'tabs' ), __( 'shrink' ), __( 'expand' ) ),
   ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
   add_action('acf/init', 'register_acf_block_types');
}

function custom_admin_css() {
   echo '<style type="text/css">
   .wp-block { max-width: 95%; }
   </style>';
}
add_action('admin_head', 'custom_admin_css');

add_filter( 'gform_submit_button', 'add_custom_css_classes', 10, 2 );
function add_custom_css_classes( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'class' );
    $classes .= " btn btn-outline-primary";
    $input->setAttribute( 'class', $classes );
    return $dom->saveHtml( $input );
}

/**
 * Redirects without using a plugin
 * @link https://www.namehero.com/startup/how-to-redirect-a-page-in-wordpress-plugin/
 */
function redirect_page() {

   if (isset($_SERVER['HTTPS']) &&
      ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
      isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
      $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
      $protocol = 'https://';
      }
      else {
      $protocol = 'http://';
  }

  $currenturl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $currenturl_relative = wp_make_link_relative($currenturl);

  switch ($currenturl_relative) {
  
      // case '[from slug]':
      //     $urlto = home_url('[to slug]');
      //     break;
      case '/about/':
         $urlto = home_url('/about/about-me/');
         break;
      
      default:
          return;
  
  }
  
  if ($currenturl != $urlto)
      exit( wp_redirect( $urlto ) );


}
add_action( 'template_redirect', 'redirect_page' );
