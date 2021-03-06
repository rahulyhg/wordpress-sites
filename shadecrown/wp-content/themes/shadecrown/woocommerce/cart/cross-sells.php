<?php
/**
 * Cross-sells
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product, $woocommerce_loop, $lt_opt;

$crosssells = WC()->cart->get_cross_sells();

if ( sizeof( $crosssells ) == 0 ) return;

$meta_query = WC()->query->get_meta_query();

$args = array(
    'post_type'           => 'product',
    'ignore_sticky_posts' => 1,
    'no_found_rows'       => 1,
    'posts_per_page'      => apply_filters( 'woocommerce_cross_sells_total', $posts_per_page ),
    'orderby'             => $orderby,
    'post__in'            => $crosssells,
    'meta_query'          => $meta_query
);

$products = new WP_Query( $args );

//$woocommerce_loop['columns'] = apply_filters( 'woocommerce_cross_sells_columns', $columns );

if ( $products->have_posts() ) :
    $_delay = 0;
    $_delay_item = (isset($lt_opt['delay_overlay']) && (int) $lt_opt['delay_overlay']) ? (int) $lt_opt['delay_overlay'] : 100;
    ?>
    <div<?php /* class="cross-sells"*/?>>
        <div class="title-block">
            <h5 class="heading-title">
                <span><?php esc_html_e( 'You may be interested in&hellip;', 'altotheme' ) ?></span>
            </h5>
            <div class="bery-hr medium"></div>
        </div>
        <?php //woocommerce_product_loop_start(); ?>
        <ul class="products grid large-block-grid-4 small-block-grid-2">
            <?php while ( $products->have_posts() ) :
                $products->the_post();
                wc_get_template('content-product.php', array(
                    'is_deals' => false,
                    '_delay' => $_delay,
                    'wrapper' => 'li'
                ));
                $_delay += $_delay_item;
            endwhile; // end of the loop. ?>
        </ul>
        <?php //woocommerce_product_loop_end(); ?>
    </div>
<?php endif;
wp_reset_query();
