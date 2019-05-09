<?php
namespace app\controllers\mail;
use app\controllers\mail\PHPMailer\PHPMailer;
class Mail
{
    // SMTP服务器
    private $Host;
    // SMTP 用户名
    private $Username;
    // SMTP 密码
    private $Password;
    // 协议
    private $SMTPSecure;
    // 服务器端口
    private $Port;
    // 错误信息
    private $errorInfo;

    public function __construct($Host, $Username, $Password, $SMTPSecure, $Port)
    {
        $this->Host = $Host;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->SMTPSecure = $SMTPSecure;
        $this->Port = $Port;
    }

    public function send($name, $address, $subject, $body, $path = '')
    {
        $mail = new PHPMailer(true);
        try {
            $mail->CharSet = "UTF-8";
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = $this->Host;
            $mail->SMTPAuth = true;
            $mail->Username = $this->Username;
            $mail->Password = $this->Password;
            $mail->SMTPSecure = $this->SMTPSecure;
            $mail->Port = $this->Port;
            $mail->setFrom($this->Username, $name);
            $mail->addAddress($address);
            $mail->addReplyTo($this->Username, $name);
            if (file_exists($path)) {
                $mail->addAttachment($path);
            }
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AltBody = '邮箱不支持此邮件';
            $mail->send();
            return true;
        } catch (Exception $e) {
            $this->errorInfo = $mail->ErrorInfo;
            return false;
        }
    }

    public function getErrorInfo()
    {
        return $this->errorInfo;
    }
}
