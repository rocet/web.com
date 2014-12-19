<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/19
 * Time: 12:59
 */
$ret = array();
$views = File::files(__DIR__ . '/member');
$components = array();
foreach( \Component::with('parent')->get() as $component ){
	$components[$component->id] = $component->flag;
	if( $component->depth == 1 && $component->flag !== 'Member' ){
		$views = array_merge($views, File::files(implode(DIRECTORY_SEPARATOR, array(
			app_path(),
			$component->parent->flag,
			$component->flag,
			'config',
			'member'
		))));
	}
}
foreach( $views as $path ){
	$fileName = pathinfo($path, PATHINFO_FILENAME);
	$ret[$fileName] = isset($ret[$fileName]) && in_array($fileName, array('common', 'component')) ? array_replace_recursive($ret[$fileName], require $path) : require $path;
}
return $ret;

