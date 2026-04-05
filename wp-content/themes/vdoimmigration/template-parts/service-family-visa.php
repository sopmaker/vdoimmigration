<?php
/**
 * Family Visa Service Content
 *
 * @package VDOImmigration
 */
?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-badge">Reunite Your Family</span>
                <h2 class="section-title">Family Visa –<br>Bring Your Loved Ones Together</h2>
                <p class="section-desc">Family visas allow you to sponsor or join family members in another country. Whether you are sponsoring a spouse, parent, child or sibling, VDO Immigration understands the emotional and procedural complexity of family reunification applications.</p>
                <p class="section-desc">Our team ensures that every family visa application reflects the genuine nature of your relationships and meets all financial and documentation requirements set by the respective immigration authorities.</p>
                <div class="service-highlights mt-4">
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Spouse and partner visa applications</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Parent sponsorship visas</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Dependent child visa</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Super visa (parents and grandparents)</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Proof of genuine relationship advisory</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Financial sponsorship documentation</div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1511895426328-dc8714191011?w=700&h=500&fit=crop&auto=format" alt="Family Visa" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Family Visa Destinations</span>
            <h2 class="section-title">Family Visa for Top Countries</h2>
        </div>
        <div class="row g-4 mt-3">
            <?php
            $destinations = array(
                array( 'country' => 'Canada', 'flag' => '🇨🇦', 'visa_type' => 'Family Sponsorship / Super Visa', 'processing' => '12–24 months (sponsorship)', 'highlight' => 'Super visa allows 5-year multiple entry' ),
                array( 'country' => 'Australia', 'flag' => '🇦🇺', 'visa_type' => 'Partner / Parent Visa', 'processing' => '12–30 months', 'highlight' => 'Pathway to permanent residency for partners' ),
                array( 'country' => 'UK', 'flag' => '🇬🇧', 'visa_type' => 'Family Visa / Spouse Route', 'processing' => '8–12 weeks', 'highlight' => 'Route to settlement after 5 years' ),
                array( 'country' => 'USA', 'flag' => '🇺🇸', 'visa_type' => 'Family-Based Immigrant Visa', 'processing' => 'Varies by category', 'highlight' => 'Immediate relatives processed faster' ),
                array( 'country' => 'Germany', 'flag' => '🇩🇪', 'visa_type' => 'Family Reunion Visa', 'processing' => '6–12 weeks', 'highlight' => 'Reunite with spouses and dependent children' ),
                array( 'country' => 'Ireland', 'flag' => '🇮🇪', 'visa_type' => 'Join Family Visa (Type D)', 'processing' => '8–16 weeks', 'highlight' => 'For non-EEA family members of Irish residents' ),
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
