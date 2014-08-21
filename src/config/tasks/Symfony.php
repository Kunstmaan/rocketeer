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
    $this->command->info('Generating random asset token for config.yml"');
    $rand = substr(md5(microtime()),rand(0,26),8);
    $this->runForCurrentRelease("sed -i 's/v1/$rand/g' app/config/config.yml");

    $this->command->info('Running migrations');
    $this->runForCurrentRelease('app/console doctrine:migrations:migrate --no-interaction --env=prod');

    $this->command->info('Running assets:install web');
    $this->runForCurrentRelease('app/console assets:install web --env=prod');

    $this->command->info('Running assetic:dump');
    $this->runForCurrentRelease('app/console assetic:dump --env=prod');

    $this->command->info('Running cache:clear');
    $this->runForCurrentRelease('app/console cache:clear --env=prod');
  }
}
?>
