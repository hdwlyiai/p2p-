<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/index.min.css">
    <script src="/assets/js/jquery.min.js"> </script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <title>首页</title>
</head>

<body>
    <!-- 头部 -->
    <header class="mb-2">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
            <div class="container">
                <a class="navbar-brand" href="#">陆金所</a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-navicon fa-fw"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">您好，欢迎来到陆金所！</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">首页</a>
                        </li>
<?php if(!isset($_SESSION['user'])) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('account/login'); ?>">登录</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('account/register'); ?>">注册</a>
                        </li>
<?php } ?>
                    </ul>
<?php if(isset($_SESSION['user'])) {?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $_SESSION['user']['username']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('recharge'); ?>">账户充值</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('account/info'); ?>">个人中心</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('account/logout'); ?>">退出</a>
                        </li>
                    </ul>
<?php } ?>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-0">
            <div class="container">
                <img class="mr-3" src="/assets/img/logo.png" alt="">
                <img class="d-none d-lg-block" src="/assets/img/logointr.png" alt="">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>
<?php if(isset($_SESSION['user'])) {?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                我的账户
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('account/info'); ?>">个人中心</a>
                                <a class="dropdown-item" href="<?php echo site_url('invest'); ?>">我要投资</a>
                                <a class="dropdown-item" href="<?php echo site_url('borrow'); ?>">我要借款</a>
                                <a class="dropdown-item" href="<?php echo site_url('personal/personal'); ?>">我的账户</a>
                                <a class="dropdown-item" href="#">关于我们</a>
                            </div>
                        </li>
                    </ul>
<?php } ?>
                </div>
            </div>
        </nav>
    </header>
