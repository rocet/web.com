<?php

class BaseController extends Controller
{

	/**
	 * Setup the layouts used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if (!is_null($this->layout)) {
			$this->layout = View::make($this->layout);
		}

		View::share('_current_component', $this->getCurrentComponent());

		View::share('_current_controller', $this->getCurrentController());

		View::share('_current_action', $this->getCurrentAction());

		View::share( '_current_relations', $this->getCurrentRelation() );

        View::share( '_current_host', $this->getCurrentHOST() );
	}

	protected function validPass($input)
	{
		if(!$input){
			return 0;
		}
		if (is_object($input)) {
			return substr(strrchr(get_class($input), '\\'), 1) === 'Validator' ? 0 : 1;
		}
		return 1;
	}

	protected function getCurrentController(){
		return str_replace( '.' . $this->getCurrentAction(), '', Route::currentRouteName() ); // strstr(Route::currentRouteName(), '.', true );
	}
	protected function getCurrentAction(){
		return substr(strrchr(Route::currentRouteName(), '.'), 1);
	}
    protected function getCurrentHost(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_HOST);
    }
	protected function getCurrentRelation(){
		if(method_exists($this, 'modelName')){
			$segments = \Request::segments();
			$routes = explode('.', \Route::currentRouteName());
			$_relationPaths = array_slice($segments, 0, array_search(strtolower( $this->modelName()), $segments));
			$_relationRoute = array_slice( $routes, 0, array_search(strtolower( $this->modelName()), $routes));
			return array_combine($_relationRoute, array_diff($_relationPaths, array_intersect($_relationRoute, $_relationPaths)) );
		}
		return array();
	}

	protected function getCurrentComponent(){
		return '';
	}
}
