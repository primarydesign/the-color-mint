<?php 
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
	require_once('../../inc/ot-functions.php');
	$id = (isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '');
	
	Header("Content-type: text/css");
	error_reporting(0);
	
?>
<?php 
echo thb_google_webfont();
?>
/* Options set in the admin page */
body p { 
	<?php thb_typeecho(ot_get_option('body_type')); ?>
	color: <?php echo ot_get_option('text_color'); ?>;
}
#header {
	<?php thb_bgecho(ot_get_option('header_bg')); ?>
}
#footer {
	<?php thb_bgecho(ot_get_option('footer_bg')); ?>
}
#subfooter {
	<?php thb_bgecho(ot_get_option('subfooter_bg')); ?>
}
<?php if(ot_get_option('title_type')) { ?>
h1,h2,h3,h4,h5,h6 {
	<?php thb_typeecho(ot_get_option('title_type')); ?>	
}
<?php } ?>
/* Accent Color */
<?php if (ot_get_option('accent_color')) { ?>
#nav .sf-menu > li > a:hover,
#nav .sf-menu > li.menu-item-has-children:hover > a, 
#nav .sf-menu > li.menu-item-has-children > a.active,
.style3 #nav .sf-menu > li > a:hover, 
.style3 #nav .sf-menu > li > a.active,
ul.accordion > li > div.title,
dl.tabs dd.active a,
dl.tabs li.active a,
ul.tabs dd.active a,
ul.tabs li.active a,
dl.tabs dd.active a:hover,
dl.tabs li.active a:hover,
ul.tabs dd.active a:hover,
ul.tabs li.active a:hover,
.toggle .title.toggled,
.iconbox.top.type2 span,
.iconbox.left.type3 span,
.iconbox.right.type3 span,
.counter span,
.testimonials small {
  color: <?php echo ot_get_option('accent_color'); ?>;
}
#nav .dropdown,
#my-account-nav li.active a, 
#my-account-nav li.current-menu-item a,
.widget ul.menu li.active a,
.widget ul.menu li.current-menu-item a,
.pull-nine .widget ul.menu li.current-menu-item a,
.wpb_tour dl.tabs dd.active,
.wpb_tour dl.tabs li.active, 
.wpb_tour ul.tabs dd.active,
.wpb_tour ul.tabs li.active,
.iconbox.top.type2 span {
  border-color: <?php echo ot_get_option('accent_color'); ?>;
}
#nav .dropdown:after {
  border-color: transparent transparent <?php echo ot_get_option('accent_color'); ?> transparent;
}
#quick_cart .float_count,
.filters li a.active,
.badge.onsale,
.price_slider .ui-slider-range,
.btn:hover,
.button:hover,
input[type=submit]:hover,
.comment-reply-link:hover,
.btn.black:hover,
.button.black:hover,
input[type=submit].black:hover,
.comment-reply-link.black:hover,
.iconbox span,
.progress_bar .bar span,
.dropcap.boxed {
	background: <?php echo ot_get_option('accent_color'); ?>;	
}
<?php } ?>
/* Extra CSS */
<?php 
echo ot_get_option('extra_css');
?>