<?php
/**
 * Generic Service Content (fallback template)
 *
 * @package VDOImmigration
 */
global $current; // passed from calling template
if ( ! isset( $current ) ) {
    $services = vdoi_get_services();
    $current  = $services[0];
}
?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-badge">Professional Service</span>
                <h2 class="section-title"><?php echo esc_html( $current['title'] ); ?> – Expert Assistance</h2>
                <p class="section-desc">At VDO Immigration, we provide comprehensive <?php echo esc_html( strtolower( $current['title'] ) ); ?> assistance with a professional, transparent and results-driven approach. Our experienced team ensures your application is prepared and presented to the highest standard.</p>
                <p class="section-desc">With over 8.5 years of expertise and 2000+ successful applications, we have the knowledge and skills to navigate the complex immigration landscape on your behalf.</p>
                <div class="service-highlights mt-4">
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Free eligibility assessment</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Personalised application strategy</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Complete documentation support</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Professional embassy presentation</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Post-submission tracking & updates</div>
                </div>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary-vdoi mt-4">
                    <i class="fas fa-comments me-2"></i>Get Free Consultation
                </a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="<?php echo esc_url( $current['image'] ); ?>" alt="<?php echo esc_attr( $current['title'] ); ?>" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Our Process</span>
            <h2 class="section-title">How We Process Your Application</h2>
        </div>
        <div class="row g-4 mt-3 justify-content-center">
            <div class="col-md-3 col-sm-6" data-aos="fade-up">
                <div class="process-step">
                    <div class="process-number">01</div>
                    <div class="process-icon"><i class="fas fa-phone-alt"></i></div>
                    <h4>Free Consultation</h4>
                    <p>Assess your profile, eligibility and the best pathway for your situation.</p>
                    <div class="process-connector"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step">
                    <div class="process-number">02</div>
                    <div class="process-icon"><i class="fas fa-folder-open"></i></div>
                    <h4>Document Collection</h4>
                    <p>Personalised checklist and assistance gathering all required documents.</p>
                    <div class="process-connector"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step">
                    <div class="process-number">03</div>
                    <div class="process-icon"><i class="fas fa-file-signature"></i></div>
                    <h4>Application Filing</h4>
                    <p>Professional preparation and submission of your complete visa application.</p>
                    <div class="process-connector"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step">
                    <div class="process-number">04</div>
                    <div class="process-icon"><i class="fas fa-passport"></i></div>
                    <h4>Visa Decision</h4>
                    <p>Application tracked and updates communicated until visa decision.</p>
                </div>
            </div>
        </div>
    </div>
</section>
