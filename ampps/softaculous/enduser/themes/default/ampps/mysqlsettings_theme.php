<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function mysqlsettings_theme(){

global $theme, $globals, $softpanel, $user, $l, $error, $updates_available, $done;

softheader($l['<title>']);

echo '
<div class="bg">
	<div class="row sai_main_head mt-4" style="width:100%;" align="center">
		<div class="col-12 text-center">
			<span class="form-title"><img height="48" width="48" src="'.$theme['a_images'].'mysqlsettings.png" />'.$l['mysql_settings'].'</span>
		</div>
	</div><hr />';

	error_handle($error, '100%');

	if (isset($done) && $done == true){
		echo '<div align="center" class="alert alert-success" style="font-size:13px;">
				<a href = "#" class="close" data-dismiss="alert">&times;</a>'.$l['pass_changed'].
			'</div>';
		echo '<br /><a href="'.$globals['ind'].'act=security">'.$l['lbl_security'].'</a>';
	}else{
		echo '<form action="" method="post">
	
	<div class="row mt-4">
		<div class="col-sm-5 col-xs-12 px-4">
			<label for class="sai_head">MySQL Username:</label>
		</div>
		<div class="col-sm-7 col-xs-12 px-4">
			<span class="sai_head">root</span>
		</div>
	</div><br /><!---row end--->
		
	<div class="row mt-4">
		<div class="col-sm-5 col-xs-12 px-4">
			<label for="oldpass" class="sai_head">Old Password:</label><br /><span class="sai_exp2">'.$l['default'].'</span>
		</div>
		<div class="col-sm-7 col-xs-12 px-4">
			<input type="password" name="oldpass" id="oldpass" class="form-control" />
		</div>
	</div><br /><!---row end--->
				
	<div class="row mt-4">
		<div class="col-sm-5 col-xs-12 px-4">
			<label for="newpass" class="sai_head">New Password:</label>
		</div>
		<div class="col-sm-7 col-xs-12 px-4">
			<input type="password" name="newpass" id="newpass" class="form-control"/>
		</div>
	</div><br /><!---row end--->
	
	<div class="row mt-4">
		<div class="col-sm-5 col-xs-12 px-4">
			<label for="retypepass" class="sai_head">Retype Password:</label>
		</div>
		<div class="col-sm-7 col-xs-12 px-4">
			<input type="password" name="retypepass" id="retypepass" class="form-control"/>
		</div>
	</div><br /><!---row end--->
	
	<div class="row">	
		<div class="col-10 px-4 text-center">
			<input type="submit" name="changepass" value="Change Password" class="flat-butt"/>
		</div>
	</div><br />	
</div>';

	if($done==1)
	{
		echo '<tr>
		<td colspan="2" align="center">'.$l['pass_changed'].'</td>
		</tr>';
	}
	echo '</table>
	
		<div class="row" align="center">
			<div class="col-12 text-center mt-4">
			<a href="'.$globals['ind'].'act=security"><font size="2">Back to Security Center</font></a>
			</div>
		</div>';
}

softfooter();
}	
	
/*function died(){
print_r(error_get_last());
}
register_shutdown_function('died');*/
