# Rocketeer

[![Build Status](https://travis-ci.org/Anahkiasen/rocketeer.png?branch=master)](https://travis-ci.org/Anahkiasen/rocketeer)
[![Latest Stable Version](https://poser.pugx.org/anahkiasen/rocketeer/v/stable.png)](https://packagist.org/packages/anahkiasen/rocketeer)
[![Total Downloads](https://poser.pugx.org/anahkiasen/rocketeer/downloads.png)](https://packagist.org/packages/anahkiasen/rocketeer)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/Anahkiasen/rocketeer/badges/quality-score.png?s=20d9a4be6695b7677c427eab73151c1a9d803044)](https://scrutinizer-ci.com/g/Anahkiasen/rocketeer/)
[![Code Coverage](https://scrutinizer-ci.com/g/Anahkiasen/rocketeer/badges/coverage.png?s=f6e022cbcf1a51f82b5d9e6fb30bd1643fc70e76)](https://scrutinizer-ci.com/g/Anahkiasen/rocketeer/)
[![Support via Gittip](http://img.shields.io/gittip/Anahkiasen.svg)](https://www.gittip.com/Anahkiasen/)

**Rocketeer** is a task runner and deployment package for the PHP world. It is inspired by the [Laravel Framework](http://laravel.com/) philosophy and thus aims to be fast, elegant, and more importantly easy to use.

## Installation

git clone this repository to /opt and run `composer install`. Symlink bin/rocketeer.phar to /usr/local/bin so it get's available system wide.

Setup passwordless ssh as the project user on the production server. (`ssh-keygen, cp .ssh/deploy.pub .ssh/authorized_keys`) and add the keypair to the git repository of the project.  Make sure passwordless ssh works before continuing.

Execute rocketeer ignite in the root of your project and fill in all the details. For the server address use: server.com:$ssh-port. Make sure the user & projectname are the same as your project (without special char like -). 

When done: deploy your project using `rocketeer deploy`. You can change the branch which will be deployed in `.rocketeer/scm.php`
