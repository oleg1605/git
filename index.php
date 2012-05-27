<?php

date_default_timezone_set('UTC');

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);




//
	if (1!=1)
		echo "developer 010";

require_once($yii);
Yii::createWebApplication($config)->run();
