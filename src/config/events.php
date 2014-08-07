<?php
use Rocketeer\Facades\Rocketeer;

Rocketeer::listenTo('deploy.before-symlink', 'Symfony',$priority = 10);
?>
