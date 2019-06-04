<?php

namespace App\Providers;
use App\Regzayavki;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('regularuser.index', function ($view) 
            {
                $view->with('archives', Regzayavki::archives());      
            });
        view()->composer('admin.pages.viewz', function ($view) 
            {
                $view->with('archives', Zayavki::archives());      
            });

        Schema::defaultStringLength(191); 
        
        Validator::extend('phone', function($attribute, $value, $parameters, $validator) {
        return preg_match('%^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\/]?){0,})(?:[\-\.\ \\/]?(?:#|ext\.?|extension|x)[\-\.\ \\/]?(\d+))?$%i', $value) && strlen($value) >= 10;
    });

    Validator::replacer('phone', function($message, $attribute, $rule, $parameters) {
        return str_replace(':attribute',$attribute, ':attribute неверный формат номера');
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
