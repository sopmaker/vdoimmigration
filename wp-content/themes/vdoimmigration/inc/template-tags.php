<?php
/**
 * Template tags and helper functions
 *
 * @package VDOImmigration
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render the contact form HTML
 */
function vdoi_contact_form( $show_heading = true ) {
    $services = array(
        'Study Visa',
        'Tourist Visa',
        'Work Visa',
        'PR Pathway',
        'Family Visa',
        'Visitor Visa',
        'Other',
    );
    $countries = array(
        'Canada', 'Australia', 'United States', 'United Kingdom', 'Germany',
        'New Zealand', 'Ireland', 'Schengen / Europe', 'Other',
    );
    ?>
    <div class="vdoi-contact-form-wrap">
        <?php if ( $show_heading ) : ?>
        <h3 class="form-heading"><?php esc_html_e( 'Get a Free Consultation', 'vdoimmigration' ); ?></h3>
        <p class="form-subheading"><?php esc_html_e( 'Fill in the details below and our expert will reach out to you within 24 hours.', 'vdoimmigration' ); ?></p>
        <?php endif; ?>

        <form id="vdoi-contact-form" class="vdoi-form" novalidate>
            <?php wp_nonce_field( 'vdoi_contact_nonce', 'vdoi_nonce_field' ); ?>
            <input type="hidden" name="action" value="vdoi_contact">
            <input type="hidden" name="nonce" value="<?php echo esc_attr( wp_create_nonce( 'vdoi_contact_nonce' ) ); ?>">

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="vdoi_name"><?php esc_html_e( 'Full Name *', 'vdoimmigration' ); ?></label>
                    <input type="text" id="vdoi_name" name="name" class="form-control" placeholder="<?php esc_attr_e( 'Your Full Name', 'vdoimmigration' ); ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="vdoi_email"><?php esc_html_e( 'Email Address *', 'vdoimmigration' ); ?></label>
                    <input type="email" id="vdoi_email" name="email" class="form-control" placeholder="<?php esc_attr_e( 'your@email.com', 'vdoimmigration' ); ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="vdoi_phone"><?php esc_html_e( 'Phone / WhatsApp *', 'vdoimmigration' ); ?></label>
                    <input type="tel" id="vdoi_phone" name="phone" class="form-control" placeholder="<?php esc_attr_e( '+91 XXXXX XXXXX', 'vdoimmigration' ); ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="vdoi_service"><?php esc_html_e( 'Service Required', 'vdoimmigration' ); ?></label>
                    <select id="vdoi_service" name="service" class="form-select">
                        <option value=""><?php esc_html_e( '-- Select a Service --', 'vdoimmigration' ); ?></option>
                        <?php foreach ( $services as $service ) : ?>
                        <option value="<?php echo esc_attr( $service ); ?>"><?php echo esc_html( $service ); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="vdoi_country"><?php esc_html_e( 'Target Country', 'vdoimmigration' ); ?></label>
                    <select id="vdoi_country" name="country" class="form-select">
                        <option value=""><?php esc_html_e( '-- Select Country --', 'vdoimmigration' ); ?></option>
                        <?php foreach ( $countries as $country ) : ?>
                        <option value="<?php echo esc_attr( $country ); ?>"><?php echo esc_html( $country ); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="vdoi_message"><?php esc_html_e( 'Message (Optional)', 'vdoimmigration' ); ?></label>
                    <textarea id="vdoi_message" name="message" class="form-control" rows="1" placeholder="<?php esc_attr_e( 'Tell us about your requirements...', 'vdoimmigration' ); ?>"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary-vdoi w-100">
                        <span class="btn-text"><i class="fas fa-paper-plane me-2"></i><?php esc_html_e( 'Send My Enquiry', 'vdoimmigration' ); ?></span>
                        <span class="btn-loading d-none"><i class="fas fa-spinner fa-spin me-2"></i><?php esc_html_e( 'Sending...', 'vdoimmigration' ); ?></span>
                    </button>
                </div>
                <div class="col-12 form-message mt-2" style="display:none;"></div>
            </div>
        </form>
    </div>
    <?php
}

/**
 * Render service card HTML
 */
function vdoi_service_card( $service, $show_link = true ) {
    $page_link = $show_link ? home_url( '/services/' . $service['slug'] . '/' ) : '#';
    ?>
    <div class="service-card h-100" data-aos="fade-up">
        <div class="service-card-image">
            <img src="<?php echo esc_url( $service['image'] ); ?>" alt="<?php echo esc_attr( $service['title'] ); ?>" loading="lazy">
            <div class="service-card-overlay" style="background: linear-gradient(135deg, <?php echo esc_attr( $service['color'] ); ?>cc, <?php echo esc_attr( $service['color'] ); ?>88);"></div>
            <div class="service-card-icon">
                <i class="<?php echo esc_attr( $service['icon'] ); ?>"></i>
            </div>
        </div>
        <div class="service-card-body">
            <h3 class="service-card-title"><?php echo esc_html( $service['title'] ); ?></h3>
            <p class="service-card-desc"><?php echo esc_html( $service['short_desc'] ); ?></p>
            <?php if ( $show_link ) : ?>
            <a href="<?php echo esc_url( $page_link ); ?>" class="service-card-link">
                <?php esc_html_e( 'Learn More', 'vdoimmigration' ); ?> <i class="fas fa-arrow-right ms-1"></i>
            </a>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

/**
 * Breadcrumb
 */
function vdoi_breadcrumb() {
    if ( is_front_page() ) return;
    ?>
    <nav class="vdoi-breadcrumb" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-home"></i> Home</a></li>
                <?php
                if ( is_page() ) {
                    global $post;
                    if ( $post->post_parent ) {
                        $parent = get_post( $post->post_parent );
                        echo '<li class="breadcrumb-item"><a href="' . esc_url( get_permalink( $parent ) ) . '">' . esc_html( $parent->post_title ) . '</a></li>';
                    }
                    echo '<li class="breadcrumb-item active" aria-current="page">' . esc_html( get_the_title() ) . '</li>';
                } elseif ( is_single() ) {
                    echo '<li class="breadcrumb-item active" aria-current="page">' . esc_html( get_the_title() ) . '</li>';
                } elseif ( is_archive() ) {
                    echo '<li class="breadcrumb-item active" aria-current="page">' . esc_html( get_the_archive_title() ) . '</li>';
                }
                ?>
            </ol>
        </div>
    </nav>
    <?php
}
