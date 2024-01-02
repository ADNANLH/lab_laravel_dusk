# Lab Crud Laravel Basic
## Travail à faire

Le projet en cours consiste à développer une application CRUD (Create, Read, Update, Delete) basée sur le framework Laravel, mettant en œuvre la gestion des projets et de leurs tâches associées. L'objectif principal de cette application est de fournir une démonstration claire des opérations fondamentales de manipulation de données, offrant une interface utilisateur conviviale pour créer, consulter, mettre à jour et supprimer des projets ainsi que les tâches associées à chaque projet.

- Créer le CRUD des tâches
- La recherche evec AJAX
- Avec la pagination
- Ajouter la base de données incluant la table des projets dans les seeders

## Processus de travail
1. Commencez par installer Laravel via le terminal avec cette commande :

```
composer create-project laravel/laravel=10 .
```

2. Ensuite, créez le fichier .env à l'aide de la commande :
```
cp .env.example .env
```
3. Ajoutez les paramètres de la base de données au fichier .env
4. Procédez à la création des tables en exécutant ces commandes :
```
php artisan make:migration Projects

php artisan make:migration Tasks
```
5. Une fois les noms de colonnes des tables définis, migrez-les vers la base de données avec la commande :
```
php artisan migrate
```
6. Remplissez la base de données avec les informations du projet en créant un seeder et en exécutant :

```
php artisan db:seed
```
7. Avec la table des tasks et seeder, générez des modèles pour les **Tasks** et **Projects** avec les commandes suivants:
```
php artisan make:model Project

php artisan make:model Task
```
8. Créez des contrôleurs pour gérer les données de la base de données :
```
php artisan make:controller TasksController 
```
9. Concevez et créez les pages nécessaires de s dans le répertoire **Views** des ressources et mettez à jour vos **Routes**.
10. Pour afficher la progression de votre projet localement, exécutez cette commande
```
php artisan serve
```
## Référence
[Lab-crud référence](https://github.com/labs-web/lab-crud)