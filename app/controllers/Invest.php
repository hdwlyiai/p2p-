<?php
namespace app\controllers;

use \system\framework\Controller;

class Invest extends Controller
{
    public function index()
    {
        $this->load->model('Borrow');
        $data = $this->Borrow->borrowselect();
        $this->view(['header', 'invest', 'footer'], $data);
    }
}
