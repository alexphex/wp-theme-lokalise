<?php 
/**
 * Footer Customizer
 */
function lokalize_footer_customize_register($wp_customize) {
    // Add section
    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer Settings', 'lokalise'),
        'priority' => 120,
    ));

    // Add a setting for the first text field
    $wp_customize->add_setting('footer_text_setting_1', array(
        'default'   => 'Default text',
        'transport' => 'refresh',
    ));

    // Add a setting for the second text field
    $wp_customize->add_setting('footer_text_setting_2', array(
        'default'   => 'Default text',
        'transport' => 'refresh',
    ));

    // Add a control for the first text field
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_text_control_1', array(
        'label'    => __('Footer Text 1', 'lokalise'),
        'section'  => 'footer_section',
        'settings' => 'footer_text_setting_1',
        'type'     => 'text',
    )));

    // Add a control for the second text field
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_text_control_2', array(
        'label'    => __('Footer Text 2', 'lokalise'),
        'section'  => 'footer_section',
        'settings' => 'footer_text_setting_2',
        'type'     => 'text',
    )));
}

add_action('customize_register', 'lokalize_footer_customize_register');