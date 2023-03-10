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
$l['ftp_error-1'] = 'Could not Resolve Domain Name';
$l['ftp_error-2'] = 'Could not login with specified FTP details';
$l['ftp_error-3'] = 'Specified FTP Path does not exist';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['no_ftp_user'] = 'No FTP user was specified';
$l['no_backup_loc'] = 'No Backup Location was specified';
$l['no_backup_loc_name'] = 'No backup location name was specified';
$l['no_protocol'] = 'Invalid Protocol';
$l['no_server_host'] = 'No server host was specified';
$l['record_exists'] = 'Backup Location with the same path already exists';

//Theme Strings
$l['<title>'] = 'Ajouter un emplacement de sauvegarde';
$l['location_name'] = 'Nom de l\'emplacement';
$l['location_name_exp'] = 'Choisissez un nom pour votre emplacement de sauvegarde à des fins de référence';
$l['protocol'] = 'Service';
$l['protocol_exp'] = 'Sélectionnez le protocole par lequel nous communiquerons';
$l['server_host'] = 'Hôte du serveur (obligatoire)';
$l['server_host_exp'] = 'Entrez l\'hôte du serveur, par exemple ftp.mondomaine.com ou une adresse IP';
$l['port'] = 'Port';
$l['port_exp'] = 'Entrez dans le port pour vous connecter (Le port FTP par défaut est <b>21</b>)';
$l['ftp_user'] = 'Nom d\'utilisateur';
$l['ftp_user_exp'] = 'Le nom d\'utilisateur de votre compte FTP';
$l['ftp_pass'] = 'Mot de passe';
$l['ftp_pass_exp'] = 'Le mot de passe de votre compte FTP';
$l['backup_loc'] = 'Emplacement de la sauvegarde';
$l['rel_backup_loc_exp'] = 'Chemin relatif depuis le répertoire de l\'utilisateur FTP, par exemple /backups'; 
$l['abs_backup_loc_exp'] = 'Chemin absolu vers le répertoire de sauvegarde, par exemple /home/USERNAME/backups'; 
$l['dropbox_backup_loc_exp'] = 'Répertoire de sauvegarde par exemple /backups ou vous pouvez laisser vide pour permettre à '.APP.' de gérer le répertoire de sauvegarde';
$l['add_backup_loc'] = 'Ajouter un emplacement de sauvegarde';
$l['backup_loc_saved'] = 'Backup Location added successfully';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Retour aux paramètres';
$l['invalid_backup_loc'] = 'The backup path is not an absolute path. Please provide an absolute path'; 
$l['no_pass_pri'] = 'Please provide either a passoword or private key'; 
$l['off_rbackup'] = 'Backup on Remote Location is disabled by admin';
$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Authorization';
$l['dropbox_authorize'] = 'Autoriser';
$l['dropbox_authorization_exp'] = 'Accordez l\'accès à l\'application pour créer des sauvegardes dans votre compte Dropbox. Cliquez sur le bouton <strong style="color:#000">Autoriser</strong> et suivez les étapes. Notez le code généré et entrez le même dans la zone de texte <strong style="color:#000">"Code d\'autorisation"</strong> ci-dessous';
$l['dropbox_code'] = 'Code d\'authentification';
$l['dropbox_code_exp'] = 'Entrez le code généré après avoir autorisé l\'accès via le bouton <strong style="color:#000">Autoriser</strong> ci-dessus';
$l['dropbox_auth_tooltip'] = 'Cliquez sur ce bouton pour autoriser l\'accès à la boîte de dépôt';
$l['no_dropbox_access'] = 'Please authorize '.APP.' App in your Dropbox';
$l['token_gen_failed'] = 'Échec de la génération du jeton d\'accès à la boîte de dépôt';
$l['dropbox_backup_loc'] = 'Lieu de sauvegarde (facultatif)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Méthode d\'authentification';
$l['auth_password_exp'] = 'Sélectionnez la méthode d\'authentification';
$l['private_key'] = 'Clé privée';
$l['private_key_exp'] = 'Coller la clé privée ici';
$l['passphrase'] = 'Passphrase';
$l['passphrase_exp'] = 'Passphrase for the private key (Optional)';
$l['auth_method_pass'] = 'Mot de passe';
$l['auth_method_key'] = 'Clé SSH';

$l['gdrive'] = 'Google Drive';
$l['gdrive_auth_message'] = 'Vous serez invité à autoriser '.APP.' à accéder à votre Google Drive lors de la soumission du formulaire';
$l['gdrive_token_gen_failed'] = 'Échec de la génération du Google Drive Access Token';
$l['gdrive_err_access_denied'] = 'Il semble que vous ayez annulé la procédure d\'autorisation';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['rbackup_protocol_disabled'] = 'Backup on <b>&soft-1;</b> is disabled by Admin'; 

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Enter the port to connect (default WebDAV port is <b>80</b> for insecure and <b>443</b> for secure)';
$l['webdav_ftp_user_exp'] = 'Le nom d\'utilisateur de votre compte WebDAV';
$l['webdav_ftp_pass_exp'] = 'Le mot de passe de votre compte WebDAV';
$l['webdav_backup_loc_exp'] = 'Chemin relatif depuis le répertoire de l\'utilisateur WebDAV, par exemple /backups';
$l['webdav_server_host_exp'] = 'Entrez l\'hôte du serveur, par exemple webdav.mondomaine.com';
$l['no_webdav_connect'] = 'Échec de la connexion au serveur WebDAV';

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

