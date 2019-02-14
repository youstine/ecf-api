# ECF-API

## AUTHOR

* Justine Moreau


## PARTICIPATION

* Sullivan Delaby
* Alexandre Briffaut


## DESCRIPTION 

* Projet fictif qui a pour but de valider un ecf en cours de formation (PopSchool Lens).
* Fictional project that aims to validate an ecf during training (PopSchool Lens).
* Création d'une API avec symfony.
* Creating an API with symfony. 


### PREREQUIS

* Symfony 4.2.3
* PHP 7.3 et dépendance (curl et zip)
* composer

### INSTALATION 

* Git clone https://github.com/youstine/ecf-api.git
* Ouvrir un terminal dans le dossier cloné 
* Taper la commande 
``` 
composer install 
```
* Taper la commande 
``` 
php bin/console doctrine:database:create 
```
* Taper la commande 
```
php bin/console make:migration
```
* Taper la commande 
```
php bin/console doctrine:migration:migrate
```


