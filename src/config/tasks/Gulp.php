<?php

class Gulp extends Rocketeer\Traits\Task
{





protected $description = 'Runs "Gulp build"';






public function execute()
{
$this->command->info('Running "Gulp build"');
$this->runForCurrentRelease('gulp build');
}
}
?>
