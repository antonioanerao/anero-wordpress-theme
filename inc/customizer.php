<?php

function anero_customizer($wp_customize) {
	//Theme header Section
	require_once('customizer/header/theme-header-section.php');
}
add_action( 'customize_register', 'anero_customizer' );

