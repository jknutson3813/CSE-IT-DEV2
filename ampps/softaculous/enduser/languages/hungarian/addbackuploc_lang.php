<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackuploc_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
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

//Error Strings
$l['ftp_error-1'] = 'Nem lehet feloldani a domain nevet';
$l['ftp_error-2'] = 'Nem lehet belépni a megadott FTP adatokkal';
$l['ftp_error-3'] = 'A megadott FTP útvonal nem létezik';
$l['ftp_error'] = 'Nem lehet csatlakozni az FTP kiszolgálóhoz';
$l['no_ftp_user'] = 'Nincs megadva FTP felhasználó';
$l['no_backup_loc'] = 'Nincs megadva mentési hely';
$l['no_backup_loc_name'] = 'No backup location name was specified';
$l['no_protocol'] = 'Érvénytelen protokoll';
$l['no_server_host'] = 'Nincs megadva kiszolgáló';
$l['record_exists'] = 'Ezzel az útvonallal már létezik egy mentési hely';

//Theme Strings
$l['<title>'] = 'Mentési hely hozzáadása';
$l['location_name'] = 'Hely neve';
$l['location_name_exp'] = 'Válassza ki a mentési hely nevét';
$l['protocol'] = 'Protokoll';
$l['protocol_exp'] = 'Select the protocol by which '.APP.' will communicate';
$l['server_host'] = 'Server Host (Required)';
$l['server_host_exp'] = 'Enter the server host e.g. ftp.mydomain.com';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect (default FTP port is <b>21</b>)';
$l['ftp_user'] = 'Felhasználónév';
$l['ftp_user_exp'] = 'Az FTP fiókja felhasználóneve';
$l['ftp_pass'] = 'Jelszó';
$l['ftp_pass_exp'] = 'Az FTP fiókja jelszava';
$l['backup_loc'] = 'Mentési hely';
$l['rel_backup_loc_exp'] = 'Relatív útvonal az FTP felhasználó könyvtárához pl. /backups';
$l['abs_backup_loc_exp'] = 'Abszolút útvonal a mentési könyvtárhoz pl. /home/USERNAME/backups'; 
$l['dropbox_backup_loc_exp'] = 'A mentési könyvtár lehet pl. /backup vagy hagyja üresen, hogy az alkalmazás maga kezelje a mentési könyvtárat';
$l['add_backup_loc'] = 'Mentési hely hozzáadása';
$l['backup_loc_saved'] = 'Backup Location added successfully';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Vissza a beállításokhoz';
$l['invalid_backup_loc'] = 'A mentési útvonal nem egy abszolút útvonal. Kérjük, adjon meg egy abszolút útvonalat'; 
$l['no_pass_pri'] = 'Kérjük, adjon meg egy jelszót vagy a privát kulcsot'; 
$l['off_rbackup'] = 'Az adminisztrátor letiltotta a távoli helyre történő mentést';
$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Hitelesítés';
$l['dropbox_authorize'] = 'Authorize';
$l['dropbox_authorization_exp'] = 'Grant '.APP.' APP access to create backups in your Dropbox account. Click on the <b>Authorize</b> button and follow the steps. Make a note of the code generated and enter the same in the <b>Auth Code</b> text box below';
$l['dropbox_code'] = 'Hitelesítő kód';
$l['dropbox_code_exp'] = 'Enter the code generated after allowing access via <b>Authorize</b> button above';
$l['dropbox_auth_tooltip'] = 'Nyomja meg a gombot a Dropbox hozzáférés hitelesítéséhez';
$l['no_dropbox_access'] = 'A Dropbox hitelesítő kód legenerálása nem sikerült';
$l['token_gen_failed'] = 'A Dropbox hitelesítő kód legenerálása nem sikerült';
$l['dropbox_backup_loc'] = 'Mentési hely (opcionális)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Hitelesítési módszer';
$l['auth_password_exp'] = 'Válassza ki a hitelesítési módszert';
$l['private_key'] = 'Privát kulcs';
$l['private_key_exp'] = 'Illessze be ide a privát kulcsot';
$l['passphrase'] = 'Jelszó';
$l['passphrase_exp'] = 'Passphrase for the private key (Optional)';
$l['auth_method_pass'] = 'Jelszó';
$l['auth_method_key'] = 'SSH kulcs';

$l['gdrive'] = 'Google Drive';
$l['gdrive_auth_message'] = 'You will be prompted to authorize '.APP.' to access your Google Drive on submitting the form';
$l['gdrive_token_gen_failed'] = 'Failed to generate Google Drive Access Token';
$l['gdrive_err_access_denied'] = 'It seems you cancelled the authorization process';
$l['ampps_notify_premium'] = 'Ez a szolgáltatás az AMPPS prémium verziójában érhető el. Kérjük, vásárolja meg az <b><a href="https://ampps.com/clients">AMPPS Premium</a></b> verziót';

$l['rbackup_protocol_disabled'] = 'Az adminisztrátor letiltotta a(z) <b>&soft-1;</b> helyre történő mentést'; 

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Írja be a csatlakozáshoz használatos portot (alapértelmezett WebDAV port <b>80</b> a nem biztonságos és <b>443</b> a biztonságos csatlakozáshoz)';
$l['webdav_ftp_user_exp'] = 'WebDAV fiókjának felhasználóneve';
$l['webdav_ftp_pass_exp'] = 'WebDAV fiókjának jelszava';
$l['webdav_backup_loc_exp'] = 'Relatív útvonal a WebDAV felhasználó könyvtárából pl. /backups';
$l['webdav_server_host_exp'] = 'Írja be a kiszolgáló nevét pl. webdav.mydomain.com';
$l['no_webdav_connect'] = 'Nem sikerült csatlakozni a WebDAV kiszolgálóhoz';

$l['onedrive'] = 'Microsoft OneDrive';
$l['onedrive_auth_message'] = 'You will be prompted to authorize '.APP.' to access your OneDrive on submitting the form';
$l['onedrive_err_access_denied'] = 'It seems you cancelled the authorization process';
$l['onedrive_token_gen_failed'] = 'Failed to generate OneDrive Access Token';
$l['aws_s3bucket'] = 'Amazon S3';
$l['aws_endpoint'] = 'AWS S3 Endpoint';
$l['aws_endpoint_exp'] = 'Enter your AWS S3 Endpoint e.g. "s3.amazonaws.com"<br /> For more Information <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Click here</a>';
$l['aws_region'] = 'AWS S3 Region';
$l['aws_region_exp'] = 'Enter your AWS S3 Region e.g. "us-east-1"<br />  For more Information <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">Click here</a>';
$l['aws_bucketname'] = 'AWS S3 Bucket Name';
$l['aws_accessKey'] = 'AWS S3 Access Key';
$l['aws_secretKey'] = 'AWS S3 Secret Key';
$l['aws_backup_loc'] = 'AWS S3 Backup Location (Optional)';
$l['aws_backup_loc_exp'] = 'Backup Directory e.g. /backups  or you can leave empty to allow '.APP.' to manage the backup directory';
$l['aws_bucketname_exp'] = 'Enter the AWS S3 bucket name where you wish to create softaculous backups. If the bucket is not present, it will be created automatically<br /> For Bucket Naming Rules <a href="https://docs.aws.amazon.com/AmazonS3/latest/userguide/bucketnamingrules.html" target="_blank">Click here</a>';
$l['no_accessKey'] = 'Please provide the AWS S3 access key';
$l['no_secretKey'] = 'Please provide the AWS S3 secret key';
$l['no_endpoint'] = 'Please provide the AWS S3 endpoint';
$l['no_region'] = 'Please provide the AWS S3 region';
$l['no_bucket'] = 'Please provide the AWS S3 bucket name';
$l['create_bucket_failed'] = 'Failed to create bucket \'&soft-1;\'';

