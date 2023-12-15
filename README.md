## Collège Horizon

Le Collège Horizon est un site internet conçu pour recueillir des informations auprès des étudiants du collège. Les étudiants ont la possibilité de mettre à jour leurs informations et de supprimer leurs données à tout moment.

Création d'un site web dynamique en utilisant le cadriciel Laravel lier à la base de données. 

Dans MySQL création de 2 tables : Étudient et ville.

### Installation

- Créer un nouveau projet Laravel nommée Maisonneuve{votre matricule} 

```
composer create-project --prefer-dist laravel/laravel Maisonneuve2295321
```

## Commandes

-  Création modèles et migrations pour les villes

```
php artisan make:model Ville -m

```
- Tables

```
php artisan migrate
```

- Données de la Base de données

```
php artisan make:factory VilleFactory
```

```
php artisan tinker
```
```
\App\Models\Ville::factory()->times(15)->create()
```
***

- Création modèles et migrations pour les étudiants

```
php artisan make:model Etudiant -m

```

- Tables

```
php artisan migrate
```

- Données de la Base de donnée

```
php artisan make:factory EtudiantFactory
```

```
php artisan tinker
```
```
\App\Models\Etudiant::factory()->times(100)->create()
```
***

- Controller

```
php artisan make:controller EtudiantController -m Etudiant
```

### Lien

- GitHub

https://github.com/agnes31/Laravel_Etudiant

- Webdeb

https://e2395321.webdev.cmaisonneuve.qc.ca/etudiants/
