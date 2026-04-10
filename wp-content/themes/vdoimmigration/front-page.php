<?php
/**
 * Homepage Template
 *
 * @package VDOImmigration
 */

get_header();

$services  = vdoi_get_services();
$countries = vdoi_get_countries();
?>

<!-- ===== HERO SLIDER ===== -->
<section class="hero-slider-section">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">

            <!-- Slide 1: Study Visa -->
            <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1920&h=900&fit=crop&auto=format');">
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div class="row align-items-center min-vh-hero">
                        <div class="col-lg-7">
                            <span class="hero-badge" data-aos="fade-down">Study Visa Experts</span>
                            <h1 class="hero-title" data-aos="fade-right" data-aos-delay="100">
                                Turn Your Study Abroad<br>
                                <span class="hero-title-accent">Dream Into Reality</span>
                            </h1>
                            <p class="hero-subtitle" data-aos="fade-right" data-aos-delay="200">
                                Worried about refusals, financial documents or SOP quality? We build a clear strategy so your study visa file looks credible, complete and decision-ready.
                            </p>
                            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="300">
                                <a href="<?php echo esc_url( home_url( '/services/study-visa/' ) ); ?>" class="btn btn-primary-vdoi btn-lg">
                                    <i class="fas fa-graduation-cap me-2"></i>Explore Study Visa
                                </a>
                                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-white btn-lg ms-3">
                                    <i class="fas fa-comments me-2"></i>Free Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Tourist Visa -->
            <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1488085061387-422e29b40080?w=1920&h=900&fit=crop&auto=format');">
                <div class="hero-overlay hero-overlay-green"></div>
                <div class="container hero-content">
                    <div class="row align-items-center min-vh-hero">
                        <div class="col-lg-7">
                            <span class="hero-badge">Tourist Visa Experts</span>
                            <h1 class="hero-title">
                                Explore the World<br>
                                <span class="hero-title-accent">Hassle-Free</span>
                            </h1>
                            <p class="hero-subtitle">
                                Avoid rejection triggers like weak travel purpose or poor documentation—our team prepares your profile to maximise confidence at submission.
                            </p>
                            <div class="hero-buttons">
                                <a href="<?php echo esc_url( home_url( '/services/tourist-visa/' ) ); ?>" class="btn btn-primary-vdoi btn-lg">
                                    <i class="fas fa-plane-departure me-2"></i>Explore Tourist Visa
                                </a>
                                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-white btn-lg ms-3">
                                    <i class="fas fa-comments me-2"></i>Free Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Work Visa -->
            <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1920&h=900&fit=crop&auto=format');">
                <div class="hero-overlay hero-overlay-purple"></div>
                <div class="container hero-content">
                    <div class="row align-items-center min-vh-hero">
                        <div class="col-lg-7">
                            <span class="hero-badge">Work Visa Experts</span>
                            <h1 class="hero-title">
                                Build Your Global Career<br>
                                <span class="hero-title-accent">With Confidence</span>
                            </h1>
                            <p class="hero-subtitle">
                                From eligibility to offer-linked paperwork, we simplify the full work visa journey so you can focus on your career move, not confusion.
                            </p>
                            <div class="hero-buttons">
                                <a href="<?php echo esc_url( home_url( '/services/work-visa/' ) ); ?>" class="btn btn-primary-vdoi btn-lg">
                                    <i class="fas fa-briefcase me-2"></i>Explore Work Visa
                                </a>
                                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-white btn-lg ms-3">
                                    <i class="fas fa-comments me-2"></i>Free Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: PR Pathway -->
            <div class="swiper-slide hero-slide" style="background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1920&h=900&fit=crop&auto=format');">
                <div class="hero-overlay hero-overlay-gold"></div>
                <div class="container hero-content">
                    <div class="row align-items-center min-vh-hero">
                        <div class="col-lg-7">
                            <span class="hero-badge">PR Pathway Experts</span>
                            <h1 class="hero-title">
                                Make a New Country<br>
                                <span class="hero-title-accent">Your Forever Home</span>
                            </h1>
                            <p class="hero-subtitle">
                                PR pathways can feel overwhelming. We break down points, timelines and document strategy into an actionable plan you can trust.
                            </p>
                            <div class="hero-buttons">
                                <a href="<?php echo esc_url( home_url( '/services/pr-pathway/' ) ); ?>" class="btn btn-primary-vdoi btn-lg">
                                    <i class="fas fa-home me-2"></i>Explore PR Pathway
                                </a>
                                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-white btn-lg ms-3">
                                    <i class="fas fa-comments me-2"></i>Free Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider Pagination -->
        <div class="swiper-pagination hero-pagination"></div>

        <!-- Slider Navigation -->
        <div class="swiper-button-prev hero-prev"></div>
        <div class="swiper-button-next hero-next"></div>
    </div>

    <!-- Scroll Down Indicator -->
    <div class="scroll-down-indicator">
        <span>Scroll Down</span>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- ===== QUICK ENQUIRY BAR ===== -->
<section class="quick-enquiry-bar">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-lg-4">
                <p class="quick-enquiry-text mb-0">
                    <i class="fas fa-headset me-2 text-accent"></i>
                    <strong>Get a FREE Visa Consultation</strong> – Talk to our experts today!
                </p>
            </div>
            <div class="col-lg-5">
                <div class="d-flex gap-2 flex-wrap">
                    <a href="tel:+919876543210" class="btn btn-outline-primary-vdoi">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                    <a href="https://wa.me/919876543210?text=Hello%2C%20I%20need%20immigration%20consultation." class="btn btn-whatsapp" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary-vdoi">
                        <i class="fas fa-paper-plane me-2"></i>Send Enquiry
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-lg-end">
                <div class="quick-availability">
                    <span class="availability-dot"></span>
                    Available: Mon–Sat, 10AM–7PM
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CLIENT CONFIDENCE STRIP ===== -->
<section class="confidence-strip">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-4" data-aos="fade-up">
                <div class="confidence-item">
                    <h3>Clarity Before Commitment</h3>
                    <p>Get a practical eligibility view and transparent next steps before spending on the process.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="confidence-item">
                    <h3>Communication You Can Trust</h3>
                    <p>Timely updates, quick answers and founder-led guidance so you never feel lost in the journey.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="confidence-item">
                    <h3>Comfort Through Preparation</h3>
                    <p>We reduce stress with complete checklists, quality SOP support and proactive refusal-risk control.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== STATS SECTION ===== -->
<section class="stats-section">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="0">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-file-alt"></i></div>
                    <div class="stat-number" data-count="2000">0</div>
                    <div class="stat-suffix">+</div>
                    <div class="stat-label">Visa Applications</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-percentage"></i></div>
                    <div class="stat-number" data-count="90">0</div>
                    <div class="stat-suffix">%+</div>
                    <div class="stat-label">Success Rate</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-calendar-check"></i></div>
                    <div class="stat-number" data-count="8">0</div>
                    <div class="stat-suffix">.5+ Years</div>
                    <div class="stat-label">Of Expertise</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-globe"></i></div>
                    <div class="stat-number" data-count="20">0</div>
                    <div class="stat-suffix">+</div>
                    <div class="stat-label">Countries Served</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES SECTION ===== -->
<section class="services-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">What We Offer</span>
            <h2 class="section-title">Our Immigration Services</h2>
            <p class="section-subtitle">Designed around real client problems: refusal history, documentation gaps, low confidence and deadline pressure.</p>
        </div>
        <div class="row g-4 mt-2">
            <?php foreach ( $services as $index => $service ) : ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                <?php vdoi_service_card( $service ); ?>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline-primary-vdoi btn-lg">
                <i class="fas fa-th-large me-2"></i>View All Services
            </a>
        </div>
    </div>
</section>

<!-- ===== WHY CHOOSE US ===== -->
<section class="why-choose-section section-padding bg-light-blue">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="why-image-wrap">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=700&h=550&fit=crop&auto=format" alt="VDO Immigration Professional Team" class="img-fluid rounded-3 shadow-lg">
                    <div class="why-image-badge">
                        <i class="fas fa-award"></i>
                        <span>8.5+ Years<br>Experience</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="section-badge">Why Choose Us</span>
                <h2 class="section-title">Strategy, Communication,<br>and Calm Execution</h2>
                <p class="section-desc">We do more than submit files. We diagnose risk early, strengthen every supporting document, and keep you informed at each milestone so your decision journey feels controlled.</p>

                <div class="why-features mt-4">
                    <div class="why-feature-item">
                        <div class="why-feature-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="why-feature-content">
                            <h4>Expert Consultation</h4>
                            <p>One-on-one sessions with experienced immigration consultants who understand your unique case.</p>
                        </div>
                    </div>
                    <div class="why-feature-item">
                        <div class="why-feature-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div class="why-feature-content">
                            <h4>Professional Documentation</h4>
                            <p>Meticulously prepared and reviewed documents that meet embassy standards and requirements.</p>
                        </div>
                    </div>
                    <div class="why-feature-item">
                        <div class="why-feature-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <div class="why-feature-content">
                            <h4>Refusal to Approval</h4>
                            <p>Specialised expertise in turning visa refusals into approvals through strategic re-application.</p>
                        </div>
                    </div>
                    <div class="why-feature-item">
                        <div class="why-feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="why-feature-content">
                            <h4>End-to-End Support</h4>
                            <p>From onboarding to final visa processing, we guide you through every step of the journey.</p>
                        </div>
                    </div>
                </div>

                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-primary-vdoi mt-4">
                    <i class="fas fa-info-circle me-2"></i>Learn More About Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===== PROCESS SECTION ===== -->
<section class="process-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">How It Works</span>
            <h2 class="section-title">Our Simple 4-Step Process</h2>
            <p class="section-subtitle">A structured workflow that removes uncertainty and builds embassy-ready confidence.</p>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="0">
                <div class="process-step">
                    <div class="process-number">01</div>
                    <div class="process-icon"><i class="fas fa-phone-alt"></i></div>
                    <h4>Free Consultation</h4>
                    <p>Connect with our experts for a free consultation to assess your eligibility and understand the best pathway.</p>
                    <div class="process-connector"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step">
                    <div class="process-number">02</div>
                    <div class="process-icon"><i class="fas fa-folder-open"></i></div>
                    <h4>Document Collection</h4>
                    <p>Our team provides a personalised checklist and assists in gathering all required documents.</p>
                    <div class="process-connector"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step">
                    <div class="process-number">03</div>
                    <div class="process-icon"><i class="fas fa-file-signature"></i></div>
                    <h4>Application Preparation</h4>
                    <p>We professionally prepare and review your complete visa application before submission to the embassy.</p>
                    <div class="process-connector"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step">
                    <div class="process-number">04</div>
                    <div class="process-icon"><i class="fas fa-passport"></i></div>
                    <h4>Visa Processing</h4>
                    <p>Application submitted. We track progress and communicate updates till your visa decision is made.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== COUNTRIES SECTION ===== -->
<section class="countries-section section-padding bg-dark-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge badge-white">Countries We Serve</span>
            <h2 class="section-title text-white">We Help You Reach Your<br>Dream Destination</h2>
            <p class="section-subtitle text-white-70">Our immigration expertise spans across all major destinations worldwide</p>
        </div>
        <div class="row g-4 mt-3 justify-content-center">
            <?php foreach ( $countries as $index => $country ) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="<?php echo esc_attr( ( $index % 4 ) * 75 ); ?>">
                <div class="country-card">
                    <div class="country-flag"><?php echo esc_html( $country['flag'] ); ?></div>
                    <h4 class="country-name"><?php echo esc_html( $country['name'] ); ?></h4>
                    <p class="country-desc"><?php echo esc_html( $country['desc'] ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="country-link">
                        Enquire Now <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center text-white-70 mt-4" data-aos="fade-up">
            <i class="fas fa-info-circle me-2"></i>
            Not limited to the above – we assist with visa applications for most countries worldwide. <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="text-accent">Contact us</a> to enquire.
        </p>
    </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="testimonials-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Client Stories</span>
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">Real stories from real people who achieved their immigration goals with VDO Immigration.</p>
        </div>
        <div class="swiper testimonials-swiper mt-4">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <blockquote class="testimonial-text">
                            "I had been refused a Canada study visa twice before. VDO Immigration not only identified the exact issues but helped me reapply with a strong case. My visa was approved within 6 weeks! Absolutely brilliant service."
                        </blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">RS</div>
                            <div>
                                <strong>Rahul Sharma</strong>
                                <span>Canada Study Visa – Approved</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <blockquote class="testimonial-text">
                            "The team at VDO Immigration handled our family visa application with utmost professionalism. Every document was prepared perfectly, and our application was approved on the first try. Highly recommend!"
                        </blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">PK</div>
                            <div>
                                <strong>Priya Kapoor</strong>
                                <span>UK Family Visa – Approved</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <blockquote class="testimonial-text">
                            "Prakash sir's guidance throughout the PR pathway was exceptional. He was always available to answer queries and the whole process was transparent. I got my Australia PR within the expected timeline!"
                        </blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">AV</div>
                            <div>
                                <strong>Amit Verma</strong>
                                <span>Australia PR – Approved</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <blockquote class="testimonial-text">
                            "After a US visitor visa refusal, I was very sceptical. But VDO Immigration's structured approach and strong documentation made the difference. Got my visa on the very next attempt. Thank you!"
                        </blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">SM</div>
                            <div>
                                <strong>Sunita Mishra</strong>
                                <span>US Visitor Visa – Approved</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <blockquote class="testimonial-text">
                            "I needed a Germany work visa and had no idea where to start. The VDO team made the entire process simple, clear and efficient. Very professional and responsive throughout. Got my visa approved!"
                        </blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">RP</div>
                            <div>
                                <strong>Rohan Patel</strong>
                                <span>Germany Work Visa – Approved</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination testimonials-pagination"></div>
        </div>
    </div>
</section>

<!-- ===== ABOUT SECTION TEASER ===== -->
<section class="about-teaser-section section-padding bg-light-blue">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-left" data-aos-order="2">
                <div class="about-teaser-images">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=600&fit=crop&auto=format" alt="Prakash - Founder VDO Immigration" class="about-img-main img-fluid rounded-3 shadow">
                    <div class="about-img-secondary">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=300&h=250&fit=crop&auto=format" alt="Immigration consultation" class="img-fluid rounded-3 shadow">
                    </div>
                    <div class="about-exp-badge">
                        <span class="exp-num">8.5+</span>
                        <span class="exp-text">Years of<br>Excellence</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-right" data-aos-order="1">
                <span class="section-badge">About VDO Immigration</span>
                <h2 class="section-title">Professionals Who<br>Truly Care About<br>Your Success</h2>
                <p class="section-desc">VDO Immigration was born from a passion for helping individuals achieve their international aspirations. Founded by <strong>Prakash</strong>, who brings over <strong>8.5 years of immigration expertise</strong>, the company has grown from its roots in study abroad consultancy (through Get Admission Abroad) into a specialised, standalone immigration firm.</p>
                <p class="section-desc">Today, VDO Immigration focuses exclusively on immigration-related services, ensuring every client receives undivided professional attention. Our track record of converting visa refusals into approvals speaks for our commitment and expertise.</p>
                <div class="about-cta-wrap d-flex gap-3 flex-wrap mt-4">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-primary-vdoi">
                        <i class="fas fa-info-circle me-2"></i>About VDO Immigration
                    </a>
                    <a href="<?php echo esc_url( home_url( '/about-founder/' ) ); ?>" class="btn btn-outline-primary-vdoi">
                        <i class="fas fa-user-tie me-2"></i>Meet Our Founder
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CONTACT FORM SECTION ===== -->
<section class="contact-section section-padding" id="contact">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="section-badge">Get In Touch</span>
                <h2 class="section-title">Start Your Visa Journey<br>With a Free Consultation</h2>
                <p class="section-desc">Tell us your goal and current challenge. We will review your case and connect with a practical action plan within 24 hours.</p>

                <div class="contact-info-cards mt-4">
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <strong>Call Us</strong>
                            <a href="tel:+919876543210">+91 98765 43210</a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon whatsapp"><i class="fab fa-whatsapp"></i></div>
                        <div>
                            <strong>WhatsApp</strong>
                            <a href="https://wa.me/919876543210">+91 98765 43210</a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <strong>Email</strong>
                            <a href="mailto:info@vdoimmigration.com">info@vdoimmigration.com</a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <strong>Office Hours</strong>
                            <span>Mon–Sat: 10:00 AM – 7:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-form-card">
                    <?php vdoi_contact_form( true ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="cta-section">
    <div class="cta-bg" style="background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1920&h=500&fit=crop&auto=format');"></div>
    <div class="cta-overlay"></div>
    <div class="container cta-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="cta-title">Ready to Begin Your Immigration Journey?</h2>
                <p class="cta-subtitle">Join 2000+ successful applicants who trusted VDO Immigration with their dreams. Your journey to a new life starts with one conversation.</p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary-vdoi btn-lg">
                        <i class="fas fa-rocket me-2"></i>Start Your Application
                    </a>
                    <a href="tel:+919876543210" class="btn btn-outline-white btn-lg ms-3">
                        <i class="fas fa-phone-alt me-2"></i>Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
