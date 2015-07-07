<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php wc_print_notices();  ?>

<?php do_action('woocommerce_before_customer_login_form'); ?>

<?php if (get_option('woocommerce_enable_myaccount_registration')=='yes') : ?>

<div class="row" id="customer_login">

	<div class="small-12 medium-6 columns">

<?php endif; ?>

		<div class="title"><?php _e( 'Registered Customers', THB_THEME_NAME ); ?></div>
		<form method="post" class="login row">
			<?php do_action( 'woocommerce_login_form_start' ); ?>
			<div class="small-12 medium-8 columns">
				<label for="username"><?php _e( 'Username or email', THB_THEME_NAME ); ?> <span class="required">*</span></label>
				<input type="text" class="input-text" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
			</div>
			<div class="small-12 medium-8 columns">
				<label for="password"><?php _e( 'Password', THB_THEME_NAME ); ?> <span class="required">*</span></label>
				<input class="input-text" type="password" name="password" id="password" />
			</div>
			<div class="small-12 medium-8 columns">
				<input name="rememberme" type="checkbox" id="rememberme" value="forever" class="custom_check"/> 
				<label for="rememberme" class="custom_label">
					<?php _e( 'Remember me', THB_THEME_NAME ); ?>
				</label>
			</div>
			<?php do_action( 'woocommerce_login_form' ); ?>
			<div class="small-12 medium-8 columns">
				<?php wp_nonce_field( 'woocommerce-login' ); ?>
				<input type="submit" class="button" name="login" value="<?php _e( 'Login', THB_THEME_NAME ); ?>" />
				<a class="lost_password" href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php _e( 'Lost Password?', THB_THEME_NAME ); ?></a>
			</div>
			<?php do_action( 'woocommerce_login_form_end' ); ?>
		</form>

<?php if (get_option('woocommerce_enable_myaccount_registration')=='yes') : ?>

	</div>

	<div class="small-12 medium-6 columns">

		<div class="title"><?php _e( 'Register', THB_THEME_NAME ); ?></div>

		<form method="post" class="register row">
			<?php do_action( 'woocommerce_register_form_start' ); ?>
			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
				<div class="small-12 medium-8 columns">
					<label for="reg_username"><?php _e( 'Username', THB_THEME_NAME ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				</div>

			<?php endif; ?>
			<div class="small-12 medium-8 columns">
				<label for="reg_email"><?php _e( 'Email', THB_THEME_NAME ); ?> <span class="required">*</span></label>
				<input type="email" class="input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
			</div>
			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
			<div class="small-12 medium-8 columns">
				<label for="reg_password"><?php _e( 'Password', THB_THEME_NAME ); ?> <span class="required">*</span></label>
				<input type="password" class="input-text" name="password" id="reg_password" value="<?php if (isset($_POST['password'])) echo esc_attr($_POST['password']); ?>" />
			</div>
			<?php endif; ?>
			<!-- Spam Trap -->
			<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>
			
			<?php do_action( 'woocommerce_register_form' ); ?>
			<?php do_action( 'register_form' ); ?>

			<div class="small-12 medium-8 columns">
				<?php wp_nonce_field( 'woocommerce-register' ); ?>
				<input type="submit" class="button" name="register" value="<?php _e( 'Register', THB_THEME_NAME ); ?>" />
			</div>
			<?php do_action( 'woocommerce_register_form_end' ); ?>
		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action('woocommerce_after_customer_login_form'); ?>