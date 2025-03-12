<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function ($user) {
            // return $user->roles->contains('name', 'admin');
            return $user->hasRole('admin');
        });

        Gate::define('editor', function ($user) {
            // if ($user->roles->contains('name', 'admin')) {
            //     return true;
            // }
            // return $user->roles->contains('name', 'editor');
            return $user->hasAnyRole(['admin','editor']);
        });

        Gate::define('author', function ($user) {
            // if ($user->roles->contains('name', 'admin')) {
            //     return true;
            // }
            // if ($user->roles->contains('name', 'editor')) {
            //     return true;
            // }
            // return $user->roles->contains('name', 'author');
            return $user->hasAnyRole(['admin','editor','author']);
        });


        Gate::define('secret', function($user){
            return request()->input('password')==='secret';
        });
    }
}
