<?php
/**
 * Config-file for Zett. Change settings here to affect installation.
 *
 */


/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Zett paths.
 *
 */
define('ZETT_INSTALL_PATH', __DIR__ . '/..');
define('ZETT_THEME_PATH', ZETT_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(ZETT_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Zett variable.
 *
 */
$zett = array();


/**
 * Site wide settings.
 *
 */
$zett['lang']         = 'sv';
$zett['title_append'] = ' | Zett en webbtemplate';
$zett['header'] = <<<EOD
<img class='sitelogo' src='img/zett.png' alt='Zett Logo'/>
<span class='sitetitle'>Zett webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$zett['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Petrus Lidholm (pelle@lidholm.se) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


/**
* Theme related settings.
*
*/
$zett['stylesheets'] = array('css/style.css');
$zett['favicon']    = 'favicon.ico';


/**
 * Settings for JavaScript.
 *
 */
$zett['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$zett['jquery'] = null; // To disable jQuery
$zett['javascript_include'] = array();
//$zett['javascript_include'] = array('js/main.js'); // To add extra javascript files


/**
 * Google analytics.
 *
 */
$zett['google_analytics'] = 'UA-69900800-1'; // Set to null to disable google analytics
