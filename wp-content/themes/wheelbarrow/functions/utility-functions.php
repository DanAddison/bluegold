<?php

if( !function_exists( 'user_has_role' ) ) {

	function user_has_role( $roles, $user_id = null ) {

		$roles = is_array( $roles ) ? $roles : array( $roles );

		$user = is_numeric( $user_id ) ? get_userdata( $user_id ) : wp_get_current_user();

		if( empty( $user ) )
			return false;

		return !empty( array_intersect( $roles, $user->roles ) );

	}

}



/**
 * Add pretty print utility function
 */
if( !function_exists( 'ppr' ) ) {
	// makes print_r output more readable
	function ppr() {

		if( func_num_args() === 0 )

			return FALSE;

		for( $i = 0; $i < func_num_args(); $i++ )

			if( user_has_role( 'administrator' ) )

				echo '<pre>' . print_r( func_get_arg( $i ), true ) . '</pre>';

	}
}