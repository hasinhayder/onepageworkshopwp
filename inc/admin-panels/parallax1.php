<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 12:52 AM
 */
$sections[] = array(
    'title' => __('Parallax Section 1 Settings', 'opm'),
    'icon' => 'el-icon-home',
    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields' => array(

        array(
            'id' => 'opm_parallax1_section_display',
            'type' => 'switch',
            'title' => __('Display Parallax Section 1 Section', 'opm'),
            'default' => '1',
        ),
        array(
            'id' => 'opm_parallax1_section_description',
            'type' => 'editor',
            'title' => __('Parallax Section 1 Text', 'opm'),
            'default' => 'So Gregor did not go into the room, but leant against the inside of the other door which was still held bolted in place. In this way only half of his body could be seen, along with his head above it which he leant over to one side.',
        ),
        array(
            'id'       => 'opm_parallax1_section_image',
            'type'     => 'media',
            'url'      => true,
            'title'    => __('Parallax 1 Background Image', 'opm'),
            'default'  => array(
                'url'=>get_template_directory_uri()."/img/parallax1.jpg"
            ),
        )
    )
);