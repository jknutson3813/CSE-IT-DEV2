<?php
// HTTP
define('HTTP_SERVER', '[[softurl]]/admin/');
define('HTTP_CATALOG', '[[softurl]]/');

// HTTPS
define('HTTPS_SERVER', '[[softurl]]/admin/');
define('HTTPS_CATALOG', '[[softurl]]/');

// DIR
define('DIR_APPLICATION', '[[real_softpath]]/admin/');
define('DIR_SYSTEM', '[[real_softpath]]/system/');
define('DIR_IMAGE', '[[real_softpath]]/image/');
define('DIR_STORAGE', '[[softdatadir]]/storage/');
define('DIR_CATALOG', '[[real_softpath]]/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '[[softdbhost]]');
define('DB_USERNAME', '[[softdbuser]]');
define('DB_PASSWORD', '[[softdbpass]]');
define('DB_DATABASE', '[[softdb]]');
define('DB_PORT', '3306');
define('DB_PREFIX', '[[dbprefix]]');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
