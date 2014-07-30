<?php
namespace App\Modules;
abstract class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        if ($module = $this->getModule(func_get_args()))
        {
            $this->package('app/'.$module, $module, app_path().'/modules/'.$module);
        }
    }

    public function register(){
        if ($module = $this->getModule(func_get_args())){
            $this->app['config']->package('app/'.$module, app_path().'/modules/'.$module.'/config');
            foreach (\Config::get('app.aliases') as $alias => $source) {
                class_alias($source, 'App\Modules\\'.$module.'\Controllers\\'.$alias);
            }
            $routes = app_path().'/modules/'.$module.'/routes.php';
            if (file_exists($routes)) require $routes;
        }
    }

    public function getModule($args)
    {
        $module = (isset($args[0]) and is_string($args[0])) ? $args[0] : null;
        return $module;
    }
}