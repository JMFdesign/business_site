<?php
  /*-------------- Enable Widgets--------------- */

  function blank_widgets_init() {

  /*--- Sidebar Widget ---*/

  register_sidebar( array(
      'name'          => ('First Widget'),
      'id'            => 'first-widget',
      'description'   => 'Widget for our sidebar on pages',
      'before_widget' => '<div class="widget-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));

    add_action('widgets_init', 'blank_widgets_init');
  }

  /*-------------- Enable Custom Page--------------- */

  function custom_web_resources() {
      $labels = array(
        /*--- Begin Labels Options ---*/
        'name'               => _x( 'Biographies', 'post type general name' ),
        'singular_name'      => _x( 'Biography', 'post type singular name' ),
        'add_new'            => _x( 'Add New', weblink ),
        'add_new_item'       => __( 'Add Biography' ),
        'edit_item'          => __( 'Edit Biographies' ),
        'new_item'           => __( 'New Biography' ),
        'all_items'          => __( 'All Biographies' ),
        'view_item'          => __( 'View Biographies' ),
        'search_items'       => __( 'Search Biographies' ),
        'not_found'          => __( 'No biographies found' ),
        'not_found_in_trash' => __( 'No biographies found in the Trash' ), 
        'parent_item_colon'  => '',
        'menu_name'          => 'Web Biographies',
      );

    $args = array(
      /*--- Begin Arguments Options ---*/ 
      'labels'        => $labels,
      'description'   => 'Individual biographies for each adoptable dog',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );

    register_post_type( 'resources', $args ); 
  }

  add_action( 'init', 'custom_web_resources' );


  /*-------------- Enable Menu --------------- */

  add_theme_support('menus');

  /*----- Enable Post Thumbnails ----*/

  add_theme_support( 'post-thumbnail' );