<?php
/**
 * Plugin Name: Inventory Presser - Pounds Sterling
 * Plugin URI: https://inventorypresser.com/downloads/pounds-sterling/
 * Description: Add-on for Inventory Presser. Changes currency symbol to £.
 * Version: 1.0.0
 * Author: Corey Salzano
 * Author URI: https://github.com/csalzano
 * Text Domain: invp-pounds-sterling
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package invp-pounds-sterling
 * @author Corey Salzano <corey@friday.systems>
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'invp_pounds_sterling' ) ) {
	add_filter( 'invp_currency_symbol', 'invp_pounds_sterling' );
	/**
	 * Returns the pounds sterling symbol "£".
	 *
	 * @return string
	 */
	function invp_pounds_sterling() {
		return '£';
	}
}
