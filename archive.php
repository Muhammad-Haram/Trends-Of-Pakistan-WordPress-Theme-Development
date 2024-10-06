<?php get_header(); ?>

    <?php get_template_part('includes/section','menu'); ?>

    <?php get_template_part('includes/section','archive'); ?>

<?php
global $wp_query;

$big = 9999999;

echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages
));
?>


<?php get_footer(); ?>