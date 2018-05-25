Sandbox Sonata Commerce Symfony 3
========================

Introduction
------------

This project is based on Symfony 3 and is a Sandbox for the E-Commerce Bundle of Sonata Project.


Installation
------------

### Install the environment

#### Requirements

php >= 7.1

#### Docker

[Docker apache](https://github.com/mattcontet/environment)

### Install the project

1. Clone the project
2. Build the project : `composer install` + Configure environment variables
3. Configure the project :
    - Build the DB :
            - `php bin/console doctrine:database:create`
            - `php bin/console doctrine:schema:create`

Documentation
-------------

### Sonata Project Bundles

Here is the list of the sonata bundles implemented for this Sandbox.

#### E-Commerce

-    Sonata\ECommerce\SonataECommerceBundle

Contributors
------------

For information, feed-back or questions, peoples who worked on this project are :

#### Back-end

* Kevin Dessimoulie - [patatesup@gmail.com](mailto:patatesup@gmail.com)
