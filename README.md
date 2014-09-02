# Rocketeer

## Installation

git clone this repository to /opt and run `composer install`. Symlink bin/rocketeer.phar to /usr/local/bin so it get's available system wide.

## Using rocketeer 

Setup passwordless ssh as the project user on the production server. (`ssh-keygen, cp .ssh/deploy.pub .ssh/authorized_keys`) and add the keypair to the git repository of the project.  Make sure passwordless ssh works before continuing. Also add the public key as a deploy-key to your project on github/lab

Execute rocketeer ignite in the root of your project and fill in all the details. For the server address use: server.com:$ssh-port. Make sure the user & projectname are the same as your project (without special char like -). 

When done: deploy your project using `rocketeer deploy`. You can change the branch which will be deployed in `.rocketeer/scm.php`
