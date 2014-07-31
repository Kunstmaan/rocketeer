<?php

class Grunt extends Rocketeer\Traits\Task
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Runs "Grunt build';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->command->info('Running "Grunt build"');
    $this->runForCurrentRelease('grunt build');
  }
}
?>
