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
	$source_data['domhost'] = $temp['host'];
	
	$temp = parse_url($__settings['softurl']);
	$__settings['relativeurl'] = $temp['path'];
	$__settings['domhost'] = $temp['host'];
	
	//To get site_name, admin_email, admin_firstname and admin_lastname

	$query = "select `name` FROM `ohrm_organization_gen_info` WHERE `id`= 1;";
	$result = sdb_query($query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
	
	$query1 = "select * FROM `hs_hr_employee` WHERE `emp_number`= 1;";
	$result1 = sdb_query($query1, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
	
	////////////////////////
	
	$__settings['instance.identifier'] = base64_encode($result['0']['name'] . '_' . $result1['0']['emp_work_email'] . '_' . $result1['0']['emp_firstname'] . '_' . $result1['0']['emp_lastname'] . '_' . $__settings['domhost'] . '_' . '' . '_' . $__settings['ver']);
	
	$update2 = "UPDATE hs_hr_config SET `value` ='".$__settings['instance.identifier']."' WHERE `key`= 'instance.identifier';";	
	sdb_query($update2, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
	
	$__settings['instance.identifier_checksum'] = __createInstanceIdentifierChecksum($result['0']['name'], $result1['0']['emp_work_email'], $result1['0']['emp_firstname'], $result1['0']['emp_lastname'], $__settings['domhost'], '', $__settings['ver']);
	
	$update1 = "UPDATE hs_hr_config SET `value` ='".$__settings['instance.identifier_checksum']."' WHERE `key`= 'instance.identifier_checksum';";	
	sdb_query($update1, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);

	$__settings['csrf_secret'] = __createCsrfKey();
	$update = "UPDATE hs_hr_config SET `value` ='".$__settings['csrf_secret']."' WHERE `key`= 'csrf_secret';";	
	sdb_query($update, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
	
	sclone_replace($replace_data, $__settings['softpath'].'/lib/confs/Conf.php', true);
	sclone_replace($replace_data, $__settings['softpath'].'/symfony/config/databases.yml', true);
	
	if(sfile_exists($__settings['softpath'].'/.htaccess')){
	
		// If the installation is on root domain we need to change the below relative URL
		if(is_dom_root($source_data['softpath'])){
			$replace_data['RewriteBase \'/\''] = 'RewriteBase \''.$__settings['relativeurl'].'/\'';
			$replace_data['RewriteBase /'] = 'RewriteBase '.$__settings['relativeurl']. '/';
		}elseif(is_dom_root($__settings['softpath'])){
			$replace_data['RewriteBase \''.$source_data['relativeurl'].'/\''] = 'RewriteBase \'/\'';
			$replace_data['RewriteBase '.$source_data['relativeurl'].'/'] = 'RewriteBase /';
		}
		
		sclone_replace($replace_data, $__settings['softpath'].'/.htaccess', true);		
	}
	
	srm($__settings['softpath'].'/symfony/cache/');
	smkdir($__settings['softpath'].'/symfony/cache/', $globals['odc']);
	@schmod($__settings['softpath'].'/symfony/cache/', $globals['odc']);
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;
	
	return true;

}

function __createCsrfKey() {
	
	global $__settings;
	
	$csrfKey = '';

	while (strlen($csrfKey) <= 50) {
		$csrfKey .= base_convert(__crypt_random(), 10, 32);
	}

	return $csrfKey;
}

function __crypt_random($min = 0, $max = 0x7FFFFFFF)
{
    if ($min == $max) {
        return $min;
    }

    // see http://en.wikipedia.org/wiki//dev/random
    // if open_basedir is enabled file_exists() will ouput an "open_basedir restriction in effect" warning,
    // so we suppress it.
    if (@file_exists('/dev/urandom')) {
        static $fp;
        if (!$fp) {
            $fp = fopen('/dev/urandom', 'rb');
        }
        extract(unpack('Nrandom', fread($fp, 4)));

        // say $min = 0 and $max = 3.  if we didn't do abs() then we could have stuff like this:
        // -4 % 3 + 0 = -1, even though -1 < $min
        return abs($random) % ($max - $min) + $min;
    }

    /* Prior to PHP 4.2.0, mt_srand() had to be called before mt_rand() could be called.
       Prior to PHP 5.2.6, mt_rand()'s automatic seeding was subpar, as elaborated here:

       http://www.suspekt.org/2008/08/17/mt_srand-and-not-so-random-numbers/

       The seeding routine is pretty much ripped from PHP's own internal GENERATE_SEED() macro:

       http://svn.php.net/viewvc/php/php-src/branches/PHP_5_3_2/ext/standard/php_rand.h?view=markup */
    if (version_compare(PHP_VERSION, '5.2.5', '<=')) { 
        static $seeded;
        if (!isset($seeded)) {
            $seeded = true;
            mt_srand(fmod(time() * getmypid(), 0x7FFFFFFF) ^ fmod(1000000 * lcg_value(), 0x7FFFFFFF));
        }
    }

    static $crypto;

    // The CSPRNG's Yarrow and Fortuna periodically reseed.  This function can be reseeded by hitting F5
    // in the browser and reloading the page.

    if (!isset($crypto)) {
        $key = $iv = '';
        for ($i = 0; $i < 8; $i++) {
            $key.= pack('n', mt_rand(0, 0xFFFF));
            $iv .= pack('n', mt_rand(0, 0xFFFF));
        }
        switch (true) {
            case class_exists('Crypt_AES'):
                $crypto = new Crypt_AES(CRYPT_AES_MODE_CTR);
                break;
            case class_exists('Crypt_TripleDES'):
                $crypto = new Crypt_TripleDES(CRYPT_DES_MODE_CTR);
                break;
            case class_exists('Crypt_DES'):
                $crypto = new Crypt_DES(CRYPT_DES_MODE_CTR);
                break;
            case class_exists('Crypt_RC4'):
                $crypto = new Crypt_RC4();
                break;
            default:
                extract(unpack('Nrandom', pack('H*', sha1(mt_rand(0, 0x7FFFFFFF)))));
                return abs($random) % ($max - $min) + $min;
        }
        $crypto->setKey($key);
        $crypto->setIV($iv);
        $crypto->enableContinuousBuffer();
    }

    extract(unpack('Nrandom', $crypto->encrypt("\0\0\0\0")));
    return abs($random) % ($max - $min) + $min;
}

function __createInstanceIdentifierChecksum($organizationName, $email, $adminFirstName, $adminLastName, $host, $country, $ohrmVersion){
	
        if (is_null($host)) {
            $host = '';
        }
        if (is_null($country)) {
            $country = '';
        }
        $params = array(
            'organizationName' => $organizationName,
            'organizationEmail' => $email,
            'adminFirstName' => $adminFirstName,
            'adminLastName' => $adminLastName,
            'host' => $host,
            'country' => $country,
            'ohrmVersion' => $ohrmVersion
        );

        return base64_encode(serialize($params));
}

?>