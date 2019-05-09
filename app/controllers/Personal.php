<?php
namespace app\controllers;

use \system\framework\Controller;

class Personal extends Controller
{
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
        $this->load->model('Account');
        $data = $this->Account->infoSelect($_SESSION['user']['uid']);
        $this->view(['header', 'personal', 'footer'], $data[0]);
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

    public function borrowlist()
    {
        $this->view(['header', 'borrowlist', 'footer']);
    }

    // 借款数据接入
    public function borrowcheck()
    {
        $formData = $_POST;
        $formData['interest'] = $formData['interest'] / 100;
        $formData['uid'] = $_SESSION['user']['uid'];
        $this->load->model('Borrow');
        $this->Borrow->borrowInsert($formData);
        $this->view(['header', 'check', 'footer'], [
            'message' => '借款提交成功',
            'url' => site_url('invest')
        ]);
    }
}
