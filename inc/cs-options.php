<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = "cs";

    $theme = wp_get_theme();
    $args = array(
        'opt_name'             => $opt_name,
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,

        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'dev_mode'             => false,
        'admin_bar_priority'   => 60,
        'page_icon'            => 'icon-themes',
        'menu_icon'            => '',
        'page_priority'        => 60,
        
        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-portfolio',
        'global_variable'      => '',
        'update_notice'        => true,
        'customizer'           => true,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'last_tab'             => '',
        'page_slug'            => '_options',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => true,
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'database'             => '',
        'use_cdn'              => true,

        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );


    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    // Logo Upload
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Image Upload', 'redux-framework-demo' ),
        'id'               => 'logo',
        'icon'             => 'el el-picture',
        'fields'           => array(
            array(
                'id'       => 'favicon_img',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Favicon Upload', 'redux-framework-demo'),
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/img/marketing8.png',
                ),
            ),
            array(
                'id'       => 'background_img',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Background Upload', 'redux-framework-demo'),
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/img/1.jpg',
                ),
            )
        )
    ) );

    // Header

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Heading Text', 'redux-framework-demo' ),
        'id'               => 'heading',
        'icon'             => 'el el-align-left',
        'fields'           => array(
            array(
                'id'       => 'header_text',
                'type'     => 'ace_editor',
                'title'    => __('Header Text', 'redux-framework-demo'),
                'subtitle' => __('For Rotate Latter wrape the latter like this (class="planet left" or class="planet right").', 'redux-framework-demo'),
                'mode'     => 'html',
                'theme'    => 'monokai',
                'default'  => '<em>C</em>
<em class="planet left">O</em>
<em>m</em>
<em>i</em>
<em>n</em>
<em>g</em>
<span class="space"></span>
<em>S</em>
<em class="planet right">O</em>
<em>o</em>
<em>n...</em>'
            ),
            array(
                'id'        => 'sub_heading_text',
                'type'      => 'text',
                'title'     => __( 'Sub Heading Text', 'redux-framework-demo' ),
                'default'   => 'you are invited our team'
            )
        )
    ) );

    // Date

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Launch Time', 'redux-framework-demo' ),
        'id'               => 'lunch',
        'icon'             => 'el el-calendar',
        'fields'           => array(
            array(
                'id'          => 'lunch-date',
                'type'        => 'date',
                'title'       => __('Launch Date', 'redux-framework-demo'), 
                'placeholder' => 'Click to enter a date'
            )
        ),
    ) );


    // social

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Social Logo', 'redux-framework-demo' ),
        'id'               => 'social',
        'icon'             => 'el el-thumbs-up',
        'fields'           => array(
            array(
                'id'          => 'contact_social',
                'type'        => 'slides',
                'title'       => __('Social Links', 'redux-framework-demo'),
                'subtitle'       => __('You can get social icon name from <a href="http://fontawesome.io/icons/" target="_blank">here</a>', 'redux-framework-demo'),
                'placeholder' => array(
                    'title'           => __('Icon Name (fa-pinterest)', 'redux-framework-demo'),
                    'url'           => __('URL', 'redux-framework-demo'),
                ),
                'show' => array(
                    'title' => true,
                    'url' => true,
                ),
            ),
        )
    ) );

