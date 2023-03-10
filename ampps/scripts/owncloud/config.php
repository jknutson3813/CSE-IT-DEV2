<?php
$CONFIG = array (
  'instanceid' => '[[instanceid]]',
  'passwordsalt' => '[[passwordsalt]]',
  'secret' => '[[secret]]',
  'trusted_domains' => 
  array (
    0 => '[[domhost]]',
  ),
  'datadirectory' => '[[softdatadir]]',
  'overwrite.cli.url' => '[[softurl]]',
  'dbtype' => 'mysql',
  'version' => '10.11.0.6',
  'dbname' => '[[softdb]]',
  'dbhost' => '[[softdbhost]]',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => '[[softdbuser]]',
  'dbpassword' => '[[softdbpass]]',
  'allow_user_to_change_mail_address' => '',
  'logtimezone' => 'UTC',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '[[softpath]]/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '[[softpath]]/apps-external',
      'url' => '/apps-external',
      'writable' => true,
    ),
  ),
  'installed' => true,
);
