<?php

@unlink('keys.php');

$key1 = sodium_crypto_secretbox_keygen();
$secret_des_auth = base64_encode($key1);

$key2 = sodium_crypto_secretbox_keygen();
$secret_du_site = base64_encode($key2);

echo '<key1>'.$secret_des_auth.'</key1>';
echo '<key2>'.$secret_du_site.'</key2>';
	
?>