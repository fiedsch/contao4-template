# Contao 4 Template Bundle

## Purpose

This bundle serves as a template for Contao 4 Bundles. It covers the aspects described in the following 
sections. New aspects will be added and described over time. All components will be as small as possible
because I just want to demonstrate/document the principles and requirements. 



## Local Development 

When creating this bundle my aim was to develop for Contao locally without the need to publish the
code to Github (www.github.com) and Packagist (www.packagist.org). 
  
I currently use a local directory containing the code. I have this directory is under version control 
with git but this not a requirement.  
 
In order to make the code "visible" to Contao make the modifications described in the next sections.


### Bundle's composer.json file

The local directory containing the code does not have to be a git repository. So we have to "mock" 
a version. 

```json
"version": "1.0.0",
...
"extra": {
    ...
    "branch-alias": {
      "dev-master": "1.0.x-dev"
    }
  }
```


### Contao Installation's composer.json file

Make the following additions to your Contao installation's `composer.json` file. They make your 
code (its location) known to Contao.  

```json
"repositories": [{
    "type": "path",
        "url": "/the/path/to/my/project/directors/for/contao4-template",
    "options": {
        "symlink": true
    }
    }],
```
Note: make sure that Contao and the Contao-Maneger can read the above path! The user runnig the webserver 
has to have read access to your sources.


## TemplateBundle File

`src/FiedschC4TemplateBundle.php`


## ContaoManagerPlugin

`src/ContaoManager/Plugin.php`

## Contao Code "the old way"

Everything below `src/Resources/contao/` is just as it used to be with Contao 3. Exeptions are

* you don't need `config/autoload.ini` and `config/autoload.php` as composer will take care of 
autoloading


### DCA

### Modules

### ContentElements

### Models

### Language files

### Templates


## Public files

Everything below `src/Resources/public/`  will be symlinked to your Contao Installation's 
`web/bundles/` directory. Place Backend CSS and Icons here. 
 

# TODO/missing

## Adding Routes

## DependencyInjection


