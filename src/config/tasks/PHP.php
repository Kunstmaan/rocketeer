<?php

class PHP extends Rocketeer\Traits\Task
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Restarts php-pool gracefully';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->command->info('Restarting php pool gracefully');
    $this->runForCurrentRelease('pkill -QUIT -f "^php-fpm: pool $USER"');
  }
}
?>
