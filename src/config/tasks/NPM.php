<?php

class NPM extends Rocketeer\Traits\Task
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Runs "NPM install';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->command->info('Running "NPM install"');
    $this->runForCurrentRelease('npm install');
  }
}
?>
