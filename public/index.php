<?php
define('NAMECHO_START', microtime(true));
define('ROOT_PATH', dirname(__DIR__) . '/');
require ROOT_PATH . 'system/common/autoload.php';
system\App::run();
