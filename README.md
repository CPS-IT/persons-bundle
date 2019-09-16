Persons Development Bundle
==========================

This is a project bundle for a development site for the TYPO3 CMS extension [persons](https://github.com/CPS-IT/persons). 

It provides a local development environment based on composer package manager and [ddev](https://ddev.readthedocs.io/en/stable/)

## Requirements
1. [composer] (https://getcomposer.org/)
2. [docker](https://www.docker.com/)
3. [ddev] (https://ddev.readthedocs.io/en/stable/)

## Installation
```
composer install
``` 

## Update
```
composer update
``` 


## Development Environment

A ddev-config is already shipped with this package

Use

```
ddev start
```

to run the docker containers set up in .ddev/config.yaml.

Use
```
ddev config
```

if you want to change some configuration.

Use

```
ddev import-db --src file.db.sql
```

to import a database dump.
