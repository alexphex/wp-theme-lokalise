<?php 

/**
 * Section Boost
 */
function section_boost_customize_register($wp_customize){
    //Add section
    $wp_customize->add_section('section_boost', array(
        'title'    => __('Section Boost', 'lokalise'),
        'priority' => 112,
    ));

    //Add title for section Boost
    $wp_customize->add_setting('boost_title_setting', array( 
        'default'   => 'Default title',
        'transport' => 'refresh',
    ));

    // // Add a control for the Title field
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'boost_title_control', array(
        'label'    => __('Boost Section Title', 'lokalise'),
        'section'  => 'section_boost',
        'settings' => 'boost_title_setting',
        'type'     => 'text',
    )));

}
add_action('customize_register', 'section_boost_customize_register');