<?php
/**
 * VDO Immigration – WordPress Setup & Page Creator
 *
 * Run this file once after activating the theme to create all required pages
 * and configure WordPress settings.
 *
 * Access via: yoursite.com/wp-content/themes/vdoimmigration/setup.php
 *
 * IMPORTANT: Delete or restrict this file after running it.
 *
 * @package VDOImmigration
 */

// Only allow admins to run this
define( 'ABSPATH', dirname( dirname( dirname( dirname( __DIR__ ) ) ) ) . '/' );
require_once dirname( dirname( dirname( dirname( __DIR__ ) ) ) ) . '/wp-load.php';

if ( ! current_user_can( 'manage_options' ) ) {
    wp_die( 'You do not have permission to run this setup.' );
}

$pages = array(
    array(
        'title'    => 'Home',
        'slug'     => 'home',
        'template' => '',  // Uses front-page.php
        'content'  => '',
        'is_home'  => true,
    ),
    array(
        'title'    => 'About Us',
        'slug'     => 'about',
        'template' => 'page-about.php',
        'content'  => '',
    ),
    array(
        'title'    => 'About Founder',
        'slug'     => 'about-founder',
        'template' => 'page-founder.php',
        'content'  => '',
    ),
    array(
        'title'    => 'Contact Us',
        'slug'     => 'contact',
        'template' => 'page-contact.php',
        'content'  => '',
    ),
    array(
        'title'    => 'Our Services',
        'slug'     => 'services',
        'template' => 'page-services.php',
        'content'  => '',
    ),
    array(
        'title'    => 'Study Visa',
        'slug'     => 'study-visa',
        'parent'   => 'services',
        'template' => 'page-study-visa.php',
        'content'  => '',
    ),
    array(
        'title'    => 'Tourist Visa',
        'slug'     => 'tourist-visa',
        'parent'   => 'services',
        'template' => 'page-tourist-visa.php',
        'content'  => '',
    ),
    array(
        'title'    => 'Work Visa',
        'slug'     => 'work-visa',
        'parent'   => 'services',
        'template' => 'page-work-visa.php',
        'content'  => '',
    ),
    array(
        'title'    => 'PR Pathway',
        'slug'     => 'pr-pathway',
        'parent'   => 'services',
        'template' => 'page-pr-pathway.php',
        'content'  => '',
    ),
    array(
        'title'    => 'Family Visa',
        'slug'     => 'family-visa',
        'parent'   => 'services',
        'template' => 'page-family-visa.php',
        'content'  => '',
    ),
    array(
        'title'    => 'Visitor Visa',
        'slug'     => 'visitor-visa',
        'parent'   => 'services',
        'template' => 'page-visitor-visa.php',
        'content'  => '',
    ),
    array(
        'title'    => 'Privacy Policy',
        'slug'     => 'privacy-policy',
        'template' => '',
        'content'  => 'Our privacy policy details coming soon.',
    ),
    array(
        'title'    => 'Terms & Conditions',
        'slug'     => 'terms-conditions',
        'template' => '',
        'content'  => 'Our terms and conditions details coming soon.',
    ),
);

$created = array();
$page_ids = array();

foreach ( $pages as $page_data ) {
    // Check if page exists
    $existing = get_page_by_path( $page_data['slug'] );

    if ( $existing ) {
        $page_ids[ $page_data['slug'] ] = $existing->ID;
        if ( ! empty( $page_data['template'] ) ) {
            update_post_meta( $existing->ID, '_wp_page_template', $page_data['template'] );
        }
        $created[] = 'EXISTS: ' . $page_data['title'];
        continue;
    }

    $parent_id = 0;
    if ( ! empty( $page_data['parent'] ) && isset( $page_ids[ $page_data['parent'] ] ) ) {
        $parent_id = $page_ids[ $page_data['parent'] ];
    }

    $args = array(
        'post_title'   => $page_data['title'],
        'post_name'    => $page_data['slug'],
        'post_content' => $page_data['content'],
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_parent'  => $parent_id,
    );

    $page_id = wp_insert_post( $args );

    if ( $page_id && ! empty( $page_data['template'] ) ) {
        update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
    }

    $page_ids[ $page_data['slug'] ] = $page_id;
    $created[] = 'CREATED: ' . $page_data['title'] . ' (ID: ' . $page_id . ')';
}

// Set home page
if ( isset( $page_ids['home'] ) ) {
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $page_ids['home'] );
    $created[] = 'SET: Home page configured';
}

// Create primary menu
$menu_name      = 'Primary Menu';
$existing_menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
$menu_exists    = false;

foreach ( $existing_menus as $menu ) {
    if ( $menu->name === $menu_name ) {
        $menu_exists = true;
        $menu_id     = $menu->term_id;
        break;
    }
}

if ( ! $menu_exists ) {
    $menu_id  = wp_create_nav_menu( $menu_name );
    $nav_items = array(
        array( 'title' => 'Home',         'slug' => 'home',         'order' => 1 ),
        array( 'title' => 'About Us',     'slug' => 'about',        'order' => 2 ),
        array( 'title' => 'Our Services', 'slug' => 'services',     'order' => 3 ),
        array( 'title' => 'Our Founder',  'slug' => 'about-founder','order' => 4 ),
        array( 'title' => 'Contact',      'slug' => 'contact',      'order' => 5 ),
    );

    foreach ( $nav_items as $nav_item ) {
        if ( isset( $page_ids[ $nav_item['slug'] ] ) ) {
            wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'     => $nav_item['title'],
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $page_ids[ $nav_item['slug'] ],
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
                'menu-item-position'  => $nav_item['order'],
            ) );
        }
    }

    // Service sub-items
    $services_menu_item_id = null;
    foreach ( wp_get_nav_menu_items( $menu_id ) as $item ) {
        if ( $item->title === 'Our Services' ) {
            $services_menu_item_id = $item->ID;
            break;
        }
    }

    $service_pages = array( 'study-visa', 'tourist-visa', 'work-visa', 'pr-pathway', 'family-visa', 'visitor-visa' );
    $service_titles = array( 'Study Visa', 'Tourist Visa', 'Work Visa', 'PR Pathway', 'Family Visa', 'Visitor Visa' );
    $pos = 1;
    foreach ( $service_pages as $k => $sp ) {
        if ( isset( $page_ids[ $sp ] ) ) {
            wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'     => $service_titles[ $k ],
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $page_ids[ $sp ],
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
                'menu-item-parent-id' => $services_menu_item_id,
                'menu-item-position'  => $pos++,
            ) );
        }
    }

    $created[] = 'CREATED: Navigation menu';
}

// Assign menu to location
$locations = get_theme_mod( 'nav_menu_locations' );
$locations['primary'] = $menu_id;
set_theme_mod( 'nav_menu_locations', $locations );

echo '<h1>VDO Immigration – Setup Complete</h1>';
echo '<ul>';
foreach ( $created as $item ) {
    echo '<li>' . esc_html( $item ) . '</li>';
}
echo '</ul>';
echo '<p><strong>Setup complete! Please delete this file from your server immediately for security.</strong></p>';
echo '<p><a href="' . esc_url( home_url( '/' ) ) . '">Visit the website &rarr;</a></p>';
