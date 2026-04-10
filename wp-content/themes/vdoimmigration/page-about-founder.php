<?php
/**
 * Slug template fallback for About Founder page.
 *
 * Ensures founder content renders even when page template is not explicitly assigned.
 *
 * @package VDOImmigration
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require get_template_directory() . '/page-founder.php';
