# Staging server

IP: __172.18.5.40__

## 1. Installing PHP 5.5 and Apache 2.4

### 1.1 PHP 5.5

__Download__

Download windows version TS 32bit:

[http://windows.php.net/download#php-5.50](http://windows.php.net/download#php-5.5)

Extract to:

```
C:\php55
```

__Config__

Add to Path environment variable PHP location:

```
PATH=C:\php55
```

__Download Visual C++ Redistributable for Visual Studio 2012 Update 4 x86__

[https://www.microsoft.com/en-US/download/details.aspx?id=30679](https://www.microsoft.com/en-US/download/details.aspx?id=30679)

__Download Microsoft Drivers for PHP for SQL Server__

[https://www.microsoft.com/en-us/download/details.aspx?id=20098](https://www.microsoft.com/en-us/download/details.aspx?id=20098)

Extract driver and copy to __C:\php55\ext__ dir required DDL files

* php_sqlsrv_55_ts.dll
* php_pdo_sqlsrv_55_ts.dll

Copy php.ini-production to php.ini

Edit php.ini

```ini
memory_limit = 512M

upload_max_filesize = 32M

post_max_size = 128M

extension_dir = "C:/php55/ext"

; SAP is taking a long time to process requests, extend time for SAP to answer
max_execution_time = 120

max_input_time = 120

; Manual order is submitting a lot of info
max_input_vars = 5000

; Enable extensions:

extension=php_bz2.dll
extension=php_gd2.dll
extension=php_curl.dll
extension=php_intl.dll
extension=php_mbstring.dll
extension=php_openssl.dll
extension=php_soap.dll

; Enable SQL Server Extension
extension=php_sqlsrv_55_ts.dll
extension=php_pdo_sqlsrv_55_ts.dll

; Activate OPCache
zend_extension=C:\php55\ext\php_opcache.dll

opcache.enable=1

opcache.memory_consumption=512M
```

### 1.2 Apache 2.4

__Download Apache 2.4 32bit__

[http://www.apachehaus.com/cgi-bin/download.plx#APACHE24VC11](http://www.apachehaus.com/cgi-bin/download.plx#APACHE24VC11)

__!!!IMPORTANT!!!__ Apache and PHP should both have the same architecture 32bit or 64bit in order to load PHP mod into Apache

Extract apache to C:\Apache24

__Install Apache2.4 as a service__

```bash
cd C:\Apache24\bin
httpd.exe -k install
```

__Configure__

Edit __conf/httpd.conf__

```ini
Define SRVROOT "C:/Apache24"

# Enable mod rewrite module
LoadModule rewrite_module modules/mod_rewrite.so

# Add PHP module
LoadModule php5_module "C:/php55/php5apache2_4.dll"

AddType application/x-httpd-php .php

# Update directory index
<IfModule dir_module>
    DirectoryIndex index.html index.php
	PHPIniDir "C:/php55"
</IfModule>

# Update document root
DocumentRoot "C:/www"
<Directory "C:/www">
    # enable htaccess
    AllowOverride All
</Directory>
```

### 1.3 Redis 3.0

__Download Redis 3.0__

[https://github.com/MSOpenTech/redis/releases/tag/win-3.0.501](https://github.com/MSOpenTech/redis/releases/tag/win-3.0.501)

Download [.msi](https://github.com/MSOpenTech/redis/releases/download/win-3.0.501/Redis-x64-3.0.501.msi) version and install it under

```
C:\Redis
```

Specify max memory as 512M.

This will install redis as a service.

__Download PHP 5.5 Redis Extensions Thread Safe__

[https://pecl.php.net/package/redis/2.2.7/windows](https://pecl.php.net/package/redis/2.2.7/windows)

Download the [Thread Safe](http://windows.php.net/downloads/pecl/releases/redis/2.2.7/php_redis-2.2.7-5.5-ts-vc11-x86.zip) archive and extract the content.

Copy ```php_redis.dll``` to C:\php55\ext and enable extension in ```php.ini```

```
extension=php_redis.dll
```














