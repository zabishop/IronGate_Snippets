<?php
/*
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

*/

function add_custom_taxonomies() {
    $cpt = array(
        'press_release',
        //'news-story',
        //'video-link',
        //'hof-inductee',
        //'info-link',
    );
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('subject', $cpt, array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x( 'Subject', 'taxonomy general name' ),
            'singular_name' => _x( 'Subject', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Subjects' ),
            'all_items' => __( 'All Subjects' ),
            'parent_item' => __( 'Parent Subject' ),
            'parent_item_colon' => __( 'Parent Subject:' ),
            'edit_item' => __( 'Edit Subject' ),
            'update_item' => __( 'Update Subject' ),
            'add_new_item' => __( 'Add New Subject' ),
            'new_item_name' => __( 'New Subject Name' ),
            'menu_name' => __( 'Subject' ),
        ),
        'capabilities' => array(
            'manage_terms' => 'manage_categories',
            'edit_terms' => 'manage_categories',
            'delete_terms' => 'manage_categories',
            'assign_terms' => 'manage_categories',
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'subject',
            'with_front' => false,
            'hierarchical' => true
        ),
    ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
?>