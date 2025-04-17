<?php 
/**
 * Header Customizer
 */
function lokalise_header_customize_register($wp_customize) {
    // Title
    $wp_customize->add_setting('header_title', array(
        'default'   => 'Default title',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('header_title', array(
        'label'    => 'Title',
        'section'  => 'title_tagline',
        'type'     => 'text'
    ));

    // Тext
    $wp_customize->add_setting('header_text', array(
        'default'   => 'Default text',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('header_text', array(
        'label'    => 'Text',
        'section'  => 'title_tagline',
        'type'     => 'textarea'
    ));

    // Buttons text & URL (Link for buttons)
    $buttons = array('header_button_1', 'header_button_2');
    foreach ($buttons as $button) {
        $wp_customize->add_setting($button, array(
            'default'   => 'Button text',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control($button, array(
            'label'    => 'Text ' . str_replace('_', ' ', $button),
            'section'  => 'title_tagline',
            'type'     => 'text'
        ));

        $wp_customize->add_setting($button . '_url', array(
            'default'   => '#',
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control($button . '_url', array(
            'label'    => 'URL ' . str_replace('_', ' ', $button),
            'section'  => 'title_tagline',
            'type'     => 'url'
        ));
    }

    // Notice
    $wp_customize->add_setting('header_notice', array(
        'default'   => 'Notice text',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('header_notice', array(
        'label'    => 'Notice text',
        'section'  => 'title_tagline',
        'type'     => 'textarea'
    ));
}

add_action('customize_register', 'lokalise_header_customize_register');

