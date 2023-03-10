<?php
$resp = crypt('[[admin_pass]]', '[[methodAndSalt]]');
echo '<update_pass>'.$resp.'</update_pass>';
@unlink('update_pass.php');
?>