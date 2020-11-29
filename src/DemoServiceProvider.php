<?php 
namespace Ravi\demo;
use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'demo');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/demo.php', 'demo'
        );
        $this->publishes([
            __DIR__.'/config/demo.php' => config_path('demo.php'),
        ]);
    }
    public function register()
    {
        
    }
}
?>