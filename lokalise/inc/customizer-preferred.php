<?php 

/**
 * Section Preferred
 */
function section_preferred_customize_register($wp_customize){
    //Add section
    $wp_customize->add_section('section_preferred', array(
        'title'    => __('Section Preferred', 'lokalise'),
        'priority' => 110,
    ));

    //Add title for section Preferred
    $wp_customize->add_setting('preferred_title_setting', array( 
        'default'   => 'Default title',
        'transport' => 'refresh',
    ));

    // // Add a control for the Title field
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'preferred_title_control', array(
        'label'    => __('Preferred Title', 'lokalise'),
        'section'  => 'section_preferred',
        'settings' => 'preferred_title_setting',
        'type'     => 'text',
    )));

    // preferred images
    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting("preferred_image_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "preferred_image_$i", array(
            'label' => __("Image $i", 'lokalise'),
            'section' => 'section_preferred',
            'settings' => "preferred_image_$i",
        )));
    }

}
add_action('customize_register', 'section_preferred_customize_register');