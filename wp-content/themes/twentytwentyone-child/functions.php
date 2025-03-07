<?php
function remove_parent_theme_styles() {
    wp_dequeue_style('twenty-twenty-one-style'); // Remove Parent Theme's style.css
    wp_deregister_style('twenty-twenty-one-style');
}
add_action('wp_enqueue_scripts', 'remove_parent_theme_styles', 20);

function enqueue_child_theme_styles() {
    wp_enqueue_style('child-import-style', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');


function enqueue_custom_scripts() {
    wp_enqueue_script(
        'custom-script', 
        get_stylesheet_directory_uri() . '/js/script.js', 
        array('jquery'), 
        null, 
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


// Disable Block Editor (Gutenberg)
add_filter('use_block_editor_for_post', '__return_false', 10);

// Include Custom Meta Fields
require_once __DIR__ . '/meta-fields/index.php';

function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Global Options',
        'menu_title' => 'Global Options',
        'menu_slug' => 'theme-general-options',
        'capability' => 'manage_options',
        'position' => '80', // Position below the ACF menu
        'icon_url' => 'dashicons-admin-generic', // Dashicon for the menu
    ));
}

function handle_contact_form() {
    global $wpdb;

    // Sanitize inputs
    $email = isset($_POST['user_email']) ? sanitize_email($_POST['user_email']) : '';
    $message = isset($_POST['message']) ? sanitize_text_field($_POST['message']) : '';

    if (!is_email($email) || empty($message)) {
        echo "Invalid email or empty message!";
        wp_die();
    }

    // Insert into the database (assuming a table `wp_contact_messages` exists)
    $table_name = $wpdb->prefix . "contact_messages"; // Auto handle table prefix
    $wpdb->insert($table_name, ['email' => $email, 'message' => $message]);

    echo "✅ Message submitted successfully!";
    wp_die(); // Required for AJAX responses
}

// Hook AJAX handlers for logged-in and non-logged-in users
add_action('wp_ajax_submit_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_submit_contact_form', 'handle_contact_form');
