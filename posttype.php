<?php
add_action( 'init', 'ha_portfolio_posttype_register' );


 function ha_portfolio_posttype_register(){

   // TODO: make argoman for function register_post_type(name , Arg)

   $label = array(
     'name' => __( 'نمونه کار ها' ),
     'singular_name' => __( 'نمونه کار' ),
   );
   $arg = array(
     'labels' => $label,
     'public' => true,
     'has_archive' => true,
     'menu_position' => 10,
     'supports' =>array(
       'author',
       'editor',
       'page-attributes',
       'revisions' ,
       'comments',
       'custom-fields',
       'trackbacks',
       'excerpt',
       'thumbnail',
     ),
     'taxonomies' => array('portfolio_cat','portfolio_tag'),
   );
   register_post_type("haportfolio",$arg);

 }






 ?>
