<?php

register_nav_menus(array('primary' => 'Primay menu'));

/*
Function to get very clean menu without ul around it.

How to use:     wp_nav_menu_no_ul(); 
Where to use:   Wherever you want your primary menu without a ul.
                For example in header.php 
*/

function wp_nav_menu_no_ul() {

    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);

    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function default_page_menu() {
   wp_list_pages('title_li=');
} 