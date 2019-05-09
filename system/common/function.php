<?php
function config($name)
{
    return include ROOT_PATH . 'app/config/' . $name . '.php';
}

function site_url($uri = '')
{
    return '/index.php/' . $uri;
}
