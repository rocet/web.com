<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/10
 * Time: 10:43
 */

$ret = array();
$views = File::files(__DIR__ . '/view');
foreach( \Component::with('parent')->get() as $component ){
	if( $component->depth == 1 && $component->flag !== 'Admin' ){
		$views = array_merge($views, File::files(implode(DIRECTORY_SEPARATOR, array(
			app_path(),
			$component->parent->flag,
			$component->flag,
			'config',
			'view'
		))));
	}
}
foreach( $views as $path ){
	$fileName = pathinfo($path, PATHINFO_FILENAME);
	$ret[$fileName] = isset($ret[$fileName]) ? array_merge_recursive($ret[$fileName], require $path) : require $path;
}
return $ret;