<?php
namespace app\controllers;

use \system\framework\Controller;

class Loan extends Controller
{
    public function info($bid)
    {
        $this->view(['header', 'loan', 'footer'], [
            'bid' => $bid[0]
        ]);
    }
    //投资判断
    public function check()
    {
        if(($_SESSION['user']['usablemoney'] - $_POST['loan']) > 0){
            $this->view(['header', 'check', 'footer'],[
                "message" => "余额不足，请充值！！",
                "url" => site_url('personal/personal')
            ]);
        }else{
            $this->load->model('Borrow');
            $formData = [
                'bid' => $_POST['bid'],
                'loan[+]' => $_POST['loan']
            ];
            $this->Borrow->borrowUpdate($formData);
            $this->load->model('Account');
            $this->Account->infoUpdate([
                'uid' => $_SESSION['user']['uid'],
                'blockedmoney[+]' => $_POST['loan'],
                'usablemoney[-]' => $_POST['loan']
            ]);
            $this->view(['header', 'check', 'footer'],[
                "message" => "投资成功",
                "url" => site_url('invest')
            ]);
        };
    }
}
