<?php

namespace App\Controllers;

class AdminController
{
    /**
     * Display the admin options page.
     */
    public function options(): void
    {
        // Load the view for the admin options page
        require_once plugin_dir_path(__DIR__) . 'Views/admin/options.php';
    }

    /**
     * Save the admin settings.
     */
    public function saveSettings(): void
    {
        // Process and validate the submitted settings

        // Update the plugin options in the database

        // Redirect back to the options page with a success message
        wp_redirect(admin_url('admin.php?page=socialite-options&success=true'));
        exit();
    }

    /**
     * Display the admin settings page.
     */
    public function settings(): void
    {
        // Load the view for the admin settings page
        require_once plugin_dir_path(__DIR__) . 'Views/admin/settings.php';
    }
}
