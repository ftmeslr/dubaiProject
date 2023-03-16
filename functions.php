<?php
include("includes/acf.php");
add_action('init',function(){
    //Register Nav Menus
    register_nav_menus( array(
        'menu_items'=>'لینک های منوی بالا',
        'footer'=>'لینک های فوتر',
    ));
});
//Add Class Name for wpnavmenu
add_filter( 'nav_menu_link_attributes',function( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
}, 1, 3 );

add_filter('nav_menu_css_class', function($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}, 1, 3);
?>