<?php
/**
 * contain all the functions to sanite input from the user
 *
 * Version: 0.1
 * based: PHP security - Codecourse youtube
 *
 * Last Update:
 * date: 12/09/2017
 * Author: Nelson Parreira
 */

 /*
 *
 *
 * *****************************************************************************
 *                          ESCAPE inputs and outputs
 * *****************************************************************************
  */
/**
 * Escape inputs
 *
 * Secure about whitespaces, backslashes and html quotes injections
 *
 * @param $data string
 *
 * @return $data sanitized
 */
 function e($data){
  //removes whitespace and other predefined characters from both sides of a string
  $data = trim($data);
  //removes backslashes
  $data = stripslashes($data);
  //encodes simple and double quotes
  $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
  //escaped data returned
  return $data;
 }


/*
*
*
* *****************************************************************************
*                          PASSWORDS
* *****************************************************************************
 */

/**
 * HASH a password
 *
 * @param $pass string
 *   the password to Hash
 *   Please setup the password column on the database us a 255 varchar caracters.
 *
 * @return the password hashed
 */
function hashPass($pass){
 return password_hash($pass, PASSWORD_DEFAULT, ['cost' => 12]);
}

/**
 * VERIFIES is a password
 *
 * @param $userpass string
 *   The password the user typed.(as it is. not hashed)
 * @param $dbpass string
 *   The hashed password strored on the database
 *
 * @return true if both are the same
 */
function verifyPass($userpass, $dbpass){
  return password_verify($userpass, $dbpass);
}


/*
*
*
* *****************************************************************************
*                         HttpOnly Cookies
* *****************************************************************************
 */

/**
 * Only use HttpOnly Cookies
 *
 * @param $key string
 *   key value
 * @param $value string
 *   cookie value
 * @param $time string
 *   Setup the duration time of the cookie in the format:
 *         "now"
 *         "+5 hours"
 *         '+30 days'
 *         "+1 week"
 *         "+1 week 3 days 7 hours 5 seconds"
 *         "next Monday"
 *         "3 October 2005"
 */
function setHttpCookie($key,$value,$time){
  $time = strtotime($time);
  setcookie( $key, $value, $time,'/', null, null, true );
}
