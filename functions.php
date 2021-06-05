<?php
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function load_assets( ){
        //load BS
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');

        //Google Fonts
        wp_enqueue_style('google_fonts_Libre_Barskerville', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap');
        wp_enqueue_style('google_fonts_Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
        
        //load stlye.css
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        
        //load JS
        wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js');

    }
    add_action('wp_enqueue_scripts', 'load_assets');

    // Remove HTML 32px mt
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');
                        
    //register nav menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );

    //support featured image
    add_theme_support('post-thumbnails'); 

    //Robots
    add_filter('robots_txt', 'custom_robots_txt', 10,  2);

    function custom_robots_txt($output, $public) {

        $robots_txt =  "User-agent: * \n";
        $robots_txt .=  "Sitemap: https://dev-catcart.pantheonsite.io/sitemap.xml \n";
        $robots_txt .=  "Disallow: /secure/ ";
        // add more $robots_txt .= for each line

        return $robots_txt;
    }
          
?>