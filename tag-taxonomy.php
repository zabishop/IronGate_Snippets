<?php

function subject_init() {
    // create a new taxonomy
    register_taxonomy(
        'subject',
        'press_release',
        array(
            'label' => __( 'Subject' ),
            'rewrite' => array( 'slug' => 'subject' ),
        )
    );
}
add_action( 'init', 'subject_init' );
