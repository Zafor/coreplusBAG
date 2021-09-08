<?php 

function coreplusbag_scripts()
{
    //style
    
    // wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/plugins/plugins.css');
   
    //script
   
    // wp_enqueue_script('bootstrap-datepicker', get_template_directory_uri() . '/assets/plugins/bs-datepicker/js/bootstrap-datepicker.min.js');

    // wp_enqueue_script('main-script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'coreplusbag_scripts');



add_action('after_switch_theme', 'create_required_theme_pages');

function create_required_theme_pages()
{

    // Set the title, template, etc
    $new_page_title     = __('brand assets guide', 'coreplusbag'); // Page's title ; Note: Page title Matters
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'brand-assets-guide.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
        'post_type'     => 'page',
        'post_title'    => $new_page_title,
        'post_content'  => $new_page_content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'brand-assets-guide' // this is the slug
    );
    // If the page doesn't already exist, create it
    if (!isset($page_check->ID)) {
        $new_page_id = wp_insert_post($new_page);
        if (!empty($new_page_template)) {
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
    // Set the title, template, etc
    $new_page_title     = __('front page', 'coreplusbag'); // Page's title ; Note: Page title Matters
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'front-page.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
        'post_type'     => 'page',
        'post_title'    => $new_page_title,
        'post_content'  => $new_page_content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'front-page' // this is the slug
    );
    // If the page doesn't already exist, create it
    if (!isset($page_check->ID)) {
        $new_page_id = wp_insert_post($new_page);
        if (!empty($new_page_template)) {
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}