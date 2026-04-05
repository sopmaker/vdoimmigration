<?php
/**
 * Services Overview Page Template
 * Template Name: Services Overview
 *
 * @package VDOImmigration
 */

get_header();
$services = vdoi_get_services();
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1920&h=500&fit=crop&auto=format');">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="page-hero-title">Our Immigration Services</h1>
                <p class="page-hero-subtitle">Comprehensive Solutions for Every Immigration Need</p>
            </div>
        </div>
    </div>
</section>

<?php vdoi_breadcrumb(); ?>

<!-- Services Intro -->
<section class="section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">What We Offer</span>
            <h2 class="section-title">Expert Immigration Services<br>Tailored for You</h2>
            <p class="section-subtitle col-lg-8 mx-auto">Whether you're planning to study, work, settle or visit abroad, VDO Immigration has the expertise and experience to make your immigration journey smooth and successful.</p>
        </div>
        <div class="row g-4 mt-4">
            <?php foreach ( $services as $index => $service ) : ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                <?php vdoi_service_card( $service ); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Our Approach -->
<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-badge">Our Approach</span>
                <h2 class="section-title">How We Ensure<br>Professional Results</h2>
                <p class="section-desc">Every visa application is unique, and so is our approach to it. At VDO Immigration, we follow a structured, client-centric process that ensures each application is thoroughly prepared and professionally presented to the embassy.</p>
                <ul class="approach-list mt-4">
                    <li><i class="fas fa-check-circle me-3 text-primary"></i> Detailed profile assessment and eligibility check</li>
                    <li><i class="fas fa-check-circle me-3 text-primary"></i> Personalised document checklist and collection</li>
                    <li><i class="fas fa-check-circle me-3 text-primary"></i> Professional preparation of all supporting documents</li>
                    <li><i class="fas fa-check-circle me-3 text-primary"></i> Thorough application review before submission</li>
                    <li><i class="fas fa-check-circle me-3 text-primary"></i> Post-submission tracking and communication updates</li>
                    <li><i class="fas fa-check-circle me-3 text-primary"></i> Expert guidance for interview preparation (where required)</li>
                </ul>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=700&h=500&fit=crop&auto=format" alt="Immigration consultation process" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Countries -->
<section class="section-padding bg-dark-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge badge-white">Countries We Cover</span>
            <h2 class="section-title text-white">We Serve All Major<br>Destinations Worldwide</h2>
        </div>
        <?php
        $countries = vdoi_get_countries();
        ?>
        <div class="row g-4 mt-3 justify-content-center">
            <?php foreach ( $countries as $i => $country ) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="<?php echo esc_attr( ( $i % 4 ) * 75 ); ?>">
                <div class="country-card">
                    <div class="country-flag"><?php echo esc_html( $country['flag'] ); ?></div>
                    <h4 class="country-name"><?php echo esc_html( $country['name'] ); ?></h4>
                    <p class="country-desc"><?php echo esc_html( $country['desc'] ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="country-link">Enquire Now <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="cta-bg" style="background-image: url('https://images.unsplash.com/photo-1488085061387-422e29b40080?w=1920&h=500&fit=crop&auto=format');"></div>
    <div class="cta-overlay"></div>
    <div class="container cta-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7" data-aos="zoom-in">
                <h2 class="cta-title">Not Sure Which Service You Need?</h2>
                <p class="cta-subtitle">Talk to our immigration expert for a free consultation. We'll assess your profile and recommend the best pathway for you.</p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary-vdoi btn-lg">
                    <i class="fas fa-comments me-2"></i>Book Free Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
