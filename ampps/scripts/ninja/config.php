<?php return array (
  'app' => 
  array (
    'name' => 'Invoice Ninja',
    'env' => 'production',
    'debug' => false,
    'url' => '[[softurl]]/public',
    'mix_url' => '[[softurl]]/public',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => '[[key]]',
    'cipher' => 'AES-256-CBC',
    'maintenance' => 
    array (
      'driver' => 'file',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Webpatser\\Countries\\CountriesServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'App\\Providers\\ComposerServiceProvider',
      28 => 'App\\Providers\\MultiDBProvider',
      29 => 'App\\Providers\\ClientPortalServiceProvider',
      30 => 'App\\Providers\\NinjaTranslationServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
      'Collector' => 'Turbo124\\Collector\\CollectorFacade',
      'Countries' => 'Webpatser\\Countries\\CountriesFacade',
      'CustomMessage' => 'App\\Utils\\ClientPortal\\CustomMessage\\CustomMessageFacade',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'user',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
      'user' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'contact' => 
      array (
        'driver' => 'session',
        'provider' => 'contacts',
      ),
      'vendor' => 
      array (
        'driver' => 'session',
        'provider' => 'vendors',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
      'contacts' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\ClientContact',
      ),
      'vendors' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\VendorContact',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
      'contacts' => 
      array (
        'provider' => 'contacts',
        'table' => 'password_resets',
        'expire' => 60,
      ),
      'vendors' => 
      array (
        'provider' => 'vendors',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'beacon' => 
  array (
    'enabled' => false,
    'endpoint' => 'https://app.lightlogs.com/api',
    'api_key' => '',
    'batch' => true,
    'cache_key' => 'beacon',
    'cache_connection' => 'sentinel-cache',
    'system_logging' => 
    array (
      0 => 'Turbo124\\Beacon\\Jobs\\System\\CpuMetric',
      1 => 'Turbo124\\Beacon\\Jobs\\System\\HdMetric',
      2 => 'Turbo124\\Beacon\\Jobs\\System\\MemMetric',
      3 => 'App\\Jobs\\Ninja\\CheckDbStatus',
    ),
    'database' => 
    array (
      'mysql' => 
      array (
        'master' => 'master_connection',
        'slave' => 'slave_connection',
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => 'api-mt1.pusher.com',
          'port' => 443,
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '[[softpath]]/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'invoice_ninja_cache_',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => '*',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => 'X-API-COMPANY-KEY,X-API-SECRET,X-API-TOKEN,X-API-PASSWORD,DNT,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Disposition,Content-Type,Range,X-CSRF-TOKEN,X-XSRF-TOKEN,X-LIVEWIRE',
    ),
    'exposed_headers' => 
    array (
      0 => 'X-APP-VERSION,X-MINIMUM-CLIENT-VERSION,X-CSRF-TOKEN,X-XSRF-TOKEN,X-LIVEWIRE',
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB',
      ),
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => '[[softdb]]',
        'prefix' => '',
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '[[softdbhost]]',
        'port' => '3306',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '[[softdbhost]]',
        'port' => '3306',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
      'db-ninja-01' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
        'options' => 
        array (
        ),
      ),
      'db-ninja-01a' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
        'options' => 
        array (
        ),
      ),
      'db-ninja-02' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
        'options' => 
        array (
        ),
      ),
      'db-ninja-02a' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
        'options' => 
        array (
        ),
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
      'sentinel-default' => 
      array (
        0 => 
        array (
          'host' => '127.0.0.1',
          'port' => '6379',
        ),
        'options' => 
        array (
          'replication' => 'sentinel',
          'service' => 'mymaster',
          'sentinel_timeout' => 3.0,
          'parameters' => 
          array (
            'password' => NULL,
            'database' => 0,
          ),
        ),
      ),
      'sentinel-cache' => 
      array (
        0 => 
        array (
          'host' => '127.0.0.1',
          'port' => '6379',
        ),
        'options' => 
        array (
          'replication' => 'sentinel',
          'service' => 'mymaster',
          'sentinel_timeout' => 3.0,
          'parameters' => 
          array (
            'password' => NULL,
            'database' => 1,
          ),
        ),
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'public',
    'cloud' => 's3',
    'disks' => 
    array (
      'base' => 
      array (
        'driver' => 'local',
        'root' => '[[softpath]]',
        'permissions' => 
        array (
          'file' => 
          array (
            'public' => 436,
            'private' => 384,
          ),
          'dir' => 
          array (
            'public' => 509,
            'private' => 448,
          ),
        ),
        'throw' => false,
      ),
      'local' => 
      array (
        'driver' => 'local',
        'root' => '[[softpath]]/storage/app',
        'permissions' => 
        array (
          'file' => 
          array (
            'public' => 436,
            'private' => 384,
          ),
          'dir' => 
          array (
            'public' => 509,
            'private' => 448,
          ),
        ),
        'throw' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '[[softpath]]/public/storage',
        'url' => '[[softurl]]/public/storage',
        'visibility' => 'public',
        'permissions' => 
        array (
          'file' => 
          array (
            'public' => 436,
            'private' => 384,
          ),
          'dir' => 
          array (
            'public' => 509,
            'private' => 448,
          ),
        ),
        'throw' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'visibility' => 'public',
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ),
      'r2' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'visibility' => 'private',
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ),
      'gcs' => 
      array (
        'driver' => 'gcs',
        'project_id' => 'your-project-id',
        'key_file' => NULL,
        'bucket' => 'your-bucket',
        'path_prefix' => NULL,
        'storage_api_uri' => NULL,
        'visibility' => 'public',
      ),
    ),
    'links' => 
    array (
      '[[softpath]]/public/storage' => '[[softpath]]/storage/app/public',
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'former' => 
  array (
    'automatic_label' => true,
    'default_form_type' => 'horizontal',
    'fetch_errors' => true,
    'live_validation' => true,
    'error_messages' => true,
    'push_checkboxes' => false,
    'unchecked_value' => 0,
    'required_class' => 'required',
    'required_text' => '<sup>*</sup>',
    'translate_from' => 'validation.attributes',
    'capitalize_translations' => true,
    'translatable' => 
    array (
      0 => 'help',
      1 => 'inlineHelp',
      2 => 'blockHelp',
      3 => 'placeholder',
      4 => 'data_placeholder',
      5 => 'label',
    ),
    'framework' => 'TwitterBootstrap4',
    'TwitterBootstrap4' => 
    array (
      'viewports' => 
      array (
        'large' => 'lg',
        'medium' => 'md',
        'small' => 'sm',
        'mini' => 'xs',
      ),
      'labelWidths' => 
      array (
        'large' => 2,
        'small' => 4,
      ),
      'icon' => 
      array (
        'tag' => 'i',
        'set' => 'fa',
        'prefix' => 'fa',
      ),
    ),
    'TwitterBootstrap3' => 
    array (
      'viewports' => 
      array (
        'large' => 'lg',
        'medium' => 'md',
        'small' => 'sm',
        'mini' => 'xs',
      ),
      'labelWidths' => 
      array (
        'large' => 2,
        'small' => 4,
      ),
      'icon' => 
      array (
        'tag' => 'span',
        'set' => 'glyphicon',
        'prefix' => 'glyphicon',
      ),
    ),
    'Nude' => 
    array (
      'icon' => 
      array (
        'tag' => 'i',
        'set' => NULL,
        'prefix' => 'icon',
      ),
    ),
    'TwitterBootstrap' => 
    array (
      'icon' => 
      array (
        'tag' => 'i',
        'set' => NULL,
        'prefix' => 'icon',
      ),
    ),
    'ZurbFoundation5' => 
    array (
      'viewports' => 
      array (
        'large' => 'large',
        'medium' => NULL,
        'small' => 'small',
        'mini' => NULL,
      ),
      'labelWidths' => 
      array (
        'small' => 3,
      ),
      'wrappedLabelClasses' => 
      array (
        0 => 'right',
        1 => 'inline',
      ),
      'icon' => 
      array (
        'tag' => 'i',
        'set' => NULL,
        'prefix' => 'fi',
      ),
      'error_classes' => 
      array (
        'class' => 'error',
      ),
    ),
    'ZurbFoundation4' => 
    array (
      'viewports' => 
      array (
        'large' => 'large',
        'medium' => NULL,
        'small' => 'small',
        'mini' => NULL,
      ),
      'labelWidths' => 
      array (
        'small' => 3,
      ),
      'wrappedLabelClasses' => 
      array (
        0 => 'right',
        1 => 'inline',
      ),
      'icon' => 
      array (
        'tag' => 'i',
        'set' => 'general',
        'prefix' => 'foundicon',
      ),
      'error_classes' => 
      array (
        'class' => 'alert-box radius warning',
      ),
    ),
    'ZurbFoundation' => 
    array (
      'viewports' => 
      array (
        'large' => '',
        'medium' => NULL,
        'small' => 'mobile-',
        'mini' => NULL,
      ),
      'labelWidths' => 
      array (
        'large' => 2,
        'small' => 4,
      ),
      'wrappedLabelClasses' => 
      array (
        0 => 'right',
        1 => 'inline',
      ),
      'icon' => 
      array (
        'tag' => 'i',
        'set' => NULL,
        'prefix' => 'fi',
      ),
      'error_classes' => 
      array (
        'class' => 'alert-box alert error',
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingViteManifestSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      17 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => false,
    'remote_sites_path' => '[[softpath]]',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
  ),
  'l5-swagger' => 
  array (
    'default' => 'default',
    'documentations' => 
    array (
      'default' => 
      array (
        'api' => 
        array (
          'title' => 'L5 Swagger UI',
        ),
        'routes' => 
        array (
          'api' => 'api/documentation',
        ),
        'paths' => 
        array (
          'docs_json' => 'api-docs.json',
          'docs_yaml' => 'api-docs.yaml',
          'annotations' => 
          array (
            0 => '[[softpath]]/app',
          ),
        ),
      ),
    ),
    'defaults' => 
    array (
      'routes' => 
      array (
        'docs' => 'swagger-docs-that-should-be-inaccessible',
        'oauth2_callback' => 'api/oauth2-callback',
        'middleware' => 
        array (
          'api' => 
          array (
          ),
          'asset' => 
          array (
          ),
          'docs' => 
          array (
          ),
          'oauth2_callback' => 
          array (
          ),
        ),
        'group_options' => 
        array (
        ),
      ),
      'paths' => 
      array (
        'docs' => '[[softpath]]/storage/api-docs',
        'views' => '[[softpath]]/resources/views/vendor/l5-swagger',
        'base' => NULL,
        'swagger_ui_assets_path' => 'vendor/swagger-api/swagger-ui/dist/',
        'excludes' => 
        array (
        ),
      ),
      'securityDefinitions' => 
      array (
        'securitySchemes' => 
        array (
        ),
        'security' => 
        array (
          0 => 
          array (
          ),
        ),
      ),
      'generate_always' => false,
      'generate_yaml_copy' => true,
      'proxy' => false,
      'additional_config_url' => NULL,
      'operations_sort' => NULL,
      'validator_url' => NULL,
    ),
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Http\\Livewire',
    'view_path' => '[[softpath]]/resources/views/livewire',
    'layout' => 'layouts.app',
    'asset_url' => NULL,
    'app_url' => NULL,
    'middleware_group' => 'web',
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
    ),
    'manifest_path' => NULL,
    'back_button_cache' => false,
    'render_on_redirect' => false,
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => 'null',
      'trace' => false,
    ),
    'channels' => 
    array (
      'invoiceninja' => 
      array (
        'driver' => 'single',
        'path' => '[[softpath]]/storage/logs/invoiceninja.log',
        'level' => 'debug',
      ),
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '[[softpath]]/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '[[softpath]]/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '[[softpath]]/storage/logs/laravel.log',
      ),
      'gelf' => 
      array (
        'driver' => 'custom',
        'via' => 'Hedii\\LaravelGelfLogger\\GelfLoggerFactory',
        'processors' => 
        array (
          0 => 'Hedii\\LaravelGelfLogger\\Processors\\NullStringProcessor',
        ),
        'level' => 'debug',
        'name' => 'v5_app',
        'system_name' => NULL,
        'transport' => 'udp',
        'host' => '127.0.0.1',
        'port' => 12201,
        'path' => NULL,
        'max_length' => NULL,
        'context_prefix' => NULL,
        'extra_prefix' => NULL,
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => '[[out_host_server]]',
        'port' => '[[out_m_port]]',
        'encryption' => '[[out_ssl]]',
        'username' => '[[send_email]]',
        'password' => '[[send_email_pwd]]',
        'timeout' => NULL,
        'local_domain' => NULL,
        'verify_peer' => true,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'gmail' => 
      array (
        'transport' => 'gmail',
      ),
      'office365' => 
      array (
        'transport' => 'office365',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => '[[send_email]]',
      'name' => '[[admin_fname]]',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '[[softpath]]/resources/views/vendor/mail',
      ),
    ),
  ),
  'ninja' => 
  array (
    'web_url' => 'https://www.invoiceninja.com',
    'admin_token' => '',
    'license_url' => 'https://app.invoiceninja.com',
    'production' => false,
    'license' => '',
    'version_url' => 'https://pdf.invoicing.co/api/version',
    'app_name' => 'Invoice Ninja',
    'app_env' => 'production',
    'debug_enabled' => false,
    'require_https' => [[https_enable]],
    'app_url' => '[[softurl]]/public',
    'app_domain' => 'invoicing.co',
    'app_version' => '5.5.83',
    'app_tag' => '5.5.83',
    'minimum_client_version' => '5.0.16',
    'terms_version' => '1.0.1',
    'api_secret' => '',
    'google_maps_api_key' => '',
    'google_analytics_url' => 'https://www.google-analytics.com/collect',
    'key_length' => 32,
    'date_format' => 'Y-m-d',
    'date_time_format' => 'Y-m-d H:i',
    'daily_email_limit' => 300,
    'error_email' => '',
    'mailer' => 'smtp',
    'company_id' => 0,
    'hash_salt' => '',
    'currency_converter_api_key' => '',
    'enabled_modules' => 32767,
    'phantomjs_key' => 'a-demo-key-with-low-quota-per-ip-address',
    'phantomjs_secret' => 'secret',
    'phantomjs_pdf_generation' => false,
    'pdf_generator' => 'hosted_ninja',
    'trusted_proxies' => '',
    'is_docker' => false,
    'local_download' => false,
    'sentry_dsn' => NULL,
    'environment' => 'selfhost',
    'preconfigured_install' => false,
    'update_secret' => 'secret',
    'disks' => 
    array (
      'backup' => 's3',
      'document' => 's3',
    ),
    'terms_of_service_url' => 
    array (
      'hosted' => 'https://www.invoiceninja.com/terms/',
      'selfhost' => 'https://www.invoiceninja.com/self-hosting-terms-service/',
    ),
    'privacy_policy_url' => 
    array (
      'hosted' => 'https://www.invoiceninja.com/privacy-policy/',
      'selfhost' => 'https://www.invoiceninja.com/self-hosting-privacy-data-control/',
    ),
    'db' => 
    array (
      'multi_db_enabled' => false,
      'default' => 'mysql',
    ),
    'i18n' => 
    array (
      'timezone_id' => 1,
      'country_id' => 840,
      'currency_id' => 1,
      'language_id' => 1,
      'date_format_id' => '1',
      'datetime_format_id' => '1',
      'locale' => 'en',
      'map_zoom' => 10,
      'payment_terms' => '',
      'military_time' => 0,
      'first_day_of_week' => 0,
      'first_month_of_year' => '2000-01-01',
    ),
    'testvars' => 
    array (
      'username' => 'user@example.com',
      'clientname' => 'client@example.com',
      'password' => 'password',
      'stripe' => '',
      'paypal' => '',
      'authorize' => '',
      'checkout' => '',
      'travis' => false,
      'test_email' => 'test@example.com',
      'wepay' => '',
      'braintree' => '',
      'paytrace' => 
      array (
        'username' => '',
        'password' => '',
        'decrypted' => '',
      ),
      'mollie' => '',
      'square' => '',
    ),
    'contact' => 
    array (
      'email' => '[[send_email]]',
      'from_name' => '[[admin_fname]]',
      'ninja_official_contact' => 'contact@invoiceninja.com',
    ),
    'cached_tables' => 
    array (
      'banks' => 'App\\Models\\Bank',
      'countries' => 'App\\Models\\Country',
      'currencies' => 'App\\Models\\Currency',
      'date_formats' => 'App\\Models\\DateFormat',
      'datetime_formats' => 'App\\Models\\DatetimeFormat',
      'gateways' => 'App\\Models\\Gateway',
      'industries' => 'App\\Models\\Industry',
      'languages' => 'App\\Models\\Language',
      'payment_types' => 'App\\Models\\PaymentType',
      'sizes' => 'App\\Models\\Size',
      'timezones' => 'App\\Models\\Timezone',
    ),
    'notification' => 
    array (
      'slack' => false,
      'mail' => '',
    ),
    'themes' => 
    array (
      'global' => 'ninja2020',
      'portal' => 'ninja2020',
    ),
    'quotas' => 
    array (
      'free' => 
      array (
        'daily_emails' => 50,
        'clients' => 20,
        'max_companies' => 1,
      ),
      'pro' => 
      array (
        'daily_emails' => 100,
        'clients' => 1000000,
        'max_companies' => 10,
      ),
      'enterprise' => 
      array (
        'daily_emails' => 200,
        'clients' => 1000000,
        'max_companies' => 10,
      ),
    ),
    'auth' => 
    array (
      'google' => 
      array (
        'client_id' => '',
        'client_secret' => '',
      ),
    ),
    'system' => 
    array (
      'node_path' => false,
      'npm_path' => false,
    ),
    'designs' => 
    array (
      'base_path' => '[[softpath]]/resources/views/pdf-designs/',
    ),
    'o365' => 
    array (
      'client_secret' => '',
      'client_id' => '',
      'tenant_id' => false,
    ),
    'maintenance' => 
    array (
      'delete_pdfs' => '60',
      'delete_backups' => '60',
    ),
    'log_pdf_html' => false,
    'expanded_logging' => false,
    'snappdf_chromium_path' => false,
    'snappdf_chromium_arguments' => false,
    'v4_migration_version' => '4.5.35',
    'flutter_renderer' => 'selfhosted-html',
    'webcron_secret' => false,
    'disable_auto_update' => true,
    'invoiceninja_hosted_pdf_generation' => false,
    'ninja_stripe_key' => NULL,
    'wepay' => 
    array (
      'environment' => 'stage',
      'client_id' => '',
      'client_secret' => '',
      'fee_payer' => NULL,
      'fee_cc_multiplier' => NULL,
      'fee_ach_multiplier' => NULL,
      'fee_fixed' => NULL,
    ),
    'ninja_stripe_publishable_key' => NULL,
    'ninja_stripe_client_id' => NULL,
    'ninja_default_company_id' => NULL,
    'ninja_default_company_gateway_id' => NULL,
    'ninja_hosted_secret' => '',
    'ninja_hosted_header' => '',
    'internal_queue_enabled' => true,
    'ninja_apple_api_key' => false,
    'ninja_apple_private_key' => false,
    'ninja_apple_bundle_id' => false,
    'ninja_apple_issuer_id' => false,
    'react_app_enabled' => false,
    'ninja_apple_client_id' => '',
    'ninja_apple_client_secret' => '',
    'ninja_apple_redirect_url' => '',
    'twilio_account_sid' => false,
    'twilio_auth_token' => false,
    'twilio_verify_sid' => false,
    'yodlee' => 
    array (
      'client_id' => false,
      'client_secret' => false,
      'admin_name' => false,
      'test_mode' => false,
      'dev_mode' => false,
      'config_name' => false,
    ),
    'licenses' => false,
  ),
  'postmark' => 
  array (
    'secret' => NULL,
    'guzzle' => 
    array (
      'timeout' => 120,
      'connect_timeout' => 120,
    ),
  ),
  'purchase' => 
  array (
    'routing' => 
    array (
    ),
    'google_play_package_name' => '',
    'appstore_password' => '',
    'eventListeners' => 
    array (
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionPurchased' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionRenewed' => 
      array (
        0 => 'App\\Listeners\\Subscription\\PlayStoreRenewSubscription',
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionInGracePeriod' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionExpired' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionCanceled' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionPaused' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionRestarted' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionDeferred' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionRevoked' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionOnHold' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionRecovered' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionPauseScheduleChanged' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\GooglePlay\\SubscriptionPriceChangeConfirmed' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\Cancel' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\DidChangeRenewalPref' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\DidChangeRenewalStatus' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\DidFailToRenew' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\DidRecover' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\DidRenew' => 
      array (
        0 => 'App\\Listeners\\Subscription\\AppStoreRenewSubscription',
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\InitialBuy' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\InteractiveRenewal' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\PriceIncreaseConsent' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\Refund' => 
      array (
      ),
      'Imdhemy\\Purchases\\Events\\AppStore\\Revoke' => 
      array (
      ),
    ),
  ),
  'querydetector' => 
  array (
    'enabled' => false,
    'threshold' => 3,
    'except' => 
    array (
    ),
    'log_channel' => 'daily',
    'output' => 
    array (
      0 => 'BeyondCode\\QueryDetector\\Outputs\\Log',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90000000,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90000000,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90000000,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sentry' => 
  array (
    'dsn' => NULL,
    'release' => '5.5.83',
    'environment' => NULL,
    'breadcrumbs' => 
    array (
      'logs' => true,
      'sql_queries' => true,
      'sql_bindings' => true,
      'queue_info' => true,
      'command_info' => true,
    ),
    'tracing' => 
    array (
      'queue_job_transactions' => false,
      'queue_jobs' => true,
      'sql_queries' => true,
      'sql_origin' => true,
      'views' => true,
      'http_client_requests' => true,
      'default_integrations' => true,
      'missing_routes' => false,
    ),
    'send_default_pii' => false,
    'traces_sample_rate' => NULL,
  ),
  'services' => 
  array (
    'analytics' => 
    array (
      'tracking_id' => NULL,
    ),
    'mailgun' => 
    array (
      'domain' => '',
      'secret' => '',
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ),
    'postmark' => 
    array (
      'token' => '',
    ),
    'microsoft' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'apple' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'gmail' => 
    array (
      'token' => '',
    ),
    'stripe' => 
    array (
      'model' => 'App\\Models\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'github' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'google' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'linkedin' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'twitter' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'bitbucket' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '[[softpath]]/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'invoice_ninja_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '[[softpath]]/resources/views',
    ),
    'compiled' => '[[softpath]]/storage/framework/views',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'inspector' => 
  array (
    'visible_tables' => 
    array (
      0 => '*',
    ),
    'hidden_tables' => 
    array (
    ),
    'hidden_columns' => 
    array (
      'users' => 
      array (
        0 => 'password',
      ),
    ),
    'components' => 
    array (
      'input' => 'InvoiceNinja\\Inspector\\Components\\Input',
      'tables' => 'InvoiceNinja\\Inspector\\Components\\Tables',
      'columns' => 'InvoiceNinja\\Inspector\\Components\\Columns',
      'records' => 'InvoiceNinja\\Inspector\\Components\\Records',
      'record' => 'InvoiceNinja\\Inspector\\Components\\Record',
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => '[[softpath]]/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'webpack' => 'webpack.mix.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'webpack' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
          6 => 'PROVIDER_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => '[[softpath]]/Modules',
      'assets' => '[[softpath]]/public/modules',
      'migration' => '[[softpath]]/database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'routes' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests/Unit',
          'generate' => true,
        ),
        'test-feature' => 
        array (
          'path' => 'Tests/Feature',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
        'component-view' => 
        array (
          'path' => 'Resources/views/components',
          'generate' => false,
        ),
        'component-class' => 
        array (
          'path' => 'View/Components',
          'generate' => false,
        ),
      ),
    ),
    'commands' => 
    array (
      0 => 'Nwidart\\Modules\\Commands\\CommandMakeCommand',
      1 => 'Nwidart\\Modules\\Commands\\ComponentClassMakeCommand',
      2 => 'Nwidart\\Modules\\Commands\\ComponentViewMakeCommand',
      3 => 'Nwidart\\Modules\\Commands\\ControllerMakeCommand',
      4 => 'Nwidart\\Modules\\Commands\\DisableCommand',
      5 => 'Nwidart\\Modules\\Commands\\DumpCommand',
      6 => 'Nwidart\\Modules\\Commands\\EnableCommand',
      7 => 'Nwidart\\Modules\\Commands\\EventMakeCommand',
      8 => 'Nwidart\\Modules\\Commands\\JobMakeCommand',
      9 => 'Nwidart\\Modules\\Commands\\ListenerMakeCommand',
      10 => 'Nwidart\\Modules\\Commands\\MailMakeCommand',
      11 => 'Nwidart\\Modules\\Commands\\MiddlewareMakeCommand',
      12 => 'Nwidart\\Modules\\Commands\\NotificationMakeCommand',
      13 => 'Nwidart\\Modules\\Commands\\ProviderMakeCommand',
      14 => 'Nwidart\\Modules\\Commands\\RouteProviderMakeCommand',
      15 => 'Nwidart\\Modules\\Commands\\InstallCommand',
      16 => 'Nwidart\\Modules\\Commands\\ListCommand',
      17 => 'Nwidart\\Modules\\Commands\\ModuleDeleteCommand',
      18 => 'Nwidart\\Modules\\Commands\\ModuleMakeCommand',
      19 => 'Nwidart\\Modules\\Commands\\FactoryMakeCommand',
      20 => 'Nwidart\\Modules\\Commands\\PolicyMakeCommand',
      21 => 'Nwidart\\Modules\\Commands\\RequestMakeCommand',
      22 => 'Nwidart\\Modules\\Commands\\RuleMakeCommand',
      23 => 'Nwidart\\Modules\\Commands\\MigrateCommand',
      24 => 'Nwidart\\Modules\\Commands\\MigrateRefreshCommand',
      25 => 'Nwidart\\Modules\\Commands\\MigrateResetCommand',
      26 => 'Nwidart\\Modules\\Commands\\MigrateRollbackCommand',
      27 => 'Nwidart\\Modules\\Commands\\MigrateStatusCommand',
      28 => 'Nwidart\\Modules\\Commands\\MigrationMakeCommand',
      29 => 'Nwidart\\Modules\\Commands\\ModelMakeCommand',
      30 => 'Nwidart\\Modules\\Commands\\PublishCommand',
      31 => 'Nwidart\\Modules\\Commands\\PublishConfigurationCommand',
      32 => 'Nwidart\\Modules\\Commands\\PublishMigrationCommand',
      33 => 'Nwidart\\Modules\\Commands\\PublishTranslationCommand',
      34 => 'Nwidart\\Modules\\Commands\\SeedCommand',
      35 => 'Nwidart\\Modules\\Commands\\SeedMakeCommand',
      36 => 'Nwidart\\Modules\\Commands\\SetupCommand',
      37 => 'Nwidart\\Modules\\Commands\\UnUseCommand',
      38 => 'Nwidart\\Modules\\Commands\\UpdateCommand',
      39 => 'Nwidart\\Modules\\Commands\\UseCommand',
      40 => 'Nwidart\\Modules\\Commands\\ResourceMakeCommand',
      41 => 'Nwidart\\Modules\\Commands\\TestMakeCommand',
      42 => 'Nwidart\\Modules\\Commands\\LaravelModulesV6Migrator',
      43 => 'Nwidart\\Modules\\Commands\\ComponentClassMakeCommand',
      44 => 'Nwidart\\Modules\\Commands\\ComponentViewMakeCommand',
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => '[[softpath]]/vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'nwidart',
      'author' => 
      array (
        'name' => 'Nicolas Widart',
        'email' => 'n.widart@gmail.com',
      ),
      'composer-output' => false,
    ),
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => '[[softpath]]/modules_statuses.json',
        'cache-key' => 'activator.installed',
        'cache-lifetime' => 604800,
      ),
    ),
    'activator' => 'file',
  ),
  'countries' => 
  array (
    'table_name' => 'countries',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
