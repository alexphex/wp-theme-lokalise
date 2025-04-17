<?php 

/**
 * Section easy
 */
function easy_customizer_section($wp_customize) {
    // add section
    $wp_customize->add_section('easy_section', array(
        'title'    => __('Section Easy', 'lokalise'),
        'priority' => 116,
    ));

    // title 1
    $wp_customize->add_setting('easy_title_1', array(
        'default'   => 'Default title 1',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('easy_title_1', array(
        'label'   => __('Title 1', 'lokalise'),
        'section' => 'easy_section',
        'type'    => 'text',
    ));

    // title 2
    $wp_customize->add_setting('easy_title_2', array(
        'default'   => 'Default title 2',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('easy_title_2', array(
        'label'   => __('Title 2', 'lokalise'),
        'section' => 'easy_section',
        'type'    => 'text',
    ));

    // subtitle
    $wp_customize->add_setting('easy_subtitle', array(
        'default'   => 'subtitle text',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('easy_subtitle', array(
        'label'   => __('Subtitle', 'lokalise'),
        'section' => 'easy_section',
        'type'    => 'textarea',
    ));

    // btn
    $wp_customize->add_setting('easy_button_text', array(
        'default'   => 'Click Me',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('easy_button_text', array(
        'label'   => __('Button Text', 'lokalise'),
        'section' => 'easy_section',
        'type'    => 'text',
    ));

    // bg btn
    $wp_customize->add_setting('easy_button_color', array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'easy_button_color', array(
        'label'    => __('Button Color', 'lokalise'),
        'section'  => 'easy_section',
        'settings' => 'easy_button_color',
    )));
}
add_action('customize_register', 'easy_customizer_section');