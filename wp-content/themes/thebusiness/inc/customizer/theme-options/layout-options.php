<?php
global $thebusiness_sections;
global $thebusiness_settings_controls;
global $thebusiness_repeated_settings_controls;
global $thebusiness_customizer_defaults;

/*defaults values*/
$thebusiness_customizer_defaults['thebusiness-enable-static-page']              = 0;

$thebusiness_customizer_defaults['thebusiness-default-layout']                  = 'right-sidebar';
$thebusiness_customizer_defaults['thebusiness-number-of-words']                 = 30;
$thebusiness_customizer_defaults['thebusiness-single-post-image-align']         = 'full';
$thebusiness_customizer_defaults['thebusiness-single-post-image']               = '';



$thebusiness_sections['thebusiness-layout-options'] = array(
    'priority'       => 20,
    'title'          => esc_html__( 'Layout Options', 'thebusiness' ),
    'panel'          => 'thebusiness-theme-options',
);


/*home page static page display*/
$thebusiness_settings_controls['thebusiness-enable-static-page'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-enable-static-page'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Enable Static Front Page', 'thebusiness' ),
        'description'           =>  esc_html__( 'If you disable this the static page will be disappera form the home page and other section from customizer will reamin as it is', 'thebusiness' ),
        'section'               => 'thebusiness-layout-options',
        'type'                  => 'checkbox',
        'priority'              => 10,
    )
);
    
/*layout-options option responsive lodader start*/
$thebusiness_settings_controls['thebusiness-default-layout'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-default-layout'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Default Layout', 'thebusiness' ),
        'description'           =>  esc_html__( 'Layout for all archives, single posts and pages', 'thebusiness' ),
        'section'               => 'thebusiness-layout-options',
        'type'                  => 'select',
        'choices' => array(
            'right-sidebar'     => esc_html__( 'Content - Primary Sidebar', 'thebusiness' ),
            'left-sidebar'      => esc_html__( 'Primary Sidebar - Content', 'thebusiness' ),
            'no-sidebar'        => esc_html__( 'No Sidebar', 'thebusiness' )
        ),
        'priority'              => 30,
        'active_callback'       => ''
    )
);


$thebusiness_settings_controls['thebusiness-number-of-words'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-number-of-words']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Number Of Words For Excerpt', 'thebusiness' ),
        'description'           =>  esc_html__( 'This will controll the excerpt length on listing page', 'thebusiness' ),
        'section'               => 'thebusiness-layout-options',
        'type'                  => 'number',
        'input_attrs' => array( 'min' => 1, 'max' => 200),
        'priority'              => 40,
        'active_callback'       => ''
    )
);


$thebusiness_settings_controls['thebusiness-single-post-image-align'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-single-post-image-align'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Alignment Of Image In Single Post/Page', 'thebusiness' ),
        'description'           =>  esc_html__( 'Please note that this setting can be override from individual post/page', 'thebusiness' ),
        'section'               => 'thebusiness-layout-options',
        'type'                  => 'select',
        'choices' => array(
            'full'      => esc_html__( 'Full', 'thebusiness' ),
            'right'     => esc_html__( 'Right', 'thebusiness' ),
            'left'      => esc_html__( 'Left', 'thebusiness' ),
            'no-image'  => esc_html__( 'No image', 'thebusiness' )
        ),
        'priority'              => 50,
    )
);