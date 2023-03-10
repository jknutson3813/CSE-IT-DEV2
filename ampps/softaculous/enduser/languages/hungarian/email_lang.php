<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_lang.php
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

$l['no_email'] = 'Nincs email cím megadva';
$l['wrong_email'] = 'A megadott email cím nem érvényes';
$l['off_email_link'] = 'Az adminisztrátor letiltotta az e-mail beállításokat';

//Theme Strings
$l['<title>'] = APP.' - Email beállítások';
$l['emailsettings'] = 'Email beállítások';
$l['email_address'] = 'Email cím';
$l['email_exp'] = 'Címzett email címe';
$l['ins_email'] = 'Telepítési levelek';
$l['ins_email_exp'] = 'Küldjön levelet a telepítés részleteiről, ha új alkalmazást telepít';
$l['rem_email'] = 'Telepítés eltávolítása';
$l['rem_email_exp'] = 'Küldjön levelet, ha az alkalmazás eltávolításra került';
$l['edit_settings'] = 'Email beállítások mentése';
$l['settings_saved'] = 'Az email beállítások sikeresen elmentve';
$l['editdetail_email'] = 'Telepítések szerkesztése';
$l['editdetail_email_exp'] = 'Küldjön egy e-mailt, ha a telepítési részletek módosításra kerülnek';
$l['disable_all_notify_update'] = 'Minden Frissítési Értesítés Leállítása';
$l['disable_all_notify_update_exp'] = 'Ha be van jelölve, akkor nem fog értesítő e-mailt kapni a frissítésekről, amik <b>MIND</b> elérhetőek a telepítéséhez.';
$l['all_notify_update'] = 'Update Notifications Emails';
$l['all_notify_update_exp'] = 'Send an email notification for updates available for <b>ALL</b> your installations.';
$l['backup_email'] = 'Biztonsági mentés E-mailek';
$l['backup_email_exp'] = 'Küldjön egy e-mailt a biztonsági mentések részleteivel, mikor a biztonsági mentés telepítésre kerül';
$l['clone_email'] = 'Klón E-mailek';
$l['clone_email_exp'] = 'Küldjön egy e-mailt a telepítések részleteivel, mikor klónoz egy telepítést';
$l['restore_email'] = 'E-mailek visszaállítása';
$l['restore_email_exp'] = 'Küldjön egy e-mailt a visszaállítás részleteivel, mikor visszaállítja a telepítéseket';
$l['done'] = 'Kész';
$l['email_password_user'] = 'Jelszó küldése sima szöveges formában';
$l['email_password_user_exp'] = 'Ha kiválasztja, a jelszó sima szöveges formában kerül elküldésre a felhasználó e-mail címére telepítés, klónozás stb esetén.';
$l['import_email'] = 'Importálás e-mailek'; 
$l['import_email_exp'] = 'Az ön által importált telepítések adatait tartalmazó e-mail küldése'; 

$l['staging_email'] = 'Staging e-mailek';
$l['staging_email_exp'] = 'A telepítések adatait tartalmazó e-mail küldése, ha bármely telepítés staging környezetét létrehozza';
