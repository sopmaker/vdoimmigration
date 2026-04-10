# VDO Immigration – WordPress Website

A professional, high-converting WordPress website for **VDO Immigration**, a premier immigration consultancy offering expert visa services across all major categories and destination countries.

---

## 📁 Repository Structure

```
wp-content/
└── themes/
    └── vdoimmigration/           ← Custom WordPress Theme
        ├── style.css             ← Theme header/registration
        ├── functions.php         ← Theme setup, scripts, AJAX handler, helpers
        ├── header.php            ← Navigation + top bar
        ├── footer.php            ← Footer with disclaimer + WhatsApp float
        ├── front-page.php        ← Homepage (hero slider, stats, services, etc.)
        ├── page.php              ← Generic page template
        ├── index.php             ← Blog/fallback template
        ├── 404.php               ← 404 error page
        │
        ├── page-about.php        ← About VDO Immigration page
        ├── page-founder.php      ← About Founder (Prakash) page
        ├── page-contact.php      ← Contact page with form & FAQ
        ├── page-services.php     ← Services overview page
        ├── page-service.php      ← Generic service page (delegate pattern)
        ├── page-study-visa.php   ← Study Visa page
        ├── page-tourist-visa.php ← Tourist Visa page
        ├── page-work-visa.php    ← Work Visa page
        ├── page-pr-pathway.php   ← PR Pathway page
        ├── page-family-visa.php  ← Family Visa page
        ├── page-visitor-visa.php ← Visitor Visa page
        │
        ├── inc/
        │   └── template-tags.php ← Helper functions (contact form, service cards, breadcrumb)
        │
        ├── template-parts/
        │   ├── service-study-visa.php
        │   ├── service-tourist-visa.php
        │   ├── service-work-visa.php
        │   ├── service-pr-pathway.php
        │   ├── service-family-visa.php
        │   ├── service-visitor-visa.php
        │   └── service-generic.php
        │
        ├── assets/
        │   ├── css/main.css      ← Full responsive CSS (CSS variables, components)
        │   └── js/main.js        ← Slider, counters, AOS, contact form AJAX
        │
        └── setup.php             ← One-time setup script (create pages, menus)
```

---

## 🚀 Installation & Setup

### Prerequisites
- WordPress 5.8+
- PHP 7.4+

### Steps

1. **Upload the theme** to your WordPress installation:
   - Copy `wp-content/themes/vdoimmigration/` to your WordPress `wp-content/themes/` directory

2. **Activate the theme**:
   - Go to WordPress Admin → Appearance → Themes
   - Activate **VDO Immigration**

3. **Run the setup script** *(one-time only)*:
   - Visit: `https://yoursite.com/wp-content/themes/vdoimmigration/setup.php`
   - This creates all pages, sets up navigation menus and configures the front page
   - ⚠️ **Delete `setup.php` immediately after running**

4. **Update contact details**:
   - Edit `header.php` and `footer.php` to replace placeholder phone/email/address with real details
   - Update WhatsApp links with the actual WhatsApp number

5. **Configure email**:
   - The contact form sends emails to your WordPress admin email
   - Every enquiry is also saved in WP Admin under **Lead Enquiries** as a backup
   - Configure SMTP via a plugin (e.g., WP Mail SMTP) for reliable email delivery

---

## 🎨 Design Features

| Feature | Detail |
|---|---|
| **Hero Slider** | Auto-playing, fade-effect Swiper.js slider with 4 slides (Study, Tourist, Work, PR) |
| **Stats Counter** | Animated counter triggered on scroll: 2000+ applications, 90%+ success rate, 8.5+ years, 20+ countries |
| **Services Grid** | 6 service cards with hover effects, images and CTA links |
| **Countries Section** | 8 countries with flag emojis, visa types and enquiry links |
| **Testimonials Carousel** | Swiper slider with 5 client testimonials |
| **Contact Form** | AJAX-powered form with service/country selection; sends email and stores each lead in WP Admin backup |
| **WhatsApp Float** | Fixed floating WhatsApp button with tooltip |
| **AOS Animations** | Scroll-triggered animations throughout |
| **Responsive** | Fully responsive with Bootstrap 5 grid; optimised for mobile |
| **Sticky Navbar** | Sticky header with shadow on scroll |
| **Back to Top** | Smooth scroll-to-top button |

---

## 📄 Pages Created

| Page | Template | URL |
|---|---|---|
| Homepage | `front-page.php` | `/` |
| About Us | `page-about.php` | `/about/` |
| About Founder | `page-founder.php` | `/about-founder/` |
| Contact | `page-contact.php` | `/contact/` |
| Services | `page-services.php` | `/services/` |
| Study Visa | `page-study-visa.php` | `/services/study-visa/` |
| Tourist Visa | `page-tourist-visa.php` | `/services/tourist-visa/` |
| Work Visa | `page-work-visa.php` | `/services/work-visa/` |
| PR Pathway | `page-pr-pathway.php` | `/services/pr-pathway/` |
| Family Visa | `page-family-visa.php` | `/services/family-visa/` |
| Visitor Visa | `page-visitor-visa.php` | `/services/visitor-visa/` |

---

## 🔧 Customisation

### Contact Details
Update these in `header.php` and `footer.php`:
- Phone: `+91 98765 43210`
- Email: `info@vdoimmigration.com`
- WhatsApp: `https://wa.me/919876543210`
- Address: `[Office Address], India`

### Logo
Replace the icon-based logo in `header.php` with an actual image using `<img>` tag.

### Images
All images use Unsplash CDN URLs. For production:
- Upload real photos to WordPress Media Library
- Update image `src` attributes in templates

### Colour Scheme
Edit CSS variables in `assets/css/main.css`:
```css
:root {
    --color-primary:   #1B4F8A;  /* Dark Blue */
    --color-secondary: #D4AF37;  /* Gold */
    --color-accent:    #D4AF37;  /* Gold Accent */
}
```

---

## ⚠️ Disclaimer (Required)

The following disclaimer is displayed in the footer of every page:

> *VDO Immigration is a professional immigration consultancy. We provide expert assistance in preparing and presenting visa applications to the respective embassies. However, **we are not responsible for the outcome of any visa application**. Visa approvals are solely at the discretion of the respective embassies and immigration authorities.*

---

## 🔗 Related Links

- **VDO Immigration**: https://vdoimmigration.com
- **Get Admission Abroad** (Sister Concern): https://getadmissionabroad.com
- **SOP Writer** (Founder's Platform): https://sop-writer.in

---

## 📦 Dependencies (CDN)

| Library | Version | Purpose |
|---|---|---|
| Bootstrap | 5.3.2 | Grid, responsive layout, accordion |
| Swiper.js | 11.x | Hero slider, testimonials carousel |
| AOS | 2.3.4 | Scroll animations |
| Font Awesome | 6.5.0 | Icons |
| Google Fonts | – | Montserrat, Open Sans, Playfair Display |
