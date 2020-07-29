<?php
/**
 * Plugin Name: Wp-testing-Palo-It
 * Plugin URI: https://github.com/agosme/Tech4Good
 * Description: THis plugin is an extension of the original plugin wp-testing.
 * Version: 0.0.1
 * Author: PaloIT
 * Author URI: https://palo-it.com/fr/
 * License: GPL3
 * Text Domain: wp-testing
 * Domain Path: /languages
 */

require_once dirname(__FILE__) . '/src/bootstrap.php';

$WpTesting_Facade = new WpTesting_Facade(new WpTesting_WordPressFacade(__FILE__));
