<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 12:52 AM
 */
$sections[] = array(
    'title' => __('About Us Settings', 'opm'),
    'icon' => 'el-icon-home',
    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields' => array(

        array(
            'id' => 'opm_about_section_display',
            'type' => 'switch',
            'title' => __('Display About Us Section', 'opm'),
            'default' => '1',
        ),
        array(
            'id' => 'opm_about_section_title',
            'type' => 'text',
            'title' => __('About Us Section Title', 'opm'),
            'default' => 'About Us',
        ),
        array(
            'id' => 'opm_about_section_description',
            'type' => 'editor',
            'title' => __('About Us Section Details', 'opm'),
            'default' => 'The chief clerk now raised his voice, "Mr. Samsa", he called to him, "what is wrong? You barricade yourself in your room, give us no more than yes or no for an answer, you are causing serious and unnecessary concern to your parents and you fail.',
        ),
        array(
            'id'       => 'opm_about_section_image',
            'type'     => 'media',
            'url'      => true,
            'title'    => __('About Section Image', 'opm'),
            'default'  => array(
                'url'=>get_template_directory_uri()."/img/about.png"
            ),
        )
    )
);