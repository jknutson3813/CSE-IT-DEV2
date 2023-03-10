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
	
	$temp = parse_url($source_data['softurl']);
	$source_data['relativeurl'] = $temp['path'];
	
	$temp = parse_url($__settings['softurl']);
	$__settings['relativeurl'] = $temp['path'];
	
	// settings.xml
	if(sversion_compare($__settings['ver'], '6.0.19', '>=')){
		$replace_data['httpRoot="'.$source_data['relativeurl'].'/seeddms/"'] = 'httpRoot="'.$__settings['relativeurl'].'/seeddms/"';
	}else{
		$replace_data['httpRoot="'.$source_data['relativeurl'].'/"'] = 'httpRoot="'.$__settings['relativeurl'].'/"';
	}
	
	sclone_replace($replace_data, $__settings['softpath'].'/conf/settings.xml', true);
	
	if(sversion_compare($__settings['ver'], '6.0.19', '>=')){
		if(sfile_exists($__settings['softpath'].'/.htaccess')){
		
			// If the installation is on root domain we need to change the below relative URL
			if(is_dom_root($source_data['softpath'])){
				$replace_data['RewriteBase \'/\''] = 'RewriteBase \''.$__settings['relativeurl'].'\'';
				$replace_data['RewriteBase /'] = 'RewriteBase '.$__settings['relativeurl'];
				$replace_data['RedirectMatch 301 ^'] = 'RedirectMatch 301 ^'.$__settings['relativeurl'];
			}elseif(is_dom_root($__settings['softpath'])){
				$replace_data['RewriteBase \''.$source_data['relativeurl'].'\''] = 'RewriteBase \'/\'';
				$replace_data['RewriteBase '.$source_data['relativeurl']] = 'RewriteBase /';
				$replace_data['RedirectMatch 301 ^'.$source_data['relativeurl']] = 'RedirectMatch 301 ^';
			}
			
			sclone_replace($replace_data, $__settings['softpath'].'/.htaccess', true);		
		}
	}

// create symlink
if($globals['os'] != 'windows'){
	if(sversion_compare($__settings['ver'], '6.0.19', '>=')){
		// Have to remove this files so symlinks can be created
		srm($__settings['softpath'].'/pear/vendor/bin/generate_vcards');
		srm($__settings['softpath'].'/pear/vendor/bin/naturalselection');
		srm($__settings['softpath'].'/pear/vendor/bin/sabredav');
		srm($__settings['softpath'].'/pear/vendor/bin/vobject');
		srm($__settings['softpath'].'/pear/vendor/pear/log/README.rst');
		srm($__settings['softpath'].'/seeddms');
		srm($__settings['softpath'].'/www/controllers');
		srm($__settings['softpath'].'/www/inc');
		srm($__settings['softpath'].'/www/install');
		srm($__settings['softpath'].'/www/languages');
		srm($__settings['softpath'].'/www/op');
		srm($__settings['softpath'].'/www/out');
		srm($__settings['softpath'].'/www/pdfviewer');
		srm($__settings['softpath'].'/www/restapi');
		srm($__settings['softpath'].'/www/styles');
		srm($__settings['softpath'].'/www/views');
		srm($__settings['softpath'].'/www/webdav');
		srm($__settings['softpath'].'/www/.htaccess');
		srm($__settings['softpath'].'/www/index.php');
		srm($__settings['softpath'].'/www/views/bootstrap4/images');
		srm($__settings['softpath'].'/seeddms-6.0.19/views/bootstrap4/images');
	
		//php function to prepare symlinks on all platforms	
		symlink($__settings['softpath'].'/pear/vendor/sabre/vobject/bin/generate_vcards', $__settings['softpath'].'/pear/vendor/bin/generate_vcards');
		symlink($__settings['softpath'].'/pear/vendor/sabre/dav/bin/naturalselection', $__settings['softpath'].'/pear/vendor/bin/naturalselection');
		symlink($__settings['softpath'].'/pear/vendor/sabre/dav/bin/sabredav', $__settings['softpath'].'/pear/vendor/bin/sabredav');
		symlink($__settings['softpath'].'/pear/vendor/sabre/vobject/bin/vobject', $__settings['softpath'].'/pear/vendor/bin/vobject');
		symlink($__settings['softpath'].'/pear/vendor/pear/log/docs/guide.txt', $__settings['softpath'].'/pear/vendor/pear/log/README.rst');
		symlink($__settings['softpath'].'/seeddms-6.0.19/', $__settings['softpath'].'/seeddms');
		symlink($__settings['softpath'].'/seeddms/controllers', $__settings['softpath'].'/www/controllers');
		symlink($__settings['softpath'].'/seeddms/inc', $__settings['softpath'].'/www/inc');
		symlink($__settings['softpath'].'/seeddms/install', $__settings['softpath'].'/www/install');
		symlink($__settings['softpath'].'/seeddms/languages', $__settings['softpath'].'/www/languages');
		symlink($__settings['softpath'].'/seeddms/op', $__settings['softpath'].'/www/op');
		symlink($__settings['softpath'].'/seeddms/out', $__settings['softpath'].'/www/out');
		symlink($__settings['softpath'].'/seeddms/pdfviewer', $__settings['softpath'].'/www/pdfviewer');
		symlink($__settings['softpath'].'/seeddms/restapi', $__settings['softpath'].'/www/restapi');
		symlink($__settings['softpath'].'/seeddms/styles', $__settings['softpath'].'/www/styles');
		symlink($__settings['softpath'].'/seeddms/views', $__settings['softpath'].'/www/views');
		symlink($__settings['softpath'].'/seeddms/webdav', $__settings['softpath'].'/www/webdav');
		symlink($__settings['softpath'].'/seeddms/.htaccess', $__settings['softpath'].'/www/.htaccess');
		symlink($__settings['softpath'].'/seeddms/index.php', $__settings['softpath'].'/www/index.php');
		symlink($__settings['softpath'].'/www/views/bootstrap/images', $__settings['softpath'].'/www/views/bootstrap4/images');
		symlink($__settings['softpath'].'/seeddms-6.0.19/views/bootstrap/images', $__settings['softpath'].'/seeddms-6.0.19/views/bootstrap4/images');
	}else{
		srm($__settings['softpath'].'/pear/vendor/pear/log/README.rst');
		#srm($__settings['softpath'].'/pear/vendor/pear/net_smtp/README.rst');
		srm($__settings['softpath'].'/pear/vendor/bin/naturalselection');
		srm($__settings['softpath'].'/pear/vendor/bin/generate_vcards');
		srm($__settings['softpath'].'/pear/vendor/bin/sabredav');
		srm($__settings['softpath'].'/pear/vendor/bin/vobject');
	
		//php function to prepare symlinks on all platforms	
		symlink($__settings['softpath'].'/pear/vendor/pear/log/docs/guide.txt', $__settings['softpath'].'/pear/vendor/pear/log/README.rst');
		#symlink($__settings['softpath'].'/pear/vendor/pear/net_smtp/docs/guide.txt', $__settings['softpath'].'/pear/vendor/pear/net_smtp/README.rst');
		symlink($__settings['softpath'].'/pear/vendor/sabre/dav/bin/naturalselection', $__settings['softpath'].'/pear/vendor/bin/naturalselection');
		symlink($__settings['softpath'].'/pear/vendor/sabre/vobject/bin/generate_vcards', $__settings['softpath'].'/pear/vendor/bin/generate_vcards');
		symlink($__settings['softpath'].'/pear/vendor/sabre/dav/bin/sabredav', $__settings['softpath'].'/pear/vendor/bin/sabredav');
		symlink($__settings['softpath'].'/pear/vendor/sabre/vobject/bin/vobject', $__settings['softpath'].'/pear/vendor/bin/vobject');
	}
}
	
	//CHMOD
	@schmod($__settings['softdatadir'].'/data/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/www/ext/', $globals['odc'], 1);
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software, $globals;

	//SeedDMS does not work on windows because it creates symlink
	if($globals['os'] == 'windows'){
		$error[] = 'SeedDMS clone is not supported on windows.';
	}
	
	return true;

}

?>