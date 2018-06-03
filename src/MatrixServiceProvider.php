<?php

namespace Deki\Matrix;

use Illuminate\Support\ServiceProvider;
class MatrixServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('deki-matrix', function() {
            return new Matrix;
        });
    }
}
