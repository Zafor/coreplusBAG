<?php 

function coreplusbag_scripts()
{
    //style
    
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    // wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css');
   
    //script
   
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');

    // wp_enqueue_script('main-script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'coreplusbag_scripts');




function create_required_theme_pages()
{

    // Set the title, template, etc
    $new_page_title     = __('Front Page', 'coreplusbag'); // Page's title ; Note: Page title Matters
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

    // Set the title, template, etc
    $new_page_title     = __('Our Values', 'coreplusbag'); // Page's title ; Note: Page title Matters
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'our-values.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
        'post_type'     => 'page',
        'post_title'    => $new_page_title,
        'post_content'  => $new_page_content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'our-values' // this is the slug
    );
    // If the page doesn't already exist, create it
    if (!isset($page_check->ID)) {
        $new_page_id = wp_insert_post($new_page);
        if (!empty($new_page_template)) {
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }

    // Set the title, template, etc
    $new_page_title     = __('Brand Assets Guide', 'coreplusbag'); // Page's title ; Note: Page title Matters
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
    $new_page_title     = __('Brand Assets Kit', 'coreplusbag'); // Page's title ; Note: Page title Matters
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'brand-assets-kit.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
        'post_type'     => 'page',
        'post_title'    => $new_page_title,
        'post_content'  => $new_page_content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'brand-assets-kit' // this is the slug
    );
    // If the page doesn't already exist, create it
    if (!isset($page_check->ID)) {
        $new_page_id = wp_insert_post($new_page);
        if (!empty($new_page_template)) {
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }

    // Set the title, template, etc
    $new_page_title     = __('Terms & Conditions', 'coreplusbag'); // Page's title ; Note: Page title Matters
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'terms-conditions.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
        'post_type'     => 'page',
        'post_title'    => $new_page_title,
        'post_content'  => $new_page_content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'terms-conditions' // this is the slug
    );
    // If the page doesn't already exist, create it
    if (!isset($page_check->ID)) {
        $new_page_id = wp_insert_post($new_page);
        if (!empty($new_page_template)) {
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}


add_action('after_switch_theme', 'create_required_theme_pages');