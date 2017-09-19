<?php
/**
 * Contains all the configurations files of the application
 *
 * Version: 0.1
 * Last Update: 18/09/2017
 * 
 * date: 12/09/2017
 * Author: Nelson Parreira
 */

/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.

    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/

/* INCLUDES/*/
defined("INCLUDE_PATH")
    or define("INCLUDE_PATH", 'resources/includes/');
/* TEMPLATES*/
defined("TEMPLATE_PATH")
    or define("TEMPLATE_PATH", 'resources/templates/');
/* IMAGES LAYOUT*/
defined("IMG_LAYOUT_PATH")
    or define("IMG_LAYOUT_PATH", 'assets/images/layout/');
/* IMAGES CONTENT*/
defined("IMG_CONTENT_PATH")
    or define("IMG_CONTENT_PATH", 'assets/images/content/');





 
/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 

