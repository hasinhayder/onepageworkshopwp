<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 12:52 AM
 */
$sections[] = array(
    'title' => __('Experience Settings', 'opm'),
    'icon' => 'el-icon-home',
    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields' => array(

        array(
            'id' => 'opm_experience_section_display',
            'type' => 'switch',
            'title' => __('Display Experience Section', 'opm'),
            'default' => '1',
        ),
        array(
            'id' => 'opm_experience_section_title',
            'type' => 'text',
            'title' => __('Experience Section Title', 'opm'),
            'default' => 'Our Experiences',
        ),
        array(
            'id' => 'opm_experience_section_description',
            'type' => 'editor',
            'title' => __('Experience Us Section Details', 'opm'),
            'default' => 'This was how Gregor received his food each day now, once in the morning while his parents and the maid were still asleep, and the second time after everyone had eaten their meal at midday as his parents would sleep for a little while then as well.',
        ),
        array(
            'id' => 'opm_experiences',
            'type' => 'multi_text',
            'default'=>array("10, Clients","100, Projects","3, Million Lines","8, Years Experience")
        ),

    )
);