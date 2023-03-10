<?php
// HTTP
define('HTTP_SERVER', '[[softurl]]/');

// HTTPS
define('HTTPS_SERVER', '[[softurl]]/');

// DIR
define('DIR_APPLICATION', '[[real_softpath]]/catalog/');
define('DIR_SYSTEM', '[[real_softpath]]/system/');
define('DIR_IMAGE', '[[real_softpath]]/image/');
define('DIR_LANGUAGE', '[[real_softpath]]/catalog/language/');
define('DIR_TEMPLATE', '[[real_softpath]]/catalog/view/theme/');
define('DIR_CONFIG', '[[real_softpath]]/system/config/');
define('DIR_CACHE', '[[real_softpath]]/system/storage/cache/');
define('DIR_DOWNLOAD', '[[real_softpath]]/system/storage/download/');
define('DIR_LOGS', '[[real_softpath]]/system/storage/logs/');
define('DIR_MODIFICATION', '[[real_softpath]]/system/storage/modification/');
define('DIR_UPLOAD', '[[real_softpath]]/system/storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '[[softdbhost]]');
define('DB_USERNAME', '[[softdbuser]]');
define('DB_PASSWORD', '[[softdbpass]]');
define('DB_DATABASE', '[[softdb]]');
define('DB_PORT', '3306');
define('DB_PREFIX', '[[dbprefix]]');
