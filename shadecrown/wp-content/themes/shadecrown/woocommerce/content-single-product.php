<?php

/**
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */


global $post, $product, $lt_opt;

$permalinks     = get_option( 'woocommerce_permalinks' );
$category_slug  = empty( $permalinks['category_base'] ) ? _x( 'product-category', 'slug', 'altotheme' ) : $permalinks['category_base'];
?>

<div itemscope itemtype="http://schema.org/Product" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row lt-product-details-page">    
        <?php do_action( 'woocommerce_before_single_product' ); ?>    
        <div class="large-6 columns product-gallery">
            <?php do_action( 'woocommerce_before_single_product_summary' ); ?>
        </div>
        <div class="product-info large-6 small-12 columns left">
            <?php do_action( 'woocommerce_single_product_summary' ); ?>
        </div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <div class="product-details">
                <div class="row">
                    <div class="large-12 columns ">
                        <?php wc_get_template('single-product/tabs/tabs.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product">
        <?php do_action( 'woocommerce_after_single_product_summary' ); ?>
    </div>
</div>

<?php do_action( 'woocommerce_after_single_product' );