<?php
global $thebusiness_panels;
global $thebusiness_sections;
global $thebusiness_settings_controls;
global $thebusiness_repeated_settings_controls;
global $thebusiness_customizer_defaults;

/*defaults values feature portfolio options*/
$thebusiness_customizer_defaults['thebusiness-feature-slider-enable']           = 1;
$thebusiness_customizer_defaults['thebusiness-featured-slider-pages']           = 0;
$thebusiness_customizer_defaults['thebusiness-fs-single-words']                 = 30;
$thebusiness_customizer_defaults['thebusiness-fs-enable-arrow']                 = 1;
$thebusiness_customizer_defaults['thebusiness-fs-enable-button']                = 1;
$thebusiness_customizer_defaults['thebusiness-fs-button-text']                  = esc_html__('View More','thebusiness');
$thebusiness_customizer_defaults['thebusiness-slider-enable-blog']              = 1;

/*creating panel for fonts-setting*/

$thebusiness_sections['thebusiness-featured-slider'] = array(
    'priority'       => 150,
    'title'          => esc_html__( 'Home Main Slider', 'thebusiness' ),
);


/*Feature section enable control*/
$thebusiness_settings_controls['thebusiness-feature-slider-enable'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-feature-slider-enable']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Enable Feature Slider', 'thebusiness' ),
        'section'               => 'thebusiness-featured-slider',
        'description'           => esc_html__( 'Enable "Feature slider" on checked' , 'thebusiness' ),
        'type'                  => 'checkbox',
        'priority'              => 10,
        'active_callback'       => ''
    )
);



/*creating setting control for thebusiness-fs-page start*/
$thebusiness_repeated_settings_controls['thebusiness-featured-slider-pages'] = array(
    'repeated' => 3,
    'thebusiness-fs-pages-ids' => array(
        'setting' =>     array(
            'default'              => $thebusiness_customizer_defaults['thebusiness-featured-slider-pages'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Select Page For Slide %s', 'thebusiness' ),
            'section'               => 'thebusiness-featured-slider',
            'type'                  => 'dropdown-pages',
            'priority'              => 60,
            'description'           => ''
        )
    ),
);


$thebusiness_settings_controls['thebusiness-fs-single-words'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-fs-single-words']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Single Slider- Number Of Words', 'thebusiness' ),
        'description'           =>  esc_html__( 'If you do not have selected from - Custom', 'thebusiness' ),
        'section'               => 'thebusiness-featured-slider',
        'type'                  => 'number',
        'priority'              => 5,
        'active_callback'       => '',
        'input_attrs' => array( 'min' => 1, 'max' => 200),
    )
);

$thebusiness_settings_controls['thebusiness-fs-enable-arrow'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-fs-enable-arrow']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Enable Arrow', 'thebusiness' ),
        'section'               => 'thebusiness-featured-slider',
        'type'                  => 'checkbox',
        'priority'              => 50,
        'active_callback'       => ''
    )
);

$thebusiness_settings_controls['thebusiness-fs-enable-button'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-fs-enable-button']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Enable Button', 'thebusiness' ),
        'section'               => 'thebusiness-featured-slider',
        'type'                  => 'checkbox',
        'priority'              => 85,
        'active_callback'       => ''
    )
);

/*for blog option */
$thebusiness_settings_controls['thebusiness-slider-enable-blog'] = array(
    'setting' => array(
        'default'          =>  $thebusiness_customizer_defaults['thebusiness-slider-enable-blog']  
    ),
    'control' => array(
        'label'             => esc_html__('Disable Slider on Blog Archive','thebusiness'),
        'section'           => 'thebusiness-featured-slider',
        'type'              => 'checkbox',
        'priority'          => 95,
        'acticve_callback'  => ''

    )       
);
