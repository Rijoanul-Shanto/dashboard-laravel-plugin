<?php


namespace Shanto\Dashboard;


use Closure;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views/', 'dashboard');
    }

    public function register()
    {
        // TODO: Change the autogenerated stub
    }
}