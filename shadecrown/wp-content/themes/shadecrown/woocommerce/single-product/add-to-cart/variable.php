<?php
/**
 * Variable product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

global $product, $lt_opt;

if ($product->is_in_stock()) :

    $head_type = $lt_opt['header-type'];
    if (isset($_POST['head_type'])) {
        $head_type = $_POST['head_type'];
    }
    $available_variations = $available_variations === false ? $product->get_available_variations() : $available_variations;
    ?>
    <?php do_action('woocommerce_before_add_to_cart_form'); ?>
    <form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo (int) $product->get_id(); ?>" data-product_variations="<?php echo esc_attr(json_encode($available_variations)) ?>" id="lt_form_add_product_<?php echo (int) $product->get_id(); ?>" data-type="variations">
        <?php if (!empty($available_variations)) : ?>
            <table class="variations custom">
                <tbody>
                    <?php
                    $loop = 0;
                    foreach ($attributes as $name => $options) : $loop++;
                        ?>
                        <tr>
                            <td class="label"><label for="<?php echo sanitize_title($name); ?>"><?php echo wc_attribute_label($name); ?></label></td>
                            <td class="value">
                                <div class="select-wrapper">
                                    <select class="custom" id="<?php echo esc_attr(sanitize_title($name)); ?>" name="attribute_<?php echo sanitize_title($name); ?>">
                                        <option value=""><?php esc_html_e('Choose an option', 'altotheme') ?>&hellip;</option>
                                        <?php
                                        if (is_array($options)) {
                                            if (isset($_REQUEST['attribute_' . sanitize_title($name)])) {
                                                $selected_value = $_REQUEST['attribute_' . sanitize_title($name)];
                                            } elseif (isset($selected_attributes[sanitize_title($name)])) {
                                                $selected_value = $selected_attributes[sanitize_title($name)];
                                            } else {
                                                $selected_value = '';
                                            }
                                            // Get terms if this is a taxonomy - ordered
                                            if (taxonomy_exists($name)) {
                                                $orderby = wc_attribute_orderby($name);
                                                switch ($orderby) {
                                                    case 'name' :
                                                        $args = array('orderby' => 'name', 'hide_empty' => false, 'menu_order' => false);
                                                        break;
                                                    case 'id' :
                                                        $args = array('orderby' => 'id', 'order' => 'ASC', 'menu_order' => false, 'hide_empty' => false);
                                                        break;
                                                    case 'menu_order' :
                                                        $args = array('menu_order' => 'ASC', 'hide_empty' => false);
                                                        break;
                                                }
                                                $terms = get_terms($name, $args);

                                                foreach ($terms as $term) {
                                                    if (!in_array($term->slug, $options))
                                                        continue;

                                                    echo '<option value="' . esc_attr($term->slug) . '" ' . selected(sanitize_title($selected_value), sanitize_title($term->slug), false) . '>' . apply_filters('woocommerce_variation_option_name', $term->name) . '</option>';
                                                }
                                            } else {
                                                $sanitize = sanitize_title($selected_value) === $selected_value ? true : false;
                                                foreach ($options as $option) {
                                                    $selected = $sanitize ? selected($selected_value, sanitize_title($option), false) : selected($selected_value, $option, false);
                                                    $selected = $selected === '' ? $selected : ' ' . $selected;
                                                    echo '<option value="' . esc_attr($option) . '"' . $selected . '>' . esc_html(apply_filters('woocommerce_variation_option_name', $option)) . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <?php
                                if (sizeof($attributes) == $loop)
                                    echo '<a class="reset_variations" href="#reset">' . esc_html__('Clear selection', 'altotheme') . '</a>';
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php do_action('woocommerce_before_add_to_cart_button'); ?>
            <div class="single_variation_wrap" style="display:none;text-align:left">
                <?php do_action('woocommerce_before_single_variation'); ?>

                <div class="single_variation"></div>
                <div class="variations_button">
                    <?php woocommerce_quantity_input(); ?>
                    <button type="submit" class="single_add_to_cart_button lt_add_to_cart lt_add_to_cart_variation button alt" data-product_id="<?php echo (int) $product->get_id(); ?>" data-head_type="<?php echo esc_attr($head_type); ?>"><?php echo $product->single_add_to_cart_text(); ?></button>
                </div>
                <input type="hidden" name="add-to-cart" value="<?php echo (int) $product->get_id(); ?>" />
                <input type="hidden" name="product_id" value="<?php echo (int) $product->get_id(); ?>" />
                <input type="hidden" name="variation_id" value="" />

                <?php do_action('woocommerce_after_single_variation'); ?>
            </div>
            <?php do_action('woocommerce_after_add_to_cart_button'); ?>

        <?php else : ?>
            <p class="stock out-of-stock"><?php esc_html_e('This product is currently out of stock and unavailable.', 'altotheme'); ?></p>
        <?php endif; ?>
    </form>

    <?php do_action('woocommerce_after_add_to_cart_form'); ?>
    <?php

 endif;
