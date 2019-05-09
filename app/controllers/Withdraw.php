<?php
namespace app\controllers;

use \system\framework\Controller;

class Withdraw extends Controller
{
    public function index()
    {
        $this->load->model('Account');
        $data = $this->Account->infoSelect($_SESSION['user']['uid']);
        $this->view(['header', 'withdraw', 'footer'], $data[0]);
    }

    //取款金额
    public function check()
    {
        $this->load->model('Account');
        $this->Account->infoUpdate([
            'totalmoney[-]' => $_POST['withdraw'],
            'usablemoney[-]' => $_POST['withdraw'],
            'uid' => $_SESSION['user']['uid']
        ]);
        $this->view(['header', 'check', 'footer'], [
            'message' => '取款成功',
            'url' => site_url('personal/personal')
        ]);
    }
}
