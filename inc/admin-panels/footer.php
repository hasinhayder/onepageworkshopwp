<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/20/14
 * Time: 12:52 AM
 */
$sections['footer'] = array(
    'title' => __('Footer Settings', 'opm'),
    'icon' => 'el-icon-home',
    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    'fields' => array(

        array(
            'id' => 'opm_footer_section_title',
            'type' => 'text',
            'title' => __('Footer Section Title', 'opm'),
            'default' => 'Our Footers',
        ),
        array(
            'id' => 'opm_footer_section_description',
            'type' => 'editor',
            'title' => __('Footer Section Details', 'opm'),
            'default' => 'This was how Gregor received his food each day now, once in the morning while his parents and the maid were still asleep, and the second time after everyone had eaten their meal at midday as his parents would sleep for a little while then as well.',
        ),
        array(
            'id' => 'opm_footer_copyright',
            'type' => 'text',
            'title' => __('Footer Copyright Text', 'opm'),
            'default' => '&copy; 2014 WordPressians. All Rights Reserved.',
        ),


    )
);

$socialSites = array("facebook", "pinterest", "twitter", "dribbble", "flickr", "github");

foreach ($socialSites as $ss) {
    $field = array(
        'id' => 'opm_social' . $ss,
        'type' => 'text',
        'title' => __(ucfirst($ss) . ' URL', 'cvx'),
        'default' => ''
    );

    $sections['footer']['fields'][] = $field;

}