<?php

require '../vendor/autoload.php';

use Slim\Slim as App;
use Slim\Views as View;
use Illuminate\Database\Capsule\Manager as DbManager;
use Illuminate\Database\Eloquent\Model as Model;

$dbManager = new DbManager;
$dbManager->addConnection(array(
	"driver"	=> "mysql",
	"host"	  => "127.0.0.1",
	"database"  => "laraveldb",
	"username"  => "root",
	"password"  => "",
	"charset"   => "utf8",
	"collation" => "utf8_general_ci",
	"prefix"	=> ""
));
$dbManager->bootEloquent();

class GroupResource extends Model
{
	protected $table = 'group_resource';
}

class GroupUser extends Model
{
	protected $table = 'group_user';
}

class User extends Model
{
	protected $table = 'user';
}

App::registerAutoloader();
$app = new App(array(
    'view' => new View\Blade(),
    'templates.path' => './../templates',
    'debug' => true
));
$app->view()->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . './../cache'
);
$app->get('/', function() use ($app) {
	$app->render('main', array('user' => User::all()));
});
$app->run();
