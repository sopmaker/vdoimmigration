/**
 * VDO Immigration – Main JavaScript
 *
 * Handles: Hero Slider, Counter Animation, AOS, Contact Form, Back-to-Top, Navbar Scroll
 */

( function () {
    'use strict';

    /* ================================================
       HERO SLIDER
    ================================================ */
    function initHeroSlider() {
        var heroSlider = document.querySelector( '.hero-swiper' );
        if ( ! heroSlider ) return;

        new Swiper( '.hero-swiper', {
            loop:            true,
            autoplay:        {
                delay:            5500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            effect:          'fade',
            fadeEffect:      { crossFade: true },
            speed:           900,
            pagination:      {
                el:        '.hero-pagination',
                clickable: true,
            },
            navigation:      {
                prevEl: '.hero-prev',
                nextEl: '.hero-next',
            },
            a11y:            {
                prevSlideMessage: 'Previous slide',
                nextSlideMessage: 'Next slide',
            },
        } );
    }

    /* ================================================
       TESTIMONIALS SLIDER
    ================================================ */
    function initTestimonialsSlider() {
        var tSlider = document.querySelector( '.testimonials-swiper' );
        if ( ! tSlider ) return;

        new Swiper( '.testimonials-swiper', {
            loop:        true,
            autoplay:    { delay: 5000, disableOnInteraction: false },
            speed:       700,
            slidesPerView: 1,
            spaceBetween:  30,
            pagination:  {
                el:        '.testimonials-pagination',
                clickable: true,
            },
            breakpoints: {
                768:  { slidesPerView: 2 },
                1200: { slidesPerView: 3 },
            },
        } );
    }

    /* ================================================
       STAT COUNTER ANIMATION
    ================================================ */
    function initCounters() {
        var counters = document.querySelectorAll( '.stat-number[data-count]' );
        if ( ! counters.length ) return;

        var observed = false;

        var runCounters = function () {
            if ( observed ) return;
            counters.forEach( function ( el ) {
                var target = parseInt( el.getAttribute( 'data-count' ), 10 );
                if ( ! target ) return;

                var duration  = 2000;
                var start     = 0;
                var increment = target / ( duration / 16 );

                var timer = setInterval( function () {
                    start += increment;
                    if ( start >= target ) {
                        el.textContent = target.toLocaleString();
                        clearInterval( timer );
                    } else {
                        el.textContent = Math.floor( start ).toLocaleString();
                    }
                }, 16 );
            } );
            observed = true;
        };

        // Intersection observer to trigger when stats section is visible
        var statsSection = document.querySelector( '.stats-section' );
        if ( ! statsSection ) return;

        if ( 'IntersectionObserver' in window ) {
            var io = new IntersectionObserver( function ( entries ) {
                entries.forEach( function ( entry ) {
                    if ( entry.isIntersecting ) {
                        runCounters();
                        io.disconnect();
                    }
                } );
            }, { threshold: 0.3 } );
            io.observe( statsSection );
        } else {
            runCounters();
        }
    }

    /* ================================================
       AOS INIT
    ================================================ */
    function initAOS() {
        if ( typeof AOS !== 'undefined' ) {
            AOS.init( {
                duration: 700,
                easing:   'ease-out-cubic',
                once:     true,
                offset:   60,
            } );
        }
    }

    /* ================================================
       STICKY NAVBAR
    ================================================ */
    function initStickyNav() {
        var header = document.getElementById( 'vdoi-header' );
        if ( ! header ) return;

        var onScroll = function () {
            if ( window.scrollY > 80 ) {
                header.classList.add( 'scrolled' );
            } else {
                header.classList.remove( 'scrolled' );
            }
        };

        window.addEventListener( 'scroll', onScroll, { passive: true } );
        onScroll();
    }

    /* ================================================
       BACK TO TOP
    ================================================ */
    function initBackToTop() {
        var btn = document.getElementById( 'backToTop' );
        if ( ! btn ) return;

        window.addEventListener( 'scroll', function () {
            if ( window.scrollY > 400 ) {
                btn.classList.add( 'show' );
            } else {
                btn.classList.remove( 'show' );
            }
        }, { passive: true } );

        btn.addEventListener( 'click', function () {
            window.scrollTo( { top: 0, behavior: 'smooth' } );
        } );
    }

    /* ================================================
       CONTACT FORM (AJAX)
    ================================================ */
    function initContactForm() {
        var form = document.getElementById( 'vdoi-contact-form' );
        if ( ! form ) return;

        form.addEventListener( 'submit', function ( e ) {
            e.preventDefault();

            var submitBtn  = form.querySelector( '[type="submit"]' );
            var btnText    = submitBtn.querySelector( '.btn-text' );
            var btnLoading = submitBtn.querySelector( '.btn-loading' );
            var msgEl      = form.querySelector( '.form-message' );

            // Clear previous message
            msgEl.style.display = 'none';
            msgEl.className     = 'col-12 form-message mt-2';

            // Disable and show loading
            submitBtn.disabled = true;
            btnText.classList.add( 'd-none' );
            btnLoading.classList.remove( 'd-none' );

            // Gather form data
            var data       = new FormData( form );
            data.append( 'action', 'vdoi_contact' );
            data.append( 'nonce', ( typeof vdoiData !== 'undefined' ? vdoiData.nonce : '' ) );

            var ajaxUrl = typeof vdoiData !== 'undefined' ? vdoiData.ajaxUrl : '/wp-admin/admin-ajax.php';

            fetch( ajaxUrl, {
                method: 'POST',
                body:   data,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
            } )
            .then( function ( res ) {
                if ( ! res.ok ) {
                    throw new Error( 'Network response was not ok' );
                }
                return res.json();
            } )
            .then( function ( json ) {
                msgEl.style.display = 'block';
                if ( json.success ) {
                    msgEl.classList.add( 'success' );
                    msgEl.textContent = json.data.message;
                    form.reset();
                } else {
                    msgEl.classList.add( 'error' );
                    msgEl.textContent = json.data.message || 'Something went wrong. Please try again.';
                }
            } )
            .catch( function () {
                msgEl.style.display = 'block';
                msgEl.classList.add( 'error' );
                msgEl.textContent = 'Network error. Please try again or contact us directly.';
            } )
            .finally( function () {
                submitBtn.disabled = false;
                btnText.classList.remove( 'd-none' );
                btnLoading.classList.add( 'd-none' );

                // Scroll to message
                msgEl.scrollIntoView( { behavior: 'smooth', block: 'nearest' } );
            } );
        } );
    }

    /* ================================================
       SMOOTH SCROLL for anchor links
    ================================================ */
    function initSmoothScroll() {
        document.querySelectorAll( 'a[href^="#"]' ).forEach( function ( anchor ) {
            anchor.addEventListener( 'click', function ( e ) {
                var target = document.querySelector( this.getAttribute( 'href' ) );
                if ( target ) {
                    e.preventDefault();
                    var headerHeight = document.querySelector( '#vdoi-header' )
                        ? document.querySelector( '#vdoi-header' ).offsetHeight
                        : 70;
                    var top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 20;
                    window.scrollTo( { top: top, behavior: 'smooth' } );
                }
            } );
        } );
    }

    /* ================================================
       ACTIVE NAV LINK
    ================================================ */
    function initActiveNav() {
        var currentPath = window.location.pathname;
        var navLinks    = document.querySelectorAll( '#vdoiNavbar .nav-link' );

        navLinks.forEach( function ( link ) {
            var href = link.getAttribute( 'href' );
            if ( href && href !== '/' && currentPath.startsWith( href ) ) {
                link.closest( '.nav-item' ) && link.closest( '.nav-item' ).classList.add( 'active' );
            } else if ( href === '/' && currentPath === '/' ) {
                link.closest( '.nav-item' ) && link.closest( '.nav-item' ).classList.add( 'active' );
            }
        } );
    }

    /* ================================================
       INIT ALL
    ================================================ */
    function init() {
        initHeroSlider();
        initTestimonialsSlider();
        initCounters();
        initAOS();
        initStickyNav();
        initBackToTop();
        initContactForm();
        initSmoothScroll();
        initActiveNav();
    }

    if ( document.readyState === 'loading' ) {
        document.addEventListener( 'DOMContentLoaded', init );
    } else {
        init();
    }

} )();
