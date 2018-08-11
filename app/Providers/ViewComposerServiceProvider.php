<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
             'post.TopPost',
             'App\Http\ViewComposers\TopPostComposer@compose'   
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       
    }
}

