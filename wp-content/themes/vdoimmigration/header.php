<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Bar -->
<div class="vdoi-topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 d-none d-md-flex align-items-center gap-4">
                <a href="mailto:info@vdoimmigration.com" class="topbar-link">
                    <i class="fas fa-envelope me-1"></i> info@vdoimmigration.com
                </a>
                <a href="tel:+919876543210" class="topbar-link">
                    <i class="fas fa-phone me-1"></i> +91 98765 43210
                </a>
                <span class="topbar-link">
                    <i class="fas fa-clock me-1"></i> Mon–Sat: 10AM – 7PM
                </span>
            </div>
            <div class="col-md-5 d-flex justify-content-end align-items-center gap-3">
                <div class="social-links">
                    <a href="#" aria-label="Facebook" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="WhatsApp" class="social-link whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-cta-topbar">
                    Free Consultation
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<header id="vdoi-header" class="vdoi-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="brand-logo">
                    <div class="brand-logo-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <div class="brand-logo-text">
                        <span class="brand-name">VDO<span class="brand-accent">Immigration</span></span>
                        <span class="brand-tagline">Your Visa, Our Priority</span>
                    </div>
                </div>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#vdoiNavbar" aria-controls="vdoiNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="vdoiNavbar">
                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'navbar-nav ms-auto align-items-lg-center',
                    'container'       => false,
                    'fallback_cb'     => 'vdoi_fallback_menu',
                    'walker'          => new VDOI_Nav_Walker(),
                ) );
                ?>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary-vdoi ms-lg-3 nav-cta-btn">
                    <i class="fas fa-comments me-1"></i> Get Consultation
                </a>
            </div>
        </div>
    </nav>
</header>

<?php
/**
 * Fallback menu when no menu is assigned
 */
function vdoi_fallback_menu() {
    echo '<ul class="navbar-nav ms-auto align-items-lg-center">';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    echo '<li class="nav-item dropdown">';
    echo '<a class="nav-link dropdown-toggle" href="' . esc_url( home_url( '/services/' ) ) . '" data-bs-toggle="dropdown">Services</a>';
    echo '<ul class="dropdown-menu">';
    $services = array(
        'study-visa'   => 'Study Visa',
        'tourist-visa' => 'Tourist Visa',
        'work-visa'    => 'Work Visa',
        'pr-pathway'   => 'PR Pathway',
        'family-visa'  => 'Family Visa',
        'visitor-visa' => 'Visitor Visa',
    );
    foreach ( $services as $slug => $title ) {
        echo '<li><a class="dropdown-item" href="' . esc_url( home_url( '/services/' . $slug . '/' ) ) . '">' . esc_html( $title ) . '</a></li>';
    }
    echo '</ul></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( home_url( '/about/' ) ) . '">About Us</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( home_url( '/about-founder/' ) ) . '">Our Founder</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( home_url( '/contact/' ) ) . '">Contact</a></li>';
    echo '</ul>';
}

/**
 * Bootstrap 5 Nav Walker
 */
class VDOI_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="dropdown-menu">';
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $item    = $data_object;
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $has_children = in_array( 'menu-item-has-children', $classes );

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="nav-item ' . ( $has_children ? 'dropdown ' : '' ) . esc_attr( $class_names ) . '"' : ' class="nav-item' . ( $has_children ? ' dropdown' : '' ) . '"';

        $output .= '<li' . $class_names . '>';

        $atts           = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';

        $link_class = 'nav-link';
        if ( $depth > 0 ) {
            $link_class = 'dropdown-item';
        }
        if ( $has_children && $depth === 0 ) {
            $link_class      .= ' dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
        }
        $atts['class'] = $link_class;

        $atts     = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value       = 'href' === $attr ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title  = apply_filters( 'the_title', $item->title, $item->ID );
        $output .= '<a' . $attributes . '>' . esc_html( $title ) . '</a>';
    }

    public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}
?>
