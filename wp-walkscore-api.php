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
				$msg = __( 'Walk Score successfully returned.','textdomain' );
				break;
			case 2:
				$msg = __( 'Score is being calculated and is not currently available.','textdomain' );
				break;
			case 30:
				$msg = __( 'Invalid latitude/longitude.','textdomain' );
				break;
			case 31:
				$msg = __( 'Walk Score API internal error.','textdomain' );
				break;
			case 40:
				$msg = __( 'Your WSAPIKEY is invalid.','textdomain' );
				break;
			case 41:
				$msg = __( 'Your daily API quota has been exceeded.','textdomain' );
				break;
			case 42:
				$msg = __( 'Your IP address has been blocked.','textdomain' );
				break;
			default:
				$msg = __( 'Sorry, response code is unknown.' );
				break;
		}
		return $msg;
	}

}