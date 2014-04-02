<?php

add_action('admin_menu', 'register_my_custom_menu_page');

function register_my_custom_menu_page()
{
    add_menu_page(
        'People', //$page_title: Not sure what this does.
        'People', //$menu_title: How this menu item will appear in menu
        'manage_options', //$capability: Set to a specific capability to mimic that rule's permissions.
        'peoplemenu', //$menu_slug: Menu's slug.  Useful to assign CPTs to menu.
        'people_menu_page', //$function: Declare a function to construct page
        'dashicons-admin-post', //$icon_url: Compatiable with WP dash icons
    	6 //$position
    );
}
