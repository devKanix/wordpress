<?php
if (!defined('ABSPATH')) exit;

if (function_exists('acf_add_local_field_group')) {

    add_action('acf/init', 'my_acf_add_global_fields');

    function my_acf_add_global_fields()
    {
        acf_add_local_field_group(array(
            'key' => 'group_global_options',
            'title' => 'Global Options',
            'fields' => array(

                // Global Tab
                array(
                    'key' => 'tab_global',
                    'label' => 'Global',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_address',
                    'label' => 'Address',
                    'name' => 'address',
                    'type' => 'text', // Text input field
                    'required' => 0,
                ),
                array(
                    'key' => 'field_email',
                    'label' => 'Email',
                    'name' => 'email',
                    'type' => 'text', // Text input field
                    'required' => 0,
                ),
                // Header Tab
                array(
                    'key' => 'tab_header',
                    'label' => 'Header',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_header_logo',
                    'label' => 'Logo',
                    'name' => 'header_logo',
                    'type' => 'text', // Image upload field
                    'required' => 0,
                    'return_format' => 'array', // Options: 'array', 'id', 'url'
                    'preview_size' => 'thumbnail', // Preview size for the image
                ),

                // Footer Tab
                array(
                    'key' => 'tab_footer',
                    'label' => 'Footer',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_footer_content',
                    'label' => 'Quote',
                    'name' => 'footer_content',
                    'type' => 'text',
                    'toolbar' => 'full',
                ),
                array(
                    'key' => 'field_copyright_text',
                    'label' => 'Copyright Text',
                    'name' => 'copyright_text',
                    'type' => 'wysiwyg',
                    'required' => 1,
                ),
                // Social Media Tab
                array(
                    'key' => 'tab_media_codes',
                    'label' => 'Social Media',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_global_media_code_group',
                    'label' => 'Social Media',
                    'name' => 'global_media_code',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_global_media_img',
                            'label' => 'logo Image',
                            'name' => 'field_global_media_img',
                            'type' => 'image',
                        ),
                        array(
                            'key' => 'field_global_media_url',
                            'label' => 'Link',
                            'name' => 'field_global_media_url',
                            'type' => 'url',
                        ),
                        array(
                            'key' => 'field_global_media_title',
                            'label' => 'Title',
                            'name' => 'global_media_title',
                            'type' => 'text',
                        ),
                    ),
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'theme-general-options',
                    ),
                ),
            ),
            'active' => 1,
            'description' => '',
        ));
    }
}
