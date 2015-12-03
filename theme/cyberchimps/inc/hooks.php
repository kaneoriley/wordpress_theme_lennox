<?php

// Calling action to be done before including header.
function cyberchimps_before_header() {
	do_action( 'cyberchimps_before_header' );
}

// Getting content for left sidebar.
function cyberchimps_add_sidebar_left() {
	get_sidebar( 'left' );
}

// Getting content for right sidebar.
function cyberchimps_add_sidebar_right() {
	get_sidebar( 'right' );
}

//Setting content classes for different sidebars
function cyberchimps_content_sbr_class( $classes ) {
	$classes[] = 'content-sidebar-right';

	return $classes;
}

function cyberchimps_content_sbl_class( $classes ) {
	$classes[] = 'content-sidebar-left';

	return $classes;
}

function cyberchimps_content_sb2_class( $classes ) {
	$classes[] = 'content-sidebar-2';

	return $classes;
}

function cyberchimps_content_sb2r_class( $classes ) {
	$classes[] = 'content-sidebar-2-right';

	return $classes;
}

/* Start of functions to add different classes for html elements to $classes[] */
function cyberchimps_class_container_fluid( $classes ) {
	$classes[] = 'container-fluid';

	return $classes;
}

function cyberchimps_class_row_fluid( $classes ) {
	$classes[] = 'row-fluid';

	return $classes;
}

function cyberchimps_class_span12( $classes ) {
	$classes[] = 'span12';

	return $classes;
}

function cyberchimps_class_span11( $classes ) {
	$classes[] = 'span11';

	return $classes;
}

function cyberchimps_class_span10( $classes ) {
	$classes[] = 'span10';

	return $classes;
}

function cyberchimps_class_span9( $classes ) {
	$classes[] = 'span9';

	return $classes;
}

function cyberchimps_class_span8( $classes ) {
	$classes[] = 'span8';

	return $classes;
}

function cyberchimps_class_span7( $classes ) {
	$classes[] = 'span7';

	return $classes;
}

function cyberchimps_class_span6( $classes ) {
	$classes[] = 'span6';

	return $classes;
}

function cyberchimps_class_span5( $classes ) {
	$classes[] = 'span5';

	return $classes;
}

function cyberchimps_class_span4( $classes ) {
	$classes[] = 'span4';

	return $classes;
}

function cyberchimps_class_span3( $classes ) {
	$classes[] = 'span3';

	return $classes;
}

function cyberchimps_class_span2( $classes ) {
	$classes[] = 'span2';

	return $classes;
}

function cyberchimps_class_span1( $classes ) {
	$classes[] = 'span1';

	return $classes;
}

/* End of functions to add different classes for html elements to $classes[] */

// Define default content class
add_filter( 'cyberchimps_content_class', 'cyberchimps_default_content_classes' );
function cyberchimps_default_content_classes( $classes ) {
	$classes[] = '';

	return $classes;
}

// Print out content class by applying filter.
function cyberchimps_filter_content_class() {
	// Separates classes with a single space, collates classes for content element
	echo 'class="' . esc_attr( join( ' ', apply_filters( 'cyberchimps_content_class', array() ) ) ) . '"';
}

// Define default container class
add_filter( 'cyberchimps_container_class', 'cyberchimps_default_container_classes' );
function cyberchimps_default_container_classes( $classes ) {
	$classes[] = 'row-fluid';

	return $classes;
}

// Print out container class by applying filter.
function cyberchimps_filter_container_class() {
	// Separates classes with a single space, collates classes for content element
	echo 'class="' . esc_attr( join( ' ', apply_filters( 'cyberchimps_container_class', array() ) ) ) . '"';
}

// Define default class for left sidebar
add_filter( 'cyberchimps_sidebar_left_class', 'cyberchimps_default_sidebar_left_classes' );
function cyberchimps_default_sidebar_left_classes( $classes ) {
	$classes[] = 'widget-area';

	return $classes;
}

// Print out class for left sidebar by applying filter.
function cyberchimps_filter_sidebar_left_class() {
	// Separates classes with a single space, collates classes for content element
	echo 'class="' . esc_attr( join( ' ', apply_filters( 'cyberchimps_sidebar_left_class', array() ) ) ) . '"';
}

// Define default class for right sidebar
add_filter( 'cyberchimps_sidebar_right_class', 'cyberchimps_default_sidebar_right_classes' );
function cyberchimps_default_sidebar_right_classes( $classes ) {
	$classes[] = 'widget-area';

	return $classes;
}

// Print out class for right sidebar by applying filter.
function cyberchimps_filter_sidebar_right_class() {
	// Separates classes with a single space, collates classes for content element
	echo 'class="' . esc_attr( join( ' ', apply_filters( 'cyberchimps_sidebar_right_class', array() ) ) ) . '"';
}