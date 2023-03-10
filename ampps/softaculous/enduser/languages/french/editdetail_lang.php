<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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

$l['no_ins'] = 'Aucune installation n\a été soumise';
$l['wrong_ins_title'] = 'Mauvais ID d\'installation';
$l['wrong_ins'] = 'L\'identifiant d\'installation que vous avez soumis n\'existe pas';
$l['cant_remove_dir'] = 'Le répertoire ne peut pas être supprimé car il s\'agit du répertoire d\'origine. Veuillez décocher l\'option <b>Supprimer le répertoire</b> pour continuer sans supprimer le répertoire.';
$l['no_dir'] = 'Le répertoire d\'installation n\'existe pas !';
$l['no_datadir'] = 'Le répertoire de données n\'existe pas !';
$l['empty_datadir'] = 'Le répertoire de données ne peut pas être vide';
$l['no_wwwdir'] = 'Le répertoire Web n\'existe pas !';
$l['wrong_url'] = 'L\'URL et le nom du REPERTOIRE ne correspondent pas';
$l['wrong_wwwurl'] = 'L\'URL WEB et le nom du REPERTOIRE WEB ne correspondent pas';
$l['err_mysql_user'] = 'Le nom d\'utilisateur ou le mot de passe MySQL ou l\'hôte de la base de données est incorrect car une connexion n\'a pas pu être établie.';
$l['err_mysql_db'] = 'Le nom de la base de données MySQL est incorrect car la base de données n\'a pas pu être sélectionnée.';
$l['mail_path'] = 'Chemin';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Base de données MySQL';
$l['mail_dbuser'] = 'Utilisateur de la BD MySQL';
$l['mail_dbhost'] = 'Hôte de la BD MySQL';
$l['mail_dbpass'] = 'Mot de passe de la BD MySQL';
$l['mail_time'] = 'Moment de l\'Installation';
$l['mail_editdetail_time'] = 'Moment de la Modification';
$l['mail_subject'] = 'Détails des éléments modifiés de &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Répertoire des données';
$l['mail_wwwdir'] = 'Répertoire Web';
$l['mail_wwwurl'] = 'URL du répertoire Web';

//Theme Strings
$l['<title>'] = APP.' - Modifier';
$l['ins_details'] = 'Détails de l\'installation';
$l['info'] = 'Info';
$l['ins_softname'] = 'Logiciel';
$l['ins_num'] = 'Numéro de l\'installation';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Date de l\'installation';
$l['ins_path'] = 'Chemin';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL d\'administration';
$l['ins_db'] = 'Database Name';
$l['ins_dbuser'] = 'Utilisateur de la base de données';
$l['ins_dbpass'] = 'Mot de passe de la base de données';
$l['ins_dbhost'] = 'Hôte de la base de données';
$l['ins_datadir'] = 'Répertoire des données';
$l['ins_wwwdir'] = 'Répertoire Web';
$l['ins_wwwurl'] = 'URL du répertoire Web';
$l['ins_cron_command'] = 'Commande Cron';
$l['details_edited'] = 'Les détails de l\'installation ont été édités avec succès';
$l['version_edited'] = 'La version a été mise à jour dans nos archives.';
$l['return'] = 'Retour au sommaire';
$l['return_to_wpm'] = 'Return to WordPress Management';

$l['edit_ins'] = 'Modifier les détails de l\'installation';
$l['edit_dir'] = 'Répertoire';
$l['edit_datadir'] = 'Répertoire de données';
$l['edit_db'] = 'Nom de la base de données ';
$l['edit_dbuser'] = 'Utilisateur de la base de données';
$l['edit_dbpass'] = 'Mot de passe de la base de données';
$l['edit_dbhost'] = 'Hôte de la base de donnée';
$l['edit_url'] = 'URL';
$l['editins'] = 'Enregistrer les détails de l\'installation';
$l['mail_editdetail_ins'] = 'Les détails de l\'installation de &soft-1 ; ont été modifiés. Voici les détails modifiés : ';
$l['edit_wwwdir'] = 'Répertoire Web';
$l['edit_wwwurl'] = 'URL du répertoire Web';
$l['disable_notify_update'] = 'Désactiver les e-mails de notification de mise à jour';
$l['exp_disable_notify_update'] = 'Si la case est cochée, vous ne recevrez pas de notification par courrier électronique pour les mises à jour disponibles pour cette installation.';
$l['alreadyupdated'] = 'Hmm ... il semble que la version actuelle de l\'installation soit <b>&soft-1;</b> et non <b>&soft-2;</b>. <br />Cliquez ici pour mettre à jour les enregistrements '.APP.'.';
$l['edit_acc_detail'] = 'Modifier les détails du compte administratif';
$l['eu_auto_upgrade'] = 'Mise à jour automatique';
$l['exp_eu_auto_upgrade'] = 'Sélectionnez la préférence de mise à niveau automatique pour cette installation lorsqu\'une nouvelle version est disponible';
$l['auto_upgrade_plugins'] = 'Mise à jour automatique &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'Si coché, tous les plugins &soft-1; présents pour cette installation seront automatiquement mis à niveau vers la dernière version (toutes les 24 heures).';
$l['auto_upgrade_themes'] = 'Mise à jour automatique Themes &soft-1;';
$l['exp_auto_upgrade_themes'] = 'Si coché, tous les thèmes &soft-1; présents pour cette installation seront automatiquement mis à niveau vers la dernière version (toutes les 24 heures).';
$l['auto_backup'] = 'Sauvegardes automatisées';
$l['exp_auto_backup'] = APP.' effectuera des sauvegardes automatiques via CRON selon la fréquence que vous aurez choisie';
$l['auto_backup_rotation'] = 'Rotation des sauvegardes';
$l['exp_auto_backup_rotation'] = 'Si la limite de rotation des sauvegardes est atteinte, '.APP.' supprimera la sauvegarde la plus ancienne pour cette installation et en créera une nouvelle. Les sauvegardes utiliseront votre espace, choisissez donc la rotation des sauvegardes en fonction de l\'espace disponible sur votre serveur';
$l['no_backup'] = 'Ne pas sauvegarder';
$l['daily'] = 'Une fois par jour';
$l['weekly'] = 'Une fois par semaine';
$l['monthly'] = 'Une fois par mois';
$l['unlimited'] = 'Illimité';
$l['auto_backup_not_allowed'] = 'La fréquence de sauvegarde automatique que vous avez choisie n\'est pas valable';

$l['no_edit'] = 'The EDIT.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The EDIT FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_files'] = 'Select additional files/folders';
$l['select_files_exp'] = 'Please select the additonal files/folders associated with this installation. <br />This list will be used for operations like Clone, Backup and Removal of this installation';
$l['invalid_files_in_post_list'] = 'There were some invalid files/folders selected';
$l['select_files_list'] = 'Select additional files/folders from the following list';

$l['select_files_backup'] = 'Use above selected files/folders for Backup';
$l['select_files_backup_exp'] = 'If selected only the files/folders related to this installation will be backed up. <br />By default backup will include all the files/folders under this path';
$l['no'] = 'No (Backup all files and folders inside installation directory excluding subdomains)';
$l['yes'] = 'Yes (Backup standard application files/folders along with above selected files/folders)';
$l['check_all_edit'] = 'Check All';

$l['choose_theme'] = 'Install Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['demo'] = 'Demo';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. Select only if you want to change your current theme.';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';
$l['edit_dbpass_exp'] = 'New Database Password. <br/>Leave blank if you do not want to update the password';
$l['select_tables'] = 'Select additional database tables';
$l['select_tables_exp'] = 'Selected tables will be included in the database backup';

$l['backup_loc'] = 'Lieu de sauvegarde';
$l['exp_backup_loc'] = 'Choisissez l\'emplacement de sauvegarde à utiliser lors de la sauvegarde de cette installation';
$l['default'] = 'Par défaut';
$l['invalid_backup_location'] = 'Le lieu de sauvegarde soumis n\'existe pas';
$l['local_folder'] = 'Dossier local';

$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Heure';
$l['cron_day'] = 'Jour';
$l['cron_month'] = 'Mois';
$l['cron_weekday'] = 'En semaine';

$l['no_cron_min'] = 'Aucune minute Cron n\'a été spécifiée';
$l['no_cron_hour'] = 'Aucune heure Cron n\'a été spécifiée';
$l['no_cron_day'] = 'Aucun jour Cron n\'a été spécifiée';
$l['no_cron_month'] = 'Aucune mois Cron n\'a été spécifiée';
$l['no_cron_weekday'] = 'Aucun jour de la semaine Cron n\'a été spécifiée';

$l['custom_autobackup'] = 'Personnalisé';
$l['custom'] = 'Temps de Cron personnalisé';
$l['custom_autobackup_cron'] = 'Sauvegardes automatisées Cron time';
$l['custom_autobackup_cron_exp'] = 'Veuillez préciser les horaires de CRON pour les sauvegardes automatisées';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['done'] = 'Fait';
$l['error'] = 'Erreur';
$l['plugins_upgrade_now'] = 'Mettre à jour le(s) plugin(s) maintenant';
$l['theme_upgrade_now'] = 'Mettre à jour le thème maintenant';
$l['plugins_upgrade_success'] = 'Mise à jour réussie du/des plugin(s) !';
$l['theme_upgrade_success'] = 'Thème mis à jour avec succès !';
$l['fetch_db_details'] = 'Permettre à Softaculous de récupérer les détails de la base de données ?';

$l['edit_notes'] = 'Voici quelques notes importantes. Il est fortement recommandé de les lire ';
$l['domain_not_in_list'] = 'L\'URL affichée ne figure pas dans la liste de votre/vos domaine(s)';

$l['dont_auto_upgrade'] = 'Ne pas mettre à niveau automatiquement'; 
$l['minor_auto_upgrade'] = 'Mise à jour vers les versions <b>Mineurs</b> uniquement'; 
$l['major_auto_upgrade'] = 'Mise à jour vers la dernière version disponible (<b>Majeur</b> ainsi que <b>Mineur</b>)'; 
$l['auto_upgrade_major'] = '(Majeur and Mineur)'; 
$l['auto_upgrade_minor'] = '(Mineur)';

$l['wpc_return'] = 'Retour à la page des installations';

$l['rbackup_disabled'] = 'La sauvegarde sur les sites distants est désactivée par l\'administrateur';
$l['rbackup_protocol_disabled'] = 'La sauvegarde <b>&soft-1;</b> est désactivée par l\'administrateur';
$l['no_files'] = 'installation files missing!!';