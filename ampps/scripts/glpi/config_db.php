<?php
class DB extends DBmysql {
   public $dbhost = '[[softdbhost]]';
   public $dbuser = '[[softdbuser]]';
   public $dbpassword = '[[softdbpass]]';
   public $dbdefault = '[[softdb]]';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
