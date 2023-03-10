<?php
  error_reporting(E_ALL);

  const HTTP_SERVER = '[[protocol]]://[[domhost]]';
  const COOKIE_OPTIONS = [
    'lifetime' => 0,
    'domain' => '[[domhost]]',
    'path' => '[[relativeurl]]/',
    'samesite' => 'Lax',
	[[secure]]
  ];
  const DIR_WS_CATALOG = '[[relativeurl]]/';

  date_default_timezone_set('America/New_York');

// If you are asked to provide configure.php details,
// please remove the data below before sharing.
  const DIR_FS_CATALOG = '[[softpath]]/';

  const DB_SERVER = '[[softdbhost]]';
  const DB_SERVER_USERNAME = '[[softdbuser]]';
  const DB_SERVER_PASSWORD = '[[softdbpass]]';
  const DB_DATABASE = '[[softdb]]';
