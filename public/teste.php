<?php
/**
 * Tests all the functions defined on the file "security.controler.php"
 *
 * Version: 0.1
 * based: PHP security - Codecourse youtube
 *
 * Last Update:
 * date: 12/09/2017
 * Author: Nelson Parreira
 */
include_once 'core/controlers/security.controler.php';
include_once 'core/controlers/db.controler.php';
/*
*
*
* *****************************************************************************
*                          ESCAPE inputs and outputs
* *****************************************************************************

$string = "<script>alert('whitout escaping');</script>";
echo $string;
echo ("escapade string: " . e($string));
 */


/*
*
*
* *****************************************************************************
*                          PASSWORDS
* *****************************************************************************

$db_pass= hashPass("HelloWord");
echo $db_pass . "<br>";
$user_pass = "HelloWord";
if( verifyPass($user_pass, $db_pass) ){
  echo "TRUE!!!";
}
*/


/*
*
*
* *****************************************************************************
*                         HttpOnly Cookies
* *****************************************************************************
 */
//setHttpCookie('name','Nelson','+1 day');
//echo $_COOKIE['name'];







setToken();
echo "{$_SESSION['_token']}";













 ?>
