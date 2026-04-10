<?php
/**
 * VDO Immigration Theme Functions
 *
 * @package VDOImmigration
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'VDOI_VERSION', '1.1.0' );
define( 'VDOI_DIR', get_template_directory() );
define( 'VDOI_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function vdoi_setup() {
    load_theme_textdomain( 'vdoimmigration', VDOI_DIR . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'vdoimmigration' ),
        'footer'  => esc_html__( 'Footer Menu', 'vdoimmigration' ),
    ) );

    add_image_size( 'vdoi-hero', 1920, 900, true );
    add_image_size( 'vdoi-service', 600, 400, true );
    add_image_size( 'vdoi-thumb', 400, 300, true );
}
add_action( 'after_setup_theme', 'vdoi_setup' );

/**
 * Enqueue scripts and styles
 */
function vdoi_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'vdoi-google-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Cormorant+Garamond:wght@600;700&display=swap',
        array(),
        null
    );

    // Bootstrap 5
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );

    // Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0' );

    // Swiper CSS
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );

    // AOS CSS
    wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.4/dist/aos.css', array(), '2.3.4' );

    // Main theme stylesheet
    wp_enqueue_style( 'vdoi-main', VDOI_URI . '/assets/css/main.css', array( 'bootstrap' ), VDOI_VERSION );

    // Bootstrap 5 JS
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true );

    // Swiper JS
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );

    // CountUp JS
    wp_enqueue_script( 'countup', 'https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.8.0/countUp.umd.js', array(), '2.8.0', true );

    // AOS JS
    wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.4/dist/aos.js', array(), '2.3.4', true );

    // Main theme JS
    wp_enqueue_script( 'vdoi-main', VDOI_URI . '/assets/js/main.js', array( 'swiper', 'countup', 'aos' ), VDOI_VERSION, true );

    // Pass data to JS
    wp_localize_script( 'vdoi-main', 'vdoiData', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'vdoi_contact_nonce' ),
        'siteUrl' => get_site_url(),
    ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'vdoi_scripts' );

/**
 * Register widget areas
 */
function vdoi_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'vdoimmigration' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'vdoimmigration' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Col 1', 'vdoimmigration' ),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'vdoi_widgets_init' );

/**
 * Register lead post type for enquiry backup.
 */
function vdoi_register_lead_post_type() {
    register_post_type( 'vdoi_lead', array(
        'labels' => array(
            'name'          => esc_html__( 'Lead Enquiries', 'vdoimmigration' ),
            'singular_name' => esc_html__( 'Lead Enquiry', 'vdoimmigration' ),
        ),
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 26,
        'menu_icon'          => 'dashicons-email-alt2',
        'supports'           => array( 'title', 'editor', 'custom-fields' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'exclude_from_search'=> true,
        'show_in_nav_menus'  => false,
    ) );
}
add_action( 'init', 'vdoi_register_lead_post_type' );

/**
 * AJAX Contact Form Handler
 */
function vdoi_handle_contact_form() {
    check_ajax_referer( 'vdoi_contact_nonce', 'nonce' );

    $name        = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
    $email       = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
    $phone       = sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) );
    $service     = sanitize_text_field( wp_unslash( $_POST['service'] ?? '' ) );
    $country     = sanitize_text_field( wp_unslash( $_POST['country'] ?? '' ) );
    $message     = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

    if ( empty( $name ) || empty( $email ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => esc_html__( 'Please fill in all required fields.', 'vdoimmigration' ) ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => esc_html__( 'Please enter a valid email address.', 'vdoimmigration' ) ) );
    }

    $admin_email   = get_option( 'admin_email' );
    $site_domain   = wp_parse_url( home_url(), PHP_URL_HOST );
    $from_email    = $site_domain ? 'no-reply@' . preg_replace( '/^www\./', '', $site_domain ) : $admin_email;
    $subject       = sprintf( '[VDO Immigration] New Enquiry from %s', $name );
    $received_time = current_time( 'mysql' );

    $body  = "New immigration enquiry received:\n\n";
    $body .= "Received At: {$received_time}\n";
    $body .= "Name: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Phone: {$phone}\n";
    $body .= "Service Required: {$service}\n";
    $body .= "Target Country: {$country}\n";
    $body .= "Message:\n{$message}\n";

    $lead_post_id = wp_insert_post( array(
        'post_type'    => 'vdoi_lead',
        'post_status'  => 'publish',
        'post_title'   => sprintf( '%s - %s', $name, $service ? $service : esc_html__( 'General Enquiry', 'vdoimmigration' ) ),
        'post_content' => $body,
    ) );

    if ( $lead_post_id && ! is_wp_error( $lead_post_id ) ) {
        update_post_meta( $lead_post_id, '_vdoi_lead_name', $name );
        update_post_meta( $lead_post_id, '_vdoi_lead_email', $email );
        update_post_meta( $lead_post_id, '_vdoi_lead_phone', $phone );
        update_post_meta( $lead_post_id, '_vdoi_lead_service', $service );
        update_post_meta( $lead_post_id, '_vdoi_lead_country', $country );
        update_post_meta( $lead_post_id, '_vdoi_lead_message', $message );
    }

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . sanitize_text_field( get_bloginfo( 'name' ) ) . ' <' . sanitize_email( $from_email ) . '>',
        "Reply-To: {$name} <{$email}>",
    );

    $sent = wp_mail( $admin_email, $subject, $body, $headers );

    if ( $sent && $lead_post_id && ! is_wp_error( $lead_post_id ) ) {
        wp_send_json_success( array( 'message' => esc_html__( 'Thank you! Your enquiry has been received. We will contact you shortly.', 'vdoimmigration' ) ) );
    } elseif ( $lead_post_id && ! is_wp_error( $lead_post_id ) ) {
        wp_send_json_success( array( 'message' => esc_html__( 'Thanks! Your enquiry is safely recorded. Our team will call you shortly.', 'vdoimmigration' ) ) );
    } else {
        wp_send_json_error( array( 'message' => esc_html__( 'Something went wrong. Please try again or call us directly.', 'vdoimmigration' ) ) );
    }
}
add_action( 'wp_ajax_vdoi_contact', 'vdoi_handle_contact_form' );
add_action( 'wp_ajax_nopriv_vdoi_contact', 'vdoi_handle_contact_form' );

/**
 * Custom excerpt length
 */
function vdoi_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'vdoi_excerpt_length', 999 );

/**
 * Custom excerpt more
 */
function vdoi_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'vdoi_excerpt_more' );

/**
 * Helper: Service data
 */
function vdoi_get_services() {
    return array(
        array(
            'slug'        => 'study-visa',
            'title'       => 'Study Visa',
            'icon'        => 'fas fa-graduation-cap',
            'short_desc'  => 'Pursue your academic dreams abroad with our expert study visa assistance for top universities worldwide.',
            'image'       => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=600&h=400&fit=crop',
            'color'       => '#1B4F8A',
        ),
        array(
            'slug'        => 'tourist-visa',
            'title'       => 'Tourist Visa',
            'icon'        => 'fas fa-plane-departure',
            'short_desc'  => 'Explore the world without hassle. Our team ensures a smooth tourist visa application process.',
            'image'       => 'https://images.unsplash.com/photo-1488085061387-422e29b40080?w=600&h=400&fit=crop',
            'color'       => '#2E8B57',
        ),
        array(
            'slug'        => 'work-visa',
            'title'       => 'Work Visa',
            'icon'        => 'fas fa-briefcase',
            'short_desc'  => 'Build your career globally with our comprehensive work visa processing and documentation support.',
            'image'       => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=600&h=400&fit=crop',
            'color'       => '#8B2252',
        ),
        array(
            'slug'        => 'pr-pathway',
            'title'       => 'PR Pathway',
            'icon'        => 'fas fa-home',
            'short_desc'  => 'Begin your journey to permanent residency with our end-to-end PR pathway guidance and support.',
            'image'       => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=400&fit=crop',
            'color'       => '#D4AF37',
        ),
        array(
            'slug'        => 'family-visa',
            'title'       => 'Family Visa',
            'icon'        => 'fas fa-users',
            'short_desc'  => 'Reunite with your loved ones abroad. We handle family sponsorship and dependent visa applications.',
            'image'       => 'https://images.unsplash.com/photo-1511895426328-dc8714191011?w=600&h=400&fit=crop',
            'color'       => '#FF6B35',
        ),
        array(
            'slug'        => 'visitor-visa',
            'title'       => 'Visitor Visa',
            'icon'        => 'fas fa-passport',
            'short_desc'  => 'Visit family, attend events or business meetings abroad with our hassle-free visitor visa service.',
            'image'       => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&h=400&fit=crop',
            'color'       => '#6A5ACD',
        ),
    );
}

/**
 * Helper: Countries data
 */
function vdoi_get_countries() {
    return array(
        array( 'name' => 'Canada',        'flag' => '🇨🇦', 'desc' => 'Express Entry, Study, Work & PR' ),
        array( 'name' => 'Australia',     'flag' => '🇦🇺', 'desc' => 'Skilled Migration, Student & Visitor' ),
        array( 'name' => 'United States', 'flag' => '🇺🇸', 'desc' => 'F1, B1/B2, Work & Investor Visas' ),
        array( 'name' => 'United Kingdom','flag' => '🇬🇧', 'desc' => 'Student Route, Skilled Worker & Visit' ),
        array( 'name' => 'Germany',       'flag' => '🇩🇪', 'desc' => 'Student, Job Seeker & Work Visa' ),
        array( 'name' => 'New Zealand',   'flag' => '🇳🇿', 'desc' => 'Skilled Migrant & Student Visa' ),
        array( 'name' => 'Ireland',       'flag' => '🇮🇪', 'desc' => 'Student, Work & Join Family Visa' ),
        array( 'name' => 'Schengen',      'flag' => '🇪🇺', 'desc' => 'Europe Tourist & Business Visa' ),
    );
}

/**
 * Include required files
 */
require_once VDOI_DIR . '/inc/template-tags.php';
