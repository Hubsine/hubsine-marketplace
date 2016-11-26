<?php

/* 
 * Plugin Name: Hubsine Marketplace
 * Plugin URI: http://hubsinemarketplace.com
 * Description: Plugin market place pour woocommerce
 * Version: 0.1
 * Author: Hubsine
 * Author URI: https://hubsine.com   
 * Licence: GPL2
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}
require_once __DIR__ . '/defines.php';
require_once __DIR__ . '/functions.php';

###
# Check required active plugin
##

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// Check if Hubsine Framework plugin is active 
if (!is_plugin_active('hubsine-framework/hubsine-framework.php')) {
    add_action('admin_notices', 'hf_required_hf_plugin_admin_notice');
}

// Check if Woocommerce plugin is active
if (!is_plugin_active('woocommerce/woocommerce.php')) {
    add_action('admin_notices', 'hf_required_wc_plugin_admin_notice');
}

###
# Include Hubsine Framework
###

include_once(__DIR__ . '/../'  . 'hubsine-framework/hubsine-framework.php');

###
# ClassLoader and Namespace
###

global $hfClassLoader;

$hfClassLoader->addPsr4('Hubsine\\Marketplace\\', __DIR__ . '/src', true);
$hfClassLoader->register();

###
# Redux and TGM plugin file
###

require_once __DIR__ . '/lib/redux/admin/admin-init.php';

