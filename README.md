# SLIM 4 TODO API

Prise en main de Slim Framework

Création d'une API simple pour une todolist

Pour démarrer le projet :

- `git` correctement installé et configuré
- un serveur apache2 (facultatif)
- une base de données mysql
- `php` avec les modules
  `php-common
php-mysql
php-xdebug
php-zip
php
php-cli
php-common
php-mysql
php-opcache
php-readline
php-xdebug
php-xml
php-zip`
- `composer`

Configuration php recommandée (`php.ini`) :

```ini
error_reporting=E_ALL
short_open_tag=Off
display_errors=On
display_startup_errors=On
html_errors=On
realpath_cache_size=6M
upload_max_filesize=1G
post_max_size=1G
max_execution_time=300
max_input_time=300
memory_limit=256M
#error_log=/var/log/apache2/php_error.log

[intl]
intl.default_locale=fr_FR
intl.use_exceptions=On

[Date]
date.timezone = "Europe/Paris"
```

Étapes :

- `composer install`
- le fichier `sql/todolist.sql` permeet de créer la base de données
- créer un fichier `.env` avec les bonnes configurations
- la configuration apache2 si le projet est cloné dans `/var/www/slim` et le fichier `index.php` se trouve dans `/var/www/slim/public/index.php` :

```apacheconf
Alias /slim /var/www/slim/public

DocumentRoot /var/www/slim/public
<Directory "/var/www/slim/public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
</Directory>
```

Vérifier dans `index.php` :

```php
$app->setBasePath('/slim');
```
