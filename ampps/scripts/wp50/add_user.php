<?php

@unlink(__FILE__);

// Validate if the request is from Softaculous
if($_REQUEST['pass'] != '[[autopass]]'){
	die("Unauthorized Access");
}

require_once('wp-blog-header.php');

$user_data = '[[user_data]]';
$user_data = unserialize($user_data);

$add = wp_insert_user($user_data);

$ret = array();

if(is_wp_error($add)){
	$ret['error'] = $add->get_error_messages();
}else{
	$ret['done'] = 1;
}

echo '<add_user>'.serialize($ret).'</add_user>';

exit(0);