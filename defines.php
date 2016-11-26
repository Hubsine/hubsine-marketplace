<?php

define('HM_PLUGIN_NAME', 'Hubsine Marketplace');

###
# Redux OPT NAME
###

define('HM_OPT_NAME', 'hubsine-marketplace');

###
# PLUGIN DIR
###

define('HM_PLUGIN_DIR',            realpath( __DIR__ ) ); 

###
# Racine DIR
###

define('HM_SRC_DIR',               HM_PLUGIN_DIR . '/src');
define('HM_LIB_DIR',               HM_PLUGIN_DIR . '/lib');
define('HM_RESOURCES_DIR',         HM_PLUGIN_DIR . '/resources');

###
# Resources DIR
###

define('HM_VIEWS_DIR',             HM_RESOURCES_DIR . '/views');
define('HM_VIEWS_FORMS_DIR',       HM_VIEWS_DIR     . '/forms');
define('HM_LOCALES_TRANS_DIR',     HM_RESOURCES_DIR . '/translations');
define('HM_CONFIG_DIR',            HM_RESOURCES_DIR . '/config');

###
# Plugin URI 
###

define('HM_PLUGIN_URI', plugins_url('/hubsine-marketplace'));
define('HM_RESOURCES_URI', HM_PLUGIN_URI.'/src/resources');
