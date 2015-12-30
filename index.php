<?php
define('APP_DEBUG', true);
define('SOURCE_ROOT', dirname(__FILE__));
define('STATOC_ROOT', SOURCE_ROOT.'/Static');
//定义项目名称
define('APP_NAME', 'App');
//定义项目路径
define('APP_PATH', './App/');
//定义缓存路径
define('RUNTIME_PATH', './Runtime/');
//加载框架入文件
require './ThinkPHP/ThinkPHP.php';