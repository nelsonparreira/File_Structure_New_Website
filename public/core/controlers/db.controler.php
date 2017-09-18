<?php
/**
 * contain all the functions to connect to the databases
 *
 * Version: 0.1
 * based: PHP security - Codecourse youtube
 *
 * Last Update:
 * date: 12/09/2017
 * Author: Nelson Parreira
 */


//Name of the host
define("DB_HOST", "localhost");
// Name of the user
define("DB_USER", "root");
//password
define("DB_PASS", "root");
//Database name
define("DB_NAME", "login");


/**
 * Connect to the database
 *
 * Only use constants like show on top.
 *
 * @param DB_HOST string
 *   contains the host name. nomally is 'localhost' ot '127.0.0.1'
 *
 * @param DB_USER string
 *   The user name you setup on the database
 *
 * @param DB_PASS string
 *   The password you setup on the database
 *
 * @param DB_NAMEstring
 *   The name of Database you choose
 */
//$db = new PDO("mysql:host=DB_HOST;dbname=DB_NAME",DB_USER, DB_PASS;




/*
*
*
* *****************************************************************************
*                               Avoid SQL Injection
*                              PDO prepared statements
* *****************************************************************************
* https://youtu.be/cgwWpd4SqIM?list=PLfdtiltiRHWFsPxAGO-SVPGhCbCwKWF_N

if (isset($_POST['email'])) {
  $email = $_POST['email'];

  $user = $db->prepared("SELECT * FROM users WHERE email = :email")

  $user->execute([
    'email' => $email;
  ]);

  if($user->rowCount()){
    die("Send email");
  }
}
 */
