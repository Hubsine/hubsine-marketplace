<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    
    // This is your option name where all the Redux data is stored.
    $opt_name = "hubsine-marketplace";
    $container = HubsineFrameworkPlugin::instance()->getContainer();
    
    $translator = $container->get('translator');
    
    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'hubsine-marketplace',
        'dev_mode' => TRUE,
        'use_cdn' => TRUE,
        'display_name' => 'Hubsine Marketplace',
        'display_version' => '1.0.0',
        'page_title' => 'Hubsine Marketplace option',
        'update_notice' => TRUE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Hubsine Marketplace',
        'allow_sub_menu' => TRUE,
        'page_parent' => 'index.php',
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
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

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'redux-framework-demo' ),
                'desc'     => __( 'Example description.', 'redux-framework-demo' ),
                'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Basic Fields', 'redux-framework-demo' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/text/" target="_blank">http://docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'text-example',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Area', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );
    
//    ###
//    # Templating Section
//    ###
//    Redux::setSection( $opt_name, array(
//        'title'      => $translator->trans('redux.dm-templating.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//        'id'         => 'dm-templating'
//    ) );
//   
//    Redux::setSection( $opt_name, array(
//        'title'      => $translator->trans('redux.dm-forms.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//        'desc'       => $translator->trans('redux.dm-forms.desc', array(), \Util::ADMIN_TRANS_DOMAIN),
//        'id'         => 'dm-forms',
//        'subsection' => true,
//        'fields'     => array(
//            array(
//                'id'       => 'dm-forms-seller-register',
//                'type'     => 'select',
//                'title'    => $translator->trans('redux.dm-forms.fields.dm-forms-seller-register.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'desc'     => $translator->trans('redux.dm-forms.fields.dm-forms-seller-register.desc', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'default'  => 'seller_register_form.html.twig',
//                'options'  => array(
//                    'seller_register_form.html.twig' => 'Horizontal form',
//                    'bootstrap_3_layout.html.twig' => 'Simple forme',
//                    'form_table_layout.html.twig' => 'Table form'
//                )
//            ),
//        )
//    ) );
//    
//    ###
//    # Pages Section
//    ###
//    Redux::setSection( $opt_name, array(
//        'title'      => $translator->trans('redux.dm-pages.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//        'desc'       => $translator->trans('redux.dm-pages.desc', array(), \Util::ADMIN_TRANS_DOMAIN),
//        'id'         => 'dm-pages',
//        'fields'     => array(
//            array(
//                'id'       => 'dm-check-email-page',
//                'type'     => 'select',
//                'title'    => $translator->trans('redux.dm-pages.fields.dm-check-email-page.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'subtitle' => $translator->trans('redux.dm-pages.fields.dm-check-email-page.subtitle', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'desc'     => $translator->trans('redux.dm-pages.fields.dm-check-email-page.desc', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'default'  => '',
//                'data'     => 'pages'
//            ),
//        )
//    ) );
//    
//    ###
//    # Mailer Section - General
//    ###
//    Redux::setSection( $opt_name, array(
//        'title'      => $translator->trans('redux.dm-mailer.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//        'desc'       => $translator->trans('redux.dm-mailer.desc', array(), \Util::ADMIN_TRANS_DOMAIN),
//        'id'         => 'dm-mailer',
//        #'subsection' => false,
//        'fields'     => array(
//            array(
//                'id'       => 'dm-mailer-from-email',
//                'type'     => 'text',
//                'title'    => $translator->trans('redux.dm-mailer.fields.dm-mailer-from-email.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'desc'     => $translator->trans('redux.dm-mailer.fields.dm-mailer-from-email.desc', array(), \Util::ADMIN_TRANS_DOMAIN)
//            ),
//            array(
//                'id'       => 'dm-mailer-from-name',
//                'type'     => 'text',
//                'title'    => $translator->trans('redux.dm-mailer.fields.dm-mailer-from-name.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'subtitle' => $translator->trans('redux.dm-mailer.fields.dm-mailer-from-name.subtitle', array(), \Util::ADMIN_TRANS_DOMAIN)
//            )
//        )
//    ) );
//    
//    ###
//    # Mailer Section - Transport
//    ###
//    Redux::setSection( $opt_name, array(
//        'title'      => $translator->trans('redux.dm-swiftmailer.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//        'desc'       => $translator->trans('redux.dm-swiftmailer.desc', array(), \Util::ADMIN_TRANS_DOMAIN),
//        'id'         => 'dm-swiftmailer-transport',
//        'subsection' => true,
//        'fields'     => array(
//            array(
//                'id'       => 'dm-mailer-transport',
//                'type'     => 'select',
//                'title'    => $translator->trans('redux.dm-swiftmailer.fields.dm-mailer-transport.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'subtitle' => $translator->trans('redux.dm-swiftmailer.fields.dm-mailer-transport.subtitle', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'desc'     => $translator->trans('redux.dm-swiftmailer.fields.dm-mailer-transport.desc', array(), \Util::ADMIN_TRANS_DOMAIN), 
//                'default'  => 'mail',
//                'options'  => array(
//                    'mail'      => $translator->trans('redux.dm-swiftmailer.fields.dm-mailer-transport.options.mail', array(), \Util::ADMIN_TRANS_DOMAIN),
//                    'smtp'      => $translator->trans('redux.dm-swiftmailer.fields.dm-mailer-transport.options.smtp', array(), \Util::ADMIN_TRANS_DOMAIN),
//                    'sendmail'  => $translator->trans('redux.dm-swiftmailer.fields.dm-mailer-transport.options.sendmail', array(), \Util::ADMIN_TRANS_DOMAIN)
//                )
//            ),
//            ###
//            # SMTP Sub options
//            ###
//            array(
//                'id'       => 'dm-smtp-smtp',
//                'type'     => 'text',
//                'title'    => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-smtp.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'desc'     => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-smtp.desc', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'required' => array('dm-mailer-transport', 'equals', 'smtp')
//            ),
//            array(
//                'id'       => 'dm-smtp-security',
//                'type'     => 'select',
//                'title'    => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-security.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'desc'     => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-security.desc', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'required' => array('dm-mailer-transport', 'equals', 'smtp'),
//                'options'  => array(
//                    'ssl'   => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-security.options.ssl', array(), \Util::ADMIN_TRANS_DOMAIN),
//                    'tls'   => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-security.options.tls', array(), \Util::ADMIN_TRANS_DOMAIN)
//                ) 
//            ),
//            array(
//                'id'       => 'dm-smtp-port',
//                'type'     => 'text',
//                'title'    => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-port.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'subtitle' => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-port.subtitle', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'required' => array('dm-mailer-transport', 'equals', 'smtp')
//            ),
//            array(
//                'id'       => 'dm-smtp-username',
//                'type'     => 'text',
//                'title'    => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-username.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'required' => array('dm-mailer-transport', 'equals', 'smtp')
//            ),
//            array(
//                'id'       => 'dm-smtp-password',
//                'type'     => 'password',
//                'title'    => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-password.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'required' => array('dm-mailer-transport', 'equals', 'smtp')
//            ),
//            ###
//            # Sendmail Sub Options
//            ###
//            array(
//                'id'       => 'dm-sendmail-command',
//                'type'     => 'text',
//                'title'    => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-command.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'subtitle' => $translator->trans('redux.dm-swiftmailer.fields.dm-smtp-command.subtitle', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'default'  => '/usr/sbin/exim -bs',
//                'required' => array('dm-mailer-transport', 'equals', 'sendmail')
//            ),
//            ###
//            # dm-mailer-transport test send mail
//            ###
//            array (
//                'id'            => 'dm-test-mailer-transport',
//                'type'          => 'raw',
//                'title'         => $translator->trans('redux.dm-swiftmailer.fields.dm-test-mailer-transport.title', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'subtitle'      => $translator->trans('redux.dm-swiftmailer.fields.dm-test-mailer-transport.subtitle', array(), \Util::ADMIN_TRANS_DOMAIN),
//                'content_path'  => DM_RESOURCES_DIR . '/includes/dm-test-mailer-transport.php'
//            )
//        )
//    ) );
    
    /*
     * <--- END SECTIONS
     */

    