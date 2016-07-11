## 1. Clear application cache

Clear Cake3 ORM cache can be accomplished from the CLI with:

```bash
php bin/cake.php orm_cache clear
```

Or, by using the Redis cache, this can be easily accomplished by flushing everything stored into the cache configured database:

```bash
# Connect to redis server using redis CLI.
# You can specify command to be executed as an additional argument.
# This will flush the database with index 0

redis-cli flushdb
```

__Note:__ If not in debug mode, you will have to flush the cache every time you change the database structure of a table/model.

## 2. Running the cron

### 2.1 Running the integrated Cake3 CLI:

```bash
cd [APPLICATION_ROOT]

php bin/cake.php
```

### 2.2 Running the integrated Cake2 CLI. The Cake2 CLI must be run using the Cake3 CLI in order to have have both
frameworks bootstrapped. The Cake2 CLI has been implemented as an additional Cake3 shell command:

```bash
cd [APPLICATION_ROOT]

php bin/cake.php cron
```

## 3. Application debugging


### 3.1 Enable debugging

Cake3 is configured to display a nice stack trace every time an error or an exception is thrown if the debug option is
set to true:

```php
# config/app.php
# Line: 12

'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),
```

This can be accomplished by setting up an environment variable in apache virtual host:

```
SetEnv DEBUG true
```

Or, you can simply comment out the line and set the debug config to true like this:

```php
# config/app.php
# Line: 12

//'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),
'debug' => true,
```

### 3.2 Log errors

Cake3 is logging all errors inside Cake2 log folder ```legacy/Project/app/tmp/logs```

* error.log
* debug.log
* cli-error.log

Because of the legacy application in place, there are a stream of errors going out from the application: warnings, deprecated errors, notices.
Not the ideal way to handle this, but for now these errors are hidden and not logged to the error.log file:

```php
# config/app.php

'Error' => [
    'errorLevel' => E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING,
]
```

Just use the default configuration instead:

```php
'Error' => [
    'errorLevel' => E_ALL & ~E_DEPRECATED,
]
```






