<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addplans_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.XX
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Tradução por: Infotech Brazil 
// Data:       Feb 2012
// Horário:    21:00 hrs
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

$l['no_planname'] = 'Por favor, especifique o nome do plano';
$l['invalidfilename'] = 'Por favor, especifique um nome de plano válido. Caracteres especiais não são permitidos.';
$l['no_cpplan'] = 'Por favor, escolha um plano de painel de controle válido';
$l['plan_exist'] = 'Um plano de com o mesmo nome já existe';
$l['error_plans'] = 'Por favor, escolha pelo menos um usuário ou plano de painel de controle';
$l['user_plan_exist'] = 'Usuário(s) - <b>&soft-1;</b> - já estão atribuído a outro plano. Para substituir selecione a opção de substituição';
$l['reseller_plan_exist'] = 'Revendedor(es) - <b>&soft-1;</b> - já estão atribuído a outro plano. Para substituir selecione a opção de substituição';
$l['error_cpplan'] = 'Por favor seleccione um plano de painel de controle válido';
$l['error_scriptselect'] = 'Por favor seleccione um plano de painel de controle válido';
$l['error_disable'] = 'Por favor, selecione a opção se você quiser <b>desabilitar</b> o '.APP.' para o usuário selecionado (s)';
$l['error_userselect'] = 'Por favor, selecione pelo menos um usuário';
$l['error_resellerselect'] = 'Por favor, selecione pelo menos um revendedor';
$l['cpplan_plan_exist'] = 'Plano(s) de Painel de Control - <b>&soft-1;</b> - já estão atribuído a outro plano. Para substituir selecione a opção de substituição';
$l['err_prefix'] = 'Você não pode dar \'reseller_\' como um prefixo para o seu nome do plano.';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';


//Theme Strings
$l['<title>'] = ''.APP.' - Controle de Acesso';
$l['title'] = 'Adicionar Planos de Controle de Acesso';
$l['planhead'] = 'Configurações do Controle de Acesso ';
$l['planname'] = 'Nome do Plano';
$l['exp_plan'] = 'Nome do Plano do Controle de Acesso';
$l['cplanname'] = 'Planos do Painel de Controle';
$l['exp_cplan'] = 'Planos do Painel de Controle';
$l['no_cpplans'] = 'Por favor seleccione um plano de painel de controle';
$l['saveplan'] = 'Salvar Plano';
$l['userselect'] = 'Atribuição do usuário';
$l['resellerselect'] = 'Atribuição do revendedor';
$l['exp_userselect'] = 'Selecione os usuários individuais que são afectados por este Grupo de Acesso.';
$l['exp_resellerselect'] = 'Selecione os revendedores que são afetados por esse Grupo de Acesso.';
$l['scriptselect'] = 'Atribuição do Script';
$l['exp_scriptselect'] = 'Selecione os scripts para esse plano em particular';
$l['done'] = 'Seu plano foi salvo. Voltar para <a href="'.$globals['index'].'act=plans">Resumo dos Planos</a>';
$l['plan_save_fail'] = 'Não foi possível salvar detalhes do plano';
$l['cpanelplan'] = 'Atribuição do Plano do Painel de Controle';
$l['cpplanselect'] = 'Selecione o painel de controle que planeja a quem esta ACL será aplicada. Todos os usuários com menos que o plano será capaz de usar apenas os scripts atribuídos aqui';
$l['default_plan_note'] = '<b><em>NOTE</em></b>: Por favor, especifique o nome do plano como \'<b>softaculous_default</b>\' para criar um plano padrão para qualquer usuário que não é atribuído a qualquer outro plano '.APP;
$l['select_all'] = 'Select All: ';
$l['overwrite_settings'] = 'Overwite Settings:';

$l['disable_autoupgrade'] = 'Disable Auto Upgrade';
$l['exp_disable_autoupgrade'] = 'Disable auto upgrading script installations for users that fall under this plan';

$l['limit_features'] = 'Feature Restrictions';

$l['default_note'] = 'Default : Unlimited';

$l['max_ins_script'] = 'Maximum Installations per Script';
$l['max_backup_script'] = 'Maximum Backups per Script';
$l['max_clone_script'] = 'Maximum Clone per Script';
$l['max_staging_script'] = 'Maximum Staging per Script';

$l['exp_max_ins_script'] = 'This will limit the maximum number of installations a user can create for particular script';
$l['exp_max_backup_script'] = 'This will limit the maximum number of backups a user can create for particular script';
$l['exp_max_clone_script'] = 'This will limit the maximum number of clone a user can create for particular script';
$l['exp_max_staging_script'] = 'This will limit the maximum number of staging a user can create for particular script';

$l['setselect'] = 'WordPress Sets Assignment';
$l['exp_setselect'] = 'Select WordPress sets which can be accssed by this Access Group';
$l['view_items'] = 'List items in this Set';
$l['ok'] = 'Ok';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Themes';
$l['empty_set'] = 'There are currently no items in the set!';