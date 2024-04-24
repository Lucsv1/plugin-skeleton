<?php

require 'vendor/autoload.php';

use LucasGalindo\Teste\Api\Api;
use LucasGalindo\Teste\Auth\Auth;
use LucasGalindo\Teste\Admin\Admin;
use LucasGalindo\Teste\Views\Views;


/**
 * Plugin Name:     teste
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     teste
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     teste
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Teste
 */

// Your code starts here.


if (!defined("ABSPATH")) {
    exit;
}

if (!class_exists("Teste")) {

    class Teste
    {
        public function __construct()
        {


            $api = new Api;

            $auth = new Auth;

            $admin = new Admin;

            $views = new Views;
        }
        public function define_constants()
        {
            define("TESTE_PATH", plugin_dir_path(__FILE__));
            define("TESTE_URL", plugin_dir_url(__FILE__));
            define("TESTE_VERSION", '1.0.0');
        }
        public function activate()
        {
        }
        public function deactivate()
        {
        }
        public function uninstall()
        {
        }
    }
}

if (class_exists('Teste')) {
    register_activation_hook(__FILE__, array('Teste', 'activate'));
    register_deactivation_hook(__FILE__, array('Teste', 'deactivate'));
    register_uninstall_hook(__FILE__, array('Teste', 'uninstall'));
    $locate_user = new Teste();
}
