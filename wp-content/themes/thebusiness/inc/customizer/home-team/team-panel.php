<?php
global $thebusiness_panels;
global $thebusiness_sections;
global $thebusiness_settings_controls;
global $thebusiness_repeated_settings_controls;
global $thebusiness_customizer_defaults;

/*defaults values feature portfolio options*/
$thebusiness_customizer_defaults['thebusiness-home-team-enable']                = 1;
$thebusiness_customizer_defaults['thebusiness-home-team-title']                 = esc_html__('Our Teams','thebusiness');
$thebusiness_customizer_defaults['thebusiness-home-team-button-text']           = esc_html__('Browse more','thebusiness');
$thebusiness_customizer_defaults['thebusiness-home-team-button-link']           = esc_url( home_url( '/teams' ) );
$thebusiness_customizer_defaults['thebusiness-home-team-pages']                 = 0;

/*creating panel for fonts-setting*/

$thebusiness_sections['thebusiness-home-team'] = array(
    'title'          => esc_html__( 'Home Team Section', 'thebusiness' ),
    'priority'       => 185
	);


$thebusiness_settings_controls['thebusiness-home-team-enable'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-team-enable']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Enable Team', 'thebusiness' ),
        'section'               => 'thebusiness-home-team',
        'type'                  => 'checkbox',
        'priority'              => 10,
        'active_callback'       => ''
    )
);


$thebusiness_settings_controls['thebusiness-home-team-title'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-team-title']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Main Title', 'thebusiness' ),
        'section'               => 'thebusiness-home-team',
        'type'                  => 'text',
        'priority'              => 15,
        'active_callback'       => ''
    )
);
    
$thebusiness_settings_controls['thebusiness-home-team-button-link'] = array(
    'setting' =>     array(
        'default'              => $thebusiness_customizer_defaults['thebusiness-home-team-button-link']
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Browse All Button Link', 'thebusiness' ),
        'section'               => 'thebusiness-home-team',
        'type'                  => 'url',
        'priority'              => 70,
        'active_callback'       => ''
    )
);

/*creating setting control for thebusiness-home-team-page start*/
$thebusiness_repeated_settings_controls['thebusiness-home-team-pages'] = array(
    'repeated' => 4,
    'thebusiness-home-team-pages-ids' => array(
        'setting' =>     array(
            'default'              => $thebusiness_customizer_defaults['thebusiness-home-team-pages'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Select Page For Team %s', 'thebusiness' ),
            'section'               => 'thebusiness-home-team',
            'type'                  => 'dropdown-pages',
            'priority'              => 60,
            'description'           => ''
        )
    ),
);