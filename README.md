# SLIM 4 TODO API

Prise en main de Slim Framework

Création d'une API simple pour une todolist

Pour démarrer le projet :

- un serveur apache2
- `php` avec les modules `php-common 
php-mysql 
php-xdebug
php-zip
php8.1-cli
php8.1-common
php8.1-mysql
php8.1-opcache
php8.1-readline
php8.1-xdebug
php8.1-xml
php8.1-zip
php8.1`

- une base de données mysql
- le fichier `sql/todolist.sql` permeet de créer la base de données
- créer un ficchier `.env` avec les bonnes configurations
- la configuration apache2 si le projet est cloné dans `/var/www/slim` et le fichier `index.php` se trouve dans `/var/www/slim/public/index.php` :

```xml
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

Copier le fichier `.env.git` dans `.env` et ajuster les réglages.
