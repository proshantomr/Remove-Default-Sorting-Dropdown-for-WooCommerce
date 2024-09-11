<?php
/**
 * Plugin Name:       Remove Default Sorting Dropdown
 * Plugin URI:        https://woocopilot.com/plugins/remove-default-sorting-dropdown/
 * Description:       "One Cart Product" for WooCommerce limits customers to one product per cart, simplifying the shopping process for exclusive or niche products. Boost conversions and streamline checkout with this focused purchasing experience."
 * Version:           1.0.0
 * Requires at least: 6.5
 * Requires PHP:      7.2
 * Author:            WooCopilot
 * Author URI:        https://woocopilot.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       remove-default-sorting-dropdown
 * Domain Path:       /languages
 */

/**
    Remove Default Sorting Dropdown is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    any later version.

    Remove Default Sorting Dropdown is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Remove Default Sorting Dropdown. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/includes/class-admin-remove-default-sorting-dropdown.php';
require_once __DIR__ . '/includes/class-remove-default-sorting-dropdown.php';

/**
 * Initializing plugin.
 *
 * @since 1.0.0
 * @return object Plugin object.
 */
function Remove_Default_Sorting_Dropdown() {
    return new Remove_Default_Sorting_Dropdown(__FILE__, '1.0.0');
}
Remove_Default_Sorting_Dropdown();



