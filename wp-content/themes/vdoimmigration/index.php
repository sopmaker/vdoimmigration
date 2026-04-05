<?php
/**
 * Index Template (Blog / Fallback)
 *
 * @package VDOImmigration
 */

get_header();
?>

<section class="page-hero page-hero-simple">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="page-hero-title"><?php bloginfo( 'name' ); ?></h1>
                <p class="page-hero-subtitle"><?php bloginfo( 'description' ); ?></p>
            </div>
        </div>
    </div>
</section>

<?php vdoi_breadcrumb(); ?>

<section class="section-padding">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="row g-4">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'vdoi-thumb', array( 'class' => 'card-img-top' ) ); ?></a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h3 class="card-title h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="card-text text-muted small"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary-vdoi btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="mt-5 text-center">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p class="text-center text-muted">No posts found.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
