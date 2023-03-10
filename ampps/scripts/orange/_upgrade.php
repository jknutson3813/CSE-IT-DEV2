<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade.php(For individual softwares)
//===========================================================
// SOFTACULOUS 
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

/////////////////////////////////////////
// All functions in this PAGE must begin
// with TWO UNDERSCORE '__' to avoid 
// clashes with SOFTACULOUS Functions
// e.g. __funcname()
/////////////////////////////////////////

//////////////////////////////////////////
// Note : The path of the upgrade package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

// NOTE: $__settings will contain the installation information like PATH, URL. They are :
//       $__settings['ver'] - The version of the current installation
//		 $__settings['itime'] - When the software was installed
//		 $__settings['softpath'] - The current PATH
//		 $__settings['softurl'] - The URL of the software
//		 IF database was made by Softaclous
//		 $__settings['softdb'] - The Database name
//		 $__settings['softdbuser'] - Database User
//		 $__settings['softdbhost'] - Database Host
//		 $__settings['softdbpass'] - Database Password

//The Upgrade process
function __upgrade($version_from){

global $__settings, $error, $software, $globals, $notes;

	// CHMOD
	@schmod($__settings['softpath'].'/symfony/', $globals['odc']);
	@schmod($__settings['softpath'].'/symfony/cache/', $globals['odc']);
	@schmod($__settings['softpath'].'/symfony/log/', $globals['odc']);
	@schmod($__settings['softpath'].'/symfony/config/databases.yml', $globals['ofc']);
	@schmod($__settings['softpath'].'/lib/confs/Conf.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/upgrader/', $globals['odc']);
	@schmod($__settings['softpath'].'/upgrader/cache/', $globals['odc']);
	@schmod($__settings['softpath'].'/upgrader/log/', $globals['odc']);

	$file = sfile($__settings['softpath'].'/lib/confs/Conf.php');
	
	if(empty($file)){
		$error[] = 'Could not read the config file to get the Database Port.';
	}
	
	soft_preg_replace('/\$this\-\>dbport(\s*?)=(\s*?)("|\')(.*?)("|\');/is', $file, $port, 4);

	$notes = 'Please use the following details while Upgrading<br />
					Database Host: <b>'.$__settings['softdbhost'].'</b><br />
					Database port: <b>'.$port.'</b><br />
					Database User: <b>'.$__settings['softdbuser'].'</b><br />
					Database Password: <b>'.$__settings['softdbpass'].'</b><br />
					Database : <b>'.$__settings['softdb'].'</b><br /><br />
					After completing the script upgrade process please apply safe permissions to the config files: <br /><b>'.$__settings['softpath'].'/symfony/config/databases.yml</b><br /><b>'.$__settings['softpath'].'/lib/confs/Conf.php</b><br /><br />Also delete the install and upgrade directories:<br /><b>'.$__settings['softpath'].'/installer</b><br /><b>'.$__settings['softpath'].'/upgrader</b>';
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;

	//If there are some shorfalls then pass it to $error and return false
	
	return true;

}


//===========================
// Software Vendors Functions
//===========================

//Just Validate an email
function __email_address($email){

global $error;

	if(!emailvalidation($email)){
		$error[] = '{{err_wrongemail}}';
	}		
	return $email;
}

//The Upgrade Files
function __pre_unzip(){

global $__settings, $error, $software, $globals, $notes;

	srm($__settings['softpath'].'/symfony/cache/');
}

?>