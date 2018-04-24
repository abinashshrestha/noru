<?php
class CustomContent {
   function __construct($settings){
    $this->machine_name = $settings['machine_name'];
    $this->single_name = $settings['single_name'];
    $this->dashicon = $settings['dashicon'];
    $this->menu_position = $settings['menu_position'];
    $this->register_content_type();
  }
  function register_content_type(){
    $problem_labels = array (
    'name'                  => _X (ucfirst(str_replace('-',' ',$this->machine_name)), 'post type general name'),
    'singular_name'         => _X (ucfirst(str_replace('-',' ',$this->single_name)), 'post type singular name'),
    'all_items'             => ('All '.str_replace('-',' ',$this->machine_name)),
    'add_new'               => _X('Add new '.str_replace('-',' ',$this->machine_name),$this->machine_name),
    'add_new_item'          => ('Add new '.str_replace('-',' ',$this->machine_name)),
    'edit_item'             => ('Edit '.str_replace('-',' ',$this->machine_name)),
    'new_item'              => ('New '.str_replace('-',' ',$this->machine_name)),
    'view_item'             => ('View '.str_replace('-',' ',$this->machine_name)),
    'search_items'          => ('Search in '.str_replace('-',' ',$this->machine_name)),
    'not_found'             => ('No '.str_replace('-',' ',$this->machine_name).' found'),
    'not_found_in_trash'    => ('No '.str_replace('-',' ',$this->machine_name).' found in trash'),
    'parent_item_colon'     => ''
    );
    $args = array(
    'labels'                => $problem_labels,
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'query_var'             => true,
    'rewrite'               => true,
    'capability_type'       => 'post',
    'hierarchical'          => true,
    'menu_position'         => $this->menu_position,
    'menu_icon'             => $this->dashicon,
    'supports'              =>  array('title','editor','author','thumbnail','excerpt','custom-fields'),
    'has_archive'           => true
    );
    register_post_type($this->machine_name ,$args);
  }
}
 ?>
