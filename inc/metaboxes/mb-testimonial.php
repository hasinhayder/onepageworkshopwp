<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/19/14
 * Time: 11:40 PM
 */
add_filter( 'cmb2_meta_boxes', 'opm_testimonial_metaboxes' );

function opm_testimonial_metaboxes(array $meta_boxes){
    $prefix = '_opm_';

    $meta_boxes['testimonial_metabox'] = array(
        'id'            => 'testimonial_metabox',
        'title'         => __( 'Testimonial Options', 'opm' ),
        'object_types'  => array( 'testimonial', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'fields'        => array(
            array(
                'name'       => __( 'Name', 'opm' ),
                'id'         => $prefix . 'name',
                'type'       => 'text',
            ),
            array(
                'name'       => __( 'Designation', 'opm' ),
                'id'         => $prefix . 'designation',
                'type'       => 'text',
            ),
            array(
                'name'       => __( 'URL', 'opm' ),
                'id'         => $prefix . 'url',
                'type'       => 'text',
            ),
            array(
                'name'       => __( 'Photo', 'opm' ),
                'id'         => $prefix . 'icon',
                'type'       => 'file',
            ),
            array(
                'name' => __( 'Testimonial', 'opm' ),
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
