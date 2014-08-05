<?php

class Github extends Rocketeer\Traits\Task
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Installs Github api key for composer"';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {

    $apikey ='{ \"config\": { \"github-oauth\": { \"github.com\": \"f2c65e48b1799a325bc6a4b405a807bb56887852\" } } }';

    $this->command->info('Creating .composer directory');
    $this->runForCurrentRelease('mkdir -p ~/.composer');
    $this->command->info('Setting Github api key"');
    $this->runForCurrentRelease('echo '.$apikey.' > ~/.composer/config.json');
  }
}
?>
