<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['no_info_file'] = 'Não foi possivel encontrar o arquivo INFO.XML! Informe ao administrador do sistema.';
$l['incompatible'] = 'O software necessita de uma versão do '.APP.' mais recente! Informe ao administrador de sistema.';
$l['no_functions'] = 'O arquivo IMPORT FUNCTIONS não foi encontrado! Informe ao administrador de sistema.';
$l['no_softdomain'] = 'Não selecionou o dominio de onde importar o software.';
$l['disable_import'] = 'O recurso de importação foi desativado pelo administrador';
$l['invalid_script'] = 'ID de script inválido';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importar ferramenta';
$l['choose_domain'] = 'Selecione o dominio';
$l['choose_domain_exp'] = 'Selecione o dominio onde o software já se encontra instalado.';
$l['in_directory'] = 'Diretório';
$l['in_directory_exp'] = 'O diretório é relativo ao dominio. EX: Para importar um software instalado em http://DOMINIO/diretorio/ deverá inserir <b>diretorio</b>. Para importar uma ferramenta instalada na raiz do dominio http://DOMINIO/ deixe este campo em branco.';
$l['softsubmit'] = 'Importar';
$l['congrats'] = 'Software importado com sucesso';
$l['succesful'] = 'Foi importado com sucesso em';
$l['admin_url'] = 'URL administrador';
$l['enjoy'] = 'Esperamos que o processo de importação tenha sido fácil.';
$l['import_notes'] = 'Seguem-se algumas informações importantes. Leia as mesmas atentamente: ';
$l['please_note'] = '<b>Importante</b>: O '.APP.' é apenas um script de instalação automática não dando suporte as aplicações instaladas pelo mesmo. Para informações especificas relativamente ao software instalado, deverá consultar o endereço do mesmo para mais informações!';
$l['regards'] = 'Cumprimentos';
$l['softinstaller'] = 'O auto instalador '.APP.'';
$l['return'] = 'Voltar';
$l['return_to_wpm'] = 'Return to WordPress Management';

$l['choose_protocol'] = 'Escolher protocolo';
$l['choose_protocol_exp'] = 'Se o seu site possui SSL, escolha o protocolo HTTPS.';
$l['no_https'] = 'Um certificado SSL confiável não foi encontrado';
$l['wrong_softdomain'] = 'Não foi possível encontrar o caminho do domínio que você selecionou.';

//remote import
$l['server_host'] = 'Host do servidor (Opcional)';
$l['server_host_exp'] = '<b>SE</b> seu domínio e host do servidor não são os mesmos, digite o host do servidor. EX: ftp.DOMINIO.com.br';
$l['protocol'] = 'Protocolo';
$l['protocol_exp'] = 'Selecione o protocolo pelo qual a Softaculous se comunicará';
$l['port'] = 'Porta';
$l['port_exp'] = 'Digite a porta para conectar';
$l['domain'] = 'Domínio';
$l['domain_exp'] = 'Digite um domínio válido. EX: DOMINIO.com.br';
$l['ftp_user'] = 'Usuário';
$l['ftp_user_exp'] = 'O usuário da sua conta FTP';
$l['ftp_pass'] = 'Senha';
$l['ftp_pass_exp'] = 'A senha da sua conta FTP';
$l['ftp_path'] = 'Caminho';
$l['ftp_path_exp'] = 'Caminho relativo para o diretório acessível pela web do usuário. EX: /public_html';
$l['Installed_path'] = 'Diretório de instalação (opcional)';
$l['Installed_path_exp'] = 'Diretório de instalação, por exemplo, blog se você instalou o script em /public_html/blog';
$l['wrong_ftp_path'] = 'O caminho FTP especificado não existe';
$l['ftp_error-1'] = 'Não foi possível acessar o domínio';
$l['ftp_error-2'] = 'Não foi possível fazer o login com detalhes de FTP informados';
$l['ftp_error-3'] = 'O caminho FTP informado não existe';
$l['imp_err'] = 'Ocorreram alguns erros ao importar o software instalado no &soft-1;';
$l['remote_import'] = 'O processo de importação da sua instalação foi iniciado em segundo plano. Você receberá uma notificação por email sobre o status assim que o processo de importação estiver concluído.';
$l['db_err'] = 'Não é possível conectar com o banco de dados';
$l['remote_dir_err'] = 'O diretório de instalação remota não existe';
$l['err_db_create'] = 'Ocorreu um erro ao criar o banco de dados';
$l['dest_dir_err'] = 'O diretório de destino já existe';
$l['source'] = 'Fonte';
$l['destination'] = 'Destino';
$l['auth_password'] = 'Método de autenticação'; 
$l['auth_password_exp'] = 'Selecione o método de autenticação'; 
$l['private_key'] = 'Chave privada';
$l['private_key_exp'] = 'Cole a chave privada aqui';
$l['passphrase'] = 'Frase de acesso';
$l['passphrase_exp'] = 'Senha para chave privada criptografada (opcional)';
$l['database_name'] = 'Nome do banco de dados';
$l['database_name_exp'] = 'Digite o nome do banco de dados a ser criado para a instalação';
$l['database_exists'] = 'O banco de dados já existe. Por favor, escolha um nome diferente';
$l['databaseuser_exists'] = 'O usuário do banco de dados já existe';
$l['db_limit_crossed'] = 'O número máximo de bancos de dados que você pode criar foi atingido, portanto, a importação não pode continuar';
$l['empty_db'] = 'O campo Nome do banco de dados está vazio. Digite o nome do banco de dados';
$l['adv_option'] = 'Opções avançadas';
$l['database_name'] = 'Nome do banco de dados';
$l['database_name_exp'] = 'Digite o nome do banco de dados a ser criado para a instalação';
$l['db_name_long'] = 'O nome do banco de dados não pode ter mais que 7 letras. Escolha um nome mais curto para o banco de dados';
$l['db_alpha_num'] = 'Apenas caracteres alfanuméricos são permitidos para o nome do banco de dados';
$l['remote_btn'] = 'Do servidor remoto';
$l['local_btn'] = 'Deste servidor';
$l['checking_data'] = 'Verificando os dados enviados';
$l['fetching_remote_db'] = 'Buscando detalhes do banco de dados do servidor remoto';
$l['create_db'] = 'Criando banco de dados';
$l['fetching_remote_files'] = 'Importando arquivos do servidor remoto';
$l['import_complete'] = 'Importação concluída';
$l['import_script'] = 'Importando';
$l['no_remote_import'] = 'A importação remota não é suportada para este script';
$l['overwrite'] = 'Sobrescrever arquivos';
$l['some_files_exist'] = 'A instalação não pode prosseguir porque os seguintes arquivos já existem na pasta de destino: ';
$l['delete_files'] = 'Exclua esses arquivos ou escolha outra pasta.';
$l['overwrite_exist'] = '<b>Ou</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Marque a caixa de seleção para substituir todos os arquivos e continuar</span></b>';

$l['sftp_path'] = 'Caminho do SFTP';
$l['sftp_path_exp'] = 'Caminho absoluto para o diretório web do usuário. EX: /home/USUÁRIO/public_html';
$l['ftp_error'] = 'Não foi possível conectar ao servidor FTP';
$l['err_upload_remote'] = 'Não foi possível fazer o upload do arquivo para o caminho do FTP';
$l['err_fetch_file'] = 'Não foi possível acessar o arquivo carregado no domínio';
$l['err_fetch_path'] = 'Não foi possível buscar o caminho dos dados recebidos';
$l['dbusername'] = 'Senha do banco de dados MySQL';
$l['dbusername_exp'] = 'Usuário do banco de dados MySQL';
$l['dbuserpass'] = 'Senha do banco de dados';
$l['dbuserpass_exp'] = 'A senha do usuário do banco de dados MySQL';
$l['database_name_exp_aefer'] = 'Digite o nome do banco de dados a ser usado para a instalação';
$l['hostname'] = 'Hostname do banco de dados';
$l['hostname_exp'] = 'O nome do host do MySQL (principalmente <b>localhost</b>)';
$l['no_hostname'] = 'Digite o host do banco de dados';
$l['no_dbusername'] = 'Digite seu nome de usuário do banco de dados';
$l['no_dbuserpass'] = 'Digite sua senha do banco de dados';
$l['no_db'] = 'Por favor, digite o nome do banco de dados';
$l['auth_method_pass'] = 'Senha';
$l['auth_method_key'] = 'Chave SSH';
$l['no_pass_pri'] = 'Forneça uma senha ou chave privada';
$l['finishing_process'] = 'Finalizando importação';
$l['wait_note'] = '<b>Importante:</b> Isso pode levar de 3 a 4 minutos. Você pode sair desta página, se desejar!';

$l['import_push_bg'] = 'A importação foi enviada em segundo plano';
$l['local_import'] = 'Detectar automaticamente todas as instalações';
