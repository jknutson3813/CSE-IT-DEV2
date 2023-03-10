<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 4
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Edited by:  Romain Fluttaz
// Date:       1 July 2009
// Time:       15:00 hrs
// Site:       http://botux.fr/
// ----------------------------------------------------------
// Edited by:  Michel LAURENT
// Date:       25th Augustus 2009
// Time:       18:00 hrs
// Site:       http://www.equipc.net
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

$l['no_lang'] = 'Aucune langue n\'a été choisie';
$l['wrong_lang'] = 'La langue que vous avez sélectionné n\'existe pas';
$l['no_timezone'] = 'Vous n\'avez pas sélectionné le fuseau horaire';
$l['timezone_invalid'] = 'Le fuseau horaire que vous avez sélectionné n\'est pas valide';
$l['backuploc_deleted'] = 'Backup location was deleted successfully';
$l['no_backup_loc_name'] = 'No such backup location found';

//Theme Strings
$l['<title>'] = APP.' - Paramètres utilisateur';
$l['choose_lang'] = 'Choisir la langue';
$l['exp_lang'] = 'Choisissez votre langue préférée';
$l['menu_options'] = 'Menu Options';
$l['menu_exp'] = 'Vous pouvez réduire et développer tous les menus latéraux !';
$l['timezone'] = 'Fuseau horaire';
$l['default_timezone'] = 'Défaut';
$l['expand'] = 'Développer';
$l['collapse'] = 'Réduire';
$l['edit_settings'] = 'Modifier les paramètres';
$l['settings'] = 'Paramètres utilisateur';
$l['settings_saved'] = 'Vos paramètres ont été sauvegardés avec succès';
$l['left_panel_bg'] = 'Choose Left Panel color';
$l['left_panel_bg_exp'] = 'This will change the background color of the Left Panel and Top Bar';
$l['text_color'] = 'Choose Left Panel Text color';
$l['text_color_exp'] = 'This will change the text color of the Left Panel and Top Bar';
$l['use_custom_color'] = 'Customize theme';
$l['exp_use_custom_color'] = 'If checked then '.APP.' will use the theme colors selected. If you want to reset the theme to default just uncheck the checkbox and save the settings';
$l['disable_suggestions'] = 'Disable '.APP.' Features suggestion';
$l['exp_disable_suggestions'] = 'This will disable '.APP.' features suggestion messages';
$l['reset'] = 'Reset';
$l['arrange_domain'] = 'Trier les domaines alphabétiquement';
$l['exp_arrange_domain'] = 'Si cette option est sélectionnée, la liste des domaines sous le menu déroulant <b>Choisir un domaine</b> dans le formulaire d\'installation sera triée par ordre alphabétique';
$l['your_setting'] = 'Your Settings';
$l['list_backup_locs'] = 'Lieux de sauvegarde';
$l['default'] = 'Par défaut';
$l['backuploc_name'] = 'Nom';
$l['backuploc'] = 'Lieu de sauvegarde';
$l['backuploc_edit'] = 'Éditer';
$l['backuploc_del'] = 'Effacer';
$l['conf_del'] = 'Are you sure you want to delete this backup location ?';
$l['add_backup_loc'] = 'Ajouter un emplacement de sauvegarde';
$l['local_folder'] = 'Dossier local';
$l['manage_sets'] = 'Plugin et ensemble de thèmes WordPress';
$l['exp_manage_sets'] = 'Install and create sets of plugins/themes';
$l['off_backup_au'] = 'Disable Backups before Auto Upgrade';
$l['exp_off_backup_au'] = 'If selected, backups will not be performed before upgrading installations or plugins and themes. Note: Make sure you have backups which you can use in case the upgrade fails.';

$l['backup_proto'] = 'Protocol';
$l['backup_ftp'] = 'FTP';
$l['backup_softftpes'] = 'FTPS';
$l['backup_softsftp'] = 'SFTP';
$l['backup_webdav'] = 'WebDAV';
$l['backup_dropbox'] = 'Dropbox';
$l['backup_gdrive'] = 'Google Drive';
$l['backup_onedrive'] = 'Microsoft OneDrive';
$l['backup_softaws'] = 'Amazon S3';