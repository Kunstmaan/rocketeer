<?php

class Bundler extends Rocketeer\Traits\Task
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Runs bundle install';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->command->info('Running bundle install"');
    $this->runForCurrentRelease('bundle install');
  }
}
?>
