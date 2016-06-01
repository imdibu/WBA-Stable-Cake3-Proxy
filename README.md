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

```bash
# copy cake3 configuration sample
cp config/app.default.php config/app.php

# edit cake3 configuration file
config/app.php
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
mkdir -p legacy/Project/tmp/cache/persistent
mkdir -p legacy/Project/tmp/cache/models
```

Create JS and CSS folders

```bash
mkdir -p legacy/Project/tmp/cache/css
mkdir -p legacy/Project/tmp/cache/js
```
