<?php
/**
 * Contact Page Template
 * Template Name: Contact Us
 *
 * @package VDOImmigration
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero" style="background-image: url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920&h=500&fit=crop&auto=format');">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="page-hero-title">Contact Us</h1>
                <p class="page-hero-subtitle">Start Your Immigration Journey with a Free Consultation</p>
            </div>
        </div>
    </div>
</section>

<?php vdoi_breadcrumb(); ?>

<!-- Contact Main -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-4" data-aos="fade-right">
                <span class="section-badge">Get In Touch</span>
                <h2 class="section-title">Tell Us Your Goal,<br>We’ll Build Your Path</h2>
                <p class="section-desc">If you are confused by eligibility, worried about rejection, or unsure what to do next, share your profile with us and get practical guidance you can act on.</p>

                <div class="contact-detail-cards mt-4">
                    <div class="contact-detail-card">
                        <div class="cdc-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="cdc-content">
                            <h4>Visit Us</h4>
                            <p>VDO Immigration<br>[Office Address], India</p>
                        </div>
                    </div>
                    <div class="contact-detail-card">
                        <div class="cdc-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="cdc-content">
                            <h4>Call Us</h4>
                            <p><a href="tel:+919876543210">+91 98765 43210</a></p>
                        </div>
                    </div>
                    <div class="contact-detail-card">
                        <div class="cdc-icon whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="cdc-content">
                            <h4>WhatsApp</h4>
                            <p><a href="https://wa.me/919876543210">+91 98765 43210</a></p>
                        </div>
                    </div>
                    <div class="contact-detail-card">
                        <div class="cdc-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="cdc-content">
                            <h4>Email</h4>
                            <p><a href="mailto:info@vdoimmigration.com">info@vdoimmigration.com</a></p>
                        </div>
                    </div>
                    <div class="contact-detail-card">
                        <div class="cdc-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="cdc-content">
                            <h4>Office Hours</h4>
                            <p>Monday – Saturday<br>10:00 AM – 7:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="contact-social mt-4">
                    <h4 class="mb-3">Follow Us</h4>
                    <div class="social-links-row">
                        <a href="#" class="social-link-btn facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link-btn instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link-btn linkedin" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://wa.me/919876543210" class="social-link-btn whatsapp" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8" data-aos="fade-left">
                <div class="contact-form-card contact-form-large">
                    <h3 class="form-heading">Send Us Your Enquiry</h3>
                    <p class="form-subheading">Complete the form below and our immigration expert will get back to you within <strong>24 hours</strong> with clear next steps.</p>
                    <?php vdoi_contact_form( false ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Placeholder) -->
<section class="map-section">
    <div class="map-placeholder">
        <div class="map-overlay-content">
            <i class="fas fa-map-marker-alt"></i>
            <p>VDO Immigration Office Location</p>
            <p class="text-muted small">Map will be embedded here</p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-padding bg-light-blue">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-9">
                <div class="accordion vdoi-accordion" id="contactFAQ" data-aos="fade-up">
                    <?php
                    $faqs = array(
                        array(
                            'q' => 'How long does the visa application process take?',
                            'a' => 'The processing time varies by country and visa type. Generally, it can range from 2 weeks to 3 months. During your free consultation, we provide an estimated timeline based on your specific case and destination country.',
                        ),
                        array(
                            'q' => 'Can you help if my visa was previously refused?',
                            'a' => 'Yes, absolutely! We specialise in handling visa refusals. Our founder Prakash has extensive expertise in analysing refused applications, identifying the reasons for refusal and preparing a compelling case for a successful reapplication. Many of our success stories involve clients who came to us after one or more refusals.',
                        ),
                        array(
                            'q' => 'What documents do I need for a consultation?',
                            'a' => 'For an initial consultation, you do not need any specific documents. Simply come with your questions and a brief overview of your situation. After assessing your case, we will provide a personalised document checklist.',
                        ),
                        array(
                            'q' => 'Do you guarantee visa approval?',
                            'a' => 'No. Visa approvals are solely at the discretion of the respective embassies and immigration authorities. We provide professional guidance and prepare the strongest possible application, but we cannot guarantee outcomes. Please refer to our disclaimer for full details.',
                        ),
                        array(
                            'q' => 'What is your fee structure?',
                            'a' => 'Our fees vary depending on the service type, destination country and complexity of the case. We provide a complete fee breakdown during your free initial consultation, with no hidden charges.',
                        ),
                        array(
                            'q' => 'How is VDO Immigration different from other consultancies?',
                            'a' => 'VDO Immigration focuses exclusively on immigration services – we do not operate in any other domain. This specialisation, combined with 8.5+ years of expertise and our founder\'s deep knowledge, ensures every client receives expert, focused attention on their immigration case.',
                        ),
                    );
                    foreach ( $faqs as $i => $faq ) :
                        $id = 'faq' . ( $i + 1 );
                    ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button <?php echo $i > 0 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr( $id ); ?>">
                                <?php echo esc_html( $faq['q'] ); ?>
                            </button>
                        </h3>
                        <div id="<?php echo esc_attr( $id ); ?>" class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                <?php echo esc_html( $faq['a'] ); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
