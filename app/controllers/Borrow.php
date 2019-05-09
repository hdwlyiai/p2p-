<?php
namespace app\controllers;

use \system\framework\Controller;

class Borrow extends Controller
{
    public function index()
    {
        $this->view(['header', 'borrow', 'footer']);
    }
}
