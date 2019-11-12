<?php namespace Tibin\Prep;

use Illuminate\Support\ServiceProvider;

class PrepServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/prep.php' => config_path('prep.php'),
        ], 'prep');
    }
    /**
    * Make config publishing optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/prep.php',
            'prep'
        );
    }
}
