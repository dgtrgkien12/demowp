<?php
    function dg_files(){
        wp_enqueue_script('main-dg-js',get_theme_file_uri('/build/index.js'), array('jquery'), '2.0', true);
        wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('dg_main_style',get_theme_file_uri('/build/style-index.css'));
        // wp_enqueue_style('dg_extra_style',get_theme_file_uri('/build/index.css'));
    }
    add_action('wp_enqueue_scripts','dg_files');

    // function dg_features() {
    //     register_nav_menu('headerMenulocation','Header Menu Location');
    //     // register_nav_menu('footerLocationOne', 'Footer Location One');
    //     // register_nav_menu('footerLocationTwo', 'Footer Location Two');
    //     add_theme_support('title_tag');
    // }

    // add_action('after_setup_theme', 'dg_features');

    // image
    function catch_that_image() {
        global $post, $posts;
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $first_img = $matches [1] [0];
       
        if(empty($first_img)){ //Defines a default image
          $first_img = "/images/default.jpg"; //Duong dan anh mac dinh khi khong tim duoc anh dai dien
        }
        return $first_img;
      }

      add_theme_support( 'post-thumbnails' );
      register_nav_menu('headerMenulocation','Header Menu Location');
      register_nav_menu('mobileMenulocation','Mobile Menu Location');
?>