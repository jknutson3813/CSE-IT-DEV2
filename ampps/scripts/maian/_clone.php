<?php

//////////////////////////////////////////////////////////////
//===========================================================
// clone.php
//===========================================================
// SOFTACULOUS 
// Version : 4.2.8
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

//The Install process
function __clone(){

global $__settings, $error, $software, $globals, $replace_data, $source_data;

	//Do we meet the Minimum software requirements
	__requirements();
	
	if(!empty($error)){
		return false;
	}
	
	$temp = parse_url($__settings['softurl']);
	$__settings['relativeurl'] = $temp['path'];
	
	$temp = parse_url($source_data['softurl']);
	$source_data['relativeurl'] = $temp['path'];
	
	// connect.php
	$file = sfile($__settings['softpath'].'/control/connect.php');
	
	if(empty($file)){
		$error[] = 'Could not read the config file to get the details.';
		return false;
	}
	
	soft_preg_replace('/\ndefine\(("|\')SECRET_KEY("|\'),(\s*?)("|\')(.*?)("|\')\);/is', $file, $SECRET_KEY, 5);
	$__settings['SECRET_KEY'] = srandstr(18);
	$replace_data[$SECRET_KEY] = $__settings['SECRET_KEY'];
	
	soft_preg_replace('/\ndefine\(("|\')COOKIE_NAME("|\'),(\s*?)("|\')(.*?)("|\')\);/is', $file, $COOKIE_NAME, 5);
	$__settings['COOKIE_NAME'] = srandstr(18);
	$replace_data[$COOKIE_NAME] = $__settings['COOKIE_NAME'];
	
	soft_preg_replace('/\ndefine\(("|\')DB_PREFIX("|\'),(\s*?)("|\')(.*?)("|\')\);/is', $file, $__settings['dbprefix'], 5);
	
	sclone_replace($replace_data, $__settings['softpath'].'/control/connect.php', true);
	
	//sql
	$__settings['prodKey'] = strtoupper(srandstr(60));
	$__settings['apiKey'] = strtoupper(substr(md5(uniqid(rand(),1)),3,10).'-'.substr(md5(uniqid(rand(),1)),3,8));
	
	$update = "UPDATE ".$__settings['dbprefix']."settings SET prodKey='".$__settings['prodKey']."' , apiKey='".$__settings['apiKey']."' WHERE id=1;";
	sdb_query($update, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
	
	if(sfile_exists($__settings['softpath'].'/.htaccess')){
		
		// If the installation is on root domain we need to change the below relative URL
		if(is_dom_root($source_data['softpath'])){
			$replace_data['RewriteBase \'/\''] = 'RewriteBase \''.$__settings['relativeurl'].'\'';
			$replace_data['RewriteBase /'] = 'RewriteBase '.$__settings['relativeurl'];
		}elseif(is_dom_root($__settings['softpath'])){
			$replace_data['RewriteBase \''.$source_data['relativeurl'].'\''] = 'RewriteBase \'/\'';
			$replace_data['RewriteBase '.$source_data['relativeurl']] = 'RewriteBase /';
		}
		sclone_replace($replace_data, $__settings['softpath'].'/.htaccess', true);
	}
	
	// CHMOD
	@schmod($__settings['softpath'].'/admin/export/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/backups/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/logs/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/content/attachments/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/content/attachments-faq/', $globals['odc'], 1);
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;
	
	return true;

}

?>
