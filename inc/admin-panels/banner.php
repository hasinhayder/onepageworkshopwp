<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 12:52 AM
 */
$sections[] = array(
    'title'  => __( 'Banner Settings', 'opm' ),
    'icon'   => 'el-icon-home',
    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields' => array(

        array(
            'id'       => 'opm_banner_gallery',
            'type'     => 'gallery',
            'title'    => __( 'Banner Images', 'opm' ),
            'url' => 'true',
        ),
        array(
            'id'       => 'opm_banner_button1_text',
            'type'     => 'text',
            'title'    => __( 'Button 1 Text', 'opm' ),
            'url' => 'true',
        ),
        array(
            'id'       => 'opm_banner_button1_url',
            'type'     => 'text',
            'title'    => __( 'Button 1 url', 'opm' ),
            'url' => 'true',
        ),
        array(
            'id'       => 'opm_banner_button2_text',
            'type'     => 'text',
            'title'    => __( 'Button 2 Text', 'opm' ),
            'url' => 'true',
        ),
        array(
            'id'       => 'opm_banner_button2_url',
            'type'     => 'text',
            'title'    => __( 'Button 2 url', 'opm' ),
            'url' => 'true',
        ),
    )
);