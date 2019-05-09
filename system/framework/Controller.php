<?php
namespace system\framework;

use \system\framework\library\Load;

class Controller
{
    protected $load = null;

    public function __construct()
    {
        $this->load = new Load();
    }
    protected function view($view, $data = null)
    {
        \header('Content-Type: text/html; charset=utf-8');
        foreach ($view as $key => $value) {
            $viewPath = ROOT_PATH . 'app/views/' . $value . '.php';
            if (\file_exists($viewPath)) {
                include $viewPath;
            }
        }
    }

    protected function json($data)
    {
        \header('Content-type: application/json');
        echo \json_encode($data);
    }

    public function __get($name)
    {
        return $this->load->$name;
    }
}
