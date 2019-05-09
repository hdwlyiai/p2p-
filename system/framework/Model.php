<?php
namespace system\framework;

use \system\framework\library\Medoo;

class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->db = new Medoo(\config('database'));
    }
}
