<?php
namespace app\controllers;

use \system\framework\Controller;

class Account extends Controller
{
    public function login()
    {
        $this->view(['header', 'login', 'footer']);
    }
    public function logout()
    {
        // 更新上次登陆时间
        $this->load->model('Account');
        $this->Account->infoUpdate([
            'uid' => $_SESSION['user']['uid'],
            'lastlogintime' => time()
        ]);
        // 注销
        unset($_SESSION["user"]);
        $this->view(['header', 'check', 'footer'],[
            "message" => "退出成功",
            "url" => site_url("account/login")
        ]);
    }
    public function logincheck()
    {
        $this->load->model('Account');
        $data = $this->Account->loginSelect($_POST);
        if(!empty($data)){
            $_SESSION["user"]=$data[0];
            $this->view(['header', 'check', 'footer'],[
                "message" => "登陆成功",
                "url" => site_url()
            ]);
        }else{
            $this->view(['header', 'check', 'footer'],[
                "message" => "登陆失败",
                "url" => site_url('account/login')
            ]);
        }
    }
    // 修改个人信息页面
    public function editinfo()
    {
        $this->load->model('Account');
        $data = $this->Account->infoSelect($_SESSION['user']['uid']);
        $this->view(['header', 'editinfo', 'footer'], $data[0]);
    }

    // 修改个人信息验证
    public function editcheck()
    {
        $this->load->model('Account');
        $this->Account->infoUpdate($_POST);
        $_SESSION['user']['username'] = $_POST['username'];
        $this->view(['header', 'check', 'footer'],[
            "message" => "修改成功",
            "url" => site_url('account/info')
        ]);
    }

    public function register()
    {
        $this->view(['header', 'register', 'footer']);
    }
    // 注册验证
    public function registercheck()
    {
        if (empty($_POST['username']) && empty($_POST['password'])) {
            $this->view(['header', 'check', 'footer'],[
                "message" => "用户名和密码不能为空",
                "url" => site_url("account/register")
            ]);
        }
        $this->load->model('Account');
        $data = $this->Account->registerInsert($_POST);
        $this->view(['header', 'check', 'footer'],[
            "message" => "注册成功",
            "url" => site_url("account/login")
        ]);
    }

    // 个人信息
    public function info()
    {
        $this->load->model('Account');
        $data = $this->Account->infoSelect($_SESSION['user']['uid']);
        $this->view(['header', 'info', 'footer'], $data[0]);
    }

    public function email()
    {
        $this->view(['header', 'checkemail', 'footer']);
    }

    public function sendemail()
    {
        $mail = new \app\controllers\mail\Mail('smtp.qq.com', '3855680@qq.com', 'vggwsmhxmsupcbde', 'ssl', 465);
        $code = rand(10000, 99999);
        $_SESSION['code'] = $code;
        $mail->send('namecho', $_GET['email'], 'P2P验证邮箱', '验证码：' . $code);
    }

    public function checkemail()
    {
        if ($_POST['code'] == $_SESSION['code']) {
            $this->load->model('Account');
            $this->Account->infoUpdate([
                'uid' => $_SESSION['user']['uid'],
                'email' => $_POST['email']
            ]);
            $this->view(['header', 'check', 'footer'], [
                'message' => '邮箱绑定成功',
                'url' => site_url('personal/personal')
            ]);
        } else {
            $this->view(['header', 'check', 'footer'], [
                'message' => '验证码错误',
                'url' => site_url('personal/personal')
            ]);
        }
    }

}
