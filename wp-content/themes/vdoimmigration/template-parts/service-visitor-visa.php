<?php
/**
 * Visitor Visa Service Content
 *
 * @package VDOImmigration
 */
?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-badge">Visit Abroad Effortlessly</span>
                <h2 class="section-title">Visitor Visa –<br>Your Short-Stay Solution</h2>
                <p class="section-desc">A visitor visa is required for short-term stays abroad for purposes including visiting family and friends, attending business meetings, conferences or other events. At VDO Immigration, we prepare strong visitor visa applications that clearly demonstrate your intent to return home and your ties to your country of residence.</p>
                <p class="section-desc">Many visitor visa rejections are due to insufficient documentation or unclear purpose of visit – issues our experts address comprehensively before submission.</p>
                <div class="service-highlights mt-4">
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Visit friends and family visa</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Business visitor visa</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Medical visitor visa</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Strong tie-to-home documentation</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Invitation letter guidance</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Post-refusal reapplication expertise</div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=700&h=500&fit=crop&auto=format" alt="Visitor Visa" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Visitor Visa Destinations</span>
            <h2 class="section-title">Visitor Visa for Popular Countries</h2>
        </div>
        <div class="row g-4 mt-3">
            <?php
            $destinations = array(
                array( 'country' => 'Canada', 'flag' => '🇨🇦', 'visa_type' => 'Temporary Resident Visa (TRV)', 'processing' => '2–8 weeks', 'highlight' => 'Super visa for parents: up to 5 years' ),
                array( 'country' => 'Australia', 'flag' => '🇦🇺', 'visa_type' => 'Visitor Visa (Subclass 600)', 'processing' => '2–6 weeks', 'highlight' => 'Multiple entry; stay up to 12 months' ),
                array( 'country' => 'UK', 'flag' => '🇬🇧', 'visa_type' => 'Standard Visitor Visa', 'processing' => '3 weeks', 'highlight' => 'Up to 6 months; 10-year multi-entry option' ),
                array( 'country' => 'USA', 'flag' => '🇺🇸', 'visa_type' => 'B-1/B-2 Visitor Visa', 'processing' => '4–12 weeks', 'highlight' => '10-year multiple entry visa possible' ),
                array( 'country' => 'Schengen', 'flag' => '🇪🇺', 'visa_type' => 'Short-Stay Schengen Visa', 'processing' => '2–3 weeks', 'highlight' => 'Covers 26 European countries' ),
                array( 'country' => 'Germany', 'flag' => '🇩🇪', 'visa_type' => 'National / Schengen Visitor Visa', 'processing' => '4–6 weeks', 'highlight' => 'For visiting family or business' ),
            );
            foreach ( $destinations as $i => $dest ) :
            ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $i % 3 ) * 100 ); ?>">
                <div class="destination-card">
                    <div class="dest-flag"><?php echo esc_html( $dest['flag'] ); ?></div>
                    <h4><?php echo esc_html( $dest['country'] ); ?></h4>
                    <div class="dest-detail"><strong>Visa Type:</strong> <?php echo esc_html( $dest['visa_type'] ); ?></div>
                    <div class="dest-detail"><strong>Processing:</strong> <?php echo esc_html( $dest['processing'] ); ?></div>
                    <div class="dest-highlight"><i class="fas fa-star me-2 text-accent"></i><?php echo esc_html( $dest['highlight'] ); ?></div>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-primary-vdoi btn-sm mt-3 w-100">Enquire Now</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
