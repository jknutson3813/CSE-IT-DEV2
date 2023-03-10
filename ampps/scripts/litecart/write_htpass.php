<?php
	
$username = '[[admin_username]]';
$enc_password = '[[encrypted_pass]]';
$htpasswd_file = '[[softpath]]/[[admin_folder]]/.htpasswd';

$htpasswd = file_get_contents($htpasswd_file);

if(preg_match('#(?<=^|\r\n|\r|\n)\#*('. preg_quote($username, '#') .'):.*?#', $htpasswd)){
	$htpasswd = preg_replace('#(?<=^|\r\n|\r|\n)(\#*'. preg_quote($username, '#') .'):[^\r|\n]+(\r\n?|\n)*#', '$1:{SHA}'. $enc_password . PHP_EOL, $htpasswd);
	echo '<htpasswd>'.$htpasswd.'</htpasswd>';
}
  
if(is_writable($htpasswd_file)){
	$htpasswd = file_put_contents($htpasswd_file, $htpasswd);
}
	
@unlink('write_htpass.php');
?>

	