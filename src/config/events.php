<?php
use Rocketeer\Facades\Rocketeer;

Rocketeer::listenTo('deploy.before-symlink', 'Bower', $priority = 10);
Rocketeer::listenTo('deploy.before-symlink', 'NPM',$priority = 9);
Rocketeer::listenTo('deploy.before-symlink', 'Grunt',$priority = 8);
Rocketeer::listenTo('deploy.before-symlink', 'Symfony',$priority = 7);
Rocketeer::listenTo('deploy.before-symlink', 'Bundler',$priority = 6);
?>
