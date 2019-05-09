<!-- 加载css样式 -->
<link rel="stylesheet" href="/dist/css/personal.min.css">
<!-- 内容 -->
<main class="container personal">
    <div class="row">
        <!-- 左 -->
        <div id="accordion" class="col-lg-3">
            <!-- 投资项目 -->
            <div class="card">
                <div class="card-header py-1" id="headingOne">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        投资项目
                    </button>
                    </h5>
                </div>
            </div>
            <!-- 借款项目 -->
            <div class="card">
                <div class="card-header py-1" id="headingTwo">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        借款项目
                    </button>
                    </h5>
                </div>
                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="loanitem">借款项目</a></li>
                            <li class="list-group-item"><a href="repayment">还款明细</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 我的账户 -->
            <div class="card">
            <div class="card-header py-1" id="headingThree">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    我的账户
                </button>
                </h5>
            </div>
            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="personal">账户信息</a></li>
                        <li class="list-group-item"><a href="realAuth">实名认证</a></li>
                        <!-- <li class="list-group-item"><a href="">银行卡管理</a></li>
                        <li class="list-group-item"><a href="">登陆记录</a></li> -->
                    </ul>
                </div>
            </div>
            </div>
            <!-- 资产详情 -->
            <div class="card">
                <div class="card-header py-1" id="headingFour">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        资产详情
                    </button>
                    </h5>
                </div>
                <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="running">账户流水</a></li>
                            <li class="list-group-item"><a href="rechargelist">充值明细</a></li>
                            <li class="list-group-item"><a href="cash">提现记录</a></li>
                            <!-- <li class="list-group-item"><a href="">收款明细</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 个人资料 -->
            <div class="card">
                <div class="card-header py-1" id="headingFive">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <a href="borrowlist">信用借款</a>
                    </button>
                    </h5>
                </div>
            </div>
        </div>
        <!-- 右 -->
        <div class="card px-4 py-3 col-lg-9">
            <!-- 个人信息 -->
            <div class="row">
                <div class="col-sm-4">
                    <img class="icon" src="/assets/img/head_icon.jpg" />
                </div>
                <div class="col-sm-8 card-body">
                    <p>昵&emsp;称：<?php echo $data['nickname']; ?></p>
                    <p>用户名：<?php echo $data['username']; ?></p>
                    <p>最后登录时间：<?php echo date("Y/m/d G:i:s", $data['lastlogintime']); ?></p>
                </div>
            </div>
            <!-- 金额 -->
            <div style="margin: 10px 2px;" class="row h5">
                <div class="col-sm-4">
                    总金额：<span class="text-primary"><?php echo $data['totalmoney']; ?>元</span>
                </div>
                <div class="col-sm-4">
                    可用金额：<span class="text-primary"><?php echo $data['usablemoney']; ?>元</span>
                </div>
                <div class="col-sm-4">
                    冻结金额：<span class="text-primary"><?php echo $data['blockedmoney']; ?>元</span>
                </div>
            </div>
            <!-- 按钮 -->
            <div class="my-5" style="text-align: center;width: 400px;margin:30px auto 0px auto;">
                <a class="btn btn-primary btn-lg" href="<?php echo site_url('recharge'); ?>">账户充值</a>
                <a class="btn btn-danger btn-lg" href="<?php echo site_url('Withdraw'); ?>">账户提现</a>
            </div>
            <!-- 认证 -->
            <div class="el-account-info">
                <div class="row">
                    <!-- 实名认证 -->
                    <div class="col-sm-4">
                        <div class="el-accoun-auth">
                            <div class="el-accoun-auth-left">
                                <img src="/assets/img/shiming.png" />
                            </div>
                            <div class="el-accoun-auth-right">
                                <h5>实名认证</h5>
                                <p>
                                    <!--
                                        已认证
                                        <a href="realAuth.html">查看</a>
                                    -->
                                        未认证
                                        <a href="realAuth.html">马上认证</a>

                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <p class="info">实名认证之后才能在平台投资</p>
                        </div>
                    </div>
                    <!-- 手机认证 -->
                    <div class="col-sm-4">
                        <div class="el-accoun-auth">
                            <div class="el-accoun-auth-left">
                                <img src="/assets/img/shouji.jpg" />
                            </div>
                            <div class="el-accoun-auth-right">
                                <h5>手机认证</h5>
                                <p>
                                    已认证
                                    <a href="#">查看</a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <p class="info">可以收到系统操作信息,并增加使用安全性</p>
                        </div>
                    </div>
                    <!-- 邮箱认证 -->
                    <div class="col-sm-4">
                        <div class="el-accoun-auth">
                            <div class="el-accoun-auth-left">
                                <img src="/assets/img/youxiang.jpg" />
                            </div>
                            <div class="el-accoun-auth-right">
                                <h5>邮箱认证</h5>
<?php if(!empty($data['email'])) { ?>
                                <p><?php echo $data['email']; ?></p>
<?php } else { ?>
                                <a href="<?PhP echo site_url('account/email'); ?>" class="text-primary">点击绑定</a>
<?php } ?>
                            </div>
                            <div class="clearfix"></div>
                            <p class="info">您可以设置邮箱来接收重要信息</p>
                        </div>
                    </div>
                </div>
                <!-- VIP会员 -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="el-accoun-auth">
                            <div class="el-accoun-auth-left">
                                <img src="/assets/img/baozhan.jpg" />
                            </div>
                            <div class="el-accoun-auth-right">
                                <h5>VIP会员</h5>
                                <p>
                                    普通用户
                                    <a href="#">查看</a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <p class="info">VIP会员，让你更快捷的投资</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- 加载js -->
<script src="/"></script>
