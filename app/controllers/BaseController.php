<?php

class BaseController extends Controller
{

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if (!is_null($this->layout)) {
			$this->layout = View::make($this->layout);
		}
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
