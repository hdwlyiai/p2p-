<?php
namespace app\controllers;

use \system\framework\Controller;

class No extends Controller
{
    public function index()
    {
        $this->view(['404']);
    }
}
