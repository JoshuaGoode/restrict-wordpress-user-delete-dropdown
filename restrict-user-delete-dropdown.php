<?php
/**
 * Plugin Name: Restrict User Deletion Dropdown
 * Description: Modifies the user dropdown to include only administrators on the user deletion screen to avoid memory issues.
 * Version: 1.0
 * Author: Joshua Goode, Pressable.com
 * Author URI: pressable.com
 */

// Hook into the 'load-users.php' action.
add_action('load-users.php', function() {
    // Make sure the "action" is "delete".
    if ('delete' !== filter_input(INPUT_GET, 'action')) {
        return;
    }

    // Add filter to modify the wp_dropdown_users arguments.
    add_filter('wp_dropdown_users_args', function($query_args, $r) {
        // Modify the dropdown to show only administrators if it's for reassigning users.
        if ('reassign_user' === $r['name']) {
            $query_args['role'] = 'administrator';
        }
        return $query_args;
    }, 10, 2);
});
