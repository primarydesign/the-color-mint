<?php
/**
 * Show options for ordering
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
		<div class="small-12 medium-4 columns">
			<form class="woocommerce-ordering custom" method="get">
				<div class="select-wrapper">
					<select name="orderby" class="orderby">
						<?php $catalog_orderby_options = apply_filters( 'woocommerce_catalog_orderby', array(
									'menu_order' => __( 'Default sorting', THB_THEME_NAME ),
									'popularity' => __( 'Sort by popularity', THB_THEME_NAME),
									'rating'     => __( 'Sort by average rating', THB_THEME_NAME ),
									'date'       => __( 'Sort by newness', THB_THEME_NAME),
									'price'      => __( 'Sort by price: low to high', THB_THEME_NAME ),
									'price-desc' => __( 'Sort by price: high to low', THB_THEME_NAME )
								) );
						?>
						<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
							<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<?php
					// Keep query string vars intact
					foreach ( $_GET as $key => $val ) {
						if ( 'orderby' === $key || 'submit' === $key ) {
							continue;
						}
						if ( is_array( $val ) ) {
							foreach( $val as $innerVal ) {
								echo '<input type="hidden" name="' . esc_attr( $key ) . '[]" value="' . esc_attr( $innerVal ) . '" />';
							}
						} else {
							echo '<input type="hidden" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
						}
					}
				?>
			</form>
		</div>
	</div>
</div>