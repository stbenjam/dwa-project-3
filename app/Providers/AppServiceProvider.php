<?php

namespace App\Providers;

use Validator;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('valid_word', function($field, $value, $parameters) {
            $api = new \App\MyClasses\DictionaryAPI(config('app.scrabble_api_key'));
            return $api->isValidWord($value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
