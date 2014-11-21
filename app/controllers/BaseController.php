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
		View::share('_curent_action', substr(strrchr(Route::currentRouteName(), '.'), 1));
		View::share('_curent_controller', strstr(Route::currentRouteName(), '.', true ));
//		define( 'CURRENT_ACTION',  substr(strrchr(Route::currentRouteName(), '.'), 1) );
//		define( 'CURRENT_CONTROLLER',  strstr(Route::currentRouteName(), '.', true ) );
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
}
