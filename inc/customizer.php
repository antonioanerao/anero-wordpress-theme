<?php

function anero_customizer($wp_customize) {
	//Theme header Section
	require_once('customizer/header/theme-header-section.php');
	
	//Panel Footer Settings
	require_once('customizer/footer/theme-panel-footer-settings.php');
	
	/* Social Media section start */
	require_once('customizer/footer/theme-social-media-settings.php');
}
add_action( 'customize_register', 'anero_customizer' );

