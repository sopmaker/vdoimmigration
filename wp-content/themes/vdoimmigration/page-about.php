<?php
/**
 * About Us Page Template
 * Template Name: About Us
 *
 * @package VDOImmigration
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1920&h=500&fit=crop&auto=format');">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="page-hero-title">About VDO Immigration</h1>
                <p class="page-hero-subtitle">A Legacy of Professional Immigration Excellence</p>
            </div>
        </div>
    </div>
</section>

<?php vdoi_breadcrumb(); ?>

<!-- About Story -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-story-images">
                    <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=700&h=500&fit=crop&auto=format" alt="VDO Immigration Office" class="img-fluid rounded-3 shadow-lg">
                    <div class="story-badge">
                        <i class="fas fa-star text-accent me-2"></i>
                        Founded with a vision to simplify immigration
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="section-badge">Our Story</span>
                <h2 class="section-title">From Education to Immigration – A Journey of Growth</h2>
                <p class="section-desc">
                    VDO Immigration's journey began within the framework of <strong>Get Admission Abroad</strong>, a leading study abroad consultancy that has helped countless students gain admissions to prestigious universities worldwide. As the demand for professional immigration assistance grew among clients and beyond, it became clear that a dedicated, standalone immigration entity was needed.
                </p>
                <p class="section-desc">
                    Clients who had previously engaged with Get Admission Abroad for their education needs began expressing a strong desire for expert immigration services – for themselves, their families, and their professional journeys. Recognising this growing demand and the need for specialised expertise, <strong>VDO Immigration was established as an independent company</strong>.
                </p>
                <p class="section-desc">
                    Today, VDO Immigration is entirely focused on the immigration domain. We maintain a clear distinction from the study abroad work carried out by Get Admission Abroad, ensuring that each company excels in its area of specialisation. This separation of focus has allowed us to deliver unparalleled quality in immigration services.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Our Foundation</span>
            <h2 class="section-title">Mission, Vision & Values</h2>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="mvv-card">
                    <div class="mvv-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide professional, transparent and client-focused immigration services that maximise the chances of a successful visa outcome through expert preparation and embassy presentation.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="mvv-card">
                    <div class="mvv-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be India's most trusted immigration consultancy, known for integrity, expertise and a proven track record of turning dreams into reality – one visa at a time.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="mvv-card">
                    <div class="mvv-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Our Values</h3>
                    <p>Integrity, transparency and professionalism are the pillars on which VDO Immigration stands. Every client is treated with respect, care and complete honesty throughout the process.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Makes Us Different -->
<section class="section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Our Differentiators</span>
            <h2 class="section-title">What Sets VDO Immigration Apart</h2>
        </div>
        <div class="row g-4 mt-3">
            <?php
            $differentiators = array(
                array(
                    'icon'  => 'fas fa-handshake',
                    'title' => 'Professional Onboarding',
                    'desc'  => 'Every client undergoes a structured onboarding process. We understand your goals, assess your profile and create a customised roadmap for your immigration journey.',
                ),
                array(
                    'icon'  => 'fas fa-balance-scale',
                    'title' => 'Embassy-Grade Presentation',
                    'desc'  => 'Your application is crafted and presented to the embassy with the same precision and care that a legal professional would apply. We ensure nothing is left to chance.',
                ),
                array(
                    'icon'  => 'fas fa-redo',
                    'title' => 'Refusal to Approval Expertise',
                    'desc'  => 'We specialise in understanding why applications are refused and build compelling cases for re-application. Our track record in turning refusals to approvals is exceptional.',
                ),
                array(
                    'icon'  => 'fas fa-shield-alt',
                    'title' => 'Complete Transparency',
                    'desc'  => 'We maintain complete transparency at every stage. You are kept informed about your application status, requirements and expected timelines at all times.',
                ),
                array(
                    'icon'  => 'fas fa-users-cog',
                    'title' => 'Specialised Immigration Focus',
                    'desc'  => 'Unlike general consultancies, VDO Immigration focuses exclusively on immigration – allowing our team to develop deep, specialised expertise in every type of visa.',
                ),
                array(
                    'icon'  => 'fas fa-award',
                    'title' => '8.5+ Years of Expertise',
                    'desc'  => 'Our founder brings over 8.5 years of immigration industry experience, having successfully guided thousands of students, professionals and families.',
                ),
            );
            foreach ( $differentiators as $i => $item ) : ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $i % 3 ) * 100 ); ?>">
                <div class="differentiator-card">
                    <div class="diff-icon"><i class="<?php echo esc_attr( $item['icon'] ); ?>"></i></div>
                    <h4><?php echo esc_html( $item['title'] ); ?></h4>
                    <p><?php echo esc_html( $item['desc'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Connection with Get Admission Abroad -->
<section class="section-padding bg-dark-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center" data-aos="fade-up">
                <span class="section-badge badge-white">Sister Concern</span>
                <h2 class="section-title text-white">Our Connection with Get Admission Abroad</h2>
                <p class="section-desc text-white-70">
                    VDO Immigration shares its founding spirit with <strong class="text-accent">Get Admission Abroad</strong>, a leading study abroad consultancy that helps students gain admissions to top universities across Canada, UK, Australia, USA, Germany and beyond. While Get Admission Abroad continues to focus on the study abroad journey – from university selection to admission – VDO Immigration handles the immigration and visa aspects with dedicated expertise.
                </p>
                <p class="section-desc text-white-70">
                    The two companies work in harmony, each excelling in its domain, to provide clients with a seamless end-to-end experience: from education planning to visa processing and immigration support.
                </p>
                <a href="https://getadmissionabroad.com" class="btn btn-outline-white mt-3" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-external-link-alt me-2"></i>Visit Get Admission Abroad
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Team / CTA -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <span class="section-badge">Meet the Founder</span>
                <h2 class="section-title">The Expert Behind VDO Immigration</h2>
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&auto=format" alt="Prakash – Founder VDO Immigration" class="rounded-circle shadow mb-4" width="150" height="150" style="object-fit:cover;">
                <p class="section-desc">
                    <strong>Prakash</strong>, the founder of VDO Immigration, has dedicated over 8.5 years of his career to the immigration and study abroad industry. His deep knowledge, commitment to clients and unique expertise in handling complex cases – including successful refusal reversals – form the backbone of everything VDO Immigration stands for.
                </p>
                <a href="<?php echo esc_url( home_url( '/about-founder/' ) ); ?>" class="btn btn-primary-vdoi btn-lg mt-2">
                    <i class="fas fa-user-tie me-2"></i>Read Full Founder Profile
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="stats-section stats-dark">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3" data-aos="zoom-in">
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
                    <div class="stat-suffix">.5+ Yrs</div>
                    <div class="stat-label">Of Experience</div>
                </div>
            </div>
            <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-globe"></i></div>
                    <div class="stat-number" data-count="20">0</div>
                    <div class="stat-suffix">+</div>
                    <div class="stat-label">Countries Covered</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
