<?php
/**
 * Work Visa Service Content
 *
 * @package VDOImmigration
 */
?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-badge">Global Career Opportunities</span>
                <h2 class="section-title">Work Visa –<br>Build Your Career Globally</h2>
                <p class="section-desc">A work visa is the key to unlocking international career opportunities. Whether you have a specific job offer or are exploring skilled worker pathways, VDO Immigration provides end-to-end work visa assistance tailored to your career goals and the requirements of your target country.</p>
                <p class="section-desc">Our experts navigate complex immigration regulations to ensure your work visa application is strategically prepared and professionally submitted.</p>
                <div class="service-highlights mt-4">
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Employer-sponsored and open work permits</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Skilled worker visa guidance</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> LMIA and job offer documentation</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Intra-company transfer visas</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Work-to-PR pathway advice</div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=700&h=500&fit=crop&auto=format" alt="Work Visa" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Work Destinations</span>
            <h2 class="section-title">Work Visa for Top Countries</h2>
        </div>
        <div class="row g-4 mt-3">
            <?php
            $destinations = array(
                array( 'country' => 'Canada', 'flag' => '🇨🇦', 'visa_type' => 'Open / LMIA Work Permit', 'processing' => '4–12 weeks', 'highlight' => 'Multiple pathways to PR through work' ),
                array( 'country' => 'Australia', 'flag' => '🇦🇺', 'visa_type' => 'Temporary Skill Shortage (482)', 'processing' => '6–16 weeks', 'highlight' => 'Pathway to permanent residency available' ),
                array( 'country' => 'UK', 'flag' => '🇬🇧', 'visa_type' => 'Skilled Worker Visa', 'processing' => '3–8 weeks', 'highlight' => 'Settlement eligibility after 5 years' ),
                array( 'country' => 'Germany', 'flag' => '🇩🇪', 'visa_type' => 'EU Blue Card / Job Seeker', 'processing' => '6–12 weeks', 'highlight' => 'Fast-track PR for skilled workers' ),
                array( 'country' => 'USA', 'flag' => '🇺🇸', 'visa_type' => 'H-1B / L-1 Visa', 'processing' => '3–6 months', 'highlight' => 'Specialty occupation and transfer visas' ),
                array( 'country' => 'New Zealand', 'flag' => '🇳🇿', 'visa_type' => 'Accredited Employer Work Visa', 'processing' => '5–8 weeks', 'highlight' => 'Direct pathway to skilled migrant PR' ),
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
