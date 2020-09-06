# API REST SYMFONY

## Init Projet

```
composer create-project symfony/skeleton api_rest_symfony
```

## Depeendancies

### JMSSerializerBundle

JMSSerializerBundle vous permet de sérialiser vos données dans un format de sortie demandé tel que JSON, XML ou YAML, et vice versa.

```
composer require jms/serializer-bundle
```
### httpFoundation

Définit une couche orientée objet pour la spécification HTTP.

Installation : 

```
composer require symfony/http-foundation
``` 

### SensioFrameworkExtraBundle

Le Symfony par défaut FrameworkBundleimplémente un framework MVC basique mais robuste et flexible. SensioFrameworkExtraBundle l' étend pour ajouter des conventions et des annotations douces. Il permet des contrôleurs plus concis.

Installation :

```
composer require annotations
```

### API PLATFORM

API Platform Core est une bibliothèque puissante et facile à utiliser pour créer des API REST basées sur l'hypermédia . C'est un composant du framework API Platform . Il peut être utilisé de manière autonome ou avec le framework Symfony (recommandé).

Il intègre les standards Web JSON for Linked Data (JSON-LD) et Hydra Core Vocabulary , mais prend également en charge HAL , Swagger / Open API , XML, JSON, CSV et YAML.

Créez une API CRUD fonctionnelle et complète en quelques minutes. Tirez parti des fonctionnalités impressionnantes de l'outil pour développer des projets API-first complexes et hautes performances.

install : 

```
composer require api
```

### MakerBundle

Symfony Maker vous aide à créer des commandes vides, des contrôleurs, des classes de formulaire, des tests et plus encore afin que vous puissiez oublier l'écriture de code standard.

```
composer require symfony/maker-bundle --dev

php bin/console make:entity
```

Ressources :

> https://www.kaherecode.com/tutorial/developper-une-api-rest-avec-symfony-et-api-platform