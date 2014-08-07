<?php

class PHP extends Rocketeer\Traits\Task
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Clears PHP Opcode and apc-cache';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->command->info('Clearing PHP Opcode and apc-cache');
    #$this->runForCurrentRelease('pkill -QUIT -f "^php-fpm: pool $USER"');
    $this->runForCurrentRelease('cd /opt;php opcache.php --sock /tmp/.$USER-fpm.sock');
  }
}
?>
