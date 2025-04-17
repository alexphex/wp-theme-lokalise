<?php 
/**
 * Section most-loved
 */

 function section_most_loved_customize_register($wp_customize){
    //Add section
    $wp_customize->add_section('section_most-loved', array(
        'title'    => __('Section Most Loved', 'lokalise'),
        'priority' => 112,
    ));

    //Add title for section Most-loved
    $wp_customize->add_setting('most-loved_title_setting', array( 
        'default'   => 'Default title',
        'transport' => 'refresh',
    ));

    // Add a control for the Title field
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'most-loved_title_control', array(
        'label'    => __('Most-loved Title', 'lokalise'),
        'section'  => 'section_most-loved',
        'settings' => 'most-loved_title_setting',
        'type'     => 'text',
    )));

    // Add setting for image 1 upload
    $wp_customize->add_setting('most-loved_image_1_setting', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    // Add control for image 1 upload
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'most-loved_image_1_control', array(
        'label'    => __('Upload an Image', 'lokalise'),
        'section'  => 'section_most-loved',
        'settings' => 'most-loved_image_1_setting',
    )));

    // Add setting for image 2 upload
    $wp_customize->add_setting('most-loved_image_2_setting', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    // Add control for image 2 upload
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'most-loved_image_2_control', array(
        'label'    => __('Upload an Image', 'lokalise'),
        'section'  => 'section_most-loved',
        'settings' => 'most-loved_image_2_setting',
    )));

    // Add setting for image 3 upload
    $wp_customize->add_setting('most-loved_image_3_setting', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    // Add control for image 3 upload
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'most-loved_image_3_control', array(
        'label'    => __('Upload an Image', 'lokalise'),
        'section'  => 'section_most-loved',
        'settings' => 'most-loved_image_3_setting',
    )));

}
add_action('customize_register', 'section_most_loved_customize_register');


