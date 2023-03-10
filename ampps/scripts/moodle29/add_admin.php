<?php

@unlink(__FILE__);

//Validate if the request is from Softaculous
if($_REQUEST['pass'] != '[[autopass]]'){
    die("Unauthorized Access");
}

require_once('config.php');
require_once('lib/adminlib.php');

$user_id = (int) '[[user_id]]';

$admins = array();
foreach (explode(',', $CFG->siteadmins) as $admin) {
    $admin = (int)$admin;
    if ($admin) {
        $admins[$admin] = $admin;
    }
}

$logstringold = implode(', ', $admins);

$admins[$user_id] = $user_id;

$logstringnew = implode(', ', $admins);

set_config('siteadmins', implode(',', $admins));
add_to_config_log('siteadmins', $logstringold, $logstringnew, 'core');

$ret = array();
$ret['done'] = 1;

echo '<add_admin>'.serialize($ret).'</add_admin>';

exit(0);