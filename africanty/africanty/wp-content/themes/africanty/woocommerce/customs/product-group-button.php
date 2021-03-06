<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$products_cats = function_exists('wc_get_product_category_list') ? wc_get_product_category_list($product->get_id()) : $product->get_categories();
list($fistpart) = explode(',', $products_cats);
?>
<div class="product-summary">
    <div class="product-interactions">
        <div class="btn-wishlist tip-top" data-prod="<?php echo $post->ID; ?>" data-tip="Wishlist">
            <div class="btn-link ">
                <div class="wishlist-icon">
                    <span class="pe-icon pe-7s-like"></span>
                </div>
            </div>
        </div>

        <?php
            if (!isset($lt_opt['disable-cart']) || !$lt_opt['disable-cart']):
                echo $_cart_btn;
            endif;
        ?>
        <div class="quick-view tip-top" data-prod="<?php echo $post->ID; ?>" data-tip="<?php esc_html_e('Quick View', 'altotheme'); ?>" data-head_type="<?php echo esc_attr($head_type);?>">
            <div class="btn-link">
                <div class="quick-view-icon">
                    <span class="pe-icon pe-7s-search"></span>
                </div>
            </div>
        </div>
        <div class="btn-compare tip-top" data-prod="<?php echo $post->ID; ?>" data-tip="Compare">
            <div class="btn-link ">
                <div class="compare-icon">
                    <span class="pe-icon pe-7s-edit"></span>
                </div>
            </div>
        </div>
        <div class="add-to-link">
            <?php echo shortcode_exists('yith_wcwl_add_to_wishlist') ? do_shortcode('[yith_wcwl_add_to_wishlist]') : ''; ?>
            <div class="woocommerce-compare-button">
                <?php echo shortcode_exists('yith_compare_button') ? do_shortcode('[yith_compare_button]') : ''; ?>
            </div>
        </div> 
    </div>
</div>
