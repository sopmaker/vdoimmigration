<?php
/**
 * Tourist Visa Service Content
 *
 * @package VDOImmigration
 */
?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-badge">Travel the World</span>
                <h2 class="section-title">Tourist Visa –<br>Explore Without Limits</h2>
                <p class="section-desc">A tourist visa allows you to visit another country for leisure, sightseeing or visiting friends and family. At VDO Immigration, we ensure your tourist visa application is complete, accurate and compelling – giving you the best chance of approval.</p>
                <p class="section-desc">Our team prepares all necessary documentation including itinerary, financial proof and cover letters, so your application presents a clear, credible picture to the embassy.</p>
                <div class="service-highlights mt-4">
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Single & multiple-entry tourist visa</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Itinerary and travel plan preparation</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Financial documentation advisory</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Refusal analysis and reapplication</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Schengen, North America & more</div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=700&h=500&fit=crop&auto=format" alt="Tourist Visa" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Popular Destinations</span>
            <h2 class="section-title">Tourist Visa for Top Destinations</h2>
        </div>
        <div class="row g-4 mt-3">
            <?php
            $destinations = array(
                array( 'country' => 'Schengen Europe', 'flag' => '🇪🇺', 'visa_type' => 'Schengen Visa (Type C)', 'processing' => '2–4 weeks', 'highlight' => 'Visit 26 European countries with one visa' ),
                array( 'country' => 'Canada',           'flag' => '🇨🇦', 'visa_type' => 'Temporary Resident Visa', 'processing' => '4–8 weeks', 'highlight' => 'Single or multiple entry options' ),
                array( 'country' => 'Australia',        'flag' => '🇦🇺', 'visa_type' => 'Visitor Visa (600)',  'processing' => '2–6 weeks', 'highlight' => 'Valid up to 12 months, multiple entry' ),
                array( 'country' => 'USA',              'flag' => '🇺🇸', 'visa_type' => 'B-2 Tourist Visa',  'processing' => '4–12 weeks', 'highlight' => '10-year multiple-entry visa possible' ),
                array( 'country' => 'UK',               'flag' => '🇬🇧', 'visa_type' => 'Standard Visitor Visa', 'processing' => '3 weeks', 'highlight' => 'Up to 6 months stay per visit' ),
                array( 'country' => 'New Zealand',      'flag' => '🇳🇿', 'visa_type' => 'Visitor Visa',       'processing' => '3–4 weeks', 'highlight' => 'Up to 9 months, with extensions' ),
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
