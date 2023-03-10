<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_theme.php
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


function upgrade_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
	global $software, $soft, $info, $settings, $softins, $dbtype, $dbs, $upgraded, $__settings, $setupcontinue, $installations, $notes, $upgradableto, $act;
	
	
	// Give the staus
	if(optGET('ajaxstatus')){
		
		$_status = soft_progress(optGET('ajaxstatus'));
		
		$tmp_status = unserialize($_status[1]);
		$_status[1] = $tmp_status['current_status'];
		
		if(!empty($_status)){
			echo implode('|', $_status);
			return true;
		}
		
		// False call
		echo 0;
		return false;
	
	}
	
	softheader($l['<title>'].$software['name']);
	echo '
	<div id="install_win">';
	
		//First add the installation info
		if(empty($upgraded)){
			
			if(!empty($GLOBALS['alreadyupdated'])){
				
				echo '
				<form accept-charset="'.$globals['charset'].'" method="post" name="uprec" id="uprec" action="">
					<input type="hidden" name="updaterecord" value="1" />
					
					<div class="alert alert-warning">
						<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<center><a href="javascript:$_(\'uprec\').submit();" style="text-decoration:none;"><img src="'.$theme['images'].'notice.gif" /> &nbsp;  '.lang_vars($l['alreadyupdated'], array($GLOBALS['alreadyupdated'], $softins['ver'])).'</a></center>
					</div>
				'.csrf_display().'	
				</form><br />';
			}
			
			// You may not need an upgrade anymore.
			if(!empty($GLOBALS['no_update_required'])){
				
				echo '<div class="bg">
				<div class="alert alert-warning">
					<center><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['no_update_required'].'<center>
				</div>
				</div>
				<br />';
			
			}else{

				$return = '';
				$role = '';

				if(can_wordpress_manager($soft)){
					$return .= '<a role="button" href="'.$globals['ind'].'act=wordpress&insid='.$softins['insid'].'"><span class="btn btn-outline-primary">'.$l['return_to_wpm'].'</span></a>&nbsp';
					
					$role = 'role="button"';
				}

				$return .= '<a '.$role.' href="'.script_link($soft).'"><span class="btn btn-outline-primary">'.$l['return'].'</span></a>';
				
				//Filter to customize the return to link
				$return = apply_filters('return_link', $return, $act);
				
				echo '
				<div id="fadeout_div">
					<form accept-charset="'.$globals['charset'].'" name="installsoftware" method="post" action="" onsubmit="return checkform();" id="installsoftware">
					
						<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						
						function checkform(dosubmit){
							try{
								if(!formcheck() || !checkdbname(\'softdb\', true)){
									return false;
								}
							}catch(e){
								//Do nothing
							}
							$_("softsubmitbut").disabled = true;
							
							if(useprog){
								
								// Send a request to check the status
								progressbar.start();
								
								// Return false so that the form is not submitted
								return false;
							
							// This is OLD School !
							}else{		
								if(dosubmit == 1){			
									$_("installsoftware").submit();	
								}
								show_msg("'.$l['upgrading'].'");
							}
							return true;
						};
						
						var progressbar = {
							timer: 0,
							total_width: 0,	
							status_key: "",
							synctimer: 0,
							fadeout_div: "#fadeout_div",
							win_div: "#install_win",
							progress_div: "#progress_bar",
							formid: "#installsoftware",
							frequency: 8000,
							
							current: function(){
								try{
									var tmp_cur = Math.round(parseInt($_("progress_color").width)/parseInt($_("table_progress").width)*100);
									if(tmp_cur > 100){
										tmp_cur = 99;
									}
									return tmp_cur;
								}catch(e){
									return -1;	
								}
							},
							
							reset: function(){ try{
								clearTimeout(this.timer);
								$_("progress_color").width = 1;
							}catch(e){ }},
							
							move: function(dest, speed, todo){ try{
								var cur = this.current();
								if(cur < 0){
									clearTimeout(this.timer);
									return false;
								}
								var cent = cur + 1;
								var new_width = cent/100*this.total_width;
								if(new_width < 1){
									new_width = 1;
								}
								//alert(new_width+" "+dest+" "+cent);
								
								$_("progress_color").width = new_width;
								$_("progress_percent").innerHTML = "("+cent+" %)";
								
								if(cent < dest){
									this.timer = setTimeout("progressbar.move("+dest+", "+speed+")", speed);
								}else{
									eval(todo);	
								}
							}catch(e){ }},
							
							text: function(txt){ try{
								$_("progress_txt").innerHTML = txt;
							}catch(e){ }},
							
							sync: function(){
								if(progressbar.status_key.length < 2){
									return false;
								}
								$.ajax({
									url: window.location+"&ajaxstatus="+progressbar.status_key+"&random="+Math.random(),
									type: "GET",
									success: function(data){
										if(data == 0) return false;
										var tmp = data.split("|");
										var cur = progressbar.current();
										tmp[2] = (3000/(tmp[0]-cur));
										//alert(tmp);
										if(tmp[0] > cur){
											if(parseInt(tmp[2]) == 0){
												tmp[2] = 800;
											}
											progressbar.move(tmp[0], tmp[2]);
										}
										progressbar.text(tmp[1]);
										progressbar.synctimer = setTimeout("progressbar.sync()", progressbar.frequency);
									}
								});
							},
							
							sync_abort: function(){
								clearTimeout(this.synctimer);
							},
							
							start: function(){ try{
								this.post();
								this.reset();
								this.total_width = parseInt($_("table_progress").width);
								this.move(95, 800);
								this.status_key = $("#soft_status_key").attr("value");
								this.sync();
							}catch(e){ }},
							
							post: function(){
								
								// Scroll to the Top and show the progress bar
								goto_top();
								$(progressbar.fadeout_div).fadeOut(500, 
									function(){
										$(progressbar.progress_div).fadeOut(1);
										$(progressbar.progress_div).fadeIn(500);
									}
								);
								
								
								try{
									var sid = 0;
									sid = $_("softbranch").value;
								}catch(e){ 
									var sid = 0;
								}
								
								$.ajax({
									url: window.location+"&jsnohf=1&softbranch="+sid,
									type: "POST",
									data: $(progressbar.formid).serialize(),
									complete: function( jqXHR, status, responseText ) {
										
										progressbar.sync_abort();
										
										// Store the response as specified by the jqXHR object
										responseText = jqXHR.responseText;
										
										try{
											//alert(responseText);
											if(responseText.match(/\<\!\-\-PROC_DONE\-\-\>/gi)){
												progressbar.text("'.addslashes($l['finishing_process']).'");
												progressbar.move(99, 10, "$(progressbar.progress_div).fadeOut(1)");
											}else{
												progressbar.reset();
											}
										}catch(e){ }
										
										if ( jqXHR.state() == "resolved" ) {
										
											// #4825: Get the actual response in case
											// a dataFilter is present in ajaxSettings
											jqXHR.done(function( r ) {
												responseText = r;
											});
											//alert(responseText);
											// Create a dummy div to hold the results
											// inject the contents of the document in, removing the scripts
											// to avoid any "Permission Denied" errors in IE
											var newhtml = jQuery("<div>").append(responseText).find(progressbar.win_div).html();
											
											$(progressbar.win_div).animate({opacity: 0}, 1000, "", function(){
												$(progressbar.win_div).html(newhtml);
												new_theme_funcs_init();
											}).delay(50).animate({opacity: 1}, 500,function(){
												if($("#setupcontinue_url").length > 0){
													$(".third_url").css({"border": "2px solid #FBDB0C", "padding":"5px"});
													alert("'.$l['setup_partial'].'");
													$(".third_url").css({"border-color": "#fff", "transition":"60s"});
												}				
											});
											
											//alert(newhtml);
											
										}else{
											alert("Oops ... the connection was lost");
										}
									}
								});
							}
						};
						
						function show_msg(msg){	
							$_("show_txt").innerHTML = "<br /><br /> &nbsp; "+msg+" &nbsp; <img src=\"'.$theme['images'].'progress.gif\" />";
							$_("show_txt").style.display = "";
						}
						
						// Use the Progress Bar ?
						var useprog = 1;
						
						softemail = new Array();
						function softmail(){
							try{
								var sofdom = "softdomain";
								for(x in softemail){
									if(softemail[x] == true) continue;
									var temp = $_(x).value.split("@");
									$_(x).value = temp[0] + "@" + $_(sofdom).value;
								}
							}catch(e){
								return false;
							}
						};
						
						function reload_backup_options(){
							
							if($("#create_backup").is(":checked") == true){
								
								$("#backup_options").show();
								
								if($("#backup_type").val() == "advanced"){
									$("#advanced_backup").show();
								}else{
									$("#advanced_backup").hide();
								}
							
								if($("#backup_type").val() == "advanced"){
									$("#advanced_backup").show();
								}else{
									$("#advanced_backup").hide();
								}
								
							}else{
								$("#backup_options").hide();
								$("#advanced_backup").hide();
							}
							
						}
						
						$(document).ready(function(){
							
							reload_backup_options();
						
							$("#create_backup").change(function(){
								reload_backup_options();
							}); 
							
							$("#backup_type").change(function(){
								reload_backup_options();
							});
						}); 
						
						'.(!empty($_POST) ? '' : 'addonload(\'softmail();\');');
						
						echo '
						// ]]></script>';
						
						$array_keys = array_keys($upgradableto);
						
						echo '
						<div class="bg"><br />
						<div class="row sai_main_head mt-8 mb-4">
							<div class="col-12 text-center">
								<i class="fas fa-sync-alt fa-2x mr-2" style="color:#00A0D2;"></i>
								<span class="form-title">'.$l['prog_upgrading'].$scripts[$array_keys[0]]['name'].'</span>
							</div>
						</div>
						<div class="mt-4">
						<div class="m-3 card p-3">';

							if(!can_use_soft($soft, $use_msg)){
								echo '<center class="alert alert-warning">'.$use_msg.'</center>';
							}
						
							echo error_handle($error, "100%", 0, 1);
						
							echo '
							<div class="row mb-2">
								<div class="col-sm-5">
									<span class="sai_head mr-3 mb-2 d-inline-block">'.$l['softins_url'].'</span>
								</div>
								<div class="col-sm-7">
									<a href="'.$softins['softurl'].'" target="_blank">'.$softins['softurl'].'</a>
								</div>
							</div>
							
							<div class="row mb-2">
								<div class="col-sm-5">
									<span class="sai_head mr-2">'.$l['softins_path'].'</span>
								</div>
								<div class="col-sm-7">
									<span class="sai_info">'.$softins['softpath'].'</span>
								</div>
							</div>';
								
							if(count($array_keys) >= 2){
							
							echo '<div class="row mb-2 mt-2">
								<div class="col-sm-5">
									<label for="softbranch" class="sai_head">'.$l['select_version'].'</label>
								</div>
								<div class="col-sm-7">
									<select name="softbranch" id="softbranch" class="form-control">';
										foreach($upgradableto as $uk => $uv){
											echo '<option value='.$uk.' '.(@trim($_POST['softbranch']) == $uk ? 'selected="selected"' : '').'>'.$uv.'</option>';
										}
									echo '
									</select>';
								echo '</div>
							</div>';
							
							}

							if(empty($globals['disable_backup_upgrade'])){
							
							echo '<div class="row mb-2 mt-2">
								<div class="col-sm-5">
									<label class="sai_head" for="create_backup">'.$l['create_backup'].'</label><br />
									<span class="sai_exp2">'.$l['create_backup_exp'].'</span>
								</div>
								<div class="col-sm-7">
									<input type="checkbox" name="create_backup" id="create_backup" '.POSTchecked('create_backup', !empty($globals['upgrade_backup_on']) ? 1 : '').' />
								</div>
							</div>
							
							<div class="row mb-2" id="backup_options" style="display:none;">
								<div class="col-sm-5">
									<label class="sai_head">'.$l['backup_type'].'</label><br />
									<span class="sai_exp2">'.$l['backup_type_exp'].'</span>
								</div>
								<div class="col-sm-7">
									<select name="backup_type" class="form-control" id="backup_type">
										<option value="">'.$l['standard_backup'].'</option>
										<option value="advanced" '.(@trim($_POST['backup_type']) == 'advanced' ? 'selected="selected"' : '').'>'.$l['advanced_backup'].'</option>
									</select>
								</div>
							</div>
							
							<div id="advanced_backup" class="row mb-2" style="display:none;">
								<div class="col-sm-7 offset-sm-5">
								<input type="checkbox" name="backup_dir" id="backup_dir" '.POSTchecked('backup_dir', true).' />&nbsp;&nbsp;<label for="backup_dir" class="sai_head m-2">'.$l['backup_dir'].'</label><br />';

								// WWW directory									
								if(!empty($softins['wwwdir'])){
									echo '<input type="checkbox" name="backup_wwwdir" id="backup_wwwdir" '.POSTchecked('backup_wwwdir', true).' />&nbsp;&nbsp;<label for="backup_wwwdir" class="sai_head m-2">'.$l['backup_wwwdir'].'</label>';
								}
								
								// Data directory
								if(!empty($softins['softdatadir'])){
									echo '<input type="checkbox" name="backup_datadir" id="backup_datadir" '.POSTchecked('backup_datadir', true).' />&nbsp;&nbsp;<label for="backup_datadir" class="sai_head m-2">'.$l['backup_datadir'].'</label>';
								}

								// Database									
								if(!empty($softins['softdb'])){
									echo '<input type="checkbox" name="backup_db" id="backup_db" '.POSTchecked('backup_db', true).' />&nbsp;&nbsp;<label for="backup_db" class="sai_head m-2">'.$l['backup_db'].'</label>';
								}
							echo '</div>
							</div>';
							
							}
						
							if(!empty($settings)){
								
								if(file_exists($software['path'].'/upgrade.js')){
									echo '<script language="javascript" type="text/javascript"><!--// --><![CDATA[';
									echo @parselanguages(str_replace('$(', '$_(', file_get_contents($software['path'].'/upgrade.js')));
									echo '// ]]></script>';
								}
							
								foreach($settings as $group => $sets){
									
									if($group == 'hidden') continue;
								
									echo '<br /><br />
									<div class="mt-3">
										<div class="sai_sub_head">'.$group.'</div>
										<hr class="sai_main_head_hr">';
							
										foreach($sets as $sk => $sv){
											
											// Add class form-control
											if(preg_match('/type="text"/is', $sv['tag'])){
												$sv['tag'] = preg_replace('/>/is', ' class="form-control">',$sv['tag']);
											}
											if(preg_match('/<select/is', $sv['tag'])){
												$sv['tag'] = preg_replace('/<select/is', '<select class="form-control"',$sv['tag']);
											}
									
											echo '
											<div class="row mb-3">
												<div class="col-sm-5">
													<label class="sai_head">'.$sv['head'].'</label>
													'.(empty($sv['exp']) ? '' : '<span class="sai_exp">'.$sv['exp'].'</span>').'
												</div>
												<div class="col-sm-7">
													'.$sv['tag'].'
													'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
													softemail["'.$sk.'"] = false;
													//Add an event handler
													$_("'.$sk.'").onkeydown = function(){
														softemail["'.$sk.'"] = true;
													}
													// ]]></script>
													' : '').'
												</div>
											</div>';
												
										}
									echo '
									</div><br /><!---end of bg class--->
								';
								
								}
								
								echo '</div>
								</div>';
							
								//The Hidden groups 
								if(!empty($settings['hidden'])){
								
									foreach($settings['hidden'] as $sk => $sv){
								
										echo $sv['tag'].'
										'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
										softemail["'.$sk.'"] = false;
										//Add an event handler
										$_("'.$sk.'").onkeydown = function(){
											softemail["'.$sk.'"] = true;
										}
										// ]]></script>
										' : '');
							
									}
								
								}
							
							}//End of if($settings)
						
							//Is it a SOFTCOPY, then Leave a NOTE
							if(!empty($setupcontinue)){
								echo '<br />
								<div class="px-4">
									<span class="sai_info">'.$l['softcopy_note'].'</span>
								</div><br />';
							}
						
							echo '
							<div class="px-4">
								<span class="sai_info">'.lang_vars($l['note_backup'], array($softins['insid'])).'</span>
							</div><br />';
						
						
							if(count($array_keys) < 2){
							
								echo '
								<div class="px-4">
									<span class="sai_info">'.$l['upgrading_to'].'<b>'.(!empty($scripts[$array_keys[0]]['name']) ? $scripts[$array_keys[0]]['name'] : $iscripts[$array_keys[0]]['name']).'</b>, '.$l['version'].' : <b>'.(!empty($scripts[$array_keys[0]]['version']) ? $scripts[$array_keys[0]]['version'] : $iscripts[$array_keys[0]]['ver']).'</b></span>
								</div><br />';
						
							}
						
							echo '<br />
							<p align="center">
								<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
								<input type="submit" name="softsubmitbut" class="btn sai-button" id="softsubmitbut" value="'.$l['softsubmit'].'" /><span id="show_txt" style="display:none;"></span>
							</p><br />
									
							<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
							
							<center>'.$return.'</center><br /><br />
							
						</div><br /><!--end of bg class-->
						'.csrf_display().'
					</form>
				</div>
				
				<div id="progress_bar" style="display: none; width: 100%;">
					<br />
					<div class="bg">
						<center>
							<div class="row sai_main_head" style="width:100%;" align="center">
								<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
									<i class="fas fa-sync-alt fa-2x" style="color:#00A0D2;"></i>
								</div>
								<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_upgrading'].$scripts[$array_keys[0]]['name'].'</div>
							</div><hr /><br />
							
							<font size="4" id="progress_txt" style="width: 100%;">'.$l['checking_data'].'</font>
							<font style="font-size: 18px;font-weight: 400; width: 100%;" id="progress_percent">(0 %)</font><br /><br />
						</center>
						<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
					-webkit-border-radius: 5px; border-radius: 5px;background-color:#efefef; width: 50%;">
							<tr>
								<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
								<td id="progress_nocolor">&nbsp;</td>
							</tr>
						</table>
						<br /><center>'.$l['wait_note'].'</center>
						<br /><br />
					</div><!--end of bg class-->
				</div><br /><br />';
			}
		
		}elseif(!empty($upgraded)){
	
			// Check if the script supports Sign On
			$has_sign_on = has_sign_on($soft);
			
			$tmp_admiurl = $__settings['softurl'].'/'.(!empty($softins['admin_folder']) ? $softins['admin_folder'] : $software['adminurl']);
			
			$ahref_url = (empty($globals['disable_sign_on']) && !empty($has_sign_on) ? $globals['ind'].'act=sign_on&insid='.$softins['insid'].'&autoid='.srandstr(32) : $tmp_admiurl);

			$return = '';
			$role = '';

			if(can_wordpress_manager($soft)){
				$return .= '<a role="button" href="'.$globals['ind'].'act=wordpress&insid='.$softins['insid'].'"><span class="btn btn-outline-primary">'.$l['return_to_wpm'].'</span></a>&nbsp';
				
				$role = 'role="button"';
			}

			$return .= '<a '.$role.' href="'.script_link($soft).'&highlight='.$softins['insid'].'&postact=upgrade"><span class="btn btn-outline-primary">'.$l['return'].'</span></a>';
			
			//Filter to customize the return to link
			$return = apply_filters('return_link', $return, $act);
			
			echo '
			<div class="bg">
				<div class="third_url p-3"><h5>'.(!empty($setupcontinue) ? $l['setup_partial'].'</h5><div id="setupcontinue_url" style="display:none;"></div>
				'.$l['finish_update'].'<br />
				<a href="'.$__settings['softurl'].'/'.$setupcontinue.'" target="_blank">'.$__settings['softurl'].'/'.$setupcontinue.'</a></div><div class="p-3">' : $l['congrats'].'</h5><hr class="sai_main_head_hr" style="width:20%;">').'
				<p style="font-size:13px;">'.(!empty($setupcontinue) ? lang_vars( $l['finish_up_sucess'], array($software['name'])) : $software['name'].' '.$l['succesful']).' : <br />
				<a href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
				'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a href="'.$ahref_url.'" target="_blank">'.$tmp_admiurl.'</a>' : '').'<br /><br />
				'.$l['enjoy'].'<br /><br />
				'.(!empty($notes) ? $l['upgrade_notes'].' : <br /> 
				<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
				'.$l['please_note'].'<br /><br />
				'.$l['regards'].',<br />
				'.$l['softinstaller'].'<br /><br />
				</p>
				<center>'.$return.'</center><br /><br />';
				if(empty($globals['upgrade_tweet_off']) || empty($globals['lictype'])){
					echo '
					<form method="get" action="https://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
						<div class="row justify-content-center">
						<div class="col-sm-7">
						<div class="card">
							<div class="card-header" style="font-size:14px;">'.$l['upgrade_tweet_sub'].' :</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-12">
										<textarea name="text" cols="80" row="3" style="resize:none; width:100%;">'.loadtweetdata('upgrade_tweet', $l['upgrade_tweet']).'</textarea>
									</div>
								</div>
								<br />
								<div class="row">
									<div class="col-sm-12">
										<input type="submit" value="Tweet!" class="btn btn-info pull-right" onsubmit="return false;" id="twitter-btn" />
									</div>
								</div>
							</div>
						</div>
						</div>
						</div>
					</form>';
				}
					
			echo '
			</div><!--end of bg class--><!--PROC_DONE-->
			<br /><br /><br /><br />';
			
		}
		
	echo '
	</div>';
	
	softfooter();

}

?>