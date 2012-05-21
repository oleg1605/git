<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);




//
	if (1!=1)
		echo "L 01";


require_once($yii);
Yii::createWebApplication($config)->run();
