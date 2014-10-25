<?php
namespace App\External;
abstract class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
	public function boot()
	{
		if ($external = $this->getExternal(func_get_args())) {
			$this->package('app/' . $external, $external, app_path() . '/external/' . $external);
		}
	}

	public function register()
	{
		if ($external = $this->getExternal(func_get_args())) {
			$this->app['config']->package('app/' . $external, app_path() . '/external/' . $external . '/config');
			foreach (\Config::get('app.aliases') as $alias => $source) {
				class_alias($source, 'App\External\\' . $external . '\Controllers\\' . $alias);
			}
			$routes = app_path() . '/external/' . $external . '/routes.php';
			if (file_exists($routes)) require $routes;
		}
	}

	public function getExternal($args)
	{
		$external = (isset($args[0]) and is_string($args[0])) ? $args[0] : null;
		return $external;
	}
}