<?php
/**
* WP Walkscore API
*
* @package WP-Walkscore-API
*/

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Walkscore API Class.
 */
class WalkscoreAPI {


	/**
	 * Get Walkscore (https://www.walkscore.com/professional/api.php)
	 *
	 * @access public
	 * @param mixed $wsapikey Your Walk Score API Key. Contact us to get one. Required.
	 * @param mixed $latitude The latitude of the requested location. Required.
	 * @param mixed $longitude The longitude of the requested location.	Required.
	 * @param mixed $address The URL encoded address. Required.
	 * @param mixed $format Return results in XML or JSON (defaults to XML).
	 * @return void
	 */
	function get_walkscore( $wsapikey, $latitude, $longitude, $address, $format ) {

	}

	/**
	 * Response code message
	 *
	 * @param  [String] $code : Response code to get message from.
	 * @return [String]       : Message corresponding to response code sent in.
	 */
	public function response_code_msg( $code = '' ) {
		switch ( $code ) {
			case 1:
				$msg = __( 'Walk Score successfully returned.','text-domain' );
				break;
			case 2:
				$msg = __( 'Score is being calculated and is not currently available.','text-domain' );
				break;
			case 30:
				$msg = __( 'Invalid latitude/longitude.','text-domain' );
				break;
			case 31:
				$msg = __( 'Walk Score API internal error.','text-domain' );
				break;
			case 40:
				$msg = __( 'Your WSAPIKEY is invalid.','text-domain' );
				break;
			case 41:
				$msg = __( 'Your daily API quota has been exceeded.','text-domain' );
				break;
			case 42:
				$msg = __( 'Your IP address has been blocked.','text-domain' );
				break;
			default:
				$msg = __( 'Sorry, response code is unknown.' );
				break;
		}
		return $msg;
	}

}
