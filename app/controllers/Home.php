<?php
namespace app\controllers;

use \system\framework\Controller;

class Home extends Controller
{
    public function index()
    {
        $this->view(['header', 'home', 'footer']);
    }

    public function cash()
    {
        $this->view(['header', 'cash', 'footer']);
    }

    public function loanitem()
    {
        $this->view(['header', 'loanitem', 'footer']);
    }

    public function personal()
    {
        $this->view(['header', 'personal', 'footer']);
    }

    public function realAuth()
    {
        $this->view(['header', 'realAuth', 'footer']);
    }

    public function running()
    {
        $this->view(['header', 'running', 'footer']);
    }

    public function userInfo()
    {
        $this->view(['header', 'userInfo', 'footer']);
    }

    public function rechargelist()
    {
        $this->view(['header', 'rechargelist', 'footer']);
    }

    public function repayment()
    {
        $this->view(['header', 'repayment', 'footer']);
    }
}
