<?php

namespace form;

use Illuminate\Support\ServiceProvider;

class SimplePackageProvider extends ServiceProvider
{
   
    public function register()
    {
        
    }

 
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ .'/route.php');
    }
}
