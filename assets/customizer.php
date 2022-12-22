<?php

function tpl_landing_wp_customizer( $wp_customize ){

    $wp_customize->add_section(
        'sec_media_background',
        array(
            'title' => 'Personaliza: background da página',
            'description' => 'Configura o background da página landing page'
        )
    );
    $wp_customize->add_setting(
        'set_media_background',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );    
    $wp_customize->add_control( 
        new WP_Customize_Media_Control( $wp_customize, 'set_media_background', 
                                                                        array(
                                                                        'section' => 'sec_media_background',
                                                                        'mime_type' => 'image',
                                                                        ) 
                                    ) 
    );    

}
add_action( 'customize_register', 'tpl_landing_wp_customizer' );    


