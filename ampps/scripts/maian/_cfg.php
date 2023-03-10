<?php

/*----------------------------------------------------------------------------------
  SAMPLE CONFIG FILE:
  Rename or copy this file as '_cfg.php'.
  
  EDIT VALUES ON THE RIGHT, DO NOT CHANGE THE VALUES IN CAPITALS!!!
------------------------------------------------------------------------------------*/

/* DATABASE CONNECTION
   If you are unsure of your database credentials, contact your host
----------------------------------------------------------------------*/

/* MySQL host */
define('DB_HOST', '[[softdbhost]]');

/* MySQL username */
define('DB_USER', '[[softdbuser]]');

/* MySQL password */
define('DB_PASS', '[[softdbpass]]');

/* MySQL database name */
define('DB_NAME', '[[softdb]]');

/* Table prefix. You can have multiple installations in one database if you give each
   a unique prefix. Only numbers, letters, and underscores
*/
define('DB_PREFIX', '[[dbprefix]]');

/* Charset used to create database tables. If unsure, don't change. */
define('DB_CHAR_SET', 'utf8');

/* MySQL locale. If unsure, don't change.
   http://dev.mysql.com/doc/refman/5.0/en/locale-support.html
*/
define('DB_LOCALE', 'en_GB');

/* MySQL date/time adjustment. You can also use 'system'. May not need changing. */
define('DB_TIMEZONE', '+00:00');


/* SECURITY SALT / HASH
   Random mix of alphanumeric and special characters to encrypt session/cookie data.
   Generate hash @ https://www.maianmedia.com/services/keys/
-----------------------------------------------------------------------------------------*/

define('SECRET_KEY', '[[SECRET_KEY]]');

?>