# Coats WBA

1. Requirements
2. Installation

## 1. Requirements

PHP 5.5.x (win intl extension enabled)
Composer
MSSQL Server 2014

## 2. Installation

### 2.1 Checkout sources

Checkout application sources from git

```bash
git clone git@bitbucket.org:tremend/coats_proxy.git
```

Run composer

```bash
composer install
```

Install legacy application as a git submodule:

```bash
git submodule update --init --recursive
```

### 2.2 Configure application

#### 2.2.1 Create a new app.php file from the sample one app.default.php

```bash
# copy cake3 configuration sample
cp config/app.default.php config/app.php

# edit cake3 configuration file
config/app.php
```

#### 2.2.2 Cache in Redis

Configure cache to use the Redis server:

```bash
'Cache' => [
        'default' => [
            'className' => 'Redis',
        ]
],

...
'_cake_core_' => [
        'className' => 'Redis',
        'prefix' => 'proxy_cake_core_',
]        

...
'_cake_model_' => [
        'className' => 'Redis',
        'prefix' => 'proxy_cake_model_',
]        
```

#### 2.2.3 Error reporting

Cake2 application is triggering a lot of warnings, so not the best way to handle this, but for now exclude warnings from logging

```bash
'Error' => [
    'errorLevel' => E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING,
]
```

#### 2.2.4 MSSQL Driver

Configure application to use the MSSQL Driver and PDO UTF8 encoding

```bash
'Datasources' => [
    'default' => [
        'driver' => 'App\Extensions\Database\Driver\Sqlserver',
        'encoding' => PDO::SQLSRV_ENCODING_UTF8,
        'quoteIdentifiers' => true
    ]
]
```

#### 2.2.5 Minified CSS and JS folders

Create folders for statically cache the minified CSS and JS files

```bash
mkdir -p webroot/min-css
mkdir -p webroot/min-js
```

### 2.3 Configure legacy application

TODO: Adapt cake2 configuration based on cake3 environment variable.

Set application environment as QA: ``SetEnv ENV qa`` in the virtual host

Comment the following lines inside .htaccess file:

```
RewriteCond %{HTTP_HOST} wcs.coatscolorexpress.com$ [NC]

RewriteRule ^(.*)$ https://wcs.coatscolourexpress.com [R=301,L]

php_value session.cookie_domain ".coatscolourexpress.com"
```

Copy configuration files for cake2 application

```bash
cp -r build/legacy/config/* legacy/Project/app/Config/
```

Create cache folders

```bash
mkdir -p legacy/Project/app/tmp/cache/persistent
mkdir -p legacy/Project/app/tmp/cache/models
```

Create JS and CSS folders

```bash
mkdir -p legacy/Project/app/tmp/cache/css
mkdir -p legacy/Project/app/tmp/cache/js
```

Create Session directory necessary for uploaded files

```bash
mkdir -p legacy/Project/app/tmp/sessions
```

#### 2.3.2 Use custom SQL Model

Configure in config/database.php

```bash
public $default = array(
    'datasource' => 'SqlserverExtended'
)
```