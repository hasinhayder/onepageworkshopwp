<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/19/14
 * Time: 11:40 PM
 */
add_filter( 'cmb2_meta_boxes', 'opm_team_metaboxes' );

function opm_team_metaboxes(array $meta_boxes){
    $prefix = '_opm_';

    $meta_boxes['team_metabox'] = array(
        'id'            => 'team_metabox',
        'title'         => __( 'Team Options', 'opm' ),
        'object_types'  => array( 'teammember', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'fields'        => array(
            array(
                'name'       => __( 'Team Member Photo', 'opm' ),
                'id'         => $prefix . 'profile',
                'type'       => 'file',
            ),
            array(
                'name' => __( 'Team Member Details', 'opm' ),
                'id'   => $prefix . 'description',
                'type' => 'wysiwyg',
                'options'=>array(
                    "textarea_rows"=>10
                )
            ),
        ),
    );


    $socialSites = array("facebook", "pinterest", "twitter", "dribbble", "flickr", "github");

    foreach ($socialSites as $ss) {
        $field = array(
            'id' => $prefix . $ss,
            'type' => 'text',
            'name' => __(ucfirst($ss) . ' URL', 'cvx'),
        );

        $meta_boxes['team_metabox']['fields'][] = $field;

    }

    return $meta_boxes;
}
