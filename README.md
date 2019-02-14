# ECF-API

## AUTEUR/AUTHOR

* Justine Moreau


## PARTICIPATION

* Sullivan Delaby
* Alexandre Briffaut


## DESCRIPTION 

* Projet fictif qui a pour but de valider un ecf en cours de formation (PopSchool Lens).
* Fictional project that aims to validate an ecf during training (PopSchool Lens).
* Création d'une API avec symfony.
* Creating an API with symfony. 


### PREREQUIS/REQUIREMENTS

* Symfony 4.2.3
* PHP 7.3 et dépendance (curl et zip)
* composer

### INSTALLATION 

* Git clone https://github.com/youstine/ecf-api.git
* Ouvrir un terminal dans le dossier cloné/Open a terminal in the cloned folder
* Taper la commande/type the command
``` 
composer install 
```
* Taper la commande/type the command
``` 
php bin/console doctrine:database:create 
```
* Taper la commande/type the command
```
php bin/console make:migration
```
* Taper la commande/type the command
```
php bin/console doctrine:migration:migrate
```


