<?php

define('_JEXEC', 1);
 
// Fix magic quotes.
@ini_set('magic_quotes_runtime', 0);
 
// Maximise error reporting.
@ini_set('zend.ze1_compatibility_mode', '0');
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
/*
 * Ensure that required path constants are defined.
 */
if (!defined('JPATH_BASE'))
{
        define('JPATH_BASE', realpath(__DIR__));
}
 
define('JPATH_LIBRARIES', JPATH_BASE . '/libraries');
 
/**
 * Import the platform. This file is usually in JPATH_LIBRARIES 
 */
require_once JPATH_LIBRARIES . '/import.legacy.php';
 
/**
 * Import the application.
 */
require_once JPATH_BASE.'/includes/application.php';
 
 
// Instantiate the application.
$web = MyWebApp::getInstance('MyWebApp');
 
// Run the application
$web->execute();

?>
