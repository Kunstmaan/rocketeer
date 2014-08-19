<?php

class Symfony extends Rocketeer\Traits\Task
{
  /**
   * Description of the Task
   *
   * @var string
   */
  protected $description = 'Runs migrations, assets install & assetic dump';

  /**
   * Executes the Task
   *
   * @return void
   */
  public function execute()
  {
    $this->command->info('Running migrations, cache clear & assetic dump"');
    $this->runForCurrentRelease('app/console doctrine:migrations:migrate --no-interaction --env=prod;app/console assets:install web --env=prod;app/console assetic:dump --env=prod');
  }
}
?>
