<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

add_action( 'woocommerce_single_product_summary', 'display_custom_field' );
function display_custom_field() {
    $custom_text = get_field( 'custom_field_text' );

    ?>
    <span class="woocommerce-summary__custom-field-text">
        <?php esc_html_e( $custom_text, 'astra-child' ); ?>
    </span>
    <?php
}
