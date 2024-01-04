# Lab laravel dusk
## Travail à fair
utiliser laravel dusk pour tester ajouter une tâche sur [lab laravel basic](https://github.com/labs-web/lab-crud-basic-laravel) 
## critères de validation 
- installer dusk laravel
- configurer les fichier et fixer les problèmes
- faire une test d'ajoute d'une tâche

## Instalation
```bash
composer install
composer require --dev laravel/dusk
php artisan dusk:install
```
```bash
cp .env.example .env
php artisan key:generate
```
assurez-vous de changer APP_URL=http://127.0.0.1:8000 sur le fichier .env 
```bash
php artisan migrate
php artisan db:seed
```
## Problèmes d'installation
Problème :
```bash
  # Error
  cURL error 60: SSL certificate problem: unable to get local issuer certificate (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://googlechromelabs.github.io/chrome-for-testing/last-known-good-versions-with-downloads.json
```
Solution :

[cURL error 60: SSL certificate in Laravel 5.4](https://stackoverflow.com/questions/42094842/curl-error-60-ssl-certificate-in-laravel-5-4)

```
Download this file: http://curl.haxx.se/ca/cacert.pem
Place this file in the C:\Program Files\php\ folder
Open php.iniand find this line:
;curl.cainfo

Change it to:

curl.cainfo = "C:\Program Files\php\cacert.pem"
```
## Création des Tests

```bash
php artisan dusk:make TacheTest
php artisan dusk
```
## Exécution de test Browser
```bash
cp .env .env.dusk.local

```
```bash
php artisan serve --env=dusk.local

```
## Extention google chrome

- https://chromewebstore.google.com/detail/laravel-testtools/ddieaepnbjhgcbddafciempnibnfnakl?hl=en



## Références
- https://unogeeks.com/laravel-selenium/
- https://laravel.com/docs/10.x/dusk
- [Laravel Dusk Tutorials](https://www.youtube.com/playlist?list=PLe30vg_FG4OTxWw8xdgpI6xEvlEdUSw7u)
- https://fajarwz.com/blog/improving-app-quality-exploring-browser-testing-with-laravel-dusk/
