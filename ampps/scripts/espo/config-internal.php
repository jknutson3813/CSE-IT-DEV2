<?php
return [
  'database' => [
    'driver' => 'pdo_mysql',
    'host' => '[[softdbhost]]',
    'port' => '',
    'charset' => 'utf8mb4',
    'dbname' => '[[softdb]]',
    'user' => '[[softdbuser]]',
    'password' => '[[softdbpass]]'
  ],
  'smtpPassword' => '',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'isInstalled' => true,
  'microtimeInternal' => [[microtime]],
  'passwordSalt' => '[[passwordsalt]]',
  'cryptKey' => '[[cryptKey]]',
  'hashSecretKey' => '[[hashSecretKey]]',
  [[defaultPermissions]]
  'actualDatabaseType' => 'mysql',
  'actualDatabaseVersion' => '[[dbser_ver]]'
];
