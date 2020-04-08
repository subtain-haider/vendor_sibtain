<?php

namespace Sibtain\Grades;

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
        $this->mergeConfigFrom(__DIR__.'/config/grades.php', 'grades');
    }

    private function publish()
    {
        $this->publishes([
            __DIR__ . '/config' => config_path('sibtain'),
        ], 'grades-config');

        $this->publishes([
            __DIR__.'/client/src/js' => base_path('client/src/js'),
        ], 'grades-assets');

        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], ['grades-factory', 'enso-factories']);

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], ['grades-seeder', 'enso-seeders']);
    }

    public function register()
    {
        //
    }
}
