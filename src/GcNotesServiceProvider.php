<?php

namespace Goodechilde\GcNotes;

use App;
use Str;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;
//use Goodechilde\GcNotes\SeedServiceProvider;

class GcNotesServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'gc-notes');

        // Register the main class to use with the facade
        $this->app->singleton('gc-notes', function () {
            return new GcNotes();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app->register(SeedServiceProvider::class);
        $this->registerEloquentFactoriesFrom(__DIR__ . '/database/factories');
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'common-contact');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'common-contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('gc-notes.php'),
            ], 'gc-notes');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/common-contact'),
            ], 'views');*/

            // Publishing the factories.
            $this->publishes([
                __DIR__ . '/database/factories' => database_path('factories'),
            ], 'gc-notes');
            // Publishing the factories.
            $this->publishes([
                __DIR__ . '/database/seeds' => database_path('seeds'),
            ], 'gc-notes');

            $this->publishes([
                __DIR__ . '/OpenAPI/components' => app_path('/OpenAPI/components'),
                __DIR__ . '/OpenAPI/parameters' => app_path('/OpenAPI/parameters'),
                __DIR__ . '/OpenAPI/schemas' => app_path('/OpenAPI/schemas'),
                __DIR__ . '/OpenAPI/Note.yaml' => app_path('/OpenAPI/Note.yaml'),
                __DIR__ . '/OpenAPI/NoteType.yaml' => app_path('/OpenAPI/NoteType.yaml'),
            ], 'gc-openapis');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/common-contact'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/common-contact'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    protected function registerEloquentFactoriesFrom($path)
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }
}
