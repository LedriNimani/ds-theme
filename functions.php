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







 



   }
   



?>