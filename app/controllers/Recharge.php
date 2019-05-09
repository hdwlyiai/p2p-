<?php
namespace app\controllers;

use \system\framework\Controller;

class Recharge extends Controller
{
    public function index()
    {
        $this->view(['header', 'recharge', 'footer']);
    }

    public function check()
    {
        $this->load->model('Account');
        $this->Account->infoUpdate([
            'totalmoney[+]' => $_POST['recharge'],
            'usablemoney[+]' => $_POST['recharge'],
            'uid' => $_SESSION['user']['uid']
        ]);
        $this->view(['header', 'check', 'footer'], [
            'message' => '充值成功',
            'url' => site_url('personal/personal')
        ]);
    }
}
