<?php
   function add_theme_script(){
    wp_enqueue_style("style", get_template_directory_url()."/style.css",  false, "1.0", "all" );
    wp_enqueue_style("main",get_template_directory_url()."/css/main.css", false,"1.0", "all");
    wp_enqueue_style("bootstrap.min",get_template_directory_url()."/css/bootstrap.min.css",false ,"1.0", "all");


    wp_enqueue_script("main",get_template_directory_url()."/js/main.js", array('jquery'),"1.0", true);
    wp_enqueue_script("bootstrap.bundle.min",get_template_directory_url()."/js/bootstrap.bundle.min.js", array('jquery'),"1.0", true);



    if(is_singular() && comments_open() && get_option('thread-comments')){
      wp_enqueue_script('comment-reply');
    }
   }
   
   add_action("wp_enqueue_scripts","add_theme_script");
   
   function ds_set_up(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary','Primary Navigation');

}

   add_action("init","ds_set_up");
   add_theme_support("post-thumbnails");


   function themename_widgets_init(){
      register_sidebar(array(

         'name' => __('Primary Sidebar','theme_name'),
         'id' => 'sidebar_1',
         'before_widgets' => '<aside id="%1$s" class="%2$s">',
         'after_widgets' => '</aside>',
         'before_title' => '<h3 class="widget_title"',
         'after_title'  => '</h3>'




      ));

      register_sidebar(array(

         'name' => __('Secondary Sidebar','theme_name'),
         'id' => 'sidebar_2',
         'before_widgets' => '<ul><li id="%1$s" class="%2$s">',
         'after_widgets' => '</li></ul>',
         'before_title' => '<h3 class="widget_title"',
         'after_title'  => '</h3>'




      ));







 



   };

   function create_post_type(){
      $labels=array(
         'name'=>__('Movies'),
         'singular_name'=>__('movie'),
         'add_new'=>__("Add Movie",'movie'),
         'add_new_item'=>__('Add New Movie'),
         'edit_item'=>__("Edit Movie"),
         'new_item'=>__("New Movie"),
         'add_items'=>__('All Movies'),
         'view_item'=>__('View Movie'),
         'search_items'=>__('Search Movie'),
         'not_found'=>__('No movies found'),
         'not_found_in_trash'=>__('No movies found in trash'),
         'menu_name'=>"Movie"

      );
      $args=array(
         'labels'=>$labels,
         'description'=>"Movie and single movie details",
         'public'=>true,
         'menu_position'=>5,
         'supports'=>array('title','editor','thumbnail','excerpt','comments'),
         'menu_icon'=>'dashboard-button',
         'has_archive'=>true,
      );


      register_post_type("movie",$args);
   }

   add_action('init','create_post_type');
   
function movies_taxonomy(){
   $args = [
      'labels' => array(
         'name' => ('Movie Genres'),
         'singular_name' => ('Movie Genre'),
         'add_new_item' => ('Add New Movie Genre'),
         'edit_item' => ('Edit Movie Genres'),
      ),
      'public' => true,
      'hierarchical' => true,
   ];
   register_taxonomy('type', array('movie'), $args);
}
add_action('init', 'movies_taxonomy');


?>