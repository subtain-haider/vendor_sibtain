<?php

namespace Sibtain\Subjects;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load();
        $this->publish();
    }

    private function load()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/subjects.php', 'subjects');
    }

    private function publish()
    {
        $this->publishes([
            __DIR__ . '/config' => config_path('sibtain'),
        ], 'subjects-config');

        $this->publishes([
            __DIR__.'/client/src/js' => base_path('client/src/js'),
        ], 'subjects-assets');


        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], ['subjects-factory', 'enso-factories']);

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], ['subjects-seeder', 'enso-seeders']);
    }

    public function register()
    {
        //
    }
}
