<?php

function change_default_title( $title ){

    $screen = get_current_screen();

    if ( 'ambassadors' == $screen->post_type ){
        $title = 'Ambassador Name, Month, Year';
    }

    return $title;
}

add_filter( 'enter_title_here', 'change_default_title' );
