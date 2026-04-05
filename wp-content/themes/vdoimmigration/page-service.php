<?php
/**
 * Individual Service Page Template
 * Template Name: Service Page
 *
 * Used as the base template for all individual service pages.
 * Override with page-study-visa.php, page-tourist-visa.php, etc.
 *
 * @package VDOImmigration
 */

get_header();

// Determine which service this page is based on slug/title
$page_slug = basename( get_permalink() );
$services  = vdoi_get_services();
$current   = null;

foreach ( $services as $service ) {
    if ( $service['slug'] === $page_slug || strpos( strtolower( get_the_title() ), strtolower( str_replace( '-', ' ', $service['slug'] ) ) ) !== false ) {
        $current = $service;
        break;
    }
}

if ( ! $current ) {
    $current = $services[0]; // fallback
}

$hero_color = $current['color'];
?>

<!-- Page Hero -->
<section class="page-hero service-hero" style="background-image: url('<?php echo esc_url( $current['image'] ); ?>');">
    <div class="page-hero-overlay" style="background: linear-gradient(135deg, <?php echo esc_attr( $hero_color ); ?>dd 0%, <?php echo esc_attr( $hero_color ); ?>99 100%);"></div>
    <div class="container page-hero-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="service-hero-icon">
                    <i class="<?php echo esc_attr( $current['icon'] ); ?>"></i>
                </div>
                <h1 class="page-hero-title"><?php echo esc_html( $current['title'] ); ?></h1>
                <p class="page-hero-subtitle"><?php echo esc_html( $current['short_desc'] ); ?></p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary-vdoi btn-lg mt-3">
                    <i class="fas fa-comments me-2"></i>Get Free Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<?php vdoi_breadcrumb(); ?>

<!-- Dynamic content based on service type -->
<?php
switch ( $current['slug'] ) {
    case 'study-visa':
        get_template_part( 'template-parts/service', 'study-visa' );
        break;
    case 'tourist-visa':
        get_template_part( 'template-parts/service', 'tourist-visa' );
        break;
    case 'work-visa':
        get_template_part( 'template-parts/service', 'work-visa' );
        break;
    case 'pr-pathway':
        get_template_part( 'template-parts/service', 'pr-pathway' );
        break;
    case 'family-visa':
        get_template_part( 'template-parts/service', 'family-visa' );
        break;
    case 'visitor-visa':
        get_template_part( 'template-parts/service', 'visitor-visa' );
        break;
    default:
        // Generic service content
        get_template_part( 'template-parts/service', 'generic' );
        break;
}
?>

<!-- Contact CTA -->
<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="section-title">Ready to Apply for Your <?php echo esc_html( $current['title'] ); ?>?</h2>
                <p class="section-desc">Our immigration experts are ready to guide you through every step of the process. Get a free consultation today.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary-vdoi btn-lg">
                        <i class="fas fa-paper-plane me-2"></i>Apply Now
                    </a>
                    <a href="tel:+919876543210" class="btn btn-outline-primary-vdoi btn-lg">
                        <i class="fas fa-phone-alt me-2"></i>Call Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Other Services -->
<section class="section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Explore More</span>
            <h2 class="section-title">Other Immigration Services</h2>
        </div>
        <div class="row g-4 mt-3">
            <?php foreach ( $services as $index => $service ) :
                if ( $service['slug'] === $current['slug'] ) continue;
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                <?php vdoi_service_card( $service ); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
