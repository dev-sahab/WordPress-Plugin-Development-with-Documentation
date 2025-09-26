<?php 

/*
 * Plugin Name:       Simple One
 * Plugin URI:        https://sahabuddin.me/plugins/simple-one
 * Description:       This is a simple WordPress plugin example.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sahab uddin
 * Author URI:        https://sahabuddin.me
 * License:           GPL v2 or later
 * Text Domain:       simple-one
 */

// Prevent direct access to the file
if(!defined('ABSPATH')){
    exit;
}
 // or 
defined('ABSPATH') or exit;

register_activation_hook(__FILE__, 'activation_hook');
register_deactivation_hook(__FILE__, 'deactivation_hook');
register_uninstall_hook(__FILE__, 'uninstall_hook');


function activation_hook(){
    // Actions to perform on plugin activation
    // e.g., create custom database tables, set default options, etc.

    // For demonstration, we'll just create a custom option
    update_option('simple-data', 'true');
}

function deactivation_hook(){
    // Actions to perform on plugin deactivation
    // e.g., clean up resources, remove temporary data, etc.

    // For demonstration, we'll just update the custom option
    update_option('simple-data', 'false');
}

function uninstall_hook(){
    // Actions to perform on plugin uninstallation
    // e.g., remove custom database tables, delete options, etc.

    // For demonstration, we'll just delete the custom option
    if(get_option('simple-data')){
        delete_option('simple-data');
    }
}
