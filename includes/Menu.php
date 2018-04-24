<?php

class Menu
{
    public function __construct($arguments)
    {
        $this->menu_items = $arguments['menu_items'];
        $this->menu_name = $arguments['menu_name'];
        $this->menu_initialize();
    }

    public function menu_initialize()
    {
        $menu_exists = wp_get_nav_menu_object($this->menu_name);

        // If it doesn't exist, let's create it.
        if (!$menu_exists) {
            $menu_id = wp_create_nav_menu($this->menu_name);
            foreach($this->menu_items as $menu_item){
                // Set up default menu items
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' => __($menu_item['menu_item_name']),
                    'menu-item-classes' => $menu_item['menu_item_class'],
                    'menu-item-url' => home_url($menu_item['menu_item_url']),
                    'menu-item-status' => 'publish'));
            }


        }
    }
}

?>
