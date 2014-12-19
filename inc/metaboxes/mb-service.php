<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/19/14
 * Time: 11:40 PM
 */
add_filter( 'cmb2_meta_boxes', 'opm_service_metaboxes' );

function opm_service_metaboxes(array $meta_boxes){
    $prefix = '_opm_';

    $meta_boxes['service_metabox'] = array(
        'id'            => 'service_metabox',
        'title'         => __( 'Service Options', 'opm' ),
        'object_types'  => array( 'service', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'fields'        => array(
            array(
                'name'       => __( 'Service Icon', 'opm' ),
                'id'         => $prefix . 'icon',
                'type'       => 'file',
            ),
            array(
                'name' => __( 'Service Details', 'opm' ),
                'id'   => $prefix . 'description',
                'type' => 'wysiwyg',
                'options'=>array(
                    "textarea_rows"=>10
                )
            ),
        ),
    );

    return $meta_boxes;
}
