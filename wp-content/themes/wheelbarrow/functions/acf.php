<?php
/**
 * Return post meta if get_field() function does not exist - when ACF is disabeld
 *
 * @param	string	$key
 * @param	int			$post_id
 */
// if( ! function_exists( 'get_field' ) ) {
// 	function get_field( $key, $post_id = false ) {
// 		$post = get_post( $post_id );
// 		if( ! $post )
// 			return;

// 		return get_post_meta( $post_id, $key, true );
// 	}
// }