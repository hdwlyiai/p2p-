<?php
require ROOT_PATH . 'system/common/function.php';
function load_class($class)
{
    $class_path = ROOT_PATH . str_replace('\\', '/', $class) . '.php';
    if (file_exists($class_path)) {
        include $class_path;
    }
}
spl_autoload_register('load_class', true, true);
