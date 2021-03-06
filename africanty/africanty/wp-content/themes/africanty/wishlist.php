<?php
/**
 * Wishlist page template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Wishlist
 * @version 1.0.6
 */
global $wpdb, $woocommerce, $lt_opt;

if(isset($_REQUEST['add-to-cart']) && $_REQUEST['add-to-cart']) {
    echo '<div id="lt-before-load"><div class="lt-relative lt-center"></div></div>';
    echo '<script type="text/javascript">window.location.href="' . esc_url(YITH_WCWL()->get_wishlist_url('view')) . '";</script>';
    die;
}

// Start wishlist page printing
if (function_exists('wc_print_notices')) {
    wc_print_notices();
} else {
    $woocommerce->show_messages();
}

?>
<div id="yith-wcwl-messages"></div>
<form id="yith-wcwl-form" action="<?php echo esc_url(YITH_WCWL()->get_wishlist_url('view' . ( $wishlist_meta['is_default'] != 1 ? '/' . $wishlist_meta['wishlist_token'] : '' ))) ?>" method="post">
    <?php do_action('yith_wcwl_before_wishlist'); ?>
    <!-- WISHLIST TABLE -->
    <table class="shop_table cart wishlist_table" cellspacing="0" data-pagination="<?php echo esc_attr($pagination) ?>" data-per-page="<?php echo esc_attr($per_page) ?>" data-page="<?php echo esc_attr($current_page) ?>" data-id="<?php echo esc_attr($wishlist_meta['ID']) ?>">
        <thead>
            <tr>
                <th class="product-name" colspan="3"> 
                    <span class="nobr"><?php echo apply_filters('yith_wcwl_wishlist_view_name_heading', esc_html__('Product Name', 'altotheme')) ?></span>
                </th>

                <?php if ($show_price) : ?>
                    <th class="product-price">
                        <span class="nobr">
                            <?php echo apply_filters('yith_wcwl_wishlist_view_price_heading', esc_html__('Unit Price', 'altotheme')) ?>
                        </span>
                    </th>
                <?php endif ?>

                <?php if ($show_stock_status) : ?>
                    <th class="product-stock-status">
                        <span class="nobr">
                            <?php echo apply_filters('yith_wcwl_wishlist_view_stock_heading', esc_html__('Stock Status', 'altotheme')) ?>
                        </span>
                    </th>
                <?php endif ?>

                <?php if ($show_add_to_cart) : ?>
                    <th class="product-add-to-cart"></th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php
            if (count($wishlist_items) > 0) :
                foreach ($wishlist_items as $item) :
                    global $product;
                    $product = wc_get_product($item['prod_id']);

                    if ($product !== false && $product->exists()) :
                        ?>
                        <tr id="yith-wcwl-row-<?php echo (int) $item['prod_id'] ?>" data-row-id="<?php echo (int) $item['prod_id'] ?>">
                            <?php if ($is_user_owner): ?>
                                <td class="product-remove">
                                    <div>
                                        <a href="<?php echo esc_url(add_query_arg('remove_from_wishlist', $item['prod_id'])) ?>" class="remove" title="<?php esc_html_e('Remove this product', 'altotheme') ?>"><span class="icon-close"></span></a>
                                    </div>
                                </td>
                            <?php endif; ?>

                            <td class="product-thumbnail">
                                <a href="<?php echo esc_url(get_permalink(apply_filters('woocommerce_in_cart_product', $item['prod_id']))) ?>">
                                    <?php echo $product->get_image() ?>
                                </a>
                            </td>

                            <td class="product-name">
                                <a href="<?php echo esc_url(get_permalink(apply_filters('woocommerce_in_cart_product', $item['prod_id']))) ?>"><?php echo apply_filters('woocommerce_in_cartproduct_obj_title', $product->get_title(), $product) ?></a>
                            </td>

                            <?php if ($show_price) : ?>
                                <td class="product-price">
                                    <?php if ($product->get_price()) :
                                        echo $price_excl_tax ? apply_filters('woocommerce_cart_item_price_html', wc_price(LEE_WOO_LATEST ? wc_get_price_excluding_tax($product) : $product->get_price_excluding_tax()), $item, '') : apply_filters('woocommerce_cart_item_price_html', wc_price($product->get_price()), $item, '');
                                    else :
                                        echo apply_filters('yith_free_text', esc_html__('Free!', 'altotheme'));
                                    endif; ?>
                                </td>
                            <?php endif ?>

                            <?php if ($show_stock_status) : ?>
                                <td class="product-stock-status">
                                    <?php
                                    $availability = $product->get_availability();
                                    $stock_status = $availability['class'];

                                    if ($stock_status == 'out-of-stock') {
                                        $stock_status = "Out";
                                        echo '<span class="wishlist-out-of-stock">' . esc_html__('Out of Stock', 'altotheme') . '</span>';
                                    } else {
                                        $stock_status = "In";
                                        echo '<span class="wishlist-in-stock">' . esc_html__('In Stock', 'altotheme') . '</span>';
                                    }
                                    ?>
                                </td>
                            <?php endif ?>
                            <?php if (isset($lt_opt['disable-cart']) && !$lt_opt['disable-cart']) : ?>
                                <td class="product-add-to-cart">
                                    <?php if (isset($stock_status) && $stock_status != 'Out'): ?>
                                        <?php
                                        if (function_exists('wc_get_template')) {
                                            wc_get_template('loop/add-to-cart.php');
                                        } else {
                                            wc_get_template('loop/add-to-cart.php');
                                        }
                                        ?>
                                    <?php endif; ?>
                                </td>
                            <?php endif; ?>
                        </tr>
                        <?php
                    endif;
                endforeach;
            else:
                ?>
                <tr class="pagination-row">
                    <td colspan="6" class="wishlist-empty"><?php esc_html_e('No products were added to the wishlist', 'altotheme') ?></td>
                </tr>
            <?php
            endif;

            if (!empty($page_links)) :
                ?>
                <tr>
                    <td colspan="6"><?php echo $page_links; ?></td>
                </tr>
            <?php endif ?>
        </tbody>

    </table>

    <?php wp_nonce_field('yith_wcwl_edit_wishlist_action', 'yith_wcwl_edit_wishlist'); ?>

    <?php if ($wishlist_meta['is_default'] != 1): ?>
        <input type="hidden" value="<?php echo $wishlist_meta['wishlist_token'] ?>" name="wishlist_id" id="wishlist_id">
    <?php endif; ?>

    <?php do_action('yith_wcwl_after_wishlist'); ?>
</form>