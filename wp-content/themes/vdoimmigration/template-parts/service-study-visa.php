<?php
/**
 * Study Visa Service Content
 *
 * @package VDOImmigration
 */
?>

<!-- Overview -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-badge">Study Abroad Made Easy</span>
                <h2 class="section-title">Your Gateway to<br>World-Class Education</h2>
                <p class="section-desc">A student visa is your passport to a life-changing educational experience at some of the world's most prestigious universities. At VDO Immigration, we understand that a student visa application is about much more than just paperwork – it is the beginning of your academic journey.</p>
                <p class="section-desc">Our team of expert consultants works closely with you to understand your academic goals, assess your eligibility and prepare a compelling, complete visa application that gives you the best possible chance of approval.</p>
                <div class="service-highlights mt-4">
                    <div class="sh-item"><i class="fas fa-check-circle"></i> End-to-end visa application support</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> University-specific documentation guidance</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Financial documentation advisory</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> SOP and cover letter preparation</div>
                    <div class="sh-item"><i class="fas fa-check-circle"></i> Post-refusal re-application expertise</div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=700&h=500&fit=crop&auto=format" alt="Study Visa" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Study Destinations -->
<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Top Destinations</span>
            <h2 class="section-title">Study Visa for Top Countries</h2>
        </div>
        <div class="row g-4 mt-3">
            <?php
            $destinations = array(
                array( 'country' => 'Canada', 'flag' => '🇨🇦', 'visa_type' => 'Student Direct Stream (SDS) / Regular', 'processing' => '4–8 weeks', 'highlight' => 'PGWP & PR pathways after graduation' ),
                array( 'country' => 'Australia', 'flag' => '🇦🇺', 'visa_type' => 'Student Visa (Subclass 500)', 'processing' => '3–6 weeks', 'highlight' => 'Post-study work rights up to 4 years' ),
                array( 'country' => 'UK', 'flag' => '🇬🇧', 'visa_type' => 'Student Route Visa', 'processing' => '3–4 weeks', 'highlight' => 'Graduate Route – 2 year work visa post study' ),
                array( 'country' => 'USA', 'flag' => '🇺🇸', 'visa_type' => 'F-1 Student Visa', 'processing' => '2–12 weeks', 'highlight' => 'OPT & STEM OPT extension available' ),
                array( 'country' => 'Germany', 'flag' => '🇩🇪', 'visa_type' => 'Student Visa (National D)', 'processing' => '4–8 weeks', 'highlight' => 'Low/no tuition fees at public universities' ),
                array( 'country' => 'New Zealand', 'flag' => '🇳🇿', 'visa_type' => 'Student Visa', 'processing' => '4–6 weeks', 'highlight' => 'Work rights during & after study' ),
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

<!-- Process -->
<section class="section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Application Process</span>
            <h2 class="section-title">Study Visa Application Steps</h2>
        </div>
        <div class="row g-4 mt-3 justify-content-center">
            <?php
            $steps = array(
                array( 'num' => '01', 'icon' => 'fas fa-user-check', 'title' => 'Profile Assessment', 'desc' => 'We evaluate your academic background, financial profile and chosen destination to determine eligibility.' ),
                array( 'num' => '02', 'icon' => 'fas fa-university', 'title' => 'University Selection', 'desc' => 'Based on your profile, we help you select the right university and programme (via Get Admission Abroad if needed).' ),
                array( 'num' => '03', 'icon' => 'fas fa-folder-open', 'title' => 'Document Preparation', 'desc' => 'We prepare your complete document package including SOP, financial documents, and supporting materials.' ),
                array( 'num' => '04', 'icon' => 'fas fa-passport', 'title' => 'Visa Submission', 'desc' => 'Application submitted to the embassy. We track progress and provide updates throughout the waiting period.' ),
            );
            foreach ( $steps as $i => $step ) :
            ?>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $i * 100 ); ?>">
                <div class="process-step">
                    <div class="process-number"><?php echo esc_html( $step['num'] ); ?></div>
                    <div class="process-icon"><i class="<?php echo esc_attr( $step['icon'] ); ?>"></i></div>
                    <h4><?php echo esc_html( $step['title'] ); ?></h4>
                    <p><?php echo esc_html( $step['desc'] ); ?></p>
                    <?php if ( $i < count( $steps ) - 1 ) : ?><div class="process-connector"></div><?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
