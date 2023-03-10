<?php

//////////////////////////////////////////////////////////////
//===========================================================
// edit.php(For individual softwares)
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
// Note : The path of the edit package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

//The Edit process
function __edit($installation){

global $__settings, $globals, $setupcontinue, $software, $error, $replace_data;
		
	$__settings['admin_email'] = optPOST('admin_email');
	$__settings['admin_pass'] = optPOST('admin_pass');
	
	// Do we need to reset the password ?
	if(!empty($__settings['admin_pass'])){
	
		// We need the username
		if(empty($__settings['admin_email'])){
			$error[] = '{{err_no_email}}';
			return false;
		}
		
		// This is to get db details from import.php
		sp_include_once($software['path'].'/import.php');

		$r = call_user_func('__import_'.$software['softname'], $installation['softpath']);
		
		$__settings['softdbhost'] = $r['softdbhost'];
		$__settings['softdbuser'] = $r['softdbuser'];
		$__settings['softdbpass'] = $r['softdbpass'];
		$__settings['softdb'] = $r['softdb'];
		
		if(!empty($error)){
			return false;
		}
		
		//In older versions less than 4.5.0 user entries were stored in database
		if(sversion_compare($__settings['ver'], '4.5.0', '<')){
			$query = "SELECT `ID` FROM `Member` WHERE `Email` = '".$__settings['admin_email']."';";
			
			// Does this user exist ?
			$result = sdb_query($query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
			
			$userid = $result[0]['ID'];
		}else{
			//Since versions 4.5.0 user entries are stored in .env file we retrieve email and old password from the file
			$file = sfile($installation['softpath'].'/.env');
			
			if(empty($file)){
				$error[] = '{{err_openconfig}}';
				return false;
			}
			
			soft_preg_replace('/SS_DEFAULT_ADMIN_USERNAME=("|\')(.*?)("|\')\n/is', $file, $email, 2);
			soft_preg_replace('/SS_DEFAULT_ADMIN_PASSWORD=("|\')(.*?)("|\')/is', $file, $pass, 2);
		}
		
		if(empty($userid) && $__settings['admin_email']!= $email) {
			$error[] = '{{err_no_such_email}}';
			return false;			
		}else{
			
			//Versions older than 4.5.0 , we used to use update_pass.php for handling these passwords. For edit we have the same method defined in extend.php , which was defined in update_pass.php
			if(sversion_compare($__settings['ver'], '4.5.0', '<')){
				
				@sp_include_once($software['path'].'/extend.php');
				
				//Fetching salt from the database 
				$query = "SELECT `Salt` FROM `Member` WHERE `Email` = '".$__settings['admin_email']."';";				
				$result = sdb_query($query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
				
				$__settings['salt']  = $result[0]['Salt'];
				
				if(empty($__settings['salt'])){
					$error[] = 'Salt not found!';
					return false;
				}
				
				$__settings['methodAndSalt'] = '$2y$' . $__settings['salt'];
				
				//Encrypting password via extend.php __ad_pass_crypt() method
				$__settings['admin_pass'] = __ad_pass_crypt($__settings['admin_pass']);
			}else{
				//Change the plaintext password to new one for versions >= 4.5.0
				$replace_data['SS_DEFAULT_ADMIN_PASSWORD="'.$pass.'"'] = 'SS_DEFAULT_ADMIN_PASSWORD="'.$__settings['admin_pass'].'"';
			}
		
			if(!empty($error)){
				return false;
			}
			
			// Update the password now
			if(sversion_compare($__settings['ver'], '4.5.0', '<')){
				$update_query = "UPDATE `Member` SET `Password` = '".$__settings['admin_pass']."' WHERE `ID` = '".$userid."';";
				$result = sdb_query($update_query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
			}else{
				//Replace old password by new one in .env file through sclone_replace
				sclone_replace($replace_data, $installation['softpath'].'/.env', true);
				
			}
			
		}
		
	}
	
}


?>