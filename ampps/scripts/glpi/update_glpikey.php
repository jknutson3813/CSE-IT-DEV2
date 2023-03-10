<?php 
@unlink('update_glpikey.php');

$key = sodium_crypto_aead_chacha20poly1305_ietf_keygen();
echo '<glpikey>'.$key.'</glpikey>';

?>