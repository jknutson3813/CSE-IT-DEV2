<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['salt_password'] = '[[salt_password]]';
$config['register'] = true;
$config['password_reset'] = true;
$config['ldap'] = false;
$config['ldap_server'] = 'ldap://localhost';
$config['ldap_port'] = 389;
$config['ldap_protocol'] = 3;
$config['ldap_rootdn'] = 'cn=Manager,dc=my-domain,dc=com';
$config['ldap_rootpw'] = 'secret';
$config['ldap_basedn'] = 'dc=my-domain,dc=com';
$config['ldap_login_filter'] = '(|(uid=%login)(mail=%login))';
$config['ldap_user_email'] = 'mail';
$config['ldap_user_nickname'] = 'uid';
$config['email_protocol'] = 'mail';
$config['smtp_host'] = '';
$config['smtp_user'] = '';
$config['smtp_pass'] = '';
$config['smtp_port'] = 25;
