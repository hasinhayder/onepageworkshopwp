<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 12:52 AM
 */
$sections[] = array(
    'title' => __('Testimonial Settings', 'opm'),
    'icon' => 'el-icon-home',
    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields' => array(

        array(
            'id' => 'opm_testimonial_section_display',
            'type' => 'switch',
            'title' => __('Display Testimonial Section', 'opm'),
            'default' => '1',
        ),
        array(
            'id' => 'opm_testimonial_section_title',
            'type' => 'text',
            'title' => __('Testimonial Section Title', 'opm'),
            'default' => 'Our Testimonials',
        ),
        array(
            'id' => 'opm_testimonial_section_description',
            'type' => 'editor',
            'title' => __('Testimonial Section Details', 'opm'),
            'default' => 'This was how Gregor received his food each day now, once in the morning while his parents and the maid were still asleep, and the second time after everyone had eaten their meal at midday as his parents would sleep for a little while then as well.',
        ),
        array(
            'id' => 'opm_testimonials',
            'type' => 'select',
            'data' => 'posts',
            'title' => __('Select Testimonials', 'opm'),
            'args' => array('post_type'=>'testimonial'),
            'multi'=> true,
            'sortable'=>true
        ),

    )
);