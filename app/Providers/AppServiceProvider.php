<?php

namespace App\Providers;
use App\Models\Company;
use App\Models\News;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('company.*',function ($view){
            $company=Company::orderByDesc('created_at')->paginate(20);
            $view->with('com',$company);
        });
        Paginator::useBootstrap();
    }
}
