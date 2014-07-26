<?php
namespace App\Modules\Api;
class ApiServiceProvider extends \App\Modules\ServiceProvider 
{
    public function register()
    {
        parent::register('Api');
    }

    public function boot()
    {
        parent::boot('Api');
    }
}