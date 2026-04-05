<?php
/**
 * Generic Page Template
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
                <h1 class="page-hero-title"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<?php vdoi_breadcrumb(); ?>

<section class="section-padding">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
