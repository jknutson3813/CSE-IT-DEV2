<?php

@unlink('get_user.php');

function __getRunningUser(){
    // works on Windows and Linux, but might return null on systems that include "exec" in
    // disabled_functions in php.ini (typical in shared hosting)
    $runningUser = exec('whoami');

    if ($runningUser == null) {  // matches null, false and ""
        if (__is_windows()) {
            $runningUser = getenv('USERDOMAIN').'\\'.getenv('USERNAME');
        } elseif (function_exists('posix_getpwuid') && function_exists('posix_geteuid')) {
            $usr = posix_getpwuid(posix_geteuid());
            $runningUser = $usr['name'];
        }
    }
    return ($runningUser == null) ? '' : $runningUser;
}

function __is_windows(){
	
    static $is_windows = null;
    if (!isset($is_windows)) {
        $is_windows = strtoupper(substr(PHP_OS, 0, 3)) == 'WIN';
    }

    return $is_windows;
}

	$cronUser = __getRunningUser();
	echo '<get_user>'.$cronUser.'</get_user>';
	
?>