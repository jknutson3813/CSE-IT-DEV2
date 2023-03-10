<?php

$rand = rand( 999999999, 9999999999 );

$salt = '$6$' . mb_substr( sha1( $rand ), 0, 16	);

$resp = crypt( (string) '[[admin_pass]]', $salt );

echo '<update_pass>'.$resp.'</update_pass>';

@unlink('update_pass.php');

?>