<?php

// We do not need this file any more
@unlink('getdata.php');

$link = mysqli_connect('[[softdbhost]]','[[softdbuser]]', '[[softdbpass]]', '[[softdb]]');
$mysqli_host_info = mysqli_get_host_info($link);
$mysqli_client_info = mysqli_get_client_info($link);
$mysql_server_version = mysqli_get_server_info($link);
$php_version = PHP_VERSION;
$server_name = $_SERVER['SERVER_SOFTWARE'];

$detailed_value = explode(' ', php_uname());
$os_name = $detailed_value[0];
$release_name = $detailed_value[2];
$version_info = $detailed_value[3].' '.$detailed_value[4].' '.$detailed_value[5].' '.$detailed_value[6].' '.$detailed_value[7].' '.$detailed_value[8].' '.$detailed_value[9].' '.$detailed_value[10];

echo '<mysqli_host_info>'.$mysqli_host_info.'</mysqli_host_info>';
echo '<mysqli_client_info>'.$mysqli_client_info.'</mysqli_client_info>';
echo '<mysql_server_version>'.$mysql_server_version.'</mysql_server_version>';
echo '<php_version>'.$php_version.'</php_version>';
echo '<server_name>'.$server_name.'</server_name>';
echo '<os_name>'.$os_name.'</os_name>';
echo '<release_name>'.$release_name.'</release_name>';
echo '<version_info>'.$version_info.'</version_info>';

?>