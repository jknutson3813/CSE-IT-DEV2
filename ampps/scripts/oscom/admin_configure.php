<?php
define('HTTP_SERVER', 'http://[[domhost]]');
define('HTTPS_SERVER', 'https://[[domhost]]');
define('HTTP_CATALOG_SERVER', 'http://[[domhost]]');
define('HTTPS_CATALOG_SERVER', 'https://[[domhost]]');
define('ENABLE_SSL', [[enable_ssl]]);
define('ENABLE_SSL_CATALOG', [[enable_ssl]]);

define('DIR_FS_DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('DIR_WS_ADMIN', '[[relativeurl]]/admin/');
define('DIR_FS_ADMIN', rtrim(DIR_FS_DOCUMENT_ROOT, '/\\') . DIR_WS_ADMIN);
define('DIR_WS_CATALOG', '[[relativeurl]]/');
define('DIR_FS_CATALOG', rtrim(DIR_FS_DOCUMENT_ROOT, '/\\') . DIR_WS_CATALOG);
define('DIR_WS_IMAGES', 'images/');
define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
define('DIR_WS_CATALOG_IMAGES', DIR_WS_CATALOG . 'images/');
define('DIR_WS_INCLUDES', 'includes/');
define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');
define('DIR_WS_CATALOG_LANGUAGES', DIR_WS_CATALOG . 'includes/languages/');
define('DIR_FS_CATALOG_LANGUAGES', DIR_FS_CATALOG . 'includes/languages/');
define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');
define('DIR_FS_CATALOG_XML', DIR_FS_CATALOG . 'xml/');
define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
define('DIR_WS_DOWNLOAD', DIR_WS_CATALOG . 'download/');
define('DIR_FS_CATALOG_FONTS', DIR_FS_ADMIN . 'includes/fonts/');
define('DIR_WS_TEMPLATES', DIR_WS_CATALOG . 'templates/');
define('DIR_FS_TEMPLATES', DIR_FS_CATALOG . 'templates/');

define('DB_SERVER', '[[softdbhost]]');
define('DB_SERVER_USERNAME', '[[softdbuser]]');
define('DB_SERVER_PASSWORD', '[[softdbpass]]');
define('DB_DATABASE', '[[softdb]]');
define('USE_PCONNECT', 'false');
define('STORE_SESSIONS', 'mysql');

define('INSTALLED_MICROTIME', '[[timestamp]].357');

