<?php
/**
 * 404 Template
 *
 * @package VDOImmigration
 */

get_header();
?>

<section class="page-hero page-hero-simple">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="page-hero-title">404 – Page Not Found</h1>
            </div>
        </div>
    </div>
</section>

<section class="section-padding text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="error-404-icon mb-4">
                    <i class="fas fa-map-marked-alt" style="font-size:5rem; color: var(--color-primary);"></i>
                </div>
                <h2>Oops! This page seems to have gone overseas.</h2>
                <p class="text-muted mt-3">The page you are looking for does not exist or has been moved. Let's get you back on the right path.</p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary-vdoi btn-lg mt-4">
                    <i class="fas fa-home me-2"></i>Back to Home
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
