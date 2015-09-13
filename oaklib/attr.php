<?php
/**
 * Main content container of the page attributes.
 *
 * @since  2.0.0
 * @access public
 * @param  array   $attr
 * @return array
 */
// add_filter( 'hybrid_attr_content', 'oakwood_attr_content', 10    );
function oakwood_attr_content( $attr ) {

	$attr['id']       = 'content';
	$attr['class']    = 'content';
	$attr['role']     = 'main';

	if ( ! is_singular( 'post' ) && ! is_home() && ! is_archive() )
		$attr['itemprop'] = 'mainContentOfPage';

	return $attr;
}