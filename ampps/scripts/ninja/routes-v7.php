<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/purchases/subscriptions/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.serverNotifications.google',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases/subscriptions/apple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.serverNotifications.apple',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nmfHHSk8Vge04h82',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KiPvA6wYhB3kb6xo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'signup.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/oauth_login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u6171fR0oh3fHtLV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reset_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xgEqIb1f0GupUbS3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/bank_integrations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/bank_integrations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/bank_transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transactions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transactions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/bank_transactions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transactions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/bank_transaction_rules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transaction_rules.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transaction_rules.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/bank_transaction_rules/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transaction_rules.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/check_subdomain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.check_subdomain',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/ping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.ping',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/health_check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.health_check',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/activities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/charts/totals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.chart.totals',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/charts/chart_summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.chart.chart_summary',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/claim_license' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.license.index',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/clients/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/client_gateway_tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/client_gateway_tokens/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/connected_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::Y0m73VCN9JoCdsQY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/connected_account/gmail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::oycasXfxYGhKUVdt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/client_statement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client.statement',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/companies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/companies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/company_ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_ledger.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/company_gateways' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/company_gateways/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/credits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/credits/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/designs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/designs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/designs/set/default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.default',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/documents/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/emails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.email.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/expenses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.export.index',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/expense_categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/expense_categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/group_settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/group_settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.import.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/import_json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.import.import_json',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/preimport' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.import.preimport',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/invoices/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/migrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.migrate.start',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/migration/start' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::yUSwRQPNajiAjexk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/one_time_token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::9RYjVBmawd2OT64r',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/payments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/payment_terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/payment_terms/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.preview.show',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/live_preview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.preview.live',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/live_design' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.preview.design',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/preview/purchase_order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.preview_purchase_order.show',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/live_preview/purchase_order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.preview_purchase_order.live',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/projects/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/purchase_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/purchase_orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/quotes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/recurring_expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/recurring_expenses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/recurring_invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/recurring_invoices/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/recurring_quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/recurring_quotes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::06IfSw0E9rRCZFbI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::sv9cGFFIT55cINZ7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::W9qzhRBAave9li5j',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/credits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::MSA6ZK35CNJZkVMC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::Y6kLxCNSr6FFyF4n',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::hz3hKWxzm62cq2n8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::xOtJBsrJ3yxE1N31',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/invoice_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::Lv3BPP8SFNQO05zr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::hUfTAUpiHAlIpDKW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/quote_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::VioJTXJMzJaBiy0p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/recurring_invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::1gBE94nokE4bgqon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::CnmpmN0o35hp2wg3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::0Ws0L5Ji9UfDTjva',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/product_sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::a6KTDkvS6nLGXYLi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/tasks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::LtEu93XB8mtcPVTm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/reports/profitloss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::9PO9HWgFkuwNX32f',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/task_schedulers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_schedulers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_schedulers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/task_schedulers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_schedulers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/scheduler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::3MTgL91RcRjcYf8I',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/support/messages/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::iCjThgX6C7b4olf2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/self-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::wH8YGu2x78RjjVHB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/self-update/check_version' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::Rv9d1RO8iCOrRcXJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/system_logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/system_logs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/tasks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/tasks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/task_statuses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/task_statuses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/tax_rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/tax_rates/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.templates.show',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/tokens/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/settings/enable_two_factor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::zPQjfKV6D8uNxENs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::C8VYcs9yFgro4jCf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/settings/disable_two_factor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::xSmJBQXgAx0bs6w4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.verify.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/verify/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.verify.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/vendors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::MI59Gqx3aOIc3iwp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::LHrJXbXCeVUyZEYG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::8a52qaagbTa1Ik9N',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/webhooks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/webhooks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/stripe/update_payment_methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.stripe.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/stripe/import_customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.stripe.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/stripe/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.stripe.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/subscriptions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/statics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::MkNntrJRwU0hR1SY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/sms_reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sms_reset.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/sms_reset/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sms_reset.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/postmark_webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QHXi1ul7hubMQCje',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/token_hash_router' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DjBwlUquOXu5pFpK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webcron' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ouj0kyzfYeZMvsyj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/get_migration_account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TxxNeac8babDwT9R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/confirm_forwarding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wh0Y9uX1JjmfaXvJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/process_webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oTPieICAEJPHL1wV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/confirm_purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lOgPVy8kY1iYZtZp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/yodlee/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XldNfpYHHMQouqH9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/yodlee/data_updates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zsW8OxIemrAsZCES',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/yodlee/refresh_updates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dGrdFMYyBa1VBWNh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/yodlee/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NfPN6qYZAsISDrAs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pfkifKnQ7WGyzqcH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xOEJCe6dh8OdZI5A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ngK3Fd7iQ7yHplMn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uWXgtp41OEetKB0P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setup/check_db' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BPQwS6ruTVoVoElE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setup/check_mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Pmy5WwO2ieUcPItO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setup/check_pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ieZIIAKF1CvYcgJG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wepay/finished' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wepay.finished',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe/completed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe_connect.return',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/.well-known/apple-developer-merchantid-domain-association' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6QhawNXOk72jIYKa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/contact/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gkvaz4ut4yKyWFSL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/contact/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contact.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.catchall',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/purchase_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.purchase_orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/documents/download_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.documents.download_multiple',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.documents.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.catchall',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/set_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.set_password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/error' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.error',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/ninja/trial_confirmation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.trial.response',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/invoices/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoices.bulk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoices.catch_bulk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/invoices/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoices.download',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/recurring_invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.recurring_invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/payments/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.catch_process',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/payments/credit_response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.credit_response',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/payment_methods/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/payment_methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/payment_methods/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/quotes/approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quotes.bulk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quotes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/credits' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.credits.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/documents/download_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.documents.download_multiple',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.documents.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.subscriptions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/tasks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.tasks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/statement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.statement',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/statement/raw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.statement.raw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.upload.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/process/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.response',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.response.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/shop/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aA1qCrV32nnqavL3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/shop/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OVZkIHm17LPZpVvH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/shop/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bOGtQshAEyXTT39W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/shop/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jl0PchSjPstD2gZr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/livewire/message/([^/]++)(*:33)|/([^/]++)/livewire/message/([^/]++)(*:75)|/livewire/preview\\-file/([^/]++)(*:114)|/a(?|pi/v1/(?|ac(?|counts/([^/]++)(*:156)|tivities/download_entity/([^/]++)(*:197))|bank_(?|integrations/(?|([^/]++)(?|(*:241)|/edit(*:254)|(*:262))|re(?|fresh_accounts(*:290)|move_account/([^/]++)(*:319))|get_transactions/([^/]++)(*:353)|bulk(*:365))|transaction(?|s/(?|([^/]++)(?|(*:404)|/edit(*:417)|(*:425))|bulk(*:438)|match(*:451))|_rules/(?|([^/]++)(?|(*:481)|/edit(*:494)|(*:502))|bulk(*:515))))|c(?|lient(?|s/(?|([^/]++)(?|(*:554)|/(?|edit(*:570)|upload(*:584)|purge(*:597)|([^/]++)/merge(*:619))|(*:628))|bulk(*:641))|_gateway_tokens/([^/]++)(?|(*:677)|/edit(*:690)|(*:698)))|ompan(?|ies/(?|purge(?|/([^/]++)(*:740)|_save_settings/([^/]++)(*:771))|([^/]++)(?|(*:791)|/(?|edit(*:807)|upload(*:821)|default(*:836))|(*:845)))|y_(?|gateways/(?|([^/]++)(?|(*:883)|/edit(*:896)|(*:904))|bulk(*:917))|users/([^/]++)(*:940)))|redit(?|s/(?|([^/]++)(?|(*:974)|/(?|edit(*:990)|upload(*:1004)|([^/]++)(*:1021))|(*:1031))|bulk(*:1045))|/([^/]++)/download(*:1073)))|filters/([^/]++)(*:1100)|d(?|esigns/(?|([^/]++)(?|(*:1134)|/edit(*:1148)|(*:1157))|bulk(*:1171))|ocuments/(?|([^/]++)(?|(*:1204)|/(?|edit(*:1221)|download(*:1238))|(*:1248))|bulk(*:1262)))|expense(?|s/(?|([^/]++)(?|(*:1299)|/(?|edit(*:1316)|upload(*:1331))|(*:1341))|bulk(*:1355))|_categories/(?|([^/]++)(?|(*:1391)|/edit(*:1405)|(*:1414))|bulk(*:1428)))|group_settings/(?|([^/]++)(?|(*:1468)|/edit(*:1482)|(*:1491))|bulk(*:1505)|([^/]++)/upload(*:1529))|invoice(?|s/(?|([^/]++)(?|(*:1565)|/(?|edit(*:1582)|delivery_note(*:1604)|([^/]++)(*:1621)|upload(*:1636))|(*:1646))|bulk(*:1660)|update_reminders(*:1685))|/([^/]++)/download(*:1713))|migration/purge(?|/([^/]++)(*:1750)|_save_settings/([^/]++)(*:1782))|p(?|ayment(?|s/(?|([^/]++)(?|(*:1821)|/edit(*:1835)|(*:1844))|refund(*:1860)|bulk(*:1873)|([^/]++)/upload(*:1897))|_terms/(?|([^/]++)(?|(*:1928)|/edit(*:1942)|(*:1951))|bulk(*:1965)))|ro(?|ducts/(?|([^/]++)(?|(*:2001)|/edit(*:2015)|(*:2024))|bulk(*:2038)|([^/]++)/upload(*:2062))|jects/(?|([^/]++)(?|(*:2092)|/edit(*:2106)|(*:2115))|bulk(*:2129)|([^/]++)/upload(*:2153)))|urchase_order(?|s/(?|([^/]++)(?|(*:2196)|/edit(*:2210)|(*:2219))|bulk(*:2233)|([^/]++)/(?|upload(*:2260)|([^/]++)(*:2277)))|/([^/]++)/download(*:2306)))|quote(?|s/(?|([^/]++)(?|(*:2341)|/(?|edit(*:2358)|([^/]++)(*:2375))|(*:2385))|bulk(*:2399)|([^/]++)/upload(*:2423))|/([^/]++)/download(*:2451))|recurring_(?|expenses/(?|([^/]++)(?|(*:2497)|/edit(*:2511)|(*:2520))|bulk(*:2534)|([^/]++)/upload(*:2558))|invoices/(?|([^/]++)(?|(*:2591)|/edit(*:2605)|(*:2614))|bulk(*:2628)|([^/]++)/upload(*:2652))|quotes/(?|([^/]++)(?|(*:2683)|/edit(*:2697)|(*:2706))|bulk(*:2720)|([^/]++)/upload(*:2744)))|t(?|a(?|sk(?|_s(?|chedulers/(?|([^/]++)(?|(*:2797)|/edit(*:2811)|(*:2820))|bulk(*:2834))|tatuses/(?|([^/]++)(?|(*:2866)|/edit(*:2880)|(*:2889))|bulk(*:2903)))|s/(?|([^/]++)(?|(*:2930)|/edit(*:2944)|(*:2953))|bulk(*:2967)|([^/]++)/upload(*:2991)|sort(*:3004)))|x_rates/(?|([^/]++)(?|(*:3037)|/edit(*:3051)|(*:3060))|bulk(*:3074)))|okens/(?|([^/]++)(?|(*:3105)|/edit(*:3119)|(*:3128))|bulk(*:3142)))|s(?|ystem_logs/([^/]++)(?|(*:3179)|/edit(*:3193)|(*:3202))|tripe/disconnect/([^/]++)(*:3237)|ubscriptions/(?|([^/]++)(?|(*:3273)|/edit(*:3287)|(*:3296))|bulk(*:3310))|hop/(?|client/([^/]++)(*:3342)|invoice/([^/]++)(*:3367)|product/([^/]++)(*:3392)))|vendors/(?|([^/]++)(?|(*:3425)|/edit(*:3439)|(*:3448))|bulk(*:3462)|([^/]++)/upload(*:3486))|user(?|s/(?|([^/]++)(?|(*:3519)|/detach_from_company(*:3548))|bulk(*:3562)|([^/]++)/invite(*:3586))|/([^/]++)/reconfirm(*:3615))|webhooks/(?|([^/]++)(?|(*:3648)|/edit(*:3662)|(*:3671))|bulk(*:3685)))|uth/([^/]++)(*:3708))|/p(?|a(?|yment_(?|webhook/([^/]++)/([^/]++)(*:3761)|notification_webhook/([^/]++)/([^/]++)/([^/]++)(*:3817))|ssword/reset/([^/]++)(*:3848))|hantom/([^/]++)/([^/]++)(*:3882))|/wepay/signup/([^/]++)(*:3914)|/user/confirm/([^/]++)(?|(*:3948))|/stripe/signup/([^/]++)(*:3981)|/yodlee/onboard/([^/]++)(*:4014)|/c(?|heckout/3ds_redirect/([^/]++)/([^/]++)/([^/]++)(*:4075)|lient/(?|login(?:/([^/]++))?(?|(*:4115))|re(?|gister(?:/([^/]++))?(?|(*:4153))|curring_invoice(?|s/([^/]++)(?|(*:4194)|/request_cancellation(*:4224))|/([^/]++)(?|(*:4246)|/download_pdf(*:4268))))|p(?|a(?|ssword/reset/([^/]++)(*:4309)|yment(?|/([^/]++)/([^/]++)(*:4344)|s/([^/]++)(*:4363)|_methods/([^/]++)(?|/verification(?|(*:4408))|(*:4418))))|rofile/([^/]++)/(?|edit(?|(*:4456)|_client(*:4472))|localization(*:4494)))|key_login/([^/]++)(*:4523)|magic_link/([^/]++)(*:4551)|ninja/([^/]++)/([^/]++)(*:4583)|invoice(?|s/([^/]++)(?|(?:/([^/]++))?(*:4629)|(*:4638))|/([^/]++)(?|(*:4660)|/download_pdf(*:4682)))|quote(?|s/(?|([^/]++)(?|(*:4717)|(*:4726))|download(*:4744))|/([^/]++)(?|(*:4766)|/download_pdf(*:4788)))|c(?|redit(?|s/([^/]++)(?|(*:4824)|(*:4833))|/([^/]++)(?|(*:4855)|/download_pdf(*:4877)))|lient/switch_company/([^/]++)(*:4917))|documents/([^/]++)(?|/download(*:4957)|(*:4966))|subscriptions/([^/]++)(?|/p(?|lan_switch/([^/]++)(*:5025)|urchase(?|(*:5044)|/v2(*:5056)))|(*:5067))|([^/]++)/([^/]++)/download(*:5103)|pay/([^/]++)(*:5124)|unsubscribe/([^/]++)/([^/]++)(*:5162)))|/mollie/3ds_redirect/([^/]++)/([^/]++)/([^/]++)(*:5220)|/gocardless/ibp_redirect/([^/]++)/([^/]++)/([^/]++)(*:5280)|/v(?|endor/(?|key_login/([^/]++)(*:5321)|p(?|urchase_order(?|/(?|([^/]++)(?|(*:5365)|/download(*:5383))|upload/([^/]++)(*:5408))|s/(?|([^/]++)(*:5431)|bulk(*:5444)))|rofile/([^/]++)/edit(?|(*:5478)))|documents/([^/]++)(?|/download(?|(*:5522)|_pdf(*:5535))|(*:5545)))|iew/([^/]++)/([^/]++)(?|(*:5580)|/password(?|(*:5601))))|/tmp_pdf/([^/]++)(*:5630)|/documents/([^/]++)(*:5658)|/(.*)(*:5672))/?$}sDu',
    ),
    3 => 
    array (
      33 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      75 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.account.update',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::3fi2HLKDhNwfTLrG',
          ),
          1 => 
          array (
            0 => 'activity',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.show',
          ),
          1 => 
          array (
            0 => 'bank_integration',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.edit',
          ),
          1 => 
          array (
            0 => 'bank_integration',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.update',
          ),
          1 => 
          array (
            0 => 'bank_integration',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.destroy',
          ),
          1 => 
          array (
            0 => 'bank_integration',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.refresh_accounts',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.remove_account',
          ),
          1 => 
          array (
            0 => 'acc_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.transactions',
          ),
          1 => 
          array (
            0 => 'acc_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_integrations.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transactions.show',
          ),
          1 => 
          array (
            0 => 'bank_transaction',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transactions.edit',
          ),
          1 => 
          array (
            0 => 'bank_transaction',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transactions.update',
          ),
          1 => 
          array (
            0 => 'bank_transaction',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transactions.destroy',
          ),
          1 => 
          array (
            0 => 'bank_transaction',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transactions.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transactions.match',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transaction_rules.show',
          ),
          1 => 
          array (
            0 => 'bank_transaction_rule',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transaction_rules.edit',
          ),
          1 => 
          array (
            0 => 'bank_transaction_rule',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transaction_rules.update',
          ),
          1 => 
          array (
            0 => 'bank_transaction_rule',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transaction_rules.destroy',
          ),
          1 => 
          array (
            0 => 'bank_transaction_rule',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.bank_transaction_rules.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.show',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.edit',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.upload',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.purge',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.merge',
          ),
          1 => 
          array (
            0 => 'client',
            1 => 'mergeable_client',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.update',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.clients.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.show',
          ),
          1 => 
          array (
            0 => 'client_gateway_token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.edit',
          ),
          1 => 
          array (
            0 => 'client_gateway_token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.update',
          ),
          1 => 
          array (
            0 => 'client_gateway_token',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.client_gateway_tokens.destroy',
          ),
          1 => 
          array (
            0 => 'client_gateway_token',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::1Dyf1MM30Cga0oX2',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::ZgaxXHYM3ZtT6KEP',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.show',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      807 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.edit',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::ObhxhyeSQ1YQxoid',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::PGyqBEWBzlSmEcOc',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.update',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.companies.destroy',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.show',
          ),
          1 => 
          array (
            0 => 'company_gateway',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.edit',
          ),
          1 => 
          array (
            0 => 'company_gateway',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.update',
          ),
          1 => 
          array (
            0 => 'company_gateway',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.destroy',
          ),
          1 => 
          array (
            0 => 'company_gateway',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.company_gateways.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::8LK6qawLvZPqWSqn',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.show',
          ),
          1 => 
          array (
            0 => 'credit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.edit',
          ),
          1 => 
          array (
            0 => 'credit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.upload',
          ),
          1 => 
          array (
            0 => 'credit',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1021 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.action',
          ),
          1 => 
          array (
            0 => 'credit',
            1 => 'action',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.update',
          ),
          1 => 
          array (
            0 => 'credit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.destroy',
          ),
          1 => 
          array (
            0 => 'credit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.credits.downloadPdf',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.filters',
          ),
          1 => 
          array (
            0 => 'entity',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.show',
          ),
          1 => 
          array (
            0 => 'design',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.edit',
          ),
          1 => 
          array (
            0 => 'design',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.update',
          ),
          1 => 
          array (
            0 => 'design',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.destroy',
          ),
          1 => 
          array (
            0 => 'design',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.designs.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.show',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.edit',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.download',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.update',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.destroy',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.documents.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.show',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.edit',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::t0ih5Fh71Gtr3rg1',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.update',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.destroy',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expenses.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.show',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.edit',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.update',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.destroy',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.expense_categories.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.show',
          ),
          1 => 
          array (
            0 => 'group_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.edit',
          ),
          1 => 
          array (
            0 => 'group_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.update',
          ),
          1 => 
          array (
            0 => 'group_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.destroy',
          ),
          1 => 
          array (
            0 => 'group_setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::BdBINhsr6DE41dvD',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.group_settings.upload',
          ),
          1 => 
          array (
            0 => 'group_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1565 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.show',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.edit',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.delivery_note',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.action',
          ),
          1 => 
          array (
            0 => 'invoice',
            1 => 'action',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.upload',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.update',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.destroy',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.update_reminders',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.invoices.downloadPdf',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::k39kOCXzAGN1gjQO',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::HHoWi5Ot6Er1DGHp',
          ),
          1 => 
          array (
            0 => 'company',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.show',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.edit',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.update',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.destroy',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.refund',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1873 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payments.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::e4OD10jRhGi8XhQU',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.show',
          ),
          1 => 
          array (
            0 => 'payment_term',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1942 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.edit',
          ),
          1 => 
          array (
            0 => 'payment_term',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.update',
          ),
          1 => 
          array (
            0 => 'payment_term',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.destroy',
          ),
          1 => 
          array (
            0 => 'payment_term',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment_terms.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.products.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::TwJkXcCerPny33u8',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.show',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.edit',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.update',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.destroy',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.projects.upload',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.show',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.edit',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.update',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.destroy',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::jwHODOAi47aDcQ6W',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.action',
          ),
          1 => 
          array (
            0 => 'purchase_order',
            1 => 'action',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.purchase_orders.downloadPdf',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.show',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.edit',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.action',
          ),
          1 => 
          array (
            0 => 'quote',
            1 => 'action',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.update',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.destroy',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2399 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::YVVriFGJOv3hT1nl',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.quotes.downloadPdf',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.show',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.edit',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.update',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.destroy',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_expenses.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::pTRIOEP49rDXJ4XV',
          ),
          1 => 
          array (
            0 => 'recurring_expense',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.show',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.edit',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.update',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.destroy',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_invoices.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::eAlwBtSlhpC0R2dc',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.show',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.edit',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.update',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.destroy',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.recurring_quotes.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::x3QxEZkctUhwTb8C',
          ),
          1 => 
          array (
            0 => 'recurring_quote',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2797 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_schedulers.show',
          ),
          1 => 
          array (
            0 => 'task_scheduler',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2811 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_schedulers.edit',
          ),
          1 => 
          array (
            0 => 'task_scheduler',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_schedulers.update',
          ),
          1 => 
          array (
            0 => 'task_scheduler',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_schedulers.destroy',
          ),
          1 => 
          array (
            0 => 'task_scheduler',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_schedulers.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.show',
          ),
          1 => 
          array (
            0 => 'task_status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.edit',
          ),
          1 => 
          array (
            0 => 'task_status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.update',
          ),
          1 => 
          array (
            0 => 'task_status',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.destroy',
          ),
          1 => 
          array (
            0 => 'task_status',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.task_statuses.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.show',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2944 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.edit',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.update',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.destroy',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tasks.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::wetYkWFg7EBc0Ssw',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::cQUeT2Jk9OdWUrKP',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.show',
          ),
          1 => 
          array (
            0 => 'tax_rate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.edit',
          ),
          1 => 
          array (
            0 => 'tax_rate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.update',
          ),
          1 => 
          array (
            0 => 'tax_rate',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.destroy',
          ),
          1 => 
          array (
            0 => 'tax_rate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tax_rates.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.show',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.edit',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.update',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tokens.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.show',
          ),
          1 => 
          array (
            0 => 'system_log',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.edit',
          ),
          1 => 
          array (
            0 => 'system_log',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.update',
          ),
          1 => 
          array (
            0 => 'system_log',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.system_logs.destroy',
          ),
          1 => 
          array (
            0 => 'system_log',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.stripe.disconnect',
          ),
          1 => 
          array (
            0 => 'company_gateway_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.show',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.edit',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.update',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.destroy',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscriptions.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yEuwH65CvEttAA4Z',
          ),
          1 => 
          array (
            0 => 'contact_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ef9eUbImZYaLxwP9',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9HwgLM9mmgNQHsp8',
          ),
          1 => 
          array (
            0 => 'product_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.show',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.edit',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.update',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.destroy',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.vendors.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::V91iuovs5riVYxao',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::4mI5JJYMl0WCD6aM',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::Htrk3WsAyZCWjm4f',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3548 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::UvTlV0upFzbRsTK6',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.users.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::NAEOTkvC3L8kbLIy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.generated::bBqiqMoO6YQpYePA',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.show',
          ),
          1 => 
          array (
            0 => 'webhook',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.edit',
          ),
          1 => 
          array (
            0 => 'webhook',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3671 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.update',
          ),
          1 => 
          array (
            0 => 'webhook',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.destroy',
          ),
          1 => 
          array (
            0 => 'webhook',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.webhooks.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VtZUg30ixnZd8eBg',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_webhook',
          ),
          1 => 
          array (
            0 => 'company_key',
            1 => 'company_gateway_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_notification_webhook',
          ),
          1 => 
          array (
            0 => 'company_key',
            1 => 'company_gateway_id',
            2 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3882 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'phantom_view',
          ),
          1 => 
          array (
            0 => 'entity',
            1 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wepay.signup',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RpZS3te0fZ8yKVE6',
          ),
          1 => 
          array (
            0 => 'confirmation_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TDrpmACinTmLiRh4',
          ),
          1 => 
          array (
            0 => 'confirmation_code',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3981 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe_connect.initialization',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'yodlee.auth',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkout.3ds_redirect',
          ),
          1 => 
          array (
            0 => 'company_key',
            1 => 'company_gateway_id',
            2 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.login',
            'company_key' => NULL,
          ),
          1 => 
          array (
            0 => 'company_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.login.submit',
            'company_key' => NULL,
          ),
          1 => 
          array (
            0 => 'company_key',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.register',
            'company_key' => NULL,
          ),
          1 => 
          array (
            0 => 'company_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IcFCfc7v4dXP1CKi',
            'company_key' => NULL,
          ),
          1 => 
          array (
            0 => 'company_key',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.recurring_invoice.show',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.recurring_invoices.request_cancellation',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::NFvBSax1A69VYBCI',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.recurring_invoice.download_invitation_key',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZPTNREfaztokcbfq',
          ),
          1 => 
          array (
            0 => 'contact_key',
            1 => 'payment_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payments.show',
          ),
          1 => 
          array (
            0 => 'payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.verification',
          ),
          1 => 
          array (
            0 => 'payment_method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.',
          ),
          1 => 
          array (
            0 => 'payment_method',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.show',
          ),
          1 => 
          array (
            0 => 'payment_method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.payment_methods.destroy',
          ),
          1 => 
          array (
            0 => 'payment_method',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.profile.edit',
          ),
          1 => 
          array (
            0 => 'client_contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.profile.update',
          ),
          1 => 
          array (
            0 => 'client_contact',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4472 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.profile.edit_client',
          ),
          1 => 
          array (
            0 => 'client_contact',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.profile.edit_localization',
          ),
          1 => 
          array (
            0 => 'client_contact',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.contact_login',
          ),
          1 => 
          array (
            0 => 'contact_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.contact_magic_link',
          ),
          1 => 
          array (
            0 => 'magic_link',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4583 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.ninja_contact_login',
          ),
          1 => 
          array (
            0 => 'contact_key',
            1 => 'company_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoice.show',
            'hash' => NULL,
          ),
          1 => 
          array (
            0 => 'invoice',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoice.show_invitation',
          ),
          1 => 
          array (
            0 => 'invoice_invitation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::jyh8mtFWp41MU6u9',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.invoice.download_invitation_key',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quote.show',
          ),
          1 => 
          array (
            0 => 'quote',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quote.show_invitation',
          ),
          1 => 
          array (
            0 => 'quote_invitation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quotes.download',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::8PG0QJulcIDg9G2i',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4788 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.quote.download_invitation_key',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4824 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.credit.show',
          ),
          1 => 
          array (
            0 => 'credit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.credits.show_invitation',
          ),
          1 => 
          array (
            0 => 'credit_invitation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::FnCoUvY3bHyGh0UY',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.credit.download_invitation_key',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.switch_company',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.documents.download',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.documents.show',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.subscription.plan_switch',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
            1 => 'target',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5044 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.subscription.purchase',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.subscription.upgrade',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.subscriptions.show',
          ),
          1 => 
          array (
            0 => 'recurring_invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.generated::iNj0PX1Nma9Rbj7C',
          ),
          1 => 
          array (
            0 => 'entity',
            1 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5124 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.pay.invoice',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.unsubscribe',
          ),
          1 => 
          array (
            0 => 'entity',
            1 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mollie.3ds_redirect',
          ),
          1 => 
          array (
            0 => 'company_key',
            1 => 'company_gateway_id',
            2 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gocardless.ibp_redirect',
          ),
          1 => 
          array (
            0 => 'company_key',
            1 => 'company_gateway_id',
            2 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact_login',
          ),
          1 => 
          array (
            0 => 'contact_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.generated::nljotVxew4ypAZ3B',
          ),
          1 => 
          array (
            0 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.upload.store',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.purchase_order.show',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.purchase_orders.bulk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.profile.edit',
          ),
          1 => 
          array (
            0 => 'vendor_contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.profile.update',
          ),
          1 => 
          array (
            0 => 'vendor_contact',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.documents.download',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.documents.download_pdf',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.documents.show',
          ),
          1 => 
          array (
            0 => 'document',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.entity_view',
          ),
          1 => 
          array (
            0 => 'entity_type',
            1 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.entity_view.password',
          ),
          1 => 
          array (
            0 => 'entity_type',
            1 => 'invitation_key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5wwRtrgqw9s6NSHc',
          ),
          1 => 
          array (
            0 => 'entity_type',
            1 => 'invitation_key',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tmp_pdf',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'documents.public_download',
          ),
          1 => 
          array (
            0 => 'document_hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PsrpFTZvHOizTCdg',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'purchase.serverNotifications.google' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/subscriptions/google',
      'action' => 
      array (
        'uses' => 'Imdhemy\\Purchases\\Http\\Controllers\\ServerNotificationController@google',
        'controller' => 'Imdhemy\\Purchases\\Http\\Controllers\\ServerNotificationController@google',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase.serverNotifications.google',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.serverNotifications.apple' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/subscriptions/apple',
      'action' => 
      array (
        'uses' => 'Imdhemy\\Purchases\\Http\\Controllers\\ServerNotificationController@apple',
        'controller' => 'Imdhemy\\Purchases\\Http\\Controllers\\ServerNotificationController@apple',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase.serverNotifications.apple',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nmfHHSk8Vge04h82' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::nmfHHSk8Vge04h82',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KiPvA6wYhB3kb6xo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::KiPvA6wYhB3kb6xo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'signup.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_secret_check',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@store',
        'controller' => 'App\\Http\\Controllers\\AccountController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'signup.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u6171fR0oh3fHtLV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/oauth_login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_secret_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@oauthApiLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@oauthApiLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::u6171fR0oh3fHtLV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:50,1',
          2 => 'api_secret_check',
          3 => 'email_db',
          4 => 'throttle:20,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@apiLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@apiLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xgEqIb1f0GupUbS3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reset_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:50,1',
          2 => 'api_secret_check',
          3 => 'email_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xgEqIb1f0GupUbS3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.account.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountController@update',
        'controller' => 'App\\Http\\Controllers\\AccountController@update',
        'as' => 'api.account.update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_integrations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_integrations.index',
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@index',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_integrations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_integrations.create',
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@create',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_integrations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_integrations.store',
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@store',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_integrations/{bank_integration}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_integrations.show',
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@show',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_integrations/{bank_integration}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_integrations.edit',
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@edit',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/bank_integrations/{bank_integration}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_integrations.update',
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@update',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/bank_integrations/{bank_integration}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_integrations.destroy',
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@destroy',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.refresh_accounts' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_integrations/refresh_accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'throttle:30,1',
        ),
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@refreshAccounts',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@refreshAccounts',
        'as' => 'api.bank_integrations.refresh_accounts',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.remove_account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_integrations/remove_account/{acc_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@removeAccount',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@removeAccount',
        'as' => 'api.bank_integrations.remove_account',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_integrations/get_transactions/{acc_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'throttle:1,1',
        ),
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@getTransactions',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@getTransactions',
        'as' => 'api.bank_integrations.transactions',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_integrations.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_integrations/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\BankIntegrationController@bulk',
        'controller' => 'App\\Http\\Controllers\\BankIntegrationController@bulk',
        'as' => 'api.bank_integrations.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transactions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transactions.index',
        'uses' => 'App\\Http\\Controllers\\BankTransactionController@index',
        'controller' => 'App\\Http\\Controllers\\BankTransactionController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transactions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_transactions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transactions.create',
        'uses' => 'App\\Http\\Controllers\\BankTransactionController@create',
        'controller' => 'App\\Http\\Controllers\\BankTransactionController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transactions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transactions.store',
        'uses' => 'App\\Http\\Controllers\\BankTransactionController@store',
        'controller' => 'App\\Http\\Controllers\\BankTransactionController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transactions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_transactions/{bank_transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transactions.show',
        'uses' => 'App\\Http\\Controllers\\BankTransactionController@show',
        'controller' => 'App\\Http\\Controllers\\BankTransactionController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transactions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_transactions/{bank_transaction}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transactions.edit',
        'uses' => 'App\\Http\\Controllers\\BankTransactionController@edit',
        'controller' => 'App\\Http\\Controllers\\BankTransactionController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transactions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/bank_transactions/{bank_transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transactions.update',
        'uses' => 'App\\Http\\Controllers\\BankTransactionController@update',
        'controller' => 'App\\Http\\Controllers\\BankTransactionController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transactions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/bank_transactions/{bank_transaction}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transactions.destroy',
        'uses' => 'App\\Http\\Controllers\\BankTransactionController@destroy',
        'controller' => 'App\\Http\\Controllers\\BankTransactionController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transactions.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_transactions/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\BankTransactionController@bulk',
        'controller' => 'App\\Http\\Controllers\\BankTransactionController@bulk',
        'as' => 'api.bank_transactions.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transactions.match' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_transactions/match',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\BankTransactionController@match',
        'controller' => 'App\\Http\\Controllers\\BankTransactionController@match',
        'as' => 'api.bank_transactions.match',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transaction_rules.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_transaction_rules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transaction_rules.index',
        'uses' => 'App\\Http\\Controllers\\BankTransactionRuleController@index',
        'controller' => 'App\\Http\\Controllers\\BankTransactionRuleController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transaction_rules.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_transaction_rules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transaction_rules.create',
        'uses' => 'App\\Http\\Controllers\\BankTransactionRuleController@create',
        'controller' => 'App\\Http\\Controllers\\BankTransactionRuleController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transaction_rules.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_transaction_rules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transaction_rules.store',
        'uses' => 'App\\Http\\Controllers\\BankTransactionRuleController@store',
        'controller' => 'App\\Http\\Controllers\\BankTransactionRuleController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transaction_rules.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_transaction_rules/{bank_transaction_rule}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transaction_rules.show',
        'uses' => 'App\\Http\\Controllers\\BankTransactionRuleController@show',
        'controller' => 'App\\Http\\Controllers\\BankTransactionRuleController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transaction_rules.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/bank_transaction_rules/{bank_transaction_rule}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transaction_rules.edit',
        'uses' => 'App\\Http\\Controllers\\BankTransactionRuleController@edit',
        'controller' => 'App\\Http\\Controllers\\BankTransactionRuleController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transaction_rules.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/bank_transaction_rules/{bank_transaction_rule}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transaction_rules.update',
        'uses' => 'App\\Http\\Controllers\\BankTransactionRuleController@update',
        'controller' => 'App\\Http\\Controllers\\BankTransactionRuleController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transaction_rules.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/bank_transaction_rules/{bank_transaction_rule}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.bank_transaction_rules.destroy',
        'uses' => 'App\\Http\\Controllers\\BankTransactionRuleController@destroy',
        'controller' => 'App\\Http\\Controllers\\BankTransactionRuleController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.bank_transaction_rules.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/bank_transaction_rules/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\BankTransactionRuleController@bulk',
        'controller' => 'App\\Http\\Controllers\\BankTransactionRuleController@bulk',
        'as' => 'api.bank_transaction_rules.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.check_subdomain' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/check_subdomain',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\SubdomainController@index',
        'controller' => 'App\\Http\\Controllers\\SubdomainController@index',
        'as' => 'api.check_subdomain',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.ping' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/ping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PingController@index',
        'controller' => 'App\\Http\\Controllers\\PingController@index',
        'as' => 'api.ping',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.health_check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/health_check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PingController@health',
        'controller' => 'App\\Http\\Controllers\\PingController@health',
        'as' => 'api.health_check',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/activities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ActivityController@index',
        'controller' => 'App\\Http\\Controllers\\ActivityController@index',
        'as' => 'api.',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::3fi2HLKDhNwfTLrG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/activities/download_entity/{activity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ActivityController@downloadHistoricalEntity',
        'controller' => 'App\\Http\\Controllers\\ActivityController@downloadHistoricalEntity',
        'as' => 'api.generated::3fi2HLKDhNwfTLrG',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.chart.totals' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/charts/totals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ChartController@totals',
        'controller' => 'App\\Http\\Controllers\\ChartController@totals',
        'as' => 'api.chart.totals',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.chart.chart_summary' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/charts/chart_summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ChartController@chart_summary',
        'controller' => 'App\\Http\\Controllers\\ChartController@chart_summary',
        'as' => 'api.chart.chart_summary',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.license.index' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/claim_license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\LicenseController@index',
        'controller' => 'App\\Http\\Controllers\\LicenseController@index',
        'as' => 'api.license.index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.clients.index',
        'uses' => 'App\\Http\\Controllers\\ClientController@index',
        'controller' => 'App\\Http\\Controllers\\ClientController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/clients/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.clients.create',
        'uses' => 'App\\Http\\Controllers\\ClientController@create',
        'controller' => 'App\\Http\\Controllers\\ClientController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.clients.store',
        'uses' => 'App\\Http\\Controllers\\ClientController@store',
        'controller' => 'App\\Http\\Controllers\\ClientController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.clients.show',
        'uses' => 'App\\Http\\Controllers\\ClientController@show',
        'controller' => 'App\\Http\\Controllers\\ClientController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/clients/{client}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.clients.edit',
        'uses' => 'App\\Http\\Controllers\\ClientController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.clients.update',
        'uses' => 'App\\Http\\Controllers\\ClientController@update',
        'controller' => 'App\\Http\\Controllers\\ClientController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/clients/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.clients.destroy',
        'uses' => 'App\\Http\\Controllers\\ClientController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.upload' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/clients/{client}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@upload',
        'controller' => 'App\\Http\\Controllers\\ClientController@upload',
        'as' => 'api.clients.upload',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.purge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/clients/{client}/purge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@purge',
        'controller' => 'App\\Http\\Controllers\\ClientController@purge',
        'as' => 'api.clients.purge',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.merge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/clients/{client}/{mergeable_client}/merge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@merge',
        'controller' => 'App\\Http\\Controllers\\ClientController@merge',
        'as' => 'api.clients.merge',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.clients.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/clients/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@bulk',
        'controller' => 'App\\Http\\Controllers\\ClientController@bulk',
        'as' => 'api.clients.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.filters' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/filters/{entity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\FilterController@index',
        'controller' => 'App\\Http\\Controllers\\FilterController@index',
        'as' => 'api.filters',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/client_gateway_tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.index',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@index',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/client_gateway_tokens/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.create',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@create',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/client_gateway_tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.store',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@store',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/client_gateway_tokens/{client_gateway_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.show',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@show',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/client_gateway_tokens/{client_gateway_token}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.edit',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/client_gateway_tokens/{client_gateway_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.update',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@update',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.client_gateway_tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/client_gateway_tokens/{client_gateway_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.client_gateway_tokens.destroy',
        'uses' => 'App\\Http\\Controllers\\ClientGatewayTokenController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientGatewayTokenController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::Y0m73VCN9JoCdsQY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/connected_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ConnectedAccountController@index',
        'controller' => 'App\\Http\\Controllers\\ConnectedAccountController@index',
        'as' => 'api.generated::Y0m73VCN9JoCdsQY',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::oycasXfxYGhKUVdt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/connected_account/gmail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ConnectedAccountController@handleGmailOauth',
        'controller' => 'App\\Http\\Controllers\\ConnectedAccountController@handleGmailOauth',
        'as' => 'api.generated::oycasXfxYGhKUVdt',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.client.statement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/client_statement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientStatementController@statement',
        'controller' => 'App\\Http\\Controllers\\ClientStatementController@statement',
        'as' => 'api.client.statement',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::1Dyf1MM30Cga0oX2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/companies/purge/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@purgeCompany',
        'controller' => 'App\\Http\\Controllers\\MigrationController@purgeCompany',
        'as' => 'api.generated::1Dyf1MM30Cga0oX2',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::ZgaxXHYM3ZtT6KEP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/companies/purge_save_settings/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@purgeCompanySaveSettings',
        'controller' => 'App\\Http\\Controllers\\MigrationController@purgeCompanySaveSettings',
        'as' => 'api.generated::ZgaxXHYM3ZtT6KEP',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.companies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.companies.index',
        'uses' => 'App\\Http\\Controllers\\CompanyController@index',
        'controller' => 'App\\Http\\Controllers\\CompanyController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.companies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/companies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.companies.create',
        'uses' => 'App\\Http\\Controllers\\CompanyController@create',
        'controller' => 'App\\Http\\Controllers\\CompanyController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.companies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/companies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.companies.store',
        'uses' => 'App\\Http\\Controllers\\CompanyController@store',
        'controller' => 'App\\Http\\Controllers\\CompanyController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.companies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.companies.show',
        'uses' => 'App\\Http\\Controllers\\CompanyController@show',
        'controller' => 'App\\Http\\Controllers\\CompanyController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.companies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/companies/{company}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.companies.edit',
        'uses' => 'App\\Http\\Controllers\\CompanyController@edit',
        'controller' => 'App\\Http\\Controllers\\CompanyController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.companies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.companies.update',
        'uses' => 'App\\Http\\Controllers\\CompanyController@update',
        'controller' => 'App\\Http\\Controllers\\CompanyController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.companies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/companies/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.companies.destroy',
        'uses' => 'App\\Http\\Controllers\\CompanyController@destroy',
        'controller' => 'App\\Http\\Controllers\\CompanyController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::ObhxhyeSQ1YQxoid' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/companies/{company}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@upload',
        'controller' => 'App\\Http\\Controllers\\CompanyController@upload',
        'as' => 'api.generated::ObhxhyeSQ1YQxoid',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::PGyqBEWBzlSmEcOc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/companies/{company}/default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyController@default',
        'controller' => 'App\\Http\\Controllers\\CompanyController@default',
        'as' => 'api.generated::PGyqBEWBzlSmEcOc',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.company_ledger.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyLedgerController@index',
        'controller' => 'App\\Http\\Controllers\\CompanyLedgerController@index',
        'as' => 'api.company_ledger.index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.company_gateways.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_gateways',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.company_gateways.index',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@index',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.company_gateways.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_gateways/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.company_gateways.create',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@create',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.company_gateways.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/company_gateways',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.company_gateways.store',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@store',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.company_gateways.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_gateways/{company_gateway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.company_gateways.show',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@show',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.company_gateways.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/company_gateways/{company_gateway}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.company_gateways.edit',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@edit',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.company_gateways.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/company_gateways/{company_gateway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.company_gateways.update',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@update',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.company_gateways.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/company_gateways/{company_gateway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.company_gateways.destroy',
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@destroy',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.company_gateways.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/company_gateways/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyGatewayController@bulk',
        'controller' => 'App\\Http\\Controllers\\CompanyGatewayController@bulk',
        'as' => 'api.company_gateways.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::8LK6qawLvZPqWSqn' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/company_users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CompanyUserController@update',
        'controller' => 'App\\Http\\Controllers\\CompanyUserController@update',
        'as' => 'api.generated::8LK6qawLvZPqWSqn',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.credits.index',
        'uses' => 'App\\Http\\Controllers\\CreditController@index',
        'controller' => 'App\\Http\\Controllers\\CreditController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.credits.create',
        'uses' => 'App\\Http\\Controllers\\CreditController@create',
        'controller' => 'App\\Http\\Controllers\\CreditController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/credits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.credits.store',
        'uses' => 'App\\Http\\Controllers\\CreditController@store',
        'controller' => 'App\\Http\\Controllers\\CreditController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits/{credit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.credits.show',
        'uses' => 'App\\Http\\Controllers\\CreditController@show',
        'controller' => 'App\\Http\\Controllers\\CreditController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits/{credit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.credits.edit',
        'uses' => 'App\\Http\\Controllers\\CreditController@edit',
        'controller' => 'App\\Http\\Controllers\\CreditController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/credits/{credit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.credits.update',
        'uses' => 'App\\Http\\Controllers\\CreditController@update',
        'controller' => 'App\\Http\\Controllers\\CreditController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/credits/{credit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.credits.destroy',
        'uses' => 'App\\Http\\Controllers\\CreditController@destroy',
        'controller' => 'App\\Http\\Controllers\\CreditController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.upload' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/credits/{credit}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CreditController@upload',
        'controller' => 'App\\Http\\Controllers\\CreditController@upload',
        'as' => 'api.credits.upload',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.action' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credits/{credit}/{action}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CreditController@action',
        'controller' => 'App\\Http\\Controllers\\CreditController@action',
        'as' => 'api.credits.action',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/credits/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CreditController@bulk',
        'controller' => 'App\\Http\\Controllers\\CreditController@bulk',
        'as' => 'api.credits.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.credits.downloadPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/credit/{invitation_key}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\CreditController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\CreditController@downloadPdf',
        'as' => 'api.credits.downloadPdf',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.designs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/designs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.designs.index',
        'uses' => 'App\\Http\\Controllers\\DesignController@index',
        'controller' => 'App\\Http\\Controllers\\DesignController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.designs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/designs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.designs.create',
        'uses' => 'App\\Http\\Controllers\\DesignController@create',
        'controller' => 'App\\Http\\Controllers\\DesignController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.designs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/designs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.designs.store',
        'uses' => 'App\\Http\\Controllers\\DesignController@store',
        'controller' => 'App\\Http\\Controllers\\DesignController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.designs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/designs/{design}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.designs.show',
        'uses' => 'App\\Http\\Controllers\\DesignController@show',
        'controller' => 'App\\Http\\Controllers\\DesignController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.designs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/designs/{design}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.designs.edit',
        'uses' => 'App\\Http\\Controllers\\DesignController@edit',
        'controller' => 'App\\Http\\Controllers\\DesignController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.designs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/designs/{design}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.designs.update',
        'uses' => 'App\\Http\\Controllers\\DesignController@update',
        'controller' => 'App\\Http\\Controllers\\DesignController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.designs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/designs/{design}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.designs.destroy',
        'uses' => 'App\\Http\\Controllers\\DesignController@destroy',
        'controller' => 'App\\Http\\Controllers\\DesignController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.designs.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/designs/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignController@bulk',
        'controller' => 'App\\Http\\Controllers\\DesignController@bulk',
        'as' => 'api.designs.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.designs.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/designs/set/default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\DesignController@default',
        'controller' => 'App\\Http\\Controllers\\DesignController@default',
        'as' => 'api.designs.default',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.documents.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.documents.index',
        'uses' => 'App\\Http\\Controllers\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\DocumentController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.documents.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.documents.create',
        'uses' => 'App\\Http\\Controllers\\DocumentController@create',
        'controller' => 'App\\Http\\Controllers\\DocumentController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.documents.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.documents.store',
        'uses' => 'App\\Http\\Controllers\\DocumentController@store',
        'controller' => 'App\\Http\\Controllers\\DocumentController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.documents.show',
        'uses' => 'App\\Http\\Controllers\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\DocumentController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.documents.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents/{document}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.documents.edit',
        'uses' => 'App\\Http\\Controllers\\DocumentController@edit',
        'controller' => 'App\\Http\\Controllers\\DocumentController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.documents.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/documents/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.documents.update',
        'uses' => 'App\\Http\\Controllers\\DocumentController@update',
        'controller' => 'App\\Http\\Controllers\\DocumentController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.documents.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/documents/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.documents.destroy',
        'uses' => 'App\\Http\\Controllers\\DocumentController@destroy',
        'controller' => 'App\\Http\\Controllers\\DocumentController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.documents.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/documents/{document}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\DocumentController@download',
        'as' => 'api.documents.download',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.documents.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/documents/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\DocumentController@bulk',
        'controller' => 'App\\Http\\Controllers\\DocumentController@bulk',
        'as' => 'api.documents.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.email.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/emails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'user_verified',
        ),
        'uses' => 'App\\Http\\Controllers\\EmailController@send',
        'controller' => 'App\\Http\\Controllers\\EmailController@send',
        'as' => 'api.email.send',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expenses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expenses.index',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@index',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expenses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expenses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expenses.create',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@create',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expenses.store',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@store',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expenses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expenses.show',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@show',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expenses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expenses/{expense}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expenses.edit',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@edit',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expenses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expenses.update',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@update',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expenses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expenses.destroy',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::t0ih5Fh71Gtr3rg1' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/expenses/{expense}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseController@upload',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@upload',
        'as' => 'api.generated::t0ih5Fh71Gtr3rg1',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expenses.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/expenses/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseController@bulk',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@bulk',
        'as' => 'api.expenses.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.export.index' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ExportController@index',
        'controller' => 'App\\Http\\Controllers\\ExportController@index',
        'as' => 'api.export.index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expense_categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expense_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expense_categories.index',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expense_categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expense_categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expense_categories.create',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expense_categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/expense_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expense_categories.store',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expense_categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expense_categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expense_categories.show',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expense_categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/expense_categories/{expense_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expense_categories.edit',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expense_categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/expense_categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expense_categories.update',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expense_categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/expense_categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.expense_categories.destroy',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.expense_categories.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/expense_categories/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@bulk',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@bulk',
        'as' => 'api.expense_categories.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.group_settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/group_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.group_settings.index',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@index',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.group_settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/group_settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.group_settings.create',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@create',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.group_settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/group_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.group_settings.store',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@store',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.group_settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/group_settings/{group_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.group_settings.show',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@show',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.group_settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/group_settings/{group_setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.group_settings.edit',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@edit',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.group_settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/group_settings/{group_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.group_settings.update',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@update',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.group_settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/group_settings/{group_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.group_settings.destroy',
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::BdBINhsr6DE41dvD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/group_settings/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@bulk',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@bulk',
        'as' => 'api.generated::BdBINhsr6DE41dvD',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.group_settings.upload' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/group_settings/{group_setting}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\GroupSettingController@upload',
        'controller' => 'App\\Http\\Controllers\\GroupSettingController@upload',
        'as' => 'api.group_settings.upload',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.import.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportController@import',
        'controller' => 'App\\Http\\Controllers\\ImportController@import',
        'as' => 'api.import.import',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.import.import_json' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/import_json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportJsonController@import',
        'controller' => 'App\\Http\\Controllers\\ImportJsonController@import',
        'as' => 'api.import.import_json',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.import.preimport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/preimport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ImportController@preimport',
        'controller' => 'App\\Http\\Controllers\\ImportController@preimport',
        'as' => 'api.import.preimport',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.invoices.index',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.invoices.create',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@create',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.invoices.store',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.invoices.show',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/{invoice}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.invoices.edit',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@edit',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.invoices.update',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@update',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.invoices.destroy',
        'uses' => 'App\\Http\\Controllers\\InvoiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.delivery_note' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/{invoice}/delivery_note',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@deliveryNote',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@deliveryNote',
        'as' => 'api.invoices.delivery_note',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.action' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoices/{invoice}/{action}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@action',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@action',
        'as' => 'api.invoices.action',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.upload' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/invoices/{invoice}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@upload',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@upload',
        'as' => 'api.invoices.upload',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.downloadPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/invoice/{invitation_key}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@downloadPdf',
        'as' => 'api.invoices.downloadPdf',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/invoices/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@bulk',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@bulk',
        'as' => 'api.invoices.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.invoices.update_reminders' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/invoices/update_reminders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@update_reminders',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@update_reminders',
        'as' => 'api.invoices.update_reminders',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\LogoutController@index',
        'controller' => 'App\\Http\\Controllers\\LogoutController@index',
        'as' => 'api.logout',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.migrate.start' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/migrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@index',
        'controller' => 'App\\Http\\Controllers\\MigrationController@index',
        'as' => 'api.migrate.start',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::k39kOCXzAGN1gjQO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/migration/purge/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@purgeCompany',
        'controller' => 'App\\Http\\Controllers\\MigrationController@purgeCompany',
        'as' => 'api.generated::k39kOCXzAGN1gjQO',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::HHoWi5Ot6Er1DGHp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/migration/purge_save_settings/{company}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@purgeCompanySaveSettings',
        'controller' => 'App\\Http\\Controllers\\MigrationController@purgeCompanySaveSettings',
        'as' => 'api.generated::HHoWi5Ot6Er1DGHp',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::yUSwRQPNajiAjexk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/migration/start',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\MigrationController@startMigration',
        'controller' => 'App\\Http\\Controllers\\MigrationController@startMigration',
        'as' => 'api.generated::yUSwRQPNajiAjexk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::9RYjVBmawd2OT64r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/one_time_token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\OneTimeTokenController@create',
        'controller' => 'App\\Http\\Controllers\\OneTimeTokenController@create',
        'as' => 'api.generated::9RYjVBmawd2OT64r',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payments.index',
        'uses' => 'App\\Http\\Controllers\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payments.create',
        'uses' => 'App\\Http\\Controllers\\PaymentController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payments.store',
        'uses' => 'App\\Http\\Controllers\\PaymentController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payments.show',
        'uses' => 'App\\Http\\Controllers\\PaymentController@show',
        'controller' => 'App\\Http\\Controllers\\PaymentController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payments/{payment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payments.edit',
        'uses' => 'App\\Http\\Controllers\\PaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payments.update',
        'uses' => 'App\\Http\\Controllers\\PaymentController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payments.destroy',
        'uses' => 'App\\Http\\Controllers\\PaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payments.refund' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payments/refund',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@refund',
        'controller' => 'App\\Http\\Controllers\\PaymentController@refund',
        'as' => 'api.payments.refund',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payments.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payments/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@bulk',
        'controller' => 'App\\Http\\Controllers\\PaymentController@bulk',
        'as' => 'api.payments.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::e4OD10jRhGi8XhQU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/payments/{payment}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@upload',
        'controller' => 'App\\Http\\Controllers\\PaymentController@upload',
        'as' => 'api.generated::e4OD10jRhGi8XhQU',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment_terms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payment_terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payment_terms.index',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@index',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment_terms.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payment_terms/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payment_terms.create',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@create',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment_terms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payment_terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payment_terms.store',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@store',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment_terms.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payment_terms/{payment_term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payment_terms.show',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@show',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment_terms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/payment_terms/{payment_term}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payment_terms.edit',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@edit',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment_terms.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/payment_terms/{payment_term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payment_terms.update',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@update',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment_terms.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/payment_terms/{payment_term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.payment_terms.destroy',
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@destroy',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment_terms.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/payment_terms/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentTermController@bulk',
        'controller' => 'App\\Http\\Controllers\\PaymentTermController@bulk',
        'as' => 'api.payment_terms.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.preview.show' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PreviewController@show',
        'controller' => 'App\\Http\\Controllers\\PreviewController@show',
        'as' => 'api.preview.show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.preview.live' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/live_preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PreviewController@live',
        'controller' => 'App\\Http\\Controllers\\PreviewController@live',
        'as' => 'api.preview.live',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.preview.design' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/live_design',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PreviewController@design',
        'controller' => 'App\\Http\\Controllers\\PreviewController@design',
        'as' => 'api.preview.design',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.preview_purchase_order.show' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/preview/purchase_order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PreviewPurchaseOrderController@show',
        'controller' => 'App\\Http\\Controllers\\PreviewPurchaseOrderController@show',
        'as' => 'api.preview_purchase_order.show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.preview_purchase_order.live' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/live_preview/purchase_order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PreviewPurchaseOrderController@live',
        'controller' => 'App\\Http\\Controllers\\PreviewPurchaseOrderController@live',
        'as' => 'api.preview_purchase_order.live',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.products.index',
        'uses' => 'App\\Http\\Controllers\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\ProductController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.products.create',
        'uses' => 'App\\Http\\Controllers\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\ProductController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.products.store',
        'uses' => 'App\\Http\\Controllers\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\ProductController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.products.show',
        'uses' => 'App\\Http\\Controllers\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\ProductController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.products.edit',
        'uses' => 'App\\Http\\Controllers\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.products.update',
        'uses' => 'App\\Http\\Controllers\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\ProductController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.products.destroy',
        'uses' => 'App\\Http\\Controllers\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.products.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/products/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@bulk',
        'controller' => 'App\\Http\\Controllers\\ProductController@bulk',
        'as' => 'api.products.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::TwJkXcCerPny33u8' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/products/{product}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@upload',
        'controller' => 'App\\Http\\Controllers\\ProductController@upload',
        'as' => 'api.generated::TwJkXcCerPny33u8',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.projects.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.projects.index',
        'uses' => 'App\\Http\\Controllers\\ProjectController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.projects.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/projects/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.projects.create',
        'uses' => 'App\\Http\\Controllers\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\ProjectController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.projects.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.projects.store',
        'uses' => 'App\\Http\\Controllers\\ProjectController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.projects.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.projects.show',
        'uses' => 'App\\Http\\Controllers\\ProjectController@show',
        'controller' => 'App\\Http\\Controllers\\ProjectController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.projects.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/projects/{project}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.projects.edit',
        'uses' => 'App\\Http\\Controllers\\ProjectController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.projects.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.projects.update',
        'uses' => 'App\\Http\\Controllers\\ProjectController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.projects.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/projects/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.projects.destroy',
        'uses' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.projects.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/projects/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@bulk',
        'controller' => 'App\\Http\\Controllers\\ProjectController@bulk',
        'as' => 'api.projects.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.projects.upload' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/projects/{project}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@upload',
        'controller' => 'App\\Http\\Controllers\\ProjectController@upload',
        'as' => 'api.projects.upload',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/purchase_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.purchase_orders.index',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@index',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/purchase_orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.purchase_orders.create',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@create',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/purchase_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.purchase_orders.store',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@store',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/purchase_orders/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.purchase_orders.show',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@show',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/purchase_orders/{purchase_order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.purchase_orders.edit',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@edit',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/purchase_orders/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.purchase_orders.update',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@update',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/purchase_orders/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.purchase_orders.destroy',
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/purchase_orders/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@bulk',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@bulk',
        'as' => 'api.purchase_orders.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::jwHODOAi47aDcQ6W' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/purchase_orders/{purchase_order}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@upload',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@upload',
        'as' => 'api.generated::jwHODOAi47aDcQ6W',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.action' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/purchase_orders/{purchase_order}/{action}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@action',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@action',
        'as' => 'api.purchase_orders.action',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.purchase_orders.downloadPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/purchase_order/{invitation_key}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseOrderController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\PurchaseOrderController@downloadPdf',
        'as' => 'api.purchase_orders.downloadPdf',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.quotes.index',
        'uses' => 'App\\Http\\Controllers\\QuoteController@index',
        'controller' => 'App\\Http\\Controllers\\QuoteController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.quotes.create',
        'uses' => 'App\\Http\\Controllers\\QuoteController@create',
        'controller' => 'App\\Http\\Controllers\\QuoteController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.quotes.store',
        'uses' => 'App\\Http\\Controllers\\QuoteController@store',
        'controller' => 'App\\Http\\Controllers\\QuoteController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.quotes.show',
        'uses' => 'App\\Http\\Controllers\\QuoteController@show',
        'controller' => 'App\\Http\\Controllers\\QuoteController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes/{quote}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.quotes.edit',
        'uses' => 'App\\Http\\Controllers\\QuoteController@edit',
        'controller' => 'App\\Http\\Controllers\\QuoteController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.quotes.update',
        'uses' => 'App\\Http\\Controllers\\QuoteController@update',
        'controller' => 'App\\Http\\Controllers\\QuoteController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.quotes.destroy',
        'uses' => 'App\\Http\\Controllers\\QuoteController@destroy',
        'controller' => 'App\\Http\\Controllers\\QuoteController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.action' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quotes/{quote}/{action}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\QuoteController@action',
        'controller' => 'App\\Http\\Controllers\\QuoteController@action',
        'as' => 'api.quotes.action',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/quotes/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\QuoteController@bulk',
        'controller' => 'App\\Http\\Controllers\\QuoteController@bulk',
        'as' => 'api.quotes.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::YVVriFGJOv3hT1nl' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/quotes/{quote}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\QuoteController@upload',
        'controller' => 'App\\Http\\Controllers\\QuoteController@upload',
        'as' => 'api.generated::YVVriFGJOv3hT1nl',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.quotes.downloadPdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/quote/{invitation_key}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\QuoteController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\QuoteController@downloadPdf',
        'as' => 'api.quotes.downloadPdf',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_expenses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_expenses.index',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@index',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_expenses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_expenses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_expenses.create',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@create',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_expenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_expenses.store',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@store',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_expenses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_expenses.show',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@show',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_expenses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_expenses.edit',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@edit',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_expenses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_expenses.update',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@update',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_expenses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_expenses.destroy',
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@destroy',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_expenses.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_expenses/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@bulk',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@bulk',
        'as' => 'api.recurring_expenses.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::pTRIOEP49rDXJ4XV' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/recurring_expenses/{recurring_expense}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringExpenseController@upload',
        'controller' => 'App\\Http\\Controllers\\RecurringExpenseController@upload',
        'as' => 'api.generated::pTRIOEP49rDXJ4XV',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_invoices.index',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_invoices/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_invoices.create',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@create',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_invoices.store',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_invoices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_invoices.show',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_invoices.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_invoices.edit',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@edit',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_invoices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_invoices.update',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@update',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_invoices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_invoices.destroy',
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_invoices.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_invoices/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@bulk',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@bulk',
        'as' => 'api.recurring_invoices.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::eAlwBtSlhpC0R2dc' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/recurring_invoices/{recurring_invoice}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@upload',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@upload',
        'as' => 'api.generated::eAlwBtSlhpC0R2dc',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_quotes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_quotes.index',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@index',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_quotes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_quotes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_quotes.create',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@create',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_quotes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_quotes.store',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@store',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_quotes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_quotes.show',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@show',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_quotes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_quotes.edit',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@edit',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_quotes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_quotes.update',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@update',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_quotes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.recurring_quotes.destroy',
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@destroy',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.recurring_quotes.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/recurring_quotes/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@bulk',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@bulk',
        'as' => 'api.recurring_quotes.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::x3QxEZkctUhwTb8C' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/recurring_quotes/{recurring_quote}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringQuoteController@upload',
        'controller' => 'App\\Http\\Controllers\\RecurringQuoteController@upload',
        'as' => 'api.generated::x3QxEZkctUhwTb8C',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::06IfSw0E9rRCZFbI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'throttle:300,2',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@refresh',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@refresh',
        'as' => 'api.generated::06IfSw0E9rRCZFbI',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::sv9cGFFIT55cINZ7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\ClientReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\ClientReportController',
        'as' => 'api.generated::sv9cGFFIT55cINZ7',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::W9qzhRBAave9li5j' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\ClientContactReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\ClientContactReportController',
        'as' => 'api.generated::W9qzhRBAave9li5j',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::MSA6ZK35CNJZkVMC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/credits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\CreditReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\CreditReportController',
        'as' => 'api.generated::MSA6ZK35CNJZkVMC',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::Y6kLxCNSr6FFyF4n' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\DocumentReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\DocumentReportController',
        'as' => 'api.generated::Y6kLxCNSr6FFyF4n',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::hz3hKWxzm62cq2n8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\ExpenseReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\ExpenseReportController',
        'as' => 'api.generated::hz3hKWxzm62cq2n8',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::xOtJBsrJ3yxE1N31' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\InvoiceReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\InvoiceReportController',
        'as' => 'api.generated::xOtJBsrJ3yxE1N31',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::Lv3BPP8SFNQO05zr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/invoice_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\InvoiceItemReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\InvoiceItemReportController',
        'as' => 'api.generated::Lv3BPP8SFNQO05zr',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::hUfTAUpiHAlIpDKW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\QuoteReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\QuoteReportController',
        'as' => 'api.generated::hUfTAUpiHAlIpDKW',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::VioJTXJMzJaBiy0p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/quote_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\QuoteItemReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\QuoteItemReportController',
        'as' => 'api.generated::VioJTXJMzJaBiy0p',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::1gBE94nokE4bgqon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/recurring_invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\RecurringInvoiceReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\RecurringInvoiceReportController',
        'as' => 'api.generated::1gBE94nokE4bgqon',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::CnmpmN0o35hp2wg3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\PaymentReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\PaymentReportController',
        'as' => 'api.generated::CnmpmN0o35hp2wg3',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::0Ws0L5Ji9UfDTjva' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\ProductReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\ProductReportController',
        'as' => 'api.generated::0Ws0L5Ji9UfDTjva',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::a6KTDkvS6nLGXYLi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/product_sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\ProductSalesReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\ProductSalesReportController',
        'as' => 'api.generated::a6KTDkvS6nLGXYLi',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::LtEu93XB8mtcPVTm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\TaskReportController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\TaskReportController',
        'as' => 'api.generated::LtEu93XB8mtcPVTm',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::9PO9HWgFkuwNX32f' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/reports/profitloss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Reports\\ProfitAndLossController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Reports\\ProfitAndLossController',
        'as' => 'api.generated::9PO9HWgFkuwNX32f',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_schedulers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_schedulers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_schedulers.index',
        'uses' => 'App\\Http\\Controllers\\TaskSchedulerController@index',
        'controller' => 'App\\Http\\Controllers\\TaskSchedulerController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_schedulers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_schedulers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_schedulers.create',
        'uses' => 'App\\Http\\Controllers\\TaskSchedulerController@create',
        'controller' => 'App\\Http\\Controllers\\TaskSchedulerController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_schedulers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/task_schedulers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_schedulers.store',
        'uses' => 'App\\Http\\Controllers\\TaskSchedulerController@store',
        'controller' => 'App\\Http\\Controllers\\TaskSchedulerController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_schedulers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_schedulers/{task_scheduler}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_schedulers.show',
        'uses' => 'App\\Http\\Controllers\\TaskSchedulerController@show',
        'controller' => 'App\\Http\\Controllers\\TaskSchedulerController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_schedulers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_schedulers/{task_scheduler}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_schedulers.edit',
        'uses' => 'App\\Http\\Controllers\\TaskSchedulerController@edit',
        'controller' => 'App\\Http\\Controllers\\TaskSchedulerController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_schedulers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/task_schedulers/{task_scheduler}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_schedulers.update',
        'uses' => 'App\\Http\\Controllers\\TaskSchedulerController@update',
        'controller' => 'App\\Http\\Controllers\\TaskSchedulerController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_schedulers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/task_schedulers/{task_scheduler}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_schedulers.destroy',
        'uses' => 'App\\Http\\Controllers\\TaskSchedulerController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskSchedulerController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_schedulers.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/task_schedulers/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskSchedulerController@bulk',
        'controller' => 'App\\Http\\Controllers\\TaskSchedulerController@bulk',
        'as' => 'api.task_schedulers.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::3MTgL91RcRjcYf8I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/scheduler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\SchedulerController@index',
        'controller' => 'App\\Http\\Controllers\\SchedulerController@index',
        'as' => 'api.generated::3MTgL91RcRjcYf8I',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::iCjThgX6C7b4olf2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/support/messages/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Support\\Messages\\SendingController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Support\\Messages\\SendingController',
        'as' => 'api.generated::iCjThgX6C7b4olf2',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::wH8YGu2x78RjjVHB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/self-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\SelfUpdateController@update',
        'controller' => 'App\\Http\\Controllers\\SelfUpdateController@update',
        'as' => 'api.generated::wH8YGu2x78RjjVHB',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::Rv9d1RO8iCOrRcXJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/self-update/check_version',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\SelfUpdateController@checkVersion',
        'controller' => 'App\\Http\\Controllers\\SelfUpdateController@checkVersion',
        'as' => 'api.generated::Rv9d1RO8iCOrRcXJ',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.system_logs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/system_logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.system_logs.index',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@index',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.system_logs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/system_logs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.system_logs.create',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@create',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.system_logs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/system_logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.system_logs.store',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@store',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.system_logs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/system_logs/{system_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.system_logs.show',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@show',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.system_logs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/system_logs/{system_log}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.system_logs.edit',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@edit',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.system_logs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/system_logs/{system_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.system_logs.update',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@update',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.system_logs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/system_logs/{system_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.system_logs.destroy',
        'uses' => 'App\\Http\\Controllers\\SystemLogController@destroy',
        'controller' => 'App\\Http\\Controllers\\SystemLogController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tasks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tasks.index',
        'uses' => 'App\\Http\\Controllers\\TaskController@index',
        'controller' => 'App\\Http\\Controllers\\TaskController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tasks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tasks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tasks.create',
        'uses' => 'App\\Http\\Controllers\\TaskController@create',
        'controller' => 'App\\Http\\Controllers\\TaskController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tasks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tasks.store',
        'uses' => 'App\\Http\\Controllers\\TaskController@store',
        'controller' => 'App\\Http\\Controllers\\TaskController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tasks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tasks.show',
        'uses' => 'App\\Http\\Controllers\\TaskController@show',
        'controller' => 'App\\Http\\Controllers\\TaskController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tasks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tasks/{task}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tasks.edit',
        'uses' => 'App\\Http\\Controllers\\TaskController@edit',
        'controller' => 'App\\Http\\Controllers\\TaskController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tasks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tasks.update',
        'uses' => 'App\\Http\\Controllers\\TaskController@update',
        'controller' => 'App\\Http\\Controllers\\TaskController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tasks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/tasks/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tasks.destroy',
        'uses' => 'App\\Http\\Controllers\\TaskController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tasks.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tasks/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@bulk',
        'controller' => 'App\\Http\\Controllers\\TaskController@bulk',
        'as' => 'api.tasks.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::wetYkWFg7EBc0Ssw' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/tasks/{task}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@upload',
        'controller' => 'App\\Http\\Controllers\\TaskController@upload',
        'as' => 'api.generated::wetYkWFg7EBc0Ssw',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::cQUeT2Jk9OdWUrKP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tasks/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@sort',
        'controller' => 'App\\Http\\Controllers\\TaskController@sort',
        'as' => 'api.generated::cQUeT2Jk9OdWUrKP',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_statuses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_statuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_statuses.index',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@index',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_statuses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_statuses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_statuses.create',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@create',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_statuses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/task_statuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_statuses.store',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@store',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_statuses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_statuses/{task_status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_statuses.show',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@show',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_statuses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/task_statuses/{task_status}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_statuses.edit',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@edit',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_statuses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/task_statuses/{task_status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_statuses.update',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@update',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_statuses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/task_statuses/{task_status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.task_statuses.destroy',
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.task_statuses.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/task_statuses/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskStatusController@bulk',
        'controller' => 'App\\Http\\Controllers\\TaskStatusController@bulk',
        'as' => 'api.task_statuses.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tax_rates.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax_rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tax_rates.index',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@index',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tax_rates.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax_rates/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tax_rates.create',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@create',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tax_rates.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tax_rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tax_rates.store',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@store',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tax_rates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax_rates/{tax_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tax_rates.show',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@show',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tax_rates.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tax_rates/{tax_rate}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tax_rates.edit',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@edit',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tax_rates.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/tax_rates/{tax_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tax_rates.update',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@update',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tax_rates.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/tax_rates/{tax_rate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tax_rates.destroy',
        'uses' => 'App\\Http\\Controllers\\TaxRateController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tax_rates.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tax_rates/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TaxRateController@bulk',
        'controller' => 'App\\Http\\Controllers\\TaxRateController@bulk',
        'as' => 'api.tax_rates.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.templates.show' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TemplateController@show',
        'controller' => 'App\\Http\\Controllers\\TemplateController@show',
        'as' => 'api.templates.show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tokens.index',
        'uses' => 'App\\Http\\Controllers\\TokenController@index',
        'controller' => 'App\\Http\\Controllers\\TokenController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tokens.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tokens/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tokens.create',
        'uses' => 'App\\Http\\Controllers\\TokenController@create',
        'controller' => 'App\\Http\\Controllers\\TokenController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tokens.store',
        'uses' => 'App\\Http\\Controllers\\TokenController@store',
        'controller' => 'App\\Http\\Controllers\\TokenController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tokens.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tokens/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tokens.show',
        'uses' => 'App\\Http\\Controllers\\TokenController@show',
        'controller' => 'App\\Http\\Controllers\\TokenController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tokens.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tokens/{token}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tokens.edit',
        'uses' => 'App\\Http\\Controllers\\TokenController@edit',
        'controller' => 'App\\Http\\Controllers\\TokenController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tokens.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/tokens/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tokens.update',
        'uses' => 'App\\Http\\Controllers\\TokenController@update',
        'controller' => 'App\\Http\\Controllers\\TokenController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/tokens/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.tokens.destroy',
        'uses' => 'App\\Http\\Controllers\\TokenController@destroy',
        'controller' => 'App\\Http\\Controllers\\TokenController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tokens.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/tokens/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TokenController@bulk',
        'controller' => 'App\\Http\\Controllers\\TokenController@bulk',
        'as' => 'api.tokens.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::zPQjfKV6D8uNxENs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/settings/enable_two_factor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TwoFactorController@setupTwoFactor',
        'controller' => 'App\\Http\\Controllers\\TwoFactorController@setupTwoFactor',
        'as' => 'api.generated::zPQjfKV6D8uNxENs',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::C8VYcs9yFgro4jCf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/settings/enable_two_factor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TwoFactorController@enableTwoFactor',
        'controller' => 'App\\Http\\Controllers\\TwoFactorController@enableTwoFactor',
        'as' => 'api.generated::C8VYcs9yFgro4jCf',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::xSmJBQXgAx0bs6w4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/settings/disable_two_factor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TwoFactorController@disableTwoFactor',
        'controller' => 'App\\Http\\Controllers\\TwoFactorController@disableTwoFactor',
        'as' => 'api.generated::xSmJBQXgAx0bs6w4',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.verify.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'throttle:100,1',
        ),
        'uses' => 'App\\Http\\Controllers\\TwilioController@generate',
        'controller' => 'App\\Http\\Controllers\\TwilioController@generate',
        'as' => 'api.verify.generate',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.verify.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/verify/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\TwilioController@confirm',
        'controller' => 'App\\Http\\Controllers\\TwilioController@confirm',
        'as' => 'api.verify.confirm',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vendors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.vendors.index',
        'uses' => 'App\\Http\\Controllers\\VendorController@index',
        'controller' => 'App\\Http\\Controllers\\VendorController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vendors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vendors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.vendors.create',
        'uses' => 'App\\Http\\Controllers\\VendorController@create',
        'controller' => 'App\\Http\\Controllers\\VendorController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vendors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.vendors.store',
        'uses' => 'App\\Http\\Controllers\\VendorController@store',
        'controller' => 'App\\Http\\Controllers\\VendorController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vendors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.vendors.show',
        'uses' => 'App\\Http\\Controllers\\VendorController@show',
        'controller' => 'App\\Http\\Controllers\\VendorController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vendors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vendors/{vendor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.vendors.edit',
        'uses' => 'App\\Http\\Controllers\\VendorController@edit',
        'controller' => 'App\\Http\\Controllers\\VendorController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vendors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.vendors.update',
        'uses' => 'App\\Http\\Controllers\\VendorController@update',
        'controller' => 'App\\Http\\Controllers\\VendorController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vendors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.vendors.destroy',
        'uses' => 'App\\Http\\Controllers\\VendorController@destroy',
        'controller' => 'App\\Http\\Controllers\\VendorController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.vendors.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/vendors/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorController@bulk',
        'controller' => 'App\\Http\\Controllers\\VendorController@bulk',
        'as' => 'api.vendors.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::V91iuovs5riVYxao' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/vendors/{vendor}/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorController@upload',
        'controller' => 'App\\Http\\Controllers\\VendorController@upload',
        'as' => 'api.generated::V91iuovs5riVYxao',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::MI59Gqx3aOIc3iwp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'as' => 'api.generated::MI59Gqx3aOIc3iwp',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::8a52qaagbTa1Ik9N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\UserController@create',
        'as' => 'api.generated::8a52qaagbTa1Ik9N',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::4mI5JJYMl0WCD6aM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\UserController@show',
        'as' => 'api.generated::4mI5JJYMl0WCD6aM',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::Htrk3WsAyZCWjm4f' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\UserController@update',
        'as' => 'api.generated::Htrk3WsAyZCWjm4f',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::LHrJXbXCeVUyZEYG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\UserController@store',
        'as' => 'api.generated::LHrJXbXCeVUyZEYG',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::UvTlV0upFzbRsTK6' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/users/{user}/detach_from_company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@detach',
        'controller' => 'App\\Http\\Controllers\\UserController@detach',
        'as' => 'api.generated::UvTlV0upFzbRsTK6',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.users.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@bulk',
        'controller' => 'App\\Http\\Controllers\\UserController@bulk',
        'as' => 'api.users.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::NAEOTkvC3L8kbLIy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users/{user}/invite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@invite',
        'controller' => 'App\\Http\\Controllers\\UserController@invite',
        'as' => 'api.generated::NAEOTkvC3L8kbLIy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::bBqiqMoO6YQpYePA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/{user}/reconfirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@reconfirm',
        'controller' => 'App\\Http\\Controllers\\UserController@reconfirm',
        'as' => 'api.generated::bBqiqMoO6YQpYePA',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.webhooks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/webhooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.webhooks.index',
        'uses' => 'App\\Http\\Controllers\\WebhookController@index',
        'controller' => 'App\\Http\\Controllers\\WebhookController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.webhooks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/webhooks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.webhooks.create',
        'uses' => 'App\\Http\\Controllers\\WebhookController@create',
        'controller' => 'App\\Http\\Controllers\\WebhookController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.webhooks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/webhooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.webhooks.store',
        'uses' => 'App\\Http\\Controllers\\WebhookController@store',
        'controller' => 'App\\Http\\Controllers\\WebhookController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.webhooks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/webhooks/{webhook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.webhooks.show',
        'uses' => 'App\\Http\\Controllers\\WebhookController@show',
        'controller' => 'App\\Http\\Controllers\\WebhookController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.webhooks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/webhooks/{webhook}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.webhooks.edit',
        'uses' => 'App\\Http\\Controllers\\WebhookController@edit',
        'controller' => 'App\\Http\\Controllers\\WebhookController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.webhooks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/webhooks/{webhook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.webhooks.update',
        'uses' => 'App\\Http\\Controllers\\WebhookController@update',
        'controller' => 'App\\Http\\Controllers\\WebhookController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.webhooks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/webhooks/{webhook}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.webhooks.destroy',
        'uses' => 'App\\Http\\Controllers\\WebhookController@destroy',
        'controller' => 'App\\Http\\Controllers\\WebhookController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.webhooks.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/webhooks/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\WebhookController@bulk',
        'controller' => 'App\\Http\\Controllers\\WebhookController@bulk',
        'as' => 'api.webhooks.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.stripe.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/stripe/update_payment_methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@update',
        'controller' => 'App\\Http\\Controllers\\StripeController@update',
        'as' => 'api.stripe.update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.stripe.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/stripe/import_customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@import',
        'controller' => 'App\\Http\\Controllers\\StripeController@import',
        'as' => 'api.stripe.import',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.stripe.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/stripe/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@verify',
        'controller' => 'App\\Http\\Controllers\\StripeController@verify',
        'as' => 'api.stripe.verify',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.stripe.disconnect' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/stripe/disconnect/{company_gateway_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
          5 => 'password_protected',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@disconnect',
        'controller' => 'App\\Http\\Controllers\\StripeController@disconnect',
        'as' => 'api.stripe.disconnect',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.subscriptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.subscriptions.index',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.subscriptions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subscriptions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.subscriptions.create',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@create',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@create',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.subscriptions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.subscriptions.store',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@store',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.subscriptions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.subscriptions.show',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@show',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.subscriptions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/subscriptions/{subscription}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.subscriptions.edit',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@edit',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@edit',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.subscriptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/v1/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.subscriptions.update',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@update',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@update',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.subscriptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'as' => 'api.subscriptions.destroy',
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@destroy',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@destroy',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.subscriptions.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/subscriptions/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@bulk',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@bulk',
        'as' => 'api.subscriptions.bulk',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.generated::MkNntrJRwU0hR1SY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/statics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:300,1',
          2 => 'api_db',
          3 => 'token_auth',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\StaticController@__invoke',
        'controller' => 'App\\Http\\Controllers\\StaticController',
        'as' => 'api.generated::MkNntrJRwU0hR1SY',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sms_reset.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/sms_reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:10,1',
        ),
        'uses' => 'App\\Http\\Controllers\\TwilioController@generate2faResetCode',
        'controller' => 'App\\Http\\Controllers\\TwilioController@generate2faResetCode',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sms_reset.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sms_reset.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/sms_reset/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:20,1',
        ),
        'uses' => 'App\\Http\\Controllers\\TwilioController@confirm2faResetCode',
        'controller' => 'App\\Http\\Controllers\\TwilioController@confirm2faResetCode',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sms_reset.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_webhook' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment_webhook/{company_key}/{company_gateway_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:1000,1',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentWebhookController@__invoke',
        'controller' => 'App\\Http\\Controllers\\PaymentWebhookController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment_webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_notification_webhook' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payment_notification_webhook/{company_key}/{company_gateway_id}/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:1000,1',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentNotificationWebhookController@__invoke',
        'controller' => 'App\\Http\\Controllers\\PaymentNotificationWebhookController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment_notification_webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QHXi1ul7hubMQCje' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/postmark_webhook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:1000,1',
        ),
        'uses' => 'App\\Http\\Controllers\\PostMarkController@webhook',
        'controller' => 'App\\Http\\Controllers\\PostMarkController@webhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QHXi1ul7hubMQCje',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DjBwlUquOXu5pFpK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'token_hash_router',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:100,1',
        ),
        'uses' => 'App\\Http\\Controllers\\OneTimeTokenController@router',
        'controller' => 'App\\Http\\Controllers\\OneTimeTokenController@router',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DjBwlUquOXu5pFpK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ouj0kyzfYeZMvsyj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'webcron',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:100,1',
        ),
        'uses' => 'App\\Http\\Controllers\\WebCronController@index',
        'controller' => 'App\\Http\\Controllers\\WebCronController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ouj0kyzfYeZMvsyj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TxxNeac8babDwT9R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/get_migration_account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
          2 => 'throttle:100,1',
        ),
        'uses' => 'App\\Http\\Controllers\\HostedMigrationController@getAccount',
        'controller' => 'App\\Http\\Controllers\\HostedMigrationController@getAccount',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TxxNeac8babDwT9R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wh0Y9uX1JjmfaXvJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/confirm_forwarding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
          2 => 'throttle:100,1',
        ),
        'uses' => 'App\\Http\\Controllers\\HostedMigrationController@confirmForwarding',
        'controller' => 'App\\Http\\Controllers\\HostedMigrationController@confirmForwarding',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Wh0Y9uX1JjmfaXvJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oTPieICAEJPHL1wV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/process_webhook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:1000,1',
        ),
        'uses' => 'App\\Http\\Controllers\\InAppPurchase\\AppleController@process_webhook',
        'controller' => 'App\\Http\\Controllers\\InAppPurchase\\AppleController@process_webhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oTPieICAEJPHL1wV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lOgPVy8kY1iYZtZp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/confirm_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:1000,1',
        ),
        'uses' => 'App\\Http\\Controllers\\InAppPurchase\\AppleController@confirm_purchase',
        'controller' => 'App\\Http\\Controllers\\InAppPurchase\\AppleController@confirm_purchase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lOgPVy8kY1iYZtZp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XldNfpYHHMQouqH9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/yodlee/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:100,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Bank\\YodleeController@refreshWebhook',
        'controller' => 'App\\Http\\Controllers\\Bank\\YodleeController@refreshWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XldNfpYHHMQouqH9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zsW8OxIemrAsZCES' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/yodlee/data_updates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:100,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Bank\\YodleeController@dataUpdatesWebhook',
        'controller' => 'App\\Http\\Controllers\\Bank\\YodleeController@dataUpdatesWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zsW8OxIemrAsZCES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dGrdFMYyBa1VBWNh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/yodlee/refresh_updates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:100,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Bank\\YodleeController@refreshUpdatesWebhook',
        'controller' => 'App\\Http\\Controllers\\Bank\\YodleeController@refreshUpdatesWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dGrdFMYyBa1VBWNh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NfPN6qYZAsISDrAs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/yodlee/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:100,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Bank\\YodleeController@balanceWebhook',
        'controller' => 'App\\Http\\Controllers\\Bank\\YodleeController@balanceWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NfPN6qYZAsISDrAs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PsrpFTZvHOizTCdg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseController@notFoundClient',
        'controller' => 'App\\Http\\Controllers\\BaseController@notFoundClient',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PsrpFTZvHOizTCdg',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pfkifKnQ7WGyzqcH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\BaseController@flutterRoute',
        'controller' => 'App\\Http\\Controllers\\BaseController@flutterRoute',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pfkifKnQ7WGyzqcH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xOEJCe6dh8OdZI5A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@index',
        'controller' => 'App\\Http\\Controllers\\SetupController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xOEJCe6dh8OdZI5A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ngK3Fd7iQ7yHplMn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@doSetup',
        'controller' => 'App\\Http\\Controllers\\SetupController@doSetup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ngK3Fd7iQ7yHplMn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uWXgtp41OEetKB0P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@update',
        'controller' => 'App\\Http\\Controllers\\SetupController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uWXgtp41OEetKB0P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BPQwS6ruTVoVoElE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setup/check_db',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@checkDB',
        'controller' => 'App\\Http\\Controllers\\SetupController@checkDB',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BPQwS6ruTVoVoElE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pmy5WwO2ieUcPItO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setup/check_mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@checkMail',
        'controller' => 'App\\Http\\Controllers\\SetupController@checkMail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Pmy5WwO2ieUcPItO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ieZIIAKF1CvYcgJG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setup/check_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\SetupController@checkPdf',
        'controller' => 'App\\Http\\Controllers\\SetupController@checkPdf',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ieZIIAKF1CvYcgJG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'domain_db',
          2 => 'email_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'email_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wepay.signup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wepay/signup/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WePayController@signup',
        'controller' => 'App\\Http\\Controllers\\WePayController@signup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wepay.signup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wepay.finished' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wepay/finished',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WePayController@finished',
        'controller' => 'App\\Http\\Controllers\\WePayController@finished',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wepay.finished',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VtZUg30ixnZd8eBg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToProvider',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VtZUg30ixnZd8eBg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RpZS3te0fZ8yKVE6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirm/{confirmation_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'url_db',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@confirm',
        'controller' => 'App\\Http\\Controllers\\UserController@confirm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RpZS3te0fZ8yKVE6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TDrpmACinTmLiRh4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirm/{confirmation_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'url_db',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@confirmWithPassword',
        'controller' => 'App\\Http\\Controllers\\UserController@confirmWithPassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TDrpmACinTmLiRh4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stripe_connect.initialization' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe/signup/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeConnectController@initialize',
        'controller' => 'App\\Http\\Controllers\\StripeConnectController@initialize',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stripe_connect.initialization',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stripe_connect.return' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe/completed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeConnectController@completed',
        'controller' => 'App\\Http\\Controllers\\StripeConnectController@completed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stripe_connect.return',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'yodlee.auth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'yodlee/onboard/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Bank\\YodleeController@auth',
        'controller' => 'App\\Http\\Controllers\\Bank\\YodleeController@auth',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'yodlee.auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkout.3ds_redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/3ds_redirect/{company_key}/{company_gateway_id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateways\\Checkout3dsController@index',
        'controller' => 'App\\Http\\Controllers\\Gateways\\Checkout3dsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'checkout.3ds_redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mollie.3ds_redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mollie/3ds_redirect/{company_key}/{company_gateway_id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateways\\Mollie3dsController@index',
        'controller' => 'App\\Http\\Controllers\\Gateways\\Mollie3dsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'mollie.3ds_redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gocardless.ibp_redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gocardless/ibp_redirect/{company_key}/{company_gateway_id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Gateways\\GoCardlessController@ibpRedirect',
        'controller' => 'App\\Http\\Controllers\\Gateways\\GoCardlessController@ibpRedirect',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gocardless.ibp_redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6QhawNXOk72jIYKa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '.well-known/apple-developer-merchantid-domain-association',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ApplePayDomainController@showAppleMerchantId',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ApplePayDomainController@showAppleMerchantId',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6QhawNXOk72jIYKa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gkvaz4ut4yKyWFSL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/contact/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'contact',
          1 => 'api_secret_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\LoginController@apiLogin',
        'controller' => 'App\\Http\\Controllers\\Contact\\LoginController@apiLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Gkvaz4ut4yKyWFSL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.contact.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/contact/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'contact',
          1 => 'contact_db',
          2 => 'api_secret_check',
          3 => 'contact_token_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\Contact\\InvoiceController@index',
        'as' => 'api.contact.',
        'namespace' => NULL,
        'prefix' => '/api/v1/contact',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.catchall' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'vendor_locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VendorContactLoginController@catch',
        'controller' => 'App\\Http\\Controllers\\Auth\\VendorContactLoginController@catch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'vendor.catchall',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact_login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/key_login/{contact_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'vendor_contact_key_login',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\VendorContactHashLoginController@login',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\VendorContactHashLoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact_login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/purchase_order/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\InvitationController@purchaseOrder',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\InvitationController@purchaseOrder',
        'as' => 'vendor.',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.generated::nljotVxew4ypAZ3B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/purchase_order/{invitation_key}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\InvitationController@download',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\InvitationController@download',
        'as' => 'vendor.generated::nljotVxew4ypAZ3B',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\PurchaseOrderController@index',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\PurchaseOrderController@index',
        'as' => 'vendor.dashboard',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.purchase_orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/purchase_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\PurchaseOrderController@index',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\PurchaseOrderController@index',
        'as' => 'vendor.purchase_orders.index',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.purchase_order.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/purchase_orders/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\PurchaseOrderController@show',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\PurchaseOrderController@show',
        'as' => 'vendor.purchase_order.show',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/profile/{vendor_contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\VendorContactController@edit',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\VendorContactController@edit',
        'as' => 'vendor.profile.edit',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'vendor/profile/{vendor_contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\VendorContactController@update',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\VendorContactController@update',
        'as' => 'vendor.profile.update',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.purchase_orders.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vendor/purchase_orders/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\PurchaseOrderController@bulk',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\PurchaseOrderController@bulk',
        'as' => 'vendor.purchase_orders.bulk',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VendorContactLoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\VendorContactLoginController@logout',
        'as' => 'vendor.logout',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.upload.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vendor/purchase_order/upload/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\UploadController@upload',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\UploadController@upload',
        'as' => 'vendor.upload.store',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.documents.download_multiple' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vendor/documents/download_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@downloadMultiple',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@downloadMultiple',
        'as' => 'vendor.documents.download_multiple',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.documents.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/documents/{document}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@download',
        'as' => 'vendor.documents.download',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.documents.download_pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/documents/{document}/download_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@download',
        'as' => 'vendor.documents.download_pdf',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.documents.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'as' => 'vendor.documents.index',
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@index',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/documents/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:vendor',
          2 => 'vendor_locale',
          3 => 'domain_db',
        ),
        'as' => 'vendor.documents.show',
        'uses' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\VendorPortal\\DocumentController@show',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.catchall' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.catchall',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/login/{company_key?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.login.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/login/{company_key?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.login.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/register/{company_key?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'contact_register',
          4 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactRegisterController@showRegisterForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactRegisterController@showRegisterForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IcFCfc7v4dXP1CKi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/register/{company_key?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'contact_register',
          4 => 'locale',
          5 => 'throttle:10,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactRegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactRegisterController@register',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IcFCfc7v4dXP1CKi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactForgotPasswordController@showLinkRequestForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactForgotPasswordController@sendResetLinkEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactResetPasswordController@showResetForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_account',
          3 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactResetPasswordController@reset',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.entity_view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view/{entity_type}/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.entity_view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.entity_view.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view/{entity_type}/{invitation_key}/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@password',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@password',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.entity_view.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5wwRtrgqw9s6NSHc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'view/{entity_type}/{invitation_key}/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@handlePassword',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@handlePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5wwRtrgqw9s6NSHc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.set_password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'set_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@handlePasswordSet',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\EntityViewController@handlePasswordSet',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.set_password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tmp_pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tmp_pdf/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\TempRouteController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\TempRouteController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tmp_pdf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.contact_login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/key_login/{contact_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_key_login',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@login',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.contact_login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.contact_magic_link' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/magic_link/{magic_link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_key_login',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@magicLink',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@magicLink',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.contact_magic_link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'documents.public_download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'documents/{document_hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@publicDownload',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@publicDownload',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'documents.public_download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.error' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'error',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@errorPage',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ContactHashLoginController@errorPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.error',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZPTNREfaztokcbfq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment/{contact_key}/{payment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
          2 => 'contact_key_login',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@paymentRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@paymentRouter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZPTNREfaztokcbfq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.ninja_contact_login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/ninja/{contact_key}/{company_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\NinjaPlanController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\NinjaPlanController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.ninja_contact_login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.trial.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/ninja/trial_confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\NinjaPlanController@trial_confirmation',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\NinjaPlanController@trial_confirmation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.trial.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DashboardController@index',
        'as' => 'client.dashboard',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\NinjaPlanController@plan',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\NinjaPlanController@plan',
        'as' => 'client.plan',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@index',
        'as' => 'client.invoices.index',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.invoices.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/invoices/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@bulk',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@bulk',
        'as' => 'client.invoices.bulk',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.invoices.catch_bulk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoices/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@catch_bulk',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@catch_bulk',
        'as' => 'client.invoices.catch_bulk',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.invoices.download' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/invoices/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@download',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@download',
        'as' => 'client.invoices.download',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.invoice.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoices/{invoice}/{hash?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@show',
        'as' => 'client.invoice.show',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.invoice.show_invitation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoices/{invoice_invitation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvoiceController@show',
        'as' => 'client.invoice.show_invitation',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.recurring_invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@index',
        'as' => 'client.recurring_invoices.index',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.recurring_invoice.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoices/{recurring_invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@show',
        'as' => 'client.recurring_invoice.show',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.recurring_invoices.request_cancellation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoices/{recurring_invoice}/request_cancellation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@requestCancellation',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\RecurringInvoiceController@requestCancellation',
        'as' => 'client.recurring_invoices.request_cancellation',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payments.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/payments/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@process',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@process',
        'as' => 'client.payments.process',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payments.catch_process' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payments/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@catch_process',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@catch_process',
        'as' => 'client.payments.catch_process',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payments.credit_response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/payments/credit_response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@credit_response',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@credit_response',
        'as' => 'client.payments.credit_response',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@index',
        'as' => 'client.payments.index',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payments/{payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@show',
        'as' => 'client.payments.show',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/profile/{client_contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@edit',
        'as' => 'client.profile.edit',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'client/profile/{client_contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@update',
        'as' => 'client.profile.update',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.profile.edit_client' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'client/profile/{client_contact}/edit_client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@updateClient',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@updateClient',
        'as' => 'client.profile.edit_client',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.profile.edit_localization' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'client/profile/{client_contact}/localization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@updateClientLocalization',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\ProfileController@updateClientLocalization',
        'as' => 'client.profile.edit_localization',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment_methods.verification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods/{payment_method}/verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@verify',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@verify',
        'as' => 'client.payment_methods.verification',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/payment_methods/{payment_method}/verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
          5 => 'throttle:10,1',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@processVerification',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@processVerification',
        'as' => 'client.',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment_methods.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@store',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@store',
        'as' => 'client.payment_methods.confirm',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment_methods.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'as' => 'client.payment_methods.index',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@index',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment_methods.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'as' => 'client.payment_methods.create',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@create',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@create',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment_methods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/payment_methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'as' => 'client.payment_methods.store',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@store',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@store',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment_methods.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/payment_methods/{payment_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'as' => 'client.payment_methods.show',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@show',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payment_methods.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'client/payment_methods/{payment_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'as' => 'client.payment_methods.destroy',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentMethodController@destroy',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.quotes.bulk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'client/quotes/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@bulk',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@bulk',
        'as' => 'client.quotes.bulk',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.quotes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@index',
        'as' => 'client.quotes.index',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.quote.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quotes/{quote}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@show',
        'as' => 'client.quote.show',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.quote.show_invitation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quotes/{quote_invitation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@show',
        'as' => 'client.quote.show_invitation',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.quotes.download' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/quotes/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@download',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\QuoteController@download',
        'as' => 'client.quotes.download',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.credits.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@index',
        'as' => 'client.credits.index',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.credit.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credits/{credit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@show',
        'as' => 'client.credit.show',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.credits.show_invitation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credits/{credit_invitation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\CreditController@show',
        'as' => 'client.credits.show_invitation',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.switch_company' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/client/switch_company/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SwitchCompanyController@__invoke',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SwitchCompanyController',
        'as' => 'client.switch_company',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.documents.download_multiple' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/documents/download_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@downloadMultiple',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@downloadMultiple',
        'as' => 'client.documents.download_multiple',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.documents.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/documents/{document}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@download',
        'as' => 'client.documents.download',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.documents.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'as' => 'client.documents.index',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@index',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/documents/{document}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'as' => 'client.documents.show',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\DocumentController@show',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.subscription.plan_switch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/subscriptions/{recurring_invoice}/plan_switch/{target}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPlanSwitchController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPlanSwitchController@index',
        'as' => 'client.subscription.plan_switch',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.subscriptions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/subscriptions/{recurring_invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionController@show',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionController@show',
        'as' => 'client.subscriptions.show',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.subscriptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
          5 => 'portal_enabled',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionController@index',
        'as' => 'client.subscriptions.index',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.tasks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'as' => 'client.tasks.index',
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\TaskController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\TaskController@index',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.statement' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/statement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\StatementController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\StatementController@index',
        'as' => 'client.statement',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.statement.raw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/statement/raw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\StatementController@raw',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\StatementController@raw',
        'as' => 'client.statement.raw',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.upload.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\UploadController@__invoke',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\UploadController',
        'as' => 'client.upload.store',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'auth:contact',
          2 => 'locale',
          3 => 'domain_db',
          4 => 'check_client_existence',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\ContactLoginController@logout',
        'as' => 'client.logout',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payments.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payments/process/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'locale',
          2 => 'domain_db',
          3 => 'verify_hash',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@response',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@response',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.payments.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.payments.response.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/process/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'locale',
          2 => 'domain_db',
          3 => 'verify_hash',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@response',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\PaymentController@response',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.payments.response.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.subscription.purchase' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/subscriptions/{subscription}/purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPurchaseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.subscription.purchase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.subscription.upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/subscriptions/{subscription}/purchase/v2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'domain_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPurchaseController@upgrade',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\SubscriptionPurchaseController@upgrade',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'client.subscription.upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.generated::NFvBSax1A69VYBCI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoice/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@recurringRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@recurringRouter',
        'as' => 'client.generated::NFvBSax1A69VYBCI',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.generated::jyh8mtFWp41MU6u9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoice/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@invoiceRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@invoiceRouter',
        'as' => 'client.generated::jyh8mtFWp41MU6u9',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.generated::8PG0QJulcIDg9G2i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quote/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@quoteRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@quoteRouter',
        'as' => 'client.generated::8PG0QJulcIDg9G2i',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.generated::FnCoUvY3bHyGh0UY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credit/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@creditRouter',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@creditRouter',
        'as' => 'client.generated::FnCoUvY3bHyGh0UY',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.recurring_invoice.download_invitation_key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/recurring_invoice/{invitation_key}/download_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\RecurringInvoiceController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\RecurringInvoiceController@downloadPdf',
        'as' => 'client.recurring_invoice.download_invitation_key',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.invoice.download_invitation_key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoice/{invitation_key}/download_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@downloadPdf',
        'as' => 'client.invoice.download_invitation_key',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.quote.download_invitation_key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/quote/{invitation_key}/download_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\QuoteController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\QuoteController@downloadPdf',
        'as' => 'client.quote.download_invitation_key',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.credit.download_invitation_key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/credit/{invitation_key}/download_pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\CreditController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\CreditController@downloadPdf',
        'as' => 'client.credit.download_invitation_key',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.generated::iNj0PX1Nma9Rbj7C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/{entity}/{invitation_key}/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@routerForDownload',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@routerForDownload',
        'as' => 'client.generated::iNj0PX1Nma9Rbj7C',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.pay.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/pay/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@payInvoice',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@payInvoice',
        'as' => 'client.pay.invoice',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.unsubscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/unsubscribe/{entity}/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@unsubscribe',
        'controller' => 'App\\Http\\Controllers\\ClientPortal\\InvitationController@unsubscribe',
        'as' => 'client.unsubscribe',
        'namespace' => NULL,
        'prefix' => '/client',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'phantom_view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'phantom/{entity}/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'client',
          1 => 'invite_db',
          2 => 'phantom_secret',
        ),
        'uses' => 'App\\Utils\\PhantomJS\\Phantom@displayInvitation',
        'controller' => 'App\\Utils\\PhantomJS\\Phantom@displayInvitation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'phantom_view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aA1qCrV32nnqavL3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Shop\\ProductController@index',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::aA1qCrV32nnqavL3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OVZkIHm17LPZpVvH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/shop/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ClientController@store',
        'controller' => 'App\\Http\\Controllers\\Shop\\ClientController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::OVZkIHm17LPZpVvH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bOGtQshAEyXTT39W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/shop/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\Shop\\InvoiceController@store',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::bOGtQshAEyXTT39W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yEuwH65CvEttAA4Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/client/{contact_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ClientController@show',
        'controller' => 'App\\Http\\Controllers\\Shop\\ClientController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::yEuwH65CvEttAA4Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ef9eUbImZYaLxwP9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/invoice/{invitation_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\InvoiceController@show',
        'controller' => 'App\\Http\\Controllers\\Shop\\InvoiceController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ef9eUbImZYaLxwP9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9HwgLM9mmgNQHsp8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/product/{product_key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\Shop\\ProductController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9HwgLM9mmgNQHsp8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jl0PchSjPstD2gZr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/shop/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'shop',
          1 => 'company_key_db',
          2 => 'locale',
        ),
        'uses' => 'App\\Http\\Controllers\\Shop\\ProfileController@show',
        'controller' => 'App\\Http\\Controllers\\Shop\\ProfileController@show',
        'namespace' => NULL,
        'prefix' => '/api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jl0PchSjPstD2gZr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
