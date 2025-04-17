<?php 

/**
 * Section integrate
 */
function integrate_customizer_section($wp_customize) {
    // add section
    $wp_customize->add_section('integrate_section', array(
        'title'    => __('Section Integrate', 'lokalise'),
        'priority' => 115,
    ));

    // title
    $wp_customize->add_setting('integrate_title', array(
        'default'   => 'Default title',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('integrate_title', array(
        'label'   => __('Title', 'lokalise'),
        'section' => 'integrate_section',
        'type'    => 'text',
    ));

    // subtitle
    $wp_customize->add_setting('integrate_subtitle', array(
        'default'   => 'subtitle text',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('integrate_subtitle', array(
        'label'   => __('Subtitle', 'lokalise'),
        'section' => 'integrate_section',
        'type'    => 'textarea',
    ));

    // image
    $wp_customize->add_setting('integrate_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'integrate_image', array(
        'label'    => __('Image', 'lokalise'),
        'section'  => 'integrate_section',
        'settings' => 'integrate_image',
    )));

    // btn
    $wp_customize->add_setting('integrate_button_text', array(
        'default'   => 'Click Me',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('integrate_button_text', array(
        'label'   => __('Button Text', 'lokalise'),
        'section' => 'integrate_section',
        'type'    => 'text',
    ));

    // bg btn
    $wp_customize->add_setting('integrate_button_color', array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'integrate_button_color', array(
        'label'    => __('Button Color', 'lokalise'),
        'section'  => 'integrate_section',
        'settings' => 'integrate_button_color',
    )));
}
add_action('customize_register', 'integrate_customizer_section');