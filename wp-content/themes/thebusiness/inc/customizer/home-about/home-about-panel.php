<?php
global $thebusiness_panels;
global $thebusiness_sections;
global $thebusiness_settings_controls;
global $thebusiness_repeated_settings_controls;
global $thebusiness_customizer_defaults;


/*defaults values*/
$thebusiness_customizer_defaults['thebusiness-home-about-enable']           = 1;
$thebusiness_customizer_defaults['thebusiness-home-about-title']            = esc_html__('About Us','thebusiness');
$thebusiness_customizer_defaults['thebusiness-home-about-sub-title']        = esc_html__('Corporate, A Professional Theme That Specialises In Designing Elegant, Clean And Professional Themes.','thebusiness');
$thebusiness_customizer_defaults['thebusiness-home-about-image']            = get_template_directory_uri().'/assets/img/no-image-about.png';
$thebusiness_customizer_defaults['thebusiness-home-about-single-words']     = 30;
$thebusiness_customizer_defaults['thebusiness-home-about-button-text']      = esc_html__('View More','thebusiness');
$thebusiness_customizer_defaults['thebusiness-home-about-button-link']      = esc_url( home_url( '/about' ) );
$thebusiness_customizer_defaults['thebusiness-home-about-selection']        = 'from-page'; 
$thebusiness_customizer_defaults['thebusiness-home-about-number']           = 3;
$thebusiness_customizer_defaults['thebusiness-home-about-pages']            = 0;

$thebusiness_sections['thebusiness-home-about'] = array(
    'priority'       => 180,
    'title'          => esc_html__( 'Home about Section', 'thebusiness' ),
	);


$thebusiness_settings_controls['thebusiness-home-about-enable'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-about-enable']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Enable About', 'thebusiness' ),
        'section'               => 'thebusiness-home-about',
        'type'                  => 'checkbox',
        'priority'              => 10,
        'active_callback'       => ''
    )
);


$thebusiness_settings_controls['thebusiness-home-about-title'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-about-title']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Main Title', 'thebusiness' ),
        'section'               => 'thebusiness-home-about',
        'type'                  => 'text',
        'priority'              => 20,
        'active_callback'       => ''
    )
);


$thebusiness_settings_controls['thebusiness-home-about-sub-title'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-about-sub-title']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Sub Title', 'thebusiness' ),
        'section'               => 'thebusiness-home-about',
        'type'                  => 'text',
        'priority'              => 22,
        'active_callback'       => ''
    )
);


$thebusiness_settings_controls['thebusiness-home-about-image'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-about-image'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'About section Feature Image', 'thebusiness' ),
        'description'           =>  esc_html__( 'Please upload feature image for about section (recomended size 600*400)', 'thebusiness' ),
        'section'               => 'thebusiness-home-about',
        'type'                  => 'image',
        'priority'              => 23,
    )
);

$thebusiness_settings_controls['thebusiness-home-about-single-words'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-about-single-words']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Number Of Words in Single Column Content', 'thebusiness' ),
        'description'           =>  esc_html__( 'If you do not have selected from - Custom', 'thebusiness' ),
        'section'               => 'thebusiness-home-about',
        'type'                  => 'number',
        'priority'              => 30,
        'input_attrs' => array( 'min' => 1, 'max' => 200),
        'active_callback'       => ''
    )
);

/*creating setting control for thebusiness-home-about-page start*/
$thebusiness_repeated_settings_controls['thebusiness-home-about-pages'] = array(
    'repeated' => 3,
    'thebusiness-home-about-pages-ids' => array(
        'setting' =>     array(
            'default'              => $thebusiness_customizer_defaults['thebusiness-home-about-pages'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Select Page For About %s', 'thebusiness' ),
            'section'               => 'thebusiness-home-about',
            'type'                  => 'dropdown-pages',
            'priority'              => 40,
            'description'           => ''
        )
    ),
);

$thebusiness_settings_controls['thebusiness-home-about-button-link'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-about-button-link']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Browse More Button Link', 'thebusiness' ),
        'section'               => 'thebusiness-home-about',
        'type'                  => 'url',
        'priority'              => 70,
        'active_callback'       => ''
    )
);