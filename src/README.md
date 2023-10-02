## 備忘

プロジェクト作成

```bash
composer create-project laravel/laravel project-name "9.*"
composer install
chown www-data:www-data ./storage/ -R
php artisan storage:link
```

Laravel breeze のインストール

```bash
composer require laravel/breeze --dev
php artisan breeze:install api
```
