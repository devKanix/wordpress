<?php

if (!defined('ABSPATH')) exit;

if (function_exists('acf_add_local_field_group')) {
    add_action('acf/include_fields', 'add_home_page_fields');

    function add_home_page_fields()
    {
        acf_add_local_field_group(array(
            'key' => 'home_page',
            'title' => 'Homepage Section',
            'fields' => array(

                array(
                    'key' => 'tab_hero',
                    'name' => 'tab_hero',
                    'label' => 'Hero',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'tab_Hero_h1',
                    'name' => 'tab_Hero_h1',
                    'label' => 'Hero h1',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_Hero_name',
                    'name' => 'tab_Hero_name',
                    'label' => 'Hero name',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_Hero_img',
                    'name' => 'tab_Hero_img',
                    'label' => 'Hero image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_strip',
                    'name' => 'tab_strip',
                    'label' => 'Strip',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_about',
                    'name' => 'tab_about',
                    'label' => 'About',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'tab_about_img',
                    'name' => 'tab_about_img',
                    'label' => 'About image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_about_p',
                    'name' => 'tab_about_p',
                    'label' => 'About',
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'tab_project',
                    'name' => 'tab_project',
                    'label' => 'Projects',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'tab_project1_img',
                    'name' => 'tab_project1_img',
                    'label' => 'Project 1 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_project1_title',
                    'name' => 'tab_project1_title',
                    'label' => 'Project 1 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_project1_p',
                    'name' => 'tab_project1_p',
                    'label' => 'Project 1 Text',
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'tab_project1_link',
                    'name' => 'tab_project1_link',
                    'label' => 'Project 1 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_project2_img',
                    'name' => 'tab_project2_img',
                    'label' => 'Project 2 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_project2_title',
                    'name' => 'tab_project2_title',
                    'label' => 'Project 2 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_project2_p',
                    'name' => 'tab_project2_p',
                    'label' => 'Project 2 Text',
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'tab_project2_link',
                    'name' => 'tab_project2_link',
                    'label' => 'Project 2 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_project3_img',
                    'name' => 'tab_project3_img',
                    'label' => 'Project 3 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_project3_title',
                    'name' => 'tab_project3_title',
                    'label' => 'Project 3 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_project3_p',
                    'name' => 'tab_project3_p',
                    'label' => 'Project 3 Text',
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'tab_project3_link',
                    'name' => 'tab_project3_link',
                    'label' => 'Project 3 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_project4_img',
                    'name' => 'tab_project4_img',
                    'label' => 'Project 4 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_project4_title',
                    'name' => 'tab_project4_title',
                    'label' => 'Project 4 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_project4_p',
                    'name' => 'tab_project4_p',
                    'label' => 'Project 4 Text',
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'tab_project4_link',
                    'name' => 'tab_project4_link',
                    'label' => 'Project 4 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_experience',
                    'name' => 'tab_experience',
                    'label' => 'Experience',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'tab_experience1_img',
                    'name' => 'tab_experience1_img',
                    'label' => 'Experience 1 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_experience1_title',
                    'name' => 'tab_experience1_title',
                    'label' => 'Experience 1 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_experience1_p',
                    'name' => 'tab_experience1_p',
                    'label' => 'Experience 1 Text',
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'tab_experience1_link',
                    'name' => 'tab_experience1_link',
                    'label' => 'Experience 1 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_experience2_img',
                    'name' => 'tab_experience2_img',
                    'label' => 'Experience 2 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_experience2_title',
                    'name' => 'tab_experience2_title',
                    'label' => 'Experience 2 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_experience2_p',
                    'name' => 'tab_experience2_p',
                    'label' => 'Experience 2 Text',
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'tab_experience2_link',
                    'name' => 'tab_experience2_link',
                    'label' => 'Experience 2 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_experience3_img',
                    'name' => 'tab_experience3_img',
                    'label' => 'Experience 3 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_experience3_title',
                    'name' => 'tab_experience3_title',
                    'label' => 'Experience 3 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_experience3_p',
                    'name' => 'tab_experience3_p',
                    'label' => 'Experience 3 Text',
                    'type' => 'wysiwyg',
                ),
                array(
                    'key' => 'tab_experience3_link',
                    'name' => 'tab_experience3_link',
                    'label' => 'Experience 3 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_media',
                    'name' => 'tab_media',
                    'label' => 'Social Media',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'tab_social1_img',
                    'name' => 'tab_social1_img',
                    'label' => 'Social Media 1 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_social1_title',
                    'name' => 'tab_social1_title',
                    'label' => 'Social Media 1 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_social1_link',
                    'name' => 'tab_social1_link',
                    'label' => 'Social Media 1 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_social2_img',
                    'name' => 'tab_social2_img',
                    'label' => 'Social Media 2 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_social2_title',
                    'name' => 'tab_social2_title',
                    'label' => 'Social Media 2 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_social2_link',
                    'name' => 'tab_social2_link',
                    'label' => 'Social Media 2 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_social3_img',
                    'name' => 'tab_social3_img',
                    'label' => 'Social Media 3 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_social3_title',
                    'name' => 'tab_social3_title',
                    'label' => 'Social Media 3 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_social3_link',
                    'name' => 'tab_social3_link',
                    'label' => 'Social Media 3 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_social4_img',
                    'name' => 'tab_social4_img',
                    'label' => 'Social Media 4 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_social4_title',
                    'name' => 'tab_social4_title',
                    'label' => 'Social Media 4 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_social4_link',
                    'name' => 'tab_social4_link',
                    'label' => 'Social Media 4 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_social5_img',
                    'name' => 'tab_social5_img',
                    'label' => 'Social Media 5 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_social5_title',
                    'name' => 'tab_social5_title',
                    'label' => 'Social Media 5 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_social5_link',
                    'name' => 'tab_social5_link',
                    'label' => 'Social Media 5 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_blog',
                    'name' => 'tab_blog',
                    'label' => 'Blogs',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'tab_blog1_img',
                    'name' => 'tab_blog1_img',
                    'label' => 'Blog 1 image',
                    'type' => 'image',
                ),
                array(
                    'key' => 'tab_blog1_title',
                    'name' => 'tab_blog1_title',
                    'label' => 'Blog 1 Title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'tab_blog1_link',
                    'name' => 'tab_blog1_link',
                    'label' => 'Blog 1 Link',
                    'type' => 'url',
                ),
                array(
                    'key' => 'tab_contact',
                    'name' => 'tab_contact',
                    'label' => 'Contact',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'tab_contact_p',
                    'name' => 'tab_conatact_p',
                    'label' => 'Contact Text',
                    'type' => 'wysiwyg',
                )
            ),
            
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => get_option('page_on_front'),
                    ),
                ),
            ),
            'active' => 1,
            'description' => '',
        ));
    }
}
