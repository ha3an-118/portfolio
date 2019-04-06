<?php

add_action( 'init', 'ha_portfolios_tax_hierarchical', 0 );

function ha_portfolios_tax_hierarchical() {


 $labels = array(
   'name'              => _x( 'دسته بندی نمونه کار ها', 'taxonomy general name', 'textdomain' ),
   'singular_name'     => _x( 'دسته بندی نمونه کار', 'taxonomy singular name', 'textdomain' ),
   'search_items'      => __( 'جستجوی نمونه کارها', 'textdomain' ),
   'all_items'         => __( 'همه نمونه کارها', 'textdomain' ),
   'parent_item'       => __( 'دسته بندی مادر ', 'textdomain' ),
   'parent_item_colon' => __( 'دسته بندی مادر ', 'textdomain' ),
   'edit_item'         => __( 'اصلاح دسته بندی ', 'textdomain' ),
   'update_item'       => __( 'Update portfolio', 'textdomain' ),
   'add_new_item'      => __( 'افزودن یک دسته بندی جدید', 'textdomain' ),
   'new_item_name'     => __( 'New Genre portfolio', 'textdomain' ),
   'menu_name'         => __( 'دسته بندی نمونه کارها', 'textdomain' ),
 );

 $args = array(
   'hierarchical'      => true,
   'labels'            => $labels,
   'show_ui'           => true,
   'show_admin_column' => true,
   'query_var'         => true,
   'rewrite'           => array( 'slug' => 'portfoliocat' ),
 );

 register_taxonomy( 'portfolio_cat', array( ''), $args );

}

// ====================================================================


add_action( 'init', 'ha_portfolios_tax_nonhierarchical', 0 );

function ha_portfolios_tax_nonhierarchical() {


 $labels = array(
   'name'              => _x( 'برچسب نمونه کارها', 'taxonomy general name', 'textdomain' ),
   'singular_name'     => _x( 'برچسب نمونه کار', 'taxonomy singular name', 'textdomain' ),
   'search_items'      => __( 'جستجوی نمونه کارها', 'textdomain' ),
   'all_items'         => __( 'همه نمونه کارها', 'textdomain' ),
   'parent_item'       => __( 'برچسب مادر ', 'textdomain' ),
   'parent_item_colon' => __( 'برچسب مادر ', 'textdomain' ),
   'edit_item'         => __( 'اصلاح برچسب ', 'textdomain' ),
   'update_item'       => __( 'Update product', 'textdomain' ),
   'add_new_item'      => __( 'افزودن یک برچسب جدید', 'textdomain' ),
   'new_item_name'     => __( 'New Genre product', 'textdomain' ),
   'menu_name'         => __( 'برچسب نمونه کارها', 'textdomain' ),
 );

 $args = array(
   'hierarchical'      => false,
   'labels'            => $labels,
   'show_ui'           => true,
   'show_admin_column' => true,
   'query_var'         => true,
   'rewrite'           => array( 'slug' => 'portfoliotag' ),
 );

 register_taxonomy( 'portfolio_tag', array( '' ), $args );

}
