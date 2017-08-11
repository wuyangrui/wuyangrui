<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TestService;
use Illuminate\Http\Request;
use App\Contracts\TestContract;
use Auth;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request, TestContract $test)
    {
        //
        //Auth::loginUsingId(1);
        //$test->username = Auth::id();
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('App\Contracts\TestContract',function(){
            return new TestService();
        });
        // $this->app->bind('App\Contracts\TestContract',function(){
        //     return new TestService();
        // });
    }
}
