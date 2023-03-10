<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pushtolive_lang.php
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

$l['no_ins'] = 'Не указана установка';
$l['wrong_ins_title'] = 'Некорректный ID установки';
$l['wrong_ins'] = 'Установки с указанным ID не существует';
$l['no_info_file'] = 'Файл INFO.XML не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['incompatible'] = 'ПО требует более высокую версию '.APP.'! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_install'] = 'Файл INSTALL.XML не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_functions'] = 'Файл CLONE FUNCTIONS не найден!';
$l['no_space'] = 'У вас недостаточно дискового пространства для установки этого ПО!';
$l['pushing'] = 'Отправка на основной сайт';
$l['staging'] = 'Создание промежуточной версии';
$l['downloading'] = 'Загрузка пакета';
$l['cant_push_db'] = 'Неваозможно отправить базу данных';
$l['fail_create'] = 'Ошибка при создании директории';
$l['fail_create_datadir'] = 'Ошибка при создании директории данных';
$l['cant_copy_dir'] = 'Директория не может быть скопирована, так как это домашняя директория';
$l['cant_connect_mysql'] = 'Невозможно подключиться к базе данных основного сайта, пожалуйуста, проверьте имя пользователя/пароль вашей базы данных. Если они изменились, пожалуйста, обновите детали установки '.APP.', используя кнопку Редактировать';
$l['failed_backup'] = 'Невозможно создать резервную копию перед отправкой установки на основной сайт';

$l['no_cron_min'] = 'Не указана минута в Cron';
$l['no_cron_hour'] = 'Не указан час в Cron';
$l['no_cron_day'] = 'Не указан день в Cron';
$l['no_cron_month'] = 'Не указан месяц в Cron';
$l['no_cron_weekday'] = 'Не указан день недели в Cron';
$l['wrong_cron_min'] = 'Некорректная минута в Cron. Валидные значения: 0-59 или <b>*</b>';
$l['wrong_cron_hour'] = 'Некорректный час в Cron. Валидные значения: 0-23 или <b>*</b>';
$l['wrong_cron_day'] = 'Некорректный день в Cron. Валидные значения: 1-31 или <b>*</b>';
$l['wrong_cron_month'] = 'Некорректный месяц в Cron. Валидные значения: 1-12 или <b>*</b>';
$l['wrong_cron_weekday'] = 'Некорректный день недели в Cron. Валидные значения: 0-7 или <b>*</b>';
$l['no_datadir'] = 'Не указана директория данных';
$l['datadir_exists'] = 'Указанная директория данных существует. Пожалуйста, укажите другую.';
$l['no_decompress_data'] = 'Возникли ошибки при распаковке файлов данных.';
$l['some_files_exist'] = 'Установка не может быть продолжена, так как следующие файлы уже пристутсвуют в директории назначения: ';
$l['delete_files'] = 'Пожалуйста, удалите эти файлы, или верите другую директорию.';
$l['overwrite_exist'] = '<b>ИЛИ</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Выберите чекбокс для перезаписи всех файлов и продолжения</span></b>';
$l['prog_pushtolive'] = 'Отправка на основной сайт';
$l['prog_push_complete'] = 'Отправка на основной сайт завершена';
$l['checking_data'] = 'Проверка предоставленных данных';
$l['unzipping_files'] = 'Копирование файлов и каталогов';
$l['unzipping_datadir'] = 'Распаковка файлов данных';
$l['prop_db'] = 'Распространение базы данных';
$l['finishing_process'] = 'Завершение клонирования';
$l['wait_note'] = '<b>ПРИМЕЧАНИЕ:</b> Это может занять 3-4 минуты. Пожалуйста, не уходите с этой страницы пока индикатор прогресса не достигнет 100%';
$l['no_php_install'] = 'PHP не установлен. Для установки, пожалуйста, нажмите <a href="'.$globals['index'].'act=apps&app=1">сюда</a>';
$l['no_mysql_install'] = 'MySQL не установлен. Для установки, пожалуйста, нажмите <a href="'.$globals['index'].'act=apps&app=16">сюда</a>';
$l['no_field'] = 'Поле <b>&soft-1;</b> требуемое и должно быть заполнено.';
$l['error_adddb'] = 'База данных не может быть создана';
$l['error_adduser'] = 'Ошибка при добавлении пользователя к новой базе данных';
$l['no_package'] = 'Не найде установочный пакет!';
$l['no_decompress'] = 'Возникли ошибки при распаковке файлов пакета.';
$l['no_pushtolive_support'] = 'Отправка на основной сайт не поддерживается этим скриптом';
$l['invalid_script'] = 'Некорректный ID скрипта';
$l['no_domain_found'] = 'Домен не найден. Пожалуйста, добавьте домен для установки скрипта';
$l['no_staging_ins'] = 'Эта установка не является промежуточной';
$l['pushtolive_backup_note'] = 'Резервная копия, созданная перед отправкой на основной сайт';
$l['pushtolive_partial_backup_note'] = 'Резервная копия, созданная перед отправкой на основной сайт (может быть частичной)';

//Theme Strings
$l['<title>'] = APP.' - Отправка установки на основной сайт';
$l['info'] = 'Инфо';
$l['ins_softname'] = 'ПО';
$l['ins_num'] = 'Номер установки';
$l['ins_ver'] = 'Версия';
$l['ins_time'] = 'Время установки';
$l['ins_path'] = 'Путь';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Административный URL';
$l['ins_db'] = 'Имя базы данных';
$l['ins_dbuser'] = 'Имя пользователя базы данных';
$l['ins_dbpass'] = 'Пароль базы данных';
$l['ins_dbhost'] = 'Сервер базы данных';
$l['ins_datadir'] = 'Директория данных';
$l['ins_wwwdir'] = 'Веб директория';
$l['ins_wwwurl'] = 'URL веб директории';
$l['ins_cron_command'] = 'Команда Cron';
$l['cloned'] = 'Установка была успешно склонирована успешно';
$l['clone_ins'] = 'Детали клонирования установки';
$l['default_push'] = 'Стандартная отправка';
$l['custom_push'] = 'Настроить отправку';
$l['current_to_live'] = 'Отключить эту установку от прямой трансляции';

$l['overwrite'] = 'Перезаписывать файлы';
$l['database_exists'] = 'База данных уже существует. Пожалуйста, укажите другое имя.';
$l['no_softdomain'] = 'Вы не выбрали домен для установки ПО.';
$l['wrong_softdomain'] = 'Не найден путь выбранного вами домена.';
$l['no_space'] = 'У вас недостаточно дискового пространства для установки этого ПО!';
$l['no_softdb'] = 'Не указана база данных.';

$l['softcopy_note'] = '<b>ПРИМЕЧАНИЕ</b>: это ПО требует установки с использованием собственной утилиты. Пожалуйста, для завершения установки, посетите URL, который будет показан (файлы были скопированы).';
$l['softsubmit'] = 'Отправить на основной сайт';
$l['congrats'] = 'Поздравляем, установка успешно отправлена на основной сайт';
$l['succesful'] = 'Установка была успешно отправлена на основной сайт в';
$l['admin_url'] = 'Административный URL';
$l['setup_continue'] = 'Тем не менее, установка будет завершена ПО самостоятельно. Для завершения установки, пожалуйста, перейдите по следующему URL';
$l['enjoy'] = 'Мы надеемся, процесс был простым.';
$l['install_notes'] = 'Ниже приведены некоторые важные примечания. Вам крайне рекомендуется их прочесть ';
$l['please_note'] = '<b>ПРИМЕЧАНИЕ</b>: '.APP.' производит только автоматическую установку и не предоставляет никакой поддержки для программного обеспечения. Пожалуйста, посетите веб-сайт поставщика п
рограммного обеспечения для поддержки!';
$l['regards'] = 'С уважением';
$l['softinstaller'] = 'Автоустановщик'.APP;
$l['return'] = 'Вернуться к обзору';
$l['return_to_wpm'] = 'Return to WordPress Management';

// These strings are for Softaculous Remote
$l['hostname'] = 'Сервер базы данных';
$l['hostname_exp'] = 'Имя сервера MySQL (обычно <b>localhost</b>)';
$l['dbusername'] = 'Имя пользователя базы данных';
$l['dbusername_exp'] = 'Имя пользователя MySQL';
$l['dbuserpass'] = 'Пароль базы данных';
$l['dbuserpass_exp'] = 'Пароль пользователя MySQL';
$l['database_name_exp_aefer'] = 'Введите имя базы данных, которое будет использовано установкой';

$l['pushtolive_tweet_sub'] = 'Рассказать друзьям';

$l['soft_ins_exists'] = 'Установка уже существует в &soft-1; по нашим записям. Для клонирования приложения по этому пути, пожалуйста, удалите текущую установку!';

$l['no_sclone'] = 'Файл CLONE.XML не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_functions'] = 'Файл CLONE FUNCTIONS не найден! Пожалуйста, сообщите об этом администратору сервера.';

$l['pushtolive_bg'] = 'Отправка установки на основной сайт запущена в фоне';
$l['err_mysql_db'] = 'Имя базы данных MySQL некорректно, база не может быть выбрана.';
$l['err_mysql_db_live'] = 'Имя базы данных MySQL основного сайта некорректно, база не может быть выбрана.';

$l['push_btn'] = 'Стандартные настройки';
$l['custom_push_btn'] = 'Настроить';
$l['push'] = 'Отправить на основной сайт';
$l['prog_pushing'] = 'Отправка на основной сайт';
$l['overwrite_files'] = 'Перезаписывать файлы/каталоги';
$l['overwrite_files_exp'] = 'Если выбрано, файлы/каталоги основного сайта будут перезаписаны';
$l['structural_change'] = 'Изменения в структуре базы данных';
$l['table_data_change'] = 'Изменения в данных базы данных';
$l['no_structural_change'] = 'Нет изменений в структуре';
$l['no_table_data_change'] = 'Нет изменений в данных';
$l['select_tables'] = 'Выберите изменения базы данных';
$l['select_tables_exp'] = 'Выберите изменения в структуре/данных базы данных, которые вы хотите отправить на основной сайт';
$l['check_all_edit'] = 'Выбрать все';
$l['push_db'] = 'Отправить базу данных полностью';
$l['push_db_exp'] = 'Если выбрано, будет очищена вся база данных основного сайта и импортирована текущая версия базы данных';
$l['backing_up'] = 'Резервное копирование основного сайта';
$l['push_views'] = 'Отправить представления базы данных';
$l['push_views_exp'] = 'Если выбрано, представления базы данных будут отправлены на основной сайт';
$l['live_site_desc'] = 'Текущая промежуточная версия сайта будет отправлена на ваш основной сайт :';
$l['default_push_desc'] = 'Это перезапишет все файлы вашей основной установки файлами промежуточной версии, очистит основную базу данных и импортирует промежуточную версию';
$l['corfirm_live'] = 'Вы уверены, что хотите отключить эту установку от прямой трансляции? Вы больше не сможете активировать содержимое этого сайта. Эта установка будет настроена как независимая установка без ссылки на ваш действующий сайт';
$l['failed_rsync'] = 'Failed to rsync the installation files';
$l['failed_rsync_datadir'] = 'Failed to rsync the data directory files';
$l['wp_cli_replace_fail'] = 'Failed to replace data in destination site (using wp-cli)';
