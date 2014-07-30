<?php

class Grunt extends Rocketeer\Traits\Task
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Runs "Bower install';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->command->info('Running "Bower install"');
    $this->runForCurrentRelease('bower install');
  }
}
?>
