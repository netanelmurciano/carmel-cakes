<?php

// we add new post type
// Our custom post type function
function custom_post_type()
{
    return array(
        $return[] = array(
            'type' => 'taxonomies',
            'label' => 'המלצות',
            'menu_icon' => 'dashicons-welcome-write-blog',
            'hierarchical' => false,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
            )
        ),
        $return[] = array(
            'type' => 'cakes',
            'label' => 'עוגות',
            'menu_icon' => 'dashicons-welcome-write-blog',
            'hierarchical' => false,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
            )

        )

    );
}

add_action('init', 'custom_post_type');