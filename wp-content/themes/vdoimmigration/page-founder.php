<?php
/**
 * About Founder Page Template
 * Template Name: About Founder
 *
 * @package VDOImmigration
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1920&h=500&fit=crop&auto=format');">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="page-hero-title">Meet Our Founder</h1>
                <p class="page-hero-subtitle">The Visionary Behind VDO Immigration</p>
            </div>
        </div>
    </div>
</section>

<?php vdoi_breadcrumb(); ?>

<!-- Founder Profile -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-start g-5">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="founder-profile-card">
                    <div class="founder-photo-wrap">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=450&fit=crop&auto=format" alt="Prakash – Founder VDO Immigration" class="img-fluid founder-photo">
                        <div class="founder-exp-badge">
                            <span class="exp-num">8.5+</span>
                            <span>Years<br>Experience</span>
                        </div>
                    </div>
                    <div class="founder-info">
                        <h2 class="founder-name">Prakash</h2>
                        <p class="founder-title">Founder & Lead Immigration Consultant</p>
                        <p class="founder-company">VDO Immigration</p>
                        <div class="founder-social mt-3">
                            <a href="https://sop-writer.in" class="btn btn-outline-primary-vdoi btn-sm" target="_blank" rel="noopener noreferrer">
                                <i class="fas fa-globe me-1"></i> sop-writer.in
                            </a>
                        </div>
                        <div class="founder-quick-stats mt-4">
                            <div class="fqs-item">
                                <strong>2000+</strong>
                                <span>Cases Handled</span>
                            </div>
                            <div class="fqs-item">
                                <strong>90%+</strong>
                                <span>Success Rate</span>
                            </div>
                            <div class="fqs-item">
                                <strong>20+</strong>
                                <span>Countries</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-left">
                <span class="section-badge">Founder's Story</span>
                <h2 class="section-title">A Decade of Transforming<br>Immigration Journeys</h2>

                <p class="section-desc">
                    <strong>Prakash</strong> is the founder and driving force behind VDO Immigration. With over <strong>8.5 years of in-depth experience</strong> in the immigration and study abroad industry, Prakash has built a reputation as one of the most reliable and knowledgeable immigration consultants in the field.
                </p>

                <p class="section-desc">
                    His journey in this industry began with a passion for helping students and individuals navigate complex international systems. Over the years, he has worked with thousands of clients – from students seeking higher education abroad to professionals looking for global career opportunities and families seeking to reunite overseas.
                </p>

                <p class="section-desc">
                    What truly sets Prakash apart is his <strong>expertise in turning visa refusals into approvals</strong>. Many of his clients came to him after facing one or more rejections from embassies, feeling hopeless and overwhelmed. Through meticulous analysis of each case, strategic repositioning of the application and professional preparation of documentation, Prakash has achieved an outstanding track record of successful reapplications.
                </p>

                <!-- Quote -->
                <div class="founder-quote">
                    <i class="fas fa-quote-left"></i>
                    <blockquote>
                        "Every individual who comes to us deserves to have their case presented with the utmost professionalism. Our job is not just to file paperwork – it is to tell your story to the embassy in a way that is clear, credible and compelling."
                    </blockquote>
                    <cite>— Prakash, Founder, VDO Immigration</cite>
                </div>

                <p class="section-desc mt-4">
                    Before establishing VDO Immigration, Prakash co-founded and built <strong>Get Admission Abroad</strong>, a renowned study abroad consultancy that continues to serve students seeking international education opportunities. Recognising the growing need for dedicated immigration services, Prakash channelled his expertise into VDO Immigration – a platform exclusively focused on professional immigration assistance.
                </p>

                <p class="section-desc">
                    As a passionate writer and advocate, Prakash also runs <a href="https://sop-writer.in" target="_blank" rel="noopener noreferrer"><strong>sop-writer.in</strong></a>, a platform dedicated to helping students craft compelling Statements of Purpose and other application documents that strengthen their cases for universities and embassies alike.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Areas -->
<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Areas of Expertise</span>
            <h2 class="section-title">What Prakash Specialises In</h2>
        </div>
        <div class="row g-4 mt-3">
            <?php
            $expertise = array(
                array(
                    'icon'  => 'fas fa-graduation-cap',
                    'title' => 'Study Visa Guidance',
                    'desc'  => 'Comprehensive expertise in student visa applications for Canada, UK, Australia, USA, Germany and other top study destinations.',
                    'color' => '#1B4F8A',
                ),
                array(
                    'icon'  => 'fas fa-briefcase',
                    'title' => 'Work & Skilled Migration',
                    'desc'  => 'In-depth knowledge of skilled worker programmes, Labour Market Impact Assessments (LMIA) and work permit pathways.',
                    'color' => '#2E8B57',
                ),
                array(
                    'icon'  => 'fas fa-home',
                    'title' => 'Permanent Residency',
                    'desc'  => 'End-to-end guidance on PR pathways including Canada Express Entry, Australia Points Test and other permanent residency streams.',
                    'color' => '#D4AF37',
                ),
                array(
                    'icon'  => 'fas fa-sync-alt',
                    'title' => 'Refusal to Approval',
                    'desc'  => 'Specialised in analysing refused applications, identifying weaknesses and rebuilding a compelling case for successful reapplication.',
                    'color' => '#8B2252',
                ),
                array(
                    'icon'  => 'fas fa-users',
                    'title' => 'Family Reunification',
                    'desc'  => 'Expert handling of family sponsorship, spouse visas, dependent visas and visitor visa applications to reunite families.',
                    'color' => '#FF6B35',
                ),
                array(
                    'icon'  => 'fas fa-pen-fancy',
                    'title' => 'SOP & Documentation',
                    'desc'  => 'Crafting powerful Statements of Purpose, cover letters and supporting documents that significantly strengthen visa applications.',
                    'color' => '#6A5ACD',
                ),
            );
            foreach ( $expertise as $i => $item ) :
            ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $i % 3 ) * 100 ); ?>">
                <div class="expertise-card" style="--accent-color: <?php echo esc_attr( $item['color'] ); ?>;">
                    <div class="exp-card-icon">
                        <i class="<?php echo esc_attr( $item['icon'] ); ?>"></i>
                    </div>
                    <h4><?php echo esc_html( $item['title'] ); ?></h4>
                    <p><?php echo esc_html( $item['desc'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Journey Timeline -->
<section class="section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Professional Journey</span>
            <h2 class="section-title">A Timeline of Excellence</h2>
        </div>
        <div class="founder-timeline mt-5">
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-year">2016</div>
                <div class="timeline-content">
                    <h4>Entered the Immigration & Education Industry</h4>
                    <p>Began his career in the immigration and study abroad domain, gaining hands-on experience with student visa applications, university admissions and immigration documentation.</p>
                </div>
            </div>
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-year">2018</div>
                <div class="timeline-content">
                    <h4>Co-Founded Get Admission Abroad</h4>
                    <p>Established Get Admission Abroad, a dedicated study abroad consultancy helping students gain admission to top universities across Canada, UK, Australia, USA, Germany and more.</p>
                </div>
            </div>
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-year">2020</div>
                <div class="timeline-content">
                    <h4>Launched sop-writer.in</h4>
                    <p>Created a dedicated platform for crafting high-impact Statements of Purpose and application documents, further strengthening client success rates at universities and embassies.</p>
                </div>
            </div>
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-year">2022</div>
                <div class="timeline-content">
                    <h4>Founded VDO Immigration</h4>
                    <p>Responding to rising demand for dedicated immigration services, established VDO Immigration as a standalone consultancy solely focused on immigration-related work – separate from study abroad.</p>
                </div>
            </div>
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-year">2024+</div>
                <div class="timeline-content">
                    <h4>Growing with 2000+ Successful Applications</h4>
                    <p>VDO Immigration continues to grow, with over 2000 visa applications processed and a 90%+ success rate. Ongoing expansion into new service areas and countries to serve more clients.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials about Founder -->
<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">What Clients Say</span>
            <h2 class="section-title">Clients About Prakash</h2>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-md-4" data-aos="fade-up">
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <blockquote class="testimonial-text">"Prakash sir's approach is unlike any other consultant I have met. He genuinely cares about your case and explains every step clearly. I got my Canada study visa approved after two previous refusals!"</blockquote>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">MS</div>
                        <div>
                            <strong>Manisha Singh</strong>
                            <span>Canada Study Visa – Approved</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <blockquote class="testimonial-text">"Prakash guided my entire family through the Australia PR process. His in-depth knowledge and patience in explaining the process made everything feel manageable. We are now permanent residents!"</blockquote>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">DG</div>
                        <div>
                            <strong>Deepak Gupta</strong>
                            <span>Australia PR – Approved</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <blockquote class="testimonial-text">"The SOP that Prakash crafted for my UK work visa application was outstanding. The embassy officer even complimented its clarity and professionalism. Got my visa in the first attempt!"</blockquote>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">NK</div>
                        <div>
                            <strong>Neha Kumar</strong>
                            <span>UK Work Visa – Approved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="cta-bg" style="background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1920&h=500&fit=crop&auto=format');"></div>
    <div class="cta-overlay"></div>
    <div class="container cta-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="cta-title">Connect with Prakash Directly</h2>
                <p class="cta-subtitle">Experience the expertise and dedication that has helped thousands achieve their immigration dreams. Get a personalised consultation today.</p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary-vdoi btn-lg">
                    <i class="fas fa-comments me-2"></i>Book a Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
