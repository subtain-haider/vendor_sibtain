<?php

namespace Sibtain\Classrooms;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load()
            ->publish();
    }

    private function load()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        return $this;
    }

    private function publish()
    {
        $this->publishes([
            __DIR__.'/client/src/js' => base_path('client/src/js'),
        ], 'classrooms-assets');


        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], ['classrooms-factory', 'enso-factories']);

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], ['classrooms-seeder', 'enso-seeders']);
    }
}
