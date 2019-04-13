<?php
global $thebusiness_panels;
global $thebusiness_sections;
global $thebusiness_settings_controls;
global $thebusiness_repeated_settings_controls;
global $thebusiness_customizer_defaults;


$thebusiness_customizer_defaults['thebusiness-home-blog-enable']                = 1;
$thebusiness_customizer_defaults['thebusiness-home-blog-title']                 = esc_html__('FROM OUR BLOG','thebusiness');
$thebusiness_customizer_defaults['thebusiness-home-blog-sub-title']             = esc_html__('Stay update with us','thebusiness');
$thebusiness_customizer_defaults['thebusiness-home-blog-single-words']          = 30;
$thebusiness_customizer_defaults['thebusiness-home-blog-category']              = 0;
$thebusiness_customizer_defaults['thebusiness-home-blog-button-text']           = esc_html__('Browse more','thebusiness');
$thebusiness_customizer_defaults['thebusiness-home-blog-button-link']           = home_url( '/blog' );

$thebusiness_sections['thebusiness-home-blog-panel'] = array(
    'priority'       => 190,
    'title'          => esc_html__( 'Home blog Section', 'thebusiness' ),
	);

$thebusiness_settings_controls['thebusiness-home-blog-enable'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-blog-enable']
    ),
    'control' => array(
        'label'                 => esc_html__( 'Enable Blog', 'thebusiness' ),
        'description'           => esc_html__( 'Enable "Blog Section" on checked' , 'thebusiness' ),
        'section'               => 'thebusiness-home-blog-panel',
        'type'                  => 'checkbox',
        'priority'              => 10,
        'active_callback'       => ''
    )
);


$thebusiness_settings_controls['thebusiness-home-blog-title'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-blog-title']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Main Title', 'thebusiness' ),
        'section'               => 'thebusiness-home-blog-panel',
        'type'                  => 'text',
        'priority'              => 20,
        'active_callback'       => ''
    )
);

$thebusiness_settings_controls['thebusiness-home-blog-sub-title'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-blog-sub-title']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Sub Title', 'thebusiness' ),
        'section'               => 'thebusiness-home-blog-panel',
        'type'                  => 'text',
        'priority'              => 30,
        'active_callback'       => ''
    )
);


/*String in max to be appear as description on blog*/
$thebusiness_settings_controls['thebusiness-home-blog-single-words'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-blog-single-words']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Number Of Words', 'thebusiness' ),
        'description'           =>  esc_html__( 'Give number of words you wish to be appear on home page blog section sticky post/ feature post', 'thebusiness' ),
        'section'               => 'thebusiness-home-blog-panel',
        'type'                  => 'number',
        'priority'              => 40,
        'input_attrs' => array( 'min' => 1, 'max' => 200),
        'active_callback'       => ''
    )
);

/*creating setting control for thebusiness-fs-Category start*/
$thebusiness_settings_controls['thebusiness-home-blog-category'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-blog-category']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Select Category For Blog', 'thebusiness' ),
        'description'           =>  esc_html__( 'Blog will only displayed from this category', 'thebusiness' ),
        'section'               => 'thebusiness-home-blog-panel',
        'type'                  => 'category_dropdown',
        'priority'              => 60,
        'active_callback'       => ''
    )
);


$thebusiness_settings_controls['thebusiness-home-blog-button-text'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-blog-button-text']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Browse All Button Text', 'thebusiness' ),
        'section'               => 'thebusiness-home-blog-panel',
        'type'                  => 'text',
        'priority'              => 70,
        'active_callback'       => ''
    )
);

$thebusiness_settings_controls['thebusiness-home-blog-button-link'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-blog-button-link']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Browse All Button Link', 'thebusiness' ),
        'section'               => 'thebusiness-home-blog-panel',
        'type'                  => 'url',
        'priority'              => 80,
        'active_callback'       => ''
    )
);