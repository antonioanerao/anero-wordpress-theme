<?php
// Add Panel.
$wp_customize->add_panel( 'homepage_sections',
    array(
        'title'      => __( 'Blog Page Sections', 'anero' ),
        'priority'   => 100,
        'capability' => 'edit_theme_options',
    )
);

// Featured Posts Section
$wp_customize->add_section('section_featured_posts', array(
    'title'       => __('Featured', 'anero'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('featured_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('featured_posts_section_show', array(
        'label' 	=> __('Show Section', 'anero'),
        'section' 	=> 'section_featured_posts',
        'type' 		=> 'checkbox',
    )
);

// Category
$wp_customize->add_setting('featured_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'featured_posts_category',
        array(
            'label'         => __( 'Select Category', 'anero' ),
            'section'       => 'section_featured_posts',
            'settings'  	=> 'featured_posts_category',
        )
    )
);

// Second Posts Section
$wp_customize->add_section('section_second_posts', array(
    'title'       => __('Second', 'anero'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('second_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('second_posts_section_show', array(
        'label' 	=> __('Show Section', 'anero'),
        'section' 	=> 'section_second_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'second_section_title', array(
    'default'           => esc_html__('Second', 'anero'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'second_section_title', array(
    'label'       => __( 'Title', 'anero' ),
    'section'     => 'section_second_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('second_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'second_posts_category',
        array(
            'label'         => __( 'Select Category', 'anero' ),
            'section'       => 'section_second_posts',
            'settings'  	=> 'second_posts_category',
        )
    )
);

// Third Posts Section
$wp_customize->add_section('section_third_posts', array(
    'title'       => __('Third', 'anero'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('third_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('third_posts_section_show', array(
        'label' 	=> __('Show Section', 'anero'),
        'section' 	=> 'section_third_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'third_section_title', array(
    'default'           => esc_html__('Third', 'anero'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'third_section_title', array(
    'label'       => __( 'Title', 'anero' ),
    'section'     => 'section_third_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('third_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'third_posts_category',
        array(
            'label'         => __( 'Select Category', 'anero' ),
            'section'       => 'section_third_posts',
            'settings'  	=> 'third_posts_category',
        )
    )
);

// First Advertisement Section
$wp_customize->add_section('section_first_advertisement', array(
    'title'       => __('First Advertisement', 'anero'),
    'panel'       => 'homepage_sections'
));

// Show First Advertisement
$wp_customize->add_setting('first_advertisement_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('first_advertisement_section_show', array(
        'label' 	=> __('Show Section', 'anero'),
        'section' 	=> 'section_first_advertisement',
        'type' 		=> 'checkbox',
    )
);

// First Advertisement Image
$wp_customize->add_setting('first_advertisement_image', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_image',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'first_advertisement',
        array(
            'label' 	=> __('Image Size: 900 x 60', 'anero'),
            'settings'  => 'first_advertisement_image',
            'section' 	=> 'section_first_advertisement',
        )
    )
);

// First Advertisement Url
$wp_customize->add_setting( 'first_advertisement_url', array(
    'default' 			=> '#',
    'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( 'first_advertisement_url', array(
    'label'             => esc_html__( 'Advertisement Url', 'anero' ),
    'section'           => 'section_first_advertisement',
    'type'              => 'url',
) );

// Fourth Posts Section
$wp_customize->add_section('section_fourth_posts', array(
    'title'       => __('Fourth', 'anero'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('fourth_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('fourth_posts_section_show', array(
        'label' 	=> __('Show Section', 'anero'),
        'section' 	=> 'section_fourth_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'fourth_section_title', array(
    'default'           => esc_html__('Fourth', 'anero'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'fourth_section_title', array(
    'label'       => __( 'Title', 'anero' ),
    'section'     => 'section_fourth_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('fourth_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'fourth_posts_category',
        array(
            'label'         => __( 'Select Category', 'anero' ),
            'section'       => 'section_fourth_posts',
            'settings'  	=> 'fourth_posts_category',
        )
    )
);

// Fifth Posts Section
$wp_customize->add_section('section_fifth_posts', array(
    'title'       => __('Fifth', 'anero'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('fifth_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('fifth_posts_section_show', array(
        'label' 	=> __('Show Section', 'anero'),
        'section' 	=> 'section_fifth_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'fifth_section_title', array(
    'default'           => esc_html__('Fifth', 'anero'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'fifth_section_title', array(
    'label'       => __( 'Title', 'anero' ),
    'section'     => 'section_fifth_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('fifth_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'fifth_posts_category',
        array(
            'label'         => __( 'Select Category', 'anero' ),
            'section'       => 'section_fifth_posts',
            'settings'  	=> 'fifth_posts_category',
        )
    )
);

// Sixth Posts Section
$wp_customize->add_section('section_sixth_posts', array(
    'title'       => __('Sixth', 'anero'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('sixth_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('sixth_posts_section_show', array(
        'label' 	=> __('Show Section', 'anero'),
        'section' 	=> 'section_sixth_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'sixth_section_title', array(
    'default'           => esc_html__('Sixth', 'anero'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'sixth_section_title', array(
    'label'       => __( 'Title', 'anero' ),
    'section'     => 'section_sixth_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('sixth_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'sixth_posts_category',
        array(
            'label'         => __( 'Select Category', 'anero' ),
            'section'       => 'section_sixth_posts',
            'settings'  	=> 'sixth_posts_category',
        )
    )
);