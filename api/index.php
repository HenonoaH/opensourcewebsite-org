<?php

defined('YII_DEBUG') or define('YII_DEBUG', (getenv('YII_DEBUG') == 'true') ? true : false);
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV') ?: 'prod');

require(__DIR__ . '/../vendor/autoload.php');
require (__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/config/web.php');

$application = new \yii\web\Application($config);
$application->run();
