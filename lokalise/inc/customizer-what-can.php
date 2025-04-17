<?php 

/**
 * Section What Can
 */
function section_what_can_customize_register($wp_customize){
    //Add section
    $wp_customize->add_section('section_what_can', array(
        'title'    => __('Section What Can', 'lokalise'),
        'priority' => 111,
    ));

    //Add title for section What Can
    $wp_customize->add_setting('what_can_title_setting', array( 
        'default'   => 'Default title',
        'transport' => 'refresh',
    ));

    // // Add a control for the Title field
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'what_can_title_control', array(
        'label'    => __('What Can Section Title', 'lokalise'),
        'section'  => 'section_what_can',
        'settings' => 'what_can_title_setting',
        'type'     => 'text',
    )));

}
add_action('customize_register', 'section_what_can_customize_register');