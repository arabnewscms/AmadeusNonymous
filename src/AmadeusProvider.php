<?php
namespace AmadeusNonymous\Amadeus;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;


class AmadeusProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!file_exists(base_path('config').'/amadeus.php'))
        {
          $this->publishes([__DIR__.'/config'=>base_path('config')]);   
        }

        app()->singleton('amadeus',function(){
            return new AmadeuNonymous\Amadeus\Amadeus();
        });
       return new Amadeus();
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       
    }
}
