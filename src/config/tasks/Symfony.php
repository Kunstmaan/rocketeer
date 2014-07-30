<?php

class Symfony extends Rocketeer\Traits\Task
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Runs assets install & assetic dump';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->command->info('Running cache clear & assetic dump"');
    $this->runForCurrentRelease('app/console assets:install web;app/console assetic:dump');
  }
}
?>
