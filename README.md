# Coats WBA

1. [Requirements](#requirements)
2. [Installation](#installation)
3. [Additional docs](#docs)

## <a name="requirements"></a>1. Requirements

* PHP 5.5.x (win intl extension enabled)
    * php_intl.dll (comes with PHP)
    * php_curl.dll (comse with PHP)
    * php_pdo_sqlite.dll (comes with PHP - for development toolbar for cake3)
    * php_soap.dll (comes with PHP)
    * php_redis.dll (download the TS version for PHP 5.5 version: https://pecl.php.net/package/redis/2.2.7/windows)
    * php_sqlsrv_55_ts.dll (windows MSSQL PHP driver: https://www.microsoft.com/en-us/download/details.aspx?id=20098)
    * php_pdo_sqlsrv_55_ts.dll (windows MSSQL PHP driver: https://www.microsoft.com/en-us/download/details.aspx?id=20098)
* PHP Composer (https://getcomposer.org/download/)
* Redis server (https://github.com/MSOpenTech/redis/releases/tag/win-3.0.501)
* MSSQL Server 2014

## <a name="installation"></a>2. Installation

### 2.1 Checkout sources

Checkout application sources from git into the desired folder:

```bash
git clone git@github.com:Coats/WBA-Stable-Cake3-Proxy.git [PROJECT_FOLDER]
```

Enter in the [PROJECT_FODLER] and run composer install to fetch the vendors source code

```bash
cd [PROJECT_FOLDER]

composer install
```

Install legacy application as a git submodule:

```bash
git submodule update --init --recursive
```

Just to be sure that everything is checkout correctly, have a look at the checkout data and do a git status:

```bash
cd [PROJECT_FOLDER]/legacy

git status
```

This should list the master branch and should have everything up to date. If not, do a ```git pull```

### 2.2 Configure application

#### 2.2.1 Create a new app.php file from the sample one app.default.php (composer install already does that)

This is what composer already did, so you may skip this step.

```bash
# copy cake3 configuration sample
cp config/app.default.php config/app.php

# edit cake3 configuration file
config/app.php
```

#### 2.2.2 Cache in Redis

Configure cache for Cake3 to use the Redis server:

```bash
# config/app.php

'Cache' => [
    'default' => [
        'className' => 'Redis',
        'server' => 'localhost',
        'port' => 6379,
        'timeout' => 5,
        'password' => null,
        'persistent' => false
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
# config/app.php

'Error' => [
    'errorLevel' => E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING,
]
```

#### 2.2.4 MSSQL Driver

Configure application to use the MSSQL Driver, a poroxy Connection handler in order for both applications to use
the same database connection and PDO UTF8 encoding

```bash
# config/app.php

'Datasources' => [
    'default' => [
        'className' => 'App\Extensions\Database\Connection',
        'driver' => 'App\Extensions\Database\Driver\Sqlserver',
        'encoding' => PDO::SQLSRV_ENCODING_UTF8,
        'quoteIdentifiers' => true,
        
        'host' => '[HOST]',
        'username' => '[USER]',
        'password' => '[PASSWORD]',
        'database' => '[DATABASE_NAME]',
    ]
]
```

#### 2.2.5 Minified CSS and JS folders

Create folders for statically cache the minified CSS and JS files

```bash
mkdir -p webroot/min-css
mkdir -p webroot/min-js
```

If you change the CSS and/or JS files you will have to delete the files under ```webroot/min-css``` respectively under
```webroot/min-js```.

One every run, the application will try to create the minified versions of all the CSS and JS files under ```webroot/min-css```
and ```webroot/min-js``` respectively.

### 2.3 Configure legacy application

These steps are intended for setting up a development environment, not the production environment.
Some of the steps need to be skipped or changed for the production environment.

#### 2.3.1 Setup general application configuration and folders

Set application environment as QA: ``SetEnv ENV qa`` in the virtual host

Comment the following lines inside .htaccess file. The rewrite conditions enforces the browser to redirect the client
to the subdomain of the application.

```
RewriteCond %{HTTP_HOST} wcs.coatscolorexpress.com$ [NC]

RewriteRule ^(.*)$ https://wcs.coatscolourexpress.com [R=301,L]

php_value session.cookie_domain ".coatscolourexpress.com"
```

Copy default configuration files for cake2 application. Detailed instruction of what are the actual changes for these files
will be provided in the next subchapters.

```bash
cp -r build/legacy/config/* legacy/Project/app/Config/
```

Create cache folders

```bash
mkdir legacy\Project\app\tmp\cache\persistent
mkdir legacy\Project\app\tmp\cache\models
```

Create JS and CSS temporary folders

```bash
mkdir legacy\Project\app\tmp\cache\css
mkdir legacy\Project\app\tmp\cache\js
```

Create logs folder

```bash
mkdir legacy\Project\app\tmp\logs
mkdir legacy\Project\app\tmp\logs\debug
```

Create Session directory necessary for uploaded files and additional tempory folders used by the SAP controller.

```bash
mkdir legacy\Project\app\tmp\sessions
mkdir legacy\Project\app\tmp\backend_uploads
mkdir legacy\Project\app\tmp\backend_uploads\processing_files
mkdir legacy\Project\app\tmp\backend_uploads\system_processing
mkdir legacy\Project\app\tmp\backend_uploads\bulk_upload_temp
```

__Note:__ For performance related reasons these folders are created manually. Checking on every run if these folder are created has
an impact on the performance side.

#### 2.3.2 In order to avoid naming conflict of classes between Cake3 and Cake2 application, some of the classes need to be changed in the config files accordingly:

* Rename every ```Configure``` class call to ```CConfigure```
* Rename every ```App``` class call to ```CApp```

In the following files:

* ```legacy/Project/app/Config/bootstrap.php```
* ```legacy/Project/app/Config/core.php```

#### 2.3.3 Use custom SQL Model

In order to have the two cake application linked together at the ORM level, we need to use a custom glue class that will handle that for us. 
Configure this class in ```legacy/Project/app/Config/database.php```

```bash
public $default = array(
    'datasource' => 'SqlserverExtended'
)
```

#### 2.3.4 Configure cached data to be stored into Redis server

Configure this in ```legacy/Project/app/Config/core.php```

```bash
$engine = 'RedisNew';
```

#### 2.3.5 Configure session to be stored into Redis server

Configure this in ```legacy/Project/app/Config/core.php```

```bash
CConfigure::write('Session', array(
    'defaults' => 'cache',
    'handler' => array(
        'config' => 'session',
    )
));

Cache::config ('session', array (
    'engine' => $engine,
    'prefix' => $prefix . 'cake_session_',
    'duration' => 12 * 3600
));

/*
 * OR
 */


/**
 * Configuration storing the session information into a different Redis database by explicitly specifying the database to use: 
 */
Cache::config('session', array(
    'engine' => $engine,
    'prefix' => $prefix . 'cake_session_',
    'duration' => 12 * 3600,
    // database must be a numeric index, 0 (zero) is the default one
    'database' => 1
));
```

#### 2.3.6 Configure mobile application

TODO: In progress

## <a name="docs"></a>3. Additional docs

* [Setting up a server hosting the application](docs/STAGING.md)
* [Development Tips & Tricks (how to clear cache, run cron, log errors)](docs/DEVELOPMENT.md)
* [Tutorial how to create a new controller, model, view in Cake3 proxy over Cake2](docs/CONTROLLER_VIEW_MODEL.md)
* [Going live checklist](docs/CHECKLIST.md)