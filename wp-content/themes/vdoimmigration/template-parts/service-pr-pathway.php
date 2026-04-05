<?php
/**
 * PR Pathway Service Content
 *
 * @package VDOImmigration
 */
?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-badge">Make a New Home</span>
                <h2 class="section-title">PR Pathway –<br>Your Journey to Permanent Residency</h2>
                <p class="section-desc">Permanent Residency (PR) is a life-changing milestone that gives you the right to live and work in a country indefinitely. The path to PR can be complex, but with VDO Immigration's expert guidance, we help you navigate every requirement, point system and pathway to make your dream of settling abroad a reality.</p>
                <p class="section-desc">From profile evaluation and points optimisation to document preparation and lodgement, we provide comprehensive PR pathway support.</p>
                <div class="service-highlights mt-4">
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Eligibility assessment and points calculation</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Express Entry (Canada) guidance</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Australia SkillSelect and points test</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Skills assessment assistance</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> State/Provincial nomination guidance</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Complete document preparation and filing</div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=700&h=500&fit=crop&auto=format" alt="PR Pathway" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">PR Destinations</span>
            <h2 class="section-title">Popular PR Pathway Countries</h2>
        </div>
        <div class="row g-4 mt-3">
            <?php
            $destinations = array(
                array( 'country' => 'Canada', 'flag' => '🇨🇦', 'visa_type' => 'Express Entry / PNP', 'processing' => '6 months – 1 year', 'highlight' => 'Multiple pathways; Express Entry draws held regularly' ),
                array( 'country' => 'Australia', 'flag' => '🇦🇺', 'visa_type' => 'Skilled Independent (189/190)', 'processing' => '6–18 months', 'highlight' => 'Points-based system; multiple state pathways' ),
                array( 'country' => 'UK', 'flag' => '🇬🇧', 'visa_type' => 'Indefinite Leave to Remain', 'processing' => 'After 5 years', 'highlight' => 'Eligible after 5 years on Skilled Worker visa' ),
                array( 'country' => 'Germany', 'flag' => '🇩🇪', 'visa_type' => 'Settlement Permit', 'processing' => 'After 4–5 years', 'highlight' => 'Permanent settlement after Blue Card route' ),
                array( 'country' => 'New Zealand', 'flag' => '🇳🇿', 'visa_type' => 'Skilled Migrant Category', 'processing' => '6–12 months', 'highlight' => 'Points-based; include family members' ),
                array( 'country' => 'Ireland', 'flag' => '🇮🇪', 'visa_type' => 'Stamp 4 / Long-term Residency', 'processing' => 'After 5 years', 'highlight' => 'Gateway to Irish citizenship after 5 years' ),
            );
            foreach ( $destinations as $i => $dest ) :
            ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $i % 3 ) * 100 ); ?>">
                <div class="destination-card">
                    <div class="dest-flag"><?php echo esc_html( $dest['flag'] ); ?></div>
                    <h4><?php echo esc_html( $dest['country'] ); ?></h4>
                    <div class="dest-detail"><strong>Pathway:</strong> <?php echo esc_html( $dest['visa_type'] ); ?></div>
                    <div class="dest-detail"><strong>Timeline:</strong> <?php echo esc_html( $dest['processing'] ); ?></div>
                    <div class="dest-highlight"><i class="fas fa-star me-2 text-accent"></i><?php echo esc_html( $dest['highlight'] ); ?></div>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-primary-vdoi btn-sm mt-3 w-100">Enquire Now</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
