<?php
namespace App\Modules\Admin\Controllers;
class AdminController extends \BaseController 
{
    public function __construct()
    {
    }

    protected function modelName(){
        return substr(strrchr(get_class($this), '\\'), 1, -10);
    }

    protected function error(array $error = array()){
        return array('errors' => $error);
    }

    protected function dataApi($model = null){
        $controller = 'App\Modules\Data\Controllers\\'.($model ?: $this->modelName()).'Controller';
        return class_exists($controller) ? App::make($controller) : false;
    }
}
